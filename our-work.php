<?php
// variables needed for include
$title = 'Our Work';
$desc = 'David Nance and Paul Nance CNC Woodworking';
$ourWork = 'active';

// include head
include('includes/head.php');

// include menu
include('includes/menu.php');
?>

<h1>Our Work</h1>

<h2>Signage</h2>
<div class="row">
  <div class="col-xs-12 col-sm-3">
    <img src="https://placekitten.com/240" alt="alt text" class="img-thumbnail img-responsive">
  </div><!-- /.col-xs-12 -->
  <div class="col-xs-12 col-sm-3">
    <img src="https://placekitten.com/240" alt="alt text" class="img-thumbnail img-responsive">
  </div><!-- /.col-xs-12 -->
  <div class="col-xs-12 col-sm-3">
    <img src="https://placekitten.com/240" alt="alt text" class="img-thumbnail img-responsive">
  </div><!-- /.col-xs-12 -->
  <div class="col-xs-12 col-sm-3">
    <img src="https://placekitten.com/240" alt="alt text" class="img-thumbnail img-responsive">
  </div><!-- /.col-xs-12 -->
</div><!-- /.row -->

<h2>Other Examples</h2>

<h2>Our Tools</h2>
<div class="row">
  <div class="col-xs-12 col-sm-3">
    <div class="thumbnail">
      <img src="/img/truvdesign_thumb.jpg" alt="Our Tools - Shopbot" class="img-responsive">
      <div class="caption">
        <h3 class="mt-0">Shopbot</h3>
      </div><!-- /.caption -->
  </div><!-- /.col-xs-12 -->
</div><!-- /.row -->


<?php
include('includes/foot.php');
