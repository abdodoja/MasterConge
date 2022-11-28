<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>MASTER CONGEE </title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    
</head>
<body>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>    

<div class="MASTER">
    <div class="MCONGE">
        <h3></h3>
        <ul>
            <li> <a href="ProfilUtilisateur.php"><ion-icon name="person-outline"></ion-icon>&nbsp;&nbsp; Profile </a></li> 
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
                 <h2 style="text-align: center;">  Liste des demandes  </h2>
                 <br>

                 <table class="tab" border="1" style="text-align:center ; margin-left: 20%;    background-color: rgb(220, 220, 220);">
                     <tr style=" background-color: rgb(243, 232, 232);">
                        <td>Num Demand</td>
                        <td>Nom Utilisateur </td>
                        <td>Nbr jours </td>
                        <td>Projet </td>
                     </tr>

                     <tr>
                        <td> 11</td>
                        <td>Nom Utilisateur1 </td>
                        <td>3 </td>
                        <td>Projet1 </td>
                     </tr>

                     <tr>
                        <td>22</td>
                        <td>Nom Utilisateur2 </td>
                        <td>5 </td>
                        <td>Projet2 </td>
                     </tr>

                     <tr>
                        <td>33</td>
                        <td>Nom Utilisateur3 </td>
                        <td>7 </td>
                        <td>Projet3 </td>
                     </tr>

                  </table>

                  <br>
                </div>

            </div>
         
      </div>
    </div>
</div>

</body>
</html>