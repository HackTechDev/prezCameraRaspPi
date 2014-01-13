<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>Pr&eacute;sentation du module cam&eacute;ra du Raspberry Pi</title>

		<meta name="description" content="">
		<meta name="author" content="Le Sanglier des Ardennes">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<link rel="stylesheet" href="css/reveal.min.css">
		<link rel="stylesheet" href="css/theme/default.css" id="theme">

		<!-- For syntax highlighting -->
		<link rel="stylesheet" href="lib/css/zenburn.css">

		<!-- If the query includes 'print-pdf', use the PDF print sheet -->
		<script>
			document.write( '<link rel="stylesheet" href="css/print/' + ( window.location.search.match( /print-pdf/gi ) ? 'pdf' : 'paper' ) + '.css" type="text/css" media="print">' );
		</script>

		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="reveal">

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">
                <?php include('intro.inc.php'); ?>
                <?php include('sommaire.inc.php'); ?>
                <section>
                    <section>
                        <h3>I) Pr&eacute;sentation du module cam&eacute;ra</h3>
                    </section>
                    <?php include('presentation.inc.php'); ?>
                </section>
				<section>
					<section>
						<h3>II) Installation de la cam&eacute;ra</h3>
					</section>
					<?php include('installation.inc.php'); ?>
				</section>
				<section>
					<section>
                      <h3>III) Activation de la cam&eacute;ra</h3>
                    </section>
					<?php include('activation.inc.php'); ?>
				</section>
				<section>
					<section>
						<h3>IV) Test de la cam&eacute;ra</h3>
					</section>
					<?php include('test.inc.php'); ?>
				</section>
				<section>
					<section>
                       <h3>V) Timelapse</h3>
                    </section>
					<?php include('timelapse.inc.php'); ?>
                    <?php include('atelier_timelapse.inc.php'); ?>
				</section>
				<section>
					<section>
                        <h3>VI) Diffusion</h3>
                    </section>
					<?php include('diffusion.inc.php'); ?>
                    <?php include('atelier_diffusion.inc.php'); ?>
				</section>
				<section>
					<section>
                          <h3>VII) Stop-motion</h3>
                    </section>
					<?php include('stopmotion.inc.php'); ?>
                    <?php include('atelier_stopmotion.inc.php'); ?>
				</section>

				<?php include('end.inc.php'); ?>
				
			</div>

			<script src="lib/js/head.min.js"></script>
			<script src="js/reveal.min.js"></script>

			<script>

				// Full list of configuration options available here:
				// https://github.com/hakimel/reveal.js#configuration
				Reveal.initialize({
					controls: true,
					progress: true,
					history: true,
					center: true,

					theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
					transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/zoom/linear/fade/none

					// Parallax scrolling
					// parallaxBackgroundImage: 'https://s3.amazonaws.com/hakim-static/reveal-js/reveal-parallax-1.jpg',
					// parallaxBackgroundSize: '2100px 900px',

					// Optional libraries used to extend on reveal.js
					dependencies: [
						{ src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
						{ src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
						{ src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
						{ src: 'plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
						{ src: 'plugin/zoom-js/zoom.js', async: true, condition: function() { return !!document.body.classList; } },
						{ src: 'plugin/notes/notes.js', async: true, condition: function() { return !!document.body.classList; } }
					]
				});
            Reveal.configure({ slideNumber: true });

			</script>

			<div style="display: block; position: absolute; bottom: 14px; left: 50%; margin-left: -230px; z-index: 20;" class="share-reveal">
				<p style="font-size: 14px">
					<a href="http://framboisepi.fr">http://framboisepi.fr</a> | <a href="http://www.graoulab.org/">GraouLAB</a>, le 16/01/14 : Pr&eacute;sentation et atelier sur le module cam&eacute;ra du Raspberry Pi fait avec <a href="http://lab.hakim.se/reveal-js">reveal-js</a>
				</p>
			</div>

		</body>
	</html>
