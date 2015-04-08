/**
 * Created by Falza on 07/04/2015.
 */


angular.module('uiRouteApp').controller('changepwdAccount', ['$scope', '$http', '$route', function($scope,$http,$route) {
    $scope.pwdtochange= {};
    $scope.submit = function() {
        var req = {
            method: 'post',
            url: host+'/settings/changepassword',
            dataType:'json',
            headers : {'Content-Type': 'application/x-www-form-urlencoded'} ,
            data: jQuery.param($scope.pwdtochange)
        }
        $http(req).success(function(data){
            console.log("success");
            if(data.result){
                jQuery("#change_error_message").hide();
                jQuery("#change_message").show();
                location.reload();
            }else{
                jQuery("#change_error_message").show();
                jQuery("#change_message").hide();
            }
        }).error(function(){
            console.log("error");
            jQuery("#change_error_message").show();
            jQuery("#change_message").hide();
        });
        return false;
    };
}]);