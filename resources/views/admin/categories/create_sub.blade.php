@extends('admin.layouts.content')

@section('content')

    <section class="content">

        <div class="row">

            <div class="col-md-6">

                <div class="x_panel">

                    <div class="x_title">

                        <h2>Create Sub Category </h2>

                        <ul class="nav navbar-right panel_toolbox" style="margin-right: -30px;">

                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>

                            </li>

                        </ul>

                        <div class="clearfix"></div>

                    </div>

                    <div class="x_content">

                        {{ Form::model($category, ['route' => 'admin.categories.store', 'method' => 'POST']) }}

                        @include('utils.alerts')
                        @if(!empty($category->id))
                            <input name="main_category" type="hidden" value="{{ $category->id }}">
                        @endif
                        <div class="form-group">

                            <label for="fullname">Название RU</label>

                            {{ Form::text('name_ru','', ['required','class' => 'form-control']) }}

                        </div>
                        <div class="form-group">

                            <label for="fullname">Название</label>

                            {{ Form::text('name', '', ['required','class' => 'form-control']) }}

                        </div>
                        <div class="form-group">

                            <label for="fullname">Длинное Название RU</label>

                            {{ Form::text('display_name_ru', '', ['required','class' => 'form-control']) }}

                        </div>
                        <div class="form-group">

                            <label for="fullname">Длинное Название</label>

                            {{ Form::text('display_name', '', ['required','class' => 'form-control']) }}

                        </div>
                        <div class="form-group">

                            <label for="fullname">Описание Категории RU</label>

                            {{ Form::textarea('description_ru','', ['required','class' => 'form-control']) }}

                        </div>
                        <div class="form-group">

                            <label for="fullname">Описание Категории</label>

                            {{ Form::textarea('description', '', ['required','class' => 'form-control']) }}

                        </div>

                        <div class="box-footer">

                            <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">Back</a>

                            {{ Form::submit('Submit', ['class' => 'btn btn-success pull-right']) }}

                        </div>
                        {{ Form::close() }}

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
