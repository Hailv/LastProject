@extends('layouts.app')

@section('content')
    @extends('error')
    @extends('sidebar')

    <div class="container">
        <div class="row">

            <div class="col-lg-pull-0">
                <a class="btn btn-success" href="{{ action('Admin\ProductController@create') }}"> Create </a>
            </div>

            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Product List
                    </div>

                    <div class="box-body">

                        <table class="table table-bordered table-hover dataTable">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Product Code</th>
                                <th>Serial</th>
                                <th>Detail</th>
                                <th>Description</th>
                                <th>Import Date</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Views</th>
                                <th>Buys</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name}}</td>
                                    <td><a href="category/{{$product->category_id}}/edit">{{ $product->category->name}}</a></td>
                                    <td>{{ $product->product_code}}</td>
                                    <td>{{ $product->serial}}</td>
                                    <td>{{ $product->detail}}</td>
                                    <td>{{ $product->description}}</td>
                                    <td>{{ $product->import_date}}</td>
                                    <td>{{ $product->quantity}}</td>
                                    <td>{{ $product->price}}</td>
                                    <td>{{ $product->views}}</td>
                                    <td>{{ $product->buys}}</td>
                                    {{--                                    <td>{{ $product->image}}</td>--}}
                                    {{--                                    <td><img width="200" src="{{asset($product->img)}}"></td>--}}

                                    <td>
                                        <a href="{!! action('Admin\ProductController@edit', $product->id) !!}" class="btn btn-block btn-primary btn-sm">Edit</a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['product.destroy', $product->id],'style'=>'display:inline']) !!}
                                        {!! Form::open(['method' => 'DELETE','action' => ['Admin\ProductController@destroy',$product->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                        {{--                                        <a href="{!! action('ShopController@destroy', $shop->id) !!}" class="btn btn-danger btn-sm">Delete</a>--}}

                                    </td>
                                </tr>
                            @endforeach
                            {!! $products->links() !!}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
