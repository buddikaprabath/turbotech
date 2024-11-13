@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- partial -->

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Employee Detail</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Employee Table</h6>
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Employee_ID</th>
            <th>Employee_name</th>
            <th>Employee_Address</th>
            <th>DOB</th>
            <th>Gender</th>
            <th>Position</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($types as $key=>$item)
          <tr>
            <td>{{ $item->id}}</td>
            <td>{{ $item->EmpName}}</td>
            <td>{{ $item->EmpAdd}}</td>
            <td>{{ $item->EmpDob}}</td>
            <td>{{ $item->EmpGender}}</td>
            <td>{{ $item->EmpType}}</td>
            <td>
              <a href="{{route('admin.Employeedetail.editemployee',$item->id)}}" class="btn btn-inverse-warning">Edit</a>
              <a href="{{route('admin.Employeedetail.deleteemployee',$item->id)}}" class="btn btn-inverse-Danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
        </div>
    </div>

</div>

<!-- partial:../../partials/_footer.html -->
@endsection