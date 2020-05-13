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
                            <th class="column-title">Удалить </th>

                            <th class="column-title">Сделать Главной </th>

                        </tr>

                        </thead>



                        <tbody>

                        @if(!empty($photos))
                        @foreach($photos as $photo)

                            <tr class="even pointer">

                                <td class=" ">{{ $photo->id }}</td>
                                <td class=" "><img width="150" height="150" src="{{ $photo->file }}"></td>

                                <td><a href="{{  route('admin.photos.destroy', $photo->id )}}"><button class="btn btn-danger"><i class="fa fa-times"></i></button></a></td>
                                <td><a href="{{  route('set_main', ['photo' => $photo->id, 'portfolio' => $portfolio->id])}}"><button class="btn btn-success"><i class="fa fa-times"></i></button></a></td>

                            </tr>

                        @endforeach

                        @endif

                        </tbody>

                    </table>



                    {{--@if(!empty($photos))--}}

                    {{--{{ $photos->appends(['sort' => 'votes'])->links() }}--}}

                        {{--@endif--}}

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
