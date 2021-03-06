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
<div id="marvel_topnav_storyalert_wrapper">
	<div id="marvel_topnav_storyalert" class="open">
		<a href="www.fandango.com/infinitywar">Get Tickets to 'Avengers: Infinity War' Now!</a> 
    </div>
</div>
<div style="background-image:url(wol_wallpaper.jpg)">
<table align="center" bgcolor="white" style="margin-left:14%;margin-right:14%" width="72%" border="0">
	<tr>
		<td align="center" style="padding:40px">
			<font style="font-family:TradeGothic LT;font-weight: bold;color:#F0141E;font-size:20px">Comics</font><br>
			<b style="font-size:45px">THE HUNT FOR WOLVERINE BEGINS</b><br>
			<span style="color:#ababab;font-size:18px"><b>Published</b> <font style="font-family:Arial Narrow">Jan 19, 2018</font> <b>By</b> <font style="font-family:Arial Narrow">Tucker Chet Markus</font></span>
		</td>
	</tr>
	<tr>
		<td>
			<img src="HuntForWolverine_Cover-m-960x540.jpg" style="width=100%">
		</td>
	</tr>
	<tr>
		<td align="center" style="padding:40px">
			<b><i style="color:#333;font-size:35px">Charles Soule and David Marquez unravel the mystery<br>this April!</i></b><br>
		</td>
	</tr>
	<tr>
		<td align="left" style="font-family:Tempus Sans ITC;font-size:23px;padding:100px">
		<i>Snikt!</i>
		<br>
		<br>
		<br>
		The sound rings across the universe…and can only mean one thing: the return of Wolverine!
		<br>
		<br>
		<br>
		He’s been popping up in some of your favorite books lately; holding an Infinity Stone, keeping his secrets close. But his return has been an unsolved mystery—until this April, when writer <span style="color:#F0141E">Charles Soule</span> and artist <span style="color:#F0141E">David Marquez</span> reveal the timeline of events that’ll lead to Logan’s shocking return with THE HUNT FOR WOLVERINE: ALPHA #1!
		<br>
		<br>
		<br>
		The 40-page issue, featuring a cover by <span style="color:#F0141E">Steve McNiven</span>, begins the twisted tale of Logan’s reemergence. Then, this May, the story evolves into four different tales from different creative teams, each one containing its own distinct genre and mystery: action/adventure (Adamantium Agenda), horror (Claws of the Killer), dark romance (Mystery in Madripoor) and noir/detective (Weapon Lost.) And it’s all being orchestrated by the man that crafted the “Death of Wolverine” in the first place.
		<br>
		<br>
		<br>
		Soule recalls, “<span style="color:#F0141E">Steve McNiven</span> and I took on the incredible task of killing Wolverine back in 2014—it was one of my earliest projects at Marvel, and such a huge opportunity. Intimidating, tricky, all of that—but ultimately, I think we created a book (alongside [inker] <span style="color:#F0141E">Jay Leisten</span>, [colorist] <span style="color:#F0141E">Justin Ponsor</span> and [letterer] <span style="color:#F0141E">Chris Eliopolous)</span> that we’re all really proud of.” He continues, “There’s really only one project that could top it—being part of the story that brings Logan back! THE HUNT FOR WOLVERINE is just the opening chapters of a mystery that will reach all sorts of cool hidden corners of the Marvel Universe, and will tell a story that will hopefully have us looking at Logan in an entirely new way.”
		<br>
		<br>
		<br>
		“I’m really looking forward to seeing how fans start to put the pieces together,” says the scribe. “There’s a big payoff coming down the road, and all the interlocking parts of THE HUNT FOR WOLVERINE build to it. The more you read, the more clues you get. It’s really fun—especially since I have a bit of a reputation in X-continuity for knocking off beloved mutants. This time, it’s nice to be part of bringing someone back!”
		<br>
		<br>
		<br>
		THE HUNT FOR WOLVERINE: ALPHA #1 begins an epic story that will impact Marvel heroes and X-Men alike—and it culminates this summer in one of the most shocking, daring stories in Wolverine’s history! The journey—and the mystery—begins here, and you’re not going to want to miss your chance to take part in Wolverine’s return.
		<br>
		<br>
		<br>
		Writer Charles Soule and artist David Marquez’s THE HUNT FOR WOLVERINE: ALPHA #1 unfolds this April!
		</td>
	</tr>
</table>
<br>
<table align="center" bgcolor="white" style="margin-left:14%;margin-right:14%" width="72%" border="0">
	<tr>
		<td align="center" style="padding:40px">
			<font style="font-family:TradeGothic LT;font-weight: bold;color:#F0141E;font-size:20px">Gear & Toys</font><br>
			<b style="font-size:45px">NEW ANT-MAN AND THE WASP ACTION FIGURES AND ROLE PLAY MASKS COMING FROM HASBRO</b><br>
			<span style="color:#ababab;font-size:18px"><b>Published</b> <font style="font-family:Arial Narrow">Jan 31, 2018</font> <b>By</b> <font style="font-family:Arial Narrow">Eric Goldman</font></span>
		</td>
	</tr>
	<tr>
		<td>
			<center><img src="Wasp-Master.jpg" style="width=100%"></center>
		</td>
	</tr>
	<tr>
		<td align="center" style="padding:40px">
			<b><i style="color:#333;font-size:35px">Get a look at the new toys that are on the way<br>this spring!</i></b><br>
		</td>
	</tr>
	<tr>
		<td align="left" style="font-family:Tempus Sans ITC;font-size:23px;padding:100px">
		The countdown has begun for Marvel Studios’ “Ant-Man and the Wasp,” on the heels of the <a href="#ant-man&thewasp" style="text-decoration:none;color:red">exciting first trailer for the film debuting</a>, leading up to the film’s July 6 debut. As fans eagerly await that date, they’ll have the chance to pick up new Ant-Man and the Wasp toys from Hasbro.
		<br>
		<br>
		<br>
		Check out the gallery below to see some of the new action figures and role play items that will be released this spring, allowing fans to bring the adventures of Scott Lang and Hope van Dyne home with them!
		<br>
		<br>
		<br>
		</td>
	</tr>
	<tr>
		<td>
			<img src="ant-man.jpg" width="960px" height="960px">
			<br>
			<img src="wasp.jpg" width="960px" height="960px">
			<br>
		</td>
	</tr>
	<tr>
		<td align="left" style="font-family:Tempus Sans ITC;font-size:23px;padding:100px">
		The Ant-Man and the Wasp product line will be available at most major retailers and on HasbroToyShop.com.
		</td>
	</tr>
</table>
<br>
<table id="ant-man&thewasp" align="center" bgcolor="white" style="margin-left:14%;margin-right:14%" width="72%" border="0">
	<tr>
		<td align="center" style="padding:40px">
			<font style="font-family:TradeGothic LT;font-weight: bold;color:#F0141E;font-size:20px">Movies</font><br>
			<b style="font-size:45px">WATCH THE BRAND-NEW TRAILER FOR MARVEL STUDIOS' ANT-MAN AND THE WASP</b><br>
			<span style="color:#ababab;font-size:18px"><b>Published</b> <font style="font-family:Arial Narrow">Jan 30, 2018</font> <b>By</b> <font style="font-family:Arial Narrow">Christine Dinh</font></span>
		</td>
	</tr>
	<tr>
		<td>
			<iframe width="100%" height="275%" src="https://www.youtube.com/embed/8_rTIAOohas" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</td>
	</tr>
	<tr>
		<td align="center" style="padding:40px">
			<b><i style="color:#333;font-size:35px">In theaters July 6!</i></b><br>
		</td>
	</tr>
	<tr>
		<td align="left" style="font-family:Tempus Sans ITC;font-size:23px;padding:100px">
		Real heroes. Not actual size.
		<br>
		<br>
		<br>
		The first trailer for Marvel Studios’ “Ant-Man and the Wasp” has landed and we’ve got your first official look right here, True Believers! Check out the official trailer above and make sure to check out the film in theaters July 6!
		<br>
		<br>
		<br>
		If that isn’t enough for you, we’ve also got a brand new poster for “Ant-Man and the Wasp” as well!
		</td>
	</tr>
	<tr>
		<td align="center" valign="top">
			<img src="ant-man&thewasp.jpg" width="60%" height="60%">
			<br>
		</td>
	</tr>
	<tr>
		<td align="left" style="font-family:Tempus Sans ITC;font-size:23px;padding:100px">
		From the Marvel Cinematic Universe comes “Ant-Man and the Wasp,” a new chapter featuring heroes with the astonishing ability to shrink. In the aftermath of “Captain America: Civil War,” Scott Lang grapples with the consequences of his choices as both a Super Hero and a father. As he struggles to rebalance his home life with his responsibilities as Ant-Man, he’s confronted by Hope van Dyne and Dr. Hank Pym with an urgent new mission. Scott must once again put on the suit and learn to fight alongside the Wasp as the team works together to uncover secrets from the past.
		<br>
		<br>
		<br>
		Follow <span style="color:red">@AntMan</span> on Twitter and like <span style="color:red">Ant-Man</span> on Facebook for the latest on “Ant-Man and the Wasp,” in theaters July 6, and as always keep your eyes peeled to Marvel.com!
		</td>
	</tr>
</table>
<div align="center" bgcolor="white" style="background-color:white;margin-left:14%;margin-right:14%" width="72%">
		<button  class="button-default button-slanted" style="background-color:red;width:250;height:47;font-size:18">
				<div class="button-slanted-content" style="font-family:TradeGothic LT;font-weight: bold;;color:white">LOAD MORE NEWS!</div>
		</button><br>
<br>
</div>
</div>
<br>
<br>
<br>
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
