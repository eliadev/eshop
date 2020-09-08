<?php

namespace App\Http\Controllers\Admin;

use Auth;
use DB;
use App\User;
use App\Order;
use App\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usersCount =  User::whereDoesntHave('permissions')->where('is_superadmin', 0)->count();
        $ordersCount = Order::count();
        $ordersSum = number_format( Order::sum('grand_total'), 2, '.', ",");
        $orderItemsSum = OrderItem::sum('quantity');

        return view('admin.home', [
            'usersCount' => $usersCount,
            'ordersCount' => $ordersCount,
            'ordersSum' => $ordersSum,
            'orderItemsSum' => $orderItemsSum,
        ]);
    }
}
