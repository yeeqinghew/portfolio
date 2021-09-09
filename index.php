<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Yee Qing</title>
	<link rel="icon" href="../../img/star.svg">
	<link rel="stylesheet" type="text/css" href="/css/homepage.css" data-page="<?php echo $page['name'];?>">
</head>
<body>
	<div id="page" data-page="<?php echo $page['name'];?>">
		<?php include __DIR__.'/1-header.php'; ?>
		
		<section id="page-main">
			<section id="intro">
				<section class="text">
					<p id="country"><strong>  Singapore</strong></p>
					<h1>Hello, I'm Yee Qing</h1>
					<p class="short-intro">I'm a final year Information Systems student at the National University of Singapore. </p>
					<p class="short-intro">I love technology and have a strong interest in full stack development. I aspire to use my knowledge and skills to build things that will leave an impact on society in the future.</p>
				</section>
				<figure>
					<img src="../../img/me.png" alt="">
				</figure>
			</section>

			<section id="portfolio-preview">
				<h2>Past projects </h2>
				<section id="pmid">
					<figure>
						<img src="../../img/pmid.png" alt="pmid-client"/>
					</figure>
					<section class="text">
						<h3>Project Manager and Interior Designer (PMID) and Client App</h3>
						<p>PMID and Client applications are progressive web applications that serves as a tool between the interior designer and client to ease the communication between them. </p>
						<p><img src="../../img/checked.svg"> Created for Interiio.sg</p>
						<p><img src="../../img/checked.svg"> Created with JavaScript and PHP</p>
					</section>
				</section>
				<section id="emservices">
					<figure>
						<img src="../../img/em.png" alt="em"/>
					</figure>
					<section class="text">
						<h3>Easy Management</h3>
						<p>Easy Management is an application that was created to help EM Services to streamline their daily processes of managing projects, that mainly includes project and material claim management that involves various internal and external stakeholders. </p>
						<p><img src="../../img/checked.svg"> Created for NUS Capstone</p>
						<p><img src="../../img/checked.svg"> Created with PostgreSQL, Express.js, React, Node.js</p>
					</section>
				</section>
				<section id="shoppawholic">
					<figure>
						<img src="../../img/shoppawholic.png" alt="shoppawholic"/>
					</figure>
					<section class="text">
						<h3>shopPAWholic</h3>
						<p>Shop-PAW-holic is a mobile application and web-based business marketplace for users to buy and sell pet related items of all kinds. It's a convenient one-stop application that brings together pet owners and pet service providers to create a pet-loving community, to meet users’ pet-related needs such as pet goods (food, toys and supplements) as well as to provide pet-related information (events and advertisements). </p>
						<p><img src="../../img/checked.svg"> Created with Netbeans</p>
					</section>
				</section>
			</section>
		</section>
	
		<?php include __DIR__.'/2-footer.php'; ?>
	</div><!-- end of page -->
<script src="/js/homepage.js"></script>
</body>