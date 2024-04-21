<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Website</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/dist/css/landing.css" rel="stylesheet">

</head>
<body>
<div class="wrapper-page">

<?php require_once("partials/gen_nav.php"); ?>



<div id="heading" class="bg-light py-4 mt-2 text-center">
  <div class="container">
    <h2>About Us</h2>
    <p>A Smart Parking Management System</p>
  </div>
</div>

<div id="about" class="py-5 my-4 ">
  <div class="container">
    <h4 class="text-right">An End-to-End Parking Management System</h4>
    <div class="row">
      <div class="col-md-6">
        <img src="public/uploads/about.jpg" alt="About Image" class="img-fluid">
      </div>
      <div class="col-md-6 py-5 text-justify">
        <p>Urban areas grapple with a myriad of parking challenges, from congested lots to the perennial struggle of finding a vacant spot. </p>
        <p>Our smart parking system offers a beacon of hope amidst the chaos of urban parking. With Arduino and IoT at its core, our solution empowers drivers with invaluable information about vacant parking spots, eliminating the need for aimless circling and reducing traffic congestion.</p>
        <p>With Arduino and IoT as our allies, we usher in a new era of smarter, more sustainable urban transportation.</p>
      </div>
    </div>
  </div>
</div>
</div>
<?php require_once("partials/footer.php"); ?>
<!-- Bootstrap JS Bundle (Bootstrap + Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JavaScript -->


</body>
</html>

