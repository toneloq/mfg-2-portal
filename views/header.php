<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rhino Equipment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript"> function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}</script>
  <style> 
	.logoHolder{
  		float:left;
  	} 
  	.logo{
  		max-height:60px;
  	}
	.banner img{
		max-width: 100%;
    	height: auto;
   		width: auto\9; /* ie8 */
	} 
	/* Style the tab */
	div.tab {
	    overflow: hidden;
	    border: 1px solid #f2f2f2;
	    background-image: -webkit-gradient(linear,50% 0,50% 100%,color-stop(0,#f7a71b),color-stop(100%,#ffbc46)); 
	    background-image: -moz-linear-gradient(#f7a71b,#ffbc46); 
	    background-image: -webkit-linear-gradient(#f7a71b,#ffbc46); 
	    background-image: linear-gradient(#f7a71b,#ffbc46);
	}
	/* Style the buttons inside the tab */
	div.tab button {
	    background-image: -webkit-gradient(linear,50% 0,50% 100%,color-stop(0,#f7a71b),color-stop(100%,#ffbc46)); 
	    background-image: -moz-linear-gradient(#f7a71b,#ffbc46); 
	    background-image: -webkit-linear-gradient(#f7a71b,#ffbc46); 
	    background-image: linear-gradient(#f7a71b,#ffbc46);
	    float: left;
	    border: none;
	    outline: none;
	    cursor: pointer;
	    padding: 14px 24px;
	    transition: 0.3s;
	}
	/* Change background color of buttons on hover */
	div.tab button:hover {
	    background-color: #f2f2f2;
	}
	/* Create an active/current tablink class */
	div.tab button.active {
		background-color: #f2f2f2;
	    
	}
	/* Style the tab content */
	.tabcontent {
	    display: none;
	    padding: 6px 12px;
	    border: 1px solid #f2f2f2;
	    border-top: none;
	    background-color: #f2f2f2;
	} 
	 .logoHolder{
	 	background-image: url("https://mfgqtc--c.na40.content.force.com/servlet/servlet.ImageServer?id=01546000000NZJm&oid=00D460000000MPU&lastMod=1495820403000");
		width: 115px;
	    height: 50px;
	    background-size: 96px 48px;
	    background-color: #f2f2f2;
	    background-repeat: no-repeat;
	    background-position: 10px 0px;
	}
	    </style>
</head>
<body>

<div class="headerHolder">

	<div class="logoHolder">
		<a class="logo" href="https://mfg-20-portal.herokuapp.com/index.html"></a>
	</div>

	<div class="tab">
	  <button class="tablinks" onclick="openCity(event, 'Products')">Products</button>
	  <button class="tablinks" onclick="openCity(event, 'Parts')">Parts</button>
	  <button class="tablinks" onclick="openCity(event, 'servSupport')">Service & Support</button>
	  <button class="tablinks" onclick="openCity(event, 'BuildQuote')">Build a Quote</button>
	</div>

<div id="Products" class="tabcontent">
  <h3>Products</h3>
  <p>Products page here</p>
</div>

<div id="Parts" class="tabcontent">
  <h3>Parts</h3>
  <p>Parts page here</p> 
</div>

<div id="servSupport" class="tabcontent">
  <h3>Service & Support</h3>
  <p>Service & Support page here</p>
</div>

<div id="BuildQuote" class="tabcontent">
  <h3>Build a Quote</h3>
  <p>Build a Quote page here</p>
</div>

</div>
