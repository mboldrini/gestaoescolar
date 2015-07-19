<div class="content-wrapper">

<section class="content-header">
    <h1>
    	<?php echo $ondeEsta; ?>
        <small><?php echo $descricao; ?></small>
    </h1>
</section>

<section class="content">


  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-3 toppad" >
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title"><?php echo $meuPerfil->nome .' '. $meuPerfil->sobrenome; ?></h3>
          </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-3 col-lg-3 " align="center"> 
              <img alt="User Pic" src="<?php echo base_url( 'assets/uploads/perfil/' . $meuPerfil->foto ); ?>" class="img-circle img-responsive">
            </div>
                
          
            <div class=" col-md-9 col-lg-9 "> 
              <table class="table table-user-information">
                <tbody>
                  <tr>
                    <td>Código:</td>
                    <td><?php echo $meuPerfil->codigo; ?></td>
                  </tr>
                  <tr>
                    <td>Departamento:</td>
                    <td><?php echo $meuPerfil->setor; ?></td>
                  </tr>
                  <tr>
                    <td>Função:</td>
                    <td><?php echo $meuPerfil->funcao; ?></td>
                  </tr>
                  <tr>
                    <td>Data de nascimento:</td>
                    <td><?php echo $meuPerfil->dataNascimento; ?></td>
                  </tr>                   
                  <tr>
                    <tr>
                      <td>Email:</td>
                      <td><?php echo $meuPerfil->email; ?></td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>
                        <a href="mailto:info@support.com">info@support.com</a>
                      </td>
                      </tr>
                      </td>                           
                  </tr>
                     
                </tbody>
              </table>
                  
            </div>
          </div>
        </div>
        
        <div class="panel-footer">
          <a data-original-title="Minhas mensagens" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary">
            <i class="glyphicon glyphicon-envelope"></i> Minhas mensagens
          </a>
          <span class="pull-right">
            <a href="edit.html" data-original-title="Editar minhas informações" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning">
              <i class="glyphicon glyphicon-edit"></i> Editar minhas informações
            </a>
          </span>
        </div>
            
      </div>
    </div>
    </div>
  </div><!-- final do quadrado de perfil -->





</section><!-- /.content -->
</div><!-- /.content-wrapper -->