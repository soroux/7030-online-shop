<?php

namespace App\Http\Controllers;

use App\Models\payreciept;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Mail;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;
use \Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    //
    public function add(Product $product,Request $request)
    {
        if ($product->inventory <= 0) {
            $request->session()->flash('product-inventory', 'محصول مورد نظر در انبار موجود نیست');
            return redirect()->route('home');
        } elseif ($product->inventory < $request->quantity) {
            $request->session()->flash('product-inventory', 'در انبار این تعداد موجود نیست');
            return redirect()->route('home');

        } elseif ($product->inventory >= $request->quantity) {

            Cart::add($product, $request->quantity);
            $request->session()->flash('product', 'محصول به سبد خرید اضافه شد');

            return redirect()->route('home');
        }
    }
    public function addShop(Product $product,Request $request)
    {
        if ($product->inventory <= 0) {
            $request->session()->flash('product-inventory', 'محصول مورد نظر در انبار موجود نیست');
            return redirect()->route('shop');
        } elseif ($product->inventory < $request->quantity) {
            $request->session()->flash('product-inventory', 'در انبار این تعداد موجود نیست');
            return redirect()->route('shop');

        } elseif ($product->inventory >= $request->quantity) {
            Cart::add($product, $request->quantity);
            $request->session()->flash('product', 'محصول به سبد خرید اضافه شد');

            return redirect()->route('shop');
        }
    }
    public function addOne(Product $product,Request $request){


        if ($product->inventory <= 0) {
            $request->session()->flash('product-inventory', 'محصول مورد نظر در انبار موجود نیست');
            return redirect()->route('home');
        }  else{

            Cart::add($product, 1);
            $request->session()->flash('product', 'محصول به سبد خرید اضافه شد');

            return redirect()->route('home');
        }

    }
    public function addOneShop(Product $product,Request $request){


        if ($product->inventory <= 0) {
            $request->session()->flash('product-inventory', 'محصول مورد نظر در انبار موجود نیست');
            return redirect()->route('shop');
        }  else{
            Cart::add($product, 1);
            $request->session()->flash('product', 'محصول به سبد خرید اضافه شد');

            return redirect()->route('shop');
        }

    }


    public function addDetails(Product $product,Request $request)
    {
        if ($product->inventory <= 0) {
            $request->session()->flash('product-inventory', 'محصول مورد نظر در انبار موجود نیست');
            return redirect()->route('view',$product);
        } elseif ($product->inventory < $request->quantity) {
            $request->session()->flash('product-inventory', 'در انبار این تعداد موجود نیست');
            return redirect()->route('view',$product);

        } elseif ($product->inventory >= $request->quantity) {

            Cart::add($product, $request->quantity);
            $request->session()->flash('product', 'محصول به سبد خرید اضافه شد');

            return redirect()->route('view',$product);
        }
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
    public function remove($cart){
        Cart::remove($cart);


        return redirect()->route('view.cart');
    }

    public function update(Request $request){
$product = Product::find($request->product_id);
        if ($product->inventory <= 0) {
            $request->session()->flash('product-inventory', 'محصول مورد نظر در انبار موجود نیست');
            return redirect()->route('view.cart');

        } elseif ($product->inventory < $request->quantity) {
            $request->session()->flash('product-inventory', 'در انبار این تعداد موجود نیست');
            return redirect()->route('view.cart');

        } elseif ($product->inventory >= $request->quantity) {

            Cart::update($request->id,$request->quantity);
            $request->session()->flash('product', 'محصول به سبد خرید اضافه شد');

            return redirect()->route('view.cart');
        }



    }

    public function shipInfo(){
        $carts = Cart::content();
        $cart_total = Cart::total();
        $cart_subtotal = Cart::subtotal();

        return view('shipping-information',[
            'carts'=>$carts,
            'cart_total'=>$cart_total,
            'cart_subtotal'=>$cart_subtotal,
        ]);

    }



    public function sendBill(payreciept $bill){
      Cart::restore($bill->transaction_id);



$input['title'] = "رسید پرداخت فروشگاه 7030";
        $input['name'] = $bill->pay_name;
$input['carts'] = Cart::content();
$input['date'] = $bill->created_at;
$input['referenceId'] = $bill->refrenceID;
$input['transaction_id'] = $bill->transaction_id;
      $input['cart_total'] = Cart::total();
        $input['email'] = $bill->pay_email;


        Mail::send('email-bill',$input,function ($message) use ($bill){
            $message->to($bill->pay_email)->subject('7030 فروشگاه قهوه');
        });

        return back();

    }

    public function sendShip(payreciept $bill){



        $input['title'] = " فروشگاه 7030";
        $input['name'] = $bill->ship_name;
        $input['carts'] = Cart::content();
        $input['date'] = $bill->created_at;
        $input['email'] = $bill->ship_email;


        Mail::send('email-ship',$input,function ($message,$bill){
            $message->to($bill->ship_email)->subject('7030 فروشگاه قهوه');
        });

        return back();

    }


}
