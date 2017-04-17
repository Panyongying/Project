angular.module('hmApp').directive("domWatcher", function($compile){
	
	return{
		restrict: 'A',
		
		link : function($rootScope, element, attrs){
			
            var observer = new MutationObserver(function(mutations) {
            
            	console.log("domChanged notify");
                $compile(element.contents())($rootScope);
            });
            observer.observe(element[0], {
                childList: true,
                subtree: true
            });
		}
	}
	
});

angular.module('hmApp').directive("priceResolver", function(){
	
	function manageDomPrice(userStatus){
		console.log("managing Dom with status "+userStatus);
	}
	
	return{
		restrict: 'A',
		
		link : function($rootScope, element, attrs){

			manageDomPrice($rootScope.userStatus);
			
			$rootScope.$watch("userStatus", function (newValue, oldValue) {	
				manageDomPrice(newValue);
	 			
	 		});
		}
	}
	
});

angular.module('hmApp').directive('setSelection', [function () {
	return{
		restrict: 'A',
		link : function($rootScope, element, attrs){
				var loc = document.location.pathname;
				$rootScope.$watch(function() {return element.find("a").attr('href'); }, function (newValue, oldValue) {	
					 if(-1 != loc.indexOf(newValue)){
						 element.addClass("current");
				     }
					 else{
						 element.removeClass("current");
					 }
					 
		 		});
			}
		}
	}
]);

angular.module('hmApp').directive('addSpace', [function () {
    'use strict';
    return function (scope, element) {
        if(!scope.$last){
            element.after('&nbsp;');
        }
    }
}
]);


angular.module('hmApp').directive('tealiumTracking', [function () {
	return{
		restrict: 'A',
		link : function(scope, element, attrs){
			scope.$watch(function () {
				return element.is(":visible");
		        }, function (newVal, oldVal) {
		        	if(newVal){
		        		window.hMTrackingManager.trackElement(element);
		        	}
		        })
			}
		}
	}
]);