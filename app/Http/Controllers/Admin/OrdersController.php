<?php



namespace App\Http\Controllers\Admin;



use App\Conversion;
use App\Http\Controllers\Controller;

use App\Order;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;



class OrdersController extends Controller

{

    public function index(){
        $url = $_SERVER['SERVER_NAME'];
        $orders = Order::orderBy('id', 'desc')->paginate(10);
        return view('admin.orders.index', compact('orders', 'url'));
    }

    public function destroy(Order $order, Request $request){
//        TODO : check wtf is happening here
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

    public function orderView(Order $order){
        return view('admin.orders.single_order', compact('order'));
    }


    public function setProfit(Request $request){

        $order = Order::find($request->order);
        $order->update(['profit' =>$request->profit]);
        return redirect()->back();
    }

    public function deleteSingle(Order $order, Request $request)
    {

        $order = Order::find($request->order);
        Conversion::whereOrderId($order->id)->delete();
        $order->portfolio->update(['ranking' => $order->portfolio->ranking - 0.5]);
        $order->update(['available' => 0, 'done' => 1]);
        return redirect()->back();

    }

    public function edit(Order $order, Request $request)
    {
        return view('admin.orders.edit', compact('order'));

    }
    public function update(Order $order, Request $request)
    {
       $order->update($request->all());
        return redirect()->route('comenzi.index');

    }

//    public function downloadOrder(Request $request)
//    {
//        $data = ['test'];
//        $pdf = PDF::loadView('mail_template.coupon', $data);
//        return PDF::loadFile(public_path().'/coupon.html')->save('/path-to/my_stored_file.pdf')->stream('download.pdf');
//        return $pdf->stream();
//        return $pdf->download('mail_template.coupon.pdf');
//
//        $pdf = \App::make('dompdf.wrapper');
//        $pdf->loadHTML($this->convert_customer_data_to_html());
//        return $pdf->stream();
//    }

    public function downloadOrder()
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert_customer_data_to_html());
        return $pdf->download();

        // This  $data array will be passed to our PDF blade
        $data = [
            'title' => 'First PDF for Medium',
            'heading' => 'Hello from 99Points.info',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.'
            ];

        $pdf = PDF::loadView('pdf_view', $data);
        $pdf->loadHtml(html_entity_decode($data));
        return $pdf->download('medium.pdf');
    }

    public function convert_customer_data_to_html()
    {

            $output = '
        <div class="cls_002" align="right"><span class="cls_002">Date: </span></div>
        <div class="cls_002"><span class="cls_002">Best Online Traffic School</span></div>
        <div class="cls_002"><span class="cls_002">2130 Huntington Dr</span></div>
        <div class="cls_002"><span class="cls_002">Suite 203</span></div>
        <div class="cls_002"><span class="cls_002">South Pasadena CA 91030</span></div><br>
        <div class="cls_002"><span class="cls_002">TVS License: E1314</span></div>
        <div class="cls_002"><span class="cls_002">Modality: Online</span></div>
         ';


        $output .= '</table>';
        return $output;

    }

}

