var waypoint = new Waypoint({
    element:document.getElementById("number"),
    handler:function(direction){
        var options = {
              useEasing: true, 
              useGrouping: true, 
              separator: ',', 
              decimal: '.', 
            };
            var solarSystem = new CountUp("number", 0, 4500, 0, 5, options);
            if (!solarSystem.error) {
              solarSystem.start();
            } else {
              console.error(solarSystem.error);
            }
      },
      offset: "50%"
  })