app.run(['$rootScope', '$state',
  function($rootScope, $state){
    $rootScope.$on('$stateChangeError',
      function(event, toState, toParams, fromState, fromParams, error){
        // We can catch the error thrown when the $requireUser promise is rejected
        // and redirect the user back to the main page
        if(error === "AUTH_REQUIRED")$state.go('login');
      }
    );
  }
]);

app.config(['$urlRouterProvider','$stateProvider', '$locationProvider', 'VIEWS_URL',
  function($urlRouterProvider, $stateProvider, $locationProvider, VIEWS_URL){
    $locationProvider.html5Mode(true);
    $stateProvider
    // Authentication module ========================================================
    .state('login',{
      url: '/login',
      templateUrl: VIEWS_URL + 'login.html',
      controller: 'LoginCtrl'
    })
    .state('logout', {
        url: '/logout',
        resolve: {
          "logout": ['$state',
            function($state) {
              // logout
            }
          ]
       }
    })

    .state('base', {
      url: '/dashboard',
      controller: 'BaseCtrl',
      templateUrl: VIEWS_URL + 'base.html'
    })
    .state('base.home', {
     url: '/home',
     controller: 'HomeCtrl',
     templateUrl: VIEWS_URL + 'home.html' 
    });


    // Default route ===========================================================
    $urlRouterProvider.otherwise("/dashboard/home");
  }
]);
