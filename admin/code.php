<?php 
session_start();
include('includes/conn.php');

// Updating data in services
if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $sname = $_POST['edit_sname'];
    $desc = $_POST['edit_desc'];
    $rate = $_POST['edit_rate'];

    $query = "UPDATE services SET s_name='$sname', description='$desc', visiting_price='$rate' WHERE sid='$id'";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['success']= "Your Data Updated";
        header('Location: service.php');
    }
    else
    {
        $_SESSION['success']= "Your Data Not Updated";
        header('Location: service.php');
    }
}



//deleting data in service
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM services WHERE sid='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['success']= "Your Data is DELETED";
        header('Location: service.php');
    }
    else
    {
        $_SESSION['status']= "Your Data is Not DELETED";
        header('Location: service.php');
    }
}

//about us data for input
if(isset($_POST['Add_btn']))
{
    $id = $row['aid'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES["image"]['name'];

    $query = "INSERT INTO about_us(title, description, image) VALUES ('$title', '$description', '$image')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['success']= "Your Data is Added";
        header('Location: aboutus.php');
        exit(0);
    }
    else
    {
        $_SESSION['status']= "Your Data is Added";
        header('Location: aboutus.php');
        exit(0); 
    }
}


//about us edit
if(isset($_POST['about_edit_btn']))
{
    $id = $_POST['about_edit_id'];

    $query = "SELECT * FROM about_us WHERE aid='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo "$id";
    }

}

//update about us

if(isset($_POST['About_Add_btn']))
{
    $id = $_POST['about_edit_id'];
    $title = $_POST['edit_title'];
    $description = $_POST['edit_description'];

    $query = "UPDATE about_us SET title='$title', description='$description' WHERE aid='$id'";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['success']= "Your Data Updated";
        header('Location: aboutus.php');
    }
    else{
        $_SESSION['status']= "Your Data Updated";
        header('Location: aboutus.php');
    }
}




// deleteing about us
if(isset($_POST['about_delete_btn']))
{
    $id = $_POST['about_delete_id'];

    $query = "DELETE FROM about_us WHERE aid='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['success']= "Your Data is DELETED";
        header('Location: aboutus.php');
    }
    else
    {
        $_SESSION['status']= "Your Data is Not DELETED";
        header('Location: aboutus.php');
    }
}



// updating service type value 

if(isset($_POST['update_st']))
{
    $id = $_POST['service_id'];
    $stype = $_POST['edit_cname'];

    $query = "UPDATE service_detail SET c_name='$stype' where ssid='$id'";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['success']= "Your Data is Updated";
        header('Location: service-detail1.php');

    }
    else
    {
        $_SESSION['success']= "Your Data is not Updated";
        header('Location: service-detail1.php');
    }

}


// sub service updating 
if(isset($_POST['update_sservice']))
{
    $id = $_POST['subservice_id'];
    $sub = $_POST['edit_sservice'];

    $query = "UPDATE sub_service SET sub_name = '$sub' where sbid = '$id'";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['success']= "Your Data is Updated";
        header('Location: service-detail2.php');
    }
    else
    {
        $_SESSION['success']= "Your Data is not Updated";
        header('Location: service-detail2.php');
    }
}

?>

