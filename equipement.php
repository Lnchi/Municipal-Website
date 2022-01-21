<?php  session_start();
include('function.php');

$bdd = new PDO('mysql:host=127.0.0.1;dbname=notresite', 'root', '');?> 
 <!DOCTYPE html>
<html lang="en">
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
 
 <body>
      <?php include("header.php"); ?>
  <div class="container main">
  <div class="cms_bloc cms_bloc_title">
	   <h2><b>Equipements</b></h2><br><br>

	   </div>
  <b style="color: #848484"> Thénia est desservie par tous les équipements nécessaires a savoir :</b>
  <br><br>
        <table class="table tables-bordered table-hover table-stripped">
		     <tr><th> Equipements :                        </th><th>  le nombre d'equipement:    </th></tr>
          <tr><th> <center>       Equipements éducatifs : <a href="ecoles.php" > <input type='button' class='btn btn-warning' value='voir !'> </a>  </center> </th></tr>
			 <tr><td> Ecoles primaires                    </td><th>  06                         </th></tr>
			 <tr><td> CEM                                 </td><th>  03                         </th></tr>
			 <tr><td> Lycée                               </td><th>  02                         </th></tr>
			 <tr><td> Centre de formation professionnelle </td><th>  01                         </th></tr>
		 <tr><th> <center>       Equipements sportifs :  <a href="spotrs.php" > <input type='button' class='btn btn-warning' value='voir !'> </a>  </center> </th></tr>
		      <tr><td> Stade                              </td><th>  06                         </th></tr>
			  <tr><td> Terrain de sport                   </td><th>  03                         </th></tr>
			  <tr><td> Salle omnisport                    </td><th>  02                         </th></tr>
		 <tr><th> <center>       Equipements de loisirs : <a href="loisir.php" > <input type='button' class='btn btn-warning' value='voir !'> </a>  </center> </th></tr>
              <tr><td> Cinéma                             </td><th>  1                        </th></tr>
         <tr><th> <center>   Equipements  commerciaux : <a href="commerces.php" > <input type='button' class='btn btn-warning' value='voir !'> </a>  </center> </th></tr>
              <tr><td> Marché                             </td><th>  1                        </th></tr>
         <tr><th> <center>   Equipements  administratifs et services : <a href="commerces.php" > <input type='button' class='btn btn-warning' value='voir !'> </a>  </center> </th></tr>
             <tr><td> Siege APC                           </td><th>  1                        </th></tr>
             <tr><td> Siege de daira                      </td><th>  1                        </th></tr>
             <tr><td> PTT                                 </td><th>  1                        </th></tr>
             <tr><td> Poste de police                     </td><th>  1                        </th></tr>
             <tr><td> Gendarmerie                         </td><th>  1                        </th></tr>
             <tr><td> Protection civile                   </td><th>  1                        </th></tr>
             <tr><td> CNASAT                              </td><th>  1                        </th></tr>
             <tr><td> Sonélgaz                            </td><th>  1                        </th></tr>
             <tr><td> Direction de l'agriculture          </td><th>  1                        </th></tr>

		</table>
		
		
  </div>
  </body>
   <?php include("footer.php"); ?>
   </html>
  