<?php
// variables needed for include
$title = 'About Us';
$desc = 'David Nance and Paul Nance CNC Woodworking';
$aboutUs = 'active';

// include head
include('includes/head.php');

// include menu
include('includes/menu.php');
?>

<h1>About Us</h1>

<div class="row">
  <div class="col-xs-12 col-sm-4">
    <a rel="g1" class="swipebox" href="/img/david-and-paul-nance-truvdesign.jpg" title="David and Paul Nance">
      <img src="/img/david-and-paul-nance-truvdesign_thumb.jpg" alt="David and Paul Nance" title="David and Paul Nance" class="img-responsive img-thumbnail">
    </a>
  </div><!-- /.col-xs-12 -->
  <div class="col-xs-12 col-sm-8">
    <p>After working individually for 30+ years in the industry, brothers David and
    Paul Nance, decided to combine their skills and talent to start TruVdesign.
    TruVdesign specializes in various wood items, customized to your needs. To
    create one-of-a-kind pieces, they use a CNC woodworking maching ("Shopbot")
    which allows them to customize everything from simple signs to more complex
    carvings. If you need a sign for your commercial business, wedding, any
    furniture pieces or home d&eacute;cor – TruVdesign is able to accommodate your needs
    and provide highquality work with every request. Learn more about David and
    Paul below.</p>
  </div><!-- /.col-xs-12 -->
</div>

<div class="well well-shade">
  <h2 class="mt-0">David Nance</h2>
  <p>David has always had a strong passion for wood work, painting and all the
  creativity it allows for. Being able to evoke emotions through his work is
  something he takes great pride in. Having worked in the industry for over 30+
  years, David is extremely talented in conceptualizing and creating unique pieces
  of art.</p>
</div><!-- /.well -->

<div class="well well-shade">
  <h2 class="mt-0">Paul Nance</h2>
  <p>Paul has always had a strong interest for mechanical design which led him to
  start his career in the textile industry over 30+ years ago. There, he drafted
  and designed looms, narrow fabric machines and other complex machinery.
  Following his career in the textile industry, due to significant industrial
  changes, he shifted his focus to wood and metal machinery design. As technology
  advanced and evolved, Paul adapted and moved the drafting board work to
  computer generated designs using AutoCAD and SolidWorks software.</p>
</div><!-- /.well -->

<p>See the <a href="/our-work">Our Work</a> page for sample items we've created
and are currently working on completing. We are happy to accommodate small
production runs or complex projects on a quote by quote basis. Please
<a href="/contact-us">contact us</a> for your personalized quote today
<i>(please provide details of your needs when submitting a quote request)</i>.</p>

<?php
include('includes/foot.php');
