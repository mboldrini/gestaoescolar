<div class="content-wrapper">

<section class="content-header">
    <h1>
    	<?php echo $ondeEsta; ?>
        <small><?php echo $descricao; ?></small>
    </h1>
</section>

<section class="content">
    <div class="row">

        <div class="col-md-3">

            <a href="#" class="btn btn-primary btn-block margin-bottom">Nova mensagem</a>

                <div class="box box-solid">

                    <div class="box-header with-border">
                        <h3 class="box-title">Minhas pastas</h3>
                        <div class="box-tools">
                            <button class="btn btn-box-tool" data-widget="collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="box-body no-padding">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active">
                                <a href="#">
                                    <i class="fa fa-inbox"></i> Caixa de entrada <span class="label label-primary pull-right">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-envelope-o"></i> Mensagens enviadas</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-file-text-o"></i> Rascunhos</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-filter"></i> Anotações <span class="label label-warning pull-right">65</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-trash-o"></i> Lixeira</a>
                            </li>
                        </ul>
                    </div><!-- /.box-body -->

                </div><!-- /. box -->

                <div class="box box-solid">

                    <div class="box-header with-border">
                        <h3 class="box-title">Labels</h3>
                        <div class="box-tools">
                            <button class="btn btn-box-tool" data-widget="collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="box-body no-padding">
                        <ul class="nav nav-pills nav-stacked">
                            <li>
                                <a href="#"><i class="fa fa-circle-o text-red"></i> Important</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a>
                            </li>
                        </ul>
                    </div><!-- /.box-body -->

                </div><!-- /.box -->

            </div><!-- /.col -->


            <div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Caixa de entrada</h3>
                  <div class="box-tools pull-right">
                    <div class="has-feedback">
                      <input type="text" class="form-control input-sm" placeholder="Pesquisar mensagens" />
                      <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    </div>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <div class="mailbox-controls">
                    <!-- Check all button -->
                    <button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
                    <div class="btn-group">
                      <button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                      <button class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                      <button class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                    </div><!-- /.btn-group -->
                    <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                    <div class="pull-right">
                      1-5/5
                      <div class="btn-group">
                        <button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                        <button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                      </div><!-- /.btn-group -->
                    </div><!-- /.pull-right -->
                  </div>
                  <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                      <tbody>
                        <tr>
                          <td><input type="checkbox" /></td>
                          <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                          <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class="mailbox-attachment"></td>
                          <td class="mailbox-date">5 mins ago</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" /></td>
                          <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                          <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                          <td class="mailbox-date">28 mins ago</td>
                        </tr>                   
                        <tr>
                          <td><input type="checkbox" /></td>
                          <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                          <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                          <td class="mailbox-date">14 days ago</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" /></td>
                          <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                          <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                          <td class="mailbox-date">15 days ago</td>
                        </tr>
                      </tbody>
                    </table><!-- /.table -->
                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
                <div class="box-footer no-padding">
                  <div class="mailbox-controls">
                    <!-- Check all button -->
                    <button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
                    <div class="btn-group">
                      <button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                      <button class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                      <button class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                    </div><!-- /.btn-group -->
                    <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                    <div class="pull-right">
                      1-5/5
                      <div class="btn-group">
                        <button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                        <button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                      </div><!-- /.btn-group -->
                    </div><!-- /.pull-right -->
                  </div>
                </div>
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->


</div><!-- /.content-wrapper -->
