@extends('layouts.app')

@section('content')
    @extends('error')
    @extends('sidebar')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> Create New Category </div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{action('Admin\CategoryController@update', $category->id)}}">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PATCH">
                            <span class="form_label">Danh mục cha:</span>
                            <span class="form_item">
			                    <select name="parent_id" class="select">
				                    <option value="0">--- ROOT ---</option>
                                    <?php menuMulti ($parent,0,$str="---|",$data["parent_id"]) ?>
                                </select>
		                    </span>
                            <span class="form_label">Tên danh mục:</span>
                            <span class="form_item">
			                    <input type="text" name="name" class="textbox" value="{!! old('name',isset($data["name"]) ? $data["name"] : null) !!}" />
		                    </span><br />
                            <span class="form_label"></span>
                            <span class="form_item">
                            {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                                {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

                                {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

                                {{--@if ($errors->has('name'))--}}
                                {{--<span class="help-block">--}}
                                {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                {{--</span>--}}
                                {{--@endif--}}
                                {{--</div>--}}
                                {{--</div>--}}

                                <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
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