{{ Form::model($category, ['route' => $route, 'method' => $method, 'files' => true]) }}
@include('utils.alerts')
<div class="form-group">

    <label for="fullname">Название RU</label>

    {{ Form::text('name_ru', $category->name_ru, ['required','class' => 'form-control']) }}

</div>
<div class="form-group">

    <label for="fullname">Название</label>

    {{ Form::text('name', $category->name, ['required','class' => 'form-control']) }}

</div>
<div class="form-group">

    <label for="fullname">Длинное Название RU</label>

    {{ Form::text('display_name_ru', $category->display_name_ru, ['required','class' => 'form-control']) }}

</div>
<div class="form-group">

    <label for="fullname">Длинное Название</label>

    {{ Form::text('display_name', $category->display_name, ['required','class' => 'form-control']) }}

</div>
<div class="form-group">

    <label for="fullname">Описание Категории RU</label>

    {{ Form::textarea('description_ru', $category->description_ru, ['required','class' => 'form-control']) }}

</div>
<div class="form-group">

    <label for="fullname">Описание Категории</label>

    {{ Form::textarea('description', $category->description, ['required','class' => 'form-control']) }}

</div>

<div class="box-footer">

    <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">Back</a>

    {{ Form::submit('Submit', ['class' => 'btn btn-success pull-right']) }}

</div>

{{ Form::close() }}
