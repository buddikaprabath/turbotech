@extends('employee.employee_dashboard')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Appoinment</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Appoinment Detail</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-13 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Appoinment data</h4>
                    <form method="POST" action="{{route('appoinmentdata')}}" id="signupForm">
                      @csrf
                          <div class="mb-3">
                              <label for="name" class="form-label">Customer Name</label>
                              <input id="name" class="form-control" name="name" type="text" value="{{$types->name}}">
                          </div>
                          <div class="mb-3">
                              <label for="date" class="form-label">Appoinment Date</label>
                              <input id="date" class="form-control" name="date" value="{{$types->appoinment_date}}">
                          </div>
                          <div class="mb-3">
                              <label for="time" class="form-label">Appoinment time</label>
                              <input id="time" class="form-control" name="time" value="{{$types->appoinment_time}}">
                          </div>
                          <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input id="phone" class="form-control" name="phone" value="{{$types->phone}}">
                          </div>
                      <input class="btn btn-primary" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

        
@endsection