@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Create</a></li>
            <li class="breadcrumb-item active" aria-current="page">Invoice</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12">
<div class="card">
  <div class="card-body">
    <div class="container-fluid d-flex justify-content-between">
      <div class="col-lg-3 ps-0">
        <a href="#" class="noble-ui-logo logo-light d-block mt-3">TURBO<span>TECH</span></a>                 
        <p class="mt-1 mb-1"><b>BCI Campus</b></p>
        <p>108,<br> Bolawalana<br>Negombo.</p>
        <h5 class="mt-5 mb-2 text-muted">Invoice to :</h5>
        <p>Joseph E Carr,<br> 102, 102  Crown Street,<br> London, W3 3PR.</p>
      </div>
      <div class="col-lg-3 pe-0">
        <h4 class="fw-bolder text-uppercase text-end mt-4 mb-2">invoice</h4>
        <h6 class="text-end mb-5 pb-4"></h6>
        <p class="text-end mb-1">Balance Due</p>
        <h4 class="text-end fw-normal"></h4>
        <h6 class="mb-0 mt-3 text-end fw-normal mb-2"><span class="text-muted">Invoice Date :</span> 25rd Jan 2022</h6>
        <h6 class="text-end fw-normal"><span class="text-muted">Due Date :</span> 12th Jul 2022</h6>
      </div>
    </div>
    <div class="container-fluid mt-5 d-flex justify-content-center w-100">
      <div class="table-responsive w-100">
          <table class="table table-bordered">
            <thead>
              <tr>
                  <th>#</th>
                  <th>Description</th>
                  <th class="text-end">Quantity</th>
                  <th class="text-end">Unit cost</th>
                  <th class="text-end">Total</th>
                </tr>
            </thead>
            <tbody>
             
            </tbody>
          </table>
        </div>
    </div>
    <div class="container-fluid mt-5 w-100">
      <div class="row">
        <div class="col-md-6 ms-auto">
            <div class="table-responsive">
              <table class="table">
                  <tbody>
                    <tr>
                      <td>Sub Total</td>
                      <td class="text-end"></td>
                    </tr>
                    <tr>
                      <td>TAX (12%)</td>
                      <td class="text-end"></td>
                    </tr>
                    <tr>
                      <td class="text-bold-800">Total</td>
                      <td class="text-bold-800 text-end"></td>
                    </tr>
                    <tr>
                      <td>Payment Made</td>
                      <td class="text-danger text-end"></td>
                    </tr>
                    <tr class="bg-dark">
                      <td class="text-bold-800">Balance Due</td>
                      <td class="text-bold-800 text-end"></td>
                    </tr>
                  </tbody>
              </table>
            </div>
        </div>
      </div>
    </div>
    <div class="container-fluid w-100">
      <a href="javascript:;" class="btn btn-primary float-end mt-4 ms-2"><i data-feather="send" class="me-3 icon-md"></i>Send Invoice</a>
      <a href="javascript:;" class="btn btn-outline-primary float-end mt-4"><i data-feather="printer" class="me-2 icon-md"></i>Print</a>
    </div>
  </div>
</div>
        </div>
    </div>
</div>
@endsection