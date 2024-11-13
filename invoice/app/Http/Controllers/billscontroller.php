<?php

namespace App\Http\Controllers;
use App\Models\bills;
use Illuminate\Http\Request;

class billscontroller extends Controller
{
    public function createBill()
    {
        $services = Service::all();
        $products = Product::all();

        return view('bills.create', compact('services', 'products'));
    }

    public function storeBill(Request $request)
    {
        $bill = new Bill();
        $bill->customer_name = $request->input('customer_name');
        $bill->save();  //save the bill first to get an ID

        // Decode JSON for services and products -DNSD
        $services = json_decode($request->input('services_data'), true) ?? [];
        $products = json_decode($request->input('products_data'), true) ?? [];

        
        // Handle services
        $serviceCost = 0;
        foreach ($services as $service) {
            $serviceObj = Service::find($service['id']);
            if($serviceObj){
                $serviceCost += $serviceObj['cost'] * $service['quantity'];
                $bill->services()->attach($service['id'], ['quantity' => $service['quantity']]);
            }
        }//DNSD

        // Handle products with quantity
        $totalProductPrice = 0;
        foreach ($products as $product){
            $productObj = Product::find($product['id']);
            if($productObj){
                $totalProductPrice += $productObj->price * $product['quantity'];
                $bill->products()->attach($product['id'], ['quantity' => $product['quantity']]);
            }
        }


        // Calculate total price
        $totalPrice = $serviceCost + $totalProductPrice;

        // Store total price in the bill
        $bill->total_price = $totalPrice;
        $bill->save();

        return redirect()->route('view.invoice', ['id' => $bill->id]);
    }

    public function viewInvoice($id)
    {
        try {
            // Fetch bill details from the database
            $bill = Bill::with(['services', 'products'])->findOrFail($id);

            // Calculate total cost
            $totalCost = $bill->total_price; // Start with the total price of the bill

            // Dummy code to display invoice
            return view('invoices.invoice', compact('bill', 'totalCost'));
        }catch (ModelNotFoundException $e) {
            return redirect()->back()->withErrors('Bill not found.');
        }
    }

    public function handlePayment(Request $request)
    {
        // Dummy code to handle payment confirmation
        $paymentStatus = $request->input('payment_status');

        if ($paymentStatus === 'success') {
            return "Payment successful! Thank you for your purchase.";
        } else {
            return "Payment failed. Please try again.";
        }
    }
}
