@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Employee</a></li>
            <li class="breadcrumb-item active" aria-current="page">Employee Registration</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-13 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Register Here</h4>
                    <form method="POST" action="{{ route('empregister') }}" id="signupForm">
                      @csrf
                          <div class="mb-3">
                              <label for="name" class="form-label">Employee Name</label>
                              <input id="name" class="form-control" name="name" type="text">
                          </div>
                          <div class="mb-3">
                              <label for="address" class="form-label">Employee Address</label>
                              <input id="address" class="form-control" name="address">
                          </div>
                          <div class="mb-3">
                              <label for="DOB" class="form-label">Date Of Birth</label>
                              <input id="DOB" class="form-control" name="DOB">
                          </div>
                          <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <input id="gender" class="form-control" name="gender">
                          </div>
                          <div class="mb-3">
                            <label for="position" class="form-label">Position</label>
                            <input id="position" class="form-control" name="position">
                          </div>

                      <input class="btn btn-primary" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

        
@endsection