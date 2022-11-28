<?php
$conn = mysqli_connect("localhost", "root", "root", "dbconge") or die (mysqli_error($conn));
$query ="select * from employe";
$resulat = mysqli_query($conn,$query) or die (mysqli_error($conn));
$rows = mysqli_fetch_all($resulat,MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
	<meta charset="UTF-8">
	<title>MASTER CONGEE </title>

    </head>
<body>

    <main>
    <div  class="tale1">
	<form action="" method="post">

        <table>
            <tr>

                <th> <p> Enter Matricule  </p></th>
                <th>&nbsp;</th>
                <th>    <select name="search"required  id="" class="form-control">
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
        echo "That is not allowed!";
        exit();
    }
?>



            
        <!--    
            
            <?php $fetchqry =   "SELECT * FROM 'employe' WHERE 'Matricule' LIKE ? ";;
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
                -->
</body>
</html>

