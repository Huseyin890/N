<!DOCTYPE html>
<html>

<head>
  <?php include 'head.php' ?>
</head>

<body class="bg-default">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="../">
        <img src="https://driveplyr.appspages.online/dp.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="../">
                <img src="https://driveplyr.appspages.online/dp.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="../../" class="nav-link">
              <span class="nav-link-inner--text">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="login.php" class="nav-link">
              <span class="nav-link-inner--text">Login</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="register.php" class="nav-link">
              <span class="nav-link-inner--text">Register</span>
            </a>
          </li>
        </ul>
        <hr class="d-lg-none" />
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.instagram.com/cxdiin" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Instagram">
              <i class="fab fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Twitter">
              <i class="fab fa-twitter-square"></i>
              <span class="nav-link-inner--text d-lg-none">Twitter</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://github.com/driveplyr" target="_blank" data-toggle="tooltip" data-original-title="Star us on Github">
              <i class="fab fa-github"></i>
              <span class="nav-link-inner--text d-lg-none">Github</span>
            </a>
          </li>



          <li class="nav-item d-none d-lg-block ml-lg-4">
            <a href="#Not_Available_Now" target="_blank" class="btn btn-neutral btn-icon">
              <span class="btn-inner--icon">
                <i class="fas fa-shopping-cart mr-2"></i>
              </span>
              <span class="nav-link-inner--text">Home</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Welcome!</h1>
              <p class="text-lead text-white">Your DrivePlyr Dashboard is waiting...</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
              <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="https://cdn.jsdelivr.net/gh/creativetimofficial/argon-dashboard-bs4@main/assets/img/icons/common/github.svg"></span>
                  <span class="btn-inner--text">Github</span>
                </a>
                <script src="https://accounts.google.com/gsi/client" async defer></script>
<div id="g_id_onload"
     data-client_id="911384899570-6qiojk3cl3e47jjorfj9att0l1a8gg59.apps.googleusercontent.com"
     data-callback="handleCredentialResponse">
</div>
<br><br>
<center><div class="g_id_signin" data-type="standard"></div>
</center>

                <!-- <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="https://cdn.jsdelivr.net/gh/creativetimofficial/argon-dashboard-bs4@main/assets/img/icons/common/google.svg"></span>
                  <span class="btn-inner--text">Google</span>
                </a> -->
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Or sign in with credentials</small>
              </div>
              <form role="form" action="signin.php" form method="post" enctype="multipart/form-data">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input name="email" class="form-control" placeholder="Email" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input name="password" class="form-control" placeholder="Password" type="password">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Sign in</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="register.php" class="text-light"><small>Create new account</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <?php include 'footer.php' ?>
  <!-- Argon Scripts -->
  
<script>
  function handleCredentialResponse(response) {
    if (response.credential) {
      const credential = response.credential;
      const jwtToken = credential;

      // Decode and parse the JWT token to access user details
      const userTokenData = JSON.parse(atob(jwtToken.split('.')[1]));

      console.log(userTokenData)
      // Check if the required user details are available
      if (userTokenData.email && userTokenData.name) {
        const email = userTokenData.email;
        const fullName = userTokenData.name;
        const profilePicture = userTokenData.picture;

        // Log user details to the console
        console.log('Email: ' + email);
        console.log('Full Name: ' + fullName);
        console.log('Profile Picture: ' + profilePicture);
        // Perform further actions with the user details as needed
        // Now, let's post the data to the server using fetch
        const url = '../api/google.php'; // Replace this with the correct endpoint URL
        const data = {
          email: email,
          fullName: fullName,
          profilePicture: profilePicture
        };

        fetch(url, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(data => {
          // Handle the response from the server if needed
          console.log('Server Response:', data);
          location.href = "../../";
        })
        .catch(error => {
          console.error('Error posting data:', error);
        });
      } else {
        console.log('User details not available in the token.');
      }
    } else {
      // Handle the case where no credential is received or the user cancels the sign-in
      console.log('No credential received or user canceled the sign-in.');
    }
  }
</script>
  <!-- Core -->
  <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/argon-dashboard-bs4@main/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/argon-dashboard-bs4@main/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/argon-dashboard-bs4@main/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/argon-dashboard-bs4@main/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/argon-dashboard-bs4@main/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/argon-dashboard-bs4@main/assets/js/argon.js?v=1.2.0"></script>
</body>

</html>