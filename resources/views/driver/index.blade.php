@extends('admin.layouts.content')@section('content')
    <style>
        .list-group-item {
            font-size: 25px;
        }
    </style>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Table design <small>Custom design</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a> </li>
                            <li><a href="#">Settings 2</a> </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
                </ul>
                <div class="clearfix"></div>
            </div> @foreach($orders as $order) @if(!empty($order->portfolio->name))
                <div class="card col-md-4"> <a href="{{strtolower ( $order->portfolio->category_id)}}/{{ $order->portfolio->slug  }}">                        <img class="card-img-top" style="max-width: 440px; max-height: 300px" src="{{ $order->portfolio->photo->file }}" alt="Card image cap">                        </a>
                    <ul class="list-group">
                        <li class="list-group-item">Name: {{ $order->portfolio->name }} <strong>{{ $order->price }} </strong> @if(!empty($order->portfolio->flower->value)){{ $order->price - ($order->portfolio->flower->value * $order->flow_amount + $order->portfolio->expenses) }}@endif</li>
                        <li class="list-group-item">Day: {{ $order->delivery_date }}</li>
                        <li class="list-group-item">{{ $order->delivery_range}}</li>
                        <li class="list-group-item">ID Produs: {{ $order->id}}</li>
                        <li class="list-group-item">{{ $order->flow_amount}}</li> @if($order->bouquet_type == 1)
                            <li class="list-group-item">Small {{ $order->portfolio->amount }} Flori</li> @endif @if($order->bouquet_type == 2)
                            <li class="list-group-item">Medium {{ $order->portfolio->amount * config('app.flowers.premium')}} Flori</li> @endif @if($order->bouquet_type == 3)
                            <li class="list-group-item">Large {{ $order->portfolio->amount * config('app.flowers.platinum')}} Flori</li> @endif
                        <li class="list-group-item">Mesaj: {{ $order->message}}</li>
                        <li class="list-group-item">Specificatii: {{ $order->description}}</li>
                        <li class="list-group-item">{{ $order->r_name}}</li>
                        <li class="list-group-item"><a href="https://waze.com/ul?q={{ $order->r_address}}"> Adresa {{ $order->r_address}}</a></li>
                        <li class="list-group-item"><a href="tel:{{ $order->b_number}}"> Sender {{ $order->b_name }} {{ $order->b_number}}</a></li>
                        <li class="list-group-item"><a href="tel:{{ $order->r_number}}"> Receiver {{ $order->r_name }} {{ $order->r_number}}</a></li>
                    </ul>
                </div> @endif @endforeach </div>
    </div>
    <script>
        $("#check-all").click(function() {
            console.log('zz');
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
    </script>@endsection