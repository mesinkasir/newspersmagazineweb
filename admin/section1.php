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
	
			<h3>Update Section 1 area</h3>
			<div class="row">
		<div class="main col-12 col-md-8 p-3 p-md-5">
			<p class="lead">
			Select menu and update your website themes now
			</p>
			<h3>NEW AREA</h3>
<p>
<a href="theme-edit.php?f=widget%2Fsection1%2Fnewtitle.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">New Title</a>
<a href="theme-edit.php?f=widget%2Fsection1%2Fnewpost.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">New Content</a>
<a href="theme-edit.php?f=widget%2Fsection1%2Fnewcover.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">New Cover</a>
<a href="theme-edit.php?f=widget%2Fsection1%2Fnewurl.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">New URL</a>
</p>
			<h3>TREND AREA</h3>
<p>
<a href="theme-edit.php?f=widget%2Fsection1%2Ftrendtitle.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Trend Title</a>
<a href="theme-edit.php?f=widget%2Fsection1%2Ftrendpost.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Trend Content</a>
<a href="theme-edit.php?f=widget%2Fsection1%2Ftrendcover.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Trend Cover</a>
<a href="theme-edit.php?f=widget%2Fsection1%2Ftrendurl.php&s=Edit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Trend URL</a>
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
