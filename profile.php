<?php include('login.php');?>
<html>
<head>
<title>Marvel.com: The Official Site | Iron Man, Spider-Man, Hulk, X-Men, Wolverine and the heroes of the Marvel Universe.Comics,  News, Movies and Video Games | Marvel.com</title>
</head>
<style>
.button-default {
  color: white;
  background-color: #3e5a99;
  text-align: center;
  text-transform: uppercase;
  padding: 5px 10px;
  margin: 10px;
  border:0;
  cursor:pointer;
  <!--display: inline-block;-->
}

.button-slanted {
  -ms-transform: skewX(-20deg);
  -webkit-transform: skewX(-20deg);
  transform: skewX(-20deg);
}

.button-slanted-content {
  -ms-transform: skewX(20deg);
  -webkit-transform: skewX(20deg);
  transform: skewX(20deg);  
  font-weight: bold;
  font-family:TradeGothic LT;
  <!--display: inline-block;-->
}
a.navigate
		{
			font-weight: bold;
			text-decoration:none;
			color:#b5b5b5;
			font-family:TradeGothic LT;
		}
	img.comics
	{
		border-color:#bababa;
		border-top-width:1px;
		border-left-width:1px;
		border-bottom-width:5px;
		border-right-width:5px;
		border-style:solid;
		width:168;
		height:252;
	}
	span.author
	{
		color:grey;
		font-weight:bold;
	}
	a.lowernavigate
		{
		text-decoration:none;
		color:#929292;
		}
</style>
<body bgcolor="#232222" style="font-family:TradeGothic LT;font-weight: bold;">
<br>
<div style="background-color:black;color:white">
<table align="center"  style="color:white" >
<tr>
    <td rowspan="2"><a href="homepage.html"><img src="Marvel-logo.png" width="204" height="75.9" title="Home"></a></td>
    <td><a href="http://www.facebook.com/Marvel/"><img src="fb_logo.png" width="30" height="30" title="Facebook"></a>
    <a href="http://twitter.com/Marvel"><img src="twitter_logo.png" width="30" height="30" title="Twitter"></a>
    <a href="http://www.youtube.com/channel/UCvC4D8onUfXzvjTOM-dBfEA"><img src="youtube_logo.png" width="30" height="30" title="YouTube"></a>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
	<td align="right">
	<a  title="mastercard" href="http://marvel.com/creditcard?siteCode=MCLAMONB&amp;cmpid=MCLAMONB&amp;Dcom=MOLNAV" style="text-decoration:none;"><font style="color:white;font-family:Arial Narrow;font-size:18px">Marvel Mastercard<sup>®</sup></font></a>&nbsp;&nbsp;
	<a  title="insider" href="http://marvel.com/insider?start_location=topnav" style="text-decoration:none;"><font style="color:white;font-family:TradeGothic LT;font-weight: bold;">Join Marvel Insider!</font></a>&nbsp;&nbsp;
	<a  title="sign in" href="profile.php" style="text-transform: uppercase;text-decoration:none;color:#f0141e;font-family:TradeGothic LT;font-weight: bold;">
	HELLO 
	<?php 
		echo $_SESSION['user'];  
	?>!
	</a>&nbsp;&nbsp;
	<a  title="sign out" href="unset.php" style="text-decoration:none;color:#f0141e;font-family:TradeGothic LT;font-weight: bold;">LOGOUT</a>

	</td>
  </tr>
  <tr>
    <td colspan="2">
	<font style="color:white;font-family:TradeGothic LT;font-weight: bold;"><b>&nbsp;
	<a href="latestnews.html" class="navigate">LATEST NEWS</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="comics.html" class="navigate">COMICS</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="http://marvel.com/movies" class="navigate">MOVIES</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="http://marvel.com/videos" class="navigate">VIDEOS</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="http://marvel.com/games" class="navigate">GAMES</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="http://marvel.com/tv" class="navigate">TV</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="http://marvel.com/characters" class="navigate">CHARACTERS</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="http://shop.marvel.com/" class="navigate">SHOP</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="http://marvel.com/search" ><img src="search-icon.png" width="15" height="15" title="Search"></a>
	</b></font>
	</td>
  </tr>
</table>
</div>
<div width="100%" height="100%" style="background-image:url(profilebg.jpg);height:201;border-style:outset">
	<div style="margin:50;">
		<table cellpadding="10">
		<tr>
			<td>
				<img src="marvel_insider.png" width="229px" height="101px" >
			</td>
			<td>
				<img src="dp.jpg" width="76" height="76" style="border-radius:50%">
			</td>
			<td>
				<font style="font-family:'Impact';font-size:35px;color:white;text-shadow: -5px 5px 2px #A9A9A9;">
				<i>
				Welcome Agent 
				<?php 
							echo $_SESSION['user'];  
				?> 
				</i>
				</font>
			</td>
		</tr>
		</table>
	</div>
</div>
<div width="100%" style="background-color:white">
	<div STYLE="font-size:37;margin-left:100;padding-top:70">
		MEMBER PROFILE
	</div>
	<br>
	<table style="font-family:TradeGothic LT;font-weight: bold;color:black;padding-left:100px;width:700;border:1">
		<tr>
			<td>
				<b>Name<b>
			</td>
			<td style="font-weight:normal;font-family:Arial Narrow">
				<?php echo $_SESSION['fname'] ?> <?php echo $_SESSION['lname'] ?>
			</td>
			<td style="align:left">
				<a style="text-decoration:none;color:black" href="update.php">Edit</a>
			</td>
		</tr>
		<tr>
			<td>
				<b>Nickname<b>
			</td>
			<td style="font-weight:normal;font-family:Arial Narrow">
				<?php echo $_SESSION['fname'] ?> 
			</td>
			<td style="align:left">
				<a style="text-decoration:none;color:black" href="update.php">Edit</a>
			</td>
		</tr>
		<tr>
			<td>
				<b>EmailID<b>
			</td>
			<td style="font-weight:normal;font-family:Arial Narrow">
				<?php echo $_SESSION['emailid'] ?>
			</td>
			<td style="align:left">
				<a style="text-decoration:none;color:black" href="update.php">Edit</a>
			</td>
		</tr>
		<tr>
			<td>
				<b>Date of Birth<b>
			</td>
			<td style="font-weight:normal;font-family:Arial Narrow">
				08/11/1997
			</td>
			<td style="align:left">
				<a style="text-decoration:none;color:black" href="update.php">Edit</a>
			</td>
		</tr>
		<tr>
			<td>
				<b>Gender<b>
			</td>
			<td style="font-weight:normal;font-family:Arial Narrow">
				Male
			</td>
			<td style="align:left">
				<a style="text-decoration:none;color:black" href="update.php">Edit</a>
			</td>
		</tr>
		<tr>
			<td>
				<b>Favourite Superhero<b>
			</td>
			<td style="font-weight:normal;font-family:Arial Narrow">
				Captain America
			</td>
			<td style="align:left">
				<a style="text-decoration:none;color:black" href="update.php">Edit</a>
			</td>
		</tr>
		<tr>
			<td>
				<b>Title Selected<b>
			</td>
			<td style="font-weight:normal;font-family:Arial Narrow">
				Agent
			</td>
			<td style="align:left">
				<a style="text-decoration:none;color:black" href="update.php">Edit</a>
			</td>
		</tr>
	</table>
</div>
<div width="100%" style="background-color:white">
<br>
<br>
<br>
<br>

	<span style="color:black;font-size:37px;padding-left:100px;padding-top:70px">YOUR WISHLIST</span>
	<br>
	<br>
	<table style="margin-left:100px;font-family:TradeGothic LT;font-weight:bold">
	<tr>
		<td>
			<img src="portrait_incredible.jpg" class="comics"><br>
			X-Men: Blue Annual #1<br>
			<span class="author">Bunn, Arteaga<span>
		</td>
		<td>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
		<td>
			<img src="portrait_incredible(12).jpg" class="comics"><br>
			X-Men: Blue #20<br>
			<span class="author">Bunn, Silva<span>
		</td>
		<td>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
		<td>
			<img src="portrait_incredible(6).jpg" class="comics"><br>
			GenerationX #13<br>
			<span class="author">Soule, Unzueta<span>
		</td>
		<td>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
		<td>
			<img src="portrait_incredible(5).jpg" class="comics"><br>
			Thor #30<br>
			<span class="author">Rosenberg, Rosanas<span>
		</td>
		<td>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
		<td>
			<img src="portrait_incredible(4).jpg" class="comics"><br>
			The Spectacular Spider-Man #35<br>
			<span class="author">Zdarsky, Cheung<span>
		</td>
	</tr>
	</table>
	<br>
	<br>
	<br>
	<table style="margin-left:100px;font-family:TradeGothic LT;font-weight:bold">
	<tr>
		<td>
			<a href="daredevil.html" style="text-decoration:none;color:black"><img src="daredevil.jpg" class="comics"><br>
			Daredevil #3</a><br>
			<span class="author">West, Quesada<span>
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
			<span class="author">Edmondson, Noto<span>
		</td>
		<td>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
		<td>
			<img src="Ultimate Comics Spider-Man.jpg" class="comics"><br>
			Ultimate Comics Spider-Man #5<br>
			<span class="author">Bendis<span>
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
</div>

<div style="background-color:black;line-height:450px:padding-left:1000px;padding-bottom:20px;font-family:Arial Narrow" width="100%">
<table  width="80%" style="padding-left:250px;padding-top:100px;padding-bottom:100px" cellpadding="2px">
	<tr align="left" style="font-family:TradeGothic LT;font-weight: bold;;color:white">
		<th>
			COMICS
		</th>
		<th>
			CHARACTERS
		</th>
		<th>
			KIDS
		</th>
		<th>
			MARVEL
		</th>
		<th>
			INSIDER
		</th>
	</tr>
	<tr>
		<td>
			<a href="http://marvel.com/comics/calendar/" class="lowernavigate">Release Calendar</a>
		</td>
		<td>
			<a href="http://marvel.com/characters/54/spider-man" class="lowernavigate">Spider-Man</a>
		</td>
		<td>
			<a href="http://www.marvelhq.com/" class="lowernavigate">Marvel HQ</a>
		</td>
		<td>
			<a href="signup.html" class="lowernavigate">Sign Up</a>
		</td>
		<td>
			<a href="http://marvel.com/insider" class="lowernavigate">Join today</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="http://marvel.com/comics/unlimited/" class="lowernavigate">Marvel Unlimited</a>
		</td>
		<td>
			<a href="http://marvel.com/characters/68/avengers" class="lowernavigate">Avengers</a>
		</td>
		<td>
			<a href="http://www.marvelhq.com/games" class="lowernavigate">Kids Games</a>
		</td>
		<td>
			<a href="http://marvel.com/creditcard?siteCode=MCLAMOFL&amp;cmpid=MCLAMOFL&amp;Dcom=MOLFOOTER" class="lowernavigate">Marvel Mastercard<sup>®</sup></a>
		</td>
		<td>
			<a href="http://marvel.com/insider/home" class="lowernavigate">Home</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="http://marvel.com/redeem/" class="lowernavigate">Redeem Digital Copy</a>
		</td>
		<td>
			<a href="http://marvel.com/characters/29/iron_man" class="lowernavigate">Iron Man</a>
		</td>
		<td>
			<a href="http://www.marvelhq.com/videos" class="lowernavigate">Kids Videos</a>
		</td>
		<td>
			<a href="http://marvel.com/insider" class="lowernavigate">Marvel Insider</a>
		</td>
		<td>
			<a href="http://marvel.com/insider/activities" class="lowernavigate">Activities</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="http://comicstore.marvel.com/" class="lowernavigate">Shop Digital Comics</a>
		</td>
		<td>
			<a href="http://marvel.com/characters/14/dr_strange" class="lowernavigate">Doctor Strange</a>
		</td>
		<td>
			<a href="http://www.marvelhq.com/activities" class="lowernavigate">Kids Activities</a>
		</td>
		<td>
			<a href="http://marvel.com/help/" class="lowernavigate">Help/FAQs</a>
		</td>
		<td>
			<a href="http://marvel.com/insider/rewards" class="lowernavigate">Rewards</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="http://subscriptions.marvel.com/" class="lowernavigate">Print Subscriptions</a>
		</td>
		<td>
			<a href="http://marvel.com/characters/8/captain_america" class="lowernavigate">Captain America</a>
		</td>
		<td>
			&nbsp;
		</td>
		<td>
			<a href="http://marvel.com/preferences/email/" class="lowernavigate">Email Preferences</a>
		</td>
		<td>
			<a href="http://marvel.com/insider/profile" class="lowernavigate">Member Profile</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="http://developer.marvel.com/" class="lowernavigate">Developer Portal</a>
		</td>
		<td>
			&nbsp;
		</td>
		<td>
			&nbsp;
		</td>
		<td>
			<a href="http://marvel.com/corporate/about/" class="lowernavigate">About Marvel</a>
		</td>
		<td>
			<a href="http://marvel.com/insider/faq" class="lowernavigate">FAQs</a>
		</td>
	</tr>
	<tr>
		<td>
			&nbsp;
		</td>
		<td>
			&nbsp;
		</td>
		<td>
			&nbsp;
		</td>
		<td>
			<a href="http://marvel.com/corporate/advertising/" class="lowernavigate">Advertising</a>
		</td>
		<td>
			<a href="http://marvel.com/corporate/insider_terms" class="lowernavigate">Marvel Insider Terms of Use</a>
		</td>
	</tr>
	<tr>
		<td>
			&nbsp;
		</td>
		<td>
			&nbsp;
		</td>
		<td>
			&nbsp;
		</td>
		<td>
			<a href="http://marvel.com/corporate/interns/" class="lowernavigate">Internships</a>
		</td>
		<td>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td>
			&nbsp;
		</td>
		<td>
			&nbsp;
		</td>
		<td>
			&nbsp;
		</td>
		<td>
			<a href="http://marvel.disneycareers.com/en/default/" class="lowernavigate">Careers</a>
		</td>
		<td>
			&nbsp;
		</td>
	</tr>
	
</table>
<a href="homepage.html"><img style="padding-left:250px" src="Marvel-logo.png" width="150" height="70" title="Home"></a>
<br>
<center><span style="font-weight:normal;color:white">---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</span></center>
<div align="center" style="font-weight:normal;color:#929292;font-family:Arial Narrow">
	Terms of Use    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Privacy Policy   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Your California Privacy Rights   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    Children’s Online Privacy Policy   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       License Agreement   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Interest-Based Ads  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  ©2018 MARVEL
</div>
</div>

</body>
<html>