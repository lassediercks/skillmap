require("angular");
require('./skills.sass');

var app = angular.module('skillsMap',[])
var data = require('./skills.json');

app.controller('CategoryController', function(){
  this.CATNAME = data.category;
});

// app.controller('MapController', function(){
//   this.categorys = data.category;
//   this.skills = data.skills;
//   console.log(data.skills);
// });

angular.element(document).ready(function () {
  angular.bootstrap(document, [app.name], {
  });
});