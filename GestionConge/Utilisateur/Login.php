<html>
 <head>
 <meta charset="utf-8">
 <!-- importer le fichier de style -->
 <link rel="stylesheet" href="Style.css" media="screen" type="text/css" />
 </head>
 <body class="top">
  <form action="ProfilUtilisateur.php" method="post">

    <div id="T1"> 
     <table border="0" >
            <tr><td id="t2">MASTER</td> <td>&nbsp;&nbsp;  </td> <td id="t3">CONGE</td></tr>
      </table>

            </div>
            <div id="container"> 
            <!-- zone de connexion -->
              <h1 style="font-size:35px">Connexion</h1>
 
                  <label><b style="font-size:20px"> Matricule </b></label>
                  <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                  <label><b style="font-size:20px">Mot de passe</b></label>
                  <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                  <input style="font-size:20px" type="submit" id='submit' value='LOGIN' >
 

 </div>
 </form>
 <p>Master Conge 2022@</p>


 <?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
</form>
 </body>
</html>