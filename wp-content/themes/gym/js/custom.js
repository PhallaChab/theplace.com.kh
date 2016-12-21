function center_discount()
{
	$("#discover_more , #apply_now").height( $(".discount").height());	 
}
function setCircleHeightSame(){
	$(".circle_the_place_1_preload").addClass("circle_the_place_1");
	$(".circle_management_preload").addClass("circle_management");
	$(".circle_the_place_2_preload").addClass("circle_the_place_2");

	$(".circle_the_place_1_preload").removeClass("circle_the_place_1_preload");
	$(".circle_management_preload").removeClass("circle_management_preload");
	$(".circle_the_place_2_preload").removeClass("circle_the_place_2_preload");

	//$(".cirle_link").removeClass("hide");
	$(".cirle_link").height($("#trainee_team_photo").height());
}

function center_member()
{
	 
}
function setPositionTop()
{
	$("#red-top").css("top" , "-" + $("#red-top").height() +"px");
}
function setHeight()
{
	$(".member_wrapper").height(  $(".member_wrapper .row").height());
	var new_margin = Math.ceil(($(".member_wrapper").innerHeight() - $('.member_wrapper .row').height()) / 2);	
    $('.member_wrapper .row').css('top', new_margin + 'px');
}

function initialize() {
	var location = $("#map_location").val();
	location = location.split(",");
    var mapOptions = {
        zoom: 18,
		disableDoubleClickZoom: true, // zoom
      draggable: false, // mouse move 
	 scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
        center: new google.maps.LatLng(location[0],location[1]),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById('googleMap'),mapOptions);

    // Add 1st marker
    var Latlng_0 = new google.maps.LatLng(location[0],location[1]);
    var marker_0 = new google.maps.Marker(
        {
            position: Latlng_0, 
            title:"0",
			//icon: '/wp-content/themes/mw/image/marker.png',
			
        }
    );

    marker_0.setMap(map);
}

function google_map()
{
	var map;
	google.maps.event.addDomListener(window, 'load', initialize);
}
var site = {
    resize: function(){
        var new_margin = Math.ceil(($(".trainer_team").height() - $('.circle_wrapper').height()) / 2);
        $('.circle_wrapper').css('top', new_margin + 'px');
    }    
};

$( window ).load(function() {
	setCircleHeightSame();
});

$(document).ready(function(){
	//setCircleHeightSame();
	//center_discount();
	//site.resize();
	setPositionTop();
	setHeight();
	center_member();
	
	$(".menu-item-has-children > a").attr('href', "javascript:void(0)");
	if( $("#googleMap").length >0 ){
		google_map();	
	}
	
});
// Window Resize
$( window ).resize(function() {
	setCircleHeightSame();
   //center_discount();
   //site.resize();
   setPositionTop();
   setHeight();
   center_member();
});


// Calendar Area
$("body").on("click" , ".clickable_day_js" , function(){
	var current_date = $(this).text();
	var current_month = $("#current_month").val();
	var current_year = $("#current_year").val().substring(2);
	var parent_category_id = $("#parent_category_id").val();

	var full_date = current_month + "/" + current_date + "/" + current_year;
	var ajax_url = $("#session_ajax_url").val() + "?date=" + full_date + "&parent_category_id=" + parent_category_id;	
	$(".calendar_table td").removeClass("current_date");
	$(this).addClass("current_date");

	$.ajax({
		url: ajax_url,
		success: function(data){			
			$("#dynamic_schedule").html(data);
			 $('html, body').animate({
	          scrollTop: $(".scroll_to_location").offset().top
	        }, 500);

			 $(".scroll_to_location").html("SCHEDULE FOR " + $("#current_year").val() + '-' + current_month + "-" + current_date );
		}

	});
});

//Nagivate Previous Calendar
$("body").on("click" , "#cal_nav_previous" , function(){
	var current_date = $(this).text();
	var current_month = $("#current_month").val();
	var current_year = $("#current_year").val();
	var parent_category_id = $("#parent_category_id").val();

	var full_date =  current_year+"-" + current_month;
	var ajax_url = $("#nagivate_calendar").val() + "?date=" + full_date +"&nav=-";	

	$.ajax({
		url: ajax_url,
		success: function(data){			
			$(".calendar_list").html(data);
		}

	});
});


//Nagivate Next Calendar
$("body").on("click" , "#cal_nav_next" , function(){
	var current_date = $(this).text();
	var current_month = $("#current_month").val();
	var current_year = $("#current_year").val();
	var parent_category_id = $("#parent_category_id").val();

	var full_date =  current_year+"-" + current_month;
	var ajax_url = $("#nagivate_calendar").val() + "?date=" + full_date +"&nav=+";	
	$.ajax({
		url: ajax_url,
		success: function(data){			
			$(".calendar_list").html(data);
		}

	});
});