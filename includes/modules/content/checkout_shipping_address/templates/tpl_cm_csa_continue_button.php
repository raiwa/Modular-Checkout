<?php
/*
  $Id$
  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com
  Copyright (c) 2018 osCommerce
  Released under the GNU General Public License
*/
?>
<div class="col-sm-<?php echo $content_width; ?> cm-csa-continue-button">
  <div class="buttonSet">
    <div class="text-right"><?php echo tep_draw_hidden_field('action', 'submit') . tep_draw_button(IMAGE_BUTTON_CONTINUE, 'fa fa-angle-right', null, 'primary', null, 'btn-success'); ?></div>
  </div>
</div>
