<!doctype html>
<html lang="en" ng-app="angularjsApp">
<head>
  <meta charset="utf-8">
  <title>Google Phone Gallery</title>

  <script src="<?php echo base_url("/js/jquery/dist/jquery.js") ?>"></script>
  <script src="<?php echo base_url("/js/angular/angular.js") ?>"></script>
  <script src="<?php echo base_url("/js/angular-animate/angular-animate.js") ?>"></script>
  <script src="<?php echo base_url("/js/angular-route/angular-route.js") ?>"></script>
  <script src="<?php echo base_url("/js/angular-resource/angular-resource.js") ?>"></script>
  <script src="<?php echo base_url("/js/custom/angularjs/app.js") ?>"></script>
  <script src="<?php echo base_url("/js/custom/angularjs/controllers.js") ?>"></script>
  <script src="<?php echo base_url("/js/custom/angularjs/services.js") ?>"></script>
</head>
<body>

  <div class="view-container">
    <div ng-view class="view-frame"></div>
  </div>

</body>
</html>
