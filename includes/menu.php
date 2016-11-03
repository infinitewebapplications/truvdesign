<?php
// is home set?
if(!isset($home)) {
  $home = '';
}
// is our work set?
if(!isset($ourWork)) {
  $ourWork = '';
}
// is about us set?
if(!isset($aboutUs)) {
  $aboutUs = '';
}
// is contact us set?
if(!isset($contactUs)) {
  $contactUs = '';
}
?>
<ul class="nav nav-pills">
  <li role="presentation" class="<?= $home; ?>">
    <a href="/">Home</a>
  </li>
  <li role="presentation" class="<?= $ourWork; ?>">
    <a href="/our-work">Our Work</a>
  </li>
  <li role="presentation" class="<?= $aboutUs; ?>">
    <a href="/about-us">About Us</a>
  </li>
  <li role="presentation" class="<?= $contactUs; ?>">
    <a href="/contact-us">Contact Us</a>
  </li>
</ul>
