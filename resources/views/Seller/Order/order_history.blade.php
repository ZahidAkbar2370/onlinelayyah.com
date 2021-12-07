@extends("Seller.seller_panel")
@section("content")

<div class="row">
	<h3 class="text-center mb-3">Sale History</h3>
		<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill">
				
				<table class="table table-hover my-0"  id="myTable">
					<thead>
						<tr>
							<th>Sr #</th>
							<th>Invoice #</th>
							<th>Buyer Name</th>
							<!-- <th class="d-none d-xl-table-cell">Publication Status</th> -->
                            <th>Prodcut Name</th>
                            <th>Quantity</th>
                            <th>Sale Price</th>
                            <th>Discount Price</th>
                            <th>Total Price</th>
                            <th>Order Type</th>
                            <th>Order Status</th>
							<th>Created at</th>
							<!-- <th>Action</th> -->
						</tr>
					</thead>
					
					<tbody>
						@if(!empty($all_order_history))
						@foreach($all_order_history as $key => $order_history)
							<tr>
								<td>{{$key}}</td>
								<td>{{$order_history->invoice_id}}</td>
								<td>{{$order_history->name}}</td>
								<td>{{$order_history->product_name}}</td>
								<td>{{$order_history->quantity}}</td>
								<td>{{$order_history->sale_price}}</td>
								<td>{{$order_history->discount}}</td>
								<td>{{$order_history->total_price}}</td>
								<td>{{$order_history->sale_type}}</td>
								<td>{{$order_history->status}}</td>
								<td>{{$order_history->created_at}}</td>
							</tr>
						@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>


@endsection