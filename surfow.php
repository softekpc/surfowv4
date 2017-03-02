<?php
if($_GET["error"]=="config")
{
    header("location: ".$_SERVER["PHP_SELF"]."?error=configuration#installation");
}
else if($_GET["error"]=="configuration")
{
    //
}
if($_GET["error"]=="connect")
{
    header("location: ".$_SERVER["PHP_SELF"]."?error=installation#installation");
}
else if($_GET["error"]=="installation")
{
    //
}
else if($_GET["error"]=="phpversion")
{
    header("location: ".$_SERVER["PHP_SELF"]."?error=php#installation");
}
else if($_GET["error"]=="php")
{
    //
}
else if($_GET["error"]!="connect" or $_GET["error"]!="installation")
{
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Surfow - Traffic exchange system</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="uploads/docs/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="uploads/docs/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="uploads/docs/assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="uploads/docs/assets/css/ie9.css" /><![endif]-->
	</head>
	<body style="background: url(uploads/docs/images/banner.jpg);background-color: #282A27; background-repeat: no-repeat;  background-size: 100% 300%; background-attachment: fixed;" >
    <div class="top">
        <div id="logo">
		<h1 id="title">SURFOW</h1>
		<p>Traffic Exchange System</p>               
		</div>
    </div>
    <h1 style="color: #fff; text-align: center; font-size: 4em;" >SURFOW</h1>
    <p style="color: #fff; text-align: center; font-size: 0.75em;" >Developed By : <a target="_blank" href="http://codecanyon.net/user/hassanazy" >Hassan Azzi</a> </p>
    <ul class="copyright">
		<li> <center> -- Version V4.0 -- </center></li>
	</ul>
    </body>
</html>
<?php
exit();
}

?><!DOCTYPE HTML>
<html>
	<head>
		<title>Surfow - Traffic exchange system</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="uploads/docs/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="uploads/docs/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="uploads/docs/assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="uploads/docs/assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
			<div id="header">

				<div class="top">

						<div id="logo">
							<span class="image avatar48"><img src="uploads/docs/images/avatar.png" alt="" /></span>
							<h1 id="title">SURFOW</h1>
							<p>Traffic Exchange System</p>
                            
						</div>

						<nav id="nav">
							<ul>
								<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Intro</span></a></li>
								<li><a href="#features" id="features-link" class="skel-layers-ignoreHref"><span class="icon fa-list">Features</span></a></li>
								<li><a href="#installation" id="installation-link" class="skel-layers-ignoreHref"><span class="icon fa-gear">Installation</span></a></li>
								<li><a href="#faq" id="faq-link" class="skel-layers-ignoreHref"><span class="icon fa-support">FAQ</span></a></li>
                                <li><a href="#license" id="license-link" class="skel-layers-ignoreHref"><span class="icon fa-copyright">License</span></a></li>
                            </ul>
						</nav>

				</div>

				<div class="bottom">
						<ul class="icons">
                            <li><a style="width: auto;" target="_blank" href="http://codecanyon.net/user/hassanazy" class="icon fa-code"><span class="label">Developer</span></a></li>
                            <li><a href="mailto:devknown@gmail.com" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>
                        <p style="text-align: center; color: #fff; font-size: 0.6em;">Hassan Azzi &copy; 2016</p>
				</div>

			</div>

			<div id="main">

					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt">SURFOW V4.0</h2>
								<p>Traffic Exchange System</p>
							</header>

							<footer>
								<a href="#features" class="button scrolly">Features</a>
							</footer>

						</div>
					</section>

<section style="text-align: left !important;" id="features" class="two">
						<div class="container">

							<header style="text-align: center;" >
								<h2>Features</h2>
							</header>
			<p>
			<strong>Surfow</strong>
			is a smart system for traffic exchange, using autosurf function and anonymous traffic function and referral program,
			fully customizable administration panel and user interface,	fast and secure, integrated with Paypal, Payza and Stripe,
			fully translatable comes with 14 languages included ,
			responsive and clean template,
			honestly i can't stop telling more about surfow, but you should see the demo version at <a target="_blank" href="http://surfow.info" >http://surfow.info</a> .
			</p>
			<div style="clear:both;" ></div>
            <strong>New Features: added in V3.0 & V4.0</strong>
			<ul class="listed">
				<li><strong>Newsletters:</strong> Adding newsletters system</li>
                <li><strong>Browsing:</strong> Get Back to the normal browsing using the browser as in V1.0</li>
                <li><strong>Browsing:</strong> The posibility to browsing without login</li>
                <li><strong>Browsing:</strong> The posibility to Run Multiple sessions at the same browser</li>
                <li><strong>Geotargeting:</strong> Adding the Geotargeting function</li>
                <li><strong>Template:</strong> Adding a new template included for FREE</li>
                <li><strong>Authentication:</strong> Adding Social Authentication (Facebook/Twitter/Google)</li>
                <li><strong>Ads:</strong> The posibility to Embed ads</li>
                <li>
                    <strong>Admin:</strong> New features >>
                    <ul>
                        <li><strong>SEO:</strong> The posibility to edit/control SEO settings easly</li>
                        <li><strong>Analyse:</strong> The posibility to embed google anaylse code from admin</li>
                        <li><strong>Ads:</strong> Control ads easly from admin</li>
                        <li><strong>Newsletters:</strong> Newsletters system (Mail function/SMTP)</li>
                        <li><strong>Users:</strong> new features
                            <ul>
                                <li>Now you can add users from admin</li>
                                <li>Now you can Upgrade user from admin</li>
                            </ul>
                        </li>
                        <li><strong>Search:</strong> Adding a smart search to admin panel</li>
                        <li><strong>Websites:</strong> Adding a new section for Websites need confirmation</li>
                    </ul>
                </li>
            </ul>
			<div style="clear:both;" ></div>
			<strong>New Features: added in V2.0</strong>
			<ul class="listed">
				<li><strong>Payment:</strong> Adding Stripe Payment, Adding Payment using earned funds</li>
				<li><strong>Referrals:</strong> Improve the referrals program (affiliates), now users can make money by get referrals</li>
				<li><strong>Browsing:</strong> Adding the traffic source (custom referer) option</li>
				<li><strong>Browsing:</strong> Adding the (NewTab window) to the (PopUp window) you can choose what you want</li>
				<li><strong>Browsing:</strong> Adding unlimited control to min & max visit duration</li>
				<li><strong>Browsing:</strong> Adding possibillity to require the focus on the exchange window</li>
				<li><strong>Template:</strong> Now you can add your logo or text </li>
				<li><strong>Extensions:</strong> Generate a custom browser extensions for your website</li>
				<li><strong>Withdrawal:</strong> Users can withdrawals all funds </li>
				<li><strong>Admin panel:</strong> adding a page containing latest websites who need confirmation </li>
				<li><strong>Plans:</strong> adding the possibility to add a custom duration for each upgrade plan </li>
				<li><strong>Plans design:</strong> adding a new design to the Plans </li>
				<li><strong>And More...</strong></li>
			</ul>
			<div style="clear:both;" ></div>
            <strong>Features:</strong>
			<ul class="listed">
				<li><strong>Login: </strong>Secured ajax login form</li>
				<li><strong>Resend confirmation: </strong>Ajax Resend confirmation form Secured by Recaptcha</li>
				<li><strong>Password Reset: </strong>Ajax resting password form Secured by Recaptcha</li>
				<li><strong>Signup: </strong>Secured ajax signup form
					<ul class="listed">
						<li>Email activation (you can disable it from admin panel)</li>
					</ul>
				</li>
				<li><strong>How it work: </strong>a page explain how the traffic exchange work</li>
				<li><strong>Contact page: </strong>a ready contact page included (All messages sent to email site)</li>
				<li><strong>Languages: </strong>14 language included, & guest/user can switch to any language
					<ul class="listed">
						<li>Fully translatable </li>
					</ul>
				</li>
				<li><strong>Dashboard: </strong>A <font color="green" >Real time</font> Statistics</li>
				<li>
				<strong>Browsing: </strong>Automatic Browsing function for traffic exchange
					<ul class="listed">
						<li>Send anonymous traffic (no referer - no iframe)</li>
						<li>Users can start a multiple sessions</li>
						<li>Users can add a limited sessions (you can add an upgrade plan for more sessions)</li>
						<li>Users will get a ratio from earned points for each traffic exchange (and the system will get the rest)</li>
					</ul>
				</li>
				<li>
				<strong>Websites: </strong>User can <font color="red">(Add/Edit/Delete/Start/Stop)</font> website
					<ul class="listed">
						<li>Users can set a visit duration for each website</li>
						<li>Users can set a max visitors per hour for each website</li>
						<li>Users can set a limited visitors for each website</li>
						<li>Users can add a limited websites (you can add an upgrade plan for more websites)</li>
					</ul>
				</li>
				<li><strong>Referrals: </strong>An automatic referrals program (it can be automatic confirm or manual you can control it from admin panel)</li>
				<li>
				<strong>Payments: </strong>User can see all payments
					<ul class="listed">
						<li>Support multiple currencies</li>
						<li>Integrated with <font color="blue">Paypal</font> and <font color="green">Payza</font> and <font color="black">Stripe</font></li>
						<li>You can sell Traffic to users (<font color="red">automatic</font>) (using <font color="blue">Paypal</font> & <font color="green">Payza</font> & <font color="black">Stripe</font>)</li>
						<li>You can sell Extra website/session slots to users (<font color="red">automatic</font>) (using <font color="blue">Paypal</font> & <font color="green">Payza</font> & <font color="black">Stripe</font>)</li>
						<li>Users can Upgrade their accounts (<font color="red">automatic</font>) (using <font color="blue">Paypal</font> & <font color="green">Payza</font> & <font color="black">Stripe</font>)</li>
					</ul>
				</li>
				
				<li><strong>Fully Responsive: </strong> (user interface / administration panel )</li>
				<li><strong>Fully Responsive: </strong> (contact, privacy, TOS, about us)</li>
				<li><strong>Security: </strong>The possibility of changing the <b>http</b> protocol to <b>https</b> (to use <b>https</b> as default in all system work)</li>
				<li>And so much More...</li>
			</ul>
			<div style="clear:both;" ></div>
            <strong>Admin Features:</strong>
			<ul class="listed">
				<li><strong>Dashboard: </strong>Statistics of everything in <font color="green" >Real time</font></li>
				<li><strong>settings:</strong> Allows you to edit Generale,Mail,Payment,default values & Social settings</li>
				<li><strong>Users:</strong> Allows you to manage registered users, edit information and delete users. </li>
				<li><strong>Payments:</strong> Allows you to manage Payment, edit information and confirm pending payments. </li>
				<li><strong>Plans:</strong> Allows you to manage Plans, Add new plan or edit plan information </li>
				<li><strong>Pages:</strong> Allows you to edit (privacy, TOS, about us) </li>
				<li><strong>Support:</strong> it will help you to setup your website and getting ready </li>
				<li><strong>Security:</strong> The possibility of changing the admin panel path</li>
				<li>And so much More...</li>
			</ul>
            </div>
</section>

					<section id="installation" style="text-align: left !important;" class="three">
						<div class="container">

							<header style="text-align: center !important;">
								<h2>Installation</h2>
							</header>
                            <?php if($_GET["error"]=="installation") { ?>
                            <div style="color: white; background: red; width: 100%; min-height: 50px; height: auto; padding: 5px; border: 2px solid; border-color: #FF4040; text-align: center;" >
                            Error to connect Database - Please check the config file
                            <br>
                            or maybe you need to complete the installation and try again
                            </div>
                            <?php } ?>
                            <?php if($_GET["error"]=="php") { ?>
                            <div style="color: white; background: red; width: 100%; min-height: 50px; height: auto; padding: 5px; border: 2px solid; border-color: #FF4040; text-align: center;" >
                            You've an old PHP version (PHP <?php echo phpversion(); ?>)<br>
                            <b style='color: black;' >Surfow</b> need PHP 5.4 or later
                            </div>
                            <?php } ?>
                            <?php if($_GET["error"]=="configuration") { ?>
                            <div style="color: white; background: red; width: 100%; min-height: 50px; height: auto; padding: 5px; border: 2px solid; border-color: #FF4040; text-align: center;" >
                            you probably did something wrong in config file<br>
                            please reupload the origin config file <b>"config.php"</b> & check from <b>php syntax </b>
                            </div>
                            <?php } ?>
                            <p>
                                To install <strong>SURFOW</strong> on your web server or hosting, make sure it meets these minimum requirements:
                            </p>
                            <ul  class="listed">
                                <li>PHP <strong>5.4</strong> or higher</li>
                                <li>Mod_Rewrite Module Enabled</li>
                                <li>PDO or MYSQLI installed</li>
                            </ul>
                            <hr>
                            <p><b style="color: #079400;">For New Installation</b></p>
                            <ul class="listed" >
                                <li><font color="red" >Unpack</font> the archive and <font color="red" >upload</font> "upload.zip" to your web server and extract it. </li>
                                <li><font color="red" >Create</font> a new database from your CPanel or phpmyadmin</li>
                                <li><font color="red" >open</font> the following file located inside the 'config/' folder: <strong>config.php</strong>.
                                you should have something like this: 
                                <pre style="border: 2px solid; border-color: #333;" >
                                
        // DATABASE SETTINGS
        $GLOBALS["_SETTINGS"]["DB"]["HOST"]  = "localhost";
        $GLOBALS["_SETTINGS"]["DB"]["USER"]  = "root";
        $GLOBALS["_SETTINGS"]["DB"]["NAME"]  = "exchange";
        $GLOBALS["_SETTINGS"]["DB"]["PASS"]  = "mysql";
        // AUTRE
        $GLOBALS["_SETTINGS"]["DB"]["CLASS"] = "pdo"; // PDO - MYSQLI
        $GLOBALS["_SETTINGS"]["ADMINPATH"]   = "control";
        $GLOBALS["_SETTINGS"]["KEY"]         = "a45fJpB3ZEBn8yNqa45fJpB1";
        $GLOBALS["_SETTINGS"]["PROTOCOL"]    = "http";
                                </pre>
                                - Now <font color="red" >replace</font> the DATABASE SETTINGS with your MySQL settings<br>
                                - And <font color="red" >replace</font> "control" with your admin panel path (you can set anything Ex: "mysecretadmin" so your admin will be <strong>http://your-domain.com/mysecretadmin</strong>)<br>
                                - And Generate your private key - the key should contains <font color="red" ><strong>24 characters exactly</strong></font><br>
                                - And <font color="red" >replace</font> "a45fJpB3ZEBn8yNqa45fJpB1" with your private key ,  this key <strong>cannot</strong> be changed after this time</font><br>
                                - keep <strong>http</strong> if you don't want to use <strong>https</strong> <br></br>
                                <font color="red" >save</font> and exit.
                                </li>
                                <li><font color="red" >Go</font> to <strong>http://your-domain.com/install.php</strong> and create your admin account & login</li>
                                <li><font color="red" >Go</font> to <strong>Settings</strong> section and set your public,private <strong>reCAPTCHA keys</strong> and <strong>Payment</strong> settings</li>
                                <li><font>Now Enjoy SURFOW <i class="fa fa-smile-o"></i></li>
                            </ul>
                            <hr>
                            <p><b style="color: #079400;">For Updating from V1.0 , V2.0 or V3.0 to <strong style="color:#226DFF;" >V4.0</strong></b></p>
                            <ul class="listed" >
                                <li><font color="red" >Unpack</font> the archive and <font color="red" >upload</font> "update.zip" to your web server and extract it (overwrite all). </li>
                                <li><font color="red" >Go</font> to <strong>http://your-domain.com/update.php</strong> & Login to your admin to explore new settings</li>
                                <li><font>That's it <i class="fa fa-smile-o"></i></li>
                            </ul>
						</div>
					</section>

					<section id="faq" class="four">
						<div class="container">

							<header>
								<h2>FAQ</h2>
							</header>

							<p>Thank you for purchasing Surfow. If you have any questions that are beyond the scope of this help file, please feel free to email me. </p>

                            <ul>
                                <li>
                                    <div>
                                        <p>
                                            <strong>How can i customize the default theme?</strong>
                                        </p>
                                        <div>
                                            The template files are located in <strong>/themes/user/default/</strong> folder, feel free to customize them.
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <div>
                                        <p>
                                            <strong>How can i customize the new theme?</strong>
                                        </p>
                                        <div>
                                            The new template files are located in <strong>/themes/user/surfow/</strong> folder, feel free to customize them.
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <div>
                                        <p>
                                            <strong>If i want a custom modification, are you available to do it for me ?</strong>
                                        </p>
                                        <div>
                                            Yes i'm available, <strong>Mail me at devknown@gmail.com </strong>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <div>
                                        <p>
                                            <strong>I have problems/questions related to the script, how can i contact you?</strong>
                                        </p>
                                        <div>
                                            You can contact me via email: 
                                            <a href="mailto:devknown@gmail.com?subject=SURFOW%20Help">devknown@gmail.com</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>

						</div>
					</section>
                    <hr>
					<section id="license" class="four">
						<div class="container">

							<header>
								<h2>License</h2>
							</header>

							<p> <strong>Do not</strong> modify and resell/redistribute. You may edit the script for personal use only. </p>
                            <br>

						</div>
					</section>
                    
			</div>

		<!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; 2016 All rights reserved.</li><li> Developer: <a href="http://codecanyon.net/user/hassanazy" >Hassan Azzi</a> - Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

			</div>

		<!-- Scripts -->
			<script src="uploads/docs/assets/js/jquery.min.js"></script>
			<script src="uploads/docs/assets/js/jquery.scrolly.min.js"></script>
			<script src="uploads/docs/assets/js/jquery.scrollzer.min.js"></script>
			<script src="uploads/docs/assets/js/skel.min.js"></script>
			<script src="uploads/docs/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="uploads/docs/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="uploads/docs/assets/js/main.js"></script>

	</body>
</html>