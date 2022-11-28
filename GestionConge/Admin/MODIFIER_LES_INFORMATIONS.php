

<?php
// dropdown list Matricule 
// Connect to the database
$conn = mysqli_connect("localhost", "root", "root", "dbconge") or die (mysqli_error($conn));
// Select all in table employe 
$query ="select * from employe";
$resulat = mysqli_query($conn,$query) or die (mysqli_error($conn));
$rows = mysqli_fetch_all($resulat,MYSQLI_ASSOC);

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
            <li> <a href="Login.php"><ion-icon name="log-out-outline"></ion-icon>&nbsp;&nbsp; Déconnecter</a></li>

        </ul> 
    </div>


  <div class="main_m">
     <div class="header"> Master Conge </div>  
        <div class="info">
          <div><br><br>
             <h2 style="text-align: center;">  Modifier Information </h2>
             <br><br>
             <form class="" action="" method="post" autocomplete="off">


<!-- for search-->
            <table class="tab" style=" margin-left: 25%;">
               <tr>

                   <th> <p>  Matricule  </p></th>

                   <th>&nbsp;</th>

                   <th>    
                        <select name="search"required  id="" class="form-control">
                         <option value="-1">Select Matricule </option>
                          <?php foreach($rows as $row ){ ?>
                            <option = value="<?= $row['Matricule']?>"><?= $row['Matricule']?></option>
                          <?php }?>
                        </select>
                    </th>

                    <th>&nbsp;</th>

		            <th> <button type="submit" name="submit">Search</button> </th>

                </tr>
          
            </tale>

	         </form>
           </div>
</main>

<div class="tale2">
   <table class="table table-bordered" border="1"  style=" margin-left: 0% ; align= left ; width: 100%;">

            <tr>
                <br>
            </tr>
            <tr>
                <td colspan="12">
                    <center>
                        <h3 style="background-color:#FCF360">Output Usre in Database</h3>
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
            </tr> 
            <?php
    if (isset($_POST['submit'])) {
        // Connect to the database
        $connection_string = new mysqli("localhost", "root", "root", "dbconge");
        
        // Escape the search string and trim
        // all whitespace
        $searchString = mysqli_real_escape_string($connection_string, trim(htmlentities($_POST['search'])));

        // If there is a connection error, notify
        // the user, and Kill the script.
        if ($connection_string->connect_error) {
            echo "Failed to connect to Database";
            exit();
        }

        // Check for empty strings and non-alphanumeric
        // characters.
        // Also, check if the string length is less than
        // three. If any of the checks returns "true",
        // return "Invalid search string", and
        // kill the script.
        if ($searchString === "" || !ctype_alnum($searchString) || $searchString < 3) {
            echo "Invalid search string";
            exit();
        }

        // We are using a prepared statement with the
        // search functionality to prevent SQL injection.
        // So, we need to prepend and append the search
        // string with percent signs
        $searchString = "%$searchString%";

        // The prepared statement
        $sql = "SELECT * FROM employe WHERE Matricule LIKE ? ";
       // $sql = "SELECT * FROM employe WHERE Matricule LIKE ?  or CIN LIKE ? ";


        // Prepare, bind, and execute the query
        $prepared_stmt = $connection_string->prepare($sql);
        $prepared_stmt->bind_param('s', $searchString);
        $prepared_stmt->execute();

        // Fetch the result
        $result = $prepared_stmt->get_result();

        if ($result->num_rows === 0) {
            // No match found
            echo "No match found";
            // Kill the script
            exit();

        } else {
            // Process the result(s)
            while ($row = $result->fetch_assoc()) {
                
        
                echo "<th>". $row['Matricule'] . "</th>";
                echo "<th>". $row['Nom'] . "</th>";
                echo "<th>". $row['Prenom'] .  "</th>";
                echo "<th>". $row['CIN'] .  "</th>";
                echo "<th>". $row['Date_naissance'] .  "</th>";
                echo "<th>". $row['Adresse'] .  "</th>";
                echo "<th>". $row['Ville'] .  "</th>";
                echo "<th>". $row['Cnss'] . "</th>";
                echo "<th>". $row['Fonction'] .  "</th>";
                echo "<th>". $row['Salaire'] .  "</th>";
                echo "<th>". $row['Email'] .  "</th>";
                echo "<th>". $row['Pass'] . "</th>";

            } // end of while loop
        } // end of if($result->num_rows)

    } else { // The user accessed the script directly

        // Tell them nicely and kill the script.
        //echo "That is not allowed!";
        exit();
    }
?>
             <form class="" action="updates.php" method="post" autocomplete="off">


                 <table class="tab" style=" margin-left: 25%;" >

                     <tr>
                          <th><br></th>
                          <th><br></th>
                     </tr>
                     <tr>
                          <th><br></th>
                          <th><br></th>
                     </tr>

                     <tr>
                         <th> <label for="">Nom</label> </th>
                         <th colspan="2"> <input type="text" name="Nom" required value=""> </th>
                     </tr>

                     <tr>
                         <th> <label for="">Prenom</label> </th>
                         <th colspan="2"> <input type="text" name="Prenom" required value=""> </th>
                     </tr>

                     <tr>
                          <th> <label for="">CIN</label> </th>
                          <th colspan="2"> <input type="text" name="CIN" required value=""> </th>
                     </tr>

                     <tr>
                          <th> <label for="">Date Nissance</label> </th>
                          <th colspan="2"> <input type="date" name="Date_naissance" required value=""> </th>
                     </tr>

                     <tr>
                         <th> <label for="">Adresse</label> </th>
                         <th colspan="2"> <input type="text" name="Adresse" required value=""> </th>
                     </tr>

                     <tr>
                         <th> <label for="">Ville</label> </th>
                         <th colspan="2"> <input type="text" name="Ville" required value=""> </th>
                     </tr>

                     <tr>
                         <th> <label for="">Cnss</label> </th>
                         <th colspan="2"> <input type="number" name="Cnss" required value=""> </th>
                     </tr>

                     <tr>
                         <th> <label  for="">Fonction</label> </th>
                         <th colspan="2">
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
                         <th colspan="2"> <input type="number" name="Salaire" required value=""> </th>
                     </tr>

                     <tr>
                         <th> <label for="">Email</label> </th>
                         <th colspan="2"> <input type="text" name="Email" required value=""> </th>
                     </tr>
    
                     <tr>
                         <th> <label for="">Password</label> </th>
                         <th colspan="2"> <input type="text" name="Pass" required value=""> </th>
                     </tr>
    
                     <tr>
                          <th><br></th>
                          <th colspan="2"><br></th>
                     </tr>

                     <tr>
                        <th></th>
                        <th colspan="2"><button  class="button" type="submit" name="Msubmit" style="margin-left: 2%; width: 70px;height: 30px;font-weight: 700;"> Modifier </button></th>
                     </tr>

                     <tr>
                          <th><br></th>
                          <th><br></th>
                     </tr>

                     </table >
             </form>
    </div>
       
     
  
</body>
</html>


   
