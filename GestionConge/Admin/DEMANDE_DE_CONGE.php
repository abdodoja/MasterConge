<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>MASTER CONGEE </title>
	<link rel="stylesheet" href="styles.css">
    <style>
      .button:hover 
      {
      background-color:yellow;
      transition: 0.7s;
      border:0;
     }
     </style>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    
</head>
<body>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>    

<div class="MASTER">
    <div class="MCONGE">
        <h3></h3>
        <ul>
            <li> <a href="ProfilAdmin.php"><ion-icon name="person-outline"></ion-icon>&nbsp;&nbsp; Profile </a></li> 
            <li> <a href="AJOUTER_UTILISATEUR.php"> <ion-icon name="person-add-outline"></ion-icon>&nbsp;&nbsp; Ajouter Utlisateur </a></li>
            <li> <a href="MODIFIER_LES_INFORMATIONS.php"><ion-icon name="settings-outline"></ion-icon>&nbsp;&nbsp; Modifier les information  </a></li>
            <li> <a href="DEMANDE_DE_CONGE.php"> <ion-icon name="document-outline"></ion-icon>&nbsp;&nbsp; Demande de Conge </a></li>
            <li> <a href="SOLDE_DE_CONGE.php"><ion-icon name="calendar-outline"></ion-icon>&nbsp;&nbsp; Solde de Conge </a></li>
            <li> <a href="MODIFIER_MOT_DE_PASS.php"><ion-icon name="construct-outline"></ion-icon>&nbsp;&nbsp; Modifier Mote de passe </a></li>
            <li> <a href="LA_LISTE_DES_DEMANDEURS.php"><ion-icon name="list-outline"></ion-icon>&nbsp;&nbsp; Liste Des demandes </a></li>
            <li> <a href="Login.php"><ion-icon name="log-out-outline"></ion-icon>&nbsp;&nbsp; Déconnecter</a></li>

        </ul> 
      
      

    </div>
    <div class="main_m">
        <div class="header"> Master Conge </div>  
        <div class="info">
          <div>

          <br>
          <h2 style="text-align: center;"> Demande de Conge </h2>
        <br>

          <table class="tab"style="text-align:center ; margin-left: 20%;" >
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Debut :</td>
                <td> <input type="date" name="Prenom" /></td>
            </tr>

            <tr>
             <td>  <br></td>
            </tr>

            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Debut :</td>
                <td> <input type="date" name="Prenom" /></td>
            </tr>

            <tr>
             <td>  <br></td>
            </tr>

            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Projet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td><select id="Fon">
                <option value="UTILISATEUR">Projet Rabat</option>
                <option value="CHEF_PROJET">Projet Casa</option>
                <option value="DIRECTEUR_PROJET">Projet El jadida</option>
                <option value="ADMIN">Projet Agadir</option></select>
                </td>
            </tr>

            <tr>
             <td>  <br></td>
            </tr>

            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nbr jour&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td> <label >3</label> jour</td>
            </tr>

            <tr>
            <td>  <br></td>
            </tr>
      
            <tr>
                <td><input class="button"  type="submit" name="Demande" value="Demande "style="margin-left: 50%; width: 80px ; height: 35px; font-weight: 700;"  /></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</td>
                <td><input class="button" type="submit" name="Annule"  value="Annule"  style="margin-left: 10%; width: 80px ; height: 35px; font-weight: 700;"  /></td>

            </tr>   
        <tr><td><br></td></tr>
    </table> 


          </div>
         
      </div>
    </div>
</div>

</body>
</html>