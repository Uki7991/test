<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="/public/css/main.css" rel="stylesheet">
</head>
<body>
	<nav class="sticky-top navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container">
          <a class="navbar-brand" href="/">Test project&#x2122;</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/about-me">About me</a>
                  </li>
                  <?php if (isset($_SESSION['USER']) && isset($_SESSION['ADMIN'])): ?>
                  <li class="nav-item">
                      <a class="nav-link" href="/admin">Administration</a>
                  </li>
                  <?php endif; ?>
              </ul>

              <ul class="navbar-nav ml-auto">
                  <?php if (isset($_SESSION['USER'])): ?>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <?php echo $_SESSION['user']['login'] ?>
                      </a>
                      <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                          <a class="nav-link" href="/admin">Administration</a>
                          <a class="nav-link text-light" href="/logout">Logout</a>
                      </div>
                  </li>
                  <?php else: ?>
                  <li class="nav-item">
                      <a class="nav-link text-light" href="/login">Login</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light" href="/register">Register</a>
                  </li>
                  <?php endif; ?>

              </ul>
          </div>
      </div>
	</nav>
	<?php echo $content; ?>

	<footer class="bg-dark py-5">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<p></p>
					<p></p>
				</div>
				<div class="col-auto ml-auto">
					<ul class="nav flex-column text-right">
						<li class="nav-item">
							<a class="nav-link text-secondary active" href="mailto:tilek.kubanov">Tilek Kubanov</a>
						</li>
						<li class="nav-item">
						    <a class="nav-link text-secondary" href="tel:+996 701 001 052">+996 701 001 052</a>
						</li>
						<li class="nav-item">
						    <a class="nav-link text-secondary" href="tel:+996 555 105 655">+996 555 105 655</a>
						</li>
						<li class="nav-item">
						    <a class="nav-link text-secondary" href="https://vk.com/tilek097">vk.com/tilek097</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/public/js/main.js"></script>
</body>
</html>