<div class="row">
        <!-- Left col -->
        <div class="col-md-8 col-md-offset-2">
          

          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><span class="fa fa-users"></span> Accounts</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Account ID</th>
                    <th>Image</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Verified</th>
                    <th>User Type</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($accounts as $acn): ?>
            <tr>
                <td><?=$acn->id?></td>
                
                <td><img src="<?=base_url()?>/assets/images/thumb_img/<?=$acn->Image?>" width="30px" /></td>
                <td><?=$acn->full_name?></td>
                <td><?=$acn->email?></td>
                <td>
                  <?php
                  if($acn->int_is_verified == 1)
                    {
                      echo 'Yes';
                    }else{
                      echo 'No';
                    }
                  
                  ?>
                </td>
                <td><?=$acn->usr_type?></td>
              
                
                <td>
                    <!--<a href="<?=base_url()?>item/view/<?=$item->id?>" type="button" class="btn btn-primary btn-md">-->
                    <!--    <span class="glyphicon glyphicon-search" aria-hidden="true">-->
                    <!--    </span> -->
                    <!--</a>-->
                    <!--<a href="<?=base_url()?>item/edit/<?=$item->id?>" type="button" class="btn btn-warning btn-md">-->
                    <!--    <span class="glyphicon glyphicon-pencil" aria-hidden="true">-->
                    <!--    </span> -->
                    <!--</a>-->
                    <!--<a href="" data-toggle="modal" data-target="#modal-danger" type="button" class="btn btn-danger btn-md">-->
                    <!--    <span class="glyphicon glyphicon-trash" aria-hidden="true">-->
                    <!--    </span> -->
                    <!--</a>-->
                </td>
            </tr>
        <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <!-- <div class="box-footer clearfix">
              <a href="<?=base_url('home/login')?>" class="btn btn-sm btn-primary btn-flat pull-left">Back</a>
              <!--<a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>-->
            <!-- </div> -->
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>