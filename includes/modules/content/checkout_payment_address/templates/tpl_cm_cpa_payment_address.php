<?php
/*
  $Id$
  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com
  Copyright (c) 2018 osCommerce
  Released under the GNU General Public License
*/
?>
<div class="col-sm-<?php echo $content_width; ?> cm-cpa-payment-address">

  <h2 class="h3"><?php echo MODULE_CONTENT_CHECKOUT_PAYMENT_ADDRESS_PAYMENT_ADDRESS_TABLE_HEADING; ?></h2>

  <div class="contentText row">
    <div class="col-sm-8">
      <div class="alert alert-warning"><?php echo MODULE_CONTENT_CHECKOUT_PAYMENT_ADDRESS_PAYMENT_ADDRESS_TEXT_SELECTED_PAYMENT_DESTINATION; ?></div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo MODULE_CONTENT_CHECKOUT_PAYMENT_ADDRESS_PAYMENT_ADDRESS_TITLE_PAYMENT_ADDRESS; ?></div>

        <div class="panel-body">
          <?php echo tep_address_label($customer_id, $billto, true, ' ', '<br />'); ?>
        </div>
      </div>
    </div>
  </div>

</div>
