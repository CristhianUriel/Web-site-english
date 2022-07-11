<div class="col-sm-6 col-md-5 col-lg-4">
    <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" alt="" height="250px" width="250px">
    <div class="input-group mb-3">
        <input type="hidden" class="respuesta col-xs-2 col-md-11 col-lg-8" name="<?php echo 'repuesta'.$row['id_actividades']?>" value="<?php echo $row['respuesta']; ?>" aria-label="Username" aria-describedby="basic-addon1">
        <input type="text" class="respuesta col-xs-2 col-md-11 col-lg-8" name="<?php echo 'answer' . $row['id_actividades']?>" aria-label="Username" aria-describedby="basic-addon1">
    </div>
</div>  
