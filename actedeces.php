<?php
 session_start(); 
 ?>
 
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
  
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<meta charset="utf-8" />
<link rel="stylesheet" href="fcss.css">

</head>

<body>

<?php include("header.php"); ?>


<div class="container main1 ">

 <div class="cms_bloc cms_bloc_title ">
	   <h2><b>Demande d'acte de décès</b></h2><br><br></div>
	   
	
   <form class="form-horizontal" role="form">
    <fieldset>
      <legend>Le demandeur</legend>
	  
	    <div class="form-group">
        <label class="col-sm-3 control-label" for="Civilite">Civilité:</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-3">
              <select class="form-control" name="Civilite">
                
                <option value="01">Madame</option>
                <option value="02">Mademoiselle</option>
                <option value="03">Monsieur</option>
               
              </select>
            </div>
			</div>
			</div>
			</div>
	  
      <div class="form-group">
        <label class="col-sm-3 control-label" for="actedeces-nom">Nom:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actedeces-nom" id="actedeces-nom" placeholder="">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actedeces-prenom">Prénom:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actedeces-prenom" id="actedeces-prenom" placeholder="">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actedeces-complement">Bâtiment / complément:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actedeces-complement" id="actedeces-complement" placeholder="">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actedeces-adresse">Adresse:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actedeces-adresse" id="actedeces-adresse" placeholder="">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actedeces-codepostal">Code postal:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actedeces-codepostal" id="actedeces-codepostal" placeholder="">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actedeces-ville">ville:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actedeces-ville" id="actedeces-ville" placeholder="">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actedeces-téléphone">Téléphone:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actedeces-téléphone" id="actedeces-téléphone" placeholder="">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actedeces-courriel">Courriel:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actedeces-courriel" id="actedeces-courriel" placeholder="">
        </div>
      </div>
	  
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="demande-en-qualité-de">Effectue la demande en qualité de:</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-3">
              <select class="form-control" name="demande-en-qualité-de">
                
                <option value="01">Conjoint</option>
                <option value="02">Père ou mère</option>
                <option value="03">Fille ou fils</option>
                <option value="04">Grand-père ou grand-mère</option>
                <option value="05">petit-fils ou petite-fille</option>
                <option value="06">Représentant légal</option>
                <option value="07">Notaire</option>
                <option value="08">Collectivité</option>
                <option value="09">Autre</option>
              
              </select>
            </div>
			</div>
			</div>
			</div>
	  
     
    </fieldset>
	
	<fieldset>
      <legend>La personne concernée</legend>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actedeces-nom-naissance">Nom de naissance:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actedeces-nom-naissance" id="actedeces-nom-naissance" placeholder="">
        </div>
      </div>
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actedeces-nom-usage">Nom d'usage:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actedeces-nom-usage" id="actedeces-nom-usage" placeholder="">
        </div>
      </div>
	   <div class="form-group">
        <label class="col-sm-3 control-label" for="expiry-month">Date du décès:</label>
        <div class="col-sm-6">
          <div class="row">
		  
		   <div class="col-xs-3">
		  <div class="form-group">
            <div class="col-sm-9">
            <input type="number" class="form-control" name="day-death" id="day-death" placeholder="">
            </div>
           </div>
		   </div>
		   
	         <div class="col-xs-3">
              <select class="form-control" name="expiry-month">
                <option>Month</option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
			
            <div class="col-xs-3">
			 <div class="form-group">
                 <div class="col-sm-10">
                 <input type="number" class="form-control" name="year-death" id="year-death" placeholder="" maxlength="4">
                 </div>
              </div>
            </div>
			
          </div>
        </div>
      </div>
	  
	  <fieldset>
      <legend>La demande</legend>
	  
	   <div class="form-group">
        <label class="col-sm-3 control-label" for="demande-en-qualité-de">Nombre d'exemplaires:</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-3">
              <select class="form-control" name="nbr-exemplaires">
                
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
              
              </select>
            </div>
			</div>
			</div>
			</div>
			
			</fieldset>
			
			 <div class="form-group">
               <div class="col-sm-offset-3 col-sm-9">
               <a href="#" class="btn  cliquez text-white" >Envoyer la demande</a>
              </div>
             </div>
			
			</fieldset>
  </form>
  </div>
  
  <?php include("footer.php"); ?>


</body>
</html>
