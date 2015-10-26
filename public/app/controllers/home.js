app.controller("HomeCtrl", ["$scope", "$window", '$anchorScroll', '$location', 'IMAGES_URL',
  function($scope, $window, $anchorScroll, $location, IMAGES_URL) {
    $scope.backgroundImageUrl = IMAGES_URL + 'home.jpg';
    $scope.viewportHeight = $window.innerHeight;

    $scope.items = [
      {name: 'KATIE DRESS', price: '1250000', imageUrl: IMAGES_URL + 'c5.jpg'},
      {name: 'CHARLOTTE DRESS', price: '1250000', imageUrl: IMAGES_URL + 'c1.jpg'},
      {name: 'MIMI DRESS', price: '1250000', imageUrl: IMAGES_URL + 'c2.jpg'},
      {name: 'ELIF DRESS', price: '1250000', imageUrl: IMAGES_URL + 'c3.jpg'},
      {name: 'GRACE DRESS', price: '1250000', imageUrl: IMAGES_URL + 'c6.jpg'}
    ];


  }
]);
