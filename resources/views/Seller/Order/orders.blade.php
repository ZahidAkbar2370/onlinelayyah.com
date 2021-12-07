@extends("Seller.seller_panel")
@section("content")


<div class="row">
	<h3 class="text-center mb-3">Orders</h3>
		<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill">
				
				<table class="table table-hover my-0"  id="myTable">
					<thead>
						<tr>
							<th>Sr #</th>
							<th>Buyer Name</th>
							<th>Email</th>
							<!-- <th class="d-none d-xl-table-cell">Publication Status</th> -->
                            <th>Items</th>
                            <th>Grand Price</th>
                            <th>Order Status</th>
                            <th>Order at</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>
						@if(!empty($all_orders))
						@foreach($all_orders as $key => $order)
							<tr>
								<td>{{$key}}</td>
								<td>{{$order->name}}</td>
								<td>{{$order->email}}</td>
								<td>{{$order->order_items}}</td>
								<td>{{$order->grand_total}}</td>
                                <td>{{$order->status}}</td>
								<td>{{$order->created_at}}</td>
								<td>
                                    <a href="{{url('seller-delete-order',$order->invoiceID)}}" class="btn btn-danger"><i class="align-middle" data-feather="trash-2"></i> <span class="align-middle"></span></a>
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