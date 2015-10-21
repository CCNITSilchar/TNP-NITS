<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta name="description" content="Academic life @ NIT Silchar">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Academic Life - TNP | NIT Silchar</title>

<!--links and scripts-->
<link rel="icon" type="image/png" href="includes/images/nits-logo.png">

<link rel="stylesheet" href="includes/css/bootstrap.min.css">
<script src="includes/js/jquery.min.js"></script>
<script src="includes/js/bootstrap.min.js"></script>
  <script src="includes/js/dropdown.js"></script>
<link rel="stylesheet" type="text/css" href="includes/css/style.css" />
<!--page styles-->
<style>
	div.intro{
		width:100%;
	}	
	p.intro{
		font-family:Rosario;
		font-size:1.2em;
		text-align:justify;
		margin-left:1em;
		line-height:2em;
	}
	.thumbnail{
		width:50%;
		max-height:220px;
		max-width:280px;
		float:right;
		margin:0.1em 0.1em 0.5em 1em;
	}
	.programme{
		text-align:justify;
		background:#efefef;
		color:#ffffff;
		padding:1em;
		margin:0em 2em 1.5em 2em;
		border-radius:25px;
		min-height:280px;
		position:relative;
		/*-webkit-transition-duration:0.3s;
		-moz-transition-duration:0.3s;
		-o-transition-duration:0.3s;
		-ms-transition-duration:0.3s;
		transition-duration:0.3s;*/
		
		/*-webkit-transition-delay:0.2s;
		-moz-transition-delay:0.2s;
		-o-transition-delay:0.2s;
		-ms-transition-delay:0.2s;
		transition-delay:0.2s;*/
	}
	/*.programme:hover{
		-webkit-transform:scale(1.01);
		-moz-transform:scale(1.01);
		-o-transform:scale(1.01);
		-ms-transform:scale(1.01);
		transform:scale(1.01);*/
	}
	.btech{
		padding-bottom:0.5em;
	}
	.programme ul li{
		list-style:none;
		margin:0.5em;
		font-family:DroidSans;
		color:#555555;
		line-height:2em;
	}
	.row-head{
		font-family:Jura;
		font-size:1.33em;
		margin-right:0.5em;
		color:#000000;
	}
	.programme h4{
		background: -moz-linear-gradient(left, rgba(10,10,10,1) 0%, rgba(11,11,11,1) 1%, rgba(28,28,28,0.71) 30%, rgba(250,250,250,0) 100%);
		background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(10,10,10,1)), color-stop(1%,rgba(11,11,11,1)), color-stop(30%,rgba(28,28,28,0.71)), color-stop(100%,rgba(250,250,250,0)));
		background: -webkit-linear-gradient(left, rgba(10,10,10,1) 0%,rgba(11,11,11,1) 1%,rgba(28,28,28,0.71) 30%,rgba(250,250,250,0) 100%);
		background: -o-linear-gradient(left, rgba(10,10,10,1) 0%,rgba(11,11,11,1) 1%,rgba(28,28,28,0.71) 30%,rgba(250,250,250,0) 100%);
		background: -ms-linear-gradient(left, rgba(10,10,10,1) 0%,rgba(11,11,11,1) 1%,rgba(28,28,28,0.71) 30%,rgba(250,250,250,0) 100%);
		background: linear-gradient(to right, rgba(10,10,10,1) 0%,rgba(11,11,11,1) 1%,rgba(28,28,28,0.71) 30%,rgba(250,250,250,0) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0a0a0a', endColorstr='#00fafafa',GradientType=1 );
		font-size:1.38em;
		display:block;
		padding:0.7em;
		position:relative;
		left: -0.8em;
		font-family:Jura;
		border-top-right-radius:10px;
		border-bottom-right-radius:10px;
	}
	@media only screen and (max-width:768px)
	{
	.programme{
		padding:1em 0em;
		margin:1.5em 0em;
	}
	.btech{
		padding-bottom:0.5em;
	}
	.programme ul li{
		margin:0.5em 0.32em;
	}
	.programme ul{
		padding-left:0;
	}
	.programme h4{
		left:0;
				border-top-right-radius:0px;
		border-bottom-right-radius:0px;
	}
	}

</style>
<!--end of page styles-->
</head>
<body>

	<hr class="header-sep" style="padding-top:0; margin-top:0;">
	<?php
	include("header.php");
	?>
	<hr class="header-sep">
	
			<nav class="navbar navbar-inverse" role="navigation" style="clear:both;">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		  </button>
		  <!-- <a class="navbar-brand" href="#">Home</a> -->
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav">
			<li><a href="index">Home</a></li>
			<li class="dropdown" id="placement">
			  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Placement<span class="caret"></span></a>
			  <ul class="dropdown-menu placementsub">
				<li class="submenu"> <a href="placement-procedure">Procedure</a></li>
				<!-- <li class="submenu"><a href="placement-rules">Rules and Regulations</a></li> -->
				<li class="submenu"><a href="esteemed-recruiters">Recruiters</a></li>
				<li class="submenu"><a href="includes/files/jnf_nits.docx">Job Notification Form</a></li>
			  </ul>
			</li>
			<li class="dropdown" id="training">
			  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Training<span class="caret"></span></a>
			  <ul class="dropdown-menu trainingsub">
				<li class="submenu"> <a href="internship-policies">Internship Policies</a></li>
			  </ul>
			</li>
			<li class="dropdown active" id="academic">
			  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Academics<span class="caret"></span></a>
			  <ul class="dropdown-menu academicsub">
				<li class="submenu"> <a href="academic-life">Academic Life</a></li>
				<li class="submenu"><a href="student-profile">Student Profile</a></li>
			  </ul>
			</li>			
			<li><a href="why-nits">Why recruit us</a></li>
			<li><a href="team"> Team </a> </li>
			<li><a href="facilities"> Facilities </a> </li>
			<li><a href="reach-us"> Reach us </a> </li>
		  </ul>
		 </div>
		</div>
	</nav>
	
	
	
	
<!-- main content of body here-->
<div class="col-md-12" role=main>
	<h3 style="margin-top:0;"> Academic Life</h3>
	<div>
		<div class="intro">
		<p class="intro">
		<img src="includes/images/academic_life.jpg" class="thumbnail">
			NIT Silchar has always stood for the best in education and pedagogy. We design our courses to promote deep understanding and learning of concepts and our curriculum is constantly evolving, keeping in sync with global research. The following are some of the key components of curriculum at our campus. The programme structures for all our disciplines have been designed to challenge the brightest minds. Each academic year is divided into 2 semesters, with the following outline:
		</p>
		</div>
	</div>
	<hr style="clear:right; border:0;">
	<div class="programme-container">
	<h2>Undergraduate Programmes</h2><hr class="stylish-rule">
		<div class="programme btech" style="margin-bottom:30px;">
			<h4>Bachelor of Technology (B.Tech)</h4>
			<ul>
				<li><span class="row-head">Admission through: </span> JEE Main</li>
				<li><span class="row-head">Duration: </span> 4 Years</li>
				<li><span class="row-head">Stream: </span> Civil, Computer Science and Engineering, Electronics and Communication, Electrical, Electronics and Instrumentation, Mechanical</li>
				<li><span class="row-head">Focus: </span> Providing a basic yet strong foothold on in various aspects of engineering.</li>
				<li><span class="row-head">Industrial Training: </span> 3 months</li>
				<li><span class="row-head">Final Year Project: </span> 1 Year</li>
			</ul>
		</div>
	<h2>Graduate Programmes</h2><hr class="stylish-rule">
		<div class="programme">
			<h4>Master of Technology (M.Tech)</h4>
			<ul>
				<li><span class="row-head">Admission through: </span> GATE + Interview</li>
				<li><span class="row-head">Duration: </span> 2 Years</li>
				<li><span class="row-head">Focus: </span> Making students develop a comprehensive understanding of a particular field of study and tackle practical problems of design and development through course work and active research.</li>
				<li><span class="row-head">Assistantship: </span> Affiliated to course instructors or research projects.</li>
				<li><span class="row-head">M.Tech Project: </span> 1 Year</li>
			</ul>
		</div>
		<div class="programme">
			<h4>Master of Science (M.Sc)</h4>
			<ul>
				<li><span class="row-head" class="row-head">Admission through:</span> JAM</li>
				<li><span class="row-head">Duration:</span> 2 Years</li>
				<li><span class="row-head">Focus:</span> Developing a strong theoretical base and a good level of expertise in research supplemented by both course-wise and project.</li>
				<li><span class="row-head">M.Sc Project:</span> 1 Year</li>
			</ul>
		</div>
		<div class="programme">
			<h4>Masters of Business Administration (MBA)</h4>
			<ul>
				<li><span class="row-head" class="row-head">Admission through:</span> CAT/MAT/CMAT + GD + PI</li>
				<li><span class="row-head">Duration:</span> 2 Years</li>
				<li><span class="row-head">Focus:</span> Marketing, Finance, Human Resource.</li>
				<li><span class="row-head">MBA Project:</span> 1 Year</li>
			</ul>
		</div>
		<div class="programme phd">
			<h4>Doctoral Program (PhD)</h4>
			<ul>
				<li><span class="row-head" class="row-head">Admission through:</span> Entrance Test + Interview</li>
				<li><span class="row-head">Focus:</span> Extensive training in research that is wholly relevant to the advances being made in science and technology. All PhD students are expected to publish results related to their thesis work in International Journals and Conferences.</li>
			</ul>
		</div>
	</div>
</div><!--end of content-->
	
	<?php
	include("footer.php");
	?>
</body>
</html>
<!-- SITE DEVELOPED BY:-
		Kunal Chaudhary
		B.Tech, Computer Science and Engineering
		Class of 2018, NIT Silchar
		facebook: http://www.facebook.com/chaudhary.kc.kunal/
		
		Om Satyam Swarnkar
		B.Tech, Computer Science and Engineering
		Class of 2018, NIT Silchar
		facebook: https://www.facebook.com/profile.php?id=100006054881490
-->