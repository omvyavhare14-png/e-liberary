<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>E-Library Home</title>

    <!-- BOOTSTRAP -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FONT AWESOME -->

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    <style>

        /* SIMPLE FIX FOR NAVBAR */

nav,
.navbar,
.custom-nav{

    background:#ffffff !important;
    padding:15px 30px;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);

}

/* LOGO */

.navbar-brand,
.logo{

    color:#141e30 !important;
    font-size:28px;
    font-weight:bold;

}

/* NAV
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f4f7fb;
        }

        /* HERO SECTION */

        .hero{
            width:100%;
            min-height:90vh;
            display:flex;
            align-items:center;
            padding:60px 8%;
            background:linear-gradient(135deg,#141e30,#243b55);
            color:white;
        }

        .hero-text h1{
            font-size:55px;
            font-weight:bold;
            margin-bottom:20px;
        }

        .hero-text span{
            color:#38bdf8;
        }

        .hero-text p{
            font-size:18px;
            line-height:30px;
            color:#dbe4ee;
            margin-bottom:30px;
        }

        .hero-btn{
            padding:14px 35px;
            border:none;
            border-radius:40px;
            background:#38bdf8;
            color:white;
            font-size:18px;
            transition:0.4s;
            cursor:pointer;
        }

        .hero-btn:hover{
            background:#0ea5e9;
            transform:translateY(-3px);
        }

        .hero-img img{
            width:100%;
            border-radius:20px;
            animation:float 3s ease-in-out infinite;
        }

        /* FEATURES */

        .features{
            padding:80px 8%;
        }

        .section-title{
            text-align:center;
            margin-bottom:50px;
        }

        .section-title h2{
            font-size:40px;
            color:#243b55;
            font-weight:bold;
        }

        .feature-card{
            background:white;
            padding:35px;
            border-radius:20px;
            text-align:center;
            transition:0.4s;
            box-shadow:0 5px 20px rgba(0,0,0,0.1);
            height:100%;
        }

        .feature-card:hover{
            transform:translateY(-10px);
        }

        .feature-card i{
            font-size:50px;
            color:#38bdf8;
            margin-bottom:20px;
        }

        .feature-card h4{
            margin-bottom:15px;
            color:#243b55;
        }

        .feature-card p{
            color:#666;
            line-height:28px;
        }

        /* BOOK SECTION */

        .books{
            padding:80px 8%;
            background:#eef3f9;
        }

        .book-card{
            background:white;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 5px 20px rgba(0,0,0,0.1);
            transition:0.4s;
            height:100%;
        }

        .book-card:hover{
            transform:translateY(-10px);
        }

        .book-card img{
            width:100%;
            height:280px;
            object-fit:cover;
        }

        .book-content{
            padding:20px;
        }

        .book-content h5{
            color:#243b55;
            margin-bottom:10px;
        }

        .book-content p{
            color:#777;
            margin-bottom:15px;
        }

        .book-btn{
            background:#243b55;
            color:white;
            padding:10px 20px;
            border:none;
            border-radius:10px;
            transition:0.4s;
        }

        .book-btn:hover{
            background:#141e30;
        }

        /* FOOTER */

        footer{
            background:#141e30;
            color:white;
            text-align:center;
            padding:20px;
        }

        /* ANIMATION */

        @keyframes float{

            0%{
                transform:translateY(0px);
            }

            50%{
                transform:translateY(-15px);
            }

            100%{
                transform:translateY(0px);
            }

        }

        /* RESPONSIVE */

        @media(max-width:768px){

            .hero{
                text-align:center;
                padding-top:100px;
            }

            .hero-text h1{
                font-size:40px;
            }

            .hero-img{
                margin-top:40px;
            }

        }

    </style>

</head>
<body>

<!-- NAVBAR -->

<?php include('nav.php') ?>

<!-- HERO SECTION -->

<section class="hero">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6 hero-text">

                <h1>
                    Welcome To
                    <span>E-Library</span>
                </h1>

                <p>
                    Discover thousands of books, notes, PDFs,
                    and educational resources anytime anywhere.
                    Learn smarter with our modern digital library.
                </p>

                <button class="hero-btn">
                    Explore Books
                </button>

            </div>

            <div class="col-md-6 hero-img">

                <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794">

            </div>

        </div>

    </div>

</section>

<!-- FEATURES -->

<section class="features">

    <div class="section-title">

        <h2>
            Why Choose Us
        </h2>

    </div>

    <div class="container">

        <div class="row g-4">

            <div class="col-md-4">

                <div class="feature-card">

                    <i class="fa-solid fa-book-open"></i>

                    <h4>
                        Huge Collection
                    </h4>

                    <p>
                        Access thousands of books from multiple categories.
                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="feature-card">

                    <i class="fa-solid fa-download"></i>

                    <h4>
                        Easy Download
                    </h4>

                    <p>
                        Download books and PDFs instantly with one click.
                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="feature-card">

                    <i class="fa-solid fa-mobile-screen"></i>

                    <h4>
                        Mobile Friendly
                    </h4>

                    <p>
                        Fully responsive design for all devices and screens.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- BOOK SECTION -->

<section class="books">

    <div class="section-title">

        <h2>
            Popular Books
        </h2>

    </div>

    <div class="container">

        <div class="row g-4">

            <div class="col-md-4">

                <div class="book-card">

                    <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f">

                    <div class="book-content">

                        <h5>
                            Science Book
                        </h5>

                        <p>
                            Author : John Smith
                        </p>

                        <button class="book-btn">
                            Read More
                        </button>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="book-card">

                    <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da">

                    <div class="book-content">

                        <h5>
                            Technology Book
                        </h5>

                        <p>
                            Author : David Miller
                        </p>

                        <button class="book-btn">
                            Read More
                        </button>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="book-card">

                    <img src="https://images.unsplash.com/photo-1495446815901-a7297e633e8d">

                    <div class="book-content">

                        <h5>
                            History Book
                        </h5>

                        <p>
                            Author : Alex Brown
                        </p>

                        <button class="book-btn">
                            Read More
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- FOOTER -->

<footer>

    <p>
        © 2026 E-Library | All Rights Reserved
    </p>

</footer>

</body>
</html>