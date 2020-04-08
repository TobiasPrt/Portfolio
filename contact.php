<?php
if (isset($_POST['submit'])) {
	mail("me@tobiaspoertner.com", $_POST['subject'], $_POST['message'], 'FROM: '.$_POST['name'].'<'.$_POST['mail'].'>');
	$success = 1;
}
?>
<!DOCTYPE html>
<html lang="DE">
<head>
	<meta charset="utf-8">	
	<meta name="author" content="Tobias Pörtner">
	<meta name="date" content="2020-04-08">
	<meta name="description" content="Egal, ob es um Zusammenarbeit, Hilfe für einen guten Zweck oder du einfach nur Hallo sagen willst. Das ist das ideale Formular dafür.">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="Tobias Pörtner - Kontakt">
	<meta property="og:image" content="https://tobiaspoertner.com/img/imessage-icon.jpg">
	<link rel="apple-touch-startup-image" href="/launch.png">

	<link rel="apple-touch-icon" href="touch-icon-iphone.png">
	<link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
	<link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
	<link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#444444">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">

	<title>Tobias Pörtner</title>
	<link rel="stylesheet" type="text/css" href="styles/style.min.css">
	
</head>
<body class="preload" style="min-height: calc(100vh - 20px)">
	<script type="text/javascript" src="../scripts/script.js"></script>
	<header>
		<div class="outer-nav">
			<nav class="nav">
				<a class="main-logo" href="/">
					<span class="logo-text">TP</span>
				</a>
				<ul class="nav-right">
					<li class="list-item">
						<a class="transition-link" href="/">Home</a>
					</li>
					<li class="list-item">
						<a class="transition-link" href="contact">Kontakt</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<main id="contact">
		<section class="hero">
			<h1>Schreib mir</h1>
		</section>
		<section class="text">
			<p>Egal, ob zusammen arbeiten möchtest, Hilfe für einen guten Zweck brauchst oder du einfach nur Hallo sagen willst. Das ist das ideale Formular dafür. Sonst schreibe mir per <a href="mailto:me@tobiaspoertner.com">Mail</a> oder auf <a href="https://www.linkedin.com/in/tobiaspoertner" target="_blank" rel="noreferrer">LinkedIn</a>. Ich versuche so schnell wie möglich zu antworten, aber manchmal kann es ein paar Tage dauern. Bis demnächst!</p>
			<?php if (isset($success)) {
				echo '<p style="color: green">Mail erfolgreich versendet</p>';
			} ?>
		</section>
		<section class="contactform">
			<form method="POST">
				<label>
					<input type="text" name="name" placeholder="Name" autocorrect="off" autofocus required>
				</label>
				<label>
					<input type="mail" name="mail" placeholder="Mail" autocorrect="off" required>	
				</label>
				<label>
					<input type="text" name="subject" placeholder="Thema" required>
				</label>
				<label>
					<textarea name="message" placeholder="Nachricht" required></textarea>
				</label>
				<div class="about-buttons buttonholder btn-cont">
					<button class="btn">
						Senden
						<span class="line-1"></span>
						<span class="line-2"></span>
						<span class="line-3"></span>
						<span class="line-4"></span>
					</button>
				</div>
			</form>
		</section>
	</main>


	<footer id="footer">
		<span>&copy; 2020 Tobias Pörtner</span>
		<span><a href="impressum">Impressum</a></span>
	</footer>
	<script type="text/javascript">
			element = document.getElementById('contact')
			element2 = document.getElementById('footer')
			var space = window.innerHeight - element.offsetTop - element.offsetHeight - element2.offsetHeight - 20 - 100
			if (space < 0) {
				space = 0
			}
			element.style.paddingBottom = space + 'px';
	</script>
</body>
</html>