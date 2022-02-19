<?php include('header.php') ?>
    <!--Navbar -->
<nav class=" navbar navbar-expand-lg navbar-dark default-color">
  <a class="navbar-brand" href="#"><b>SMS</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Events</a>
        
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons"> 
      <li class="nav-item dropdown">
        <?php if(isset($_SESSION['login'])) { ?> 
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user mr-2"></i> Accont
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div> 
        <?php } else { ?>
        <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i>User login</a>
        <?php } ?> 
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->    
    <div class="d-flex shadow" style="height:500px; background:linear-gradient(-45deg, navy 50%, transparent 50%)">
        <div class="container-fluid my-auto">
        <div class="row">
                <div class="col-lg-6 my-auto">
                    <h1 class="display-3 font-weight-bold">Admissions open for 2021-2022</h1>
                    <p class="p-3 mb-2  text-black">Lorem ipsum dolor sit, arnet consectetur adipsicing elit. porro aoeriam similique error.</p>
                    <a href="" class="btn btn-lg btn-primary">Call To Action</a>
                </div>
                <div class="col-lg-6">
                    <div class="col-lg-6 mx-auto card shadow-lg">
                        <div class="card-body">
                            <h3>Inqurey Form</h3>
                            <form action="" method="post">
                            <!-- Material input -->
                            <div class="md-form">
                                <input type="text" id="form1" class="form-control">
                                <label for="form1">Your Name</label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="email" class="form-control">
                                <label for="email">Your Email</label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="mobile" class="form-control">
                                <label for="mobile">Your Mobile</label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="class" class="form-control">
                                <label for="class">Your Quiery</label>
                            </div>
                            <button class="btn btn-primary btn-block">Submit Form</button>
                            </form>
                        </div>
                    </div>
                </div>
          </div>
        </div>
    </div>
  <section class="py-5">
    <div class="container">
    <div class="row">
      <div class="col-lg-6 py-5">
        <h2 class="font-weight-bold">About <br> School Managment System</h2>
        
        <div class="text-justify py-3">
          <p>lorem ipsum dolor sit, amet consecteture adipiscing elit. Neque id ad dolores iusto nobis sunt, atque, aligenti mesciunt ipsa aliquam militia nemo magsam quae adipisci libero voluptatum omis vel. lorem ipaum dolor sit, amet consectetur adipiscing elit. Explicabo dicta ipsuum ea quisquam sit dignissimos numquam.
             Velite aliquild necessitatibus id adippsci officils mobis voluptates maiores consectetor, sunt nisi? Commodi.
          </p>
        </div>
        <a href="about-us.php" class="btn btn-secondary">Know More</a>
      </div>
      <div class="col-lg-6" style="background:url(./assests/images/about1.jpg)">
      </div>
    </div>
    </div>
  </section>
<!---Courses---->
<section class="py-5 bg-light">
  <div class="text-center mb-5">
    <h2 class="font-weight-bold">Our Courses</h2>
    <b class="text-muted">Lorem ipsum dolor sit Dolorem facere odit Molestiae necessitatibus animi</b>
  </div>
<!---Course Card --->
  <div class="container">
    <div class="row">
      <?php for ($i = 0; $i < 12; $i++) { ?>
      <div class="col-lg-3 mb-4">
        <div class="card">
          <div>
            <img src="./assests/images/img1.jpg" alt="" class="img-fluid rounded-top">
          </div>
          <div class="card-body">
          <b>Web Design & Development</b>
          <p class="card-text">
            <b>Duration: </b> 45 Hours </br>
            <b>Price: </b> 4500/- Rs 
          </p>
          <button class="btn btn-block btn-primary btn-md">Enroll Now</button>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>   
</section>
<!---Our Teacher--->
<section class="py-5">
  <div class="text-center mb-5">
    <h2 class="font-weight-bold">Our Teachers</h2>
    <b class="text-muted">Lorem ipsum dolor sit Dolorem facere odit Molestiae necessitatibus animi</b>
  </div>
  <div class="container">
    <div class="row p-2">
    <?php for($a = 0;$a < 8;$a++) { ?>
      <div class="col-lg-3  my-5"> 
        <div class="card">
          <div class="col-7 position-absolute" style="top:-50px">
            <img src="./assests/images/profile1.jpg" alt="" class="mw-100 mh-150 border rounded-circle">
          </div>
          <div class="card-body pt-5 mt-5">
            <h5 class="card-title mb-0"><b>Teacher's Name</b></h5>
            <p>
              <?php for($s = 0;$s < 5;$s++) {?>
                <i class="fa fa-star text-warning"></i>
              <?php  } ?>
            </p>
            <p class="card-text">
              <b>Courses: </b> 5 <br>
              <b>Ratings: </b>
            </p>
          </div>
        </div>
      </div>
    <?php  } ?>
    </div>
  </div>
</section>
<!---acheivements --->
<section class="py-5 text-white" style="background:#3923a7">
  <div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pr-5">
          <h2>Acheivements</h2>
          <p>lorem ipsum dollor sit amet consectetur adipisicing elit. Ipsum, commodi laborisam. Ullam aliquam diota officils accusamus.</p>
          <img src="./assests/images/ach.jpg" class="img-fluid rounded" alt="">
        </div>
        <div class="col-lg-6 my-auto">
          <div class="row">
          <?php for($x = 0;$x < 4;$x++) {   ?>
            <div class="col-lg-6 mb-4">
              <div class="border rounded">
                <div class="card-body text-center">
                  <span><i class="text-warning fas fa-graduation-cap fa-2x"></i></span>
                  <h2 class="my-2 font-weight-bold h1"> 355</h2>
                  <hr class="border-warning">
                  <h4>Graduates</h4>
                </div>
              </div>
            </div>
            <?php }   ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--- Testmionals--->
<section class="py-5">
<div class="text-center mb-5">
    <h2 class="font-weight-bold">What People Says</h2>
    <p class="text-muted">Lorem ipsum dolor sit Dolorem facere odit Molestiae necessitatibus animi</p>
  </div>
  <div class="container">
    <div class="row">
    <div class="col-6">
      <div class="border rounded position-relative">
        <div class="p-4 text center">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore maxime quibusdam ipsum inventore obcaecati enim quos sit. Consequatur blanditiis voluptates repellendus, hic, ipsum, atque beatae tempora qui quia deserunt reiciendis?
        </div>
        <i class="fa fa-quote-left fa-3x position-absolute" style="top: .5rem; left: .5rem; opacity: .3"></i>
      </div>
      <div class="text-center mt-n2">
        <img src="./assests/images/profile1.jpg" alt="" class="rounded-circle border" width="100" height="100">
        <h6 class="mb-0 font-weight-bold">Name of Candidate</h6>
        <p><i>Desination</i></p>
      </div>
    </div>
    <div class="col-6">
      <div class="border rounded position-relative">
        <div class="p-4 text center">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore maxime quibusdam ipsum inventore obcaecati enim quos sit. Consequatur blanditiis voluptates repellendus, hic, ipsum, atque beatae tempora qui quia deserunt reiciendis?
        </div>
        <i class="fa fa-quote-left fa-3x position-absolute" style="top: .5rem; left: .5rem; opacity: .3"></i>
      </div>
      <div class="text-center mt-n2">
        <img src="./assests/images/profile1.jpg" alt="" class="rounded-circle border" width="100" height="100">
        <h6 class="mb-0 font-weight-bold">Name of Candidate</h6>
        <p><i>Desination</i></p>
      </div>
    </div>
    </div>
  </div>
</section>
<!--- Footer --->
<footer style="background:url(./assests/images/footer.jpg) center/cover no-repeat">
 <div  class="py-5 text-white" style="background:#000000bb">
    <div class="container fluid">
      <div class="row">
        <div class="col-lg-4">
          <h4>Useful Links</h4>
          <ul class="fa-ul ml-4">
            <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>List icons</a></li>
            <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>can be used</a></li>
            <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>can be used</a></li>
            <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>in lists</a></li>
          </ul>
        </div>
        <div class="col-lg-4">
          <h5>Social Presence</h5>
            <div>
            <span class="fa-stack">
             <i class="fa fa-circle fa-stack-2x"></i>
             <a href="#"><i class="fab fa-facebook-f fa-stack-1x fa-inverse text-dark"></i></a>
            </span>
            <span class="fa-stack">
             <i class="fa fa-circle fa-stack-2x"></i>
             <a href="#"><i class="fab fa-instagram fa-stack-1x fa-inverse text-dark"></i></a>
            </span>
            <span class="fa-stack">
             <i class="fa fa-circle fa-stack-2x"></i>
             <a href="#"><i class="fab fa-twitter fa-stack-1x fa-inverse text-dark"></i></a>
            </span>
            <span class="fa-stack">
             <i class="fa fa-circle fa-stack-2x"></i>
             <a href="#"><i class="fab fa-youtube fa-stack-1x fa-inverse text-dark"></i></a>
            </span>
            </div>
        </div>
        <div class="col-lg-3">
          <h5>Subscribe Now</h5>
          <form action="">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Your Email">
            </div>
            <button class="btn btn-secondary btn-sm btn-block">Submit</button>
          </form>
          </div>
      </div>
    </div>
 </div>
</footer>
<section class="py-2 bg-dark text-light">
  <div class="conatiner-fliud">
    Copyright 2021-2022 All Rights Reserved, <a href="#" class="text-light">School Managment System</a>
  </div>
</section>
<?php include('footer.php') ?>