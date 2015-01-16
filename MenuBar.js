$(document).ready(function(){
  $("#Nav").mouseenter(function(){
	$("#Bar").stop()
    var div=$("#Bar");
    div.animate({height:'250px',},500);
  });  
  $("#Bar").mouseleave(function(){
    $("#Bar").stop()
    var div=$("#Bar");
	div.animate({height:'110px'}, 500)
  });
});
$(document).ready(function(){
	$("#Nav").mouseenter(function(){
		$("#Nav").stop()
		var div=$("#Nav");
		div.animate({opacity:'1', width:'250px'})
	});
	$("#Nav").mouseleave(function(){
		$("#Nav").stop()
		var div=$("#Nav");
		div.animate({opacity:'0.5', width:'200px'})
	});
});