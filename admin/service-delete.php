<?php 

include('includes/conn.php');
if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM services WHERE sid=$id";
    $result = mysqli_query($conn, $sql)

    if($result){
        header('Loaction: service.php');
    }else{
        die("nothing happend");
    }
}

?>