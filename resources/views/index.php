<!DOCTYPE html>
<html lang="en-US" ng-app="numa">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <base href="/">
    <title>NUMA</title>
    <!-- Load Material design CSS -->
    <link href="<?= asset('app/assets/vendor/angular-material/angular-material.min.css') ?>" rel="stylesheet">
  </head>
  <body id="main-container" layout="column">
    <md-content layout layout-fill flex ui-view></md-content>

    <!-- Load Javascript Libraries -->
    <script src="<?= asset('app/assets/vendor/angular/angular.js') ?>"></script>
    <script src="<?= asset('app/assets/vendor/angular-ui-router/release/angular-ui-router.min.js') ?>"></script>
    <script src="<?= asset('app/assets/vendor/angular-animate/angular-animate.min.js') ?>"></script>
    <script src="<?= asset('app/assets/vendor/angular-aria/angular-aria.min.js') ?>"></script>
    <script src="<?= asset('app/assets/vendor/angular-material/angular-material.min.js') ?>"></script>
    <!-- <script src="<?= asset('app/assets/vendor/angular-skrollr/dist/angular-skrollr.min.js') ?>"></script>
    <script src="<?= asset('app/assets/vendor/skrollr/dist/skrollr.min.js') ?>"></script> -->

    <!-- AngularJS Application Scripts -->
    <script src="<?= asset('app/app.js') ?>"></script>
    <script src="<?= asset('app/routes.js') ?>"></script>
    <script src="<?= asset('app/controllers/menu.js') ?>"></script>
    <script src="<?= asset('app/controllers/home.js') ?>"></script>
  </body>
</html>
