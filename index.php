<?php
// variables needed for include
$title = 'Welcome to TruVdesign!';
include('includes/head.php');
?>

<div class="col-xs-12 col-md-10 col-md-offset-1">
  <h1 class="h1-header">TruVdesign</h1>
  <div class="well">
    <ul class="nav nav-pills">
      <li role="presentation" class="active">
        <a href="/">Home</a>
      </li>
      <li role="presentation">
        <a href="/our-work.php">Our Work</a>
      </li>
      <li role="presentation">
        <a href="/about-us.php">About Us</a>
      </li>
      <li role="presentation">
        <a href="/contact-us.php">Contact Us</a>
      </li>
    </ul>

    <h2>Welcome!</h2>
    <p class="lead"><strong>TruVdesign</strong> is a Wood and Plastic CNC cutting machine company. We can create pretty much anything you can imagine..</p>

    <a class="btn btn-default pull-right" href="tel:+1.3363807439"><i class="fa fa-phone"></i> Phone</a>
    <a class="btn btn-default pull-right mr-10" href="https://www.google.com/maps/place/278+Steelcrest+Rd,+Graham,+NC+27253" target="_blank"><i class="fa fa-map-marker"></i> Location</a>
    <div class="clearfix"></div>
  </div><!-- /.well -->
</div><!-- /.col-xs-12 -->

<?php
include('includes/foot.php');
