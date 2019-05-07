<?php
include_once 'data.php';
$maxFoods = count($food);
$totalTags = count($tags);
$t0 = $tags[0];
$t1 = $tags[1];
$t2 = $tags[2];
$t3 = $tags[3];
$t4 = $tags[4];
$t5 = $tags[5];
$t6 = $tags[6];
$t7 = $tags[7];
$t8 = $tags[8];
$t9 = $tags[9];
$t10 = $tags[10];
$t11 = $tags[11];
$t12 = $tags[12];
$t13 = $tags[13];
?>

<!DOCTYPE html>
<html>

<head>
    <title> <?php $title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Karma", sans-serif
        }
        .w3-bar-block .w3-bar-item {
            padding: 20px
        }
    </style>
</head>

<body>
   
    <nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button">Close Menu</a>
        <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Food</a>
        <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
    </nav>

   
    <div class="w3-top">
        <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
            <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
            <div class="w3-center w3-padding-16"><?php echo $title ?></div>
        </div>
    </div>

    
    <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
      
        <div class="w3-row-padding w3-padding-16 w3-center" id="food">

            <?php
            for ($i = 0; $i < $maxFoods; $i++) {
                ?>
              
                <div class="w3-quarter">
                    <img src=<?php echo $food[$i]['image']; ?> alt=<?php echo $food[$i]['alt'] ?> style="width:100%">
                    <h3><?php echo $food[$i]['title']; ?></h3>
                    <p><?php echo $food[$i]['desc']; ?></p>
                   
            </div>

            <br>
               
               

            <?php
}
        ?>
        </div>
</div>


    <hr id="about">

   
    <div class="w3-container w3-padding-32 w3-center">
        <h3>About Me, The Food Man</h3><br>
        <img src="https://www.w3schools.com/w3images/chef.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
        <div class="w3-padding-32">
            <h4><b>I am Who I Am!</b></h4>
            <h6><i>With Passion For Real, Good Food</i></h6>
            <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        </div>
    </div>
    <hr>

    <footer class="w3-row-padding w3-padding-32">
        <div class="w3-third">
            <h3>ABOUT ME</h3>
            <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        </div>

        <div class="w3-third">
            <h3>SOCIAL LINKS</h3>
            <a href="#">Facebook</a><br>
            <a href="#">Twitter</a><br>
            <a href="#">Instagram</a><br>
            <a href="#">GitHub</a><br>
        </div>

        <div class="w3-third w3-serif">
              <span class="w3-tag w3-black w3-margin-bottom"><?php echo $t0; ?></span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?php echo $t1; ?></span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?php echo $t2; ?></span>
                <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?php echo $t3; ?></span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?php echo $t4; ?></span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?php echo $t5; ?></span>
                <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?php echo $t6; ?></span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?php echo $t7; ?></span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?php echo $t8; ?></span>
                <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?php echo $t9; ?></span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?php echo $t10; ?></span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?php echo $t11; ?></span>
                <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?php echo $t12; ?></span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?php echo $t13; ?></span>
            </p>
        </div>
    </footer>
  
    </div>

    <script>
        
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
        }
        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }
    </script>
</body>

</html>