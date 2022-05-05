<?php

namespace App\Http\Controllers;

use App\Order;
use App\Medicine;
use App\StoreUser;

use Illuminate\Http\Request;
use Carbon\Carbon;

class Sales extends Controller
{
    //getting sales statistics
    public function index(){
        $orders = Order::all();
        $monthly_sale = Order::select('id', 'created_at')->get()->groupBy(function($monthly_sale){
            return Carbon::parse($monthly_sale)->format('M');
        });

        $months = [];
        $month_count = [];
        foreach($monthly_sale as $month=> $values){
            $month[] = $month;
            $month_count[] = count($values);
        }
        return view('sales.index', compact('orders', 'month', 'month_count'));
    }

    
    public function monthlyStatistics(){

        return "of";
    }
}
