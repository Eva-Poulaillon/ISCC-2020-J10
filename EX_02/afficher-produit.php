<html>
<?php 
   $pdo = new PDO("mysql:host=localhost;dbname=BaseTest01","root","root");
   
   $ins = $pdo->prepare("select nom from produit"); 
   $ins->setFetchMode(PDO::FETCH_ASSOC); 
   $ins->execute();

   $tab = $ins->fetchAll();

 for($i=0;$i<count($tab);$i++){ 

    echo '<ul> 
    <li>'; echo implode($tab[$i])."<br />";'</li>
    </ul>';
 
 }
 
?>
</html>

