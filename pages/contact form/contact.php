<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
   <style>
	    body{
	    	background-image: url(image/back.jpg);
	    	background-size:cover;
	    }
	    hr{
	    	background: white;	
	    }

		.contact-form{
			background:rgba(0,0,0, .6);
			color:white;
			margin-top: 100px;
			padding: 20px;
			box-shadow: 0px 0px 10px 3px grey;
		}
		/* Set the size of the div element that contains the map */
      #map {
        height: 300px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
   </style>


  </head>
<body>
	


<div class="container contact-form">
	<h1>Contact form</h1>
	<hr>

	<div class="row">
   
       <div class="col-md-6">
       	<address>Mirpur - 10 Circle, Mirpur - 10, Dhaka</address>
       	<p>Email:- info@mobishop.com</p>
       	<p>Phone:- 34563463434</p>
		
		<h3>Find us on Google Maps</h3>
    <!--The div element for the map -->
    <div id="map"></div>
    <script>
	// Initialize and add the map
	function initMap() {
	  // The location of Mirpur - 10
	  var Mirpur = {lat: 23.806817, lng: 90.368526};
	  // The map, centered at Mirpur - 10
	  var map = new google.maps.Map(
		  document.getElementById('map'), {zoom: 15, center: Mirpur});
	  // The marker, positioned at Mirpur - 10
	  var marker = new google.maps.Marker({position: Mirpur, map: map});
	}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB95uDQxErgJBX3whyG3tLeN80t8ZyYvFI&callback=initMap">
    </script>
		
	   </div>

       <div class="col-md-6">
       	
         <div class="form-group">
         	<label>Name</label>
         	<input type="text" class="form-control">
         </div>

         <div class="form-group">
         	<label>Email</label>
         	<input type="text" class="form-control">
         </div>

         <div class="form-group">
         	<label>Massage</label>
         	<textarea  class="form-control" rows="7"></textarea>
         </div>

         <div class="form-group">
         	<button class="btn btn-primary btn-block">Send</button>
         </div>

       </div>

    </div>

</div>




</body>
</html>
