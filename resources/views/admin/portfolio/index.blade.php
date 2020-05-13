@extends('admin.layouts.content')

@section('content')

    <div class="page-title">
    </div>

    <div class="clearfix"></div>

    <div class="row">

        <div class="col-md-12">

            <div class="x_panel">

                <div class="x_title">

                    <a href="{{ route('admin.portfolios.create') }}"><button type="button" class="btn btn-primary">Новый Тоаар</button></a>
                    <ul class="nav navbar-right panel_toolbox">

                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

                        </li>

                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

                            <ul class="dropdown-menu" role="menu">

                                <li><a href="#">Settings 1</a>

                                </li>

                                <li><a href="#">Settings 2</a>

                                </li>

                            </ul>

                        </li>

                        <li><a class="close-link"><i class="fa fa-close"></i></a>

                        </li>

                    </ul>

                    <div class="clearfix"></div>

                </div>

                <div class="x_content">

                    <div class="row">

                        @foreach($portfolios as $portfolio)

                        <div class="col-md-3">

                            <div class="thumbnail">

                                <div class="image">
                                    <a href="{{  route('admin.portfolios.edit',['portfolio' => $portfolio->slug, 'slug' => $portfolio->slug] )}}" style="cursor: pointer;">

                                        <img style="width: 130px; height: 130px;" src="{{$portfolio->photos()->first() ?  $portfolio->photos()->first()->file : 'http://placehold.it/400x400'}}" alt="image" />

                                    </a>

                                    <div class="caption">

                                        <h3>{{ $portfolio->description }}</h3>

                                        <h3>{{ $portfolio->price }}</h3>

                                        <p>{{ $portfolio->amount }}</p>

                                    </div>

                                </div>

                                <div class="mask">

                                    @if(!empty($portfolio->category->name))

                                        <p>{{ $portfolio->name }}<span class="pull-right">{{$portfolio->category->name}}</span></p>

                                    @else

                                        <p> {{ $portfolio->category }}<span>Not displayed</span></p>

                                    @endif


                                    <div class="tools tools-bottom">

                                        <a href="{{  route('admin.portfolios.edit', ['portfolio' => $portfolio->slug, 'slug' => $portfolio->slug])}}"><button class="btn btn-success"><i class="fa fa-pencil"></i></button></a>

                                        <a href="{{  route('admin.portfolios.destroy', ['portfolio' =>$portfolio->slug, 'slug' => $portfolio->slug] )}}"><button class="btn btn-danger pull-right"><i class="fa fa-times"></i></button></a>

                                    </div>

                                </div>

                            </div>

                        </div>

                            @endforeach

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@include('admin.layouts.footer')

@endsection
