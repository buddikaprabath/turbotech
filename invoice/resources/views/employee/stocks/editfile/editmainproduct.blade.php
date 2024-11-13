@extends('employee.employee_dashboard')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">PRODUCTS</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Product Detail</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-13 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Product data</h4>
                    <form method="POST" action="{{ route('addmainstocks') }}" id="signupForm">
                      @csrf
                          <div class="mb-3">
                              <label for="category" class="form-label">Category Name</label>
                              <input id="category" class="form-control" name="category" type="text" value="{{$types->Category}}">
                          </div>
                          <div class="mb-3">
                              <label for="brand" class="form-label">Brand</label>
                              <input id="brand" class="form-control" name="brand" value="{{$types->brand}}">
                          </div>
                          <div class="mb-3">
                            <label for="size" class="form-label">Size</label>
                            <input id="size" class="form-control" name="size" value="{{$types->size}}">
                          </div>
                          <div class="mb-3">
                            <label for="price" class="form-label">price</label>
                            <input id="price" class="form-control" name="price" value="{{$types->price}}">
                          </div>
                      <input class="btn btn-primary" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

        
@endsection