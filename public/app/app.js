var app = angular.module('numa', [
  'ui.router',
  'ngMaterial',
  //'sn.skrollr'
]);
//
// app.constant('BASE_URL', {
//   views: window.location.origin
// });
app.constant('VIEWS_URL', window.location.origin + '/numa/public/app/views/');
app.constant('IMAGES_URL', window.location.origin + '/numa/public/app/assets/images/');
app.constant('API_URL', window.location.origin + '/numa/public/api/v1/');

app.config(function($mdIconProvider){
  var iconsUrl = window.location.origin + '/numa/public/app/assets/vendor/material-design-icons/sprites/svg-sprite/';
  $mdIconProvider
  .iconSet("av", iconsUrl + "svg-sprite-av.svg")
  .iconSet("maps", iconsUrl + "svg-sprite-maps.svg")
  .iconSet("social", iconsUrl + "svg-sprite-social.svg")
  .iconSet("action", iconsUrl + "svg-sprite-action.svg")
  .iconSet("communication", iconsUrl + "svg-sprite-communication.svg")
  .iconSet("content", iconsUrl + "svg-sprite-content.svg")
  .iconSet("toggle", iconsUrl + "svg-sprite-toggle.svg")
  .iconSet("navigation", iconsUrl + "svg-sprite-navigation.svg")
  .iconSet("image", iconsUrl + "svg-sprite-image.svg");
});

// app.run(["snSkrollr", function(snSkrollr) {
//   snSkrollr.init();
// }]);
