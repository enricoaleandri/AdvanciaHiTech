/**
 * Created by Falza on 07/04/2015.
 */

angular.module('uiRouteApp').controller('addAccount', ['$scope', '$http','$route', function($scope,$http,$route) {
    $scope.usertoadd= {};
    $scope.error=false;
    $scope.success=false;
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