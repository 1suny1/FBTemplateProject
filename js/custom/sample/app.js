'use strict';

/* App Module */

var templateApp = angular.module('templateApp', [
    'pascalprecht.translate',
    'ngCookies',
    'ngMessages',
//  'ngRoute',
//  'phonecatAnimations',

  'templateControllers',
  'sampleControllers',
//  'phonecatFilters',
  'templateServices',
  'sampleServices'
]);

templateApp.config(['$translateProvider', function($translateProvider) {
	$translateProvider.useStaticFilesLoader({
	    files: [{
	        prefix: 'js/custom/l10n/partial/template/',
	        suffix: '.json'
	    }, {
	        prefix: 'js/custom/l10n/partial/sample/',
	        suffix: '.json'
	    }]
	});
	
	$translateProvider.useSanitizeValueStrategy('escape');
	
	$translateProvider.preferredLanguage('english');
//
//	// Tell the module to store the language in the cookie
	$translateProvider.useCookieStorage();
}]);

//templateApp.config(['$translateProvider', '$provide', '$translatePartialLoaderProvider', 
//    function($translateProvider, $provide, $translatePartialLoaderProvider){
//		$translatePartialLoaderProvider.addPart('sample');
//		
//		$translateProvider.useLoader('$translatePartialLoader', {
//			urlTemplate: 'js/custom/l10n/partial/{part}/{lang}.json'
//		});
//
//		$translateProvider.useSanitizeValueStrategy('escape');
//		
//		// Tell the module what language to use by default
//		$translateProvider.preferredLanguage('english');
//		
//		// Tell the module to store the language in the cookies
//		$translateProvider.useCookieStorage();
//}]);

//templateApp.config(function($translateProvider) {
//	$translateProvider.translations('english', {
//		HOME : 'HOME'
//	})
//	.translations('korean', {
//		HOME : '집'
//	});
//	$translateProvider.useSanitizeValueStrategy('escape');
//	$translateProvider.preferredLanguage('english');
//	
//	// Tell the module to store the language in the cookie
//	  $translateProvider.useCookieStorage();
//});

//
//phonecatApp.config(['$routeProvider',
//  function($routeProvider) {
//    $routeProvider.
//		when('/angularjs/index', {
//			templateUrl: 'angularjs/hello',
//			controller: 'angularjsControllers'
//		}).
////      when('/phones/:phoneId', {
////        templateUrl: 'partials/phone-detail.html',
////        controller: 'PhoneDetailCtrl'
////      }).
//      otherwise({
//        redirectTo: '/hello/index'
//      });
//  }]);
