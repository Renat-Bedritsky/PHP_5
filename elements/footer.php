<?php require_once $_SERVER["DOCUMENT_ROOT"].'/treehouse/data/pageData.php'; ?>

<footer class="footer">
		<div class="footer_top">
			<div class="container">
				<div class="footer_top_info">
					<div class="footer_top_contact footer_top_column">
		 
						<h4>Contact Us</h4>
						<div class="footer_ico_location"><p>55 Main St. Toronto, ON M1H 3A5</p></div>
						<div class="footer_ico_phone"><p><a href="#">(416) 555-5252</a></p></div>
						<div class="footer_ico_email"><p><a href="#">hello@treehouse.com</a></p></div>
		 
					</div>

					<div class="footer_top_posts footer_top_column">
						<h4>Latest Posts</h4>

						<?php if (!empty($arrLatest)):
						foreach ($arrLatest as $key => $value): ?>
						<div class="<?= $key ?>"><a href="#"><?= $value ?></a></div>
						<?php endforeach; 
						endif; ?>
					</div>

					<div class="footer_top_tweets footer_top_column">
						<h4>Latest Tweets</h4>
						<div class="footer_ico_tw">
							<p>Confucius: Life is really simple, but we insist on making it complicated.</p>
							<p><strong>&#x23;famousquotes</strong></p>
							<p>8 mins ago</p>
						</div>

						<div class="footer_ico_tw">
							<p>Grab the Free Treehouse web template at FreebiesXpress!</p>
							<p><strong>&#x23;freebies &#x23;templates</strong></p>
							<p>2 days ago</p>
						</div>
		 
					</div>
				</div>
			</div>
		</div>
	  
		<div class="footer_bot"> 
			<div class="container">
				<div class="footer_bot_list">

					<div class="footer_bot_left">
						<p>&copy; Copyright 2014 FreebiesXpress.com</p>
					</div>

					<div class="footer_bot_right">
						<div class="footer_right_tw"><a href="#"></a></div>
						<div class="footer_right_fb"><a href="#"></a></div>
						<div class="footer_right_pint"><a href="#"></a></div>
						<div class="footer_right_g"><a href="#"></a></div>
					</div>

				</div>
			</div>
		</div>
	</footer>

</div>

</body>
</html>