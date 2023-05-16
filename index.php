<?php

$servername = "localhost";
$username = "root";
$password = "claudiu";
$databasename = "freelancer";

$connection = new mysqli($servername, $username, $password, $databasename);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bordea Claudiu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div id="wrapper">
    <header id="header">    <!-- set to flex, justify-context: space-between -->
        <img id="logo" src="logo.png" alt="Logo">

        <nav>
            <ul> <!-- also flex -->
                <li>            
                    <a href="#">Home</a>
                </li>
                <li>            
                    <a href="#services_m">Services</a>
                </li>
                <li>            
                    <a href="#portfolio">Portfolio</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
            </ul>

        </nav>

    </header>

    <header id="headerm">
        <nav class="navbar">
            <img id="logo" src="logo.png" alt="logo">

            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#services_m" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="#portfolio" class="nav-link">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a href="#contact_m" class="nav-link">Contact</a>
                </li>
            </ul>

            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

    <section id="hero"> <!-- height: 75vh -->
        <div id="herot"> <!-- set both divs from hero to width:50%, both have display:flex -->
            <h2 id="heroh">
                Bordea Claudiu
            </h2>
               <p class="herop">Programmer & web designer.</p>
        
               <p class="herop">Empty stack dev - Full time procrastinator, professional googler, video game enjoyer.</p>
        </div>

        <div id="heroi"> <!-- background: url(image file), background-repeat: no-repeat, background-size: cover, background-position:center center (or percentages), height:100%; img must be in the background of an element, heroi has no html content -->
            <!-- <img id="me" src="Bordea.png" alt="Bordea Claudiu"> this should be in css ^^^ read above -->
        </div>
    </section>

    <div id="services_m">
        <div id="serv">
            <div class="rowS">
                <h2 id="h2c">Services</h2>
                </div>
        </div>
    
    
        <section id="services">
            <div class="rowS"> <!-- display: flex -->
                <article class="aServices">
                    <div class="column">
                        <h3 class="h3c">
                            <img id="logoc" src="design.png" alt="Graphic design logo">
                             Graphic design
                        </h3>
                        <p id="columnp">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat quia exercitationem enim optio iure ut voluptate natus tempore consectetur rem iste, amet accusamus quo dolore, necessitatibus blanditiis qui, quos dolores.</p>
                    </div>
                </article>
    
                <article class="aServices">
                    <div class="column">
                        <h3 class="h3c">
                            <img id="logoc" src="front.png" alt="Front end development">
                            Front-end development
                        </h3>
                        <p id="columnp">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat quia exercitationem enim optio iure ut voluptate natus tempore consectetur rem iste, amet accusamus quo dolore, necessitatibus blanditiis qui, quos dolores.</p>
                    </div>
                </article>
    
                <article class="aServices">
                    <div class="column">
                        <h3 class="h3c">
                            <img id="logoc" src="backend.png" alt="Back end development">
                            Back-end development
                        </h3>
                        <p id="columnp">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat quia exercitationem enim optio iure ut voluptate natus tempore consectetur rem iste, amet accusamus quo dolore, necessitatibus blanditiis qui, quos dolores.</p>
                    </div>
                </article>
            </div>
        </section>
    </div>

    <section id="portfolio">
  <div class="">
    <h2>Portfolio</h2>
  </div>
  <div class="rowP">
    <?php 
    $query = "SELECT * FROM portfolio;";
    $result = $connection->query($query);
    if ($result -> num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo '<article class="aPortfolio">';
        echo '<div class="pocolumn">';
        echo '<div class="title-container">';
        echo '<h3 id="h3po">' . $row["port_title"] . '</h3>';
                $imagesQuery = "SELECT serv_img FROM services INNER JOIN foreignk ON services.serv_id = foreignk.serv_id WHERE foreignk.port_id = " . $row["port_id"];
                $imagesResult = $connection->query($imagesQuery);
                if ($imagesResult -> num_rows > 0) {
                  echo '<div class="image-container">';
                  while($imagesRow = $imagesResult->fetch_assoc()) {
                    echo '<img src="' . $imagesRow["serv_img"] . '" id="logopo">';
                  }
                  echo '</div>';
                }
        echo '</div>';
        echo '<h2 id="h2po">' . $row["port_work"] . '</h2>';
        echo '<p id="portp">' . $row["port_desc"] . '</p>';
        echo '</div>';
        echo '</article>';
      }
    } else {
      echo "0 results";
    }
    ?>
  </div>
</section>

    
    <section id="contact">

        <div class="columnco">
            <h2 id="hcon">
                Contact me for any details
            </h2>
            <div id="contactinfo">
                <h2 class="hcontact">
                    Contact information:
                </h2>
                <h2 class="h2contact">Postal address</h2>
                <p id="pcontact">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <h2 class="h2contact">Telephone: <span>0723241421</span></h2>
                <h2 class="h2contact">Email: <span>claudiubordea5@gmail.com</span></h2>
                <h2 class="h2contact">Social media:</h2>
                <img id="logocon1" src="logo.png" alt="Logo">
                <img class="logocon" src="logo.png" alt="Logo">
                <img class="logocon" src="logo.png" alt="Logo">
            </div>
        </div>



        <div class="columnco">
            <h1 id="hcon1">
                Write a message here:
            </h1>
            <form action="#">
                <div class="formrow">
                    <div class="col-25">
                        <label for="name"><strong>Name <span id="red">*</span></strong></label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="name" name="username" placeholder="Your name...">
                    </div>
                </div>

                <div class="formrow">
                    <div class="col-25">
                        <label for="email"><strong>Email <span id="red">*</span></strong></label>                
                    </div>
                    <div class="col-75">
                        <input type="email" id="email" name="useremail" placeholder="Your email...">
                    </div>
                </div>


                <div class="formrow">
                    <div class="col-25">
                        <label for="subject"><strong>Subject</strong></label>
                    </div>
                    <div class="col-75">
                        <select name="subject" id="subject">
                            <option value="general">General</option>
                            <option value="option2">Option2</option>
                            <option value="option3">Option3</option>
                        </select>
                    </div>
                </div>

                <div class="formrow">
                    <div class="col-25">
                        <label for="message"><strong>Message <span id="red">*</span></strong></label>
                    </div>
                    <div class="col-75">
                        <textarea name="message" id="message" cols="30" rows="10">
                        </textarea>
                    </div>
                </div>

                <div class="formrow1">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </section>

    <section id="contact_m"> <!-- mobile -->

        <h2 id="hcon">
            Contact me for any details
        </h2>
        <div class="columnco">

            <div id="contactinfo">
                <h2 class="hcontact">
                    Contact information:
                </h2>
                <h2 class="h2contact">Postal address</h2>
                <p id="pcontact">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <h2 class="h2contact">Telephone: <span>0723241421</span></h2>
                <h2 class="h2contact">Email: <span>claudiubordea5@gmail.com</span></h2>
                <h2 class="h2contact">Social media:</h2>
                <img id="logocon1" src="logo.png" alt="Logo">
                <img class="logocon" src="logo.png" alt="Logo">
                <img class="logocon" src="logo.png" alt="Logo">
            </div>
        </div>


        <h1 id="hcon1">
            Write a message here:
        </h1>
        <div class="columnco">

            <form action="#">
                <div class="formrow">
                    <div class="col-25">
                        <label for="name"><strong>Name <span id="red">*</span></strong></label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="name" name="username" placeholder="Your name...">
                    </div>
                </div>

                <div class="formrow">
                    <div class="col-25">
                        <label for="email"><strong>Email <span id="red">*</span></strong></label>                
                    </div>
                    <div class="col-75">
                        <input type="email" id="email" name="useremail" placeholder="Your email...">
                    </div>
                </div>


                <div class="formrow">
                    <div class="col-25">
                        <label for="subject"><strong>Subject</strong></label>
                    </div>
                    <div class="col-75">
                        <select name="subject" id="subject">
                            <option value="general">General</option>
                            <option value="option2">Option2</option>
                            <option value="option3">Option3</option>
                        </select>
                    </div>
                </div>

                <div class="formrow">
                    <div class="col-25">
                        <label for="message"><strong>Message <span id="red">*</span></strong></label>
                    </div>
                    <div class="col-75">
                        <textarea name="message" id="message" cols="30" rows="10">
                        </textarea>
                    </div>
                </div>

                <div class="formrow1">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </section>

    <section id="footer">
        <img id="logofo" src="logo.png" alt="Logo">
        
        <p id="pfo">
            © 2023. Design and implementation: Claudiu Bordea. All rights reserved.
        </p>
    </section>
</div>


<script src="my_script.js"></script>

</body>
</html>