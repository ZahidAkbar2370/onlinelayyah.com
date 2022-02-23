@extends('Admin.admin_layout')
@section('content')
<style>
.table tr td, .table tr th
{
text-align:center;	
}
</style>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
<ol class="breadcrumb">
<li><a href="#">
<em class="fa fa-home"></em>
</a></li>
<li class="active">List Of Product Ads</li>
</ol>
</div><!--/.row-->

<div class="row">
<div class="col-lg-12">			
<div class="panel panel-default">
<div class="panel-heading">View Advertisement</div>
<div class="panel-body">
<p style="font-size:16px; color:red" align="center"></p>
<div class="col-md-12" style="margin-bottom:10px;">
<a href="{{route('admin-productads-create')}}" class="btn btn-primary pull-right mb-5">New Product Ads</a>
</div>
<div class="col-md-12">
<div class="table-responsive">
<table class="table table-bordered mg-b-0" id="dataTable">
<thead>
<tr>
<th>S.NO</th>
<th>Name</th>
<th>Start Date</th>
<th>End Date</th>
<th>Label</th>
<th>Status</th>
<th>Update</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
@if($productads)
@foreach($productads as $index=> $ads)
<tr>
<td>{{$index+1}}</td>
<td>{{$ads->product->product_name}}</td>
<td>{{$ads->start_date->toFormattedDate()}}</td>
<td>{{$ads->end_date->toFormattedDate()}}</td>
<td>{{$ads->status}}</td>
<td>{{$ads->label}}</td>
<td>
<a href="{{route('admin-productads-edit',$ads->id)}}">
<span class="fa fa-edit"></span>   
</a>
</td>
<td>
<a href="{{route('admin-productads-delete',$ads->id)}}">
<span class="fa fa-trash"></span>   
</a>
</td>
</tr>
@endforeach
@endif	
</tbody>
</table>
</div>
</div>
</div>
</div><!-- /.panel-->
</div><!-- /.col-->
</div><!-- /.row -->
</div><!--/.main-->
@endsection
@section('extra-js')
<!-- Including datatable-->
<script>
 $(document).ready(function(){
$('#dataTable').DataTable();
});  
</script>
<!-- Sweat alert if advertisement is added-->
@if($message=Session::get('productadsadded'))
<script>
Swal.fire({
position: 'top-center',
icon: 'success',
iconColor: 'green',
title: '{{ $message }}',
timerProgressBar: true,
showConfirmButton: false,
timer: 2000
});
</script>
@endif
<!-- Sweat alert if advertisement is deleted -->
@if($message=Session::get('productadsdeleted'))
<script>
Swal.fire({
position: 'top-center',
icon: 'success',
iconColor: 'red',
title: '{{ $message }}',
timerProgressBar: true,
showConfirmButton: false,
timer: 2000
});
</script>
@endif
<!-- Sweat alert if advertisement is updated -->
@if($message=Session::get('productadsupdated'))
<script>
Swal.fire({
position: 'top-center',
icon: 'success',
iconColor: 'orange',
title: '{{ $message }}',
timerProgressBar: true,
showConfirmButton: false,
timer: 2000
});
</script>
@endif

@endsection
