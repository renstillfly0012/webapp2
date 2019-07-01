<div class="box box-info">
        <div class="box-header with-border">
          <h3>Cart</h3>

          <!-- <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div> -->
        <div class="box-body">
          <table class="table table-hover">
            <tr>
              <th>Quantity</th>
              <th>Name</th>
              <th>Item Price</th>
              <th>Sub-total</th>
              <th>Action</th>
            </tr>
            <?php echo form_open('item/clear_item'); ?>

            <table cellpadding="6" cellspacing="1" style="width:100%" border="0">

              <!-- <tr>
                <th>QTY</th>
                <th>Item Description</th>
                <th style="text-align:right">Item Price</th>
                <th style="text-align:right">Sub-Total</th>
              </tr> -->

              <?php $i = 1; ?>

              <?php foreach ($this->cart->contents() as $items) : ?>

                <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>

                <tr>
                  <td><?php echo form_input(array('name' => $i . '[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                  <td>
                    <?php echo $items['name']; ?>

                    <?php if ($this->cart->has_options($items['rowid']) == TRUE) : ?>

                      <p>
                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value) : ?>

                          <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                        <?php endforeach; ?>
                      </p>

                    <?php endif; ?>

                  </td>
                  <td><?php echo $this->cart->format_number($items['price']); ?></td>
                  <td>$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                  <td>
                   
                    
                  </td>
                </tr>

                <?php $i++; ?>

              <?php endforeach; ?>

              <tr>
                <td colspan="2"> </td>
                <td class="right"><strong>Total</strong></td>
                <td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
              </tr>


            </table>
            
        </div>
        <div class="box-footer clearfix">
        <button type="submit" class="btn btn-warning btn-md">Update 
                      <span class="fa fa-fw fa-cart-plus" aria-hidden="true">
                    </button>
          <a href="<?= base_url() ?>item/add" type="button" class="btn btn-primary btn-md pull-right">
            <span class="glyphicon glyphicon-plus" aria-hidden="true">
            </span> Place to order
          </a>
        </div>
      </div>
    </div>