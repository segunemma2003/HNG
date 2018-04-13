<!DOCTYPE html>
<html>
<head>
	<title>My web</title>
	<style type="text/css">
	*{
		margin:0;
		padding:0;
		color:white;
	}
	header{
			background-color: black;
			height:50px;
			font-size:22px;

		}

	section{
			background-color:#56CCF2;
			padding:250px;
			
		}
		footer{
			background-color: black;
			height:50px;
			font-size:22px;
		}

	</style>
</head>
<body>
	<header>
		<h3 style="padding-top:10px;">
			programming
		</h3>


	</header>
	<section>
		<center>
		<h3 style="font-size:40px;">I<span>&#39;</span>M SEGUN</h3>
		<h4 style="font-size:20px;">I AM OBSESS WITH PROGRAMMING</h4>
		<h5 style="font-size:15px;"> <?php echo date("D F  Y ") ?> </h5>
		</center>
	</section>
	<footer>
		<div style="float:right;">
			<?php
			echo date("h:i A");
			?>
		</div>
	</footer>
</body>
</html>