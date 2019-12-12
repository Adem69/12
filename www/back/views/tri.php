<?php
   function afficherDESC()
     {
    $sql="select * from coach ORDER BY id DESC";
    $db = config::getConnexion();
    return ($db->query($sql));
    
     }

   function afficherASC()
   {
    $sql="select * from coach ORDER BY nomprenom ASC";
    $db = config::getConnexion();
    return ($db->query($sql));
    }
  ?>
