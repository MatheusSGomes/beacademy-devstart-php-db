<?php
  include dirname(__DIR__)."/_partials/head.php";

  echo "
    <div class='alert alert-success'>
      {$message}
    </div>

    <a href='/' class='btn btn-outline-primary'>Ok</a>
  ";

  include dirname(__DIR__)."/_partials/footer.php";
?>