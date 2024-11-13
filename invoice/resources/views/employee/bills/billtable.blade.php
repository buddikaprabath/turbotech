@extends('employee.employee_dashboard')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- partial -->

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">invoice detail</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">invoice Table</h6>
    <a href="{{route('employee.bills.addbill')}}" class="btn btn-inverse-warning">ADD</a>
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>BILL ID</th>
            <th>PRODUCT</th>
            <th>QTY</th>
            <th>PRODUCT COST</th>
            <th>SERVICE</th>
            <th>SERVICE COST</th>
            <th>TOTAL</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($types as $key=>$item)
          <tr>
            <td>{{ $item->id}}</td>
            <td>{{ $item->Product}}</td>
            <td>{{ $item->QTY}}</td>
            <td>{{ $item->pro}}</td>
            <td>{{$item->price}}</td>
            <td>
              <a href="{{route('employee.bills.showbill',$item->id)}}" class="btn btn-inverse-warning">Edit</a>
              <a href="{{route('employee.bills.billdelete',$item->id)}}" class="btn btn-inverse-Danger">Delete</a>
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