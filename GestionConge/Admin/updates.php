<?php
$conn = mysqli_connect("localhost", "root", "root", "dbconge") or die (mysqli_error($conn));
  
  if(isset($_POST["Msubmit"])){
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

   // Record modification request

  $query ="UPDATE employe SET 
   Nom='$Nom' , 
   Prenom='$Prenom',
   CIN='$CIN',
   Date_naissance='$Date_naissance',
   Adresse='$Adresse', 
   Ville= '$Ville',
   Cnss='$Cnss',
   Fonction='$Fonction',
   Salaire'$Salaire',
   Email'$Email',
   Pass'$Pass' 
   WHERE Matricule=$Matricule";

   // Execute the query
   $resultat=mysqli_query($conn,$query);
   // Control over the request
    if(!$resultat) {
        die('Erreur SQL !'.$query.'<br />'.mysql_error());
       }
       else {
         echo "<div class='alert alert-success'><h1>Requête validée !</h1><p>La mise a jour a bien été effectuée !</p>";
       }
?>