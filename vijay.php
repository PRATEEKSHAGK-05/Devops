<?php
// vijay.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thalapathy Vijay | Official Fan Page</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background: linear-gradient(135deg,#000000,#2b0000,#000000);
    color:white;
}

/* Hero Section */
.hero{
    height:100vh;
    background: url('https://wallpaperaccess.com/full/3937353.jpg') no-repeat center center/cover;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
    position:relative;
}

.hero::after{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.7);
}

.hero-content{
    position:relative;
    z-index:2;
}

.hero h1{
    font-size:60px;
    letter-spacing:3px;
    color:#ff2e63;
}

.hero p{
    font-size:20px;
    margin-top:15px;
}

/* Section Styling */
section{
    padding:80px 10%;
}

.section-title{
    text-align:center;
    font-size:35px;
    margin-bottom:40px;
    color:#ff2e63;
}

/* Glass Card */
.card{
    background:rgba(255,255,255,0.05);
    backdrop-filter:blur(10px);
    padding:30px;
    border-radius:15px;
    margin-bottom:40px;
    transition:0.4s;
}

.card:hover{
    transform:translateY(-10px);
    box-shadow:0 0 25px #ff2e63;
}

/* Film Gallery */
.gallery{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
}

.gallery img{
    width:100%;
    height:350px;
    object-fit:cover;
    border-radius:10px;
    transition:0.4s;
}

.gallery img:hover{
    transform:scale(1.05);
}

/* Footer */
footer{
    background:#111;
    text-align:center;
    padding:20px;
    margin-top:50px;
    border-top:1px solid #ff2e63;
}
</style>
</head>

<body>

<!-- HERO -->
<div class="hero">
    <div class="hero-content">
        <h1>Thalapathy Vijay</h1>
        <p>The Mass Superstar of Tamil Cinema</p>
    </div>
</div>

<!-- ABOUT -->
<section>
    <h2 class="section-title">About Vijay</h2>
    <div class="card">
        <p>
        Joseph Vijay Chandrasekhar, popularly known as <b>Thalapathy Vijay</b>, 
        was born on June 22, 1974 in Chennai, Tamil Nadu. 
        Son of director S.A. Chandrasekhar, Vijay entered cinema at a young age and 
        became one of the highest paid and most influential actors in India.
        </p>
        <br>
        <p>
        Known for his energetic dance moves, mass dialogues, and blockbuster hits, 
        Vijay has built a massive global fan base. His films consistently break box office records.
        </p>
    </div>
</section>

<!-- HIT MOVIES -->
<section>
    <h2 class="section-title">Blockbuster Movies</h2>
    <div class="gallery">
        <img src="https://upload.wikimedia.org/wikipedia/en/6/6b/Ghilli_poster.jpg">
        <img src="https://upload.wikimedia.org/wikipedia/en/5/5e/Thuppakki_poster.jpg">
        <img src="https://upload.wikimedia.org/wikipedia/en/9/9f/Master_film_poster.jpg">
        <img src="https://upload.wikimedia.org/wikipedia/en/3/33/Leo_%282023_film%29_poster.jpg">
    </div>
</section>

<!-- ACHIEVEMENTS -->
<section>
    <h2 class="section-title">Achievements</h2>
    <div class="card">
        <ul>
            <li>Multiple Tamil Nadu State Film Awards</li>
            <li>Vijay Awards Winner</li>
            <li>Highest Paid Tamil Actor</li>
            <li>Global Box Office Record Breaker</li>
            <li>Massive International Fan Following</li>
        </ul>
    </div>
</section>

<footer>
    <p> Dedicated to Thalapathy Fans | Designed with PHP</p>
</footer>

</body>
</html>
