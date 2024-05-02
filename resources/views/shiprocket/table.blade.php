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

    <div class="container py-5">
        @if ($message = Session::get('msg'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
        
    @endif
        <table class="table">
            <a href="{{route('index')}}" class="btn btn-primary">create</a>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">customer_name</th>
                    <th scope="col">last_name</th>
                    <th scope="col"> billing_address</th>
                    <th scope="col"> billing_address_2</th>
                    <th scope="col"> billing_city</th>
                    <th scope="col"> billing_pincode</th>
                    <th scope="col"> billing_state</th>
                    <th scope="col"> billing_country</th>
                    <th scope="col"> billing_email</th>
                    <th scope="col"> billing_phone</th>
                    <th scope="col"> name</th>
                    <th scope="col"> Action</th>
                    {{-- <th scope="col"> sku</th>
                    <th scope="col"> units</th>
                    <th scope="col"> selling_price</th>
                    <th scope="col"> discount</th>
                    <th scope="col"> tax</th>
                    <th scope="col"> hsn</th>
                    <th scope="col"> payment_method</th> --}}

                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->customer_name }}</td>
                        <td>{{ $item->last_name }}</td>
                        <td>{{ $item->billing_address }}</td>
                        <td>{{ $item->billing_address_2 }}</td>
                        <td>{{ $item->billing_city }}</td>
                        <td>{{ $item->billing_pincode }}</td>
                        <td>{{ $item->billing_state }}</td>
                        <td>{{ $item->billing_country }}</td>
                        <td>{{ $item->billing_email }}</td>
                        <td>{{ $item->billing_phone }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a href="{{ route('ship', $item->id) }}" class="btn btn-dark">Ship</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
