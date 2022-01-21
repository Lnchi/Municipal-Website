<?php
 session_start(); 
 ?> <!--démarrer la session-->
 
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

<meta charset="utf-8" />
<link rel="stylesheet" href="fcss.css">

</head>

<body>

<?php include("header.php"); ?>


<div class="container main contact">

 <div class="cms_bloc cms_bloc_title">
	   <h2><b>Contactez-nous</b></h2><br><br></div>
	   
	    <div class=" text-justify cms_bloc cms_bloc_text">
			
			<p>Envoyez-nous vos informations ou votre demande en laissant votre adresse e-mail et votre texte.</p>
           
            <br></div>

	   
	<div class="row">
		<div id="row1" class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2 style=" color:#330000;" > <b>Contactez Nous</b></h2>
				<h4>Nous serions ravis de recueillir vos commentaires !</h4>
			</div>
		</div>
		
		<div id="row2" class="col-md-9">
			<div class="contact-form">
			
				<div class="form-group">
				
				
				  <?php if(array_key_exists('errors',$_SESSION)): ?> <!--vérifier si dans la session on a des errreurs -->
				   <div class="errors">
				     <?= implode('<br>', $_SESSION['errors']); ?> <!-- implode pour avoir une simple chaine de carac car les erreurs sont dans le tableau session -->
					</div>
				   <?php  endif; ?>
				   
				   
				   
				  <?php if(array_key_exists('success',$_SESSION)): ?>
				   <div class="success">
					       Vos informations ont bien été envoyées
					</div>
				   <?php  endif; ?>
				   
				   
				   
                  <form action="postcontact.php" method="POST"> <!-- postcontact.php la page qui est chargée de traiter les données -->
				                                                <!-- GET les arguments seront envoyés par l'url pour pouvoir partager l'url-->
				  
				  <label class="control-label col-sm-2" for="fname">Nom:</label>
				   <div class="col-sm-10">          
					<input type="text" class="form-control" id="fname" placeholder="Enter Votre Nom" name="nom" value="<?= isset($_SESSION['inputs']['nom'])? $_SESSION['inputs']['nom']:''; ?>">
					                                                                                                   <!-- si      ça     existe (défini) on affiche l'info         sinon vide -->
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-sm-2" for="lname">Prénom:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="lname" placeholder="Enter Votre Prénom" name="prenom" value="<?= isset($_SESSION['inputs']['prenom'])? $_SESSION['inputs']['prenom']:''; ?>">
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?= isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email']:''; ?>">
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-sm-2" for="inputcp">Code postal+ville:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control"  placeholder="Enter email" id="inputcp" name="cp" value="<?= isset($_SESSION['inputs']['cp'])? $_SESSION['inputs']['cp']:''; ?>">
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Message:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" name="message" id="comment" <?= isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message']:''; ?>></textarea>
				  </div>
				</div>
				
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Envoyer</button>
				  </div>
				  </form>
				</div>
			</div>
		</div>
	</div>
	
	     <div id="card3" class="col-md-4 mt-5 float-right">
      <div   class="card text-center ">
	  
        <img class="card-img-top" src=data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTExIVFhUXFxcaGRgYGB4bGxoaHRodGBgWFx0aHSogGB4lGx8aITEhJykrLi4uGCAzODMsNygtLisBCgoKDg0OGxAQGi0lHyYtLS0tLS0tLS0tLS0vLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLv/AABEIAMIBAwMBIgACEQEDEQH/xAAbAAACAgMBAAAAAAAAAAAAAAAFBgMEAAIHAf/EAE4QAAIBAgQDBQQGBgYIBAcBAAECEQADBBIhMQUGQRMiUWFxMoGRoQcjQrHB0RRSYnKC8DOSssLh8RUWJENTc6LSJTSD4lRjZLO0w9MX/8QAGgEAAwEBAQEAAAAAAAAAAAAAAQIDAAQFBv/EADERAAICAQMCBAQEBwEAAAAAAAABAhEDEiExBEETIjJRYZGh8IGxwdEUI0JSceHxBf/aAAwDAQACEQMRAD8AQ3SfXp617baR57EeB8Kkio7ix3h7x4jx9R/PSvce255aN4rIrZdRIr2KYBrFZFbxWRWMaxWRW8V7FYxpFZFbxWRWNZpFZFSRWRWAaRWRW8VkVg2aRWRW8VkVjWaRUeMEoQBGg1US2hB0nqYip4rS8DlaBrBidpjSknBSW6DGTT2Fq/xDtO6UUKfHcRJ0bpvU+EV176gqCFUayD4dd4+8nSokwq2zDgF4JydPAAkHXx3G3XrLgi7KVUZCNVI078gBpHWNJryVq1VwzvdV8Czi8SChCsVOo2g6QdPL0qW3jR2YLbmAegmJPpA1rMbeLjLmGdJB0iQdTPlm8JPu0qlgLZznNIA0YbglhEfM1ZZMil9PgTcYuJewt8szd4x3YAkSNyGHUTB18q2xlrN1IEEACJzeJOug3jTaswlkIWUkTuPSIA28B5+z5VWt8SLMVy9YnXQdRHjNXtKFT5ZPfVcexSFgK0XMuumUnz0YkHTSat8Ww4iYLkwABoEHj3fEjc1Dj8EqsbpOYFtAT4dJ6zr6R1qDBYx85YjNIPSO7O8+AOnxFQuMLg0V3lUkZYcz3kUQ2SdZ10YeG2v8mt7tiCpKZlDBWHsltdF7p0MRrodan4xclUdZ9owRvOjaeEEVXwF4gGSNCSNva0iBsRtPlXNlVOlwUi7Vlixg7ZJZQwQP9poA1ByMw19nYgz111qXH3A2QKgVJkgON9d2Ygf5VFYaSzGA0g+GxkdZ8oG2lS37TFpgwcw/iJkyNt9I20pYujPcibFFRoT1yiRlGs9Dr91Q53dTJ09oaaAkHUkdRHWY+NU2ut7BEakHx32BO3pV26BkAUqASZEzsNhpJ9fzo7PcNUaviroMGdNO65C+oysB7xvvXtaLh5EwvvP394fdWUlIIz27RPp400cI5SXEWBcF0o8sNRKmD5QR86T+IcXS3oO83gNh6+HpVjgHNHEbak2lD2pJyMgI88sEOfcTXRl6zI3cdkJj6VVuFMfyticOdUzox0NvvQTrERmE+m+nUUMKQYO4pmwP0mWbgNvFYd0nQm2cwB8YMMpB10kgimXh3EMFjwULWrrjx7rsOjAEBh4EDYjwgl8fXtbTXyFydH3RzPLXuWuh4/kK2dbNxkP6rDMPSdCPnS3j+U8Vak9lnHjb73y9r5V24+qxT4fzOWWGcewBisipCkGCII6VJjMM1pFd1IDNlAO5ME7dBpVZ5IwVyYkYSm6SIIrxmA3IFGn5WxjWUv2rXaW3XMMhBYDwKnWfTNU/AeRmxFzs8Q7WpEwsF+6R7Uggen3VGXVY0rTKrp5t00L4FZlpl4x9H2MsktbXtk6G37ceaHU+gzUr9tBKsNQYI2YHwI8fhVIZozWzElilHkky1mWsW6Dt89Pv1r3Xw+X5xVLROjyK8NbZD/J/L86wWvP4af41rMaH+elQ37pCkqMx6DpPTXbeKtC0PCvSB12pZx1RaugxaTFm7hrw77L3j7R3O4AG8dPPfpWuFuOj5e6ZJJ1+yIYnygTv4+VGuLXwtwqjSF31IIHtBoGh0099LdmwWDPnA3gzqY1JgajT768qajGX8uzvg215i/xBrahGWTnHXooMsDp3p23kVtwKwQza7AAr4kwQY8I61PbxzIGGSVtqmsd4g6SI0AjWKI4dEP1oEF1BJOhiNJrpxYouepP419/EjObUaaKWKwMs1wHvEKFnXLHtCOsj371Tx9oCGsgaGS6kdJEEDfrr5VNxPiyTkHjq24HiNN6rG5nTs3VbYndYOgBMZdxBj4RWyShul9sMFKk39oHBLjnqJ2JmCfDwJohw7BxZd5lo0EHuqDqfifdM0TsrbYIhcFgSYkSdzMDyq2l7JdVlT2ZkmAsMuUg9TpG36oqLwNK7G8W3VFDDWReAFxQil4YzMAaMUj2mEaDQH01qvf4YtntH7QhO8FDDXKT3ZiZJEdOtGLlhWt6Ea6grBEgg+MhgZ0I8D1rGsAjKwBGm4008qssPiO+VXPxJvLp2+ICz5SJYZ5BGx8dydpmSK8uMdjOo6gADw23E6+6vcHgAbktPeLEH3T8taLXeHowhhO2sDNptqBp6VGHTOW6RSWVR2AFvCuGzLGcQV+0H8Y6HrUd+1bKBlGVwWDL4eG50gzr5+Ipp7ESDAkCAesUE45g2Di4iztIidR1IjanzdLpjaNjz6nTBSNdIEEx6/wCNZWxFs6y49FBHulprK4zoDeD4WiDNcgnw6f4/dXQvo64VbxXbM8wsKsGNSJnzjTTauZXMQWOpNdb+h7BH9Huli4zXdIJWRkXXSCfWud/ErbCPEuQs/wDw7o6Z1hh5BhMfEUmcc+jzICQr2iNp7yT67ifX3V2McPTqGP7zu39pjVLG4vDWNCoZv1R3j750FBL2NraOQcOxvEsMoa1iRdTWUZw8RoVK3O8IPRDTdy5z1duj6/DqsD2lYiT/AMsgsPWaDLxEXsTce0i9o9y4DZt6kqpyq0frALMxqJHhDNZ5cvuquxBVgCAjAmDqJOx900XSC5WuCrxLjK3GB7PMw9kC3qP4mE/OlXnB7jJaLIV+t0BI/VbwJpyOHW3oFj+eppW53fuWf+b/AHGo22aC8yGbkziWKXDIqG2yqhbK4Mhc2sMI8es0ycN4wl64EOZbsHTKCI3MOoBA26+FKnJ6k4doOv6NcI9xBorycxN/X9U/eKm5U6C1yxwt4ZWE5s3To0eXemPjUPEuA4fECL1pX0gFpkfukGV91c9w/MgOKvW0Z1dXu+hC3CpIKmN40OvlTPgOaG+1lceI3+I0+VBZae+xnj2AfHPosBk4S9lO+S6JHudRI94PrQNORsctqWthmXRlVgW0A7w6MD5GfKurYTjNp/tZT4N+e1b38ArtnV3RiB3kbQjpIMqfhXZDrckeHZzz6eD5VHCr1hlYqylWG4YEEeoOoqPLXYuJNac9lf8A0fEeUhLg9JMA+jA+VLuP5JsuT+j3jbf/AIV4EfA7x7m9a7sf/oQltLY5Z9JJenc5/lqO/bYqQsSfHYedGuK8AxGH/pbTAfrDVf6w0HodaG5a7LWSOz5OanF7oU72Ey3TaCnvKz6EFjGYgSRpMbeO9Q4TDShfKCyuFykd4mNAY6+MqPWaccmsxr40L47hiQrZgoWczQSY0OnvA98VyZempak/+HTjz26ZU4fZHbZhbImYYE5TpvEaajqfCjUUGtYv6oNkuj2cnTOARmyk7kmZifAbUR4ZjheXMBBBgifn/PhVOmyRfl78k80XyDcbwd3vF1ZVUgT4zt0H40O4rw8K8SxOUtMDYAySZ8vnTflrUrTT6WMgRzyQA5dzMmoBVdJJEgzMCdT+H3Go/wA6lW2AIAAHlXhSqY8emOluxJz1StbEKWwNgB6VtFbR/PT/AAr2P8qoklshXuaRXkVJFZFEBFFeFalivDWMBsVhlDGMOzeYAg6edeUZNeVB4E3z9F+xZZn9tm/AeDIboLDNl7xnbTbT1iupcvcRt2rdwu2ufRRqT3V6dPfSNgWXDg9pqx6Lr7jQixx8jGFGWbTuWYKcr6W1EBo02HTxrwpNHppNnR8bzDevN2dlWk/Zt6t/E3QfCqz8BuD+nYL4oh1/ib8vjV7gnNuARQig2B4FZk+JKyT6mt+J4vOxMyOlS1WNVHM+WsOv+kbhEgKMRlgkERdAEEa7E05PzDfwrqqOHV29m5rlJOpkQYJPjoZ8dFXlTXE3W8rvzuA/hRjDAXbzMYIAKqD1019dJ+NMxp8hvEXSxJPWlPnc9yz/AMw/2TTFZbKcrGZ9k/3T5gfEDyJoBzse7ZH7Z/smskCHqRZ4TiSFtKpI+rkwY30jTy++m7k5fr/4D94oN9GuDVizOoYGywAInYrrr/OlW+H8aTDENkZrgzDeFghcuuvUN060kuRn3E3hC/8AieIH/wAzG/8A5AqniRe7RuzUq0M2ZRkJYYhkysRCt9WJgz40exOILXHuwAzM5kAZgGOYqGiY2+FV2uCs3bugp0FH4gAZClj0kwPgNa0vcYvFMhuME17q6DXeY9r3zQo3TWjGhHFXAHOwpgLoM9KN4XFOogNmX9Vu8vwO3qINb8vYyzhsO3b2i4YqT3VMTp9o+nzorYwWAxP9BeyOfszBn919T7jRcfYytq62PMJxyNDKDwM3EPuJzqPQn0qLGcDweIBbs+zPW5YOZP4kiV96j1rMXy5iE9nLdHl3W+B/M0KfNbYSHtuNplT7jTQyTxu0xZQjNblLH8l31GayVvp42zr71n5AmljGYKZt3FPmrCDprqDXYuB4btbQuO0uSYdO64AMQ0e3t1nepOIcK7URcS3iFG2YZLg9GH/tr0cfXSr+YrRxz6VX5XRwfHYe8Vt2xDW7WYgxBjNPZ7yYEADyqbhuCKZiQAWMwNY/ZnqKfeNch3CTcwmf9q1dIB2Edm3ssPU++k/FZ7LFL9trTDowI08RO48xNdHTrC5aov8AD2I5VkSpo8y1kVIIO1ZlruOUiy15FSxWZaJiIrWpWpstVTiwtzKddukR0A+Ak+tRy5Vjqx4QcuDaP5/OvHYASdAOtZibmXXoNTAnSqFzEBe5qRmHemSTIOUk6CDIpZZ4rZDLE2TDFxOYH2oED0IHrB+RqrcfO6kBuogrljXxOhB/L0qpesgqzSQmcGTOnjqTpt6aAUSwIuEgMAUCxPUtoynUnod5OoqEJvK67FXFQ3Ng13wX3n/CvasvhkJkqpPmBWV1aH7/AF/0Q1Ige8QSDvQ9Um9Pm39mrylSS2nn7qjsSzk+uvy8NK+aij2ozTCvBMGXuiNl7xny2+dNtrFqSUzAssZgpzRO0gajY7gbUh8uY+42IuoT3At3QfsZQCepPe8Y8qIfR1ay27vl2f8AZJPzNUUKQrdg/geNZHOUjvhwdNfHQ9NYrzkUM2JlpJyXDLakd/LGuwgbVDwIqLlssrGATCglidCAIpl4Bwt0um6UKyCBnYZjJzHRdF18ZNMimRdxiNoEEH5fIjwIpV5zuf0KH2gzH1Ee0Py6EHylluY5FMMYPlr92vxilDm6+Lr2nUGBmXN4nQx6fnQEh6kNvLtx7di2VJXNbiRpIOp+dUOKXpeBsoj39aYuVeaLSYO0l62wCKFLQGXykTOxHSh/NF3CObT4Zk1LZwoK+BBKkD9qkYXyxduTUcV5xbFC1bZ4mI0mJkgfjVTA4h3Y5oAGhUDY76sTr7hTpCMtuwAkkAeJ0rBqJGoiZ8vGl3DGXLN3ib7KC3egToBO3upywmGIwpc7sqH3aff+VM1Rg5d5euY20y27vZlSpM7NMxJAkQRSVx3h2LwL5LyZwRIYaiJI3G23Wurckt7f7qfjQv6ScE7XMO6mJuWrW8SXNwjXaNPmKTTZWGaUOBL4Nz9ftARdbL+q/fX0E6gehFOfD/pEsXVy4iyCDuUhl96NqPiap8D4BZ/0bi7b21drV7ErmiGkQdCNRSZy1yuMViBbV2tq1lnBOpzKwGWdJEGhp9iznCTqSHHmHjVu3cttg7sKykkAkQwOxDbadPKrnDufnEC8gYeI0Pw2+6kjmbl7F4AqGIuo2aCuvsxMjfqKN8ocotjcL+kdo1ksx7PLDKyjQllO3ekaa6UFqQXHDpOj8M5iw972LkH9V9D8/wDGrvEMDavIUvW1uIejAMvqPD10pKwnKF21hMStwW7t2CbJtgzougE6gk6RMaUtcM5kxGHbKtx0I3t3VP8AZbX4U+r3IeDqvQxn4t9Gtsy2Fum23RXJZPTN7QH9ak/G8IxGHOXEIFYkwQQVYCNQR69YPlT5wjnNbn9LbykCS1vXQbsV3A89RUPNeJwuKVMmIzXFDZFRZJmJDdBtuSsa7129P1TjLzPY483TNraO5z/LXmWnbC8rqLBzjvPs/wCqemUdF+Z+EKV/DlGKsIIMEV6GHqYZb09jiy4ZY6srZaD45Ve6h7RYA10ByzMHXck5dOkUdK0vJatG9ojKxkQsEHcMDE93p01HmaTqbklFGw7OzzEYq3bMFwxGzAmCAdH0EjfQAbadapcUBW5D6iBr7PdJMT+qNSY00Hvqzc4RduvLSveJY6RuCYG+ogDwy0XtcJthQCMxj2m1O0ddtK5YYMsudkXlkhED8HwrNcLszMq6qSZBzDeeumkdKNlamS2AIFbNbrvxY1jjSOWc3J2V/eKypslZVRBcxVzpt/PT86t4NpjWJMnXaheMtGQTB0EA7+Jq/hngAGNRsPnqfdXzDWx6SdBnh3DCLr3bKg5w4hu6oDZZOneb2ekb70Ww+GGGs3JZMxBOgy6hYAEkk9N6i5ewFy9afJdKNbUtGXNI00DSI9ddqHPckFAwZjMmZIgbGOs7+YoqRfU2i/ylxC3cVbFns1dETO11hbUtGsHdzM7U0ct8I/S0Z3ukZWIyKIGwIkgz41znlawmd8wBLIrAHYRp796l5S4jfvXgzOVhcxCdwbxEKBOo6zuaL34HfI0cf4lYwqm2CouMNFUS8H7UDWN9TS3zO4X9HthdYZy3UkwI91U+b37TGNAJItINOvfk/eaIc3L37H7h/CjVIaG8je9cY2bIB9lBOkA75VMeA+/1qXh+EdgWCkaE/DU7bQNdansnPbsWV8AT/PkJNMOEsQ4yASFcR4gIwj18DS0K+RS5kwT/AKJccgQMvX9ta95bsBr7qzAgmYG406+v4Uc5lVXwd+BqUI2gyCND+VBeVkIxNwyNY66+yd42qi4YGu4Ivotu9dXLI/S3A12mCD8KeLJnCLpH1S/cKUePIBeYsDriAdD1iPDyprwgBwqkdLf4VpPZGkqkxt5HPtedtKGfSZxC9Zv4Psrr28+cHKdDDW4kHQxPUVe5F9r1tD71od9LKd/At4XLg+JtH8DSGDfJB0xg/wDq7hE/tIjUH5X7Nb2AFoME7PFqM8Fu6wJzFQAdQR6AUX5IPexf/Ntt8bCUI4KirfwQRiQt/HJquUgkMSIDHr1nXypvcb+r8P0CnPXB/wBIbCa6rfIMETkZDmYA6mCFGn61bciN2fDUAGtrt1AP7F14HyFD/pWQdng2ImMUo+KMfvFVeE8w9hZvWVQm4MRicpaMgBusZOsnfbT1pW9jRW3y/UL4znRbVgXLlordcfV2s0lx0fbupPUjppNc44ljLuJuG7fYMx0C/ZUdFUUUxXDpuM926112OrnSR0gawPIVi4ZBso+/76m5HTFwhwDMDw57pyoug3Oyj+fCujcA5dTD287qWOmkSzHYadNdh8aI8C4UqIrMcxjQdB5+tC+cucGwN6ygsi4Li3Ce9lPdjRTBE6nQ+VMlZHJlcv8ABbZb/bNduMOwZP6MalITM3kxzA6/5AZzBwxWGcgEgb+K9CKm4Xz1gsSuVy1knQpeGXeQQWBKgGTuRRTD4I9lAYOAT2bAzmToCRvTPVF2tiWzW5z+7w7qp/n1oacALZJykak+IBiO70HoKcuL4jCW2UXrb2Sw0u2tVJG4ZOnuBqIcLNwE4e7bxC9QpAcfvKdq6cfW5F6vN+ZKfSRatbfkJTYtQCYMfMnwjefzry9igFkET4H+dKzmrDWrasHV7bnXKBBJ8SCNNeo8aW8XiFUiRDAgkDfvARqZ0Hh1qy62ckQfTRTC+D4iCYmQdidJ6mOpI9KLKoLFQwkRp5bg/ClDGYvu91oEggwBOnsAdI3ma6PyJhsLetEFrdy9LQdQ4EGMs/ZB8PfuKEepyJVYXhg2DBhPP5VlOTcqKdVusAdpE/ORWUf4nJ7h8CHscPthn1nSJ3j3gVLg2AaHg7a+PhFUrjMILKcu3p19x86t2rhuKdAQARmkaGQJA3OmkftA9K4mhqDOEv2iWBJhlZTB7sEREdek1Pw/CgXClpu6AIJmACNh8+tDMDg5SSwXUjUEEgAkmPAQJovwbiNpGhQzk6Se6BrMiJO/r94KUFWbYIrZu3ZbMEtNGUEj2gJBG0wPjU/IeAu3O0u2rWYZPETJYlRBPrRduT8ReL3AluLgkQds2ukrEeU6RTb9HvL13B2Sl4AMfAzoCfAnx8qKdIsro5px3lrEIxuvauCUGY5DAhwdWGlSc2jv2P3D+Fde5qsM+Dvqqlma2wAG5PlXIOaMKRctAAghTMgTuP8Ah6/GjdoeDqQV5Zw/dznwgfj+XxpjwCy/8L/2Gpn5dwiNhMPmRW+pt7r+yPHWrj8KsgMy2wGg6ieojaYpGwPkQOO4Umy5XeACP1hI0P50scCPZX3uXIRDGrEA6KRsTO/lTHz4StkKDEsJ9Nf591c4uJ12oxkWhj1RDfG8RZuMT2pIFzMMqEnr+tlHzppwKqcKI2yNBO/Xw2rnVvXYE+QBP3V0PhAP6IJBHdfQiDuaNvgOWEUr7jLyMDnEN/uuuvVff86858uKbds3rS3Mt9gveYZe6TplI106yKi5KxKpcTMYzJlGh1JIgaelE+d+D3r9kCyoZlvZ4JiVyld/UigyMK1ebgB8E5ps2Wuk2bg7XITDhoyoEGUFVI0A3J1qLhGKsLctscQO7i79/voykJdVgEGXMCQT4iaB4jg+LT28Lc/hEj4kCqDtGhW4p/dJ+4EUNTOvw8T4Z0H6QVGJwtlsP9dlxVpvq+8dAwbQa6A60sW8J/tNwMCIu3zBBEg9m4+ZainA5bheIjUZruuo/wB0v5Ut4XHXSVXtHK5h3SxK+G0xtSuXYSOH1U+Bpx2CUkNJ1RDA/dE/Og7xm02miHE8Uyi0ARBt/wB5l/ChRxInaBp08aWyQxcd51/QuzTIjBlB1kGPUbfCht+/Y42yrD27llGcZSGESogGVIMxFHOO2UOGt3IAYlQWgSRlY5Z8J6VBythxbtYm6kK2VvZUD2QSCdO976e2ma46arcV8ZyJdtiLWJkdEvjLr4LnGUfwsaELhcXgCDkv2J+3aaUYxuVIyMdJ/CugWubnHtorj+r+Y+VEOHcVw1xHbscqrGclQV1MDbc+6nWRoi4G2J4JbxlhO3Uw6I7D2WD5QZGndMk/PxpS4p9HF21NzC4knKCQtzQ6eDDr8Ku8s82Y67iEsXMOCpJzOFgKo+1mVso9CNdBT82ulBUytyx7WcD4rxLF3sNZu4sXDZDMLd06w0lWUt7WuUiCTtS9ie8ZUDIW0OgLeRO++onp766XzJZA4TiF0XsMYWGmi53DgAf+rArmFp0dXbVWHeO0e4eP89aotiWV2yezbBTMbYgd05pgjrlHjRgcU1S2IItqgy5QQMoUAk6d6BuOtBP0qBIIUgQdjudI8/PWr+D4e9+xdcv3lNuFG8s5TffTu/16ZEhnTme9Hdu31HQdx48szKxPvNZUPD+WWe2rNeRWMyuVtIJGum9ZTeYW0IV26jAl2O+kRttB6+e1R2CV11y65fjE/EH4Va4Pbw73gbpyWwQW3MiZIAHWNPfU5uJ27XLUokkKrDNAIyyZ9/xFIMtiC7ZYMufOs7A6GCd5896LYLEGzGVyRHj5nSD60Nd7jNBaSep6iI08NtvSpsDhtWUzKEliddBHQDWSRr50klsa2OuE52xdpQqEsIEQikRvrp61ftfShiV9u2h9UYfc1NnKuAW1bVWUQyrBcAEkgaAfh5Cgn0j4EdphEtWlzOb0hUEmAhGw9aRRvY6FNJbo0sfSwv2rC+5iPvU0TsfShhj7Vtx6MD98Ug8o8LOIvYd7izaN4o2pAb6pmA0OsRPw8a6Ve5AwTfYZfQj+8DRlGh9UP7SSx9IGBb7Tr6qP7rGry83YF1IGIAJH2lYfMrFc6555Ww+E7LIGOcXSZI+wEPRf2qEcmcBTFX3VpVEsdqImScwGU6xEeVK4urMvDfuN/M1pbxAgspAPdnxMbUHtcAA9myPUgT/1a0V49ee3hbzW2KsqMVIA0IGm9KnLXE7tzEItx3fuK0s7H2hHszlG/hRjHYVsNXMCqx2ty3bA8XAPunSidu+pt6EFSCAw9k9PdSJzauTF4lxIJWwZG+oyb+6mzhb/AOzajNq+hO4zSQfKNI84pq2sV80W8Dg7l60qWiBcIbKTtpPmOk0Lx3COJYNQ5uFVnLKvGsE/ZfyNMvJph7Pq/wAw1GvpEwDXsDcVQSy98AAkmAdAB11rJWGORx4Of8L5o4mzMlq41xkALCCxAOxOdDv61a//ANExinJds2XIMEMBM+EBh91HOQ+HdhjGXXNcwdq406QcwER0j86WOY+GOMVjmZpWxfw1wCSf6RgwAnbcz5j31tHJTxLaTS3Ddv6QxkKXcBCHcLouu+hUj51Fg+L8IuOOzw727xPd00zf1vwpy5z4ejYPEFbSG4LbMpyLMr3uo8q5dwnh5W52jjvMuFuIJ0VXDqxA2EmD8KVrazKUXwhs5itgpYaP+Is+jA/jQAJqfdTHxb/ytvyusPioNLt18uY+Ck/DWptCpjNzDZ7XhZBAIGQ+muX8apfRdczYAqZJNsjqehWithu04bc/dn4MGoP9Dz/VMp6PcX4O1MKAGvRrm2ynX186fsM/Z28ZlVe4WcLEDRQ4GkUl2nuWrgNtQ9xT3VIkMw0AjrJpk5Txz4gYk3rQVyCGtjMo0XIREyJA1oRVFHwFuSmBsFgACzsTHr+G1MBpM5U4uiYO5fCMttJbswc7KP1ZOrR61NhvpGwDe1ca2fB0I/sk06EcG26QJ5pw6jD8UsF1zXfrkTrCqoO4j/dTvXEbkDSZA/P/ACruHHThsZca5axeHIaxdt5C+VmzJcCgZo6v1riGJwdxG7ywQSB17ymCNNDB67GKrB2LkVUWsFk0zKJ3BILDwPX+TR/huM7FbZs5w4ckt0IgQPiJjrQKzYIt53g94DU6iOoHn91b3sSPHL1OXfX36gH76YgwviuJXLzG6y3AzbhQMvhpJ8qyhQxNzox/n31lYxHh7awQRLHXTproNTqPKpLlhyYMFdxrr4R47/cKoYS2ZnWQNBMTV3D4kL7ep6CSfxpWKz29hrsAZCAxEEEHoTBjYn8KucP4LfL4gI2tpHdzO6qQGE7ncfCt7GKZ7YQGJur0GjEFROo+z8xTHwdxmxzF3N04e6GHZhV0gnKy3CW0GxVdvKirGR0LlHAE2E7UuxSAM7Sw0+Q2I1qfmG5aGKwYa3muHt+zaSAkIC0gETI01mi3C0K2rYMA5RMelBeY7aHGYEtcysP0nKuUnN9WJ1GiwNdd6SHqKS4APK16y9vCHD2mtp+mN3WYsc36O0mSTpEV0YVzPkuyi2sGLd0XV/S7pzBWXX9HbSHAP+ddMFafIy4Qs85WLDFe2LaWMWdADC5UzvqPaXukR50K5YtWlv2xZJNv/RhykjKWHajvEDYmZorzlZDETcRP9lxw72bqluW7qnQRr110BoRypby3rADK3/hbjMswYurqMwB+IFF+g0fUacbT6m6P2TSJyuUXFW1IbP2VuTpliVEeMzrT9xgfVXP3W+6kHgqr+nqcxzdmvdjp2i6zPjpFLB7Mdry/iX+acq37juCVypMAE6RGhI6mjHDGBsMRMBW+YDfdFCOcwMzztlXrHh5H7qLcDg4cgbf+xfKj/QCfq+X5BrlM9+1+9+FNfNV1lwl9lMMtq6wI6FbbMCPeKTeXbwQoWMAOvzj86cOLYlXw92AD9Xc7rDeUYQR7/nQjyKxf5YvFsZh3Ykm5w1CSdy2dST8ZqrzxiHb/AEhZnurZw9xfGc/ek9dtPCtuC49Fu4K62VFOEZYAgCCNFHrpFa8w4tbl3FgWwpOBzZiWzHLcPdIzZY1nafOn7sPeI+Yo5rT6AyjaHUGV2I6iuWWsZ2jWLmVVD4DDPlUQq5b6jKo6AZoHpXUeHNmtWz+tbT5qK5TYZTbwrKgQfol1AoJIHZYhNAWJJ2O9Tl6GND1DJxQThPS+PmhFLwwrPmCqTCMT5ADUnwo1xrEFMO4BjvW2HqG3HupqxGJLAbd4EbDYoTRWNyViOdMXeVwW4c4gk9g0QNyE/Ogv0UPFzEL0F+584b8aucjt3Cvhp5+FAuRM9vF31YFSXUxtobakH4Uyxbcgc+Qmwy4393Efdcpm4Phxax14Az2hdz5FrjGNvAirVwqO9kTP3lzZe9BBImPdQ3GXiuOkMYf3f7u0YGuu5PT5Sd4bWxnOyxyxhFtNds+0IB11Bkd4ees1fxfL2Eec+Ht+5cv9mKCYTFMuKcBjBE/BmET4aU2nX31pRoClZznHckYZseLeTLauYe4yBTqLiMmstOkMdPKuL27hZgGnfX18B4a13fiuObD46yx9kG4o9ChP3xXH8bYHaPCgd59vCTRiwydla5i0gplLdATvG+ngZofcua/zoOgqzcw7zCT99VXtEefXT/Ea06EovWbAKg5fmayvFxdtQAQwgD7TfgaytQpEiHXPO4CwY18Ygz08KvcJ4Qly6Ea7rlYkEEQQGKgEmOgOseFD0v5iqswCzuQTr4+Nb3rToM4BymO9GmYgmPkT6UNzIYxwtRh1gZnOIUAggd0Ix0yn2tRpvpvrqz8vcuXLdvH3YDIbF1bcNmJYnoNzI6+6kvgvGcRb/o2aCc2wOpEEywPTenCzzbjMo+vjTbKmw/hpHLSWxY3KWx12x7IHkPuoLx3hd27isHdQApa/SM5LARnt5U0JkyfCuff63Yz/AI5/qr/21n+tmMP+/P8AVX/tqanTs6H0kn3QxcscCv4ZMFbupDDFXWOUhgFOHYAkrIGuldABrj45txn/ABz/AFV/7aZOROOX72IZLt0uvZsQCBuGUToPAms5WzS6eUY23wH+Z+F3LxU2wDGHxiasB3rltVQanqR7qFcucLu2bthbiHucPuoxGqhu1Uhcw7skaxPQ1p9IPFL1m5ZFu4yBlckA7wVg0G5a41iLmJto964ynPILGD3G3FZz20ghgbjrsK8WQm3cA1JVtPdSPw7hd1cWl1lyqFCmdD7eafSKY+ar5GHYT7UfAEH74pAY0IyoMceqI18y4ftWIV7eqgauunuJqbhpyWjbzgaTI1nuhRqPT50m5oE01cJ1s22mTkAO8fz0ouTSoGSCQVwFoobTH2c6t6gHLPy+VNPFuI21TvSFKaldz6Dxj7qXxazJZ85H/W1V+YMM9kNaZpWCyTJI1Gk+lBMi1ubYXimES7YIN3JYVwFKgzm0BnMIg67eFXcTxTBu1x4vK1yw9mcqkAMZnLmEmfOlPC4C6dRZumdoQ/lV4cMxB2w1/wDqGi5M6I48fdnRuWuPWbgSxb7QtbtKMzKADkAWdGMTvFUeK8qW0tBrbMq2UxEKdZ7U5mk9IOooZyNw2+mILPZuW17NhLADUxAGu9GMdj3MqbkgjUaQQfvpJSdUJJJSuIu80YhVtMhkswDKAP1TJJ8B0+PhR7h2MR7dtgdRl0P7uUx8f5mhOItqxzFVJiJKgmIIjbaCdPOsWAIGg8vlVYZNKIyhbNeUsOUuXF1IzffrHuodaGTib+dvDn4Kyf3av3bSnR0Vh+0oPwkaHzFRHCEQ1oqSBAW7JWOiq4m4g307w12pllA4DO7BgxGsOB/ZBFDOLFDewzAjNAza+KLEjp7NQcKxyWkFu4jWnkasQVcjqrjukmPZMN5UL17aYJUXGIy27pOpJgjs4Bg+NO3bVCJUnYUzD9OIyxCwTvmnvz5e1EeVNbY1FAzOq+JJgCPEnaku/jF/SO274EAQwVdQIPtuPKrI4+hbYQTuGUmJ10ViSaE02jKkWudBb7JL0B8j5hlbfZDr6P8AKuRcwMO2cqmVWbMBM+0M4X3TFdXa3ZugyhGYxqpUttE/raxv4UF4rydbuEsrFCVAOkzChQT4aAbRt461NOnuU2aOZNdyg+JGv5VSxNpgSpmQCI8NSfxps4lyXibRDBrZViQveYnz0CE9RWqcuZkUXkZLnRkcd5WgJOhHdiRGUd+CdBVotE2mL2IxZdsxwyTAG6jYADSPKvaKDlqNO3H8WZT6Edm0H3msprQNLFgYc5dAPGeu8Afz5U/2uX7t7CditgB07NpN1R3GV4mSADJn/Ck39Ge9AQDuqg+X4mauLy3iUWTlUGT7SztO2adqlIrCk7YXwPKuJtiWbDqJA72IQDpGxNFf9Xro3v4BfXFD8LdL/C+TMRey5GXXUSY8fhsfhTJY+jLGH2sRbH8TE/2KnJWXhkUTX/QfjjMAPS87fdarP9EW/wD47DT4Kt1pPgO4Kv2/orufaxfwBP5Vrd5FTC3EZsRcIhjn7IFFhSYebsiRoNNSRS0h31G2zf0/YpDCWGVS2NS2QIydg7ldepDAGd/fRjlfiWDwd03WxTXZQrlWxk3IMy10+HzoFyhwrh+PutbU4lXy5+8FAInWIZoIJGhp1tfRlghv2p9WX/soaa2B4y007+gM5m5nwWKYS99VAXRQm65ogMxGuYyf2RQbDcUw1lhesNeZrZ17RreWCCuypM6mNd49KeU5I4fbALWZ8yx+cEVR4xwDC6LZsqo7O6S3e3C5lg6zETHmKArypR0xsp8Us276gTAM+8abEGhJ5YteJ+Lf91QW8e5vFdNNF0J7zeU7iD8TR21I0Jk7/wCMdBvWJqb7AXE8v2lQneB1B/Fqr2cSUVUVRA/zo/iUJVhB1Bqjg8IpD5gfZVvfmK/jWNqZd4fiGNtZAETEeEk/jVPjvMly6MnZhwuzsDO0E6n16VYa9EdKdwbYGpUTHQddKaqBYjYTm3FhQqW1+H5k1N/rBxRvYtn3Wwf7hpr4fjraqtsGSttDoJ09np4R8xVtscR9kx4mAN4O5kaa7VhlP4IShe40/wCuP4QPwFTYG06Wwbrl3YFmPmWOnoKOXOaFz9lmRX66zEjQwYkag6E6a0sY3Gk2ZW4My2zEePegGZ11+VK0w67RZwXELd0FkYMASPgY+dStdHjSjy5adZLN3GC5e9rIgHaPAfD30xW+Gu8ZLbN5hSfnFGqETJv05Ns23h+VZYxql8uswSND0ifvFaYDljEjPmRUBdmBZ1AAI02JI28Kt4Xl7Iy3jfRmAMLbBYFTEd4gRG+1GgWThvPfcePkfGoW4XaulVKLA2BUMoH7Kn2R+ypUdYNWnt/sn3VXOLNkzkZ/Jfa+B298UFd7BdFLiGCSxc7MOBoCICITPSLVkn36V42HfTMWg9frCPebl1R8qt8YvO10spm3l1+sZQsbGB0Ign1I86QebHJtPezlF7q2rasRmJOtwySdpI16V1Rdrcg1TGk5EJJa0ngS1tT/ANFsn/qqJuZrNoE9spIMwkkH1Z7kfL3VzDi9pEtWCMxe4mZiWJjbYTG8/CoMFxG3bTKcNauGZzONY00/nxp6TBb7D630j3WhTat5ROx16SRJPQee/pV5ObEK5/0e4VkgkQdRBOkDowPvrnwx4fIUw1q2UcOXE5e6CYaBsfWpMdzF2js3eGbLmCd0FlBAY6noY9I8KCxRDrkdOw/HsK6hhdyyNiII9ayuU/6YP6rf1jWUf4eHuHxp+xZwd42Hy3FIaQGUiCCNYM7UXW/cxDjJbuMPZEAsIG0wKmweFxAtIVW3KqBau3Fts7SRkt2w85RrCyM3TuiFWxj+d8VZuBEuq621CElFIdh7bwACAWkAAgQBQ8In4nsMfGMHirGFt28Abna9p32AHsAMQe8I9ojbXSo+V7XFkxNq5irl57QLZ1GYiOzfLKhde/l2neelWeMcZxL8J/S0bsbilCQkEMjXBbBGYSsyG0Nc2t8XvO0Xb19pne8w9Otbw0lQyyM7+eLoHylbg0BDG1cAPeKkTkgEaGDvm8jXNR9HDYnF3bty6yI953IKQcrNnyglp2MTl/KkO/iGVyGzHbTMSROu811rl7iFu3aw1pLwdiIOpJnQt7WohifcKRQ0jatXAf4BylhcE2ezmHdKtmaZkg5vKI9NauYjjlu21zMW7iSRlYgQubeI8dR4VT4piG7J43yyI8xFc+4hjLtyzD22JFsIp1zPE6sRE7yPU+NLkih02dGxvH8IVXtQcrAxKP5HovgflSpiuP4e057HtSCbgZCpBmCqsJEj/GoeLLawWHs3cWHubKmHWN8pLZmYwo3nKNyKX730o3kGXDYXDYcehdviMo+RoLC+4rmuxcw/BMRdvl7dq+FIDAlSIbKO7LQDDT8KYk5cxhJIDLr9pwJEdcpbrNc2xf0h8SeScW4HgionwyqD86d+f8fes4TBob1wkWl7Q52DO5VRLndtnMHz8qfwYi65INW+VMXGt4DQdSfhtUlvlO6gJfEQoBkkQAJnUk6DSa5nhFe7ZuXluj6tSzIXJcQN48POqvCuaMTYcNbvONdiSVPkVOhFFQh7A1SfcfcVZw4bTFdp0IVSd9ZBnKf8aJW+NgFQtvY67KxE6AAb1Q4OmHx6hxbFu8fatKwCuRqWta90n9Qx5dTVi5esWA47MKBAIb2h0iDJGvSllBdgqT7kVlsU97tLdhwOzyghdPaJ3Og3ou3CMddicqKI0LR7+5NB8JzGqH6m7E/YMwfSdAaL4fmW2+ly5kPgx+NTlF+xSLTNbfISZ893EDMQNFUDbwJP4URtcu4JCSRcuE7yxE+oGUVLaYMoZTmU6gjUEeVbi55UKYdiXDnD2oFrD2kjaFE/IT863uY5m+18KrNiB+qfhUdzHogliFH7RAHzo6Q2TOSTrrUS2QBAUAeA0HwqEcVsna9b/rr+dQNj33AssPEXT/8Azo6QWW2B6An31rlb9X50PxXF1WQWykCYHeJ32+B6Uk8U5wZ5TM0D+E+pyx90U0YWByJeKcSxAa5adu3U3SZUqqhN0tCYJ8yAdhqdaWOPJir5CNbQBTOVTmOxGseXkKnxfHz5Dz6++Imh17i7sIz5fJQPhpXRGBFuwbc4Td6wY03Ow6aipLHD2XdAfXWtbeIIaCSBOv8AIq5isVZWyD3+1LGGHs5YAHXcHMfORVKihfMypdkKbYYhM8sknLmA3AmNNp8fQUNETqdNdR+Fb4zEIT9WCF6SZPvqvI8anYyRszzWVmUeIrK1jDLyjfd8aC7M2UXMuYkxFtoidqjxyDwFZWUoj5Op8XYrwa9lOX6iwNNNC1sEadI0rl621NqSBOVtY13NZWVUjL9QbmJcSZ9a6HyUNVPUKNfVtfjA+FZWVGXKOvHw/wAB54n/AEP/AKdz5Zoqnwf+js/up9wrKypy9SCvSwD9KR+twfpiP/01yjif9K/r+ArKyrP1HPHkqnY+hrq30vn/AMuOmUf3v8fjWVlEdnNUYgaEjcaeB3FYtZWUBgjw1yrqykhgQQQYIPiD0rq30poOzwzQMzZpPUwBEnrEn4mvKyjESZznEsc8eddS5K4fZZQ5tWy2b2igJ9k9YmsrKBvYLY0QbgGw6dKDveYMAGYCRpJrKylY8Q7FeGvayolCri3MHU7fhS9xVznmTsPvrKysECXRKmde62/oaU8Ug7K9oNFT/wC6tZWVXDwxMvKADKPAbD8aiw6iRp1/EVlZTiE937Xr+VMGBP1AHTsm+8VlZRXJgda9sehqyLza94/E1lZXac65BpNe1lZQCf/Z alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Carte intéractive</h5>
          <hr>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12791.489073965875!2d3.5564998!3d36.7256288!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7fb9f3a5a7d904df!2sMairie+de+Th%C3%A9nia!5e0!3m2!1sen!2sdz!4v1556288795722!5m2!1sen!2sdz" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
          <a href="https://goo.gl/maps/UmDivZetHRHNsWM48"><address class="font-italic">CENTRE VILLE, Thenia, Boumerdes (35), Algérie - Boumerdès</address></a>
        </div>
        <div class="card-footer text-muted">
          <div class="row">
            <div class="col">
              <a href=""><i class="fas fa-map"></i></a>
            </div>
            <div class="col">
              <a href="mailto:test@test.com"><i class="fas fa-envelope"></i></a>
            </div>
            <div class="col">
              <a href="tel:+123456789"><i class="fas fa-phone"></i></a>
            </div>
          </div>
        </div>
      </div><br><br>
	  </div>
   
</div>


<?php include("footer.php"); ?>

	 </body>
</html>

 <?php 
  unset($_SESSION['inputs']);
  unset($_SESSION['errors']);
  unset($_SESSION['success']);
  ?>
  <!-- supprimer les erreurs ; l'erreur sera affichée qu'une seule fois>
  <!--nettoyer la session -->
 