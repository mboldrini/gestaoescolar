<div class="content-wrapper">

<section class="content-header">
    <h1>
    	<?php echo $ondeEsta; ?>
        <small><?php echo $descricao; ?></small>
    </h1>
</section>

<section class="content">
    

    <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>

    <?php echo $idUsuario; ?>
    <br><br><br>
    <?php echo $perfil; ?>
    <br>

    <?php foreach ($meuPerfil as $key ) {
    	echo $key . '<br>';
    } ?>


</section><!-- /.content -->
</div><!-- /.content-wrapper -->