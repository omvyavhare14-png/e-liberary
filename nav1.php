<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Modern E-Library Navbar</title>

  <!-- Font Awesome -->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

  <style>

    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family:Arial, Helvetica, sans-serif;
    }

    body{
      background:#0f172a;
      height:100vh;
    }

    /* NAVBAR */

    .navbar{
      width:100%;
      padding:18px 8%;
      display:flex;
      justify-content:space-between;
      align-items:center;
      background:rgba(77, 110, 143, 0.85);
      backdrop-filter:blur(12px);
      border-bottom:1px solid rgba(255,255,255,0.1);
      position:sticky;
      top:0;
      z-index:1000;
    }

    /* LOGO */

    .logo{
      color:white;
      font-size:30px;
      font-weight:bold;
      letter-spacing:1px;
      cursor:pointer;
    }

    .logo span{
      color:#38bdf8;
    }

    /* NAV LINKS */

    .nav-links{
      display:flex;
      align-items:center;
      gap:35px;
      list-style:none;
    }

    .nav-links li a{
      text-decoration:none;
      color:white;
      font-size:17px;
      position:relative;
      transition:0.3s;
    }

    /* HOVER UNDERLINE */

    .nav-links li a::after{
      content:'';
      position:absolute;
      left:0;
      bottom:-6px;
      width:0%;
      height:3px;
      background:#38bdf8;
      border-radius:10px;
      transition:0.4s;
    }

    .nav-links li a:hover::after{
      width:100%;
    }

    .nav-links li a:hover{
      color:#38bdf8;
    }

    /* SEARCH BAR */

    .search-box{
      position:relative;
    }

    .search-box input{
      width:240px;
      padding:12px 45px 12px 18px;
      border:none;
      outline:none;
      border-radius:30px;
      background:rgba(255,255,255,0.15);
      color:white;
      font-size:15px;
    }

    .search-box input::placeholder{
      color:#ddd;
    }

    .search-box i{
      position:absolute;
      right:18px;
      top:50%;
      transform:translateY(-50%);
      color:white;
      cursor:pointer;
    }

    /* BUTTON */

    .login-btn{
      padding:12px 28px;
      border:none;
      border-radius:30px;
      background:linear-gradient(45deg,#38bdf8,#2563eb);
      color:white;
      font-size:15px;
      cursor:pointer;
      transition:0.4s;
    }

    .login-btn:hover{
      transform:translateY(-3px);
      box-shadow:0 10px 20px rgba(56,189,248,0.4);
    }

    /* MOBILE MENU */

    .menu-btn{
      display:none;
      color:white;
      font-size:28px;
      cursor:pointer;
    }

    /* RESPONSIVE */

    @media(max-width:950px){

      .nav-links{
        position:absolute;
        top:85px;
        left:-100%;
        width:100%;
        height:100vh;
        background:#0f172a;
        flex-direction:column;
        padding-top:50px;
        transition:0.5s;
      }

      .nav-links.active{
        left:0;
      }

      .search-box{
        display:none;
      }

      .login-btn{
        display:none;
      }

      .menu-btn{
        display:block;
      }

    }

  </style>
</head>
<body>

  <!-- NAVBAR -->

  <nav class="navbar">

    <!-- LOGO -->

    <div class="logo">
      E-<span>Library</span>
    </div>

    <!-- NAV LINKS -->

    <ul class="nav-links" id="navLinks">

      <li><a href="upload.php">Home</a></li>
      <li><a href="contact%20massege.php">contact massege</a></li>
      <li><a href="fetch%20book.php">upload book list</a></li>

    </ul>

    <!-- SEARCH -->

    <div class="search-box">
      <input type="text" placeholder="Search Books...">
      <i class="fa-solid fa-magnifying-glass"></i>
    </div>

    <!-- BUTTON -->

    <button class="login-btn">
      Login
    </button>

    <!-- MOBILE MENU -->

    <div class="menu-btn" id="menuBtn">
      <i class="fa-solid fa-bars"></i>
    </div>

  </nav>

  <script>

    const menuBtn = document.getElementById("menuBtn");
    const navLinks = document.getElementById("navLinks");

    menuBtn.onclick = () => {
      navLinks.classList.toggle("active");
    };

  </script>

</body>
</html>