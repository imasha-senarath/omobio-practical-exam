<?php
    $con = mysqli_connect('localhost','root','','Exam');

    $selectUsers = "select * from users";
    $query = mysqli_query($con, $selectUsers);

    $response = array();
    $i=0;
    while($userRow = mysqli_fetch_assoc($query)){
        $response[$i]['name'] = $userRow['name'];
        $i++;
    }

    echo json_encode($response, JSON_PRETTY_PRINT);
      
?>