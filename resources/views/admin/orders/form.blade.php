{{ Form::model($order, ['route' => $route, 'method' => $method, 'files' => true]) }}
@include('utils.alerts')
<div class="form-group">
    <label for="fullname">Date:</label> {{ Form::text('delivery_date', $order->delivery_date, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    <label for="fullname">address:</label> {{ Form::text('r_address', $order->r_address, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    <label for="fullname">number:</label> {{ Form::text('r_number', $order->r_number, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    <label for="fullname">message:</label> {{ Form::text('message', $order->message, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    <label for="fullname">b_number:</label> {{ Form::text('b_number', $order->b_number, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    <label for="fullname">Size:</label> {{ Form::text('size', $order->size, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    <label for="fullname">price:</label> {{ Form::text('price', $order->price, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    <label for="fullname">paid:</label> {{ Form::text('paid', $order->paid, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    <label for="fullname">done:</label> {{ Form::text('done', $order->done, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    <label for="fullname">available:</label> {{ Form::text('available', $order->available, ['class' => 'form-control']) }}
</div>
<div class="box-footer"> <a href="{{ route('admin.orders.index') }}" class="btn btn-primary">Back</a> {{ Form::submit($submitButton, ['class' => 'btn btn-success pull-right']) }}</div>{{ Form::close() }}
<!-- end form for validations -->
