



 




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Checkout example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="img/banner/logo.jpg"  class=" rounded-circle ml-4" style="height: 60px; width: 95px;">
  </a> 

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST" action="test2.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


  <body class="bg-light mt-0">
    <div class="container mt-0">
  <div class="py-5 text-center mt-0">
    <img class="d-block mx-auto  mt-0 mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Creation issue</h2>
    <p class="lead"></p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">

    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" novalidate method="POST">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Project*</label>  
             <select class="form-control" name="project">
              <option>NASDAQ-HERMES (HERMES)</option>
              <option></option>
              <option></option>
            </select>

            <!-- <input type="text" class="form-control" id="firstName" placeholder="" value="" required >  -->

            <div class="invalid-feedback">
              Valid Project is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
             <label for="firstName">Issue type*</label>  
             <select class="form-control" name="issue type ">
              <option>Information Request</option>
              <option></option>
              <option></option>
            </select>
            <div class="invalid-feedback">
              Valid Issue is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Summary</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="text" class="form-control" id="summary" name="summary" required="">
            <div class="invalid-feedback" style="width: 100%;">
              Your Summary is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label >LOT <span class="text-muted">(Optional)</span></label>
           
             <select name="lot">
              <option>ESW</option>
              <option></option>
              <option></option>
            </select>
          <div class="invalid-feedback">
            Please enter a valid lot.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Phase</label>
          
             <select name="phase " >
              <option>None</option>
              <option></option>
              <option></option>
            </select>
        <div class="mb-3">
          <label for="address2">Priority<span class="text-muted">(Optional)</span></label> 
             <select class="form-control" name="priority">
              <option>Low</option>
              <option>Medium</option>
              <option>Difficult</option>
            </select>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Due date </label>
            <input type="date" class="form-control" id="firstName" placeholder="" value="" required name="duedate">
            <div class="invalid-feedback">
              Please select a valid date
            </div>
          </div>
          <div class="col-md-4 mb-3">
      
            <label for="state">Component/s </label>     <strong>None</strong>
            <select class="custom-select d-block w-100" id="module" name="module" required>
              <option value="">Module</option>
              <option>California</option>
              <option>TEST</option>      
              <option>test 123</option> 



            </select>
            <div class="invalid-feedback">
            
            </div>
          </div>
           <br><div cla>
          Affects Version/s 
            <strong >None</strong> 
            
         </div>
              
            </div>
              <label class="row">Reporter</label> 
            <input type="text" class="form-control" id="reporter" name="reporter" placeholder="" required    >

                       <div class="invalid-feedback"> <br>
            

          </div>

        </div>
          <label for="state">Assignee </label>     
            <select class="custom-select d-block w-100" id="assignee" name="assignee" required>
              <option value="">Automatic </option>
              <option>Manuel</option>
              <option></option>      
              <option></option>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
         </div>
         <div>
          <label class="row"> Environment</label>
           <input type="text" class="form-control" id="firstName" placeholder=""  value="" required name="environment" >
           <label class="row"> Description</label>
           <input type="text" class="form-control" id="description" name="description"  placeholder="" value="" required >
         </div>
        <hr class="mb-4">
        <button type="submit" class="btn btn-primary" name="create">Create</button> 
         <button type="submit" class="btn btn-primary" >Cancel</button>
      </form>
    </div>
  </div>

 
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script></body>
       
</html>
 



<?php 
session_start();  
require 'db.php';

      if(isset($_POST["create"]))  
      {  
          if (isset (['project'], $_POST['issue type'] , $_POST['summary'] , $_POST['lot'] , $_POST['phase'] , $_POST['priority'] , $_POST['duedate'] , $_POST['module'] , $_POST['reporter'] , $_POST[''] , $_POST['assignee'] , $_POST['environment'] , $_POST['description']  ) ) 
          {
            if ($_POST['lot']!="" && $_POST['phase'] !="" && $_POST['priority'] !="" && $_POST['duedate'] =!0 && $_POST['module'] !="" && $_POST['reporter'] !="" && $_POST['assignee'] !="" && $_POST['environment'] !="" && $_POST['description']  {

              $insertion = "INSERT INTO table_essai (project,issue type , summary , lot , phase , priority , date , module , reporter , assignee , environment , description) VALUES ( $_POST['project'] , $_POST['issue type'] , $_POST['summary'] , $_POST['lot'] , $_POST['phase'] , $_POST['priority'] , $_POST['duedate'] , $_POST['module'] , $_POST['reporter'] , $_POST[''] , $_POST['assignee'] , $_POST['environment'] , $_POST['description']  )";

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