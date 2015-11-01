app.controller("HomeCtrl", ["$scope", "$http", "API_URL", 
  function($scope, $http, API_URL) {

    $http({
      method: 'GET',
      url: API_URL + 'products'
    })
    .then(function successCallback(response) {
      $scope.products = response.data;
      console.log($scope.products);
    }, function errorCallback(response) {
        
    });

  }
]);