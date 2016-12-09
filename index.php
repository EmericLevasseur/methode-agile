<?php
	get_header();

?>

<!--<div style=" margin-top: 120px;">
<h1>test</h1>

<a href="<?php bloginfo('url'); ?>/wp-content/themes/methode-agile/register.php">Inscription</a>
<a href="<?php bloginfo('url'); ?>/wp-content/themes/methode-agile/login.php">Connexion</a>
<a href="<?php bloginfo('url'); ?>/wp-content/themes/methode-agile/contact.php">Contact</a>
<a href="<?php bloginfo('url'); ?>/wp-content/themes/methode-agile/bio.php">Bio/son</a> -->

</div>

<section id="social"> <!-- Partie Réseaux Sociaux -->
    <div class="row text-center">
    	<div class="col-md-12">
    		<h2>News</h2>
    	</div>
       <div class="col-md-6">
       	<div class="petitmargebot">
        <h3>Rejoignez nous sur Facebook</h3>
            <?php
            echo do_shortcode("[custom-facebook-feed]");
            ?>
           </div>
        </div>
        <div class="col-md-6">
            <h3>Last Tweets</h3>
                <a class="twitter-timeline" data-width="600" data-height="700" data-theme="dark" data-link-color="#E81C4F" href="https://twitter.com/MartyrsTweets">Tweets by MartyrsTweets</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
</section>

<section id="contact">
		<div class="row">

			<h2 class="text-center">Contact</h2>
			<div class="text-right col-xs-4">
				<h3>Management</h3>
				<p><a href="#">Mike Milford</a> - <a href="#">Jamie Graham</a></p>
				<p>Modern Empire Management</p>
				<h3>Label</h3>
				<p>Sumerian Records</p>
				<img id="sumerian" src="<?php bloginfo('url'); ?>/wp-content/themes/methode-agile/img/sumerian.jpg" alt="Sumerian Records" />
			</div>
			<div class="col-xs-4 col-xs-offset-4">
				<h3>Booking</h3>
				<h4>North America & Mexico</h4>
				<p><a href="#">Mike Milford</a> | Modern Empire Management</p>
				<h4>Europe</h4>
				<p><a href="#">Marco Walzel</a> | Avocado Booking</p>
				<h4>France local promoter</h4>
				<p><a href="#">Romain Monerau</a> | The Link Prod</p>
				<h3>Press Relations</h3>
				<h4>FR</h4>
				<p><a href="#">Charles Provost</a> | HimMedia</p>
				<h4>UK / EN</h4>
				<p><a href="#">James Monteith</a> | Hold Tight !</p>
			</div>
		</div>
	</section>


<?php
	get_footer();
?>
