
function ajaxSubmitCommentForm(){
	"use strict";

	var options = { 
		success: function(){
			$j("#commentform textarea").val("");
			$j("#commentform .success p").text("Comment has been sent!");
		}
	}; 
	
	$j('#commentform').submit(function() {
		$j(this).find('input[type="submit"]').next('.success').remove();
		$j(this).find('input[type="submit"]').after('<div class="success"><p></p></div>');
		$j(this).ajaxSubmit(options); 
		return false; 
	}); 
}
var header_height = 100;
var min_header_height = 60;



var geocoder;
var map;

function initialize() {
	"use strict";
  // Create an array of styles.
  var mapStyles = [
    {
      stylers: [
			  { hue: "#324156" },
			  { saturation: -60 },
			  { lightness: -20 },
			  { gamma: 1.51 }
			]
    }
  ];
  var qodeMapType = new google.maps.StyledMapType(mapStyles,
    {name: "Qode Map"});

	geocoder = new google.maps.Geocoder();
	var latlng = new google.maps.LatLng(-34.397, 150.644);
	var myOptions = {
		zoom: 12,
				scrollwheel: false,
				center: latlng,
		zoomControl: true,
		zoomControlOptions: {
			style: google.maps.ZoomControlStyle.SMALL,
			position: google.maps.ControlPosition.RIGHT_CENTER
		},
		scaleControl: false,
			scaleControlOptions: {
			position: google.maps.ControlPosition.LEFT_CENTER
		},
		streetViewControl: false,
			streetViewControlOptions: {
			position: google.maps.ControlPosition.LEFT_CENTER
		},
		panControl: false,
		panControlOptions: {
			position: google.maps.ControlPosition.LEFT_CENTER
		},
		mapTypeControl: false,
		mapTypeControlOptions: {
			mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'qode_style'],
			style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
			position: google.maps.ControlPosition.LEFT_CENTER
		},
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	}

function codeAddress(data) {
	"use strict";
	
	if (data == '')
		return;

	var contentString = '<div id="content">'+
	'<div id="siteNotice">'+
	'</div>'+
	'<div id="bodyContent">'+
	'<p>'+data+'</p>'+
	'</div>'+
	'</div>';
	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});
	geocoder.geocode( { 'address': data}, function(results, status) {
		if (status === google.maps.GeocoderStatus.OK) {
			map.setCenter(results[0].geometry.location);
			var marker = new google.maps.Marker({
				map: map, 
				position: results[0].geometry.location,
								icon:  'pin.png',
								title: data['store_title']
			});
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map,marker);
			});
			//infowindow.open(map,marker);
		}
	});
}

var $j = jQuery.noConflict();

$j(document).ready(function() {
	"use strict";

	showContactMap();
});

function showContactMap() {
	"use strict";

	if($j("#map_canvas").length > 0){
		initialize();
		codeAddress('');
		codeAddress('');
		codeAddress('New York, 5th Ave');
		codeAddress('New York, W 72th');
		codeAddress('New York, E 79th');
	}
}

var no_ajax_pages = [];
var root = '/satellite/';
var theme_root = '/satellite/wp-content/themes/satellite/';
var parallax_speed = 1;

	        no_ajax_pages.push('/satellite/product/tablet-with-docking-station/');	
	        no_ajax_pages.push('/satellite/product/digital-sampler-workstation/');	
	        no_ajax_pages.push('/satellite/product/quad-core-smartphone/');	
	        no_ajax_pages.push('/satellite/product/stylish-earbud-headphones/');	
	        no_ajax_pages.push('/satellite/product/ultraslim-tablet/');	
	        no_ajax_pages.push('/satellite/product/smartphone-watch/');	
	        no_ajax_pages.push('/satellite/product/unibody-smartphone/');	
	        no_ajax_pages.push('/satellite/product/wireless-headphones/');	
	        no_ajax_pages.push('/satellite/product/47-cinema-3d-led-tv/');	
	        no_ajax_pages.push('/satellite/product/ultralight-laptop-computer/');	
	        no_ajax_pages.push('/satellite/product/unibody-time-capsule/');	
	        no_ajax_pages.push('/satellite/product/premium-gold-smartphone-2/');	
			no_ajax_pages.push('/satellite/shop/');
			no_ajax_pages.push('/satellite/cart/');
			no_ajax_pages.push('/satellite/checkout/');
			no_ajax_pages.push('/satellite/checkout/pay/');
			no_ajax_pages.push('/satellite/checkout/order-received/');
			no_ajax_pages.push('/satellite/my-account/');
			no_ajax_pages.push('/satellite/my-account/edit-address/');
			no_ajax_pages.push('/satellite/my-account/view-order/');
			no_ajax_pages.push('');
 
		no_ajax_pages.push('');
