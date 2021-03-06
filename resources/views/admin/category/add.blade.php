@extends('admin.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Categories</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Add new category</small></h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
					@if (count($errors) > 0)
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					    @elseif (Session()->has('flash_level'))
					    	<div class="alert alert-success">
						        <ul>
						            {!! Session::get('flash_massage') !!}
						        </ul>
						    </div>
						@endif
						@if(Session::has('success'))
						<div class="alert alert-success">
							{{Session::get('success')}}
						</div>
						@endif
						<form action="" method="post" ="post" role="form">
				      		@csrf

				      		<div class="form-group">
				      			<label for="input-id">Name category</label>
				      			<input type="text" name="name" id="inputTxtCateName" class="form-control" value="" required="required">
				      		</div>
				      		<input type="submit"  class="btn btn-primary" value="Thêm danh mục" class="button" />
				      	</form>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection
