'use strict';

/* Services */

var angularjsServices = angular.module('angularjsServices', ['ngResource']);

angularjsServices.factory('Fbaccount', ['$resource',
  function($resource){
    return $resource('api/account/account_info', {}, {
      query: {method:'GET', params:{user_name:'lhs'}, isArray:true}
    });
  }]);
