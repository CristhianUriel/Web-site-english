<?php
include '../db/db.php';
if ( isset($_POST['unidad'])) {

    $unidad = $_POST['unidad'];
    $mostrar = "SELECT * FROM actividades WHERE id_categoria = $unidad  ";
    $resul = mysqli_query(conexion(), $mostrar) or die(mysql_error());
    $correctas = 0;
    $incorrectas = 0;
    while ($row = $resul->fetch_assoc()) {
        if ( strcmp($_POST['answer1'], $row['respuesta']) === 0 ) {
            $correctas++;
        } 

        else if (strcmp($_POST['answer2'], $row['respuesta'])===0) {
            $correctas++;
        }
        else if (strcmp($_POST['answer3'], $row['respuesta'])===0) {
            $correctas++;
        } 
        else if (strcmp($_POST['answer4'], $row['respuesta'])===0) {
            $correctas++;
        } 
        else if (strcmp($_POST['answer5'], $row['respuesta'])===0) {
            $correctas++;
        } 
        else if (strcmp($_POST['answer6'],$row['respuesta'])===0) {
            $correctas++;
        } 
        else if (strcmp($_POST['answer7'],$row['respuesta'])===0) {
            $correctas++;
        } 
        else if (strcmp($_POST['answer8'], $row['respuesta'])===0) {
            $correctas++;
        } 
        else if (strcmp($_POST['answer9'], $row['respuesta'])===0) {
            $correctas++;
        } else {
            $incorrectas++;
        }
    }
    if($unidad==1){
        header('Location:../occupations.php?correctas='.$correctas.'&&unidad='.$unidad.'&&incorrectas='.$incorrectas);
        
    }elseif ($unidad ==2) {
        header('Location:../relationship.php?correctas='.$correctas.'&&unidad='.$unidad.'&&incorrectas='.$incorrectas);
    }elseif($unidad==3){
        header('Location:../places.php?correctas='.$correctas.'&&unidad='.$unidad.'&&incorrectas='.$incorrectas);
    }else if($unidad==4){
        header('Location:../family.php?correctas='.$correctas.'&&unidad='.$unidad.'&&incorrectas='.$incorrectas);
    }
    
}
?>


