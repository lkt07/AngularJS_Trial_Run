

<?php
 

$conn = new mysqli('localhost','root','test','myfirstdb');
$data = array();

    $sql = "SELECT * FROM login";
    $result = $conn->query($sql);
    if ($result->num_rows >=0) {
        while($row = $result->fetch_assoc()) {
            $data[] = array("rollid"=>$row['rollid'],"productname"=>$row['user'],"dropdownlist"=>$row['pass']);

         
      
        }}
  
        echo json_encode($data);




?>