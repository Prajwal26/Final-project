<?php
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "draw_event");

$result = $conn->query("Select * from data");
$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}

// print_r($rs);
  $outp .= '{"Sno":"'  . $rs["Sno"].'",';
    $outp .= "\"".$rs['Name'].'" :"'   . $rs["Val"].'"}';
  // $outp .= '"Date":"'   . $rs["event_date"].'",';
  // $outp .= '"Budget":"'   . $rs["budget_end"]. '",';
  // $outp .= '"People":"'   . $rs["people"]. '",';
  // $outp .= '"Name":"'   . $rs["name"]. '",';
  //   $outp .= '"Email":"'   . $rs["email"]. '",';
  // $outp .= '"Contact":"'. $rs["contact"]. '"}';
}
// print_r($rs);
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>
