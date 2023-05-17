<?php

if (isset($_POST['checking_viewbtn']))
{

    $r_id = $_POST['requirements_id'];
   // echo $return =$r_id;

   

                                 $connection = mysqli_connect("localhost","root","","food_distribution_system_db","3307");
                                 $query = "SELECT * FROM requirements WHERE id = '$r_id'";
                                 $query_run = mysqli_query($connection, $query);
                                 
                                 if(mysqli_num_rows($query_run) > 0)
                                 {
                                        foreach($query_run as $row)
                                        {
                                            echo $return = '
                                                <h5> ID: ' . $row['id'] . '</h5>
                                                <h5> Product Category: ' . $row['product_category'] .'</h5>
                                                <h5> Product Name: ' . $row['product_name'] . '</h5>
                                                <h5> Quantity: ' . $row['Quantity'] . '</h5>
                                                <h5> Packaging Preference: ' . $row['pack_preference'] . '</h5>
                                                <h5> Preferred Delivery Date: ' . $row['preferred_day'] . '</h5>
                                                 <h5> Preferred Delivery Time: ' . $row['preferred_time'] . '</h5>
                                            
                                            
                                            
                                            
                                            ';

                                        }
                                           }
                                            else
                                            {
                                                echo $return = "<h5>No Record Found</h5>";
                                            }
                                        
                                 
}




?>