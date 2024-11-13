@extends('employee.employee_dashboard')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- partial -->

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">SERVICE DETAIL</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Service Table</h6>
    <a href="{{route('employee.service.addservice')}}" class="btn btn-inverse-warning">ADD</a>
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>SERVICE ID</th>
            <th>SERVICE TYPE</th>
            <th>SERVICE COST</th>
          </tr>
        </thead>
        <tbody>
          @foreach($types as $key=>$item)
          <tr>
            <td>{{ $item->id}}</td>
            <td>{{ $item->name}}</td>
            <td>{{ $item->cost}}</td>
            <td>
              <a href="{{route('employee.service.editfile.editservice',$item->id)}}" class="btn btn-inverse-warning">Edit</a>
              <a href="{{route('employee.service.servicedelete',$item->id)}}" class="btn btn-inverse-Danger">Delete</a>
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