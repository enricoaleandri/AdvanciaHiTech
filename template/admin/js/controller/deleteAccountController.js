/**
 * Created by Falza on 07/04/2015.
 */


angular.module('uiRouteApp').controller('deleteAccount', ['$scope', '$http','$route', function($scope,$http,$route) {
    $scope.usertodelete= {};
    $scope.submit = function() {
        var req = {
            method: 'post',
            url: host+'/settings/deleteuser',
            dataType:'json',
            headers : {'Content-Type': 'application/x-www-form-urlencoded'} ,
            data: jQuery.param($scope.usertodelete)
        }
        $http(req).success(function(data){
            console.log("success");
            console.log(data.result);
            if(data.result){
                jQuery("#delete_error_message").hide();
                jQuery("#delete_message").show();
                location.reload();
            }else{
                jQuery("#delete_error_message").show();
                jQuery("#delete_message").hide();
            }
        }).error(function(){
            console.log("error");
            jQuery("#delete_error_message").show();
            jQuery("#delete_message").hide();
        });
        return false;
    };
}]);