<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">

	<title>Jackson Latka</title><!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
	<link href="css/style.css" media="all" rel="stylesheet">
	<meta content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"
	name="viewport">
	<!-- Fixes the Mobile Safari auto-zoom bug: http://stackoverflow.com/questions/2557801/how-do-i-reset-the-scale-zoom-of-a-web-app-on-an-orientation-change-on-the-iphone -->

	<script src="http://use.typekit.com/efn2nbf.js" type="text/javascript">
	</script>
	<script type="text/javascript">
	      try{Typekit.load();}catch(e){}
	</script><!--iphone viwport control-->
	<meta content="width = device-width" name="viewport">
	<meta content="initial-scale = 1.0" name="viewport">
	<meta content="initial-scale = 2.3, user-scalable = no" name="viewport">
	<!--hide address bar on iPhone-->
	<meta content="yes" name="apple-mobile-web-app-capable"><!--fancybox-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"
	type="text/javascript">
	</script>
	<script src="/fancybox/jquery.fancybox-1.3.4.pack.js" type="text/javascript">
	</script>
	<link href="/fancybox/jquery.fancybox-1.3.4.css" media="screen" rel=
	"stylesheet" type="text/css">
	<script type="text/javascript">
	                 $(document).ready(function() {

	                     $(".fancybox").fancybox({
	                         'transitionIn'  :   'elastic',
	                         'transitionOut' :   'elastic',
	                         'speedIn'       :   400,
	                         'speedOut'      :   200,
	                         'overlayShow'   :   false,
	                         'type'          :   "iframe",
	                         'height':   455,
	                         'width': 480
	                     });

	                     $("#toggleDiv").hide();
	                     $("#triggerBtn").click(function(){
	                         $("#toggleDiv").fadeToggle(500);
	                     });
	                 });
	</script><!--Analytics-->

	<script type="text/javascript">

	               var _gaq = _gaq || [];
	               _gaq.push(['_setAccount', 'UA-27571833-1']);
	               _gaq.push(['_trackPageview']);

	               (function() {
	                 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	                 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	                 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	               })();

	</script>
</head><?php
    function months($bm=5, $bd=6, $bY=2010) {
           list($Y,$m,$d) = explode("-",date("Y-m-d"));

           $months = $m - $bm;
           $months += ($Y - $bY) * 12;

           return $months;
    }
    ?>

<body>
	<div id="top-shadow-box">
	</div>


	<div id="wrapper">
		<p><span class="hello">Hello. I'm Jackson Latka.</span>
		</p>


		<div id="fade">
			I have lots of ideas; some of which are better than others. I live, design,
			and create <a href="http://www.notabli.com" target="blank">things I care
			about</a> in Burlington, Vermont, at a <a href=
			"http://www.studyhallcollective.com" target="blank">well-lit studio</a>,
			near a big lake. I have a fantastic <a href="http://www.pregnantnotfat.com"
			target="blank">wife</a>, two great sons, and a smallish <a class="fancybox"
			href=
			"http://player.vimeo.com/video/182187?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1&amp;loop=1">
			yellow lab</a>. I love most everything about the web and new technologies,
			though I feel guilty about where my previous electronic devices will
			eventually end up. I have brown hair, blue eyes, and <a class="fancybox"
			href="http://www.jacksonlatka.com/jackson_faces.mp4">change my look</a>
			enough to confuse people. The best way to reach me is on <a href=
			"http://www.twitter.com/jacksonlatka" target="blank">Twitter</a> or using
			the "Say hello" button below.
		</div>
		<!--#fade-->


		<section id="info">
			<a class="chat" href="mailto:jacksonlatka+site@gmail.com" title=
			"Email Jackson">Say hello</a>

			<h2><a href="#" id="triggerBtn">Elsewhere<span>(click to reveal/hide other
			sites)</span></a>
			</h2>


			<div id="toggleDiv">
				<ul id="social">
					<li>
						<a class="sprite-twitter" href="http://www.twitter.com/jacksonlatka"
						target="_blank">Twitter</a>
					</li>


					<li>
						<a class="sprite-tumblr" href="http://www.jacksonlatka.tumblr.com"
						target="_blank">Tumblr</a>
					</li>


					<li>
						<a class="sprite-dribbble" href="http://www.dribbble.com/jacksonlatka"
						target="_blank">Dribbble</a>
					</li>


					<li>
						<a class="sprite-linkedin" href="http://www.linkedin.com/in/jacksonlatka"
						target="_blank">LinkedIn</a>
					</li>


					<li>
						<a class="sprite-flickr" href="http://www.flickr.com/jacksonlatka"
						target="_blank">Flickr</a>
					</li>

				</ul>
			</div>
		</section>
	</div>
	<script type="text/javascript">
	         $(document).ready(function() {
	                 $(".hello").css("display", "none");
	                 $(".hello").fadeIn(1000);
	                 $("#fade").css("display", "none");
	                 $("#fade").delay(2000).fadeIn(1000);
	                 $("#info").css("display", "none");
	                 $("#info").delay(4000).fadeIn(2000);
	         });
	</script>
</body>
</html>
