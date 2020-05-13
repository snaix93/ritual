@extends('admin.layouts.content')
@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">
                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action ">
                        <thead>
                        <tr class="headings">
                            <th class="column-title">ID</th>
                            <th class="column-title">Картинка </th>
                            <th class="column-title">Удалить </th>
                            <th class="column-title">Изменить </th>
                            <th class="column-title" id="checkAll">Число </th>
                            <th class="column-title">Цена </th>
                            <th class="column-title">Имя </th>
                            <th class="column-title">Адрес </th>
                            <th class="column-title">Телефон</th>
                            <th class="column-title">Спецификации </th>
                            <th class="column-title">Название </th>
                            <th class="column-title">Ссылка к товару</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(!empty($orders))
{{--                            {{ Form::model($orders, ['route' => ['admin.orders.destroy'], 'method' => 'POST']) }}--}}
                            @foreach($orders as $order)
                                <?php $b_number = $order->b_number;
                                $r_number = $order->r_number;
                                $b_sbstr = substr( $b_number, 0, 3);?>
                                <tr class="even pointer">
                                    <td class="a-center ">
                                    {{ $order->id }}
                                    </td>
                                    <td><img src="@if(!empty($order->portfolio)) {{ $order->portfolio->photo->file }} @else http://placehold.it/400x400 @endif" width="50" height="50"></td>
                                    <td><a href="{{  route('orders.delete', ['order' => $order->id] )}}"><button class="btn btn-danger"><i class="fa fa-times"></i></button></a></td>
                                    <td><a href="{{  route('admin.orders.edit', ['order' => $order->id] )}}"><button class="btn btn-info"><i class="fa fa-times"></i></button></a></td>
                                    <td class=" ">{{ $order->delivery_date }}</td>
                                    <td class=" ">{{ $order->price }}</td>
                                    <td class=" ">{{ $order->r_name }}</td>
                                    <td class=" ">{{ $order->r_address }}</td>
                                    <td class=" ">{{ $r_number }}</td>
                                    <td class=" ">{{ $order->message }}</td>
                                    <td class=" ">@if(!empty( $order->portfolio->name )){{ $order->portfolio->name  }}@else {{ $order->portfolio}}@endif</td>
                                    <td class=" ">@if(!empty($order->portfolio))<a href="/{{strtolower ( $order->portfolio->category_id)}}/{{ $order->portfolio->slug  }}"><button class="btn-success btn">Ссылка</button></a> @endif</td>
                                </tr>
                            @endforeach
                        @endif
                        {{--{{ Form::submit('Delete Orders', ['class' => 'btn btn-success']) }}--}}
                        {{--{{ Form::close() }}--}}
                        </tbody>
                    </table>
                    @if(!empty($orders))
                        {{ $orders->appends(['sort' => 'votes'])->links() }}
                    @endif
                </div>
            </div>
        </div>
        <script>
            $("#check-all").click(function(){

                $('input:checkbox').not(this).prop('checked', this.checked);

            });

        </script>
    </div>
@endsection
