@extends('layouts.app')

@section('content')
    @extends('error')
    @extends('sidebar')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> Create New Product </div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{action('Admin\ProductController@store')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="category_code" class="col-md-4 control-label">Category</label>
                                <br>
                                <select id="category_id" class="selectpicker col-md-6 "  name="category_id" data-live-search="true" >
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                                {{ $category->id==$product->category_id ? 'selected' : '' }}>{{$category->name}}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group{{ $errors->has('product_code') ? ' has-error' : '' }}">
                                <label for="product_code" class="col-md-4 control-label">Product Code</label>

                                <div class="col-md-6">
                                    <input id="product_code" type="text" class="form-control" name="product_code" value="{{ old('product_code') }}" required autofocus>

                                    @if ($errors->has('product_code'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('product_code') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('serial') ? ' has-error' : '' }}">
                                <label for="serial" class="col-md-4 control-label">Serial</label>

                                <div class="col-md-6">
                                    <input id="serial" type="text" class="form-control" name="serial" value="{{ old('serial') }}" required autofocus>

                                    @if ($errors->has('serial'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('serial') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('detail') ? ' has-error' : '' }}">
                                <label for="detail" class="col-md-4 control-label">Detail</label>

                                <div class="col-md-6">
                                    <input id="detail" type="text" class="form-control" name="detail" value="{{ old('detail') }}" required autofocus>

                                    @if ($errors->has('detail'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('detail') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required autofocus>

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('import_date') ? ' has-error' : '' }}">
                                <label for="import_date" class="col-md-4 control-label">Import date</label>

                                <div class="col-md-6">
                                    <input id="import_date" type="date" class="form-control" name="import_date" value="{{ old('import_date') }}" required autofocus>

                                    @if ($errors->has('import_date'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('import_date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                                <label for="quantity" class="col-md-4 control-label">Quantity</label>

                                <div class="col-md-6">
                                    <input id="quantity" type="text" class="form-control" name="quantity" value="{{ old('quantity') }}" required autofocus>

                                    @if ($errors->has('quantity'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label for="price" class="col-md-4 control-label">Price</label>

                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}" required autofocus>

                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('views') ? ' has-error' : '' }}">
                                <label for="views" class="col-md-4 control-label">Views</label>

                                <div class="col-md-6">
                                    <input id="views" type="text" class="form-control" name="views" value="{{ old('views') }}" required autofocus>

                                    @if ($errors->has('views'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('views') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('buys') ? ' has-error' : '' }}">
                                <label for="buys" class="col-md-4 control-label">Buys</label>

                                <div class="col-md-6">
                                    <input id="buys" type="text" class="form-control" name="buys" value="{{ old('buys') }}" required autofocus>

                                    @if ($errors->has('buys'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('buys') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary" value="upload">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection