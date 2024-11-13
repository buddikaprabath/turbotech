@extends('employee.employee_dashboard')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- partial -->

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">PRODUCT DETAIL</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Product Table</h6>
    <a href="{{route('employee.stocks.addmainstock')}}" class="btn btn-inverse-warning">ADD</a>
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>PRODUCT ID</th>
            <th>CATEGORY</th>
            <th>BRAND</th>
            <th>SIZE</th>
            <th>Price</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($types as $key=>$item)
          <tr>
            <td>{{ $item->id}}</td>
            <td>{{ $item->Category}}</td>
            <td>{{ $item->brand}}</td>
            <td>{{ $item->size}}</td>
            <td>{{$item->price}}</td>
            <td>
              <a href="{{route('employee.stocks.editfile.editmainproduct',$item->id)}}" class="btn btn-inverse-warning">Edit</a>
              <a href="{{route('employee.stocks.mainstockdelete',$item->id)}}" class="btn btn-inverse-Danger">Delete</a>
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