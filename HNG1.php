<!DOCTYPE html>
<html>
	<head>
		<style>
		.container {
			    position: relative;
			    text-align: center;
			    color: white;
			}
		.hng {
		    position: absolute;
		    top: 1em;
		    left: 20em;
		    font-size: 5em;
		}
		.stage1 {
		    position: absolute;
		    top: 6em; 
		    left: 22em;
		    font-size: 5em;
		}
		.time {
		    position: absolute;
		    top: 11em;
		    left: 23em;
		    font-size: 5em;
		}
		</style>
	</head>
	<body>

<div class="container">
  <img src="car.jpg" style="width:100%; height: 50%">
  <div class="hng">
  		<h1>HNG Internship</h1>
  </div>
  <div class="stage1">
  		<h2>Stage 1 Project</h2>
  	</div>
  <div class="time">
  		<h4>Time:
		<?php 
			$my= date("h:i:sa");
			echo $my; 
			?>
  		</h4>

  		</div>
</div>
</body>
</html> 