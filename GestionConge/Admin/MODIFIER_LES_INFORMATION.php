<?php   
//********************* CONNEXION AVEC BASE DE DONNEE DBCONGE*********************//
try {
 	$conn = new PDO("mysql:host=localhost;dbname=dbconge;port=3306;charset=utf8", 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
 	echo 'Erreur de connexion: ' . $e->getMessage(); 
}
//*********************LOGIN *********************// 

//*********************AFFICHAGE*********************//

//*********************DEMANDE*********************// 

//*********************LISTE DEMANDE *********************// 

//********************* MODIFIER *********************//

    if(isset($_POST['Matricule']) && isset($_POST['Nom']) && isset($_POST['Prenom']) && isset($_POST['CIN'])&& isset($_POST['Date_naissance'])&& isset($_POST['Adresse'])&& isset($_POST['CNSS'])&& isset($_POST['Salaire'])&& isset($_POST['Email'])&& isset($_POST['Ville'])){
    if(!empty($_POST['Matricule']) && !empty($_POST['Nom']) && !empty($_POST['Prenom']) && !empty($_POST['CIN'])&& !empty($_POST['Date_naissance'])&& !empty($_POST['Adresse'])&& !empty($_POST['CNSS'])&& !empty($_POST['Salaire'])&& !empty($_POST['Email'])&& !empty($_POST['Ville'])){
        
    $Matricule = htmlspecialchars($_POST['Matricule']);
    $Nom = htmlspecialchars($_POST['Nom']);
    $Prenom = htmlspecialchars($_POST['Prenom']);
    $CIN= htmlspecialchars($_POST['CIN']);
    $Date_naissance= htmlspecialchars($_POST['Date_naissance']);
    $Adresse= htmlspecialchars($_POST['Adresse']);
    $Ville= htmlspecialchars($_POST['Ville']);
    $CNSS= htmlspecialchars($_POST['CNSS']);
    $Salaire= htmlspecialchars($_POST['Salaire']);
     $Email= htmlspecialchars($_POST['Email']);

    		if(filter_var($Matricule,FILTER_VALIDATE_INT)){

    		$testMatricule = $conn->prepare('SELECT * FROM employe WHERE Matricule = ?');
    		$testMatricule->execute(array($Matricule));

    			$nbLignes = $testMatricule->rowCount();

    			if($nbLignes != 0){
    			
                $modificationemploye = $conn->prepare('UPDATE employe SET Nom= :Nom , Prenom = :Prenom , CIN = :CIN , Date_naissance = :Date_naissance , Adresse = :Adresse  , CNSS = :CNSS , Salaire = :Salaire , Email =:Email , Ville =:Ville WHERE Matricule = :Matricule');
    				$modificationemploye->execute(array("Nom" => $Nom,
    												   "Prenom" => $Prenom,
    											       "CIN" => $CIN,
                                                    "Date_naissance" => $Date_naissance,
                                                      "Adresse" => $Adresse,
                                                     "Ville" => $Ville,
                                                       "CNSS" => $CNSS,
                                                      "Salaire" => $Salaire,
                                                       "Email" => $Email,
    											       "Matricule" => $Matricule));


    			echo 'Employe a été bien modifié !!';
    		}else{
    			echo 'Cet Matricule n\'existe pas !!';
   			}


    		}else{
                         echo 'Cet Matricule est non valable !!';
		}

 	       }else{
    		echo 'Attention, Tous Les Champs Sont Obligatoires !!';
     	}
     }
?>