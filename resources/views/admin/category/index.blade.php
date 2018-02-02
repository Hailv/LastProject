@extends('layouts.app')

@section('content')
    @extends('error')
    @extends('sidebar')

    <div class="container">
        <div class="row">
            <div class="col-lg-pull-0">
                <a class="btn btn-success" href="{{ action('Admin\CategoryController@create') }}"> Create </a>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Shop List
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered table-hover dataTable">
                            {{--<tr>--}}
                            {{--<th>Id</th>--}}
                            {{--<th>Name</th>--}}
                            {{--<th>Action</th>--}}
                            {{--</tr>--}}
                            {{--@foreach ($categories as $category)--}}
                            {{--<tr>--}}
                            {{--<td>{{ $category->id }}</td>--}}
                            {{--<td>{{ $category->name}}</td>--}}
                            {{--<td>--}}
                            {{--                                        <a href="{!! action('CategoryController@edit', $category->id) !!}" class="btn btn-block btn-primary btn-sm">Edit</a>--}}
                            {{--{!! Form::open(['method' => 'DELETE','route' => ['category.destroy', $category->id],'style'=>'display:inline']) !!}--}}
                            {{--{!! Form::open(['method' => 'DELETE','action' => ['CategoryController@destroy',$category->id],'style'=>'display:inline']) !!}--}}
                            {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}
                            {{--{!! Form::close() !!}--}}
                            {{--                                        <a href="{!! action('ShopController@destroy', $shop->id) !!}" class="btn btn-danger btn-sm">Delete</a>--}}
                            {{--</td>--}}
                            {{--</tr>--}}
                            {{--@endforeach--}}
                            <table class="list_table">
                                <tr class="list_heading">
                                    <td>Menu</td>
                                    <td>Action</td>
                                </tr>
                                <?php listCate ($data) ?>
                            </table>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
