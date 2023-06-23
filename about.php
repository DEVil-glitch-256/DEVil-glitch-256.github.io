<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- <link rel="stylesheet" href="/Style/about.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;

}

body {
    background-image: url(/Resourses/aboutkeliye.jpg);
    background-size: cover;
    background-position: center;
}

.box1, .box2, .box3, .box4{
    display: block;
    margin: 1rem 3rem;

    border-radius: 9px;
    box-shadow: 2px 7px 18px black;
    padding: 1rem;
}
.contact{
    margin-top: 5rem;
    margin-left: 5rem;
}

.contact h1{
    margin-bottom: 4rem;
}

.box1 h3,p{
    margin: 1rem;
}


.box2 h3,p{
    margin: 1rem;
}


.box3 h3,p{
    margin: 1rem;
}



.box4 h3,p{
    margin: 1rem;
}

.dropdown{
    display: none;
    position: absolute;
    right: 10rem;
    top: 5rem;
    width: 16rem;
    background: rgb(215, 215, 215);
    backdrop-filter: blur (15px);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 0 30px rgba(0, 0, 0, .5);
    z-index: 100;
}

.dropdown li{
    padding: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 0;
    border: 1px solid rgb(219, 219, 219);
    border-style: dashed;
}

.profile { 
    background: transparent;
    border-radius: 40px;
    padding: 0.4rem .6rem;
    border: 1px solid #8a9fad;
    cursor: pointer;
    font-size: 1rem;
    font-weight: bold;
    transition: .5s ;
    display: flex;
    align-items: center;
    gap: 1rem;
    box-shadow: 0 0 30px rgba(0, 0, 0, .3);
}

.profile:hover{
    background: rgb(10, 5, 8);
    color: aliceblue;  
    scale: 1.1;
}

.profile:hover +.dropdown,
.profile:focus +.dropdown {
    display: block;
}

.btn { 
    background: transparent;
    border-radius: 20px;
    padding: 0.5rem 1rem;
    /* border: 2px solid #050000; */
    cursor: pointer;
    font-size: 1.1rem;
    font-weight: bold;
    transition: .5s ;
    overflow: hidden;
    z-index: 1;
    box-shadow: 6px 6px 18px #949494, -6px -6px 18px #ffffff;
}

.btn:hover{
    /* background: rgb(10, 5, 8);
    color: aliceblue;   */
    scale: 1.1;
}

.btn::before {
    content: '';
    width: 0;
    height: 3em;
    /* border-radius: 30em; */
    position: absolute;
    top: 0;
    left: 0;
    background-image: linear-gradient(to
    right,#0fd850 0%, #f9f047 100%);
    transition: .5s ease;
    display: block;
    z-index: -1;

}
.btn:hover::before {
    width: 9em;
}

.heading h1{
    margin-top: 3rem;
    font-size: 50px;
    color: #36455c;
    margin-bottom: 5rem;
}

section{
    margin-top: 9rem;
}

section img{
    margin-left: 12rem;
    width: 35rem;
  
}

.container{
    position: relative;
    padding: 0 2rem;
}

img {
    width: 50px;
    border-radius: 30px;
    /* margin-left: 177px;
    margin-right: 142px; */
}
nav {
    display: flex;
    width: 100%;
    height: 60px;
    max-width: 1200px;
    margin: 25px auto;
    align-items: center;
    justify-content: space-between;
    z-index: 99;
}


ul {
    /* margin-left: 150px; */
    display: flex;
    gap: 2rem ;
}

a {
    font-size: 1em;
    position: relative;
    text-decoration: none;
    color: black;
    font-weight: 500;
    padding: 3px;
    margin: 30px;
    transition: 0.3s ease;
}


.heading {
    text-align: center;
  

}


.about_us {
    display: flex;
    align-items: center;
    margin: auto;

}

.about_us img {
    flex: 0 100%;
    max-width: 100%;
    height: 100%;

}

.content {
    padding: 50px;

}

.content h2 {
    color: #303030;
    font-size: 24px;
    margin: 15px 0px;
}

.content p {
    color: #333333;
    font-size: 1rem;
    line-height: 1.5;
    width: auto;
    margin: 15px 0px;
    
}

.read-more-btn {
    display: inline-block;
    color: #fff;
    background-color: #151515;
    border: none;
    border-radius: 12px;
    padding: 12px;
    font-size: 1rem;
    cursor: pointer;
    transition: ease-out .6s;

}

.read-more-btn:hover {
    background-color: #dedede;
    color: black;

}

@media(max-width: 768px) {
    .about_us {
        flex-direction: column;
    }

    .about_us img {
        flex: 0 100%;
        max-width: 100%;

    }

    .content {
        flex: 100%;
        max-width: 100%;
        padding: 15px;
    }


    .container nav ul a:before{
        content: '';
        position: absolute;
        background: black;
        width: 0;
        height: 3px;
        bottom: 0;
        left: 0;
        transition: 0.3s ease;
    }


    .container nav ul a:hover:before{
        width: 100%;
    }
}

</style>
</head>

<body>
    <div class="container">
        <nav>
            <img src="/Resourses/mlogo.png" alt="DEV">
            <ul>
                <a href="/Pages/loggedin.php">Home</a>
                <a href="/Pages/loggedhardware.php">Hardware</a>
                <a href="/Pages/loggedabout.php"  style="color: rgb(75, 74, 72);">About</a>
            </ul>
            <button class="profile">
                <img src="/Resourses/user.png" alt="User">
                <h4> <?php echo $_SESSION['username'];   ?> </h4>
                <i class="fa fa-angle-down fa-flip-horizontal" id="ic" aria-hidden="true" style="display: inline-block;"></i>

            </button>

            <div class="dropdown">
               <li>Your Profile</li>
               <li>Manage Your Metaverse</li>
               <li>Privacy policy</li>
               <li>help</li>
               <li>Logout</li>

            </div>
        </nav>
    </div>

    <div class="heading">
        <h1> About us</h1>
    </div>
    <section class="about_us">
        <img src="/Resourses/metagirl.webp"
            alt="Metaverse">
        <div class="content">
            <h2>What is Metaverse?</h2>
            <p>In science fiction, the "metaverse" is a hypothetical iteration of the Internet as a single, universal, and immersive virtual world that is facilitated by the use of virtual reality (VR) and augmented reality (AR) headsets.In colloquial usage, a "metaverse" is a network of 3D virtual worlds focused on social and economic connection.</p>
            <button class="read-more-btn">Read More</button>
        </div>
    </section>

    <div class="contact">
        <h1>Our members</h1>
        <div class="box1">
            <h3 style="text-align: left;">Devanand Patil</h3>
            <p>
               Email: devanandpatil8878@gmail.com <br>
               Phone: 7724928684
            </p>
        </div>


        <div class="box2">
            <h3 style="text-align: left;">Rakesh Patil</h3>
            <p>
               Email: rakeshpatil456@gmail.com <br>
               Phone: 7477225233
            </p>
        </div>

        <div class="box3">
            <h3 style="text-align: left;">Dheeraj Ahirwar</h3>
            <p>
               Email: dheerajahirwaa@gmail.com <br>
               Phone: 7643847389
            </p>
        </div>

        <div class="box4">
            <h3 style="text-align: left;">Laxman kori</h3>
            <p>
               Email: lucky007@gmail.com <br>
               Phone: 9347756834
            </p>
        </div>
    </div>
</body>

</html>
