<?php
// variables needed for include
$title = 'Contact Us';
$desc = 'CNC Woodworking Plastic TruVdesign';
$contactUs = 'active';

// include head
include('includes/head.php');

// include menu
include('includes/menu.php');
?>

<h1>Contact Us</h1>

<form>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name">
  </div><!-- /.form-group -->
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email">
  </div><!-- /.form-group -->
  <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" class="form-control" id="subject">
  </div><!-- /.form-group -->
  <div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control" id="message" rows="3"></textarea>
  </div><!-- /.form-group -->
  <div class="checkbox">
    <label>
      <input type="checkbox" name="subscribe"> Sign Up for E-mail Updates
    </label>
  </div><!-- /.checkbox -->
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<?php
include('includes/foot.php');
