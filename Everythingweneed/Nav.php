<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <style>
      .list-unstyled a {
        font-size: 12px;
        letter-spacing: 0.5px;
      }
      .carousel-item img {
        height: 450px;
      }
      .navbar{
        padding: 5px!important;
        margin-bottom: 7px!important;
      }
      p.navlink{
        margin:0px!important;
      }
      #loader{
         position: fixed;
         width: 100%;
         height: 100vh;
         background-color: #fff;
         background-image: url('images/loader.gif');
         background-repeat: no-repeat;
         background-position: center;
         z-index: 9999;
         text-align: center;
      }
      #loader img{
        z-index: 99999;
        position: relative;
        top: calc(50% - 75px);
        /* bottom: 50%; */
        border-radius: 50%;
        border: 2px dashed #262626;
        vertical-align: middle;
      }
    </style>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body onload="myfunc()">
    <div id="loader">
    <img src="images/logo.png" alt="Website LOGO" width="150px" height="150px">
    </div>
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
        <div class="p-4 pt-5">
          <ul class="list-unstyled mb-5">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li class="active">
              <a
                href="#homeSubmenu"
                data-toggle="collapse"
                aria-expanded="false"
                class="dropdown-toggle"
                >Free Learnings For Placements</a
              >
              <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                  <a href="DSA.php">Datastructures and Algorithms Level 1/Level 2</a>
                </li>
                <li>
                  <a href="os.php">Operating Systems</a>
                </li>
                <li>
                  <a href="#">Compiler Designs</a>
                </li>
                <li>
                  <a href="oops.php">Object Oriented Programming</a>
                </li>
                <li>
                  <a href="cn.php">Computer Networks</a>
                </li>
                <li>
                  <a href="#">Database Management System</a>
                </li>
                <li>
                  <a href="#">System Design</a>
                </li>
                <li>
                  <a href="#">Aptitude</a>
                </li>
                <li>
                  <a href="#">Development by Choice</a>
                </li>
              </ul>
            </li>
            <li>
              <a
                href="#pageSubmenu"
                data-toggle="collapse"
                aria-expanded="false"
                class="dropdown-toggle"
                >Oppurtunities</a
              >
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                  <a href="#">Page 1</a>
                </li>
                <li>
                  <a href="#">Page 2</a>
                </li>
                <li>
                  <a href="#">Page 3</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="web.php">Online Contests</a>
            </li>
            <li>
              <a href="testSkill.php">Test Your Skills</a>
            </li>
            <li>
                <a href="dsa_sheet.php">DSA Sheet</a>
            </li>
            <li>
              <a href="#">Contact</a>
            </li>
            <li>
              <a href="#">About</a>
            </li>
            <li>
              <a href="login.php">Login</a>
            </li>
            <li>
              <a href="register.php">SignIn</a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Page Content  -->
      <div id="content" class="p-md-1">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only"></span>
            </button>
            <?php if(isset($_SESSION['email']))
            {
            ?>
              <ul class="nav navbar-nav ml-auto">
                  <li class="nav-item">
                   <p style="margin:8px 5px 8px 5px"><?php echo $_SESSION['email'];?></p>
                  </li>
                  <li class="nav-item active">
                    <a href="logout.php"><button class="btn btn-primary">Logout</button></a>
                  </li>
              </ul>
            <?php
            } 
            ?>
            <!-- <button
              class="btn btn-dark d-inline-block d-lg-none ml-auto"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="register.php">SignIn</a>
                </li>
              </ul>
            </div> -->
          </div>
        </nav>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- <script type="text/javascript">
      window.onload = function()
      {
        var hidesidebar = document.getElementById('sidebar');
        document.onclick = function(e)
        {
          if(e.target.id !== 'sidebar')
          {
            hidesidebar.classList.remove('active');
          }
        };
        document.onclick = function(e)
        {
          if(e.target.id === 'sidebar')
          {
            hidesidebar.classList.add('active');
          }
        };
      };
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      var preloader = document.getElementById('loader');
      function myfunc()
      {
        preloader.style.display = 'none';
      }
    </script>
  </body>
</html>
