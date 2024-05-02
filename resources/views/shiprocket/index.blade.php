<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Ship Rocket</title>
</head> 

<body>
    <div class="container">
       <div class="row">
        <div class="col-md-6">
            <h1 class="text-center py-4">Ship Rocket</h1>
        </div>
        <div class="col-md-6">
            <a href="{{route('indextable')}}" class="btn btn-primary  py-4">Table</a>
        </div>
       </div>
        <form action="{{route('store')}}" method="POST"> 
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">customer name</label>
                <input type="text" name="customer_name" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">last_name</label>
                <input type="text" name="last_name" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">billing_address</label>
                <input type="text" name="billing_address" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">billing_address_2</label>
                <input type="text" name="billing_address_2" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">billing_city</label>
                <input type="text" name="billing_city" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">billing_pincode</label>
                <input type="text" name="billing_pincode" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">billing_state</label>
                <input type="text" name="billing_state" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">billing_country</label>
                <input type="text" name="billing_country" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">billing_email</label>
                <input type="text" name="billing_email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">billing_phone</label>
                <input type="text" name="billing_phone" class="form-control" id="exampleInputPassword1">
            </div>

            <h2>Order Item</h2>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">sku</label>
                <input type="text" name="sku" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">units</label>
                <input type="text" name="units" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">selling_price</label>
                <input type="text" name="selling_price" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">discount</label>
                <input type="text" name="discount" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">tax</label>
                <input type="text" name="tax" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">hsn</label>
                <input type="text" name="hsn" class="form-control" id="exampleInputPassword1">
            </div>

            <h3>payment Method</h3>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">payment_method</label>
                <input type="text" name="payment_method" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">shipping_charges</label>
                <input type="text" name="shipping_charges" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">giftwrap_charges</label>
                <input type="text" name="giftwrap_charges" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">transaction_charges</label>
                <input type="text" name="transaction_charges" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">total_discount</label>
                <input type="text" name="total_discount" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">sub_total</label>
                <input type="text" name="sub_total" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">length</label>
                <input type="text" name="length" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">breadth</label>
                <input type="text" name="breadth" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">height</label>
                <input type="text" name="height" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">weight</label>
                <input type="text" name="weight" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>
