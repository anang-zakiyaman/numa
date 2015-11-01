<!DOCTYPE html>
<html lang="en-US" ng-app="numa">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <base href="/numa/">
    <title>NUMA</title>
    <!-- Load Material design CSS -->
    <link href="<?= asset('assets/vendor/angular-material/angular-material.min.css') ?>" rel="stylesheet">
  </head>
  <body id="main-container" layout="column">
    <md-content layout layout-fill flex ui-view></md-content>

    <!-- Load Javascript Libraries -->
    <script src="<?= asset('assets/vendor/angular/angular.js') ?>"></script>
    <script src="<?= asset('assets/vendor/angular-ui-router/release/angular-ui-router.min.js') ?>"></script>
    <script src="<?= asset('assets/vendor/angular-animate/angular-animate.min.js') ?>"></script>
    <script src="<?= asset('assets/vendor/angular-aria/angular-aria.min.js') ?>"></script>
    <script src="<?= asset('assets/vendor/angular-material/angular-material.min.js') ?>"></script>
    
    <!-- AngularJS Application Scripts -->
    <script src="<?= asset('app-admin/lib/app.js') ?>"></script>
    <script src="<?= asset('app-admin/lib/routes.js') ?>"></script>
    <script src="<?= asset('app-admin/controllers/base.js') ?>"></script>
    <script src="<?= asset('app-admin/controllers/home.js') ?>"></script>
  </body>
</html>
