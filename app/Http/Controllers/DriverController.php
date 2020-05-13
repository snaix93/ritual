<?php


namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;


class DriverController extends Controller

{

    public function index()

    {
        $orders = Order::whereDriver(1)->whereDone(0)->orderBy('delivery_date', 'asc')->paginate(11);
        return view('driver.index', compact('orders'));

    }

    public function new(Request $request){
        $order = Order::find($request->order);
        $order->update(['driver' => 1]);
        return redirect()->back();
    }

    public function destroy(Order $order)

    {

        $request = request();
//      TODO : check wtf is happening here

        if(!empty($request->orders)){

            if($request->orders){

                foreach($request->orders as $order)

                {

                    Order::where('id', $order)->delete();

                }

            }

        }



        return redirect()->back();

    }

    public function orderDone(){
        $order = Order::find(request()->order);
        $order->update(['done' => 1]);
        return redirect()->back();
    }

}

