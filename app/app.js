require("angular");
require("./page/page.js");


var app = angular.module('playground',[])


// replaces ng-app="appName"
angular.element(document).ready(function () {
  angular.bootstrap(document, [app.name], {
    //strictDi: true
  });
});