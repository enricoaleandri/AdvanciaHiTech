/**
 * Created by Falza on 08/04/2015.
 */



angular.module('uiRouteApp').controller('updateConfig', ['$scope', '$http','$route', function($scope,$http,$route) {
    $scope.keys=[];
    $scope.values=[];
    $scope.error=false;
    $scope.success=false;
    console.log($scope.keys);
    console.log($scope.values);
    $scope.submit = function() {
        var req = {
            method: 'post',
            url: host+'/settings/update',
            dataType:'json',
            headers : {'Content-Type': 'application/x-www-form-urlencoded'} ,
            data: jQuery.param({"values":$scope.values,"keys":$scope.keys})
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