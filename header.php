<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <!-- fontawesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- style css file-->
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/rate_style.css">
    <link rel="stylesheet" href="CSS/log.css">
    <link rel="stylesheet" href="CSS/style.css">

    
    
</head>

<body>
  <!-- start #header -->
  <nav class="navbar navbar-expand-lg navbar-light header-css">
    <div class="container-lg">
        <a class="navbar-brand logo"  href="index.html">A<span>Z</span>A</a>
        
        <div>
          <a href="#" class="navbar-brand float-right username" >
            <span class=" useravatar rounded-circle bg-primary fw-bold text-white px-2 py-1"><i class="far fa-user"></i></span>
            <span class="fw-bold ">Ayesha Saleem</span> 
            

        </a>
        <div class="btn-group">
            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              
            </button>
            <ul class="dropdown-menu dropdown-menu-end lists">
              <li><a class="dropdown-item text-dark" href="#">Messages</a></li>
              <li><a class="dropdown-item text-dark" href="#">Notifications</a></li>
              <li><a class="dropdown-item text-dark" href="profile.php">profile</a></li>
              <li><a class="dropdown-item text-dark" href="index.php">Log out</a></li>
            </ul>
          </div>
        </div>
        
     
  </div>
  </nav>
  <!-- !start #header -->

  <!-- start #main-site -->
  <main id="main-site" class="pt-4">