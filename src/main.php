<?php 
    include("./../vendor/autoload.php");
    use App\model\SistemaUsuario;    
    use App\persistence\connectionFactory;

    //$user = new SistemaUsuario("Huguinho");
    $conn = connectionFactory::getConnection();
   if ($conn){
        try{
          $sql = "select * from users";
          $statement = $conn->prepare($sql);
          $statement->execute();
           $rs = $statement->fetchAll(PDO::FETCH_ASSOC);  
          foreach($rs as $registroTabela){
               echo print_r($registroTabela['nome'], true).'<br>';
        }
     }catch (Exception $e){
          echo print_r($e, true);
     }

     
       
     
   
   
   }else {
     echo "nao tem conexão";
}   
   var_dump($conn);
