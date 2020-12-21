<?php
    $con = mysqli_connect('localhost','root','','Exam');

    $response = array();
    $selectUsers = 'select * from user';
    $query = mysqli_query($con, $selectUsers);

    if($query) {
        $i=0;
        while($userRow = mysqli_fetch_assoc($query)){
            $response[$i]['name'] = $userRow['name'];
            $i++;
        }
    
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
      
?>