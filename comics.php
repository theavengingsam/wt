<?php include('login.php');?>
<!DOCTYPE html>
<html>
<head>
<title>Marvel.com: The Official Site | Iron Man, Spider-Man, Hulk, X-Men, Wolverine and the heroes of the Marvel Universe.Comics,  News, Movies and Video Games | Marvel.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="body.css">
<link rel="stylesheet" type="text/css" href="headernav.css">
<link rel="stylesheet" type="text/css" href="news_slideshow.css">
<link rel="stylesheet" type="text/css" href="trailer_container.css">
<link rel="stylesheet" type="text/css" href="comics-container1.css">
<link rel="stylesheet" type="text/css" href="footernav-container.css">
<link rel="stylesheet" type="text/css" href="lower-footer.css">
<script>
function openNav() {
    document.getElementById("Rmynavigate").style.width = "320px";
}

function closeNav() {
    document.getElementById("Rmynavigate").style.width = "0";
}
</script>
 <!----------------jquery----------->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="footerjq.js"></script>
<!----------------jquery ends----------->

</head>
<body>

<div style="height:20px;background-color:#222"></div>

<!--header-->
<div style="background-color:black;">
	<div class="header">
	    <a  href="homepageresp.html"><img id="marvel_logo" src="Marvel-logo.png" title="Home"></a>
	<div class="header_content">
		<div class="socialplatform">
			<a class="socialmedia" href="http://www.facebook.com/Marvel/"><img src="fb_logo.png" width="30" height="30" title="Facebook"></a>
			<a class="socialmedia" href="http://twitter.com/Marvel"><img src="twitter_logo.png" width="30" height="30" title="Twitter"></a>
			<a class="socialmedia" href="http://www.youtube.com/channel/UCvC4D8onUfXzvjTOM-dBfEA"><img src="youtube_logo.png" width="30" height="30" title="YouTube"></a>
			<div class="signin">
			<a  id="mastercard" title="mastercard" href="http://marvel.com/creditcard?siteCode=MCLAMONB&amp;cmpid=MCLAMONB&amp;Dcom=MOLNAV" >Marvel Mastercard<sup>®</sup></a>&nbsp;&nbsp;
			<a  id="insider" title="insider" href="http://marvel.com/insider?start_location=topnav" >Join Marvel Insider!</a>&nbsp;&nbsp;
			<?php if(!isset($_SESSION['success'])): ?>
					<a  id="signin" title="sign in" href="newsignupresp.php">SIGN IN</a>
			<?php endif?>
			<?php if(isset($_SESSION['success']) and isset($_SESSION['user'])): ?>
					<a  id="signin" style="text-transform: uppercase" title="" href="profile.php">
						HELLO 
						<?php 
							echo $_SESSION['user'];  
						?>
						!&nbsp;&nbsp;
					</a>
					<a  id="signin" title="" href="unset.php">
						LOGOUT
						
					</a>
			<?php endif?>
			</div>
		</div>
		<div class="navigator">
			<ul class="navigate">
				<li><a href="latestnews.php" >LATEST NEWS</a></li>
			    <li><a href="comics.php">COMICS</a></li>
				<li><a href="http://marvel.com/movies">MOVIES</a></li>
				<li><a href="http://marvel.com/videos">VIDEOS</a></li> 
				<li><a href="http://marvel.com/games">GAMES</a></li> 
				<li><a href="http://marvel.com/tv">TV</a></li>
				<li><a href="http://marvel.com/characters">CHARACTERS</a></li>
				<li><a href="http://shop.marvel.com/">SHOP</a></li>
				<li><a href="http://marvel.com/search" ><img src="search-icon.png" width="15" height="15" title="Search"></a></li>
			</ul>
		</div>
		<div id="nav" onclick="openNav()">&#9776;</div>
	</div>
	</div>
</div>
<div align="center" style="background-color:#ffffff;color:white;padding:10px">
	<a href="comics.html" style="text-decoration:none;color:#5c5c5c;font-size:20px;font-family:TradeGothic LT;font-weight: bold;">Comics</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="color:#000000;font-size:18px;font-family:TradeGothic LT;font-weight: bold;">Browse</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="https://marvel.com/comics/discover/" style="text-decoration:none;color:#000000;font-size:18px;font-family:TradeGothic LT;font-weight: bold;">Discover</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="https://marvel.com/comics/calendar" style="text-decoration:none;color:#000000;font-size:18px;font-family:TradeGothic LT;font-weight: bold;">On-Sale</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="https://marvel.com/comics/unlimited" style="text-decoration:none;color:#000000;font-size:18px;font-family:TradeGothic LT;font-weight: bold;">Marvel Unlimited</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="https://comicstore.marvel.com/" style="text-decoration:none;color:#000000;font-size:18px;font-family:TradeGothic LT;font-weight: bold;">Shop Digital Comics</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="https://subscriptions.marvel.com/Default.asp" style="text-decoration:none;color:#000000;font-size:18px;font-family:TradeGothic LT;font-weight: bold;">Print Subs</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="https://marvel.com/comics/events/327/star_wars" style="text-decoration:none;color:#000000;font-size:18px;font-family:TradeGothic LT;font-weight: bold;">Star Wars</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="https://news.marvel.com/comics/83700/despicable-deadpool-kickin-buckets/" style="text-decoration:none;color:#000000;font-size:18px;font-family:TradeGothic LT;font-weight: bold;">Comic News</a>
	
</div>

<br>

<div width="100%" style="background-color:white">
<br>
<br>
<br>
<br>
<br>
<br>

	<span style="color:black;font-size:37px;font-weight:bold;font-family:TradeGothic LT;padding-left:100px;padding-top:70px">NEW COMICS</span>
	<br>
	<br>
	<table style="margin-left:100px;font-weight:bold;">
	<tr>
		<td>
			<img src="portrait_incredible.jpg" class="comics"><br>
			<b>X-Men: Blue Annual #1</b><br>
			<span class="author">Bunn, Arteaga<span>
		</td>
		<td>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
		<td>
			<img src="portrait_incredible(12).jpg" class="comics"><br>
			<b>X-Men: Blue #20</b><br>
			<span class="author">Bunn, Silva<span>
		</td>
		<td>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
		<td>
			<img src="portrait_incredible(6).jpg" class="comics"><br>
			<b>GenerationX #13</b><br>
			<span class="author">Soule, Unzueta<span>
		</td>
		<td>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
		<td>
			<img src="portrait_incredible(5).jpg" class="comics"><br>
			<b>Thor #30</b><br>
			<span class="author">Rosenberg, Rosanas<span>
		</td>
		<td>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
		<td>
			<img src="portrait_incredible(4).jpg" class="comics"><br>
			<b>The Spectacular Spider-Man #35</b><br>
			<span class="author">Zdarsky, Cheung<span>
		</td>
	</tr>
	</table>
	<br>
	<br>
	<br>
	
</div>
<div width="100%" style="background-color:white;font-family:TradeGothic LT;font-weight: bold;">
<br>
<br>
<br>

	<span style="color:black;font-size:37px;padding-left:100px;padding-top:70px">BEST SELLING DIGITAL COMICS<left></span>
	<br>
	<br>
	<table style="margin-left:100px;font-weight:bold;">
	<tr>
		<td>
			<a href="daredevil.html" style="text-decoration:none;color:black"><img src="daredevil.jpg" class="comics"><br>
			Daredevil #3</a><br>
			<span style="color:grey;font-weight:bold;">West, Quesada<span>
		</td>
		<td>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
		<td>
			<img src="Hawkeye & Mockingbird Ghosts (Trade Paperback).jpg" class="comics"><br>
			Hawkeye & Mockingbird: Ghosts<br>(Trade Paperback)<br>
		</td>
		<td>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
		<td>
			<img src="Black Widow.jpg" class="comics"><br>
			Black Widow #1<br>
			<span style="color:grey;font-weight:bold;">Edmondson, Noto<span>
		</td>
		<td>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
		<td>
			<img src="Ultimate Comics Spider-Man.jpg" class="comics"><br>
			Ultimate Comics Spider-Man #5<br>
			<span style="color:grey;font-weight:bold;">Bendis<span>
		</td>
		<td>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
		<td>
			<img src="Marvel Knights Spider-Man Vol.jpg" class="comics"><br>
			Marvel Knights Spider-Man Vol. 2<br>: Venomous (Trade Paperback)<br>
			
		</td>
	</tr>
	</table>
	<br>
	<br>
	<br>
	<br>
<br>
<br>
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
