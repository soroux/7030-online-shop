<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\payreciept;
use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use JavaScript;

class DashboardController extends Controller
{
    //

    public function index(){

        $receiptsAmounts_m = payreciept::where('status','done')->whereBetween('created_at',[Carbon::now()->startOfMonth(),Carbon::now()->endOfMonth()])->get('amount')->sum('amount');
        $receiptsAmounts_y = payreciept::where('status','done')->whereBetween('created_at',[Carbon::now()->startOfYear(),Carbon::now()->endOfYear()])->get('amount')->sum('amount');
        $pendingReviews = Review::where('status',null)->count();
        $pendingComments = Comment::where('status',null)->count();
        $totalsale = payreciept::where('status','done')->get('amount')->sum('amount');


        $receiptsAmounts_fa = payreciept::where('status','done')->whereYear('created_at',date('Y'))->whereMonth('created_at',1)->get('amount')->sum('amount');
        $receiptsAmounts_or = payreciept::where('status','done')->whereYear('created_at',date('Y'))->whereMonth('created_at',2)->get('amount')->sum('amount');
        $receiptsAmounts_kh = payreciept::where('status','done')->whereYear('created_at',date('Y'))->whereMonth('created_at',3)->get('amount')->sum('amount');
        $receiptsAmounts_ti = payreciept::where('status','done')->whereYear('created_at',date('Y'))->whereMonth('created_at',4)->get('amount')->sum('amount');
        $receiptsAmounts_mo = payreciept::where('status','done')->whereYear('created_at',date('Y'))->whereMonth('created_at',5)->get('amount')->sum('amount');
        $receiptsAmounts_sh = payreciept::where('status','done')->whereYear('created_at',date('Y'))->whereMonth('created_at',6)->get('amount')->sum('amount');
        $receiptsAmounts_me = payreciept::where('status','done')->whereYear('created_at',date('Y'))->whereMonth('created_at',7)->get('amount')->sum('amount');
        $receiptsAmounts_ab = payreciept::where('status','done')->whereYear('created_at',date('Y'))->whereMonth('created_at',8)->get('amount')->sum('amount');
        $receiptsAmounts_az = payreciept::where('status','done')->whereYear('created_at',date('Y'))->whereMonth('created_at',9)->get('amount')->sum('amount');
        $receiptsAmounts_de = payreciept::where('status','done')->whereYear('created_at',date('Y'))->whereMonth('created_at',10)->get('amount')->sum('amount');
        $receiptsAmounts_ba = payreciept::where('status','done')->whereYear('created_at',date('Y'))->whereMonth('created_at',11)->get('amount')->sum('amount');
        $receiptsAmounts_es = payreciept::where('status','done')->whereYear('created_at',date('Y'))->whereMonth('created_at',12)->get('amount')->sum('amount');



        $receiptsAmountsCity_karaj =     ((payreciept::where('status','done')->where('ship_city','کرج')->get('amount')->sum('amount'))/$totalsale)*100;
        $receiptsAmountsCity_amol = ((payreciept::where('status','done')->where('ship_city','آمل')->get('amount')->sum('amount'))/$totalsale)*100;
        $receiptsAmountsCity_tehran =         ((payreciept::where('status','done')->where('ship_city','تهران')->get('amount')->sum('amount'))/$totalsale)*100;
        $receiptsAmountsCity_babol = ((payreciept::where('status','done')->where('ship_city','بابل')->get('amount')->sum('amount'))/$totalsale)*100;
$oders=100-($receiptsAmountsCity_amol+$receiptsAmountsCity_karaj+$receiptsAmountsCity_tehran+$receiptsAmountsCity_babol);
        JavaScript::put([
           'receiptsAmounts_fa'=>$receiptsAmounts_fa,
            'receiptsAmounts_or'=>$receiptsAmounts_or,
            'receiptsAmounts_kh'=>$receiptsAmounts_kh,
            'receiptsAmounts_ti'=>$receiptsAmounts_ti,
            'receiptsAmounts_mo'=>$receiptsAmounts_mo,
            'receiptsAmounts_sh'=>$receiptsAmounts_sh,
            'receiptsAmounts_me'=>$receiptsAmounts_me,
            'receiptsAmounts_ab'=>$receiptsAmounts_ab,
            'receiptsAmounts_az'=>$receiptsAmounts_az,
            'receiptsAmounts_de'=>$receiptsAmounts_de,
            'receiptsAmounts_ba'=>$receiptsAmounts_ba,
            'receiptsAmounts_es'=>$receiptsAmounts_es,
            'receiptsAmountsCity_karaj'=>$receiptsAmountsCity_karaj,
            'receiptsAmountsCity_amol'=>$receiptsAmountsCity_amol,
            'receiptsAmountsCity_tehran'=>$receiptsAmountsCity_tehran,
            'receiptsAmountsCity_babol'=>$receiptsAmountsCity_babol,
            'receiptsAmountsCity_oders'=>$oders,

       ]);






        return View::make('admin.dashboard',[
            'receiptsAmounts_m'=>$receiptsAmounts_m,
            'receiptsAmounts_y'=>$receiptsAmounts_y,
            'pendingReviews'=>$pendingReviews,
            'pendingComments'=>$pendingComments,

        ]);
    }


    public function sales(){
$receipts = payreciept::all();
        return view('admin.dashboard-sales',[
            'receipts'=>$receipts,
        ]);
    }

    public function saleView(payreciept $sale){
        return view('admin.dashboard-sale-details',[
            'receiptContent'=>$sale,

        ]);
    }
}
