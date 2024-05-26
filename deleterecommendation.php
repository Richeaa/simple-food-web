<?php

if(isset($_GET["recommend_id"])) {

    $conn = mysqli_connect('localhost', 'root', '', 'mis');
    

    $recommendid = $_GET["recommend_id"];
    
    $sql = "DELETE FROM recommendation WHERE recommend_id = $recommendid";
    
    if(mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header("Location: recommendation.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} 
?>