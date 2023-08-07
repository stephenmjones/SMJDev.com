<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8"/>
		<title>Web Development Portfolio - Stephen Jones</title>
		<meta name="description" content="Online portfolio for Stephen Jones, a web developer located in Nashville, TN.">
		<meta name="author" content="Stephen Jones">
		<meta name="keywords" content="web, developer, development, portfolio, stephen jones, nashville, front end, back end, full stack,">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

		<!--<link rel="stylesheet" type="text/css" href="css/normalize.css" />-->
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700%7CRoboto:400,700,900" rel="stylesheet">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="/manifest.json">
		<link rel="mask-icon" href="/safari-pinned-tab.svg">
		<meta name="theme-color" content="#6699cc">

	</head>

	<body>

		<header>
			<img id="navlogo" src="img/logo.png" alt="Stephen's Logo"/>
			<p id="navlogotype">Stephen Jones</p>
			<span id="navpull" class="fa fa-bars" aria-hidden="true"></span>
			<nav>
				<ul>
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About Me</a></li>
					<li><a href="#projects">Projects</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>
		</header>

		<section id="home" class="height-fix">
			<div class="center">
				<img id="logo" src="img/logo.png" alt="Stephen's Logo"/>
				<h1>Hey there! I'm<span>Stephen Jones</span>A web developer for hire located in Nashville, TN.</h1>
				<a class="pagedownbutton" href="#about">
					Learn more about me
					<span class="fa fa-chevron-down pagedownarrow" aria-hidden="true"></span>
				</a>
			</div>
		</section>

		<section id="about" class="container">
			<div class="row">
				<div class="cute-100 cute-12-phone cute-12-tablet cute-12-laptop">
					<h2 class="headinglines">About Me</h2>
				</div>
			</div>
			<div class="row">
				<div class="cute-100 cute-12-phone cute-12-tablet cute-12-laptop">
					<h3>I am a full-stack developer with a degree in advertising. I am driven by my desire to understand how things work, and love of solving problems.</h3>
				</div>
			</div>
			<div class="row">
				<div class="cute-100 cute-6-phone cute-6-tablet cute-3-laptop">
					<span class="fa fa-pencil fa-2x blue" aria-hidden="true"></span>
					<h4>Design</h4>
					<p>When designing websites, I place a heavy emphasis on the end user’s experience. A successful website should satisfy the needs of the user first and be accessible, functional, and intuitive.</p>
				</div>

				<div class="cute-100 cute-6-phone cute-6-tablet cute-3-laptop">
					<span class="fa fa-eye fa-2x" aria-hidden="true"></span>
					<h4>Front End</h4>
					<p>I’m proficient in semantic HTML, CSS, and I use JavaScript to add visual spice and interactivity. I strive to make websites that are responsive and work well on any screen size using a grid system and media queries.</p>
				</div>


				<div class="cute-100 cute-6-phone cute-6-tablet cute-3-laptop">
					<span class="fa fa-code fa-2x" aria-hidden="true"></span>
					<h4>Back End</h4>
					<p>PHP and MySQL databases are the back-end technologies I use to create dynamic websites. I’m very interested in data visualization and finding ways to make data more accessible and easy to use.</p>
				</div>

				<div class="cute-100 cute-6-phone cute-6-tablet cute-3-laptop">
					<span class="fa fa-server fa-2x" aria-hidden="true"></span>
					<h4>Server Admin</h4>
					<p>I host all of my web projects on a personal server that I administrate remotely over SSH connections. I’m comfortable using the command line to install and configure software, manage users & file permissions, and general upkeep.</p>
				</div>
			</div>
			<div class="row">
				<div class="cute-100 cute-12-phone cute-12-tablet cute-12-laptop">
					<a class="pagedownbutton" href="#projects">
						See my recent projects
						<span class="fa fa-chevron-down pagedownarrow" aria-hidden="true"></span>
					</a>
				</div>
			</div>
		</section>

		<section id="projects" class="container">


			<div class="row">
				<div class="cute-100 cute-12-phone cute-12-tablet cute-12-laptop">
					<h2 class="headinglines">Projects</h2>
				</div>
			</div>

			<div class="row">
				<div class="cute-100 cute-12-phone cute-12-tablet cute-12-laptop">

					<div class="row">
						<div class="cute-100 cute-12-phone cute-12-tablet cute-6-laptop">
							<img class="projectimg" src="img/bballchartspic2.png" alt="B Ball Charts website displayed on a monitor and cell phone."/>
						</div>

						<div class="cute-100 cute-120-phone cute-12-tablet cute-6-laptop">
							<h4 class="projecttitle">BBall Charts</h4>
							<a class="projectlink" href="http://www.bballcharts.com">http://www.bballcharts.com</a>
							<ul class="taglist">
								<li>HTML</li>
								<li>CSS</li>
								<li>JavaScript</li>
								<li>Responsive</li>
								<li>API</li>
							</ul>
							<p>BBallcharts is a website that displays NBA player’s stats over the course of the season, and is helpful in comparing players to each other, and identifying trends in their performance. It was made to assist in my fantasy basketball league.</p>
						</div>
					</div>

				</div>
				<div class="cute-100 cute-12-phone cute-12-tablet cute-12-laptop">

					<div class="row">
						<div class="cute-100 cute-12-phone cute-12-tablet cute-6-laptop">
							<img class="projectimg" src="img/searchmtgpic2.png" alt="Search MTG website displayed on a monitor."/>
						</div>

						<div class="cute-100 cute-120-phone cute-12-tablet cute-6-laptop">
							<h4 class="projecttitle">Search MTG</h4>
							<a class="projectlink" href="http://www.searchmtg.com">http://www.searchmtg.com</a>
							<ul class="taglist">
								<li>HTML</li>
								<li>CSS</li>
								<li>JavaScript</li>
								<li>PHP</li>
								<li>MySQL</li>
								<li>AJAX</li>
							</ul>
							<p>SearchMTG is a searchable database of over 12,000 Magic: the Gathering cards. Perfect for deck building or to find synergy with other cards.</p>
						</div>
					</div>

				</div>

			</div>
			<div class="row">
				<div class="cute-100 cute-12-phone cute-12-tablet cute-12-laptop">
					<a class="pagedownbutton" href="#contact">
						Get in touch
						<span class="fa fa-chevron-down pagedownarrow" aria-hidden="true"></span>
					</a>
				</div>
			</div>
		</section>

		<section id="contact" class="container">
			<div class="row">
				<div class="cute-100 cute-12-phone cute-12-tablet cute-12-laptop">
					<h2 class="headinglines">Contact</h2>
				</div>
			</div>

			<div class="row">
				<div class="cute-100 cute-12-phone cute-6-tablet center-tablet cute-4-laptop center-laptop">
					<form id="contactform" method="post" action="/scripts/php/contactform.php">
						<fieldset>
							<label for="name">Name:</label>
							<input type="text" name="name" id="name" required>

							<label for="email">Email:</label>
							<input type="email" name="email" id="email" required>

							<label for="pokemon">Favorite Pokemon:</label>
							<input type="text" name="pokemon" id="pokemon" autocomplete="pokemon" tabindex="-1">

							<label for="message">Message:</label>
							<textarea name="message" id="message" required></textarea>

							<button id="submit" type="submit">Send</button>
						</fieldset>
					</form>
				</div>
			</div>

			<div class="row">
				<div class="cute-100">
					<h5 class="headinglines">Find me on</h5>
				</div>
				<div class="cute-4-phone">
					<a class="sociallinks" href="https://www.facebook.com/profile.php?id=100013130144855">
						<span class="fa fa-facebook fa-fw" aria-hidden="true"></span>
					</a>
				</div>
				<div class="cute-4-phone">
					<a class="sociallinks" href="https://github.com/stephenmjones">
						<span class="fa fa-github fa-fw" aria-hidden="true"></span>
					</a>
				</div>
				<div class="cute-4-phone">
					<a class="sociallinks" href="https://www.linkedin.com/in/stephen-jones-43292b61">
						<span class="fa fa-linkedin fa-fw" aria-hidden="true"></span>
					</a>
				</div>
			</div>
			<div class="cute-100">
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="cute-100">
				<p class="copyright">Designed and developed by Stephen Jones</p>
				<p class="copyright">Copyright &copy; <?= date('Y') ?></p>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
	<script src="scripts/js/javascript.js"></script>
	<script src="https://use.fontawesome.com/5b7b6de4fc.js"></script>
</body>
</html>