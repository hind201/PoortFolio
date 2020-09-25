<?php
session_start();
include('connexiondb.php');
//portfolio//
$modifindex = mysqli_query($connection, "SELECT  photo From fil_rouge_portfolio where id =8");
$rowslide1 = mysqli_fetch_array($modifindex);

$modifindex = mysqli_query($connection, "SELECT  photo From fil_rouge_portfolio where id =10");
$rowslide2 = mysqli_fetch_array($modifindex);

$modifindex = mysqli_query($connection, "SELECT  photo From fil_rouge_portfolio where id =13");
$rowslide3 = mysqli_fetch_array($modifindex);

$modifindex = mysqli_query($connection, "SELECT  photo From fil_rouge_portfolio where id =14");
$rowslide4 = mysqli_fetch_array($modifindex);


//contact//
$contactmodification = mysqli_query($connection, "SELECT Email, phone, adresse From contact ");
$rowcontact =mysqli_fetch_array($contactmodification);


?>

  
  
 

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <link href="dist/css/style.css" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <!-- <link href="https://blogfonts.com/css/aWQ9MTUyMzg3JnN1Yj0zODcmYz1zJnR0Zj1Tb3JyZW4rTWVkaXVtLm90ZiZuPXNvcnJlbi1tZWRpdW0tMw/Sorren-Medium.otf" rel="stylesheet" type="text/css"/> -->
  <title>HindLhaimer</title>
  
</head>

<body>

  <section id="acceuill">

    <header>

      <div class="menu-btn-logo">
        <img src="img/hind-Recovered.png" alt="logo" style="width:300px";>
      </div>
      <div class="hero">

        <div class="snow">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1536" preserveAspectRatio="xMidYMax slice">
            <g fill="#FFF" fill-opacity=".15" transform="translate(55 42)">
              <g id="snow-bottom-layer">
                <ellipse cx="6" cy="1009.5" rx="6" ry="5.5" />
                <ellipse cx="138" cy="1000.5" rx="6" ry="5.5" />
                <ellipse cx="398" cy="1055.5" rx="6" ry="5.5" />
                <ellipse cx="719" cy="1284.5" rx="6" ry="5.5" />
                <ellipse cx="760" cy="1155.5" rx="6" ry="5.5" />
                <ellipse cx="635" cy="1459.5" rx="6" ry="5.5" />
                <ellipse cx="478" cy="1335.5" rx="6" ry="5.5" />
                <ellipse cx="322" cy="1414.5" rx="6" ry="5.5" />
                <ellipse cx="247" cy="1234.5" rx="6" ry="5.5" />
                <ellipse cx="154" cy="1425.5" rx="6" ry="5.5" />
                <ellipse cx="731" cy="773.5" rx="6" ry="5.5" />
                <ellipse cx="599" cy="874.5" rx="6" ry="5.5" />
                <ellipse cx="339" cy="819.5" rx="6" ry="5.5" />
                <ellipse cx="239" cy="1004.5" rx="6" ry="5.5" />
                <ellipse cx="113" cy="863.5" rx="6" ry="5.5" />
                <ellipse cx="102" cy="1223.5" rx="6" ry="5.5" />
                <ellipse cx="395" cy="1155.5" rx="6" ry="5.5" />
                <ellipse cx="826" cy="943.5" rx="6" ry="5.5" />
                <ellipse cx="626" cy="1054.5" rx="6" ry="5.5" />
                <ellipse cx="887" cy="1366.5" rx="6" ry="5.5" />
                <ellipse cx="6" cy="241.5" rx="6" ry="5.5" />
                <ellipse cx="138" cy="342.5" rx="6" ry="5.5" />
                <ellipse cx="398" cy="287.5" rx="6" ry="5.5" />
                <ellipse cx="719" cy="516.5" rx="6" ry="5.5" />
                <ellipse cx="760" cy="387.5" rx="6" ry="5.5" />
                <ellipse cx="635" cy="691.5" rx="6" ry="5.5" />
                <ellipse cx="478" cy="567.5" rx="6" ry="5.5" />
                <ellipse cx="322" cy="646.5" rx="6" ry="5.5" />
                <ellipse cx="247" cy="466.5" rx="6" ry="5.5" />
                <ellipse cx="154" cy="657.5" rx="6" ry="5.5" />
                <ellipse cx="731" cy="5.5" rx="6" ry="5.5" />
                <ellipse cx="599" cy="106.5" rx="6" ry="5.5" />
                <ellipse cx="339" cy="51.5" rx="6" ry="5.5" />
                <ellipse cx="239" cy="236.5" rx="6" ry="5.5" />
                <ellipse cx="113" cy="95.5" rx="6" ry="5.5" />
                <ellipse cx="102" cy="455.5" rx="6" ry="5.5" />
                <ellipse cx="395" cy="387.5" rx="6" ry="5.5" />
                <ellipse cx="826" cy="175.5" rx="6" ry="5.5" />
                <ellipse cx="626" cy="286.5" rx="6" ry="5.5" />
                <ellipse cx="887" cy="598.5" rx="6" ry="5.5" />
              </g>
            </g>
            <g fill="#FFF" fill-opacity=".3" transform="translate(65 63)">
              <g id="snow-top-layer">
                <circle cx="8" cy="776" r="8" />
                <circle cx="189" cy="925" r="8" />
                <circle cx="548" cy="844" r="8" />
                <circle cx="685" cy="1115" r="8" />
                <circle cx="858" cy="909" r="8" />
                <circle cx="874" cy="1438" r="8" transform="rotate(180 874 1438)" />
                <circle cx="657" cy="1256" r="8" transform="rotate(180 657 1256)" />
                <circle cx="443" cy="1372" r="8" transform="rotate(180 443 1372)" />
                <circle cx="339" cy="1107" r="8" transform="rotate(180 339 1107)" />
                <circle cx="24" cy="1305" r="8" transform="rotate(180 24 1305)" />
                <circle cx="8" cy="8" r="8" />
                <circle cx="189" cy="157" r="8" />
                <circle cx="548" cy="76" r="8" />
                <circle cx="685" cy="347" r="8" />
                <circle cx="858" cy="141" r="8" />
                <circle cx="874" cy="670" r="8" transform="rotate(180 874 670)" />
                <circle cx="657" cy="488" r="8" transform="rotate(180 657 488)" />
                <circle cx="443" cy="604" r="8" transform="rotate(180 443 604)" />
                <circle cx="339" cy="339" r="8" transform="rotate(180 339 339)" />
                <circle cx="24" cy="537" r="8" transform="rotate(180 24 537)" />
              </g>
            </g>
          </svg>
        </div>



      </div>





      <div class="menu-btn">
        <div class="btn-line"></div>
        <div class="btn-line"></div>
        <div class="btn-line"></div>
      </div>



      <nav class="menu">
        <div class="menu-branding">
         
        </div>
        <ul class="menu-nav">
          <li class="nav-item">
            <a href="#acceuill" class="nav-link">
              ACCUEIL
            </a>
          </li>
          <li class="nav-item">
            <a href="#propos" class="nav-link">
              APROPOS
            </a>
          </li>
          <li class="nav-item">
            <a href="#portfolio" class="nav-link">
              PORTFOLIO
            </a>
          </li>
          <li class="nav-item current">
            <a href="#contact" class="nav-link">
              CONTACT
            </a>
          </li>
          <li class="nav-item ">
            <a href="login.php" class="nav-link">
              LOGIN
            </a>
          </li>
        </ul>
      </nav>







      
      <div class="prenom">
        <p class="pr">Hind <span class="lhm">Lhaimer</span></p>
      </div><br>
    
      <div class="nom">

        <h1 class="phrase">BIENVENUE SUR MON PORTFOLIO</h1>
      </div>
      <!-- <div class="résaux-sociaux">
      <div class="fb">
        <img src="img/facebook.png" alt="">
      </div>
      <div class="tw">
        <img src="img/twitter.png" alt="">
      </div>
      <div class="gh">
        <img src="img/githubl.png" alt="">
      </div>
      <div class="ln">
        <img src="img/linkedin.png" alt="">
      </div> -->

      </div>

     
    </header>
  </section>





<section id="propos" class="main__propos">
  


    <pre class="code__propos">
        <code class="code">
<span class="code__ligne"><span class="code__braket1">&#10627</span></span>
<span class="code__ligne">  <span class="code__ligne--vide"> </span></span>
<span class="code__ligne"><span class="code-space">. .</span><span class="code__var">Nom</span> <span class="code__value"> " Hind Lhaimer " </span> </span>
<span class="code__ligne"><span class="code-space">. .</span><span class="code__var">Travail</span>  <span class="code__value">" Développeuse web front-end "</span> </span>
<span class="code__ligne"> <span class="code__ligne--vide"> </span></span>
<span class="code__ligne"><span class="code-space">. .</span><span class="code__var">email</span><span class="code__value"><a href="mailto:lhaimer.hind@gmail.com" class="code-link" itemprop="email ">lhaimer.hind@gmail.com </style></a></style></span> </span>
<span class="code__ligne"><span class="code-space">. .</span><span class="code__var">location</span> <span class="code__value"> " Youssoufia Maroc "</span> </span>
<span class="code__ligne">  <span class="code__ligne--vide"> </span></span>
<span class="code__ligne"><span class="code-space">. .</span><span class="code__var">Formations</span> <span class="code__braket1">  &#10627 </span> </span>
<span class="code__ligne">  <span class="code__ligne--vide"> </span></span>
<span class="code__ligne"><span class="code-space">. . . .</span><span class="code__cle code__var ">2019-2020</span> <span class="code__value">1er annés à YOUCODE.</span> </span>
<span class="code__ligne"><span class="code-space">. . . .</span><span class="code__cle code__var ">2018-2019</span> <span class="code__value"> ACT SCHOOL</span> </span>
<span class="code__ligne"><span class="code-space">. . . .</span><span class="code__cle code__var ">2016-2018</span> <span class="code__value">Diplôme en Gestion des Entreprises
</span> </span>
<span class="code__ligne"><span class="code__braket2"> &#10628  </span></span>
<span class="code__ligne">  <span class="code__ligne--vide"> </span></span>
<span class="code__ligne"><span class="code-space">. .</span><span class="code__var">Compétances</span>    </span>   </span>
<!-- <span class="code__ligne">  <span class="code__ligne--vide"> </span></span>
<span class="code__ligne"><span class="code-space">. .</span><span class="code__var">ÉXPERIENCES</span> [ </span> -->
<span class="code__ligne"><span class="code-space">. . . .</span><span class="code__value">HTML</span> </span>
<span class="code__ligne"><span class="code-space">. . . .</span><span class="code__value">CSS</span> </span>
<span class="code__ligne"><span class="code-space">. . . .</span><span class="code__value">JAVASCRIPT</span> </span>
<span class="code__ligne"><span class="code-space">. . . .</span><span class="code__value">PHP</span> </span>
<span class="code__ligne"><span class="code-space">. . . .</span><span class="code__value">GIT</span> </span>
<span class="code__ligne"><span class="code-space">. . . .</span><span class="code__value">PHOTOSHOP</span> </span>
<span class="code__ligne"> <span class="code__ligne--vide"> </span></span>
<span class="code__ligne"><span class="code-space">. .</span><span class="code__var">LANGUES</span> <span class="code__braket1">&#10627</span></span>
<span class="code__ligne">  <span class="code__ligne--vide"> </span></span>
<span class="code__ligne"><span class="code-space">. . . .</span><span class="code__cle  code__var">ARABE</span> <span class="code__value">"Courant"</span> </span>
<span class="code__ligne"><span class="code-space">. . . .</span><span class="code__cle  code__var">FRANCAIS</span>  <span class="code__value">"Bien"</span> </span>
<span class="code__ligne"><span class="code-space">. . . .</span><span class="code__cle  code__var">ANGLAIS</span> <span class="code__value">"Moyen"</span> </span>

<span class="code__ligne"><span class="code__braket2"> &#10628    </span></span>
<span class="code__ligne"><span class="code__braket2"> &#10628 </span></span>
</code></pre>
  </section>

  <section  id="portfolio">

    <div class="container">

      <!-- BUTTONS (input/labels) -->
      <input type="radio" name="slider" id="slide-1-trigger" class="trigger" checked>
      <label class="btn" for="slide-1-trigger"></label>
      <input type="radio" name="slider" id="slide-2-trigger" class="trigger">
      <label class="btn" for="slide-2-trigger"></label>
      <input type="radio" name="slider" id="slide-3-trigger" class="trigger">
      <label class="btn" for="slide-3-trigger"></label>
      <input type="radio" name="slider" id="slide-4-trigger" class="trigger">
      <label class="btn" for="slide-4-trigger"></label>

      <!-- SLIDES -->
      <div class="slide-wrapper">
        <div id="slide-role">
          <div class="slide slide-1"><?php echo "<img  src='img/".$rowslide1["photo"]."' alt=''>";?></div>
          <div class="slide slide-2 "><?php echo "<img  src='img/".$rowslide2["photo"]."' alt=''>";?></div>
          <div class="slide slide-3"><?php echo "<img  src='img/".$rowslide3["photo"]."' alt=''>";?></div>
          <div class="slide slide-4"><?php echo "<img  src='img/".$rowslide4["photo"]."' alt=''>";?></div>
        </div>
      </div>
      <div class="github">
        <button><a href="https://github.com/">GITHUB</a></button>
      </div>



    </div>

  </section>
  <section class="contact" id="contact">
    <main>
      <h1 class="lg-heading">
        Contactez
        <span class="text-secondary">Nous</span>
      </h1>
      <h2 class="sm-heading">
      C'est ainsi que vous pouvez me joindre ...
      </h2>
      <div class="boxes">
        <div class="button">
          <a href="mailto:lhaimer.hind94@gmail.com" class="text-secondary"><?php echo $rowcontact["Email"];?></a>
        </div>
        <div class="button">
          <span class="text-secondary"><?php echo $rowcontact["phone"];?></span> </div>
        <div class="button">
          <span class="text-secondary"><?php echo $rowcontact["adresse"];?></span>
        </div>
      </div>
    </main>

    
  </section>

  





  <script src="app/js/script.js"></script>

</body>

</html>
