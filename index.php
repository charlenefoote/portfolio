<?php include 'header.php'; ?>

	<div id="portfolio" class="views bg-fluid">
	
		<div id="portfolio-nav" class="view views-nav">
		
			<h2 id="work-selection">Work Selection</h2>
		
			<ul class="work-thumbs">
				<li><a href="#ro-style-salon" data-pushview><span><h3>Ro Style Salon</h3><h4>Web Design &amp; Development</h4></span><img src="/img/work-samples/rostyle-ipad-thumb.png" class="ipad"></a></li>
				<li><a href="#keep-st-pete-local" data-pushview><span><h3>Keep St. Pete Local</h3><h4>Web Design &amp; Front-End Development</h4></span><img src="/img/work-samples/kspl-laptop-thumb.png" class="laptop"></a></li>
				<li><a href="#voqel-app" data-pushview><span><h3>Voqel</h3><h4>iOS App Design</h4></span><img src="/img/work-samples/voqel-app-thumb.png" class="iphone"></a></li>			
				<li><a href="http://dribbble.com/ckayfoote" target="_blank"><span><h3>Other Projects</h3><h4> Dribbble Shots</h4></span><img src="/img/work-samples/dribbble-shots.png" class="thumbs"></a></li>	
			</ul>
		
			
			
		</div>
		
		<div class="views-main">
		
			<?php include 'work/ro-style-salon.php'; ?>
			<?php include 'work/keep-st-pete-local.php'; ?>
			<?php include 'work/voqel.php'; ?>
		
		</div>
			
	</div>

<?php include 'footer.php'; ?>
