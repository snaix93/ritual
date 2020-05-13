@extends('admin.layouts.content')

@section('content')

    <section class="content">

        <div class="row">

            <div class="col-md-6">

                <div class="x_panel">

                    <div class="x_title">

                        <h2>Создать Размер</h2>

                        <ul class="nav navbar-right panel_toolbox" style="margin-right: -30px;">

                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>

                            </li>

                        </ul>

                        <div class="clearfix"></div>

                    </div>

                    <div class="x_content">

                        {{ Form::model($size, ['route' => 'admin.sizes.store', 'method' => 'POST', 'files' => true]) }}

                        @include('utils.alerts')

                        <div class="form-group">

                            <label for="fullname">Цена</label>

                            {{ Form::text('price', '', ['required','class' => 'form-control']) }}

                        </div>

                        <div class="form-group">

                            <label for="fullname">Размер</label>

                            {{ Form::text('size', '', ['class' => 'form-control', 'placeholder' => '60x70x160CM']) }}
                            <input type="hidden" value="{{ $portfolio_id  }}" name="portfolio_id">
                        </div>
                        {{ Form::submit('Submit', ['class' => 'btn btn-success pull-right']) }}
                        {{ Form::close() }}

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
