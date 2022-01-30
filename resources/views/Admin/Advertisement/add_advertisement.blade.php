@extends("Admin.admin_layout")
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Add New Product</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-primary">
					<div class="panel-heading text-center font-weight-bold	">Add New Advertisement</div>
					<div class="panel-body">
		<form action="{{route('admin-advertisement-store')}}">
		@csrf
		<div class="row">
		<div class="col-md-6">
		<div class="form-group">
		<label for="product_id">Product Name:</label>
		<select name="product_id" id="product_id" class="form-control">
		<option value="0">Please Select A Product</option>
		@if($products)
		@foreach($products as $product)
		<option value="{{$product->id}}">{{$product->product_name}}</option>
		@endforeach
		@endif
		@error('product_id')
		<span class="text-danger">
		{{$message}}
		</span>
		@enderror
	
		</select>
		</div>
		</div>
		<div class="col-md-6">
		<div class="form-group">
		<label for="status">Status:</label>
		<select name="status" id="status" class="form-control">
		<option value="0">Please Select A Status</option>	
		<option value="1">Inactive</option>	
		<option value="2">Active</option>	
		<option value="3">Expire</option>	
		</select>
		@error('status')
		<span class="text-danger">
		{{$message}}
		</span>
		@enderror
		</div>
		</div>
		</div>
		
		<div class="row">
		<div class="col-md-4">
		<div class="form-group">
		<label for="start_date">Start Date:</label>
		<input name="start_date" type="text" id="start_date" class="form-control" id="start_date" value="{{old('start_date')}}" readonly>
		@error('start_date')
		<span class="text-danger">
			{{$message}}
		</span>
		@enderror
		</div>
		</div>
		<div class="col-md-4">
		<div class="form-group">
		<label for="end_date">End Date:</label>
		<input name="end_date" type="text" id="end_date" class="form-control" id="end_date" value="{{old('end_date')}}" readonly>
		@error('end_date')
		<span class="text-danger">
			{{$message}}
		</span>
		@enderror
	</div>
		</div>
		<div class="col-md-4">
		<div class="form-group">
		<button class="btn btn-primary btn-block" style="margin-top:30px; height:40px;" >Add Advertisement</button>
		</div>
		</div>

		</div>

		</form>		
								
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div><!--/.main-->
	@endsection
@section('extra-js')
<script>
$(document).ready(function(){
$('#start_date').datepicker({
format:'dd-MM-yy',
locale:'en',
});
$('#end_date').datepicker({
format:'dd-MM-yy',
locale:'en',
});
});
</script>
@endsection