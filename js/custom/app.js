/**
 * 
 */
var templateApp = angular.module('templateApp', [
    'pascalprecht.translate',
    'ngCookies',
//    'ngMessages',
    'templateAppControllers'
]);

templateApp.config(['$translateProvider', function($translateProvider) {
	$translateProvider.useStaticFilesLoader({
	    files: [{
	        prefix: 'data/l10n/',
	        suffix: '.json'
	    }]
	});
//	console.log($translateProvider);
//	$translateProvider.useStaticFilesLoader({
//	    files: [{
//	        prefix: 'data/l10n/',
//	        suffix: '.json'
//	    }, {
//	        prefix: 'data/l10n/',
//	        suffix: '.json'
//	    }]
//	});
	
	$translateProvider.useSanitizeValueStrategy('escape');
	
	$translateProvider.preferredLanguage('en');
//
//	// Tell the module to store the language in the cookie
	$translateProvider.useCookieStorage();
}]);
