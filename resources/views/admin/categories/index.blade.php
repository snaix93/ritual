@extends('admin.layouts.content')

@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="x_panel">

            <div class="x_content">

                <div class="table-responsive">

                    <table class="table table-striped jambo_table bulk_action ">

                        <thead>

                        <tr class="headings">

                            <th class="column-title">Принадлежит </th>

                            <th class="column-title">Slug </th>
                            <th class="column-title">Имя </th>

                            <th class="column-title">Создать Второстепенную Категорию </th>

                            <th class="column-title">Удалить </th>
                            <th class="column-title">Редактировать </th>

                        </tr>

                        </thead>



                        <tbody>

                        @if(!empty($categories))

                            <a href="{{ route('admin.categories.create') }}"><button type="button" class="btn btn-primary">Создать Категорию</button></a>

                            @foreach($categories as $category)

                                <tr class="even pointer">
                                    <td class=" ">{{ $category->main_category ? $category->main_category : $category->id}}</td>

                                    <td class=" ">{{ $category->slug }}</td>
                                    <td class=" ">{{ $category->name }}</td>

                                    @if(empty($category->main_category))
                                        <td><a href="{{  route('admin.sub-category', $category->slug )}}"><button class="btn btn-success"><i class="fa fa-times"></i></button></a></td>
                                    @else
                                        <td></td>
                                    @endif
                                    <td><a href="{{  route('admin.categories.destroy', $category->slug )}}"><button class="btn btn-danger"><i class="fa fa-times"></i></button></a></td>
                                    <td><a href="{{  route('admin.categories.edit', $category->slug )}}"><button class="btn btn-primary"><i class="fa fa-times"></i></button></a></td>
                                </tr>

                            @endforeach

                        @endif

                        </tbody>

                    </table>



                    {{--                    @if(!empty($categories))--}}

                    {{--                    {{ $categories->appends(['sort' => 'votes'])->links() }}--}}

                    {{--                        @endif--}}

                </div>

            </div>

        </div>

        <script>

            $("#check-all").click(function(){

                console.log('zz');

                $('input:checkbox').not(this).prop('checked', this.checked);

            });

        </script>



    </div>

@endsection
