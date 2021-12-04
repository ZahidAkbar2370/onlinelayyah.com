@extends("Seller.seller_panel")
@section("content")

<div class="row">
	<h3 class="text-center mb-3">All Purchase Stocks</h3>
	<a href="{{url('seller-add-purchase-stock')}}" style="width: 190px"><button class="btn btn-primary" style="width: 190px">Add Stock</button></a>
		<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill">
				<div class="card-header">
					<select id="selectInput" style="width: 180px;height: 30px">
						<option value="1">Supplier Name</option>
						<option value="2">Product Name</option>
						<option value="3">Quantity</option>
					</select>
						<input type="text" name="myInput" id="myInput" onkeyup="myFunction()"  style="width: 180px;height: 30px">

				</div>
				
				<table class="table table-hover my-0" id="myTable">
					<thead>
						<tr>
							<th>Sr #</th>
							<th>Supplier Name</th>
							<th>Product Name</th>
							<th>Quantity</th>
							<!-- <th class="d-none d-xl-table-cell">Publication Status</th> -->
							<th>Purchase Price</th>
							<th>Total Price</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>
						@if(!empty($all_purchase_stocks))
						@foreach($all_purchase_stocks as $key => $stock)
							<tr>
								<td>{{$key}}</td>
								<td>{{$stock->supplier_id}}</td>
								<td>{{$stock->product_id}}</td>
								<td>{{$stock->quantity}}</td>
								<td>{{$stock->purchase_price}}</td>
								<td>{{$stock->total_price}}</td>
								<td>
									<a href="seller-edit-purchase-stock/{{$stock->id}}" class="btn btn-info"><i class="align-middle" data-feather="edit"></i> <span class="align-middle"></span></a>
									<a href="seller-delete-purchase-stock/{{$stock->id}}" class="btn btn-danger"><i class="align-middle" data-feather="trash-2"></i> <span class="align-middle"></span></a>
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