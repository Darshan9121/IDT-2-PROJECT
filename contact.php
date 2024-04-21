<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/dist/css/landing.css" rel="stylesheet">

</head>
<body>
<div class="wrapper-page">

<?php require_once("partials/gen_nav.php"); ?>



<div id="heading" class="bg-light py-4 mt-1 text-center">
  <div class="container">
    <h2>
        Contact Us
    </h2>
    <p>If you need more information, please contact us, and we’ll be glad to assist you as soon as possible.</p>
  </div>
</div>

<form class="container my-3">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter your name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">City</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter your name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Suggestion</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="How can we help you"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>
<?php require_once("partials/footer.php"); ?>
<!-- Bootstrap JS Bundle (Bootstrap + Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JavaScript -->


</body>
</html>

