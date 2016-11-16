<?php
// variables needed for include
$title = 'Contact Us';
$desc = 'CNC Woodworking Plastic TruVdesign';
$contactUs = 'active';

// is this a post?
if(!empty($_POST)) {
  $return = [
    'error' => false,
    'msg' => 'Email has been sent! Thank you, we will contact you shortly.',
  ];
  // set variables..
  $name = $_POST['name'];
  $emai = $_POST['email'];
  $mess = $_POST['message'];

  // validate them
  if(!empty($name) && !empty($name) && !empty($name)) {
    // send e-mail
  } else {
    // error on submission
    $return = [
      'error' => 'true',
      'msg' => 'An error occurred, please try again. If the problem persists, please refresh this page.',
    ];
  }

  // provide the response
  print_r(json_encode($return));
  exit();
}

// include head
include('includes/head.php');

// include menu
include('includes/menu.php');

// site key
// 6LdmCQwUAAAAACWQpj_Gcwuayv5UZlDYGWm2HlbF

// secret key
// 6LdmCQwUAAAAALQc9SxFOroRmWgJ37oySQtWNupj

// <script src='https://www.google.com/recaptcha/api.js'></script>
// <div class="g-recaptcha" data-sitekey="6LdmCQwUAAAAACWQpj_Gcwuayv5UZlDYGWm2HlbF"></div>
?>

<h1>Contact Us</h1>

<div ng-controller="formCtrl">
  <form name="contactForm" ng-submit="submit(contactForm)" autocomplete="off" novalidate>
    <div class="row">
      <div class="col-xs-12 col-md-6">
        <div class="form-group">
          <label for="name">Name *</label>
          <input type="text" name="name" class="form-control" ng-model="contact.name" ng-minlength="3" required>
          <p ng-show="contactForm.name.$invalid && !contactForm.name.$pristine" class="help-block text-danger">Your name is required.</p>
        </div><!-- /.form-group -->
      </div><!-- /.col-xs-12 -->
      <div class="col-xs-12 col-md-6">
        <div class="form-group">
          <label for="email">Email *</label>
          <input type="email" name="email" class="form-control" ng-model="contact.email" ng-minlength="5" required>
          <p ng-show="contactForm.email.$invalid && !contactForm.email.$pristine" class="help-block text-danger">Email is too short.</p>
        </div><!-- /.form-group -->
      </div><!-- /.col-xs-12 -->
      <?php
      /*
      <div class="col-xs-12">
        <div class="form-group">
          <label for="subject">Subject</label>
          <input type="text" class="form-control" id="subject">
        </div><!-- /.form-group -->
      </div><!-- /.col-xs-12 -->
      */
      ?>
      <div class="col-xs-12">
        <div class="form-group">
          <label for="message">Message *</label>
          <textarea name="message" class="form-control" rows="3" ng-model="contact.message" ng-minlength="10" required></textarea>
          <p ng-show="contactForm.message.$invalid && !contactForm.message.$pristine" class="help-block text-danger">Please write a short message.</p>
        </div><!-- /.form-group -->
      </div><!-- /.col-xs-12 -->
      <div class="col-xs-12">
        <div id="message-area"></div>
      </div><!-- /.col-xs-12 -->
      <?php
      /*
      <div class="col-xs-12">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="subscribe"> Sign Up for E-mail Updates
          </label>
        </div><!-- /.checkbox -->
      </div><!-- /.col-xs-12 -->
      */
      ?>
      <div class="col-xs-12">
        <button type="submit" class="btn" ng-class="{ 'btn-default disabled' : !contactForm.$valid, 'btn-success' : contactForm.$valid }">Submit</button>
      </div><!-- /.col-xs-12 -->
    </div><!-- /.row -->
  </form>
</div>

<?php
include('includes/foot.php');
