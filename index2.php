<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
						*{
					margin: 0;
					padding: 0;
					box-sizing: border-box;
					font-family: 'Muli', sans-serif;

				}
				html{
					scroll-behavior: smooth;
				}

				.nav_style{
					background-color: black!important;
				}

				.nav_style a{
					color: white;
				}
				.main_header{
					height: 450px;
					width: 100%;
				}

				.rightside h1{
					font-size: 3rem;
				}
				.corona_anime img{
					animation: gocorona 3s linear infinite;
				}
				@keyframes gocorona{

					0%{ 
						transform: rotate(0);
					 }

					 100%{ 
						transform: rotate(360deg);
					 }
				}

				.leftside img{
					animation: heartbeat 5s linear infinite;
				}

				@keyframes heartbeat{
					0%{
						transform: scale(.75);
					}
					20%{
						transform: scale(1);
					}
					40%{
						transform: scale(.75);
					}
					60%{
						transform: scale(1);
					}
					80%{
						transform: scale(.75);
					}
					100%{
						transform: scale(1);
					}

				}


				.corona_update{
					margin: 0 0 45px 0;
				}
				.corona_update h3{
					color: #ff7675;
				}
				.corona_update h1{
					font-size: 2rem;
					text-align: center;
				}


				.sub_section{
					background-color: #fbfafd
				}

				.about_img{
					width: 100%;
					margin: auto;
				}

				@media(max-width: 768px){
					.main_header{
						height: 700px;
						text-align: center;
					}
					.main_header h1{
						text-align: center;
						padding: 0;
						width: 100%;
						font-size: 30px;

					}

					.count_style{
						display: inline!important;
					}
					.count_style p{
						text-align: center;
					}
				}

				.corona_count1{
					
					text-align: center;
					
					font-size: 28px;
					height: 120px;
					padding-right: 20px;


				}
				.corona_count2{
					
					
					text-align: center;
					
					font-size: 28px;
					height: 120px;

				}
				.corona_count3{
					
					
					text-align: center;
					
					font-size: 28px;
					height: 120px;

				}


	</style>
</head>
<body onload="fetch()">

	<nav class="navbar navbar-expand-lg nav_style p-3 sticky-top">
  <a class="navbar-brand pl-5" href="index.php">Track Corona Live</a>
  <a href="index.php"><button class="navbar-toggler text-center" type="button" data-toggle="collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #fbfafd;">Home
    <span class="navbar-toggler-icon"></span>
  </button></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      
    </ul>
    
  </div>
</nav>


<div class="container-fluid  pt-5 pb-5" id="sympid">
	<div class="section_header text-center mb-5 mt-4">
	
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5 corona_count1" >

				<?php
			$data = file_get_contents('https://api.covid19india.org/data.json');
			$coronalive = json_decode($data, true);

			$statecount =  count($coronalive['statewise']);
			echo $coronalive['statewise'][0]['confirmed'];

			

			?>
				<p style="color: #eb4242">Total Confirmed</p>
				
			</div>

			
			
			<div class="col-lg-4 col-md-4 col-12 mt-5 corona_count2" >
				<?php
			$data = file_get_contents('https://api.covid19india.org/data.json');
			$coronalive = json_decode($data, true);

			$statecount =  count($coronalive['statewise']);
			echo $coronalive['statewise'][0]['recovered'];

			

			?>
				<p style="color: #eb4242">Total Recovered</p>
			</div>
			
			<div class="col-lg-4 col-md-4 col-12 mt-5 corona_count3" >
				<?php
			$data = file_get_contents('https://api.covid19india.org/data.json');
			$coronalive = json_decode($data, true);

			$statecount =  count($coronalive['statewise']);
			echo $coronalive['statewise'][0]['deaths'];

			

			?>
				<p style="color: #eb4242">Total Deaths</p>
			</div>
			
		</div>
	</div>
	
</div>




<section class="corona_update container-fluid">

	<div class="mb-5 mt-5 pt-5">

		<h3 class="text-center"> State-Wise Covid-19 Live India Update</h3>
		
	</div>

	<div class="table-responsive">
		<table class="table  table-striped text-center" id="tbval" style="width: 100%; ">
			<tr>
				<th>State</th>
				<th>Total Confirmed</th>
				
				<th>Total Recovered</th>
				<th>Total Deaths</th>
				

			</tr>

			<?php
			$data = file_get_contents('https://api.covid19india.org/data.json');
			$coronalive = json_decode($data, true);

			$statecount =  count($coronalive['statewise']);
			//echo $coronalive['statewise'][1]['state'];

			$i=1;
			while($i< $statecount){

			?>

			<tr>
				<td><?php echo $coronalive['statewise'][$i]['state'] ?></td>
				<td><?php echo $coronalive['statewise'][$i]['confirmed'] ?></td>
				
				<td><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
				<td><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>
			</tr>

			

			<?php

			$i++;

		}

			?>
		</table>
		
	</div>

</section>













<script>
	
</script>



</body>
</html>