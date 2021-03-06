<!DOCTYPE HTML>
<html>
<head>
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.png">
	<title>Optimal Traffic Enforcement</title>
	<meta name="format-detection" content="telephone=no">
	<meta name="format-detection" content="address=no">
	<link rel="stylesheet" href="css/style.css">
	<!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/respond.js"></script>
		<![endif]-->
	<style type="text/css">
		.initial_char { text-shadow: 0px 4px 3px rgba(255,255,255,0.4),
0px 8px 13px rgba(255,255,255,0.1),
0px 18px 23px rgba(255,255,255,0.1);
font-weight: bold;}
		.header_text {color: rgba(255,255,255,0.6);text-shadow: 2px 2px 3px rgba(255,255,255,0.1);}
	</style>


	<style type="text/css">

	#search {
	  /* Put this on top of the blurred layer */
	  position: relative;
	  z-index: 100;
	  padding: 20px;
	  background: rgb(100,100,100); /* for IE */
	  background: rgba(100,100,100,0.35);
	}

	</style>

	</head>
	<body class="no-js">
		<div class="main">
			<header>

				<div class="wrap">
					<img src="images/mario.png" style="position:absolute; left:50px;top:310px;width:300px" alt="" class="header-img">
					<div id="bg">
					  <div id="search-container">
					    <div id="search-bg"></div>
					    <div id="search">

					      <div class="header-wrapper" style="padding:0; max-width: 1000px;">
					      	<h1 class="header_text" style="margin-bottom: 10px;font-weight: bold;"><span class="initial_char">L</span><span style="">everaging</span> <span class="initial_char">H</span><span style="">uman</span> <span class="initial_char">K</span><span>nowledge in </span> <span class="initial_char">T</span><span>abular</span> <span class="initial_char">R</span><span>einforcement</span> <span class="initial_char">L</span><span>earning</span></h1>
					      	<p style="color:#ccc;text-shadow: 0px 0px 0px black, 1em 1em 1em black;">Reinforcement Learning (RL) can be extremely effective
					      		in solving complex, real-world problems.
					      		However, injecting human knowledge into an RL
					      		agent may require extensive effort on the human designer’s
					      		part. To date, human factors are generally
					      		not considered in the development and evaluation
					      		of possible approaches. In this paper, we propose
					      		and evaluate a novel method, based on human psychology
					      		literature, which we show to be both effective
					      		and efficient, for both expert and non-expert
					      		designers, in injecting human knowledge for speeding
					      		up tabular RL</p>
					      </div>
					    </div>
					      	<div class="buttons-wrapper">
					      		<a href="./source/ijcai17.pdf" target="_blank" class="button">View the Article</a>
					      		<a href="#source_code" class="button button-stripe">Source code</a>
					      	</div>
					  </div>
					</div>

					
				</div>
			</header>

			<div class="comments clearfix" style="padding:20px;">
				<div class="wrap">
					<div class="tab">
						<div class="box visible" style="padding:20px;">
							<h2>Better utilizing human knowledge in speeding up reinforcement learning</h2>
						</div>
					</div>
				</div>
			</div>


			<div class="simple clearfix">
				<div class="wrap">
					<div class="simple-content" style="width:500px;">
						<h3>The SASS Approach</h3>
						According to constructivism literature, and specifically personal
						construct psychology [Kelly, 1955], while designing
						and testing an RL agent, the human designer himself learns
						the traits of the domain at hand by identifying patterns and
						domain-specific characteristics. To accommodate both prior
						knowledge and learned insights (which may change over
						time), it is necessary to allow the designer to easily explore
						and refine different similarity hypotheses.
					</div>
					<div class="simple-img">
						<img src="images/sass1.png" style="max-width:720px; padding-top: 45px;">
						<img src="images/sass2.png" style="max-width:900px; width:900px; padding-left: 90px; padding-top: 45px;">
					</div>
				</div>
			</div>


			<div class="simple clearfix">
				<div class="wrap">
					<div class="simple-content" style="width:500px;">
						<h3>Non-Expert Study</h3>
						Prior to the experiment, all participants participated in an
						hour-long tutorial reminding them of the basics of Q-learning
						and explaining the Simple Robotic Soccer task’s specification.
						Participants were given two python codes: First, an
						implemented QA agent in which participants had to design
						and implement a state-space abstraction. Specifically, the participants
						were requested to implement a single function that
						translates the na¨ıve representation to their own state-space
						representation. Second, participants were given a QS agent
						in which they had to implement a similarity function.
					</div>
					<div class="simple-img">
						<img src="images/graphs/SRS.png" style="max-width:720px; width:400px;padding-top: 45px;">
						<img src="images/graphs/Chase.png" style="max-width:720px; width:400px;padding-top: 45px;">
						<img src="images/graphs/Mario.png" style="max-width:720px; width:400px;padding-top: 45px;">
					</div>
				</div>
			</div>


			<div class="spanning">

				<div class="video-title" id="source_code">Source</div>

				<div class="promo clearfix" style="padding:60px 0 0 0;">
					<div class="wrap">
						<div class="" style="width: 100%">
							The evaluation of actual running times was done on a
							personal computer with 16 GB RAM and a CPU with 4
							cores, each operating at 4 GHz. All technical parameters
							used in the three tasks in this study (learning rates,
							exploration type, eligibility trace parameter, etc.) are
							fully specified in the code, that available at <a href="./source_code" target="_blank">LINK</a>
						</div>
						<br>
					</div>
				</div>
			</div>


			<div class="spanning">
				<div class="comments clearfix" style="padding:50px 0 0 0;">
					<div class="wrap">
						<div class="tab">
						<div class="box visible" style="font-size: 10px;margin: 0">
							<h4 style="margin: 0">Ariel Rosenfeld, Oleg Maksimov, Sarit Kraus</h4>
						</div>
						</div>
					</div>
				</div>
			</div>




		</div>
		<footer>
			<div class="wrap">
				<p>&copy; 2017 &nbsp; <strong>Department of Computer Science &nbsp; Bar-Ilan University &nbsp; Israel</strong> &nbsp; All Rights Reserved</p>
			</div>
		</footer>

		<script type="text/javascript">
			$(document).ready(function(){

			    //nojs
			    $("body").removeClass("no-js");

			});
		</script>
	</body>
	</html>