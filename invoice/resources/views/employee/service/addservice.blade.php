@extends('employee.employee_dashboard')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Stocks</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Service</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-13 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Service Here</h4>
                    <form method="POST" action="{{ route('Addservice') }}" id="signupForm">
                      @csrf
                          <div class="mb-3">
                              <label for="Type" class="form-label"> Service Type</label>
                              <input id="Type" class="form-control" name="Type" type="text" placeholder="Eneter Service Type">
                          </div>
                          <div class="mb-3">
                              <label for="Cost" class="form-label">Cost</label>
                              <input id="Cost" class="form-control" name="Cost" placeholder="Enter Service Cost">
                          </div>
                          
                      <input class="btn btn-primary" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

        
@endsection