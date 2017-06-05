<!-- form validation -->
<?php
	// define variables and set to empty values
	// $name = $email = $message = "";

	// if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  // $name = test_input($_POST["name"]);
	  // $email = test_input($_POST["email"]);
	  // $message = test_input($_POST["message"]);
	// }

	// function test_input($data) {
	  // $data = trim($data);
	  // $data = stripslashes($data);
	  // $data = htmlspecialchars($data);
	  // return $data;
	// }
?>
<!-- send mail -->
<?php
// $to = "yvonne@sjala.nu";
// $subject = "HTML email";

// $message = "
// <html>
// <head>
/*<title>Pussa.info FORM</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>*/
// ";

// Always set content-type when sending HTML email
// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
// $headers .= 'From: <form@pussa.info>' . "\r\n";

// mail($to,$subject,$message,$headers);
?>
<!DOCTYPE HTML>
<!--
	Story by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Story by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta lang="sv">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper" class="divided">

				<!-- One -->
					<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
							<h1>P.U.S.S.A</h1>
							<p class="major">Säkerhetsrekommendationer när du bär ditt barn</p>
							<ul class="actions vertical">
								<li><a href="#first" class="button big wide smooth-scroll-middle">Läs mer</a></li>
							</ul>
							<p class="major"><a>eller ladda ner PUSSA här</a></p>
						</div>

						<div class="image">
							<img src="images/headerIMG/pussa_head2.jpg" alt="" />
						</div>
					</section>

				<!-- Two -->
					<section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">
						<div class="content">
							<h2>P för Position</h2>
							<p>Barnet sitter upprätt med knäna högre än rumpan. Bärdonet stödjer barnet från knäveck till knäveck samt bakom hela ryggen. Barnet sitter tätt intill bäraren och så högt upp att det lätt kan pussas på hjässan (pussavstånd).</p>
							<ul class="actions vertical">
								<li><a href="#second" class="button smooth-scroll-middle">Fortsätt läsa</a></li>
							</ul>
						</div>
						<div class="image">
							<img src="images/instructionsBlack/pussa_p_block.png" alt="" />
						</div>
					</section>

				<!-- Three -->
					<section class="spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in" id="second">
						<div class="content">
							<h2>U för Uppsikt</h2>
							<p>Barnets luftvägar är fria. Luften kan cirkulera fritt kring barnets ansikte. Bäraren tar hänsyn till barnets behov av komfort, säkerhet och lagom temperatur.</p>
							<ul class="actions vertical">
								<li><a href="#third" class="button smooth-scroll-middle">Läs mer</a></li>
							</ul>
						</div>
						<div class="image">
							<img src="images/instructionsBlack/pussa_up_block.png" alt="" />
						</div>
					</section>

				<!-- Four -->
					<section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="third">
						<div class="content">
							<h2>S för Synlighet</h2>
							<p>Barnets ansikte är alltid synligt för bäraren. Inget tyg täcker barnets ansikte och det finns ett avstånd motsvarande minst två fingrars bredd mellan barnets haka och bröstkorg.</p>
							<ul class="actions vertical">
								<li><a href="#fourth" class="button smooth-scroll-middle">Fortsätt läsa</a></li>
							</ul>
						</div>
						<div class="image">
							<img src="images/instructionsBlack/pussa_s_block.png" alt="" />
						</div>
					</section>

				<!-- Five -->
					<section class="spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in" id="fourth">
						<div class="content">
							<h2>S för Stöd</h2>
							<p>Bärdonet och bärsättet anpassas i takt med att barnet växer. Barnets huvud kan röra sig fritt när barnet är vaket och barnets händer finns nära barnets ansikte. Det finns inget avstånd mellan bärare och barn.</p>
							<ul class="actions vertical">
								<li><a href="#fifth" class="button smooth-scroll-middle">Läs ännu mer</a></li>
							</ul>
						</div>
						<div class="image">
							<img src="images/instructionsBlack/pussa_st_block.png" alt="" />
						</div>
					</section>
				<!-- Six -->
					<section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="fifth">
						<div class="content">
							<h2>A för Avlastning</h2>
							<p>Bärdonet är bekvämt för både barn och bärare. Att bära barn får inte göra ont, det ska vara komfortabelt och glädjefyllt. Bäraren kan stå rakt och röra sig utan ansträngning.</p>
							<ul class="actions vertical">
								<li><a href="#" class="button smooth-scroll-middle">Ladda ner PUSSA</a></li>
							</ul>
						</div>
						<div class="image">
							<img src="images/instructionsBlack/pussa_a_block.png" alt="" />
						</div>
					</section>
				<!-- Seven -->

				<!-- 	<section class="wrapper style1 align-center">
						<div class="inner medium">
							<h2>Frågor?</h2>
							<form method="post" action=>
								<div class="field half first">
									<label for="name">Namn</label>
									<input type="text" name="name" id="name" value="" />
								</div>
								<div class="field half">
									<label for="email">Email</label>
									<input type="email" name="email" id="email" value="" />
								</div>
								<div class="field">
									<label for="message">Meddelande</label>
									<textarea name="message" id="message" rows="6"></textarea>
								</div>
								<ul class="actions">
									<li><input type="submit" name="submit" id="submit" value="Send Message" /></li>
								</ul>
							</form>

						</div>
					</section> -->

				<!-- Footer -->
					<footer class="wrapper style1 align-center">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
								<li><a href="#" class="icon style2 fa-envelope"><span class="label">Email</span></a></li>
							</ul>
							<p>&copy; Franziska Federle, bärandekonsult &amp; Yvonne Duran, Sjala. Design: <a href="https://html5up.net">HTML5 UP</a>, justerat av <a href="https://www.crisduran.se/">Cris Duran</a>.</p>
							<p><a rel="license" href="http://creativecommons.org/licenses/by-nd/2.5/se/"><img alt="Creative Commons-licens" style="border-width:0" src="https://i.creativecommons.org/l/by-nd/2.5/se/88x31.png" /></a><br />Detta verk är licensierat under en <a rel="license" href="http://creativecommons.org/licenses/by-nd/2.5/se/">Creative Commons Erkännande-IngaBearbetningar 2.5 Sverige Licens</a>.</p>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>