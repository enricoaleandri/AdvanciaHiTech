/**
 * Created by Enrico on 05/04/15.
 */



var scotchApp = angular.module('uiRouteApp', ['ngRoute','ngSanitize']);

// configure our routes
scotchApp.config(function($routeProvider) {
    $routeProvider
        // route for the about page
        .when('/', {
            templateUrl : "../../settings/configuration",
            controller  : 'configurationController'
        })
        // route for the about page
        .when('/configuration', {
            templateUrl : "../../settings/configuration",
            controller  : 'configurationController'
        })

        // route for the contact page
        .when('/account', {
            templateUrl : "../../settings/account",
            controller  : 'accountController'
        })
        // route for the contact page
        .otherwise({
            templateUrl : "../../settings/configuration",
            controller  : 'configurationController'
        });
});

