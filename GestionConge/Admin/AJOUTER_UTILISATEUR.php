<?php
  require 'connection.php';
  
  if(isset($_POST["submit"])){
    $Matricule  = $_POST["Matricule"];
    $Nom = $_POST["Nom"];
    $Prenom = $_POST["Prenom"];
    $CIN = $_POST["CIN"];
    $Date_naissance = $_POST["Date_naissance"];
    $Adresse = $_POST["Adresse"];
    $Ville = $_POST["Ville"];
    $Cnss = $_POST["Cnss"];
    $Fonction = $_POST["Fonction"];
    $Salaire = $_POST["Salaire"];
    $Email = $_POST["Email"];
    $Pass = $_POST["Pass"];



  $query = "INSERT INTO employe VALUES('$Matricule', '$Nom' , '$Prenom','$CIN','$Date_naissance','$Adresse','$Ville','$Cnss','$Fonction','$Salaire','$Email','$Pass')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
	<meta charset="UTF-8">
	<title>MASTER CONGEE </title>
	<link rel="stylesheet" href="styles.css">
    <style media="screnn">
     label{
      display: block;
    }
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
            <li> <a href="AJOUTER_UTILISATEUR.php"> <ion-icon name="person-add-outline"></ion-icon>&nbsp;&nbsp; Ajouter Employe </a></li>
            <li> <a href="MODIFIER_LES_INFORMATIONS.php"><ion-icon name="settings-outline"></ion-icon>&nbsp;&nbsp; Modifier les information  </a></li>
            <li> <a href="DEMANDE_DE_CONGE.php"> <ion-icon name="document-outline"></ion-icon>&nbsp;&nbsp; Demande de Conge </a></li>
            <li> <a href="SOLDE_DE_CONGE.php"><ion-icon name="calendar-outline"></ion-icon>&nbsp;&nbsp; Solde de Conge </a></li>
            <li> <a href="MODIFIER_MOT_DE_PASS.php"><ion-icon name="construct-outline"></ion-icon>&nbsp;&nbsp; Modifier Mote de passe </a></li>
            <li> <a href="LA_LISTE_DES_DEMANDEURS.php"><ion-icon name="list-outline"></ion-icon>&nbsp;&nbsp; Liste Des demandes </a></li>
            <li> <a href="recherche.php"><ion-icon name="list-outline"></ion-icon>&nbsp;&nbsp; Recherché Employé </a></li>
            <li> <a href="Login.php"><ion-icon name="log-out-outline"></ion-icon>&nbsp;&nbsp; Déconnecter</a></li>

        </ul> 
    </div>


  <div class="main_m">
     <div class="header"> Master Conge </div>  
        <div class="info">
          <div><br><br>
             <h2 style="text-align: center;">  Ajouter Employe </h2>
             <br><br>
               <form class="" action="" method="post" autocomplete="off">
                 <table class="tab" style=" margin-left: 25%;" >
                      <tr>
                            <th> <label for="">Matricule</label></th>
                            <th> <input type="number" name="Matricule" required value=""></th>
                     </tr>

                     <tr>
                         <th> <label for="">Nom</label> </th>
                         <th> <input type="text" name="Nom" required value=""> </th>
                     </tr>

                     <tr>
                         <th> <label for="">Prenom</label> </th>
                         <th> <input type="text" name="Prenom" required value=""> </th>
                     </tr>

                     <tr>
                          <th> <label for="">CIN</label> </th>
                          <th> <input type="text" name="CIN" required value=""> </th>
                     </tr>

                     <tr>
                          <th> <label for="">Date Nissance</label> </th>
                          <th> <input type="date" name="Date_naissance" required value=""> </th>
                     </tr>

                     <tr>
                         <th> <label for="">Adresse</label> </th>
                         <th> <input type="text" name="Adresse" required value=""> </th>
                     </tr>

                     <tr>
                         <th> <label for="">Ville</label> </th>
                         <th> <input type="text" name="Ville" required value=""> </th>
                     </tr>

                     <tr>
                         <th> <label for="">Cnss</label> </th>
                         <th> <input type="number" name="Cnss" required value=""> </th>
                     </tr>

                     <tr>
                         <th> <label  for="">Fonction</label> </th>
                         <th>
                             <label><select class="" name="Fonction" required>
                             <option value="" selected hidden>Select Fonction</option>
                             <option value="OPERATEUR">OPERATEUR</option>
                             <option value="CHEF EQUIPE">CHEF EQUIPE</option>           
                             <option value="CHEF PROJET">CHEF PROJET</option>           
                             <option value="GERANT">GERANT</option>
                             <option value="DIRECTEUR PROJET">DIRECTEUR PROJET</option>
                             <option value="ADMIN">ADMIN</option>
                             </select></label> 
                         </th>
                     </tr>

                     <tr>
                         <th> <label for="">Salaire</label> </th>
                         <th> <input type="number" name="Salaire" required value=""> </th>
                     </tr>

                     <tr>
                         <th> <label for="">Email</label> </th>
                         <th> <input type="text" name="Email" required value=""> </th>
                     </tr>
    
                     <tr>
                         <th> <label for="">Password</label> </th>
                         <th> <input type="text" name="Pass" required value=""> </th>
                     </tr>
    
                     <tr>
                          <th><br></th>
                          <th><br></th>
                     </tr>

                     <tr>
                        <th></th>
                         <th><button  class="button" type="submit" name="submit" style="margin-left: 2%; width: 70px;height: 30px;font-weight: 700;"> Ajouter </button></th>
                     </tr>

                     <tr>
                          <th><br></th>
                          <th><br></th>
                     </tr>

                     </table >
             </form>
    </div>
       
     
   
    <div class="info">
   <table class="table table-bordered" border="1" align="left"width: "auto";>
            <tr>
                <td colspan="12">
                    <center>
                        <h3 style="background-color:#FCF360">Output Date Inserted in Database</h3>
                    </center>
                </td>
            </tr>
            <tr>
            <tr>
                <center>
                    <th style="background-color:#F3F0BF ">Matricule</th>
                    <th style="background-color:#F3F0BF ">Nom</th>
                    <th style="background-color:#F3F0BF ">Prenom</th>
                    <th style="background-color:#F3F0BF ">CIN</th>
                    <th style="background-color:#F3F0BF ">Date naissance</th>
                    <th style="background-color:#F3F0BF ">Adresse</th>
                    <th style="background-color:#F3F0BF ">Ville</th>
                    <th style="background-color:#F3F0BF ">Cnss</th>
                    <th style="background-color:#F3F0BF ">Fonction</th>
                    <th style="background-color:#F3F0BF ">Salaire</th>
                    <th style="background-color:#F3F0BF ">Email</th>
                    <th style="background-color:#F3F0BF ">Password</th>
                    
                </center>
            </tr> <?php $fetchqry = "SELECT * FROM `employe`";
                    $result1 = mysqli_query($conn, $fetchqry);
                    $num = mysqli_num_rows($result1);
                    if ($num > 0) {
                        while ($row = mysqli_fetch_array($result1, MYSQLI_ASSOC)) { ?> <tr>
                        <td>
                            <p><?php echo $row['Matricule']; ?></p>
                        </td>

                        <td>
                          <p><?php echo $row['Nom'] ?> </p>
                        </td>

                        <td>
                            <p><?php echo $row['Prenom']; ?></p>
                        </td>

                        <td>
                            <p><?php echo $row['CIN']; ?></p>
                        </td>

                        <td>
                            <p><?php echo $row['Date_naissance']; ?></p>
                        </td>

                        <td>
                            <p><?php echo $row['Adresse']; ?></p>
                        </td>

                        <td>
                            <p><?php echo $row['Ville']; ?></p>
                        </td>

                        <td>
                            <p><?php echo $row['Cnss']; ?></p>
                        </td>

                        <td>
                            <p><?php echo $row['Fonction']; ?></p>
                        </td>

                        <td>
                            <p><?php echo $row['Salaire']; ?></p>
                        </td>

                        <td>
                            <p><?php echo $row['Email']; ?></p>
                        </td>

                        <td>
                            <p><?php echo $row['Pass']; ?></p>
                        </td>

                    </tr> <?php }
                    } ?> </tr>
        </table>

    </div>
  
</body>
</html>
   
