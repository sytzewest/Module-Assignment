<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="icon" type="icon/image" href="pics/logo.png">
		<meta charset="UTF-8">
		<title>
			Osprey University
		</title>
	</head>
	<body>
		<div class="events_ext">
			<!--Header-->
			<div id="header">
				<div class="logo">
					<a href="index.html">
						<img src="pics/logo.png" alt="Osprey Logo">
					</a>
				</div>
				<div id="lang-menu">
					<p><img src="pics/lang.png" alt="globe"><a href="">EN</a>/<a href="">NL</a>/<a href="">SP</a></p>
				</div>
				<div id="menu-bar">
					<ul id="menu">
						<li><a href="index.html" >About us</a></li>
						<li><a href="course_overview.html" >Course Overview</a></li>
						<li><a href="admission.html" >Admission</a></li>
						<li><a href="events.php" >Events</a></li>
						<li><a href="contact.html" >Contact</a></li>
					</ul>
				</div>
			</div>
			<!--Body-->
			<div class="events_header">
				<h2>Upcoming Events</h2>
			</div>
			<div class="event_main">
				<img class="event_resize_you_bitch" src="pics/open_day.jpg" alt="event"/>
				<p>Come join us for our open day and meet some of our students!</p>
			</div>
			<div class="event_main">
				<img class="event_resize_you_bitch"src="pics/post_fair.jpg"alt="event"/>
				<p>Receive a wealth of studying, application and funding advice for your postgraduate endeavours.</p>
			</div>
			<div class="event_main">
				<img class="event_resize_you_bitch"src="pics/pi_day.jpg"alt="event"/>
				<p>Join us for our annual celebration of the fourteenth of march, when we eat lots Pie!</p>
			</div>
			<div class="event_rss">
				<?php
				$rss = new DOMDocument();
						$rss->load('https://tinybuddha.com/feed');
						$feed = array();
						foreach ($rss->getElementsByTagName('item') as $node) {
							$item = array ( 
								'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
								'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
								'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
								'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
								);
							array_push($feed, $item);
						}
						$limit = 3;
						for($x=0;$x<$limit;$x++) {
							$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
							$link = $feed[$x]['link'];
							$description = $feed[$x]['desc'];
							$date = date('l F d, Y', strtotime($feed[$x]['date']));
							echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
							echo '<small><em>Posted on '.$date.'</em></small></p>';
							echo '<p>'.$description.'</p>';
						}
				?>
			</div>
		
			
			<hr>
			<!--Footer-->
			<div id="footer">
				<div class="footer footer1">
					<div class="footer-title">
						<p>
							Osprey<br>
							University of Applied Sciences
						</p>
					</div>
					<div id="address">
						<p>
							Sodalietdreef 44<br>
							7828 CR<br>
							Emmen<br>
							The Netherlands<br>
							Tel:06-72278256
						</p>
					</div>
				</div>
				<div class="footer footer2">
					<div class="footer-title">
						<p>Quick links:</p>
					</div>
					<div>
						<ul id="quick-links">
							<li><a href="course_overview.html">Course Overview</a></li>
							<li><a href="why_holland.html">Why Holland?</a></li>
							<li><a href="studying_with_disabilities.html">Studying with a disability</a></li>
							<li><a href="exchange_students.html">Exchange Students</a></li>
							<li><a href="gallery.html">Gallery</a></li>
						</ul>
					</div>
				</div>
				<div class="footer footer3">
					<div class="footer-title">
						<p>Connect with us:</p>
					</div>
					<div>
						<p class="social-media">
							<a href="#"><img src="pics/facebook.png" alt="facebook icon"></a>
							<a href="https://www.instagram.com/ospreyuni/"><img src="pics/instagram.png" alt="instagram icon"></a>
							<a href="https://twitter.com/OspreyUni?lang=en"><img src="pics/twitter.png" alt="twitter icon"></a>
							 
							 
						</p>
					</div>
					<div>
						<p id="copyright">
							&copy;Osprey University
						</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
