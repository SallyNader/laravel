$(document).ready(function() {

	showmenu();

	$(window).load(function() {
		$("#open").fadeOut(1000);
	});


	var part3_check = true;
	$("#min2").click(function(event) {
		if (part3_check == true){
			$(".part2").animate({height: 35}, 200);
			part3_check = false;
		} else{
			$(".part2").css('height', 'auto');
			part3_check = true;
		}

	});
	var part3_check = true;
	$("#min3").click(function(event) {
		if (part3_check == true){
			$(".part3").animate({height: 35}, 200);
			part3_check = false;
		} else{
			$(".part3").css('height', 'auto');
			part3_check = true;
		}

	});
	var part3_check = true;
	$("#min4").click(function(event) {
		if (part3_check == true){
			$(".part4").animate({height: 35}, 200);
			part3_check = false;
		}//end of if condition
		else{
			$(".part4").css('height', 'auto');
			part3_check = true;
		}//end of else condition

	});

	var icon_check=true;
	$("shape").click(function(event) {
		if (icon_check==true){
			$("shapes").visibility='show';
			icon_check=false;
		}
		else{
			$("shapes").visibility='hidden';
			icon_check=true;
		}

	});

	function showmenu(){
		var icon_check=true;
		$("#shape").click(function(event) {
		if (icon_check==true){
			$("#shapes").css('opacity', '1');
			icon_check=false;
		}
		else{
			$("#shapes").css('opacity', '0');
			icon_check=true;
		}

		});
	}
});


$