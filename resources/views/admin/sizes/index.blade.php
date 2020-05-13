@extends('admin.layouts.content')

@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">
                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action ">
                        <thead>
                        <tr class="headings">
                            <th class="column-title">Размер </th>
                            <th class="column-title">Цена </th>
                            <th class="column-title">Delete </th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(!empty($portfolio->sizes))

                            <a href="{{ route('admin.sizes.create', ['portfolio_id' => $portfolio->id]) }}"><button type="button" class="btn btn-primary">Добавить</button></a>

                        @foreach($portfolio->sizes as $size)

                            <tr class="even pointer">
                                <td class=" ">{{ $size->size }}</td>
                                <td class=" ">{{ $size->price }}</td>
                                <td><a href="{{  route('admin.sizes.destroy', $size->id )}}"><button class="btn btn-danger"><i class="fa fa-times"></i></button></a></td>
                            </tr>

                        @endforeach
                        @endif
                        </tbody>
                    </table>
                    <div class="box-footer">
                        <a href="{{ route('admin.portfolio.index') }}" class="btn btn-primary">Назад</a>
                    </div>
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
