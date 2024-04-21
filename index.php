<?php require_once('partials/landing_head.php'); ?>

<body>
	<nav class="navbar navbar-lg navbar-expand-lg navbar-transparant navbar-dark navbar-absolute w-100">
		<div class="container">
			<a class="navbar-brand" href="index.php">SmartCarParkingSystem</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="about.php">About </a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="contact.php">Contact</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="client/signup.php">Signup|Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="intro py-5 py-lg-9 position-relative text-white mb-5">
		<div class="bg-overlay-dark">
			<img src="public/uploads/sys_logo/background.jpg" class="img-fluid img-cover" alt="iRegistration" />
		</div>
		<div class="intro-content py-6 text-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-sm-10 col-md-8 col-lg-6 mx-auto text-center">
						<h1 class="my-3 display-4 d-none d-lg-inline-block"> Smart Car Parking  System</h1>
						<p>Instilling Innovation In Car Parking Reservations</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="heading" class="bg-light py-4 my-2 ">
  <div class="container text-center">
    <h2>How it works</h2>
    <p> Working of Smart Parking Management System</p>
  </div>
</div>

<div id="about" class="py-5 my-4 ">
  <div class="container">
    <h4 class="text-left">Major Traffic Proble</h4>
    <div class="row">
		<div class="col-md-6 py-5 text-justify">
			<p>Urban areas grapple with a myriad of parking challenges, from congested lots to the perennial struggle of finding a vacant spot. </p>
			<p>Our smart parking system offers a beacon of hope amidst the chaos of urban parking. With Arduino and IoT at its core, our solution empowers drivers with invaluable information about vacant parking spots, eliminating the need for aimless circling and reducing traffic congestion.</p>
			<p>With Arduino and IoT as our allies, we usher in a new era of smarter, more sustainable urban transportation.</p>
		</div>
		<div class="col-md-6">
		  <img src="public/uploads/trafic.png" alt="About Image" class="img-fluid">
		</div>
    </div>
  </div>

<div id="about" class="py-5 my-4 ">
  <div class="container">
	  <h4 class="text-right">Solution</h4>
	  <div class="row">
		  <div class="col-md-6">
			  <img src="public/uploads/about.jpg" alt="About Image" class="img-fluid">
			</div>
			<div class="col-md-6 py-5 text-justify">
			<p>Our smart parking system offers a beacon of hope amidst the chaos of urban parking.</p>
			<p>With Arduino and IoT at its core, our solution empowers drivers with invaluable information about vacant parking spots, eliminating the need for aimless circling and reducing traffic congestion.</p>
			<p>By leveraging cutting-edge technology, we provide a seamless parking experience that not only saves time but also contributes to a more sustainable urban environment by minimizing emissions associated with idle driving.</p>
		</div>
    </div>
  </div>
  <div id="heading" class="bg-light py-4 my-4 ">
  <div class="container text-center ">
    <h2>Benifits of Smart Parking System</h2>
  </div>
</div>
<div class="container mt-5">
  <div class="row">
    <!-- Card 1 -->
    <div class="col-md-4">
      <div class="card border border-secondary">
        <img src="public/uploads/eff.png" class="card-img-top border-bottom border-dark" alt="Parking Image 1" width="200px" height="200px">
        <div class="card-body py-4">
          <h5 class="card-title">Efficient Parking Management</h5>
          <p class="card-text">Our smart parking system using IoT optimizes parking resources, reducing congestion and streamlining the parking process.</p>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4">
      <div class="card border border-secondary">
        <img src="public/uploads/env.jpeg" class="card-img-top border-bottom border-dark" alt="Parking Image 2"  width="200px" height="200px">
        <div class="card-body py-4">
          <h5 class="card-title">Environmental Sustainability</h5>
          <p class="card-text">With our smart parking system, drivers spend less time circling for parking, reducing vehicle emissions and carbon footprint associated with urban congestion. </p>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4">
      <div class="card border border-secondary">
        <img src="public/uploads/ui.png" class="card-img-top border-bottom border-dark" alt="Parking Image 3"  width="200px" height="194px">
        <div class="card-body ">
          <h5 class="card-title">Enhanced User Experience</h5>
          <p class="card-text">Our smart parking system offers a seamless user experience, providing drivers with real-time information about available parking spots through a user-friendly mobile app or website. </p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php require_once("partials/footer.php"); ?>


	<script src="public/dist/js/landing.js"></script>
</body>

</html>