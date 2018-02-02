@extends('layouts.app')

@section('content')
    @extends('error')
    @extends('sidebar')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> Edit Shop </div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{action('Admin\ShopController@update', $shop->id)}}">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PATCH">
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="name" name="name" value="{{$shop->name}}">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-md-4 control-label">Phone</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="phone" name="phone" value="{{$shop->phone}}">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Email</label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="email" name="email" value="{{$shop->email}}">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-md-4 control-label">Address</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="address" name="address" value="{{$shop->address}}">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="description" name="description" value="{{$shop->description}}">

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
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