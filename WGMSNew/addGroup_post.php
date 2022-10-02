<?php
include('Connection.php');
if(isset($_POST['add'])){
    $course_id= stripcslashes (($_POST['course_id']));
    $course_number= stripcslashes (($_POST['course_number']));
    $courselink= stripcslashes (($_POST['courselink']));
    $group_name= stripcslashes (($_POST['group_name']));

}
$course_id=htmlentities(mysqli_real_escape_string($conn,$_POST['course_id']));
$course_number=htmlentities(mysqli_real_escape_string($conn,$_POST['course_number']));
$courselink=htmlentities(mysqli_real_escape_string($conn,$_POST['courselink']));
$group_name=htmlentities(mysqli_real_escape_string($conn,$_POST['group_name']));



if(empty($course_id)){

    $user_error='<p id="eroor">Please enter course id </p> <br>';
    $err_s=1;
    include('addGroup.php');



}
else if(empty($course_number)){

    $user_error='<p id="eroor">Please enter course number</p> <br>';
    $err_s=1;
    include('addGroup.php');



}
else if(empty($courselink)){

    $user_error='<p id="eroor">Please enter course link </p> <br>';
    $err_s=1;
    include('addGroup.php');



}
else if(empty($group_name)){
    $user_error='<p id="eroor">Please enter group name </p> <br>';
    $err_s=1;
    include('addGroup.php');
}
  



    

else{
if($err_s==0){
    $sql="INSERT INTO usergroup(course_id,course_number,courselink,group_name)
    VALUES('$course_id','$course_number','$courselink','$group_name')";
            mysqli_query($conn,$sql);

          header('location:index.php');

    

}
else{
    include('addGroup.php');

}


}

    