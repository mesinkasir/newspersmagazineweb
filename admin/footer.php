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
	
			<h3>Update Footer area</h3>
			<div class="row">
		<div class="main col-12 col-md-8 p-3 p-md-5">
			<p class="lead">
			Select menu and update your website themes now
			</p>
			<h3>Footer AREA</h3>
<p>
<a href="theme-edit.php?f=widget%2Ffooter%2Fpagetitle1.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Page 1 Title</a>
<a href="theme-edit.php?f=widget%2Ffooter%2Fpageurl1.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Page 1 URL</a><hr/>
<a href="theme-edit.php?f=widget%2Ffooter%2Fpagetitle2.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Page 2 Title</a>
<a href="theme-edit.php?f=widget%2Ffooter%2Fpageurl2.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Page 2 URL</a><hr/>
<a href="theme-edit.php?f=widget%2Ffooter%2Fpagetitle3.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Page 3 Title</a>
<a href="theme-edit.php?f=widget%2Ffooter%2Fpageurl3.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Page 3 URL</a><hr/>
<a href="theme-edit.php?f=widget%2Ffooter%2Fpagetitle4.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Page 4 Title</a>
<a href="theme-edit.php?f=widget%2Ffooter%2Fpageurl4.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Page 4 URL</a>
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
