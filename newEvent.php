<?php
	include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>CELEBRIT:New Event</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript">var username = "<?= $user_check ?>";</script>
        <script src="includes/guests.js" type="text/javascript"></script> 
   		<script src="includes/scripts.js" type="text/javascript"></script> 
   		<link rel="stylesheet" href="includes/styles.css">
   		<link rel="icon" type="image/ico" href="images/favicon.ico">
    </head>

     <body>
   		<div class="wrapper">
   			
           <main>
               <h1>New Event</h1>
               <article>          	
                   <section id="newEventName">
                   	<p><label>Event Name: </label><input type="text" required name="eventName" value="" placeholder="Event Name"></p>
                   </section>
				   
				   <h3>Type:</h3>
                   <ul id="newEventType">
  							<li><a href="#">	Party		</a></li>
  							<li><a href="#">	Birthday	</a></li>
  							<li><a href="#">	Celebration	</a></li>
  							<li><a href="#">	Wedding		</a></li>
  							<li><a href="#">	Other		</a></li>
                   </ul>

					<h2>Guests</h2>
					<ul id="newEventGuests"></ul>
					<h2>Location</h2>
                    <section id="newEventMap">
                   		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3379.834005752797!2d34.80970861562072!3d32.10077168118139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151d4bf40ab4383d%3A0xff5dd29c8016355f!2sHayarkon+Park!5e0!3m2!1sen!2sus!4v1484274761372" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                   	</section>

               
					<h2>Date & Time</h2>
                    <section id="newEventTime">
                   		<input type="datetime-local" name="date" id="date"
					</section>
               
					<h2 id="shopping">Shopping</h2>
                   <section id="newEventShop">
                   	<a href="http://www.ampm.co.il/map/" id="ampmBox"><img src="images/ampmlogo.png"></img></a>
                   	</p>
                   	<br>
                   	<a href="http://www.shufersal.co.il/Pages/Catalog.aspx"><img src="images/shufersalLogo.png"></img></a>
                   	</p>
                   </section>
               
					<h2>Personal message</h2>
                   <section id="newEventInvite">
                   	<div class="form-group">
  							<textarea class="form-control"  id="Invitation">
Hi Everybody!
I'm planning an Outdoor party this Friday at 7 pm.
The location is "Yarkon Park"
Bring snacks and drinks!
  							</textarea>
					</div>
                   </section>
               </article>
               
               <a href="events.php"><button><p>Cancel</p></button></a> 
               <a href=" sent.php"><button><p>Send</p></button></a>
           </main>
           
           <header>
           	<div class="headSection">     	         	
            <a href="events.php" ><img id="logo" src="images/Celebrit.gif" alt="celebrit logo"></img></a>
             <?php if($profile_session == NULL){
						echo "<img id='face' src='data/profiles/default.png' alt='default profile'>";             	
             		} else {
             			echo "<img id='face' src='data/profiles/".$profile_session."' alt='profile picture'>";
             		}
			 ?>		 
            	<section class="miniLogin">
           				<p>Hello <?php echo $login_session;?>,</p>  					
           				<p><a href="logout.php"> Logout </a></p>
           		</section>
           		
           	<div id="cpBtn">
  				<div></div>
  				<div></div>
  				<div></div>
			</div>
			<div id="cp">
				<ul>
                <li><a href="#newEventName">  		Name			</a></li>
                <li><a href="#newEventGuests">  	Guests			</a></li>
                <li><a href="#newEventMap">  		Location		</a></li>
                <li><a href="#newEventTime">  		Date &amp; Time	</a></li>
                <li><a href="#newEventShop">  		Shopping		</a></li>
                <li><a href="#newEventInvite">  	Invitation		</a></li>
               </ul>
             </div>	
			
           		<nav>    
               <ul>
                <li><a href="invitations.php">  My Invitations  </a></li>
                <li><a href="settings.php">     My Settings     </a></li>
                <li><a href="events.php">       My Events       </a></li>
                <li><a href="shopping.php">     My Shopping     </a></li>
                <li><a href="about.php">        About           </a></li>
               </ul>
           </nav>
           </div>
          </header>
          
		</div>
		<footer>© 2017 - All Rights Reserved</footer>
    </body>    	
</html>
