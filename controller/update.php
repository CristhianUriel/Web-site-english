<?php
include '../db/db.php';
if(isset($_POST["submit"])&& isset($_POST["res"])&& isset($_POST["categoria"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !==false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image)); 
        $res = stripslashes($_POST["res"]);
        $res = mysqli_real_escape_string(conexion(), $res);
        $categoria = $_POST['categoria'];
        $id=$_REQUEST['id'];
        
        
        $query="UPDATE actividades SET respuesta='$res',imagen='$imgContent',id_categoria='$categoria' WHERE id_actividades='$id'" ;
         $insert = mysqli_query(conexion(), $query);
        if($insert){
            header('Location:../datatables.php');
        }else{
            echo "no se modifico";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>
      