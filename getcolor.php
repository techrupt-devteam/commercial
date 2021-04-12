<?php
include('connection.php');
if(isset($_POST["id"])){
$variant = $_POST["id"];
$car = $_POST["car"];

    $sql = "SELECT * FROM commercial_product Where `car`= '".$car."' AND id=".$variant;
    $result = $conn->query($sql);
    $html ="<option>-Select color-</option>";
    while($row=mysqli_fetch_assoc($result))
    { 
       $html .="<option value=".$row['id'].">".$row['color']."</option>"; 
    } 

   echo $html;  
}
?>