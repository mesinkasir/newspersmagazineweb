<?php 
$load['plugin'] = true;
include('inc/common.php');
login_cookie_check();

get_template('header', cl($SITENAME).' &raquo; '.i18n_r('SUPPORT') ); 

?>
	
<?php include('template/include-nav.php'); ?>

<div class="container">
	
	<div id="maincontent row">
		<div class="main col-12 col-md-12 p-3">
	
			<h3>Update Display Themes template</h3>
			<div class="row">
		<div class="main col-12 col-md-8 p-3 p-md-5">
			<p class="lead">
			Select menu and update your website themes now
			</p>
<p>
<a href="theme-edit.php?f=navbar.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Navbar</a><hr/>
<a href="welcome.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Welcome</a>
<a href="section1.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Section 1</a>
<hr/>
<a href="perstv.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Pers TV</a>
<a href="trending.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Trending</a>
<a href="connect.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Connect</a>
<a href="footer.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Footer</a><hr/>
<a href="theme-edit.php?f=widget%2Fseohtml.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Google HTML</a>
<a href="theme-edit.php?f=widget%2Fseoanalystic.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Google Analystic</a>
<a href="theme-edit.php?f=widget%2Fseoads.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Google Ads</a>
</p>
</div>
		<div class="main col-12 col-md-4 p-3 p-md-5">
<p>
If you need to make donation , you can send money using moneygram or western union on we local bank account 
<br/>
BANK CENTRAL ASIA<br/>
ACCOUNT NO : 0181884109<br/>
ACCOUNT NAME : SUCI CHANIFAH<br/>
IBAN/SWIFT CODE : CENAIDJA<br/>
<br/>your donation can be help we team to develope many open source project.
<!--Axcora have any open source code project ?? of course we have many open source project like CMS , POS point of sale and e-learn for school too. You can donwload it on we sourceforge or github repo pages.-->
</p>
<p>And thank you for using get axcora cms, and hapy codding !!</p>
</div></div>

		</div>
	</div>
	
</div>
<?php get_template('footer'); ?>
