@extends('admin.layouts.content')

@section('content')
    <section class="content">

        <div class="row">

            <div class="col-md-6">

                <div class="x_panel">

                    <div class="x_title">

                        <h2>Изменить Продукт</h2>

                        <ul class="nav navbar-right panel_toolbox" style="margin-right: -30px;">

                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>

                            </li>

                        </ul>

                        <div class="clearfix"></div>

                    </div>

                    <div class="x_content">

                        @include('admin.portfolio.form', ['submitButton' => 'Update', 'route' => [ 'admin.portfolios.update', $portfolio ], 'method' => 'PUT'])

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
