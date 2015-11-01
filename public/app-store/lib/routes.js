app.run(['$rootScope', '$state',
  function($rootScope, $state){
    $rootScope.$on('$stateChangeError',
      function(event, toState, toParams, fromState, fromParams, error){
        // We can catch the error thrown when the $requireUser promise is rejected
        // and redirect the user back to the main page
        if(error === "AUTH_REQUIRED")$state.go('auth.userLogin');
      }
    );
  }
]);

app.config(['$urlRouterProvider','$stateProvider', '$locationProvider', 'VIEWS_URL',
  function($urlRouterProvider, $stateProvider, $locationProvider, VIEWS_URL){
    $locationProvider.html5Mode(true);
    $stateProvider
    // Authentication module ========================================================
    .state('auth', {
      url: '/auth',
      templateUrl: VIEWS_URL + 'auth-base.html'
    })
    .state('auth.userLogin',{
      url: '/user',
      templateUrl: VIEWS_URL + 'user-login.ng.html',
      controller: 'UserLoginCtrl',
    })
    .state('auth.adminLogin',{
      url: '/admin',
      templateUrl: VIEWS_URL + 'admin-login.ng.html',
      controller: 'AdminLoginCtrl'
    })
    .state('auth.logout', {
        url: '/logout',
        resolve: {
          "logout": ['$state',
            function($state) {
              // logout
            }
          ]
       }
    })

    // Main module ===========================================================
    .state('menu', {
      url: '/menu',
      controller: 'MenuCtrl',
      templateUrl: VIEWS_URL + 'menu.html'
    })
    .state('menu.home', {
      url: '/home',
      templateUrl: VIEWS_URL + 'home.html',
      controller: 'HomeCtrl'
    })

    // Admin module ===========================================================
    .state('admin', {
      url: '/admin',
      controller: 'AdminBaseCtrl',
      templateUrl: VIEWS_URL + '/admin/' + 'base.html'
    })
    .state('admin.home', {
     url: '/home',
     controller: 'AdminHomeCtrl'
     templateUrl: VIEWS_URL + '/admin/' + 'home.html' 
    });


    // Default route ===========================================================
    $urlRouterProvider.otherwise("/admin/home");
  }
]);
