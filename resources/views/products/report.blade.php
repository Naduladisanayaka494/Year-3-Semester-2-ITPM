<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
       
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 105%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
    
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: auto;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: left;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 8px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>
    <br/>
   <h3 style="font-family: 'Courier New', Courier, monospace;"><center>FOOD TO YOUR DOORSTEP</center></h3><br/>

<center><img src="{{ public_path('/template/template/assets/img/avatar/logo.png' ) }}"  alt="Image" width="100" class="rounded-circle"></center>
   <br/><br/>
    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">Monthly Feedback Report</h1>
                </div>
            </div>
        </div>
        
        <div class="body-section">
            <h3 class="heading" style="text-align: center;">Monthly Report Of Product</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                    <th style="font-family: 'Courier New', Courier, monospace; font-size:small" ><center>Product Name</center></th>
                        <th style="font-family: 'Courier New', Courier, monospace; font-size:small" ><center>Price</center></th>
                        <th style="font-family: 'Courier New', Courier, monospace; font-size:small" ><center>Quantity</center></th>
          
                                                 
                    </tr>
                </thead>
                <tbody>
                    @foreach($vegetable as $item)
                    <tr>
                   
               <td style="font-family: 'Courier New', Courier, monospace; font-size:small"><center>{{ $item->pname }}</center></td>
               <td style="font-family: 'Courier New', Courier, monospace; font-size:small"><center>{{ $item->price }}</center></td>
               <td style="font-family: 'Courier New', Courier, monospace; font-size:small"><center>{{ $item->qty }}</center></td>
            </tr>   
                            @endforeach
                           
                                </tbody>
            </table>
            <br>
        
            <p>&copy; 2022 All Rights Reserved. 
                <a href="#" class="float-right">www.superfashion.com</a>
            </p>
            
    </div>      
</body>
</html>