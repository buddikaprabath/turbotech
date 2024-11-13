@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">add stock</a></li>
            <li class="breadcrumb-item active" aria-current="page">add stock</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-13 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Register Here</h4>
                    <form method="POST" action="{{ route('addstock') }}" id="signupForm">
                      @csrf
                          <div class="mb-3">
                              <label for="name" class="form-label">product  Name</label>
                              <input id="name" class="form-control" name="name" type="text">
                          </div>
                          <div class="mb-3">
                              <label for="address" class="form-label">price</label>
                              <input id="address" class="form-control" name="address">
                          </div>
                          

                      <input class="btn btn-primary" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

        
@endsection