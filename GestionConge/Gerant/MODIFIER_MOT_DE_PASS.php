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
             <h2 style="text-align: center;">  Modifier Mot de passe  </h2>
             <br>

              <table class="tab" border="0" style="text-align:center ; margin-left: 20%;">
                <tr>
                    <td colspan="2">Mot passe actuel : </td>
                    <td>  <input type="password" /> </td>
                </tr>

                <tr>
                    <td>  <br></td>
                </tr>

                
                <tr>
                    <td colspan="2">Nouveau le mot passe:</td>
                    <td>  <input type="password" /> </td>
                </tr>

                <tr>
                    <td>  <br></td>
                </tr>

                <tr>
                    <td colspan="2">Confirmez  mot passe actuel:</label> </td>
                    <td>  <input type="password" /> </td>
                </tr>
                
                <tr>
                    <td>  <br></td>
                </tr>
      
                <tr>
                    <td><input  type="submit" name="Demande" value="Enregistrer "style="margin-left: 70%; width: 80px ; height: 35px; font-weight: 700;"  /></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</td>
                     <td><input  type="submit" name="Annule"  value="Annule"  style="margin-left: 70%; width: 80px ; height: 35px; font-weight: 700;"  /></td>
                </tr>  

                <tr>
                 <td><br></td>
                </tr>
            

            </table>

          </div>
         
      </div>
    </div>
</div>

</body>
</html>