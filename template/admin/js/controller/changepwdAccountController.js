/**
 * Created by Falza on 07/04/2015.
 */


angular.module('uiRouteApp').controller('changepwdAccount', ['$scope', '$http', '$route', function($scope,$http,$route) {
    $scope.pwdtochange= {};
    $scope.error=false;
    $scope.success=false;
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
                $scope.error=false;
                $scope.success=true;
                location.reload();
            }else{
                $scope.error=true;
                $scope.success=false;
            }
        }).error(function(){
            console.log("error");
            $scope.error=true;
            $scope.success=false;
        });
        return false;
    };
}]);