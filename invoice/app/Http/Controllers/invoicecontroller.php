<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\invoice;
use App\Models\invoice_detail;

class invoicecontroller extends Controller
{
    public function create(Request $request)
    {
        // Validate incoming request if needed

        // Create an invoice
        $invoice = invoice::create([
            'balance' => $request->balance,
            'invoice_date' => $request->invoice_date,
            'total' => $request->total,
        ]);

        // Create invoice detail
        $invoiceDetail = invoice_detail::create([
            'invoice_id' => $invoice->id,
            'service' => $request->service,
            'product' => $request->product,
            'customer_name' => $request->customer_name,
        ]);

        // You can return a response indicating success or failure
        return response()->json(['message' => 'Invoice created successfully'], 201);
    }

    public function createForm()
    {
        return view('create_invoice');
    }
    public function invoicecreate()
    {
        return view('employee.bills.addinvoice');
    }
}
