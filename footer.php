	<div class="hai bg-fluid">
		<div class="interior-wrap">
			
			<h2>Say hai.</h2>
			<h3><a href="mailto:charlene.foote@gmail.com"><span>email: </span>charlene.foote@gmail.com</a></h3>

			<aside class="more-info clearfix">
				<ul id="social-icons">
					<li class="facebook"><a href="https://www.facebook.com/charlene.foote.5" target="blank">Facebook</a></li>
					<li class="dribbble"><a href="http://dribbble.com/ckayfoote" target="blank">Dribbble</a></li>
					<li class="twitter"><a href="https://twitter.com/ckayfoote" target="blank">Twitter</a></li>
					<li class="pinterest"><a href="http://pinterest.com/ckayfoote/" target="blank">Pinterest</a></li>
					<li class="linkedin"><a href="http://www.linkedin.com/in/charlenefoote" target="blank">LinkedIn</a></li>
					<li class="email"><a href="mailto:charlene.foote@gmail.com">email</a></li>
				</ul>
			</aside>

		</div>
	</div>
	
</div>


<div class="snap-buffer"></div>

<script src="js/jquery-1.10.2.min.js"></script>

<!-- this library removes the 300ms delay on browsers with touch UIs -->
<script src="js/fastclick.min.js"></script>
<!-- this plugin snaps a scrolled position to an anchor point -->
<script src="js/snapScroll.min.js"></script>

<script src="js/scrollTo.min.js"></script>

<!-- including the (minified) plugin, because duh -->
<script src="js/simpleslideview.min.js"></script>

<script>
	$(function() {
		if ($(window).width() > 768) {
			$(".frame").snapscroll();
		}
	});
	$('.views').simpleSlideView({ duration: 250 });
</script>


<?php include_once("includes/analyticstracking.php") ?>

</body>
</html>