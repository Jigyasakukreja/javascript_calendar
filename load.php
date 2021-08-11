<?php

$conn = mysqli_connect('localhost','root','','testing');

$data = array();

$query = "SELECT * FROM events ORDER BY id";
$res = mysqli_query($conn,$query);

foreach($res as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start_event"],
  'end'   => $row["end_event"]
 );
}

echo json_encode($data);

?>