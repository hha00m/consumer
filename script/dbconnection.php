<?php
try{

$con = new PDO('mysql:host=localhost;dbname=nahar', "root",
"hayder1986", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
//$con->exec("SET CHARACTER SET UTF8");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException  $e ){
echo "Error: ".$e;
}
function getData($db,$query,$parm = []) {
  $stmt = $db->prepare($query);
  $stmt->execute($parm);
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $rows;
}
function setData($db,$query,$parm = []) {
  $stmt = $db->prepare($query);
  $stmt->execute($parm);
  $count = $stmt->rowCount();
  return $count;
}

?>