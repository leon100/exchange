var exchangeApp = angular.module('exchangeApp', []);
exchangeApp.controller("exchangeController", function ($scope, $http) {
    $scope.getExchange = function() {
        $http({
            url: "/exchange.php?amount=" + $scope.amount,
            method: "GET"
        })
        .then(function(response) {
            if(response.data.error){
                $scope.errors = response.data.error;
            } else {
                $scope.exchangeResult = response.data.result;
                delete $scope.errors;
            }
        });
    };
});