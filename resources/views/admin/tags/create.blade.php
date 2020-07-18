@extends('admin.layouts.content')

@section('content')

    <section class="content">

        <div class="row">

            <div class="col-md-6">

                <div class="x_panel">

                    <div class="x_title">

                        <h2>Создать Тэг</h2>

                        <ul class="nav navbar-right panel_toolbox" style="margin-right: -30px;">

                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>

                            </li>

                        </ul>

                        <div class="clearfix"></div>

                    </div>

                    <div class="x_content">

                        {{ Form::model($tag, ['route' => 'admin.tags.store', 'method' => 'POST', 'files' => true]) }}

                        @include('utils.alerts')

                        <div class="form-group">

                            <label for="fullname">Название</label>

                            {{ Form::text('name_ru', '', ['required','class' => 'form-control']) }}

                        </div>
                        <div class="form-group">

                            <label for="fullname">Denumire</label>

                            {{ Form::text('name', '', ['required','class' => 'form-control']) }}

                        </div>
                        <div class="form-group">

                            <label for="fullname">Название Категории</label>

                            {{ Form::text('header_ru', '', ['class' => 'form-control']) }}

                        </div>
                        <div class="form-group">

                            <label for="fullname">Denumire categorie</label>

                            {{ Form::text('header', '', ['class' => 'form-control']) }}

                        </div>

                        <div class="form-group">

                            <label for="fullname">Описание</label>

                            {{ Form::textarea('description_ru', '', ['class' => 'form-control']) }}

                        </div>

                        <div class="form-group">

                            <label for="fullname">Descriere</label>

                            {{ Form::textarea('description', '', ['class' => 'form-control']) }}

                        </div>
                        <div class="box-footer">

                            <a href="{{ route('admin.tags.index') }}" class="btn btn-primary">Back</a>

                            {{ Form::submit('Submit', ['class' => 'btn btn-success pull-right']) }}

                        </div>

                        {{ Form::close() }}

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
