<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monthly Feedback Report</title>
    <style>
        /* Add your custom styles here */

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        h1, h2, h3, h4, h5, h6 {
            margin: 0;
            padding: 0;
            font-family: 'Courier New', Courier, monospace;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table thead {
            background-color: #f2f2f2;
        }

        .table th, .table td {
            padding: 10px;
            text-align: center;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #ccc;
        }

        .brand-section {
            background-color: #0d1033;
            padding: 10px;
        }

        .brand-section h1 {
            color: #fff;
            font-size: 24px;
            margin-bottom: 0;
        }

        .footer {
            margin-top: 20px;
            color: #777;
            font-size: 12px;
        }

        .footer a {
            color: #777;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="brand-section">
            <h1>Monthly Feedback Report</h1>
        </div>

        <div class="logo">
            <img src="{{ public_path('/template/template/assets/img/avatar/logo.png') }}" alt="Logo" width="100" class="rounded-circle">
        </div>

        <h3 class="text-center">Monthly Report Of Product</h3>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vegetable as $item)
                <tr>
                    <td>{{ $item->pname }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->qty }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="footer">
            &copy; {{ date('Y') }} All Rights Reserved. 
            <a href="#">www.foods to your door step.com</a>
        </div>
    </div>
</body>
</html>
