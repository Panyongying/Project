
/**
 * Main Controller
 * <body ng-controller="hmAppController">
 * 
 * This controller manages the Club and Offer pages
 * it has some dependency on code provided in applicaiton Js
 * so try to preserve loading order in project:
 * 
 * Jquery libs
 * Angular libs
 * application.js
 * various angular files (.js)
 * 
 * code in this controller and status variable are specific for club pages managed in Adobe
 * this controller relies upon hmClubService which is the core of club business logic
 * hmClubService is also loaded from controller in Hybris part of the project, i.e. cart, checkout
 * because it manages club url rewrite for the whole site pages
 * 
 * club actions are triggered from a watcher that looks after hmClubEnabled scope variable, 
 * injected via ng-init in markup, if the country is not a Loyalty/Club enabled the controller stops
 * and nothing is instantiated.
 */

hmApp.controller('HmAppController', ['$scope', 'hmClubService', 'hmCommon',
 	function($scope, hmClubService, hmCommon) {
 		
 		if(hmCommon.useMockData){
	 		document.cookie = "userCookie={\"st\":\"\",\"customer_key\":\"c8453cf598d0a2150bd62634eee09902\",\"zc\":\"20-127\",\"tn\":\"\",\"cartCount\":0,\"hybris_firstName\":\"Raffaele\",\"hybris_uuid\":\"raffaele.panebianco+tstfullmember@accenture.pl\",\"customer_id\":\"100009676003\"}"; 			//	 			 	
	 		console.logp("SET FAKE SESSION COOKIE");
 		}
 		
 		$scope.isValidationEnabled = false;
 		
 		//Offer Rendering Status
 		$scope.AmIBookedToThisOffer = false; 
 		$scope.isOfferBookingMode = true; 		
 		$scope.isOfferConfirmationMode = false;
 		$scope.isOfferViewMode = false;
 		$scope.isOfferEditMode = false;
 		$scope.isOfferAfterRegistrationDate = false;
 		 		
 		$scope.isMultipleVenueEvent = false;
 		
 		$scope.notEnoughPoints = false;
 		$scope.isBBDown = false;
 		$scope.isLosDown = false;
 		
 		$scope.isBookingDetailsEditMode = false; 		
 		$scope.isVenuesEditable = false; 
 		
 		$scope.isRedeemButtonHidden = true; 		 		 		 		
 		$scope.fullyBookedDateMessage = "Fully booked";
 		$scope.bookingLastCancellationDateTime;
 		$scope.eventLastRegistrationDateTime;
 		$scope.isNoDatesAvailableMessageVisible = false;
 		
 		//BANNERS
 		$scope.isEventOnlyOneSeatLeftAfterCheck = false;
 		$scope.isEventOnlyOneSeatLeft = false;
 		$scope.isEventFewSeatsLeft = false;
 		$scope.isEventFullyBooked = false; 	
 		$scope.isChangeSaved = false;
 		$scope.isFaultAfterCancellation = false;
 		$scope.isPointsRestoredAfterCancellation = false;
 		$scope.isPointsNoRestoredAfterCancellation = false;
 		$scope.isRegistrationClosed = false;
 		
 		//IN STORE - COUNTDOWN
 		$scope.currentlyRedeemOfferLink = "#";
 		$scope.isVoucherCountDownVisible = false;
 		$scope.isVoucherCountDownExpiredMessageVisible = false;
 		$scope.isInStoreOfferVoucherRedemptionCancelled = false; 		
 		$scope.counterIterval = false;
 		
 		//SPINNERS
 		$scope.spinnerOnSelectVenue = false;
 		$scope.spinnerOnPersonalDetails = false;
 		$scope.spinnerOnPreferences = false;
 		$scope.spinnerOnBookingDetails = false;
 		$scope.spinnerOnBookingBugButton = false;
 		$scope.spinnerOnConceptsButton = false;
 		$scope.spinnerOnSelectDateTime = false;
 		$scope.spinnerOnSaveButton = false;	
 		
 		
 		$scope.whenDate;
 		$scope.whenTime;
 		$scope.duration = 60;
 		$scope.whereStoreTitle;
 		$scope.whereStreet;
 		$scope.whereCity;

 		$scope.isSaveConceptButtonDisabled = true;
 		$scope.isSaveSelectLocationButtonDisabled = true;
 		$scope.isAvailableStoreLabelHidden = true;
 		$scope.isSaveSelectDateTimeButtonDisabled = true;
 		$scope.isSaveSelectVenueButtonDisabled = true;
 		$scope.isBookEventButtonEnabled = false;
 		
 		$scope.interestedInText;
 		$scope.interestedInTextInitial;
 		$scope.selectedCity;
 		$scope.selectedCityText;
 		$scope.selectedCityTextInitial;
 		$scope.numberAvailableStoresForSelectedCity = 0;
 		$scope.selectedStore;
 		$scope.selectedVenue = null;
 		$scope.selectedVenueTemp;
 		$scope.selectedVenueText;
 		$scope.selectedVenueTextInitial;
 		
 		$scope.whenButton = angular.element(document.querySelector('#select-date-time'));
 		
 		
 		$scope.preferences = {};
 		$scope.preferences.mailAlertRequired = false;
 		$scope.preferences.smsAlertRequired = false;
 		$scope.preferences.bringAFriendChecked = false;
 		$scope.preferences.bringAFriendVisible = true;
 		$scope.preferences.bringAFriendName = '';
 		$scope.preferences.numberoOfFriendsToBring = 0;
 		
 		
 		$scope.selectedDate;
 		$scope.selectedTimeSlot;
 		$scope.selectedDateTimeText;
 		$scope.selectedDateTimeTextInitial;
 		$scope.offerLastCancellationDate='';
 		
 		$scope.clubPageUrl="#";
 		$scope.bookedOfferPageUrl;
 		
 		$scope.upcomingBookings = [];
 		$scope.bookingStatus;
 		$scope.bookingId;
 		$scope.venueCompanyId;
 		
 		$scope.offerKeyOnRedemptionNow;
 		$scope.offerPropositionId;
 		$scope.offerDiscountCodeStore;
 		$scope.offerDiscountCodeStoreEanUrl;
 		
 		$scope.customerLoyaltyId;
 		$scope.customerEanCodeUrl;
 		
 		$scope.googleCalendarEventUrl = "#";
 		$scope.outlookCalendarEventUrl = "#";
 		$scope.yahooCalendarEventUrl = "#";
 		$scope.icsEvent = {};
 		
 		$scope.defaultDateFormatter = "yyyy-MM-dd";
 		if(!$scope.dateFormatter) 		{
 			$scope.dateFormatter = $scope.defaultDateFormatter;
 		}
 		
 		$scope.whatLabelLocalized="";
		$scope.infoLabelLocalized="";
		$scope.whereLabelLocalized="";
		$scope.whenLabelLocalized="";
		
		$scope.timeShift="";
		$scope.timeShiftParam="time_shift";
		
		//some variable has to be set for authooring mode
		$scope.forceDisplay;
		
 		
 	  $scope.$watch('hmClubEnabled', function (newValue, oldValue) {	
			console.logp("CLUB - hmClubEnabled: " + $scope.hmClubEnabled)                
 			if(newValue===true){ 				
 				console.logp("call to Init");
 				hmClubService.initClub($scope);
 				
 				$scope.$watch('voucherForm.$valid', function (newFormValidity, oldFormValidity) {	
 					if(newFormValidity!=oldFormValidity){ 
 						$scope.isBookEventButtonEnabled = hmClubService.checkIfValidForBooking();      	
 					}  
 				});	//end watch
 				
 			}
 		});	//end watch
 	  
 	  
 	  $scope.redeemModalConfirm = function(){			
			hmClubService.redeemOffer();
		} 	
 	  
 	 $scope.redeemServicePackage = function(){			
			hmClubService.redeemServicePackage();
		} 
 
 	  //STYLE ADVISOR METHODS
 	  
		$scope.setDepartment = function(department)
		{			
			if(department.selected==true){
			}else{				
				for(key in department.concepts)
				{
					department.concepts[key].selected=false;
				}
			}
			$scope.isSaveConceptButtonDisabled = false;			
		}

		$scope.setConcept = function(concept)
		{
			if(concept.selected){
				$scope.clubModel.offerDepartments[concept.departmentKey].selected = true;
			}
			$scope.isSaveConceptButtonDisabled = false;
		}

		$scope.saveDepartmentAndConcept = function()
		{			
			$scope.isSaveConceptButtonDisabled = true;
			$scope.numberAvailableStoresForSelectedCity = 0;
			$scope.cleanSelectedStore();

			$scope.interestedInText = (function(d){
				var selectionLabel = "";				
				for (var key in d) {										
				  if (d.hasOwnProperty(key) && d[key].selected) {
				  	var dep = d[key];
				  	if(selectionLabel.length){
				  		selectionLabel+=", ";
				  	}
				  	selectionLabel+=dep.name;

				  	var conceptsLabels = " (";
				    for (var key in dep.concepts) {
						  if (dep.concepts.hasOwnProperty(key) && dep.concepts[key].selected) {
						  	if(conceptsLabels.length>2){
						  		conceptsLabels+=", ";
						  	}
						  	conceptsLabels+=dep.concepts[key].name;						    
						  }
						}
						conceptsLabels+=")";
						if(conceptsLabels.length>3){
							selectionLabel+=conceptsLabels;
						}
				  }
				}
				return selectionLabel;
			})($scope.clubModel.offerDepartments);

			if (!$scope.interestedInText.length){
				$scope.interestedInText = $scope.interestedInTextInitial;
			}
			
			$scope.isBookEventButtonEnabled = hmClubService.checkIfValidForBooking();

			(function(m){
				
				var conceptsSelection = [];
				for(var key in m.offerDepartments){
					if(m.offerDepartments.hasOwnProperty(key) && m.offerDepartments[key].selected){
						var department = m.offerDepartments[key];
						department.conceptsSelection = [];

						for(key in department.concepts)
						{
							if(department.concepts.hasOwnProperty(key) && department.concepts[key].selected){
								department.conceptsSelection.push(department.id + "-" + department.concepts[key].id);
							}
						}
						if(department.conceptsSelection.length==0){
							if(conceptsSelection.indexOf(department.id)<0){
								conceptsSelection.push(department.id);
							}
						}else{
							for(var i=0;i<department.conceptsSelection.length;++i){
								if(conceptsSelection.indexOf(department.conceptsSelection[i])<0){
									conceptsSelection.push(department.conceptsSelection[i]);	
								}								
							}
						}
					}
				}				
				
				var storesFilteredByConcept = [];

				for(var k=0; k<m.offerStores.length;++k){

					var store = m.offerStores[k],
						storeConcepts = [];

					for(var i=0; i<store.departments.length;++i){
						var depart = store.departments[i];
						storeConcepts.push(depart.id);
						for(var j=0;j<depart.concepts.length;++j){
							var concept = depart.concepts[j];
							storeConcepts.push(concept.departmentId + "-" + concept.conceptId);
						}
					}					
					
					var allSelectedConceptsSupportedByThisStore = true;
					for(var i=0;i<conceptsSelection.length;++i){
						if(storeConcepts.indexOf(conceptsSelection[i])<0){
							allSelectedConceptsSupportedByThisStore=false;
							break;
						}
					}
					if(allSelectedConceptsSupportedByThisStore){
						storesFilteredByConcept.push(store);
					}
				}				
				m.filteredOfferStores = storesFilteredByConcept;
				hmClubService.filterOfferCitiesFromOfferStores(m);
				m.storesInCity = [];
	
				if(storesFilteredByConcept.length==0){
					hmCommon.openModal('error-modal');
				}else{
					hmCommon.closeModal('interested-in-modal');
				}					
			})($scope.clubModel);			
		};

		$scope.selectCityChange = function()
		{	
			var m = $scope.clubModel;
			m.storesInCity = [];
			if($scope.selectedCity){
				var cityKey = $scope.selectedCity.key;
				for(var i=0; i<m.filteredOfferStores.length;++i){
					var store = m.filteredOfferStores[i];
					if(store.cityKey==cityKey){
						m.storesInCity.push(store);
					}
				}
				$scope.numberAvailableStoresForSelectedCity = m.storesInCity.length;

				for (var i=0; i < m.storesInCity.length; ++i){
					var storeItem = m.storesInCity[i],
					store = m.stores[storeItem.id];
					storeItem.address = store.address;

					storeItem.conceptsText = '';
					for (var j=0; j < store.departments.length; ++j){
						var departmentItem = store.departments[j];
						for (var k=0; k < departmentItem.concepts.length; ++k){
							var conceptItem = departmentItem.concepts[k];
							if(storeItem.conceptsText.length){
								storeItem.conceptsText += " | " + conceptItem.name;
							}else{
								storeItem.conceptsText = conceptItem.name;
							}
						}
					}				  
				}
				$scope.isAvailableStoreLabelHidden = false;
			}
		};

		$scope.setStore = function(store)
		{	
			if(store.selected){
				(function(s){
					for(var i=0;i<s.length;++i){
						if(s[i]!=store){
							s[i].selected = false;
						}
					}				
				})($scope.clubModel.storesInCity);
				$scope.selectedStore = store;
				$scope.venueCompanyId = store.venueCompanyId;
			}
			$scope.isSaveSelectLocationButtonDisabled = false;
		};

		$scope.cleanSelectedStore = function(){
			hmClubService.cleanSelectedStore();
		};
		
		$scope.cleanSelectedDateTime = function(){
			hmClubService.cleanSelectedDateTime();
	 		
		};

		$scope.saveLocation = function()
		{
			if ($scope.selectedStore && $scope.selectedStore.selected){
				$scope.selectedCityText = "";
				$scope.cleanSelectedDateTime();
				$scope.whenButton.removeAttr('disabled');				
				hmClubService.loadOfferStoreDates();
			}	else{
				$scope.cleanSelectedStore();
				$scope.whenButton.attr('disabled','');
			}
		};

		$scope.setTimeSlot = function(timeSlot)
		{	
			if(timeSlot.disabled){
				timeSlot.selected = false;
				return;
			}else if(timeSlot.selected){
				(function(s){
					console.log(s);
					for(var i=0;i<s.length;++i){
						if(s[i]!=timeSlot){
							s[i].selected = false;
						}
					}				
				})($scope.selectedDate.timeSlots);
				$scope.selectedTimeSlot = timeSlot;				
			}
			$scope.isSaveSelectDateTimeButtonDisabled = false;			
		};

		$scope.saveDateTime = function()
		{		
			$scope.spinnerOnSelectDateTime = true;
			$scope.isNoDatesAvailableMessageVisible = false;
			hmClubService.refreshTimeSlotInfo($scope.selectedTimeSlot, function(isTimeSlotValid){
				
				$scope.spinnerOnSelectDateTime = false;
				if(isTimeSlotValid){
					$scope.isBookEventButtonEnabled = hmClubService.checkIfValidForBooking();
					hmClubService.setStoreAndTimeInfoInScope();					
				}else{
					$scope.isNoDatesAvailableMessageVisible = true;
				}				
				setTimeout(function(){
  	 			$scope.$apply();
  	 		},0); 
			});	
		};
		
		//EVENT METHODS
		$scope.setVenue = function(venue)
		{
			if(venue.selected){
				$scope.selectedVenueTemp = venue;
				$scope.isSaveSelectVenueButtonDisabled = false;
				(function(v){
					for(var i=0;i<v.length;++i){
						if(v[i]!=venue){
							v[i].selected = false;
						}
					}				
				})($scope.clubModel.eventVenues);				
			}		
		};
		
		$scope.saveVenue = function()
		{
			$scope.selectedVenue = null;
			$scope.isSaveSelectVenueButtonDisabled = true;
			if ($scope.selectedVenueTemp && $scope.selectedVenueTemp.selected==true){	

				if($scope.selectedVenue!=null && $scope.selectedVenue.venueCompanyId!=$scope.selectedVenueTemp){
					$scope.preferences.bringAFriendChecked = false;
					$scope.preferences.bringAFriendName = '';
			 		$scope.preferences.numberoOfFriendsToBring = 0;			 		
				}				
				$scope.spinnerOnSelectVenue = true;
				hmClubService.refreshVenueInfoFor($scope.selectedVenueTemp, function(updatedVenue){
					
					$scope.spinnerOnSelectVenue = false;					
					hmClubService.setVenueInfoInScope(updatedVenue);
					$scope.isBookEventButtonEnabled = hmClubService.checkIfValidForBooking();	
					setTimeout(function(){
	  	 			$scope.$apply();
	  	 		},0); 
				});								
				hmClubService.setVenueInfoInScope($scope.selectedVenueTemp);
				$scope.isBookEventButtonEnabled = hmClubService.checkIfValidForBooking();					
			}	else{
				$scope.selectedVenueText = $scope.selectedVenueTextInitial;
				$scope.whenDate = "";
				$scope.selectedVenue = null;
				$scope.isBookEventButtonEnabled = false;				
			}			
			hmCommon.closeModal('where-modal-multiple-venue-event');
		};
		
		$scope.wantToBringAFriend = function()
		{
			if($scope.preferences.bringAFriendChecked){
				
				$scope.spinnerOnPreferences = true;
				hmClubService.refreshVenueInfoFor($scope.selectedVenue, function(updatedVenue){
					
					$scope.spinnerOnPreferences = false;
					hmClubService.setVenueInfoInScope(updatedVenue);
					$scope.isBookEventButtonEnabled = hmClubService.checkIfValidForBooking();	
					setTimeout(function(){
	  	 			$scope.$apply();
	  	 		},0); 
				});				
				hmClubService.setVenueInfoInScope($scope.selectedVenue);
				$scope.isBookEventButtonEnabled = hmClubService.checkIfValidForBooking();	
			}						
		};
		
		$scope.openBookingModal = function(){
			hmCommon.openModal('confirm-modal');
			$scope.isValidationEnabled = false;			
		};
		
		$scope.bookEvent = function(){	
			hmClubService.bookEvent();			
			$scope.isBookEventButtonEnabled = false;			
		};
		
		$scope.swicthOfferToEditMode = function(){
			$scope.isChangeSaved = $scope.isFaultAfterCancellation = false;
			hmClubService.setOfferMode("edit");			
		}
		
		$scope.cancelEditMode = function(){
			//hmClubService.setOfferMode("view");
			if($scope.offerEditUrl){
				location.href = $scope.offerEditUrl;
			}
		}
		
		$scope.saveOfferChanges = function(){
			hmClubService.updateBooking();			
		}
		
		$scope.deleteBooking = function(){
			hmClubService.deleteBooking();
			hmCommon.closeModal('cancel-booking-confirm-modal');
		}
		
		$scope.cancelInStoreOfferVoucher = function(){
			var $redeemMessage = $('#hmc_redeem_offer_message');
			clearInterval($scope.counterIterval);
		    localStorage.removeItem('hmc_stored_currently_redeem_offer_id');
		    localStorage.removeItem('hmc_stored_currently_redeem_offer_link');
		    localStorage.removeItem('hmc_stored_voucher_expire_redeem_time');
		    localStorage.removeItem('hmc_stored_currently_redeem_offer_proposition_id');
		      
		    $scope.isVoucherCountDownVisible = false;
      
			hmCommon.closeModal('cancel-instore-redemption-confirm-modal');			
			$scope.isInStoreOfferVoucherRedemptionCancelled = true;	
			if($redeemMessage) $redeemMessage.hide();
		};
		
		
		
		$scope.downloadStandardCalendar = function(target){		
			hm.calendar.downloadCalendar($scope.icsEvent, target);
		};
		
		$scope.getClass = function(path){
			var loc = document.location.pathname;
			 if(-1 != loc.indexOf(path)){
		           return "active";
		     }
			 return "";
			 
		}
		
 	}]);

