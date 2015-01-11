$(document).ready(function(){
	loadEvent($("#parkingSlot1"),"load");
	parkingEvent();
})

function loadEvent(elm,cmd){
	var slotId = elm.attr("id");
	var color = elm.data("color");
	$.ajax({
	      url: "admin_ladypark_cmd.php",
	      type: 'POST',
	      dataType: "json",
	      data: {
	        "slotId": slotId,
	        "color": color,
	        "cmd": cmd
	    },
	    success: function(data) {
	      // elm.css("background","red");
	      elm.css("background-color",data["color"]);
	      if(data["color"] == "#FFB4DD"){
	      	elm.find(".text-lady").show();
	      }else{
	      	elm.find(".text-lady").hide();
	      }
	      elm.data("color",data["color"]);
	    },
	    error: function(){
	    	console.log("1:",1)
	    }
	})
}

function parkingEvent(){
	$(".slotAction").click(function(){
		loadEvent($(this),"click");
	});
}
