<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* CSS styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
    }

    header {
      background-color:  #0000FF;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    h1 {
      margin: 0;
      font-size: 36px;
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
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    form {
      margin-top: 20px;
    }

    label {
      font-weight: bold;
    }

    .form-control {
      margin-bottom: 20px;
    }

    button[type="submit"] {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #666;
    }
  </style>
</head>

<body>
  <header>
    <h1>FOODS TO YOUR DOORSTEP</h1>
  </header>

  <nav>
    <a href="/">Home</a>
    <a href="/aboutus">About</a>
    <a href="/display">Vegetables</a>
    <a href="#">Farmer Information</a>
    <a href="/dashboard">Dashboard</a>
    <a href="#">Contact Us</a>
    <a href="/tracking">Google Tracking</a>
  </nav>

  <div class="container">
    <h2>Contact Us</h2>
    <form>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your name">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email">
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
