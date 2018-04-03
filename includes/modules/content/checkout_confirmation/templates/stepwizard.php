 <div class="clearfix"></div>
  
 <div class="col-sm-<?php echo $content_width; ?>">

  <div class="contentText">
    <div class="stepwizard">
      <div class="stepwizard-row">
        <div class="stepwizard-step">
          <a href="<?php echo tep_href_link('checkout_shipping.php', '', 'SSL'); ?>"><button type="button" class="btn btn-default btn-circle">1</button></a>
          <p><a href="<?php echo tep_href_link('checkout_shipping.php', '', 'SSL'); ?>"><?php echo CHECKOUT_BAR_DELIVERY; ?></a></p>
        </div>
        <div class="stepwizard-step">
          <a href="<?php echo tep_href_link('checkout_payment.php', '', 'SSL'); ?>"><button type="button" class="btn btn-default btn-circle">2</button></a>
          <p><a href="<?php echo tep_href_link('checkout_payment.php', '', 'SSL'); ?>"><?php echo CHECKOUT_BAR_PAYMENT; ?></a></p>
        </div>
        <div class="stepwizard-step">
          <button type="button" class="btn btn-primary btn-circle">3</button>
          <p><?php echo CHECKOUT_BAR_CONFIRMATION; ?></p>
        </div>
      </div>
    </div>
  </div>

</div>
  
