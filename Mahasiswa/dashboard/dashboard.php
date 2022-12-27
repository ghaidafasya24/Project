<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Voting ULBI</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- link fontawesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../assets/css/dashboard.css">


</head>

<body>


    <!-- content navbar -->
    <nav>
        <!-- content sidebar  -->
        <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="fa-solid fa-bars"></i></button>
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                
                <a class="offcanvas-title" href="" >
                    <img src="../../assets/images/logo-ulbi.png" alt="" width="140" height="50">
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="navbar-item"><a href="../../Mahasiswa/profile-mahasiswa/profile.php" class="nav-link active"> <i class="fa-solid fa-user"></i> Profile</a></li>
                    <hr>
                    <li class="navbar-item"><a href="../../Mahasiswa/dashboard/dashboard.php" class="nav-link active"> <i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a></li>
                    <hr>
                    <li class="navbar-item"><a href="../../Mahasiswa/voting/vote.php" class="nav-link active"> <i class="fa-solid fa-envelope-open-text"></i> Vote</a></li>
                    <hr>
                    <li class="navbar-item"><a href="../../views/login.php" class="nav-link active"> <i class="fa-solid fa-right-from-bracket"></i> Log out</a></li>
                </ul>
            </div>
            <!-- sidebar end  -->
            
        </div>
        <div class="judul">
            <h2>E-VOTING PRESIDEN MAHASISWA ULBI</h>
        </div>
        <div class="menu">
            <!-- <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#profile">Profile</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul> -->
            <img src="../../assets/images/logo-ulbi.png" alt="" width="150" height="50">
        </div>
    </nav>
    <!-- navbar end -->

    <!-- content dashboard --> <br>
    <div class="col-md-10 p-5 pt-2">
    <h3><i class="fas fa-tachometer-alt mr-2"></i> DASHBOARD </h3>
    <div class="row text-white">

    <!-- <div class="card col-4 bg-danger mr-2">
        <div class="card-body">
          <h5 class="card-title">DATA KANDIDAT</h5>
          
          <div class="d-flex justify-content-end pl-5">
          <i class="fa-solid fa-users fa-3x"></i>
          </div> -->
          <!-- <div class="display-4" style="margin-top: -50px;">7</div> -->
            <!-- <a href="kandidat.php" class="btn btn-outline-secondary btn-info"><p class="card-text text-light"> Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>            
        </div>
      </div> -->
      
    <!-- <div class="card col-4 bg-primary mr-2">
        <div class="card-body">
          <h5 class="card-title">POLLING</h5>
          
          <div class="d-flex justify-content-end pl-5">
          <i class="fa-solid fa-users fa-3x"></i>
          </div> -->

          <!-- <div class="display-4" style="margin-top: -50px;">7</div> -->

            <!-- <a href="pelanggan.php" class="btn btn-outline-secondary btn-info"><p class="card-text text-light"> Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>            
        </div>
      </div> -->
    <!-- dashboard end  -->


</body>

</html>