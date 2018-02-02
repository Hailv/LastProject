@extends('layouts.app')

@section('content')
    @extends('error')
    @extends('sidebar')

    <div class="container">
        <div class="row">
            <div class="col-lg-pull-0">
                <a class="btn btn-success" href="{{ action('Admin\ShopController@create') }}"> Create </a>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Shop List
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered table-hover dataTable">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($shops as $shop)
                                <tr>
                                    <td>{{ $shop->id }}</td>
                                    <td>{{ $shop->name}}</td>
                                    <td>{{ $shop->phone}}</td>
                                    <td>{{ $shop->email}}</td>
                                    <td>{{ $shop->address}}</td>
                                    <td>{{ $shop->description}}</td>
                                    <td>
                                        <a href="{!! action('Admin\ShopController@edit', $shop->id) !!}" class="btn btn-block btn-primary btn-sm">Edit</a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['shop.destroy', $shop->id],'style'=>'display:inline']) !!}
                                        {!! Form::open(['method' => 'DELETE','action' => ['Admin\ShopController@destroy',$shop->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
{{--                                                                                <a href="{!! action('ShopController@destroy', $shop->id) !!}" class="btn btn-danger btn-sm">Delete</a>--}}
                                    </td>
                                </tr>
                            @endforeach
                            {!! $shops->links() !!}

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
