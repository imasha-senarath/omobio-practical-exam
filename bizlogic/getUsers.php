<?php
    $con = mysqli_connect('localhost','root','','Exam');

    $userEmail = $_GET["email"];
    $userPassword = $_GET["password"];

    $response = array();
    $selectUser = "select * from user where email='$userEmail' AND password='$userPassword'";
    $query = mysqli_query($con, $selectUser);

    if($query) {
        $i=0;
        while($userRow = mysqli_fetch_assoc($query)){
            $response[$i]['name'] = $userRow['name'];
            $i++;
        }
    
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
      
?>