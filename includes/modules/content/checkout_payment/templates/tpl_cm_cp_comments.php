<div class="col-sm-<?php echo $content_width; ?> cm-cp-comments">
<hr>

  <div class="contentText">
    <div class="form-group">
      <label for="inputComments" class="control-label col-sm-4"><?php echo MODULE_CONTENT_CHECKOUT_PAYMENT_COMMENTS_TABLE_HEADING; ?></label>
      <div class="col-sm-8">
        <?php
        echo tep_draw_textarea_field('comments', 'soft', 60, 5, $comments, 'id="inputComments" placeholder="' . MODULE_CONTENT_CHECKOUT_PAYMENT_COMMENTS_TABLE_HEADING . '"');
        ?>
      </div>
    </div>
  </div>
</div>
