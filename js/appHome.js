 (function(){

            angular.module("appHome",[])
            .controller('home',homeMain);
            homeMain.$inject=["$http"];
            function homeMain($http)
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
              lol.s1=lol.xx.records[0]["Slide 1 Title"];
              lol.s2=lol.xx.records[2]["Slide 2 Title"];
              lol.s3=lol.xx.records[4]["Slide 3 Title"];
              lol.s4=lol.xx.records[6]["Slide 4 Title"];
              lol.s1d=lol.xx.records[1]["Slide 1 Data"];
              lol.s2d=lol.xx.records[3]["Slide 2 Data"];
              lol.s3d=lol.xx.records[5]["Slide 3 data"];
              lol.s4d=lol.xx.records[7]["Slide 4 Data"];
              lol.c1=lol.xx.records[8]["Vendors"];
              lol.c2=lol.xx.records[9]["Events Planned"];
              lol.c3=lol.xx.records[10]["Projects"];
              lol.c4=lol.xx.records[11]["Cities"];
              
            });
            
            
            }

          })()