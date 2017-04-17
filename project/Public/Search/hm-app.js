

/**
 * Main module to be attached to html element
 * <html ng-app="hmApp">
 */
var hmApp = angular.module('hmApp', ['ngSanitize']);


(function(){
	
//var app = angular.module('praAppModule', []);
	var app = angular.module('hmApp'),
		context;


	app.controller('PRAController', ['$http', '$scope', '$timeout', function($http, $scope, $timeout){
		ctrlPra = this;
		ctrlPra.pra1Panel = {};
		ctrlPra.pra3Panel = {};
		ctrlPra.pra4Panel = {};
		ctrlPra.pra5Panel = {};
		ctrlPra.pra6Panel = {};
		ctrlPra.pra10Panel = {};
		ctrlPra.pra11Panel = {};
		
		$scope.initCartContext = function(locale, panel, touchpoint) {
			
			if(typeof(locale) == "undefined"){
				locale = (function(){
			        var regex = new RegExp(/[a-z]*_[A-Z]*/i);
			        return window.location.pathname.match(regex)[0];          
			      })();
			}
			
			//alert("locale: "+locale);
			
			var params = {};
			if(panel == 'product-detail-page'){
				var prodKey = "";
				var styleWithArt = "";
				var styleWith = [];
				var categorykeyforapptus = "";
				if(typeof(productArticleDetails) != "undefined"){
					categorykeyforapptus = productArticleDetails.categoryParentKey;
					prodKey = productArticleDetails.baseProductCode + '_' + locale;
					if(typeof(productArticleDetails.styleWithArticles) != "undefined"){
						var swLength = productArticleDetails.styleWithArticles.length;
						for(var i = 0; i < swLength; i++){
							styleWith.push(productArticleDetails.styleWithArticles[i]);
						}
                    styleWithArt = styleWith.join(',');
					}
				}
				params = {product_key : prodKey, style_with_default_articles : styleWithArt, category_parent_key : categorykeyforapptus};
			}else if(panel == 'search-page'){
				var search = "";
				var defaultArticles = "";
				if(typeof(displayedDefaultArticles) != "undefined"){
						defaultArticles = displayedDefaultArticles;
				}
				var searchProductAsCartParam = searchProductAsCartParameter;
				if(typeof(searchTerm) != "undefined"){
					search = searchTerm;
				}
				params = {search_phrase : search, displayed_default_articles : defaultArticles, search_results_as_cart : searchProductAsCartParam};
			}else{
				var categoryPath = "";
				var defaultArticles = "";
				var categorykeyforapptus = "";
				if(categoryParentKey != "undefined"){
					categorykeyforapptus = categoryParentKey;
				}
				if(typeof(displayedDefaultArticles) != "undefined"){
						defaultArticles = displayedDefaultArticles;
				}
                if(typeof(departmentCategoryPaths) != "undefined"){
                    categoryPath = departmentCategoryPaths;
                }else{
                	if(typeof(utag_data) != "undefined"){
    					categoryPath = utag_data.category_id;
    				}
                }
                params = {department_category_path : categoryPath, displayed_default_articles : defaultArticles, category_parent_key : categorykeyforapptus};
			}
			/*
			//TEST URL
			//'http://goeaptdeveu01:8080/pra/it_it/panel/pra3-4'
			//
			//URL
			//'/'+locale +'/pra/panel/'+panel
			*/
			var req = {timeout: 5000, headers: {'Content-Type': 'application/json', 'Accept': 'application/json'}};
			$http.post('/'+locale +'/pra/panel/'+panel, params, req).
				success(function(data, status, headers, config) {
					ctrlPra.elaborateResponse(data, touchpoint);
					
					$timeout(function() {
						hm.eventBus.emit("pra:loaded");
						$('.swipe-navigation').show(); 
						hm.swipe = new hm.Swipe();
					});
				}).
				error(function(data, status, headers, config) {
					  //alert("error loading panel");
				});
		};
		
		this.elaborateResponse = function(data, tp) {			
			if(tp == 'mobile'){
				ctrlPra.pra1Panel = parsePRAResponse(data, 'PRA1', 3);
				ctrlPra.pra3Panel = parsePRAResponse(data, 'PRA3', 3);
				ctrlPra.pra4Panel = parsePRAResponse(data, 'PRA4', 3);
				ctrlPra.pra5Panel = parsePRAResponse(data, 'PRA5', 3);
				ctrlPra.pra6Panel = parsePRAResponse(data, 'PRA6', 3);
				ctrlPra.pra10Panel = parsePRAResponse(data, 'PRA10', 3);
				ctrlPra.pra11Panel = parsePRAResponse(data, 'PRA11', 3);
			}else{
				ctrlPra.pra1Panel = parsePRAResponse(data, 'PRA1', 6);
				ctrlPra.pra3Panel = parsePRAResponse(data, 'PRA3', 6);
				ctrlPra.pra4Panel = parsePRAResponse(data, 'PRA4', 6);
				ctrlPra.pra5Panel = parsePRAResponse(data, 'PRA5', 3);
				ctrlPra.pra6Panel = parsePRAResponse(data, 'PRA6', 3);
				ctrlPra.pra10Panel = parsePRAResponse(data, 'PRA10', 6);
				ctrlPra.pra11Panel = parsePRAResponse(data, 'PRA11', 3);
			}
		}
		 
		this.getPraList =  function(products, size) {
			var newArr = [];
			for (var i=0; i<products.length; i+=size) {
				newArr.push(products.slice(i, i+size));
			}
			return newArr;
		};
		
		$scope.notifyClick = function(event, ticket, productId, praType) {	
			if(sessionStorage){
				sessionStorage.setItem("ticket_" + productId, ticket);
			}else if(localStorage){
				localStorage.setItem("ticket_" + productId, ticket);
			}
			if(praType == "PRA1" || praType == "PRA3" || praType == "PRA4"){
				setVCParameter(praType,productId);
				var categoryId = ""
				if(typeof(utag_data) != "undefined"){
					categoryId = utag_data.category_id;
				}
				if(praType != "PRA1"){
					setOsaParameters(categoryId,'SMALL',productId);
				}
			}
			
		}
	}]);
	
	function parsePRAResponse(response, panelId, size) {
		panel = {};
		products = [];
		
		if (response!=null) {
			if (response.panels!=null) {
				for (var i=0; i<response.panels.length; i++) {
					if(response.panels[i].attributes.panel_id==panelId || response.panels[i].attributes.panel_id=='PRA_FALLBACK') {
						if(response.panels[i].panels!=null && response.panels[i].panels.length>0) {
							if(response.panels[i].panels[0].attributes!=null) {
								panel.name = response.panels[i].panels[0].attributes.panel_name;
							}
							for (var j=0; j<response.panels[i].panels[0].panels.length; j++) {
								for (var k=0; k<response.panels[i].panels[0].panels[j].products.length; k++) {
									products.push(response.panels[i].panels[0].panels[j].products[k]);
								}
							}
						}
					}
				}
				panel.products = chunk(products, size);
				return panel;
			}
		}
	}
	
	function chunk(arr, size) {
		var newArr = [];
		for (var i=0; i<arr.length; i+=size) {
			newArr.push(arr.slice(i, i+size));
		}
		return newArr;
	}
})();

