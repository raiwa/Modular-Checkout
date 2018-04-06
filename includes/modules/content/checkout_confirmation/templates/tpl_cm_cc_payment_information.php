<div class="col-sm-<?php echo $content_width; ?> cm-cc-payment-information">
  <h2><?php echo HEADING_PAYMENT_INFORMATION; ?></h2>

  <div class="contentText row">
<?php
    if (tep_not_null($confirmation['title'])) {
      echo '<div class="col-sm-6">';
      echo '  <div class="alert alert-danger">';
      echo $confirmation['title'];
      echo '  </div>';
      echo '</div>';
    }
?>
<?php
      if (isset($confirmation['fields'])) {
        echo '<div class="col-sm-6">';
        echo '  <div class="alert alert-info">';
        $fields = '';
        for ($i=0, $n=sizeof($confirmation['fields']); $i<$n; $i++) {
          $fields .= $confirmation['fields'][$i]['title'] . ' ' . $confirmation['fields'][$i]['field'] . '<br>';
        }
        if (strlen($fields) > 4) echo substr($fields,0,-4);
        echo '  </div>';
        echo '</div>';
      }
?>
  </div>
</div>

