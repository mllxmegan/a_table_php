<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = 'localhost';
    $dbname = 'restaurant';
    $username = 'root';
    $password = '';
    
        try{
            $dbco = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $table_Table = "CREATE TABLE Table_resto(
                    id_table INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    numero_table INT(4) NOT NULL,
                    luminosite VARCHAR(30) NOT NULL,
                    nbre_de_chaises INT(10) NOT NULL,
                    emplacement VARCHAR(30) NOT NULL)";
            
            $table_QrCode = "CREATE TABLE QrCode(
                    id_QRCode INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    nom_QRCode VARCHAR(30) NOT NULL,
                    url VARCHAR(100) NOT NULL)";
            
            $table_Client = "CREATE TABLE Client(
                    id_client INT UNSIGNED AUTO_INCREMENT PRIMARY KEY)";
            
            $table_Smartphone = "CREATE TABLE Smartphone(
                    id_smartphone INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    marque VARCHAR(20) NOT NULL,
                    langue VARCHAR(20) NOT NULL)";

            $table_Flasher = "CREATE TABLE Flasher(
                    id_flash INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    date_flash DATETIME NOT NULL)";

        //     $dbco->exec($table_Flasher);
        //     echo 'Table bien créée !';
            }
            catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
            }

            $nbre_client_total = "
            SELECT COUNT(id_client) AS nbre_client FROM client
    ";   

                $nbre_de_clients_par_jour = "
                SELECT DISTINCT YEAR(date_flash) AS year, MONTH(date_flash) AS month, DAY(date_flash) AS day, COUNT(id_client) AS nbre_client
                FROM client
                INNER JOIN flasher ON id_client = id_flash
                WHERE YEAR(date_flash) = 2021
                GROUP BY day, month, year
                ORDER BY month, day ASC
                ";
                $nbre_de_clients_par_mois = "
                SELECT DISTINCT YEAR(date_flash) AS annee, MONTH(date_flash) AS  mois, COUNT(id_client) AS nbre_clients
                FROM client
                INNER JOIN flasher ON id_client = id_flash
                WHERE YEAR(date_flash) = 2021
                GROUP BY mois, annee
                ORDER BY mois ASC
            ";

        // récupérer le nombre de flash en février
            $nbre_flash_fevrier = "
            SELECT COUNT(id_flash) 
            AS nbre_flash_fevrier
            FROM Flasher
            WHERE date_flash 
            BETWEEN '2021-02-18 00:00:00' 
            AND '2021-02-28 00:00:00'";

        //     nombre de flash en mars
        $nbre_flash_mars = "
        SELECT COUNT(id_flash) 
        AS nbre_flash_mars
        FROM Flasher
        WHERE date_flash 
        BETWEEN '2021-03-01 00:00:00' 
        AND '2021-03-31 00:00:00'";

        $nbre_table_au_soleil = "
        SELECT COUNT(id_table) AS nbre_table_au_soleil 
        FROM table_resto
        WHERE luminosite LIKE 'soleil'
        ";

        $nbre_table_ombre_exterieur = "
        SELECT COUNT(id_table) AS nbre_table_ombre_exterieur
        FROM table_resto
        WHERE luminosite LIKE 'ombre' AND emplacement LIKE 'exterieur'
        ";
        $nbre_telephone_samsung = "
        SELECT COUNT(marque)
        AS nbre_de_telephone_samsung
        FROM `smartphone` WHERE marque= 'samsung';";

        try{
                $dbco = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $dbco->query($nbre_flash_fevrier);
                $stmt2 = $dbco->query($nbre_flash_mars);
                $stmt3 = $dbco->query($nbre_telephone_samsung);
                $stmt7 = $dbco->query($nbre_client_total);
                $stmt8 = $dbco->query($nbre_table_au_soleil);
                $stmt9 = $dbco->query($nbre_table_ombre_exterieur);
                $stmt10 = $dbco->query($nbre_de_clients_par_jour);
                $stmt11 = $dbco->query($nbre_de_clients_par_mois);
                
                if($stmt === false){
                die("Erreur");
                }
                }       
                
                catch (PDOException $e){
                        echo $e->getMessage();
                }
?>      
</body>
</html>