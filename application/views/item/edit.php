<!--start container-->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">


      <div class="box box-info">
        <div class="box-header with-border">

          <?php if (isset($msg['error'])) : ?>
            <div class="box box-danger">
              <?= $error['error'] ?>
            </div>
          <?php endif ?>

          <?php if (isset($msg['success'])) : ?>
            <div class="box box-danger">
              <?= $msg['success'] ?>
            </div>
          <?php endif ?>

          <?php if (validation_errors()) : ?>
            <div class="box box-danger">
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo validation_errors(); ?>
              </div>
            </div>
          <?php endif; ?>

          <form class="form-horizontal" action="<?= base_url() ?>item/edit/<?= $item->id ?>" method="post">
            <fieldset>

              <!-- Form Name -->
              <legend>EDIT ITEM</legend>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="id">ID</label>
                <div class="col-md-8">
                  <input value="<?= $item->id ?>" readonly id="id" name="id" type="text" class="form-control input-md">

                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="name">Name</label>
                <div class="col-md-8">
                  <input value="<?= $item->name ?>" id="name" name="name" type="text" placeholder="Enter Item Name" class="form-control input-md">

                </div>
              </div>

              <!-- Textarea -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="description">Description</label>
                <div class="col-md-8">
                  <textarea class="form-control" id="description" name="description"><?= $item->description ?></textarea>
                </div>
              </div>

              <!-- Prepended text-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="price">Price</label>
                <div class="col-md-8">
                  <div class="input-group">
                    <span class="input-group-addon">PhP</span>
                    <input value="<?= $item->price ?>" id="price" name="price" class="form-control" placeholder="0" type="text">
                  </div>

                </div>
              </div>

              <!-- Button (Double) -->
              <div class="form-group">
                <label class="col-md-4 control-label" for=""></label>
                <div class="col-md-8">
                  <button id="" name="" class="btn btn-success">Edit</button>
                  <a href="<?= base_url() ?>item" id="" name="" class="btn btn-danger">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
                    </span> Back
                  </a><br/>

                  </form>
          <img src="<?= base_url() ?>/assets/images/thumb_img/<?= $item->image ?>" />
          <?php echo form_open_multipart('item/do_upload'); ?>
          <input type="file" name="userfile" size="20" />
          <?php echo form_hidden('id', $item->id) ?>
          <br /><br />
          <input class="btn btn-primary" type="submit" value="upload" />
          </form>

                </div>
              </div>

             

            </fieldset>
         

        </div>
      </div>
    </div>
  </div>
</div>