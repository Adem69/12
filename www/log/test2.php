<<?php 
session_start();  
require 'db.php';

      if(isset($_POST["create"]))  
      {  
          if (isset (['project'], $_POST['issue type'] , $_POST['summary'] , $_POST['lot'] , $_POST['phase'] , $_POST['priority'] , $_POST['due date'] , $_POST['module'] , $_POST['reporter'] , $_POST[''] , $_POST['assignee'] , $_POST['environment'] , $_POST['description']  ) ) {
            if ($_POST['lot']!="" && $_POST['phase'] !="" && $_POST['priority'] !="" && $_POST['due date'] =!0 && $_POST['module'] !="" && $_POST['reporter'] !="" && $_POST['assignee'] !="" && $_POST['environment'] !="" && $_POST['description']  {

              $insertion = "INSERT INTO table_essai (project,issue type , summary , lot , phase , priority , due date , module , reporter , assignee , environment , description) VALUES ( $_POST['project'] , $_POST['issue type'] , $_POST['summary'] , $_POST['lot'] , $_POST['phase'] , $_POST['priority'] , $_POST['due date'] , $_POST['module'] , $_POST['reporter'] , $_POST[''] , $_POST['assignee'] , $_POST['environment'] , $_POST['description']  )";

              $execute=  $connection->query($insertion);

              if ($execute == true) {

                $msgSuccess= "Information enregistrees avec succes";
                
              } else {
                $msgError="L'enregistrement n'a pas pu etre effectue ";
                  
              }
            }
          }
            
      }  
 ?>