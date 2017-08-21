

	$(document).ready(function() {
		getStatus();
		setInterval(getStatus, 100);
	});

	// pin array, return 1 if all pins are on
	// 0 if all pins off, -1 for indetermined
	function getValveStatus(pins){
		if(pins.length == 0){
			return "0";
		}
		var h = pins.indexOf("1");
		var l = pins.indexOf("0");
		return h >= 0 ? (l>=0 ? -1 : 1) : 0;
	}

	// valve string, pin array
	// if any pin fails, sets to red
	function setPinStatus(valve, pins){
		var status = getValveStatus(pins);

		// set color of valve buttons
		document.getElementById(valve).style.backgroundColor = (status == 0 ? "#53C746" : (status == 1 ? "#E87676" : "#EFDD4A"));
		document.getElementById(valve).value = (status == 0 ? "on" : "off");
	}

	function getStatus(){

		// AJAX request to PHP getStatus
		$.ajax({
			url: 'getStatus.php',
			type: 'GET',
			success: function(data, status){
				console.log(status);
        		console.log(data);
				var resp = JSON.parse(data);
        		console.log(resp);
				var data = resp['status'];

        		console.log("data: "+JSON.stringify(data));
				// loop through resp
				for(var k in data){
          			console.log("k: "+k);
					if(data.hasOwnProperty(k)){
						console.log(k + ", " + data[k]);
						setPinStatus(k, data[k]);
					}
				}
			},
			beforeSend: function(req){

			},
			error: function(status){
				document.getElementById("status").innerHTML = "status: PIN GET STATUS ERROR "+status;
            	console.log(status);
			}
		});
	}
