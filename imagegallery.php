<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Security Hiring System - Image Gallery</title>
    <style>
        nav {
            /* background-color: rgba(93, 109, 158, 0.7); */
            overflow: hidden;
            border: 2px solid white;
            border-radius: 3rem;
            margin-top: 95px;
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 20px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: white;
            color: black;
        }

        .left {
            display: inline-block;
            /* border: 2px solid red; */
            position: absolute;
            left: 60px;
            top: 40px;
            opacity: 0.8;
        }

        .left img {
            border-radius: 2rem;
            width: 136px;
            filter: invert(90%);
        }

        body,
        h1 {
            margin: 0;
            padding: 0;
        }

        body {
            margin: 0;
            padding: 0;
            background-image: url('img/sec.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 90vh;
            font-family: Arial, sans-serif;
            background-color: rgba(0, 0, 0, 0.7);
        }

        header {
            /* background-color: hsl(233, 91%, 18%); */
            font-size: 2rem;
            color: white;
            font-weight: bold;
            text-align: center;
            padding: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 0 20px;
        }

        .image {
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out;
        }

        .image img {
            width: 100%;
            height: 200px;
            display: block;
            transition: transform 0.3s ease-in-out;
        }

        .image:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .image:hover img {
            transform: scale(1.05);
        }

        .image figcaption {
            padding: 10px;
            text-align: center;
            background-color: #333;
            color: #fff;
            margin-top: -40px;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .image:hover figcaption {
            opacity: 2;
        }
    </style>
</head>

<body>
    <header>
        <div class="left">
            <img src="img/logo.jpg" alt="logo">

        </div>
        <h1>Image Gallery</h1>
    </header>
    <nav>
        <a href="hmpge.php">Home</a>
    </nav>
    <marquee behavior="scroll" direction="left" scrollamount="20" loop="infinite">
        <div class="gallery">
            <div class="image">
                <img src="img/g1.jpg" alt="Image 1" height="250">
            </div>
            <div class="image">
                <img src="img/g3.jpg" alt="Image 2" height="250">
            </div>
            <div class="image">
                <img src="img/g4.jpg" alt="Image 8" height="250">
            </div>
            <div class="image">
                <img src="img/g2.jpg" alt="Image 4" height="250">
            </div>
        </div>
    </marquee>
    <marquee behavior="scroll" direction="right" scrollamount="20" loop="infinite">
        <div class="gallery">
            <div class="image">
                <img src="img/g5.jpg" alt="Image 5" height="250">
            </div>
            <div class="image">
                <img src="img/g6.jpg" alt="Image 6" height="250">
            </div>
            <div class="image">
                <img src="img/g7.jpg" alt="Image 5" height="250">
            </div>
            <div class="image">
                <img src="img/g8.jpg" alt="Image 6" height="250">
            </div>
        </div>
    </marquee>




</body>

</html>