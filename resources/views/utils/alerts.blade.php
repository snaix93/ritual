@if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissible" >
        <h4><i class="icon fa fa-warning"></i> Errors</h4>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <div class="clearfix"></div>
@endif
@if (session('message'))
    <div class="alert alert-success" role="alert">
        <div class="container">
            <div class="alert-icon">
                <i class="now-ui-icons ui-2_like"></i>
            </div>
            <strong>Well done!</strong> {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                </span>
            </button>
        </div>
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger" role="alert">
        <div class="container">
            <div class="alert-icon">
                <i class="now-ui-icons objects_support-17"></i>
            </div>
            <strong>Oh snap!</strong> {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">
							<i class="now-ui-icons ui-1_simple-remove"></i>
						</span>
            </button>
        </div>
    </div>
@endif