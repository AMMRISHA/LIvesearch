<?php

$conn = mysqli_connect("localhost","root","","hossian_interior") or die("Connection failed");
    $sql = "SELECT * FROM  admin_details ";


$result = mysqli_query($conn , $sql) or die("SQL Query Failed");
$output="";
if(mysqli_num_rows($result)>0)
{
   $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
   
                    <tr>
                        <th> ID  </th>
                        <th> NAME </th>
                        <th> Password </th>
                        <th> Email</th>
                        <th> Phone</th>
                        <th width="100px">Edit</th>
                        <th width="100px">Delete</th>

                    </tr>';

                    while($row=mysqli_fetch_assoc($result))
                    {
                        $output .="<tr><td>{$row['Aid']}</td><td>{$row['Admin_name']}</td><td>{$row['Admin_password']}</td><td>{$row['Admin_email']}</td><td>{$row['Admin_ph_number']}</td> <td> <button class='edit-btn' data-eid='{$row['Aid']}'>Edit</button></td> <td> <button class='delete-btn' data-id='{$row['Aid']}'>Delete</button></td></tr>";
                    }
                    $output .='</table>';
                    mysqli_close($conn);

                    echo $output;
                    }
else{


    echo "<h2>No record found Save valid credentials</h2>";
}
?>