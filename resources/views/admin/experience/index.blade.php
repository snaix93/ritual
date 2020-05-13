@include('admin.layouts.header')
<body class="nav-md">
<div class="container body">
<div class="main_container">
@include('admin.layouts.navigation')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3> Media Gallery <small> gallery design</small> </h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 style="margin-right: 15px;">Experience</h2><a href="{{ route('admin.experience.create') }}"><button type="button" class="btn btn-primary">Create Item</button></a>
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
                                <p>Media gallery design emelents</p>
                                @foreach($ourExperience as $experience)
                                <div class="col-md-55">
                                    <div class="thumbnail">
                                        <div class="image view view-first">
                                            <img style="width: 100%; display: block;" src="{{$experience->photo ?  $experience->photo->file : 'http://placehold.it/400x400'}}" alt="image" />
                                            <div class="mask">
                                                <p>{{ $experience->name }}<span class="pull-right">{{ $experience->category }}</span></p>
                                                <div class="tools tools-bottom">
                                                    <a href="{{ $experience->link }}"><i class="fa fa-link"></i></a>
                                                    <a href="{{  route('admin.experience.edit', $experience->id )}}"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{  route('admin.experience.destroy', $experience->id )}}"><i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <p>{{ $experience->description }}</p>
                                            <p>{{ $experience->price }}</p>
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
    </div>
<!-- /page content -->
@include('admin.layouts.footer')
</div>
</div>
</body>
</html>