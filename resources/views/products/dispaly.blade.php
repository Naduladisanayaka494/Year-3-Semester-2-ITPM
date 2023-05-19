@extends('products.layout')

@section('content')
<!DOCTYPE html>
<html>
<head>
  <title>Report</title>
  <style>
    /* CSS styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    h1 {
      margin: 0;
    }

    nav {
      background-color: #666;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      margin: 0 10px;
    }

    .container {
      max-width: 900px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #333;
      color: #fff;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <header>
    <h1>Welcome to Vegetable</h1>
  </header>

  <nav>
    <a href="/">Home</a>
    <a href="#">About</a>
    <a href="/display">Vegetables</a>
    <a href="#">Farmer Information</a>
    <a href="/dashboard">Dashboard</a>
    <a href="#">Contact Us</a>
  </nav>

  <div class="container">
    <div class="card">
      <div class="card-header">
        <h2>Products</h2>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table>
            <thead>
              <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $item)
              <tr>
                <td>{{ $item->pname }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->qty }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

@endsection
