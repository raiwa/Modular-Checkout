<?php
/*
  $Id$
  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com
  Copyright (c) 2018 osCommerce
  Released under the GNU General Public License
*/
?>
<div class="col-sm-<?php echo $content_width; ?> cm-cp-payment-address">

  <h2 class="h3"><?php echo MODULE_CONTENT_CHECKOUT_PAYMENT_PAYMENT_ADDRESS_TABLE_HEADING; ?></h2>

  <div class="contentText row">
    <div class="col-sm-8">
      <div class="alert alert-warning">
        <?php echo MODULE_CONTENT_CHECKOUT_PAYMENT_PAYMENT_ADDRESS_TEXT_SELECTED_BILLING_DESTINATION; ?>
        <div class="clearfix"></div>
        <div class="pull-right">
          <?php echo tep_draw_button(IMAGE_BUTTON_CHANGE_ADDRESS, 'fa fa-home', tep_href_link('checkout_payment_address.php', '', 'SSL')); ?>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo MODULE_CONTENT_CHECKOUT_PAYMENT_PAYMENT_ADDRESS_TITLE_BILLING_ADDRESS; ?></div>
        <div class="panel-body">
          <?php echo tep_address_label($customer_id, $billto, true, ' ', '<br />'); ?>
        </div>
      </div>
    </div>
  </div>

</div>
