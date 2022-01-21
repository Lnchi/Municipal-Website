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
	   <h2><b>Demande d'acte de naissance</b></h2><br><br></div>
	   
	     <?php if(array_key_exists('errors',$_SESSION)): ?>
				   <div class="errors">
				     <?= implode('<br>', $_SESSION['errors']); ?>
					</div>
				   <?php  endif; ?>
				   
				   
				   
				  <?php if(array_key_exists('success',$_SESSION)): ?>
				   <div class="success">
					       Vos informations ont bien été envoyées
					</div>
				   <?php  endif; ?>
	   
	
   <form class="form-horizontal" action="postactenaissance.php" method="POST">
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
        <label class="col-sm-3 control-label" for="actenaissance_nom">Nom:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actenaissance_nom" id="actenaissance_nom" placeholder="" value="<?= isset($_SESSION['inputs']['actenaissance_nom'])? $_SESSION['inputs']['actenaissance_nom']:''; ?>">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actenaissance_prenom">Prénom:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actenaissance_prenom" id="actenaissance_prenom" placeholder="" value="<?= isset($_SESSION['inputs']['actenaissance_prenom'])? $_SESSION['inputs']['actenaissance_prenom']:''; ?>">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actenaissance_complement">Bâtiment / complément:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actenaissance_complement" id="actenaissance_complement" placeholder="" value="<?= isset($_SESSION['inputs']['actenaissance_complement'])? $_SESSION['inputs']['actenaissance_complement']:''; ?>">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actenaissance_adresse">Adresse:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actenaissance_adresse" id="actenaissance_adresse" placeholder="" value="<?= isset($_SESSION['inputs']['actenaissance_adresse'])? $_SESSION['inputs']['actenaissance_adresse']:''; ?>">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actenaissance_codepostal">Code postal:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actenaissance_codepostal" id="actenaissance_codepostal" placeholder="" value="<?= isset($_SESSION['inputs']['actenaissance_codepostal'])? $_SESSION['inputs']['actenaissance_codepostal']:''; ?>">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actenaissance_ville">ville:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actenaissance_ville" id="actenaissance_ville" placeholder="" value="<?= isset($_SESSION['inputs']['actenaissance_ville'])? $_SESSION['inputs']['actenaissance_ville']:''; ?>">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actenaissance_telephone">Téléphone:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actenaissance_telephone" id="actenaissance_telephone" placeholder="" value="<?= isset($_SESSION['inputs']['actenaissance_telephone'])? $_SESSION['inputs']['actenaissance_telephone']:''; ?>">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actenaissance_courriel">Courriel:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actenaissance_courriel" id="actenaissance_courriel" placeholder="" value="<?= isset($_SESSION['inputs']['actenaissance_courriel'])? $_SESSION['inputs']['actenaissance_courriel']:''; ?>">
        </div>
      </div>
	  
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="demande_en_qualité_de">Effectue la demande en qualité de:</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-5">
              <select class="form-control" name="demande_en_qualité_de">
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
        <label class="col-sm-3 control-label" for="actenaissance_nom_naissance">Nom de naissance </label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actenaissance_nom_naissance" id="actenaissance_nom_naissance" placeholder="" value="<?= isset($_SESSION['inputs']['actenaissance_nom_naissance'])? $_SESSION['inputs']['actenaissance_nom_naissance']:''; ?>">
        </div>
      </div>
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actenaissance_prenom_naissance">Prénom d'usage:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actenaissance_prenom_naissance" id="actenaissancepre_prenom_naissance" placeholder="" value="<?= isset($_SESSION['inputs']['actenaissance_prenom_naissance'])? $_SESSION['inputs']['actenaissance_prenom_naissance']:''; ?>">
        </div>
      </div>
	  
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="jour_naissance_actenaissance">Date de naissance:</label>
        <div class="col-sm-6">
          <div class="row">
		  
		   <div class="col-xs-3">
		  <div class="form-group">
            <div class="col-sm-9">
            <input type="number" class="form-control" name="jour_naissance_actenaissance" id="jour_naissance_actenaissance" placeholder="" value="<?= isset($_SESSION['inputs']['jour_naissance_actenaissance'])? $_SESSION['inputs']['jour_naissance_actenaissance']:''; ?>" >
            </div>
           </div>
		   </div>
		   
	         <div class="col-xs-4">
              <select class="form-control" name="mois_naissance_actenaissance">
                
                <option value="01">Jan (01)</option>
                <option value="02">Fev (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Avr (04)</option>
                <option value="05">Mai (05)</option>
                <option value="06">Jui (06)</option>
                <option value="07">Juil (07)</option>
                <option value="08">Aou (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
			
            <div class="col-xs-3">
			 <div class="form-group">
                 <div class="col-sm-10">
                 <input type="number" class="form-control" name="annee_naissance_actenaissance" id="annee_naissance_actenaissance" placeholder="" value="<?= isset($_SESSION['inputs']['annee_naissance_actenaissance'])? $_SESSION['inputs']['annee_naissance_actenaissance']:''; ?>">
                 </div>
              </div>
            </div>
			
          </div>
        </div>
      </div>
	  
	    <div class="form-group">
        <label class="col-sm-3 control-label" for="actenaissance_commune">Commune de naissance:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actenaissance_commune" id="actenaissance_commune" placeholder="" value="<?= isset($_SESSION['inputs']['actenaissance_commune'])? $_SESSION['inputs']['actenaissance_commune']:''; ?>">
        </div>
      </div>
	  
	    <div class="form-group">
        <label class="col-sm-3 control-label" for="actenaissance_cp">Code postale de naissance:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actenaissance_cp" id="actenaissance_cp" placeholder="" value="<?= isset($_SESSION['inputs']['actenaissance_cp'])? $_SESSION['inputs']['actenaissance_cp']:''; ?>">
        </div>
      </div>
	  
	  
	    <div class="form-group">
        <label class="col-sm-3 control-label" for="actenaissance_nompere">Nom du père:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actenaissance_nompere" id="actenaissance_nompere" placeholder="" value="<?= isset($_SESSION['inputs']['actenaissance_nompere'])? $_SESSION['inputs']['actenaissance_nompere']:''; ?>">
        </div>
      </div>
	  
	    <div class="form-group">
        <label class="col-sm-3 control-label" for="actenaissance_prenompere">Prénom d'usage du père:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actenaissance_prenompere" id="actenaissance_prenompere" placeholder="" value="<?= isset($_SESSION['inputs']['actenaissance_prenompere'])? $_SESSION['inputs']['actenaissance_prenompere']:''; ?>">
        </div>
      </div>
	  
	 
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actenaissance_nommere">Nom de naissance de la mère:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actenaissance_nommere" id="actenaissance_nommere" placeholder="" value="<?= isset($_SESSION['inputs']['actenaissance_nommere'])? $_SESSION['inputs']['actenaissance_nommere']:''; ?>">
        </div>
      </div>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="actenaissance_prenommere">Prénom d'usage de la mère:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="actenaissance_prenommere" id="actenaissance_prenommere" placeholder="" value="<?= isset($_SESSION['inputs']['actenaissance_prenommere'])? $_SESSION['inputs']['actenaissance_prenommere']:''; ?>">
        </div>
      </div>
	  
	  <fieldset>
      <legend>La demande</legend>
	  
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="nature_acte">Nature de l'acte:</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-4">
              <select class="form-control" name="nature_acte">
                
                <option value="01">Extrait avec filiation</option>
                <option value="02">Extrait sans filiation</option>
                <option value="03">Copie intégrale</option>
               
              
              </select>
            </div>
			</div>
			</div>
			</div>
	  
	   <div class="form-group">
        <label class="col-sm-3 control-label" for="nombre_exemplaires">Nombre d'exemplaires:</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-3">
              <select class="form-control" name="nombre_exemplaires">
                
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
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Envoyer</button>
				  </div>
			</div>
			
			</fieldset>
  </form>
  </div>
  
  <?php include("footer.php"); ?>


</body>
</html>

 <?php 
  unset($_SESSION['inputs']);
  unset($_SESSION['errors']);
  unset($_SESSION['success']);
  ?>
 