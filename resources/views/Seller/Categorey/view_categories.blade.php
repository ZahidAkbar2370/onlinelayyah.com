@extends("Seller.seller_panel")
@section("content")

<div class="row">
	<h3 class="text-center mb-3">All Categories</h3>
		<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill">

				<div class="card-header">
					<a href="{{url('seller-add-categorey')}}"><button class="btn btn-primary">Add Categorey</button></a>
				</div>
				
				<table class="table table-hover my-0">
					<thead>
						<tr>
							<th>Sr #</th>
							<th>Name</th>
							<!-- <th class="d-none d-xl-table-cell">Publication Status</th> -->
							<th>Publication Status</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>
						@if(!empty($all_categories))
						@foreach($all_categories as $key => $categorey)
							<tr>
								<td>{{$key}}</td>
								<td>{{$categorey->categorey_name}}</td>
								@if($categorey->publication_status == "1")
									<td><span class="badge bg-success">Active</span></td>
								@else
									<td><span class="badge bg-danger">In-active</span></td>
								@endif
								<td>
									<a href="seller-edit-categorey/{{$categorey->id}}" class="btn btn-info">Edit</a>
									<a href="seller-delete-categorey/{{$categorey->id}}" class="btn btn-danger">Delete</a>
								</td>
							</tr>
						@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection