'use strict';

var app = angular.module('truvdesign', []);

app.controller('formCtrl', function($scope, $http) {
  var conForm = document.getElementById('contact-form');
  var msgArea = document.getElementById('message-area');
  msgArea.style.display = 'none';
  $scope.msg = {
    class : null,
    text : null,
    title : null
  };

  $scope.submit = function(form) {
    // form valid?
    if(form.$valid === true) {
      // set data for form submit
      var data = $.param($scope.contact);
      // set config for post
      var config = {
        headers : {'Content-Type':'application/x-www-form-urlencoded;charset=utf-8;'},
        dataType : 'json'
      };
      // make request
      $http.post('/contact-us', data, config).then(function successCallback(res){
        msgArea.style.display = 'block';
        $scope.msg.text = res.data.msg;
        // error?
        if(res.data.error === true) {
          $scope.msg.class = 'danger';
          $scope.msg.title = 'Error!';
        } else {
          conForm.style.display = 'none';
          $scope.msg.class = 'success';
          $scope.msg.title = 'Success!';
        }
      });
    } else {
      console.log('invalid');
    }
  }

});


$('.swipebox').swipebox();
