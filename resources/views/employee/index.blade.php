@extends('admin.layouts.content')@section('content')
                                     {{--{{ dd(session()->getId()) }}--}}
    <style>
        .list-group-item {
            font-size: 25px;
        }
    </style>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            </div> @foreach($orders as $order) @if(!empty($order->portfolio->name))
                <div class="card col-md-6"> <a href="/{{strtolower ( $order->portfolio->category_id)}}/{{ $order->portfolio->slug  }}">                        <img class="card-img-top" style="max-width: 220px; max-height: 220px" src="{{ $order->portfolio->photo->file }}" alt="Card image cap">
                    <ul class="list-group">
                        <li class="list-group-item">Id: <strong> {{ $order->portfolio->price2}}   {{ $order->portfolio->id}}   </strong></li>
                        <li class="list-group-item">Редактировать<a href="{{  route('admin.orders.edit', ['order' => $order->id] )}}"><button class="btn btn-info"><i class="fa fa-times"></i></button></a></li>
                        <li class="list-group-item">Название: {{ $order->portfolio->name }} </li>
                        <li class="list-group-item">Цена: {{ $order->price }} </li>
                        <li class="list-group-item">Размер: {{ $order->size }}</li>
                        <li class="list-group-item">День Доставки: {{ $order->delivery_date }}</li>
                        <li class="list-group-item">Сообщение: {{ $order->message}}</li>
                        <li class="list-group-item"><a href="https://waze.com/ul?q={{ $order->r_address}}"> Адрес {{ $order->r_address}}</a></li>
                        <li class="list-group-item"><a href="tel:{{ $order->r_number}}"> {{ $order->r_name }} {{ $order->r_number}}</a></li>
                        <li class="list-group-item">
                            <a href="{{ route('order.done', ['order' => $order->id]) }}">
                                <button class="btn-lg btn-success">Done</button>
                            </a>
{{--                            @if($order->driver == 0)--}}
{{--                            <a href="{{ route('driver.new', ['order' => $order->id]) }}">--}}
{{--                                <button class="btn-lg btn-primary">Driver</button>--}}
{{--                            </a>--}}
{{--                            @endif--}}
                        </li>
                    </ul>
                </div> @endif @endforeach </div>
    </div>
    <script>
        $("#check-all").click(function() {
            console.log('zz');
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
    </script>@endsection
