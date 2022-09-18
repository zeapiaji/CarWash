<!-- jquery -->
<script data-cfasync="false"
src="{{asset('member/assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script> <!-- jquery library js -->
<script type="text/javascript" src="{{asset('member/assets/js/bootstrap.min.js')}}"></script> <!-- bootstrap js -->
<script type="text/javascript" src="{{asset('member/assets/js/owl.carousel.js')}}"></script>
<!-- owl carousel js -->
<script type="text/javascript" src="{{asset('member/assets/js/jquery.ajaxchimp.js')}}"></script>
<!-- mail chimp js -->
<script type="text/javascript" src="{{asset('member/assets/js/smooth-scroll.js')}}"></script>
<!-- smooth scroll js -->
<script type="text/javascript" src="{{asset('member/assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- magnify popup js -->
<script type="text/javascript" src="{{asset('member/assets/js/waypoints.min.js')}}"></script>
<!-- facts count js required for jquery.counterup.js file -->
<script type="text/javascript" src="{{asset('member/assets/js/jquery.counterup.js')}}"></script>
<!-- facts count js-->
<script type="text/javascript" src="{{asset('member/assets/js/menumaker.js"></')}}"></script>
<!-- menu js-->
<script type="text/javascript" src="{{asset('member/assets/js/jquery.appear.js')}}"></script>
<!-- progress bar js -->
<script type="text/javascript" src="{{asset('member/assets/js/jquery.countdown.js')}}"></script>
<!-- event countdown js -->
<script type="text/javascript" src="{{asset('member/assets/js/price-slider.js')}}"></script>
<!-- price slider / filter js-->
<script type="text/javascript" src="{{asset('member/assets/js/bootstrap-datepicker.js')}}"></script>
<!-- bootstrap datepicker js-->
<script type="text/javascript" src="{{asset('member/assets/js/jquery.elevatezoom.js')}}"></script>
<!-- image zoom js-->
<script type="text/javascript" src="{{asset('member/assets/js/theme.js')}}"></script> <!-- custom js -->
<script>
jQuery(function ($) {
    // Asynchronously Load the map API
    var script = document.createElement('script');
    script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&amp;callback=initialize";
    document.body.appendChild(script);
});

function initialize() {
    var myLatLng = {
        lat: 25.3500,
        lng: 74.6333
    }; // Insert Your Latitude and Longitude For Footer Wiget Map
    var mapOptions = {
        center: myLatLng,
        zoom: 15,
        disableDefaultUI: true,
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: [{
            "featureType": "landscape",
            "stylers": [{
                "saturation": -100
            }, {
                "lightness": 65
            }, {
                "visibility": "on"
            }]
        }, {
            "featureType": "poi",
            "stylers": [{
                "saturation": -100
            }, {
                "lightness": 51
            }, {
                "visibility": "simplified"
            }]
        }, {
            "featureType": "road.highway",
            "stylers": [{
                "saturation": -100
            }, {
                "visibility": "simplified"
            }]
        }, {
            "featureType": "road.arterial",
            "stylers": [{
                "saturation": -100
            }, {
                "lightness": 30
            }, {
                "visibility": "on"
            }]
        }, {
            "featureType": "road.local",
            "stylers": [{
                "saturation": -100
            }, {
                "lightness": 40
            }, {
                "visibility": "on"
            }]
        }, {
            "featureType": "transit",
            "stylers": [{
                "saturation": -100
            }, {
                "visibility": "simplified"
            }]
        }, {
            "featureType": "administrative.province",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "water",
            "elementType": "labels",
            "stylers": [{
                "visibility": "on"
            }, {
                "lightness": -25
            }, {
                "saturation": -100
            }]
        }, {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{
                "hue": "#ffff00"
            }, {
                "lightness": -25
            }, {
                "saturation": -97
            }]
        }]
    }
    // For Footer Widget Map
    var map = new google.maps.Map(document.getElementById("location"), mapOptions);
    var image = "{{URL::asset('member/assets/images/icons/map.png')}}";
    var beachMarker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image
    });
}

</script>
<!-- end jquery -->
