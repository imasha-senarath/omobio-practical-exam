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
            $response[$i]['id'] = $userRow['id'];
            $response[$i]['name'] = $userRow['name'];
            $response[$i]['username'] = $userRow['username'];
            $response[$i]['email'] = $userRow['email'];
            $i++;
        }
    
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
      
?>