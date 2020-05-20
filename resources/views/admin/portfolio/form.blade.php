@if(!empty($portfolio->id))<a href="{{ route('admin.sizes.index', ['portfolio' => $portfolio->id]) }}"><button class="btn-primary btn-sm" type="text">Добавить размеры</button> </a> @endif
{{ Form::model($portfolio, ['route' => $route, 'method' => $method, 'files' => true]) }}
@include('utils.alerts')
<div class="form-group">
    <label for="fullname">Название * :</label> {{ Form::text('name_ru', $portfolio->name_ru, ['required','class' => 'form-control']) }}
</div>
<div class="form-group">
    <label for="fullname">Denumire * :</label> {{ Form::text('name', $portfolio->name, ['required','class' => 'form-control']) }}
</div>
<div class="form-group"> {!! Form::label('photo_id', 'Выбрать фото:') !!}
    <input type="file" name="photo_id[]" multiple>
</div>
    @if(!empty($portfolio->id))<
        <a href="{{ route('admin.photos.index', ['portfolio' => $portfolio->id]) }}"><h2>Все фото</h2></a>
    @endif

    @foreach($portfolio->photos as $photo)
        <img src="{{ $photo->file }}" width="50" height="50">
    @endforeach
<div class="form-group">
    <label for="fullname">Категория * :</label> {!! Form::select('category_id', $categories, null, ['class'=>'form-control'])!!}
</div>
<div class="form-group">
    <label for="fullname">Крутящаяся Картинка:</label> {{ Form::textarea('rotating_image', $portfolio->rotating_image, [ 'rows' => 4, 'cols' => 40, 'class' => 'form-control']) }}
</div>
<div class="form-group">
    <label for="fullname">Цена:</label> {{ Form::text('price', $portfolio->price, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    <label for="fullname">Уникальный Код:</label> {{ Form::text('price2', $portfolio->price2, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    <label for="fullname">Размер РУ:</label> {{ Form::textarea('size_ru', $portfolio->size_ru, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    <label for="fullname">Размер:</label> {{ Form::textarea('size', $portfolio->size, ['class' => 'form-control']) }}
</div>
<input type="hidden" value="{{ $portfolio->slug }}" name="slug" />
<div class="form-group">
    <label for="fullname">Рэйтинг:</label> {{ Form::text('ranking', $portfolio->ranking, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    <label for="fullname">Описание:</label> {{ Form::textarea('description_ru', $portfolio->desctiption_ru, [ 'rows' => 4, 'cols' => 40, 'required', 'class' => 'form-control']) }}
</div>
<div class="form-group">
    <label for="fullname">Descriere:</label> {{ Form::textarea('description', $portfolio->desctiption, [ 'rows' => 4, 'cols' => 40, 'required', 'class' => 'form-control']) }}
</div>
<div class="form-group">
    <label for="fullname">Тэги</label> {{ Form::text('tags', (!empty($tags) ? $tags : ' '), ['class' => 'form-control']) }}
</div>
<div class="form-group">
    <label for="fullname">Скидка :</label> {{ Form::text('discount', $portfolio->discount, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    <label for="fullname">Есть в наличии: 1 или 0</label> {{ Form::text('available', $portfolio->available, ['required', 'class' => 'form-control']) }}
</div>
<div class="box-footer">
    <a href="{{ route('admin.portfolios.index') }}" class="btn btn-primary">Назад</a>
    {{ Form::submit($submitButton, ['class' => 'btn btn-success pull-right']) }}
</div
><a href="{{ url(strtolower ( $portfolio->category_id). '/' . $portfolio->slug) }}">Ссылка на товар</a>{{ Form::close() }}
