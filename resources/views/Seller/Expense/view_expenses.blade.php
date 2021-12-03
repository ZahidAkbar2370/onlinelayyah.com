@extends("Seller.seller_panel")
@section("content")

<div class="row">
	<h3 class="text-center mb-3">All Expenses</h3>
	<a href="{{url('seller-add-expense')}}" style="width: 190px"><button class="btn btn-primary" style="width: 190px">Add Expense</button></a>
		<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill">
				<div class="card-header">
					<select id="selectInput" style="width: 180px;height: 30px">
						<option value="1">Title</option>
						<option value="2">Amount</option>
						<option value="3">Description</option>
						<option value="4">Data of expense</option>


					</select>
						<input type="text" name="myInput" id="myInput" onkeyup="myFunction()"  style="width: 180px;height: 30px">

				</div>
				
				<table class="table table-hover my-0" id="myTable">
					<thead>
						<tr>
							<th>Sr #</th>
							<th>Title</th>
							<!-- <th class="d-none d-xl-table-cell">Publication Status</th> -->
							<th>Amount</th>
							<th>Description</th>
							<th>Data of expense</th>

						</tr>
					</thead>
					
					<tbody>
						@if(!empty($all_expenses))
						@foreach($all_expenses as $key => $expense)
							<tr>
								<td>{{$key}}</td>
								<td>{{$expense->title}}</td>
								<td>{{$expense->amount}}</td>
								<td>{{$expense->description}}</td>
								<td>{{$expense->data_of_expense}}</td>


								<td>
									<a href="seller-edit-expense/{{$expense->id}}" class="btn btn-info">Edit</a>
									<a href="seller-delete-expense/{{$expense->id}}" class="btn btn-danger">Delete</a>
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