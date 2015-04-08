/**
 * Created by Falza on 08/04/2015.
 */



angular.module('uiRouteApp').controller('updateConfig', ['$scope', '$http','$route', function($scope,$http,$route) {
    $scope.updateconfig={
        "comunication_mail":jQuery("#com_mail").val(),
        "job_mail":jQuery("#job_mail").val(),
        "comunication_number":jQuery("#numero").val(),
        "fb_link_page":jQuery("#link_fb").val(),
        "twitter_link_page":jQuery("#link_twitter").val(),
        "meta_tag":jQuery("#meta_tag_value").val(),
        "google_analytics_javascript":jQuery("#google_analytics_javascript_value").val()
    };
    $scope.submit = function() {
        $scope.updateconfig.meta_tag=jQuery("#meta_tag_value").val();
        $scope.updateconfig.google_analytics_javascript=jQuery("#google_analytics_javascript_value").val();
        var req = {
            method: 'post',
            url: host+'/settings/update',
            dataType:'json',
            headers : {'Content-Type': 'application/x-www-form-urlencoded'} ,
            data: jQuery.param($scope.updateconfig)
        }
        $http(req).success(function(data){
            console.log("success");
            if(data.result){
                jQuery("#error_message").hide();
                jQuery("#message").show();
                location.reload();
            }else{
                jQuery("#error_message").show();
                jQuery("#message").hide();
            }
        }).error(function(){
            console.log("error");
            jQuery("#error_message").show();
            jQuery("#message").hide();
        });
        return false;
    };
}]);