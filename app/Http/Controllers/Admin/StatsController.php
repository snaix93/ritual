<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class StatsController extends Controller

{

    public function index(Request $request)

    {

        $tags = Tag::paginate(10);

        return view('admin.stats.index', compact('tags'));

    }

    public function stats(Request $request)

    {
        $from = date($request->from);
        $to = date($request->to);
        $from = date("Y-m-d", strtotime($from));
        $to = date("Y-m-d", strtotime($to));
        $stats = DB::select(DB::raw("SELECT category_id, SUM(orders.price) as price, SUM(orders.profit) as profit, COUNT(orders.id) as count FROM orders INNER join portfolios ON portfolios.id = orders.order_id WHERE (orders.created_at BETWEEN '$from' AND '$to') AND orders.available = 1 GROUP BY portfolios.category_id"));

        return view('admin.stats.index', compact('stats'));

    }
}
