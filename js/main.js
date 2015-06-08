'use strict';

var lists = {};

var msc = {
	getAllLists : function(){
		return [{ name : "Einkaufsliste1", id : "1"}];
	},
	getProductsByListID : function(listId){
		return [{name : "Apfel"}, {name : "Banane"}];
	},
	sortList : function(products){

	},
	selectedListId : undefined
};

var app = angular.module('mysmartcart', []);

app.controller('main', function ($scope){
	$scope.overview = true;
	$scope.lists = msc.getAllLists();
	$scope.showNavigation = function(test){
		$scope.overview = false;
		$scope.selectedListId = test;
		$scope.products = msc.getProductsByListID(test);
		navigation.loadMarket();


	}
	$scope.hideNavigation = function(){
		$scope.overview = true;
	}
});

//typeahead


jQuery('#productsearch').typeahead({
	source: function(query, process){
			jQuery.ajax({
				url: 'php/defaultQuery.php',
				type : 'POST',
				data: "test=" + query,
				dataType : 'JSON',
				cache : false,
				success : function(data){
					var allProdc = [];
					for(var i = 0; i < data.length; i++){
						allProdc.push(data[i].EMailAdresse);
					}
					return process(allProdc);
				}
			});
	}
});