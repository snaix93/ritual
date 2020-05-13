<?php


namespace App\Http\Controllers;
use Mail;
use App\Order;
use Illuminate\Http\Request;


class EmployeeController extends Controller

{

    public function index(Request $request)

    {
        $orderBy = empty($request->order) ? 'delivery_date' : $request->order;
        $orderBy = empty($request->order) ? 'id' : $request->order;
        $orders = Order::whereDone(0)->orderBy($orderBy, 'desc')->paginate(50);
        return view('employee.index', compact('orders'));
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

    public function orderConfirm(Request $request){
        $order = Order::find(request()->order);
        $email = $order->b_email;
        if(!empty($email)){
            $portfolio = $order->portfolio;
            $image = request()->getHttpHost() . '/' . $portfolio->photo->file;
            $name = $portfolio->name;
            $description = $portfolio->description;
            $link = request()->getHttpHost() . '/' . $portfolio->category->name . '/' . ($slug = $portfolio->slug);
            $product = ['image' => $image, 'name' => $name, 'description' => $description, 'link' => $link, 'order' => $order];

            Mail::send('mail_template.confirmation_email', $product, function($message) use($image, $name, $description, $link, $email, $order)
            {
                $message->from('noreply@buchetto.ro', 'Buchetto');
                $message->to($email)->subject('Comanda cu numarul ' . ($order->id + 10000) . ' a fost livrata.');

            });
            dd('sent');
        }

    }

}

