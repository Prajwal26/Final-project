<?php
$conn = new mysqli("localhost", "root", "", "draw_event");
// $personid = $_POST['personid'];
$postdata = file_get_contents("php://input");
    $r = json_decode($postdata);
    mysqli_query($conn,"update data set Val= '".$r->s."' where Sno = '".$r->s1."';");
    echo "55";
 
?>