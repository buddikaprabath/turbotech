@extends('employee.employee_dashboard')
@section('content')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">INVOICE</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Invoice</li>
        </ol>
    </nav>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Inputs</h6>
                <form method="POST" action="{{ route('invoices.create') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Customer name</label>
                        <input type="text" class="form-control" id="exampleInputText1"placeholder="Enter Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Customer Address</label>
                        <input type="text" class="form-control" id="exampleInputText1"placeholder="Enter Name">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Customer phone No:</label>
                        <input type="text" class="form-control" id="exampleInputText1"placeholder="Enter Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Select Input</label>
                        <select class="form-select" id="exampleFormControlSelect1">
                            <option selected disabled>Select a product</option>
                                @foreach(\App\Models\stocks::latest()->pluck('Category')->unique() as $category)
                                    <option value="{{ $category }}">{{ $category }}</option>
                                 @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlSelect2" class="form-label">Example multiple select</label>
                        <select multiple class="form-select" id="exampleFormControlSelect2">
                            @foreach(\App\Models\stocks::latest()->pluck('Category')->unique() as $category)
                            <option value="{{ $category }}">{{ $category }}</option>
                         @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlSelect2" class="form-label">Example multiple select</label>
                        <select multiple class="form-select" id="exampleFormControlSelect2">
                            @foreach(\App\Models\services::latest()->pluck('type')->unique() as $Type)
                            <option value="{{ $Type }}">{{ $Type }}</option>
                         @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Cash Amount</label>
                        <input type="text" class="form-control" id="exampleInputText1"placeholder="Enter Amount">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection