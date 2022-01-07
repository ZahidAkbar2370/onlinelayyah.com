@extends("Seller.seller_panel")
@section("content")

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="row">
	<h3 class="text-center mb-3">Loan Detail</h3>
			<!-- <a href="{{url('seller-add-categorey')}}" style="width: 190px"><button class="btn btn-primary" style="width: 190px">Add Categorey</button></a> -->
			<!-- Button trigger modal -->
<a style="width: 190px"><button type="button" class="btn btn-primary" data-toggle="modal" style="width: 190px" data-target="#exampleModal">
  Add Loan
</button></a>
<span>Give: <b>{{$give_amount ?? 0}}</b></span>
<span>Recived: <b>{{$recived_amount ?? 0}}</b></span>
<span>Remaining Total: <b>{{$give_amount - $recived_amount ?? 0}}</b></span>
		<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill">
				
				<table class="table table-hover my-0"  id="myTable">
					<thead>
						<tr>
							<th>Sr #</th>
							<th>Customer Name</th>
							<th>Loan Type</th>
							<th>Amount</th>
							<th>Description</th>
							<!-- <th class="d-none d-xl-table-cell">Publication Status</th> -->
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>
						@if(!empty($all_loans))
						@foreach($all_loans as $key => $loan)
							<tr>
								<td>{{$key}}</td>
								<td>{{$loan["customer"]->customer_name}}</td>
								<td>{{$loan->loan_type}}</td>
								<td>{{$loan->amount}}</td>
								<td>{{$loan->description}}</td>
								<td>{{$loan->loan_date}}</td>
								<td>
									<a href="{{url('seller-delete-loan',$loan->id)}}" class="btn btn-danger"><i class="align-middle" data-feather="trash-2"></i> <span class="align-middle"></span></a>
								</td>
							</tr>
						@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Loan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                                     <form method="POST" action="{{URL::to('seller-save-add-loan')}}">
                                        @csrf()
      <div class="modal-body">

                                         <div class="mb-3">
                                            <input id="customer_id" class="form-control form-control-lg @error('customer_id') is-invalid @enderror" value="{{$id ?? 1}}" type="hidden" name="customer_id" placeholder="customer id"  autocomplete="customer_id" autofocus/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Loan Type</label>
                                            <select  id="loan_type" class="form-control form-control-lg @error('loan_type') is-invalid @enderror" value="{{ old('loan_type') }}"name="loan_type" placeholder="loan type" required  autocomplete="loan_type" autofocus>
                                                <option value="">Select Type</option>
                                                <option value="recive">Recive</option>
                                                <option value="give">Give</option>
                                            </select>

                                            @error('loan_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Amount</label>
                                            <input id="amount" class="form-control form-control-lg @error('amount') is-invalid @enderror" value="{{ old('amount') }}" type="text" name="amount" placeholder="amount" required  autocomplete="amount" autofocus/>

                                            @error('amount')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <input id="description" class="form-control form-control-lg @error('description') is-invalid @enderror" value="{{ old('description') }}" type="text" name="description" placeholder="description" required  autocomplete="description" autofocus/>

                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3" style="display: none">
                                            <label class="form-label">Bill</label>
                                            <input id="bill" class="form-control form-control-lg @error('bill') is-invalid @enderror" value="none" type="text" name="bill" placeholder="bill"  autocomplete="bill" autofocus/>

                                            @error('bill')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Loan Date</label>
                                            <input id="loan_date" class="form-control form-control-lg @error('loan_date') is-invalid @enderror" value="{{ old('loan_date') }}" type="date" name="loan_date" placeholder="loan date" required  autocomplete="loan_date" autofocus/>

                                            @error('loan_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <!-- <div class="text-center mt-3"> -->
                                           <!--   <button type="submit" class="btn btn-lg btn-primary">
                                                {{ __('Save') }}
                                            </button> -->
                                            <!-- <a href="#" class="btn btn-lg btn-primary">Login</a> -->
                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
                                        <!-- </div> -->
                                    
                               <!--  </div>
                            </div>  -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection