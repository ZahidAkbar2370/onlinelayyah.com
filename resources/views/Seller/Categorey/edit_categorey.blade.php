@extends("Seller.seller_panel")
@section("content")

<main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row">
               

                 <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center">
                            <h1><b>Edit Categorey</b></h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                     <form method="POST" action="{{URL::to('seller-update-categorey',$edit_categorey->id)}}">
                                        @csrf()

                                        <div class="mb-3">
                                            <label class="form-label">Categorey Name</label>
                                            <input id="categorey_name" class="form-control form-control-lg @error('categorey_name') is-invalid @enderror" value="{{ $edit_categorey->categorey_name }}" type="text" name="categorey_name" placeholder="Enter your Categorey Name" required  autocomplete="categorey_name" autofocus/>

                                            @error('categorey_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Publication Status</label>
                                            <select id="publication_status" class="form-control form-control-lg @error('publication_status') is-invalid @enderror" value="{{$edit_categorey->publication_status}}" type="text" name="publication_status" required  autocomplete="publication_status" autofocus>
                                                <option value="1" {{ ( $edit_categorey->publication_status == "1" ) ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ ( $edit_categorey->publication_status == "0" ) ? 'selected' : '' }}>In-active</option>
                                            </select>

                                            @error('publication_status')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="text-center mt-3">
                                             <button type="submit" class="btn btn-lg btn-primary">
                                                {{ __('Save') }}
                                            </button>
                                            <!-- <a href="#" class="btn btn-lg btn-primary">Login</a> -->
                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- card body  -->
                        </div><!-- card -->

                    </div> <!-- col md -->
                </div> <!-- col  -->
            </div>
        </div>
    </main>

@endsection