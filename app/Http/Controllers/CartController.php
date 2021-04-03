<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;

class CartController extends Controller
{
    //
    public function add(Product $product,Request $request){


        Cart::add($product,$request->quantity);


        return redirect()->route('home');
    }
    public function addOne(Product $product,Request $request){


        Cart::add($product,1);


        return redirect()->route('home');
    }

    public function view(){

        $carts = Cart::content();
        $cart_total = Cart::total();
        $cart_subtotal = Cart::subtotal();

        return view('shoppingcart',[
            'carts'=>$carts,
            'cart_total'=>$cart_total,
            'cart_subtotal'=>$cart_subtotal,
        ]);
    }
    public function bill(){

        $carts = Cart::content();
        $cart_total = Cart::total();
        $cart_subtotal = Cart::subtotal();

        return view('shoppingcart',[
            'carts'=>$carts,
            'cart_total'=>$cart_total,
            'cart_subtotal'=>$cart_subtotal,
        ]);

    }

    public function purchase(Request $request){
$cart_total = intval($request->amount);
        // Create new invoice.
        $invoice = (new Invoice)->amount($cart_total);
        $invoice->detail(['Mobile'=>'09358641637']);
// Purchase and pay the given invoice.
// You should use return statement to redirect user to the bank page.
        return Payment::purchase($invoice, function($driver, $transactionId) {
            // Store transactionId in database as we need it to verify payment in the future.
        })->pay()->render();


    }
public function verify($transaction_id)
{
    // You need to verify the payment to ensure the invoice has been paid successfully.
// We use transaction id to verify payments
// It is a good practice to add invoice amount as well.
    try {
        $receipt = Payment::amount(1000)->transactionId($transaction_id)->verify();

        // You can show payment referenceId to the user.
        echo $receipt->getReferenceId();

    } catch (InvalidPaymentException $exception) {
        /**
         * when payment is not verified, it will throw an exception.
         * We can catch the exception to handle invalid payments.
         * getMessage method, returns a suitable message that can be used in user interface.
         **/
        echo $exception->getMessage();
    }
}
}
