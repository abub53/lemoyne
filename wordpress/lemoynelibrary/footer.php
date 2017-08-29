<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			</div><!--.site-content-->
		</div><!--.container page-container-->
		

    <!-- Footer: Updated 2017-08-17 -->
    <div class="jumbotron">
      <div class="container-fluid">
        <div class="row lmc-footer-top">
          <div class="col-md-4 col-sm-4">
            Noreen Reale Falcone Library <br>
            tel: 315-445-4153 <br>
            fax: 315-445-4542 <br>
            <a href="http://resources.library.lemoyne.edu/visit">Visit</a> &bull; 
            <a href="http://resources.library.lemoyne.edu/contact">Contact</a> &bull; 
            <a href="http://resources.library.lemoyne.edu/hours">Hours</a> &bull; 
            <a href="http://resources.library.lemoyne.edu/">Site Map</a> <br>
            <div id="api_hours_today_iid567_lid0"></div>
          </div>
          <div class="col-md-4 col-sm-4 hidden-xs">
            <div class="text-center">
              <img src="http://lemoynelibrary.org/bootstrap/lemoyne/assets/images/footer/lemoyne-dolphin.svg" alt="Le Moyne College Dolphin">
            </div>
          </div>
          <div class="col-md-2 col-md-offset-2 col-sm-3 col-sm-offset-1">
            Le Moyne College <br>
            1419 Salt Springs Rd <br>
            Syracuse, NY 13214 <br>
            <a href="http://www.lemoyne.edu/Compliance/Handbook/Compliance-Information">Non-Discrimination</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Hours in footer LibCal widget -->
    <script src="//api3.libcal.com/api_hours_today.php?iid=567&lid=0&format=js&context=object"> </script>


	<div class="container-fluid">
		<footer id="site-footer" role="contentinfo">
			<div id="footer-row" class="row site-footer">
				<div class="col-sm-4 footer-left">
					<?php dynamic_sidebar('footer-left'); ?> 
				</div>
				<div class="col-sm-5 footer-right">
				</div>
				<div class="col-sm-3 footer-right">
					<?php dynamic_sidebar('footer-right'); ?> 
				</div>
			</div>
		</footer>
	</div>		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
</html>