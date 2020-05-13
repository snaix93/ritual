@extends('admin.layouts.content')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Create Portfolio Item </h2>
                        <ul class="nav navbar-right panel_toolbox" style="margin-right: -30px;">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        {{ Form::model($portfolios, ['route' => 'admin.upload.images', 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/form-data']) }}
                        @include('utils.alerts')
                        <div class="form-group">
                            {!! Form::label('photo_id', 'Photo:') !!}
                            <input required type="file" class="form-control" name="images[]" placeholder="address" multiple>
                            {{--{!! Form::file('photo_id', null, ['required', 'class'=>'form-control', 'multiple'])!!}--}}
                        </div>

                        <div class="form-group">
                            <label for="fullname">Category * :</label>
                            {!! Form::select('portfolio_id', $portfolios, null, ['class'=>'form-control'])!!}
                        </div>
                        <div class="box-footer">
                            <a href="{{ route('admin.portfolio.index') }}" class="btn btn-primary">Back</a>
                            {{ Form::submit('Submit', ['class' => 'btn btn-success pull-right']) }}
                        </div>
                    {{ Form::close() }}
                    <!-- end form for validations -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection