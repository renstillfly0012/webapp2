<!--start container-->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3> <span class="fa fa-fw fa-list-alt" aria-hidden="true">
                    </span>Products</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
            </button>
          </div>
        </div>
        <div class="box-body">
          <table class="table table-hover">
            <tr>
              <th>ID</th>
              <th>IMAGE</th>
              <th>NAME</th>
              <th>PRICE</th>
              <th>ACTION</th>
            </tr>
            <?php foreach ($items as $item) : ?>
              <tr>
                <td><?= $item->id ?></td>

                <td><img src="<?= base_url() ?>/assets/images/thumb_img/<?= $item->image ?>" width="30px" /></td>
                <td><?= $item->name ?></td>
                <td><?= $item->price ?></td>
                <td>
                  <a href="<?= base_url() ?>item/view/<?= $item->id ?>" type="button" class="btn btn-primary btn-md">
                    <span class="glyphicon glyphicon-search" aria-hidden="true">
                    </span>
                  </a>
                  <a href="<?= base_url() ?>item/edit/<?= $item->id ?>" type="button" class="btn btn-warning btn-md">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true">
                    </span>
                  </a>
                  <a href="" data-toggle="modal" id="<?= $item->id ?>" data-target="#modal-danger" type="button" class="btn btn-danger btn-md">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true">
                    </span>
                  </a>
<!-- 
                  <a href="<?= base_url() ?>item/add_to_cart/<?= $item->id ?>" type="button" class="btn btn-danger btn-md">
                    <span class="fa fa-fw fa-cart-plus" aria-hidden="true">
                    </span>
                  </a> -->


                </td>
              </tr>
            <?php endforeach ?>


          </table>
          <?= $this->pagination->create_links(); ?>
        </div>
        <div class="box-footer clearfix">
          <!-- <a href="<?= base_url() ?>item/add" type="button" class="btn btn-success btn-md pull-right">
            <span class="glyphicon glyphicon-plus" aria-hidden="true">
            </span> ADD Item
          </a> -->
          <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-cart">
            Launch Default Modal
          </button> -->
        </div>
      </div>
      <br />

    </div>



    <!--USERS-->


    <!--USERS-->
  </div>
</div>
</div>
<!--end container-->
<div class="modal modal-danger fade in" id="modal-danger">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-question-sign"></span> Confirmation</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="<?= base_url() ?>item/delete/<?= $item->id ?>" method="post">
          <input type="text" name="item_id" id="item_id" value="">
          <p>Are you sure you want to delete this item?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline">Yes</button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
</div>
</div>



<!-- <div class="modal fade in" id="modal-cart">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">My Cart<span class="fa fa-fw fa-cart-plus"></span></h4>
      </div>
      <div class="modal-body">
        <!-- <?php //$this->load->view('item/my_cart'); 
              ?> 

      </div>
      <!-- /.modal-content 
    </div>
  </div>
</div> -->


<!--start container-->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="box box-success">
        <div class="box-header with-border">
          <h3>  <span class="fa fa-fw fa-cart-plus" aria-hidden="true">
                    </span>ADD</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
            </button>
          </div>
        </div>
        <?php if (validation_errors()) : ?>
          <div class="box box-danger">
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo validation_errors(); ?>
            </div>
          </div>
        <?php endif; ?>

        <div class="box-body">
          <?php echo form_open('item/insert') ?>
          <fieldset>

           <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="name">Name</label>
              <div class="col-md-8">
                <?php echo form_error('name'); ?>
                <input value="<?= set_value('name') ?>" id="name" name="name" type="text" placeholder="Enter Item Name" class="form-control input-md">

              </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="description">Description</label>
              <div class="col-md-8">
                <textarea class="form-control" id="description" name="description"><?= set_value('description') ?></textarea>
              </div>
            </div>

            <!-- Prepended text-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="price">Price</label>
              <div class="col-md-8">
                <div class="input-group">
                  <span class="input-group-addon">PhP</span>
                  <input value="<?= set_value('price') ?>" id="price" name="price" class="form-control" placeholder="0" type="text">
                </div>

              </div>
            </div>

            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for=""></label>
              <div class="col-md-8">
                <button id="" name="" class="btn btn-success">Add</button>
                <a id="" href="<?= base_url() ?>item" name="" class="btn btn-danger">Cancel</a>
              </div>
            </div>

          </fieldset>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>