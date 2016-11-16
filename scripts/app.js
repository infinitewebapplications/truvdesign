'use strict';

var app = angular.module('truvdesign', []);

app.controller('formCtrl', function($scope, $http) {

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
        // error?
        if(res.data.error === true) {
          console.log('error');
        } else {
          console.log('success');
          console.log(res.data);
        }
      });
    } else {
      console.log('invalid');
    }
  }

});


$('.swipebox').swipebox();
