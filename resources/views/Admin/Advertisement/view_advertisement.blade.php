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
<a href="{{route('admin-advertisement-create')}}" class="btn btn-primary pull-right mb-5">New Product Ads</a>

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
<td>Action</td>
<td>Action</td>
</tr>
</thead>
<tbody>
@if($advertisements)
@foreach($advertisements as $index=> $ads)
<tr>
<td>{{$index+1}}</td>
<td>{{$ads->product->product_name}}</td>
<td>{{$ads->start_date->toFormattedDate()}}</td>
<td>{{$ads->end_date->toFormattedDate()}}</td>
<td>{{$ads->status}}</td>
<td>{{$ads->label}}</td>
<td>
<a href="">
<span class="fa fa-edit"></span>   
</a>
</td>
<td>
<a href="{{route('admin-advertisement-delete',$ads->id)}}">
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
<script>
 $(document).ready(function(){
$('#dataTable').DataTable();
});  
</script>

@if($message=Session::get('advertisementadded'))
<script>
Swal.fire({
position: 'top-center',
icon: 'success',
iconColor: 'green',
title: 'Your Advertisement Is Successfully Added',
timerProgressBar: true,
showConfirmButton: false,
timer: 3000
});
</script>
@endif

@if($message=Session::get('advertisementdeleted'))
<script>
Swal.fire({
position: 'top-center',
icon: 'success',
iconColor: 'red',
title: 'Your Advertisement Is Successfully Deleted',
timerProgressBar: true,
showConfirmButton: false,
timer: 3000
});
</script>
@endif

@endsection
