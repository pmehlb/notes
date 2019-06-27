<!DOCTYPE html>
<html lang="en">
<head>
	<title>Notes Project</title>
	
	<link href="https://fonts.googleapis.com/css?family=Catamaran:800" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet">
	<link href="./css/bootstrap.css" rel="stylesheet">
	<link href="./css/custom.css?<?php echo rand(); ?>" rel="stylesheet">
	
	<script src="./js/cookie.js"></script>
	<script src="./js/jquery.js"></script>
	<script src="./js/bootstrap.js"></script>
</head>
<body>
    <!-- intro modal -->
<div class="modal fade" id="introModal" tabindex="-1" role="dialog" aria-labelledby="introModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="introModalLabel">Getting started...</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        To get started, press the "+" button in the bottom right. Stuff's pretty self-explanatory, so try it out!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Start</button>
      </div>
    </div>
  </div>
</div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
		<a class="navbar-brand" href="#">Navbar</a> <button class="navbar-toggler" data-target="#nav" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#"><i class="fas fa-clipboard"></i> Notes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-question-circle"></i> Info</a>
				</li>
			</ul>
			
		</div>
	</nav>
	<div class="container-fluid bg-light" id="home">
		<div id="display" class="card-columns m-3">
		    
	    </div>
	</div>
	<button id="addButton"><i class="fas fa-plus fa-3x" style="padding: 0px 3px;"></i></button>
	<script src="js/notes.js"></script>
</body>
</html>