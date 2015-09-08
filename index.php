<!DOCTYPE html>
<html>
<head>
	<title>Mark's Résume</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
   	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script type="text/JavaScript" src="functions/functions.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<body onload = "home()">
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
      		<p class="navbar-brand">Mark's Resume</p>
    	</div>
    	
		<ul class="nav nav-tabs">
		  	<li role="presentation"><a href="#Home" onclick = 'home()'><span class="glyphicon glyphicon-leaf"></span> Home</a></li>
  			<li role="presentation"><a href="#School" onclick = 'school()'><span class="glyphicon glyphicon-pencil"></span> School</a></li>
 		 	<li role="presentation"><a href="#Work" onclick = 'work()'><span class="glyphicon glyphicon-briefcase"></span> Work</a></li>
 		 	<li role="presentation"><a href="#Experience" onclick = 'experience()'><span class="glyphicon glyphicon-time"></span> Experience</a></li>
 		 	<li role="presentation"><a href="#Contact" onclick = 'contact()'><span class="glyphicon glyphicon-earphone"> Contact</a></li>
  			<li role="presentation"><a href="#Accomplishments" onclick = 'accomplish()'><span class="glyphicon glyphicon-star-empty"></span> Accomplishments</a></li>
			<div class = "help"><button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal">Help</button></div>
		</ul>
		
	</div>
	
</nav>
<img id = "pic" src="https://scontent-dfw1-1.xx.fbcdn.net/hphotos-xpt1/v/t1.0-9/10687023_922010277820193_7655298647942050395_n.jpg?oh=35421e8e544d4e3db0ccec43bd8e3612&oe=55F9F190" class="img-rounded" alt="me" width="304" height="236">
	<div id = "info"></div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Help Section</h4>
        </div>
        <div class="modal-body">
          <p>To navigate through my resume click on any of the menu items. Each Item has a 
          label representing where it will take you. If you click on a link in any of the 
          sections and you would like to return to where you previously were just click on
           the menu-bar tab that matches the area you were previously in.<br>If you need anymore assistance
          contact the administrator, his contact information is in the contact section. </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</body>

</html>