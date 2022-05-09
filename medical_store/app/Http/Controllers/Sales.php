<?php

namespace App\Http\Controllers;

use App\Order;
use App\Medicine;
use App\StoreUser;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class Sales extends Controller
{
    //getting sales statistics
    public function index(){

        return view('sales.index');
    }

    // check report 
    public function checkReport(Request $request){
        //condtions for 3 cases
        if ($request->date){
            //date logic
            // $date = $request->date;
            $date = date('Y-m-d', strtotime($request->date));
            $date .= " 00.00.00"; 
            $orders = DB::table('orders')->where('created_at', $date)->get();

            return view('sales.dateResult', compact('date', 'orders'));
        }
        else if($request->month && $request->year){
            //month logic
            $month = $request->month;
            $year = $request->year;
            if ($month=='January'){
                $start_date = $year.'-01-'.'00'.' 00.00.00.00';
                $end_date = $year.'-01-'.'31'.' 00.00.00.00';
            }elseif($month=='February'){
                $start_date = $year.'-02-'.'00'.' 00.00.00.00';
                $end_date = $year.'-02-'.'29'.' 00.00.00.00';
            }elseif($month=='March'){
                $start_date = $year.'-03-'.'00'.' 00.00.00.00';
                $end_date = $year.'-03-'.'31'.' 00.00.00.00';
            }elseif($month=='April'){
                $start_date = $year.'-04-'.'00'.' 00.00.00.00';
                $end_date = $year.'-04-'.'30'.' 00.00.00.00';
            }elseif($month=='May'){
                $start_date = $year.'-05-'.'00'.' 00.00.00.00';
                $end_date = $year.'-05-'.'31'.' 00.00.00.00';
            }elseif($month=='June'){
                $start_date = $year.'-06-'.'00'.' 00.00.00.00';
                $end_date = $year.'-06-'.'30'.' 00.00.00.00';
            }elseif($month=='July'){
                $start_date = $year.'-07-'.'00'.' 00.00.00.00';
                $end_date = $year.'-07-'.'31'.' 00.00.00.00';
            }elseif($month=='August'){
                $start_date = $year.'-08-'.'00'.' 00.00.00.00';
                $end_date = $year.'-08-'.'31'.' 00.00.00.00';
            }elseif($month=='September'){
                $start_date = $year.'-09-'.'00'.' 00.00.00.00';
                $end_date = $year.'-09-'.'30'.' 00.00.00.00';
            }elseif($month=='October'){
                $start_date = $year.'-10-'.'00'.' 00.00.00.00';
                $end_date = $year.'-10-'.'31'.' 00.00.00.00';
            }elseif($month=='November'){
                $start_date = $year.'-11-'.'00'.' 00.00.00.00';
                $end_date = $year.'-11-'.'30'.' 00.00.00.00';
            }else{
                $start_date = $year.'-12-'.'00'.' 00.00.00.00';
                $end_date = $year.'-12-'.'31'.' 00.00.00.00';
            }

            $orders = DB::table('orders')->whereBetween('created_at', [$start_date, $end_date])->get();
            return view('sales.dateResult', compact('month', 'year', 'orders'));
        }
        else{
            // year logic
            $year = $request->year;
            $start_date = $year.'-01-'.'00'.' 00.00.00.00';
            $end_date = $year.'-12-'.'31'.' 00.00.00.00';

            $orders = DB::table('orders')->whereBetween('created_at', [$start_date, $end_date])->get();
            return view('sales.dateResult', compact('year', 'orders'));
        }

    }
     
}
