 (function(){

            angular.module("appHome",[])
            .controller('home',homeMain);
            homeMain.$inject=["$http","$scope"];
            function homeMain($http,$scope)
            {
              var obj;
              var lol=this;
              obj=$http({
                      method: 'post',
                      url: 'front.php',
                    });
            obj.then(function(data){
              lol.xx=data.data;
              console.log(lol.xx.records);
              
              $scope.s1 = lol.xx.records[0]["Slide 1 Title"];
              $scope.s2=lol.xx.records[2]["Slide 2 Title"];
              $scope.s3=lol.xx.records[4]["Slide 3 Title"];
              $scope.s4=lol.xx.records[6]["Slide 4 Title"];
              $scope.s1d=lol.xx.records[1]["Slide 1 Data"];
              $scope.s2d=lol.xx.records[3]["Slide 2 Data"];
              $scope.s3d=lol.xx.records[5]["Slide 3 Data"];
              $scope.s4d=lol.xx.records[7]["Slide 4 Data"];
              $scope.c1=lol.xx.records[8]["Vendors"];
              $scope.c2=lol.xx.records[9]["Events Planned"];
              $scope.c3=lol.xx.records[10]["Projects"];
              $scope.c4=lol.xx.records[11]["Cities"];
              
            });
            
             lol.up=function(x,y){
              
                var ob=  $http({
                      method: 'post',
                      url: 'set.php',
                      data:
                        {
                          s1:x,
                          s:y
                        },
                    });
                console.log(ob);
             }
            }

          })()