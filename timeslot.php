<?php



class Dateslot
{

  function insertData($post) {

$date = date('Y-m-d');

$items = $_POST['getItems'];

if(isset($_POST['checkId'])) {
$days = implode(",",$_POST['checkId']); 

$week = $_POST['get_week'];

  $duplicate = 0;

 try {

 require 'db.php';
 $stmt = $conn->query("SELECT * FROM week_slot where days = '".$days."' and date='".$date."'");

 $row_count = $stmt->rowCount();

if($row_count > 0) 
{
  $duplicate = 1; 
}else{
  $duplicate = 0; 
}

} catch(Exception $e) {
  echo $sql . "<br>" . $e->getMessage();
}

try {
  
  if($duplicate==0){
 
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO week_slot(week,days,date,items) VALUES ('".$week."','".$days."','".$date."','".$items."')";
 
  $statement = $conn->prepare($sql);

   $statement->execute(); 
   echo json_encode(array('status' => true,'message' => 'Data Inserted Successfully'));

  }else{

  echo json_encode(array('status' => true,'message' => "This date slot has already been added on '".$date."'"));

  }


} catch(Exception $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

}else{

  echo json_encode(array('status' => false,'message' => 'please select day'));
}
  }
}
?>