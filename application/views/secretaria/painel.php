<div class="content-wrapper">

<section class="content-header">
    <h1>
    	<?php echo $ondeEsta; ?>
        <small><?php echo $descricao; ?></small>
    </h1>
</section>

<section class="content">

    <?php echo $idUsuario; ?>
    <br><br><br>
    <?php echo $perfil; ?>
    <br>

    <?php foreach ($meuPerfil as $key ) {
    	echo $key . '<br>';
    } ?>

</section><!-- /.content -->
</div><!-- /.content-wrapper -->