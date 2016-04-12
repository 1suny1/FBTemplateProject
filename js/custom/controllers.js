/**
 * 
 */
var templateAppControllers = angular.module('templateAppControllers', []);

templateAppControllers.controller('templateAppCtrl', ['$scope', '$cookies', '$translate', 
	function($scope, $cookies, $translate) {
		console.log('init')
//		console.log($cookies.getAll())
		$scope.setLang = function(langKey) {
			// You can change the language during runtime
			$translate.use(langKey);
		}
	}
]);


//templateAppControllers.controller('templateAppCtrl', ['$scope', '$cookies', '$translate', 
//	function($scope, $cookies, $translate) {
//		console.log('hi')
//	
////		$scope.setLang = function(langKey) {
////		// You can change the language during runtime
////		$translate.use(langKey);
////		};
////$scope.orderProp = 'age';
//}]);