<!DOCTYPE html>
<html>
<head>
	<title>Track Corona Live</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3087397915686332",
    enable_page_level_ads: true
  });
</script>
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
					height: 100px;
				}

				.nav_style a.navbar-brand{
					color: white;
					padding-left: 100px;
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

				.table th{
					border-bottom: 2px solid black;

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
				.footer{
					background-color: black;
					width: 100%;
					height: 300px;
				}
				.f1{

					width: 100%;

				}

				.advertisement{
					width: 75%;
					margin: auto;
					background-color: #fbfafd;
					height: 200px;
					margin-bottom: 20px;
					margin-top: 20px;
				}
	</style>
</head>
<body onload="fetch()">

	<nav class="navbar navbar-expand-lg nav_style p-3 sticky-top">
  <a class="navbar-brand " href="#">Track Corona Live</a>

  <a href="index2.php"><button class="navbar-toggler text-center" type="button" data-toggle="collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #fbfafd;">India Update
    <span class="navbar-toggler-icon"></span>
  </button></a>
  <button class="navbar-toggler bg-light text-center" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Menu
    <span class="navbar-toggler-icon"></span>
  </button>

 



  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#helpid">Helpful links</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index2.php">India Corona Live</a>
      </li>
      
    </ul>
    
  </div>
</nav>


<div class="main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="image1.jpg" width="300" height="300">
			</div>
			
		</div>

		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Let's stay safe and fight together with cor<span class="corona_anime"> <img src="corona2.jpg" width="50" height="50"></span>na virus</h1>
			</div>
			
		</div>
		
	</div>
</div>


<div class="advertisement">
	
</div>


<div class="container-fluid  pt-5 pb-5" id="">
	<div class="section_header text-center mb-5 mt-4">
	
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5 corona_count1" >

				<p id="tcnfrm"></p>
				<p style="color: #eb4242" >Total Confirmed</p>
				
			</div>

			
			
			<div class="col-lg-4 col-md-4 col-12 mt-5 corona_count2" >
				<p id="trcvrd"></p>
				<p style="color: #eb4242">Total Recovered</p>
			</div>
			
			<div class="col-lg-4 col-md-4 col-12 mt-5 corona_count3" >
				<p id="tdths"></p>
				<p style="color: #eb4242">Total Deaths</p>
			</div>
			
		</div>
	</div>
	
</div>

<section class="corona_update container-fluid">

	<div class="mb-5 mt-5 pt-5">

		<h3 class="text-center">World-Wide Covid-19 updates</h3>
		
	</div>

	<div class="table-responsive">
		<table class="table  table-striped text-center" id="tbval" style="width: 100%;">
			<tr>
				<th>Country</th>
				<th>Total Confirmed</th>
				<th>Total Recovered</th>
				<th>Total Deaths</th>
				

			</tr>
		</table>
		
	</div>

</section>

<div class="advertisement">
	
</div>

<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> About COVID-19</h1>
		
	</div>

	<div class="row pt-5 ">

		<div class="col-lg-5 col-md-6 col-12 about_img">
			<img src="coronavirus.jpg" class="img-fluid">
		</div>

		<div class="col-lg-6 col-md-6 col-12 mt-5">

			<h1 class="text-center mb-3">What is COVID-19 (Corona Virus)</h1>
			<p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.

Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>

			<p>The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. </p>
			
		</div>
		
	</div>
	
</div>


<div class="advertisement">
	
</div>


<div class="container-fluid  pt-5 pb-5" id="sympid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Symptoms</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="cough2.jpg" class="img-fluid" width="150" height="150">
					<figcaption>Cough</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="runny_nose.jpg" class="img-fluid" width="150" height="150">
					<figcaption>Runny Nose</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="fever.jpg" class="img-fluid" width="150" height="150">
					<figcaption>Fever</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="cold3.jpg" class="img-fluid" width="150" height="150">
					<figcaption>Cold</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="tiredness.jpg" class="img-fluid" width="150" height="150">
					<figcaption>Tiredness</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5" >
				<figure class="text-center">
					<img src="breathing.jpg" class="img-fluid" width="150" height="150">
					<figcaption>Breathing</figcaption>
				</figure>
			</div>
			
		</div>
	</div>
	
</div>


<div class="advertisement">
	
</div>


<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Preventions Againts Corona Virus</h1>
	</div>

	<div class="container">

		<div class="row">

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
						<img src="wash_hands.jpg" class="img-fluid" width="90" height="90">
						
					</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Use warm water and soap and rub your hands for at least 20 seconds. Work the lather to your wrists, between your fingers, and under your fingernails.</p>
					</div>
				</div>
					 
				</div>
				<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
						<img src="face.jpg" class="img-fluid" width="90" height="90">
						
					</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>SARS-CoV-2 can live on hard surfaces for up to 72 hours. You can get the virus on your hands if you touch a surface like a doorknob, gas pump handle, or your cell phone.</p>
					</div>
					 
				</div>
				
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
						<img src="shaking_hands.jpg" class="img-fluid" width="90" height="90">
						
					</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p> Avoid touching other people. Skin to skin contact can pass SARS-CoV-2 from one person to another.</p>
					</div>
					 
				</div>
				
			</div>

			<div class="row">

				<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
						<img src="mask.jpg" class="img-fluid" width="90" height="90">
						
					</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Cover your nose and mouth wit a disposable tissue or a MASK.</p>
					</div>
					 
				</div>
				
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
						<img src="news.jpg" class="img-fluid" width="90" height="90">
						
					</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Stay informed by watching news and follow the recomended practices</p>
					</div>
					 
				</div>
				
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
						<img src="isolated.jpg" class="img-fluid" width="90" height="90">
						
					</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Social distancing means staying home and working remotely when possible. If you must go out for necessities, keep a distance of 6 feet from other people. You can transmit the virus by speaking to someone in close contact to you.</p>
					</div>
					 
				</div>
				
			</div>
				
			</div>

			
		</div>
		
	</div>


</div>


<div class="container-fluid  pt-5 pb-5" id="helpid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Helpful links</h1>
	</div>

	<div class="container">

		<div class="row">

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
								<a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019" target="_blank">
						<img src="who.jpg" class="img-fluid" width="90" height="90">
						<figcaption>World Health Organisation</figcaption>
					</a>
					</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>
								WHO works worldwide to promote health, keep the world safe, and serve the vulnerable. Their goal is to ensure that a billion more people have universal health coverage, to protect a billion more people from health emergencies, and provide a further billion people with better health and well-being.</p>
					</div>
				</div>
					 
				</div>
				<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
								<a href="https://play.google.com/store/apps/details?id=nic.goi.aarogyasetu&hl=en_IN" target="_blank">
						<img src="aarogya.jpg" class="img-fluid" width="90" height="90">
						<figcaption>Aarogya Setu App</figcaption>
						</a>
					</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>This app is designed to help control the spread of coronavirus and make its information accessible to the common people. This special app also helps in finding out corona positive people present nearby.</p>
						<p>Click the Image to download the app</p>
					</div>
					 
				</div>
				
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
								<a href="https://www.pmcares.gov.in/en/" target="_blank">
						<img src="pmcares.jpg" class="img-fluid" width="100" height="200">
						<figcaption>PM Cares Fund</figcaption>
					</a>
					</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p> Keeping in mind the need for having a dedicated national fund with the primary objective of dealing with any kind of emergency or distress situation, like posed by the COVID-19 pandemic, and to provide relief to the affected, a public charitable trust under the name of ‘Prime Minister’s Citizen Assistance and Relief in Emergency Situations Fund’ (PM CARES Fund)’ has been set up.</p>
					</div>
					 
				</div>
				
			</div>

			

			
		</div>
		
	</div>


</div>


<footer>

	<div class="footer">
		<div class="row f1">
			<div class="col-lg-6 col-md-6 col-12">
				<p style="color: white; text-align: center; padding-top: 30px; font-size: 18px;">Designed & developed by:</p>
				<p style="color: white; text-align: center; padding-top: 1px; font-size: 18px;">Keshav Kejriwal</p>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<p style="color: white; text-align: center; padding-top: 30px; font-size: 18px;">Source : </p>
				<p style="color: white; text-align: center; padding-top: 1px; font-size: 18px; "><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019">WHO</a> , <a href="https://covid19api.com/">Covid-19 Api</a> & <a href="https://www.pmcares.gov.in/en/"> Cares Fund</a></p>
			</div>
			
		</div>
		
	</div>
	
</footer>

<script>
	function fetch(){
		$.get("https://api.covid19api.com/summary",

				function(data){
					//console.log(data['Countries'].length);
					var tbval= document.getElementById('tbval');

					for(var i=1; i<(data['Countries'].length); i++){
						var x = tbval.insertRow();
						x.insertCell(0);
						tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
						tbval.rows[i].cells[0].style.background = '#fbfafd';
						


						x.insertCell(1);
						tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
						tbval.rows[i].cells[1].style.background = '#FFFFFF';


						x.insertCell(2);
						tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
						tbval.rows[i].cells[2].style.background = '#fbfafd';

						x.insertCell(3);
						tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
						tbval.rows[i].cells[3].style.background = '#FFFFFF';

						

					}

					var tcnfrm = document.getElementById('tcnfrm');
					tcnfrm.innerHTML = data['Global']['TotalConfirmed'];
					var trcvrd = document.getElementById('trcvrd');
					trcvrd.innerHTML = data['Global']['TotalRecovered'];
					var tdths = document.getElementById('tdths');
					tdths.innerHTML = data['Global']['TotalDeaths'];
				}
			);
	}
</script>



</body>
</html>