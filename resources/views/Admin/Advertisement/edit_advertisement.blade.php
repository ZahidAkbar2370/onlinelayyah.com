@extends("Admin.admin_layout")
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main mt-5">			
<br>
<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-primary">
					<div class="panel-heading text-center font-weight-bold	">Update Advertisement</div>
					<div class="panel-body">
		<form action="{{route('admin-advertisement-update',$ads->id)}}">
        @method('PUT')
        @csrf
		<div class="row">
		<div class="col-md-6">
		<div class="form-group">
		<label>Product Name:</label>
        <input type="text" value="{{$ads->product->product_name}}" name="product_id" class="form-control" readonly>
        @error('product_id')
        <span>
        {{$message}}
        </span>
        @enderror
        </div>
		</div>
		<div class="col-md-6">
		<div class="form-group">
		<label for="status">Status:</label>
		<select name="status" id="status" class="form-control">
		<option value="null">Please Select A Status</option>	
		<option value="inactive" {{($ads->status=='inactive')?'selected':''}}>Inactive</option>	
		<option value="active" {{($ads->status=='active')? 'selected' : ''}}>Active</option>	
		<option value="expire" {{($ads->status=='expire')? 'selected' : ''}}>Expire</option>	
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
		<input name="start_date" type="text" id="start_date" class="form-control" id="start_date" value="{{$ads->start_date->toFormattedDate()}}" readonly>
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
		<input name="end_date" type="text" id="end_date" class="form-control" id="end_date" value="{{$ads->end_date->toFormattedDate()}}" readonly>
		@error('end_date')
		<span class="text-danger">
			{{$message}}
		</span>
		@enderror
	</div>
		</div>
		<div class="col-md-4">
		<div class="form-group">
		<button class="btn btn-primary btn-block" style="margin-top:30px; height:40px;" >
        <span class="fa fa-edit"></span>&nbsp;
        Update Advertisement</button>
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
