<?php

$conn=mysqli_connect('localhost','root','','testing');

$action=$_POST['action'];

if($action=='insert_data'){
    $title=$_POST['title'];
    $start_event=$_POST['start'];
    $end_event=$_POST['end'];

    $sql="INSERT INTO events(id,title,start_event,end_event) VALUES('','$title','$start_event','$end_event');";
    $res=mysqli_query($conn,$sql);
}

if($action=='delete_data'){
    $id=$_POST['id'];

    $sql="DELETE FROM events WHERE id='$id';";
    $res=mysqli_query($conn,$sql);
}
?>