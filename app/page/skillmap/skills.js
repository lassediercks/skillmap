require("angular");

var app = angular.module('skillsmap',[])
var data = require('./skills.json');

app.controller('MapController', function(){
  this.categorys = data.category;
  this.skills = data.skills;
  console.log(data.skills);
});

angular.element(document).ready(function () {
  angular.bootstrap(document, [app.name], {
  });
});