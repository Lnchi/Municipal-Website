
<header>

<nav id="navbar" class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="projet.php">Bienvenue sur le site de THENIA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a id ="nav_lien" class="nav-link" href="projet.php">Acceuil</a>
      </li>
      <li class="nav-item">
        <a id ="nav_lien" class="nav-link" href="contact.php">contact</a>
      </li>
     <li class="nav-item">
        <a id ="nav_lien" class="nav-link" href="maville.php">Ma ville</a>
      </li>
	<li class="nav-item dropdown">
      <a id ="nav_lien" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Vie municipale
      </a>
       <div class="dropdown-menu">
        <a id ="nav_lien" class="dropdown-item" href="conseil_municipal.php">L'equipe municipal</a>
        <a id ="nav_lien" class="dropdown-item" href="pompier.php">Sapeurs-pompiers</a>
        
      </div>
    </li>  
	<li class="nav-item dropdown">
      <a id ="nav_lien" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
         Démarches administratives
      </a>
      <div class="dropdown-menu">
        <a id ="nav_lien" class="dropdown-item" href="demarches.php">Vos démarches</a>
        
      </div>
    </li>  
	 <li class="nav-item ">
        <a id ="nav_lien" class="nav-link " href="equipement.php">Equipments </a>
      </li>
	 <li class="nav-item ">
        <a id ="nav_lien" class="nav-link " href="boite.php">Je participe !</a>
      </li>
	 <?php if (isset($_SESSION['auth'])):?>
                <li class="nav-item ">
        <a id ="nav_lien" class="nav-link " href="account.php">Mon profil</a>
      </li>
				<?php else: ?>   
               
				 <li class="nav-item ">
        <a id ="nav_lien" class="nav-link " href="login.php">Se connecter</a>
      </li>
               <?php endif; ?>
	
    </ul>
  </div>  
</nav>



    </header>