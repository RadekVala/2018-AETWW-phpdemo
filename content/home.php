<div class="jumbotron">
  <h1 class="display-4">Home</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
<p>
<?php

    if(isset($_GET['search'])){
        echo 'You have searched for: '.$_GET['search'];
    }
?></p> 

<?php if($auth) { ?>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
<?php } ?>  

<ol>
<?php for($i=0; $i<20; $i++) { ?>
    <li>Item <?php echo $i; ?></li>
<?php } ?>
</ol>
  </div>