<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="st.css"/>
    <link href="#"  rel = "stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap"  rel = "stylesheet">  
    <link rel = "stylesheet" type="text/css" href="st.css">
    
</head>
<body>
     <!--NAVBAR-->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TurnLadakhi.in</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <ul class="nav justify-content-center">
  
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="bootstap.html">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="file:///Users/tseringdiskit/Desktop/aboutus.html">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="#">Contact us</a>
  </li>
</ul>   
      </ul>
     
    </div>
  </div>
</nav>
 
    
<!-- (A) SEARCH FORM -->
 <!-- <form method="post" action="1-form.php" class="form">
 <input class="form-control me-2" type="search" name="search" placeholder="search here" required/>
  <input class="login-button" type="submit" value="Search"/>
</form>  -->
<div class="form2">
<div class="center">
<?php
// (B) PROCESS SEARCH WHEN FORM SUBMITTED
if (isset($_POST["search"])) {
  // (B1) SEARCH FOR USERS
  require "2-search.php";

  // (B2) DISPLAY RESULTS
  if (count($results) > 0) { foreach ($results as $r) {
    printf("<div> %s - %s</div>", $r["word"], $r["meaning"]);
  }} else { echo "No results found"; }
}
?></div>
<img src="https://images.unsplash.com/photo-1464286141216-66af0ebf8a36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" class="d-block w-100" style="height: 650px;" alt="..." ></img>
</div>
</body>
</html>