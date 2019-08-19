<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Supplywisdom
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info footer">
		<div class="container contain">
			<div class="col">
				<h2>GLOBAL HEADQUARTERS</h2>
				<ul>
					<li>1962 Main Street,<br> Suite 253, Sarasota,<br> FL 34236 USA</li>
					<li><a href="mailto:info@supplywisdom.com">info@supplywisdom.com</a></li>
          <li>Tel.<a href="tel:info@supplywisdom.com"> +1.617.830.1664</a></li>
				</ul>
			</div><!-- /.col -->
			<div class="col">
				<h2>ASIA / PACIFIC HEADQUARTERS</h2>
				<ul>
					<li>No.13, 1st Fl, C Block<br>Embassy Heights,<br> Magrath Road.<br> Bangalore-560 025 India</li>
          <li>Tel.<a href="tel:+91.80.4150.3500"> +91.80.4150.3500</a></li>
				</ul>
			</div><!-- /.col -->
			<div class="col footer-menu-link">
				<h2>QUICK LINKS</h2>
				<ul>
					<li class="mb"><a href="#"> About Supply Wisdom</a></li>
					<li><a href="#">Featured Insights</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">FAQ’s</a></li>
					<li><a href="#">Terms & Conditions</a></li>
				</ul>
			</div><!-- /.col -->
			<div class="col">
				<h2>SUBSCRIBE TO OUR INSIGHTS</h2>
				<ul>
					<li>Stay up to date with our latest blogs and insights</li>
          <div class="news_btn">
            <input type="text" placeholder="yours Email">
            <button>Subscribe <i class="icon-noun_send_8872991"></i></button>
          </div><!--news_btn--->
				</ul>
			</div><!-- /.col -->
		</div><!-- /.container -->
	</div><!-- .site-info -->
	<section class="bottom-footer">
		<div class="container">
			<p>Copyright &copy; <?php echo date('Y'); ?> Supply Wisdom<sup>TM</sup>. All rights reserved.</p>
			<ul>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
			</ul>
		</div><!-- /.container -->
	</section><!-- /.bottom-footer -->
</footer><!-- #colophon -->
</div><!-- #page -->

<a id="back2Top" title="Back to top" href="#"><i class="icon-go-up-icon"></i></a>




  



<?php 
	wp_footer(); 
	if(is_front_page()):
?>
<script>
  /*=====  time display  ======*/
  (function () {
    function checkTime(i) {
      return (i < 10) ? "0" + i : i;
    }
    function startTime() {
        var today = new Date(),
          h = checkTime(today.getHours()),
          m = checkTime(today.getMinutes()),
          s = checkTime(today.getSeconds());
        document.getElementById('time').innerHTML = h + ":" + m + ":" + s + " GMT +0530 (IST)";
        t = setTimeout(function () {
            startTime()
        }, 500);
    }
    startTime();
	})();
	/*=====  End of time display  ======*/
</script>

<?php endif; ?>


<!-- owl carousel -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</body>
</html>
