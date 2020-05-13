@extends('admin.layouts.content')

@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="x_panel">

            <div class="x_content">

                <div class="table-responsive">

                    <table class="table table-striped jambo_table bulk_action ">

                        <thead>

                        <tr class="headings">

                            <th class="column-title">Ид </th>

                            <th class="column-title">Название </th>
                            <th class="column-title">Название Категории </th>

                            <th class="column-title">Описание </th>

                            <th class="column-title">Удалить </th>

                        </tr>

                        </thead>



                        <tbody>

                        @if(!empty($tags))

                            <a href="{{ route('admin.tags.create') }}"><button type="button" class="btn btn-primary">Cоздать Тэг</button></a>

                        @foreach($tags as $tag)

                            <tr class="even pointer">

                                <td class=" ">{{ $tag->id }}</td>

                                <td class=" ">{{ $tag->name }}</td>
                                <td class=" ">{{ $tag->header }}</td>
                                <td class=" ">{{ $tag->description }}</td>


                                <td><a href="{{  route('admin.tags.destroy', $tag->id )}}"><button class="btn btn-danger"><i class="fa fa-times"></i></button></a></td>
{{--                                <td><a href="{{  route('admin.tags.update', $tag->id )}}"><button class="btn btn-success"><i class="fa fa-times"></i></button></a></td>--}}

                            </tr>

                        @endforeach

                        @endif

                        </tbody>

                    </table>



                    @if(!empty($tags))

                    {{ $tags->appends(['sort' => 'votes'])->links() }}

                        @endif

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
