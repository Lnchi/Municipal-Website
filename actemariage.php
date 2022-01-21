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


<div class="container main ">

 <div class="cms_bloc cms_bloc_title ">
	   <h2><b>Demande d'acte de mariage</b></h2><br><br></div>
	   
	
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
        <label class="col-sm-3 control-label" for="actemariage-nom">Nom:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actemariage-nom" id="actemariage-nom" placeholder="">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actemariage-prenom">Prénom:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actemariage-prenom" id="actemariage-prenom" placeholder="">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actemariage-complement">Bâtiment / complément:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actemariage-complement" id="actemariage-complement" placeholder="">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actemariage-adresse">Adresse:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actemariage-adresse" id="actemariage-adresse" placeholder="">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actemariage-codepostal">Code postal:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actemariage-codepostal" id="actemariage-codepostal" placeholder="">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actemariage-ville">ville:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actemariage-ville" id="actemariage-ville" placeholder="">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actemariage-téléphone">Téléphone:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actemariage-téléphone" id="actemariage-téléphone" placeholder="">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actemariage-courriel">Courriel:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actemariage-courriel" id="actemariage-courriel" placeholder="">
        </div>
      </div>
	  

	  <div class="form-group">
        <label class="col-sm-3 control-label" for="demande-en-qualité-de">Effectue la demande en qualité de:</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-5">
              <select class="form-control" name="demande-en-qualité-de">
                <option value="00">Personne concernée par l'acte</option>
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
      <legend>Les personnes concernées</legend>
	  
	   <div class="form-group">
        <label class="col-sm-3 control-label" for="jour-mariage">Date du mariage:</label>
        <div class="col-sm-6">
          <div class="row">
		  
		   <div class="col-xs-3">
		  <div class="form-group">
            <div class="col-sm-9">
            <input type="number" class="form-control" name="jour-mariage" id="jour-mariage" placeholder="">
            </div>
           </div>
		   </div>
		   
	         <div class="col-xs-3">
              <select class="form-control" name="mois-mariage">
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
                 <input type="number" class="form-control" name="annee-mariage" id="annee-mariage" placeholder="" maxlength="4">
                 </div>
              </div>
            </div>
			
          </div>
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actemariage-nom-naissance-epoux">Nom de naissance de l'époux:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actemariage-nom-naissance-epoux" id="actedeces-nom-naissance" placeholder="">
        </div>
      </div>
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actemariage-prenom-naissance-epoux">Prénom d'usage de l'époux:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actemariage-prenom-naissance-epoux" id="actedeces-nom-usage" placeholder="">
        </div>
      </div>
	  
	  
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="jour-naissance-epoux">Date de naissance de l'époux:</label>
        <div class="col-sm-6">
          <div class="row">
		  
		   <div class="col-xs-3">
		  <div class="form-group">
            <div class="col-sm-9">
            <input type="number" class="form-control" name="jour-naissance-epoux" id="jour-naissance-epoux" placeholder="">
            </div>
           </div>
		   </div>
		   
	         <div class="col-xs-3">
              <select class="form-control" name="mois-naissance-epoux">
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
                 <input type="number" class="form-control" name="annee-naissance-epoux" id="annee-naissance-epoux" placeholder="" maxlength="4">
                 </div>
              </div>
            </div>
			
          </div>
        </div>
      </div>
	  
	    <div class="form-group">
        <label class="col-sm-3 control-label" for="actemariage-commune-epoux">Commune de naissance de l'époux:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actemariage-commune-epoux" id="actemariage-commune-epoux" placeholder="">
        </div>
      </div>
	  
	    <div class="form-group">
        <label class="col-sm-3 control-label" for="actemariage-departement-epoux">Département de naissance de l'époux:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actemariage-departement-epoux" id="actemariage-departement-epoux" placeholder="">
        </div>
      </div>
	  
	    <div class="form-group">
        <label class="col-sm-3 control-label" for="actemariage-pays-epoux">Pays de naissance de l'époux:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actemariage-pays-epoux" id="actemariage-pays-epoux" placeholder="">
        </div>
      </div>
	  
	    <div class="form-group">
        <label class="col-sm-3 control-label" for="actemariage-nom-epouse">Nom de naissance de l'épouse:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actemariage-nom-epouse" id="actemariage-nom-epouse" placeholder="">
        </div>
      </div>
	  
	    <div class="form-group">
        <label class="col-sm-3 control-label" for="actemariage-prenom-epouse">Prénom d'usage de l'épouse:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actemariage-prenom-epouse" id="actemariage-prenom-epouse" placeholder="">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="jour-naissance-epouse">Date de naissance de l'épouse:</label>
        <div class="col-sm-6">
          <div class="row">
		  
		   <div class="col-xs-3">
		  <div class="form-group">
            <div class="col-sm-9">
            <input type="number" class="form-control" name="jour-naissance-epouse" id="jour-naissance-epouse" placeholder="">
            </div>
           </div>
		   </div>
		   
	         <div class="col-xs-3">
              <select class="form-control" name="mois-naissance-epouse">
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
                 <input type="number" class="form-control" name="annee-naissance-epouse" id="annee-naissance-epouse" placeholder="" maxlength="4">
                 </div>
              </div>
            </div>
			
          </div>
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actemariage-commune-epouse">Commune de naissance de l'épouse:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actemariage-commune-epouse" id="actemariage-commune-epouse" placeholder="">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actemariage-departement-epouse">Département de naissance de l'épouse:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actemariage-departement-epouse" id="actemariage-departement-epouse" placeholder="">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actemariage-pays-epouse">Pays de naissance de l'épouse:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actemariage-pays-epouse" id="actemariage-pays-epouse" placeholder="">
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
