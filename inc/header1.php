<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="https://image.ibb.co/fOur3b/favicon.png" />
  <meta name="theme-color" content="#1885ed">
  <title>CodeMonk</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.12/codemirror.min.css">
  <script src="index.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.12/codemirror.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.12/mode/python/python.min.js"></script>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

  <style>
    .header__elenco {
        padding: 0;
        margin: 0;
        list-style: none;
        
    }
    .header__menu {
        float: right;
         margin: 40px;
    }
    .header__el{
        padding: 0 25px;
        display: inline-block;
    }
    .header__img{
      width: 100px;
      height: 100px;
      display: inline-block;
      vertical-align: middle;
      /* border-radius: 50%;
      border: 2px solid #fff;
      box-shadow: 0px 7px 4px rgba(0,0,0,.2); */
    }
    /* .header__logo{
      margin-right: 20px;
    }
    .header__el a{
      display: inline-block;
      
    } */
    
    .header__logo, .header__menu{
      display: inline-block;
      vertical-align: middle;

      
    }
    .header__title{
      font-size: 18px;
      margin: 10px;
      margin-left: 10px;
      display: inline-block;
      line-height: 18px;
      vertical-align: middle;
    }
    
    .header__light{
      color: #8198ae;
    }
    .header__link{
      color: #1f4568;
      font-size: 14px;
        text-decoration: none;
    
    }
    .header__link:hover{
      text-decoration: none;
      color:#3a9fff;
    }
    .navbar-toggle .icon-bar{
      background-color: #8198ae;
    }
    .navbar-toggle {
        margin: 5px 0;
    }
     @media (max-width: 768px) {
      .footer__img {
        margin: 0 auto;
      }
    }


/* Hamburger Menu Toggle Button */
.menu-toggle {
  display: none;
  flex-direction: column;
  justify-content: center;
  gap: 5px;
  background: none;
  border: none;
  cursor: pointer;
  padding: 10px;
  z-index: 1001;
}

/* Hamburger Bars */
.menu-toggle .icon-bar {
  width: 25px;
  height: 3px;
  background-color: #333;
  transition: all 0.3s ease-in-out;
  border-radius: 2px;
}

/* ======= Responsive Styles for Mobile ======= */
@media (max-width: 700px) {
  .menu-toggle {
    display: flex;
    position: absolute;
    top: 25px;
    right: 25px;
  }


  .header__nav {
    display: none;
    position: absolute;
    top: 80px; /* below header */
    right: 0;
    width: 40%;
    background-color: #f9f9f9;
    flex-direction: column;
    
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    transition: all 0.3s ease-in-out;
  }

  .header__nav.active {
    display: flex;
  }

  .header__elenco {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin: 0;
  }

  .header__el {
    padding: 12px 20px;
    text-align: center;
  }

  .header__link {
    font-size: 20px;
    color: #1f4568;
    text-decoration: none;
  }

  .header__link:hover {
    color: #3a9fff;
  }

  .btn--white {
    margin-top: 10px;
  }
}
/* pythonpage start */
/* Header */
.nav-header {
  background: #1885ed;
  color: white;
  padding: 15px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.nav-logo {
  display: flex;
  align-items: center;
  margin: 40px;
}

.nav-logo-img {
  height: 40px;
  margin-right: 10px;
}

.nav-list {
  list-style: none;
  display: flex;
}

.nav-list li {
  margin-right: 15px;
}

.nav-list a {
  color: white;
  text-decoration: none;
}
 </style>


</head>

<body>
  <header class="header">
    <div class="container header__container">
      <div class="header__logo"><img class="header__img" src="images/CMlogo.png">
        <h1 class="header__title">Master coding <span class="header__light">like a monk.</span></h1>
      </div>

      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>

      <div class="header__menu">
        <!-- Toggle Button -->
        <button class="menu-toggle" id="menu-toggle" aria-label="Toggle menu">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Navigation -->
        <nav id="navbar" class="header__nav">
          <ul class="header__elenco">
            <li class="header__el"><a href="index.php" class="header__link">Home</a></li>
            <li class="header__el"><a href="index.php#courses" class="header__link">Courses</a></li>
            <li class="header__el"><a href="python.php" class="header__link">Python</a></li>
             <li class="header__el"><a href="ML.php" class="header__link">Machine Learning</a></li>
            <li class="header__el"><a href="index.php#contact" class="header__link">Contact us</a></li>
            <li class="header__el header__el--blue"><a href="#" class="btn btn--white" style="text-decoration: none;">Sign In →</a></li>
          </ul>
        </nav>
      </div>




    </div>
  </header>
  <script >
     const toggleBtn = document.getElementById('menu-toggle');
    const navbar = document.getElementById('navbar');

    toggleBtn.addEventListener('click', () => {
      navbar.classList.toggle('active');
    });
    
  </script>
  </body>