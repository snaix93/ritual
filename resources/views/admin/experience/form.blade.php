{{ Form::model($experience, ['route' => $route, 'method' => $method, 'files' => true]) }}
@include('utils.alerts')
    <div class="form-group">
        <label for="fullname">Name * :</label>
        {{ Form::text('name', $experience->name, ['required','class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id', null, ['required', 'class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        <label for="fullname">Link :</label>
        {{ Form::text('link', $experience->link, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        <label for="fullname">Description * :</label>
        {{ Form::text('description', $experience->desctiption, ['required', 'class' => 'form-control']) }}
    </div>
    <div class="box-footer">
        <a href="{{ route('admin.experience.index') }}" class="btn btn-primary">Back</a>
        {{ Form::submit($submitButton, ['class' => 'btn btn-success pull-right']) }}
    </div>
{{ Form::close() }}
<!-- end form for validations -->