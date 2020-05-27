<?php
session_start();
header('Content-Type: application/json');
require("dbconnection.php");
$id= $_REQUEST['id'];
$success=0;
try{
  $query = "select tracking.*,status from tracking
  left join order_status on tracking.order_status_id = order_status.id
  left join orders on tracking.order_id = orders.id
  where order_no=".$id." order by date";
  $data = getData($con,$query);
  if(count($data) > 0){
  $success="1";
  }
} catch(PDOException $ex) {
   $data=["error"=>$ex];
   $success="0";
}
echo json_encode(array("success"=>$success,"data"=>$data,$query));
?>