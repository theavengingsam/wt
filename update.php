<?php include('login.php');?>
<!DOCTYPE html>
<html>
<head>
<title>Marvel.com|register</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="body.css">
<link rel="stylesheet" type="text/css" href="reg-container.css">
<link rel="stylesheet" type="text/css" href="footernav-container.css">
<link rel="stylesheet" type="text/css" href="lower-footer.css">
<script src="updatejs.js"></script>

<style>
	#signupheader{
		width:940px;
		display:table;
		margin:auto;
		height:auto;
	}
	@media only screen and (max-width:939px) and (min-width: 0){
		#signupheader{
			width:100%;
		}
	}
</style>
<!----------------jquery----------->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="footerjq.js"></script>
<!----------------jquery ends----------->
</head>
<body>
<div style="height:20px;background-color:#222"></div>
<!--signupheader-->
<div id="signupheader">
	<a href="homepageresp.html"><img style="float:left" src="Marvel-logo.png" width="108" height="41" title="Home"></a>
</div>
<!--signupheader ends-->



<div id="reg-margin">
<div id="reg-container">
			<div align="center"  id="reg-image">
				<div align="center">
					<img src="mi-left-logo.png" title="Marvel Insider">
				</div>
			</div>
			<div id="reg-inputs">
				<div align="center" id="regcreateacc">
					Update Info
				</div>
		<!-----form------------------------->
		<form action="update.php" name="myForm"  onsubmit="return validateForm()" method="post">
				<div  class="inputbox" align="center">
					<input align="center" type="text" id="FirstName" value="<?php echo $_SESSION["fname"] ?>" name="FirstName" placeholder="  First Name" title="Enter First Name">
					<div id="fp"></div>
				</div>
				<div class="inputbox" align="center">
					<input align="center" type="text"  id="LastName" value="<?php echo $_SESSION["fname"] ?>"  name="LastName" placeholder="  Last Name" title="Enter Last Name" >
					<div id="lp"></div>
				</div>
				<div class="inputbox" align="center">
					<input align="center" type="text" id="EmailID" value="<?php echo $_SESSION["email"] ?>" name="EmailID" placeholder="  email@address.com" title="Enter EmailID" >
					<div id="ep"></div>
				</div>
				<div class="inputbox" align="center">
					<input align="center" type="text" id="nick" value="" name="nickname" placeholder="  nickname" title="Enter nickname" >
					<div id="np"></div>
				</div>
				<div class="inputbox" align="center">
					<input  align="center" type="radio" id="gender" value="Male" name="gender"  title="Select gender" >male
					<input  align="center" type="radio" id="gender" value="Female" name="gender"  title="Select gender" >female
					<input  align="center" type="radio" id="gender" value="Other" name="gender"  title="Select gender" >other
				</div>
				<div class="inputbox" align="center">
					<input align="center" type="text" id="title" value="" name="title" placeholder="  title" title="Enter EmailID" >
					<div id="tp"></div>
				</div>
				<div class="inputbox" align="center">
					<input align="center" type="text" id="favsup" value="" name="favorite_sup" placeholder="  favorite superhero" title="Enter EmailID" >
					<div id="favp"></div>
				</div>
				<div  id="regsubmit" align="center">
					<button align="center" type="submit" value="qwe" name="submit" class="button-default button-slanted" >
						<div class="button-slanted-content" style="font-family:TradeGothic LT;font-weight: bold;color:white">
								Update Account
						</div>
					</button>
				</div>
		</form>
		<!-----form ends------------------------->

				<div align="center" style="font-family:TradeGothic LT;font-weight: bold;color:#5f5b5b;font-size:15px">Already have an account? <a href="newsignupresp.php" style="color:#5f5b5b">Sign In</a></div>
			</div>
	</div>
</div>





<!--footernav container--->
<div style="background-color:black;">
	<div id="footernav-container">
                    					<div id="Comics" class="footernav">
                    						<div>Comics</div>
                    						<ul>
                    							<li class="link-item"><a href="http://marvel.com/comics/calendar/">Release Calendar</a></li>
                    							<li class="link-item"><a href="http://marvel.com/comics/unlimited/">Marvel Unlimited</a></li>
                    							<li class="link-item"><a href="http://marvel.com/redeem/">Redeem Digital Copy</a></li>
                    							<li class="link-item"><a href="http://comicstore.marvel.com">Shop Digital Comics</a></li>
                    							<li class="link-item"><a href="http://subscriptions.marvel.com/">Print Subscriptions</a></li>
                    							<li class="link-item"><a href="http://developer.marvel.com">Developer Portal</a></li>
                    						</ul>
                    					</div>
                    					<div id="Characters" class="footernav">
                    						<div>Characters</div>
                    						<ul>
                    							<li class="link-item"><a href="http://marvel.com/characters/54/spider-man">Spider-Man</a></li>
                    							<li class="link-item"><a href="http://marvel.com/characters/68/avengers">Avengers</a></li>
                    							<li class="link-item"><a href="http://marvel.com/characters/29/iron_man">Iron Man</a></li>
                    							<li class="link-item"><a href="http://marvel.com/characters/14/dr_strange">Doctor Strange</a></li>
                    							<li class="link-item"><a href="http://marvel.com/characters/8/captain_america">Captain America</a></li>
                    						</ul>
                    					</div>
                    					<div id="Kids" class="footernav">
                    						<div>Kids</div>
                    						<ul>
                    							<li class="link-item"><a href="http://www.marvelhq.com">Marvel HQ</a></li>
                    							<li class="link-item"><a href="http://www.marvelhq.com/games">Kids Games</a></li>
                    							<li class="link-item"><a href="http://www.marvelhq.com/videos">Kids Videos</a></li>
                    							<li class="link-item"><a href="http://www.marvelhq.com/activities">Kids Activities</a></li>
                    						</ul>
                    					</div>
                    					<div id="Marvel" class="footernav">
                    						<div>Marvel</div>
                    						<ul>
                    							<li class="link-item sign-up"><a href="https://marvel.com/register?referer=http%3A%2F%2Fmarvel.com%2F">Sign Up</a></li>
                    							<li class="link-item"><a href="http://marvel.com/creditcard?siteCode=MCLAMOFL&amp;cmpid=MCLAMOFL&amp;Dcom=MOLFOOTER">Marvel Mastercard<sup>®</sup></a></li>
                    							<li class="link-item"><a href="http://marvel.com/insider">Marvel Insider</a></li>
                    							<li class="link-item"><a href="http://marvel.com/help/"> Help/FAQs </a></li>
                    							<li class="link-item"><a href="http://marvel.com/preferences/email/">Email Preferences</a></li>
                    							<li class="link-item"><a href="http://marvel.com/corporate/about/">About Marvel</a></li>
                    							<li class="link-item"><a href="http://marvel.com/corporate/advertising/">Advertising</a></li>
                    							<li class="link-item"><a href="http://marvel.com/corporate/interns/">Internships</a></li>
                    							<li class="link-item"><a href="http://marvel.disneycareers.com/en/default/">Careers</a></li>
                    						</ul>
                    					</div>
                    					<div id="Insider" class="footernav">
                    						<div>Insider</div>
                    						<ul>
                    							<li class="link-item"><a href="http://marvel.com/insider">Join today</a></li>
                    							<li class="link-item"><a href="http://marvel.com/insider/home">Home</a></li>
                    							<li class="link-item"><a href="http://marvel.com/insider/activities">Activities</a></li>
                    							<li class="link-item"><a href="http://marvel.com/insider/rewards">Rewards</a></li>
                    							<li class="link-item"><a href="http://marvel.com/insider/profile">Member Profile</a></li>
                    							<li class="link-item"><a href="http://marvel.com/insider/faq">FAQs</a></li>
                    							<li class="link-item"><a href="http://marvel.com/corporate/insider_terms">Marvel Insider Terms of Use</a></li>
                    						</ul>
                    					</div>	
		<div style=";padding-bottom:25px">
			<a href="homepage.html"><img style="clear:both;display:block" src="Marvel-logo.png" width="150" height="70" title="Home"></a>
		</div>
	<!--lower footer--->
	<div id="lower-footer">
        <ul>
			<li class="legal-item"><a href="http://disneytermsofuse.com" target="_blank">Terms of Use</a></li>
			<li class="legal-item"><a href="https://disneyprivacycenter.com" target="_blank">Privacy Policy</a></li>
			<li class="legal-item"><a href="https://disneyprivacycenter.com/notice-to-california-residents" target="_blank">Your California Privacy Rights</a></li>
			<li class="legal-item"><a href="https://disneyprivacycenter.com/kids-privacy-policy/english/" target="_blank">Children’s Online Privacy Policy</a></li>
			<li class="legal-item"><a href="//marvel.com/corporate/license_tou" target="_blank">License Agreement</a></li>
			<li class="legal-item"><a href="http://preferences-mgr.truste.com/?pid=disney01&amp;aid=marvel01&amp;type=marvel" onclick="window.open('http://preferences-mgr.truste.com/?pid=disney01&amp;aid=marvel01&amp;type=marvel','popup','width=986,height=878,scrollbars=yes,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0'); return false">Interest-Based Ads</a></li>
			<li class="legal-item"><a href="//marvel.com/corporate/terms/" target="_blank">©2018 MARVEL</a></li>
		</ul>
    </div>
	<!--lower footer ends--->
</div>
</div>
<!--footernav container ends--->
</body>
</html>
