@extends('employee.employee_dashboard')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- partial -->

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Appoinment Detail</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Appoinment Table</h6>
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Appoinment ID</th>
            <th>Customer name</th>
            <th>Appoinment date</th>
            <th>Appoinment time</th>
            <th>Phone</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($types as $key=>$item)
          <tr>
            <td>{{ $item->id}}</td>
            <td>{{ $item->name}}</td>
            <td>{{ $item->appoinment_date}}</td>
            <td>{{ $item->appoinment_time}}</td>
            <td>{{ $item->phone}}</td>
            <td>
              <a href="{{route('employee.appoinments.appoinmentedit',$item->id)}}" class="btn btn-inverse-warning">Edit</a>
              <a href="{{route('employee.appoinments.appoinmentdelete',$item->id)}}" class="btn btn-inverse-Danger">Delete</a>
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