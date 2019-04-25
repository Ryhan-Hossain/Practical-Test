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
       	<form action="" method="post">
         <div class="form-group">
         	<label>Name</label>
         	<input type="text" name="per_name" id="name" required="required" placeholder="Sender Name" class="form-control">
         </div>

         <div class="form-group">
         	<label>Email</label>
         	<input type="email" name="per_email" id="email" required="required" placeholder="Sender Email Address" class="form-control">
         </div>

         <div class="form-group">
         	<label>Massage</label>
         	<textarea type="text" name="per_msg" id="message" required="required" placeholder="Message" class="form-control" rows="7"></textarea>
         </div>

         <div class="form-group">
         	<input type="submit" value="Send" name="submit" class="btn btn-primary btn-block">
         </div>
       </form>

       </div>

    </div>

</div>

  <?php
    if(isset($_POST["submit"])){
    $hostname='localhost';
    $username='root';
    $password='';

    try {
    $dbh = new PDO("mysql:host=$hostname;dbname=test",$username,$password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
    $sql = "INSERT INTO message (name, email, message)
    VALUES ('".$_POST["per_name"]."','".$_POST["per_email"]."','".$_POST["per_msg"]."')";
    if ($dbh->query($sql)) {
    echo "<script type= 'text/javascript'>alert('Message Sent Successfully');</script>";
    }
    else{
    echo "<script type= 'text/javascript'>alert('Message sent unsuccessful.');</script>";
    }

    $dbh = null;
    }
    catch(PDOException $e)
    {
    echo $e->getMessage();
    }

    }
  ?>

</body>
</html>
