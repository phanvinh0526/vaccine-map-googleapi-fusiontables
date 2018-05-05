<!-- Footer -->
<div class='footercon <?php if(isVaccineMap()) echo "ft-travel"; ?>'>
<div class="footer-content">
	<div class='container'>
		<div class="bottom_footer">
		<div class="row">
		  <div class="col-sm-4 about-us">
		  	<h4 class="title_block">About us</h4>
		    <p>Personalised, professional, quality healthcare across a wide range of medical and support staff. Male and Female Doctors. Bulk Billing available.</p>
		    <strong><p class="adress">
		    <i class="fa  fa-home"></i>
		      Address: Shop 2081, Westfield Knox 425 Burwood Highway Wantirna South VIC 3152
		    </p></strong>
		    <strong><p class="email">
		    <i class="fa fa-envelope-o"></i>Email: <a href="mailto:admin@doctorsatknox.com.au">admin@doctorsatknox.com.au</a></p></strong>
		  </div>
		  <div class="block_various_links_footer col-sm-4">
		      <h4 class="title_block">Usefull link</h4>
		      <ul>
		            <li><a href="">Home</a></li>
		          <li><a href="">Contact us</a></li>
		          <li><a href="">About us</a></li>
		          <li><a href="">Sitemap</a></li>
		      </ul>
		  </div>
		  <div class="col-sm-4 social">
		    <h4 class="title_block">Follow us</h4>
		      <ul class="social-share">
		        <li class="icon-facebook">
		            <a href="https://www.facebook.com/doctorsatknox/" target="_blank" title="Become our fan">
		                <i class="fa fa-facebook"></i>
		            </a>
		        </li>               

		        <li class="icon-google-plus">
		            <a href="https://plus.google.com/+DoctorsatknoxAu" target="_blank" title="Follow us">
		                <i class="fa fa-google-plus"></i>
		            </a>
		        </li>
		        <li class="icon-instagram">
		            <a href="http://www.instagram.com/" target="_blank" title="See Us">
		                <i class="fa fa-instagram"></i>
		            </a>
		        </li>   
		        <li class="icon-youtube">
		            <a href="http://youtube.com/" target="_blank" title="Get updates">
		                <i class="fa fa-youtube"></i>
		            </a>
		        </li>       

		        </ul>
		  </div>
		</div>
		</div>
	</div>
	<div class="copy_right">© 2015 Doctors@Knox. All rights reserved. <a href="privacy-policy.html" class="lastli">Privacy Policy</a> |  <a href="https://plus.google.com/+DoctorsatknoxAu">Google+</a></div>
</div>
</div>

<!-- JS Libraries -->
    <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- Google Analytics -->
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-84531960-1', 'auto');
	  ga('send', 'pageview');
	</script>
	<!-- Travel Vaccne Map -->
	<?php
		if(isVaccineMap()){ ?>
			<script src="https://maps.google.com/maps/api/js?key=AIzaSyD9Ajk9CA-BBWKrD3M3Wsjj64rSv8AD9TA&libraries=places&sensor=false"></script>
			<script type="text/javascript" src="resources/library/vacc_map/assets/js/jquery.easy-autocomplete.min.js"></script>

			<script type="text/javascript" src="resources/library/vacc_map/vaccine-sidebar.js"></script>
			<script type="text/javascript" src="resources/library/vacc_map/vaccine-data.js"></script>
			<script type="text/javascript" src="resources/library/vacc_map/vaccine-map.js"></script>
	<?php } ?>
  </body>
</html>
