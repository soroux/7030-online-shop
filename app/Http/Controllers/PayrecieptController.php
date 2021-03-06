<?php

namespace App\Http\Controllers;

use App\Models\payreciept;
use App\Models\Product;
use App\Models\Website_design;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;

class PayrecieptController extends Controller
{
    //




    public function purchase(Request $request){

        $input = $request->validate([
            'pay_name'=>'required',
            'pay_lastname'=>'required',
            'pay_phone'=>'required',
            'ship_name'=>'required',
            'ship_lastname'=>'required',
            'ship_city'=>'required',
            'ship_address'=>'required',
            'ship_phone'=>'required',
            'ship_postcode'=>'required',

        ]);
        $cart_total = intval($request->amount);
        // Create new invoice.
        $invoice = (new Invoice)->amount($cart_total);
        $invoice->detail([
            'Mobile'=>$request->pay_phone,
            'Name'=>$request->pay_name,
            'Last_name'=>$request->pay_last_name,
            'Email'=>$request->pay_email ]);
// Purchase and pay the given invoice.
// You should use return statement to redirect user to the bank page.

        $input['pay_email'] = $request->pay_email;

        $input['ship_email'] = $request->ship_email;
        $input['ship_message']= $request->ship_message;
        $input['amount']= $cart_total;
        $input['items']= $request->items;
        $input['uuid']=$invoice->getUuid();

        $payreciept = new payreciept();
        $payreciept->create($input);
       $carts = Cart::content();

       foreach ($carts as $cart){
           $product = Product::find($cart->id);
           if ($product->inventory < $cart->qty){
               $request->session()->flash('product-inventory', 'محصول مورد نظر تمام شد');
               return redirect()->route('view.cart');
           }
       }
//
        return Payment::purchase($invoice, function($driver, $transactionId) use ($invoice) {

$payreciept = payreciept::select()->where('uuid',[$invoice->getuuid()]);
$insertarray = [
    'transaction_id' => $invoice->getTransactionId(),
'pvia' =>$invoice->getDriver(),
];

$payreciept->update($insertarray);
        })->pay()->render();


    }
    public function verify()
    {
        $transaction_id = $_GET['Authority'];
$bill = payreciept::where('transaction_id',$transaction_id)->firstOrFail();

$amount =$bill->amount;
////        // You need to verify the payment to ensure the invoice has been paid successfully.
////// We use transaction id to verify payments
////// It is a good practice to add invoice amount as well.
        try {
            $receipt = Payment::amount($amount)->transactionId($transaction_id)->verify();

            // You can show payment referenceId to the user.
            $bill->refrenceID =  $receipt->getReferenceId();
            $bill->status = "done";
            $bill->update();



            return redirect()->route('verified.purchase',$bill);


        } catch (InvalidPaymentException $exception) {
            /**
             * when payment is not verified, it will throw an exception.
             * We can catch the exception to handle invalid payments.
             * getMessage method, returns a suitable message that can be used in user interface.
             **/
            $bill->error = $exception->getMessage();
            $bill->update();

            return redirect()->route('verified.purchase',$bill);

        }


     }

     public function verified($bill){
         $bill = payreciept::where('id',$bill)->firstOrFail();
         if ($bill->transaction_id && !Cart::restore($bill->transaction_id)) {
             Cart::store($bill->transaction_id);
         }
         $paiedcarts = Cart::content();
foreach ($paiedcarts as $paiedcart){
    Product::where('id',$paiedcart->id)->decrement('inventory',$paiedcart->qty);
}
          Cart::destroy();
         $carts = Cart::content();
         $cart_total = Cart::total();
         $products = Product::all();

         return view('purchase-verified',[
             'products'=>$products,
'paiedcarts'=>$paiedcarts,
             'carts'=>$carts,
             'cart_total'=>$cart_total,
         'bill'=>$bill]);
     }








}
