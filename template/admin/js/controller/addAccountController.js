/**
 * Created by Falza on 07/04/2015.
 */

angular.module('uiRouteApp').controller('addAccount', ['$scope', '$http','$route', function($scope,$http,$route) {
    $scope.usertoadd= {};
    $scope.submit = function() {
        var req = {
            method: 'post',
            url: host+'/settings/adduser',
            dataType:'json',
            headers : {'Content-Type': 'application/x-www-form-urlencoded'} ,
            data: jQuery.param($scope.usertoadd)
        }
        $http(req).success(function(data){
            console.log("success");
            if(data.result){
                jQuery("#add_error_message").hide();
                jQuery("#add_message").show();
                location.reload();
            }else{
                jQuery("#add_error_message").show();
                jQuery("#add_message").hide();
            }
        }).error(function(){
            console.log("error");
            jQuery("#add_error_message").show();
            jQuery("#add_message").hide();
        });
        return false;
    };
}]);