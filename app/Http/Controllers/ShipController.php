<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use Illuminate\Http\Request;

class ShipController extends Controller
{
    public function indextable()
    {
        $datas = Ship::all();
        return view('shiprocket.table', compact('datas'));
    }
    public function index()
    { 
        return view('shiprocket.index');
    }
    public function store(Request $request)
    {
        $data = new Ship();
        $data->customer_name = $request->customer_name;
        $data->last_name = $request->last_name;
        $data->billing_address = $request->billing_address;
        $data->billing_address_2 = $request->billing_address_2;
        $data->billing_city = $request->billing_city;
        $data->billing_pincode = $request->billing_pincode;
        $data->billing_state = $request->billing_state;
        $data->billing_country = $request->billing_country;
        $data->billing_email = $request->billing_email;
        $data->billing_phone = $request->billing_phone;
        $data->name = $request->name;
        $data->sku = $request->sku;
        $data->units = $request->units;
        $data->selling_price = $request->selling_price;
        $data->discount = $request->discount;
        $data->tax = $request->tax;
        $data->hsn = $request->hsn;
        $data->payment_method = $request->payment_method;
        $data->shipping_charges = $request->shipping_charges;
        $data->giftwrap_charges = $request->giftwrap_charges;
        $data->transaction_charges = $request->transaction_charges;
        $data->total_discount = $request->total_discount;
        $data->sub_total = $request->sub_total;
        $data->length = $request->length;
        $data->breadth = $request->breadth;
        $data->height = $request->height;
        $data->weight = $request->weight;
        $data->save();
        return redirect()->back();
    }

    public function ship($id)
    {
        $ships = ship::find($id);
        // dd($ships->id);
        $customerName = $ships->customer_name;
        $orderId = $ships->id;
        // dd($orderId);

        $products = [ 
            [
                'name' => 'Product1',
                'sku' => 'Product1',
                'units' => '10',
                'selling_price' => 100,
                'discount' => '',
                'tax' => '',
                'hsn' => '123456',
            ],
            [
                'name' => 'Product2',
                'sku' => 'Product2',
                'units' => '10',
                'selling_price' => 150,
                'discount' => '',
                'tax' => '',
                'hsn' => '123456',
            ],
        ];

        #Delivery Customer Details
        $customer = [
            'name' => 'Ram',
            'last_name' => 'R',
            'land_mark' => '4th cross',
            'address' => '122, west street',
            'city' => 'salem',
            'pincode' => '636008',
            'state' => 'Tamilnadu',
            'country' => 'india',
            'email' => 'ram@gmail.com',
            'phone' => '9876543210',
        ];

        #Order Details
        // $order_no = date('Ymdhis');
        // $order_date = date('Y-m-d h:i');
        $total_amount = 250;
        $order_type = 'code'; #cod or online
        #order data
        $order_data = [
            'order_id' => $orderId,
            'order_date' => '2024-05-23 11:11',
            'pickup_location' => 'test',
            'billing_customer_name' => "$customerName",
            'billing_last_name' => "$ships->last_name",
            'billing_address' => 'wadi',
            'billing_address_2' => 'Near wadi',
            'billing_city' => 'Nagpur',
            'billing_pincode' => '440012',
            'billing_state' => 'Nagpur',
            'billing_country' => 'India',
            'billing_email' => 'bhupendrabalapure@gmail.com',
            'billing_phone' => '8149886763',
            'shipping_is_billing' => true,
            'shipping_customer_name' => '',
            'shipping_last_name' => '',
            'shipping_address' => '',
            'shipping_address_2' => '',
            'shipping_city' => '',
            'shipping_pincode' => '',
            'shipping_country' => '',
            'shipping_state' => '',
            'shipping_email' => '',
            'shipping_phone' => '',
            'order_items' => $products,
            'payment_method' => $order_type,
            'shipping_charges' => 0,
            'giftwrap_charges' => 0,
            'transaction_charges' => 0,
            'total_discount' => 0,
            'sub_total' => $total_amount,
            'length' => 1,
            'breadth' => 1,
            'height' => 1,
            'weight' => 1,
        ];

        // Convert the array to JSON format
        $jsonData = json_encode($order_data);

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://apiv2.shiprocket.in/v1/external/orders/create/adhoc',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $jsonData,
            CURLOPT_HTTPHEADER => ['Content-Type: application/json', 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL2FwaXYyLnNoaXByb2NrZXQuaW4vdjEvZXh0ZXJuYWwvYXV0aC9sb2dpbiIsImlhdCI6MTcwNDQzODcyNywiZXhwIjoxNzA1MzAyNzI3LCJuYmYiOjE3MDQ0Mzg3MjcsImp0aSI6IjE3cXNOS3R4dHI5VG5hTlciLCJzdWIiOjM0NTIzNTksInBydiI6IjA1YmI2NjBmNjdjYWM3NDVmN2IzZGExZWVmMTk3MTk1YTIxMWU2ZDkifQ.uoJyKugMS-5ZnKc8khw5X6CjViYjxntw1lBwIXrbTm0'],
        ]);
        $SR_login_Response = curl_exec($curl);
        curl_close($curl);
        //$SR_login_Response_out = json_decode($SR_login_Response);
        // echo '<pre>';
        // print_r($SR_login_Response);
        dd($SR_login_Response);
        return redirect()
            ->route('indextable')
            ->with('msg', 'ship sucessfully ....');
    }

    public function token()
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://apiv2.shiprocket.in/v1/external/auth/login',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => "{\n    \"email\": \"omka2r@gmail.com\",\n    \"password\": \"Bhupendra@2016\"\n}",
            CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
        ]);
        $SR_login_Response = curl_exec($curl);
        curl_close($curl);
        $SR_login_Response_out = json_decode($SR_login_Response);
        echo $token = $SR_login_Response_out->{'token'};
    }

    public function track()
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://apiv2.shiprocket.in/v1/external/courier/track?order_id=224-47826',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_HTTPGET => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_HTTPHEADER => ['Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL2FwaXYyLnNoaXByb2NrZXQuaW4vdjEvZXh0ZXJuYWwvYXV0aC9sb2dpbiIsImlhdCI6MTcwNDQzODcyNywiZXhwIjoxNzA1MzAyNzI3LCJuYmYiOjE3MDQ0Mzg3MjcsImp0aSI6IjE3cXNOS3R4dHI5VG5hTlciLCJzdWIiOjM0NTIzNTksInBydiI6IjA1YmI2NjBmNjdjYWM3NDVmN2IzZGExZWVmMTk3MTk1YTIxMWU2ZDkifQ.uoJyKugMS-5ZnKc8khw5X6CjViYjxntw1lBwIXrbTm0'],
        ]);
        $SR_login_Response = curl_exec($curl);
        curl_close($curl);
        //$SR_login_Response_out = json_decode($SR_login_Response);
        // echo '<pre>';
        // print_r($SR_login_Response);
        dd($SR_login_Response);
    }
}
