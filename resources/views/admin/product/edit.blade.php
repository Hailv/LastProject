@extends('layouts.app')

@section('content')
    @extends('error')
    @extends('sidebar')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> Edit Product </div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{action('Admin\ProductController@update', $product->id)}} " enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PATCH">
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="name" name="name" value="{{$product->name}}">

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="category_code" class="col-md-4 control-label">Category</label>
                                <br>
                                <select id="category_id" class="selectpicker col-md-6 "  name="category_id" data-live-search="true">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                                {{ $category->id==$product->category_id ? 'selected' : '' }}>{{$category->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="product_code" class="col-md-4 control-label">Product code</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="product_code" name="product_code" value="{{$product->product_code}}">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="serial" class="col-md-4 control-label">Serial</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="serial" name="serial" value="{{$product->serial}}">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="detail" class="col-md-4 control-label">Detail</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="detail" name="detail" value="{{$product->detail}}">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="description" name="description" value="{{$product->description}}">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="import_date" class="col-md-4 control-label">Import date</label>

                                <div class="col-md-6">
                                    <input type="date" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="import_date" name="import_date" value="{{$product->import_date}}">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="quantity" class="col-md-4 control-label">Quantity</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="quantity" name="quantity" value="{{$product->quantity}}">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="price" class="col-md-4 control-label">Price</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="price" name="price" value="{{$product->price}}">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="views" class="col-md-4 control-label">Views</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="views" name="views" value="{{$product->views}}">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="buys" class="col-md-4 control-label">Buys</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="buys" name="buys" value="{{$product->buys}}">

                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary" value="upload">
                                        Submit
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection