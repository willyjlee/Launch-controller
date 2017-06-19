
  // str=name of valve = 'GEN_SAF', 'IGN_SAF'
  function toggle(str){
    var btn = document.getElementById(str);
    if(btn.value=="off"){
      //document.getElementById(str).value="on";
      func(btn, "valves/"+str+"/open.php");
    }else{
      //document.getElementById(str).value="off";
      func(btn, "valves/"+str+"/close.php");

    }
  }

	function func(btn, str){
        var user = document.getElementById("user").value;
        var pass = document.getElementById("pass").value;
        console.log(user);
        console.log(pass);

        //document.getElementById("user").value="";
        //document.getElementById("pass").value="";

				$.ajax({
					url: str,
					type: 'POST',
					success: function(data, status){
						console.log(data);
				var status = JSON.parse(data)['status'];
            			document.getElementById("status").innerHTML = "status: "+status;
				if(status=="OK"){
				   btn.value = btn.value=="on" ? "off" : "on";
				}

            			document.getElementById("op").innerHTML = "operation: "+JSON.parse(data)['op'];

            			var d = new Date();
            			document.getElementById("time").innerHTML = "time: "+d;
					},

				data: {"username" : user, "password" : pass},

                // data: {myData:dataString};
                // TODO: send the username and password here
                // TODO: need send user/pass thru HTTPS
          			error: function(status){
            			document.getElementById("status").innerHTML = "status: ERROR "+status;
            			console.log(status);
          			}
				});
	}
