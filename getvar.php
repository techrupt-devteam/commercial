<?php
include('connection.php');
if(isset($_POST["id"])){
$car = $_POST["id"];

    $sql = "SELECT * FROM commercial_product Where `car`= '".$car."'";
    $result = $conn->query($sql);
    $html ="<option>-Select Variant-</option>";
    while($row=mysqli_fetch_assoc($result))
    { 
       $html .="<option value=".$row['id'].">".$row['varient']."</option>"; 
    } 

   echo $html;  
}
?>