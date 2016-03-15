<?php
include_once 'common.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Jim Peeters | Web Design Student</title>
  <meta name="description" content="A portfolio site of Jim Peeters ">
  <meta name="author" content="Jim Peeters">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href='https://fonts.googleapis.com/css?family=Poiret+One|Lobster' rel='stylesheet' type='text/css'>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/89f2f44ba07ea3fff7e561c2142813b278c2d6c6/devicon.min.css">
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css"
	rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css" type="text/css" >


  <!-- icon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
 <link rel="icon" href="images/logo.ico">

</head>
<body>


 <div class="section section1">
          <div class="language">
            <p><a href="index.php?lang=nl">NL</a> | <a href="index.php?lang=en">EN</a></p>
          </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
            <h1 class="title">Jim Peeters </h1>
            <p id="title2"><strong>Web &amp; UX </strong>Student</p>
            <p class="quote">"<?php echo $lang['QUOTE']; ?>"</p>
            <img src="images/me1.jpg" class="img-circle img-responsive imgSection1" alt="a picture of myself playing guitar under palm trees"> 
            <div class="ribbon">
                <span class="ribbon-text">
                    <ul class="navigation">
                   
                        <li>
                            <a class="btnProjects" href="#"><i class="fa fa-archive"></i> <?php echo $lang['NAVIGATION_PROJECTS']; ?></a>
                        </li>

                        <li>
                            <a class="btnAbout" href="#"><i class="fa fa-user"></i> <?php echo $lang['NAVIGATION_ABOUT']; ?></a>
                        </li>

                        <li>
                            <a class="btnContact" href="#"><i class="fa fa-comment"></i> <?php echo $lang['NAVIGATION_CONTACT']; ?></a>
                        </li>
              
                    </ul>
                </span>
            </div>
      </div>
    </div>
  </div>
 </div>
    
<div class="section section2">
    <div class="container">
        <div class="row">
          <h1 class="sectiontitle"><?php echo $lang['NAVIGATION_PROJECTS']; ?>
          </h1>
            <hr>
          <div class="col-md-6 col-sm-6 col-xs-12">
              <h2 id="projectTitle"><?php echo $lang['PROJECTTITLE_1']; ?> <a id="projectKorfballButton"><i id="iconp1" class="fa fa-sort-desc iconArrow"></i></a></h2>
              <div id="projectKorfballDescription" class="minimize">
                <img class="img-responsive" src="images/Home%20_%20World%20Korfball%20Championship%202015.png" alt="The korfball website homepage">
                <p class="projectDescriptionSmall"><?php echo $lang['PROJECTDESCRIPTION_1']; ?></p>
                <a type="button" class="btn btnDetails" href="projects/korfball.php">Details</a>
              </div>
           
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
              <h2 id="projectTitle"><?php echo $lang['PROJECTTITLE_2']; ?> <a id="projectFoodButton"><i id="iconp2" class="fa fa-sort-desc iconArrow"></i></a></h2>
              <div id="projectFoodDescription" class="minimize">
                  <img class="img-responsive" src="images/food-app.png" alt="A food app I made">
                  <p class="projectDescriptionSmall"><?php echo $lang['PROJECTDESCRIPTION_2']; ?></p>
                  <a type="button" class="btn btnDetails" href="projects/food-app.php">Details</a>
              </div>
          </div>
            
 <!--         <div class="col-md-6 col-sm-6 col-xs-12">
              <img class="img-responsive" src="images/unknown.png">
              <h2>Unknown</h2>
              <p class="projectDescriptionSmall">Place for an upcoming project in my last year of Web &amp; UX.</p>
              <a type="button" class="btn btnDetails" href="">Details</a>
          </div>-->
        </div>
        <div class="row">
          <div class="col-md-12" style="padding: 60px 0">
              <p class="alert alert-danger"><?php echo $lang['NOTE']; ?></p>
          </div>
        </div>
    </div>
</div>
    
    <div class="section section3">
    <div class="container">
        <div class="row">
         <h1 class="sectiontitle"><?php echo $lang['SECTIONTITLE_3']; ?>
         </h1>
         <hr>
          <div class="col-md-12">
              <h1 class="subtitle"><?php echo $lang['SECTION3_SUBTITLE_1']; ?></h1>
          </div>
          <div class="col-md-12 interests2 interests2logos">
              <img class="icon2" id="guitarIcon" src="images/guitar-icon.png" alt="guitar icon">
              <img class="icon2" id="forestIcon" src="images/forest-icon.png" alt="forest icon">
              <img class="icon2" id="yodaIcon" src="images/yoda-icon.png" alt="yoda icon">
              <img class="icon2" id="beerIcon" src="images/beer-icon.png" alt="beer icon">
              <img class="icon2" id="diceIcon" src="images/dice-icon.png" alt="dice icon">
              <img class="icon2" id="gameIcon" src="images/game-icon.png" alt="game icon">
              <img class="icon2" id="fitnessIcon" src="images/fitness-icon.png" alt="fitness icon">
              <img class="icon2" id="televisionIcon" src="images/television-icon.png" alt="television icon">
          </div>
          <div class="col-md-12 interests2">
              <div id="textboxInterest">
                  <p class="interestText interestVisible"><?php echo $lang['INTEREST_0']; ?></p>
                  <p id="guitarText" class="interestText"><?php echo $lang['INTEREST_1']; ?></p>
                  <p id="forestText" class="interestText"><?php echo $lang['INTEREST_2']; ?></p>
                  <p id="yodaText" class="interestText"><?php echo $lang['INTEREST_3']; ?></p>
                  <p id="beerText" class="interestText"><?php echo $lang['INTEREST_4']; ?></p>
                  <p id="diceText" class="interestText"><?php echo $lang['INTEREST_5']; ?></p>
                  <p id="gameText" class="interestText"><?php echo $lang['INTEREST_6']; ?></p>
                  <p id="fitnessText" class="interestText"><?php echo $lang['INTEREST_7']; ?></p>
                  <p id="televisionText" class="interestText"><?php echo $lang['INTEREST_8']; ?></p>
              </div>
          </div>
          
          <div class="col-md-6 col-xs-12 interests1">
              <div class="interest">
                  <img class="icon" src="images/guitar-icon.png" alt="guitar icon">
                  <p><?php echo $lang['INTEREST_1']; ?></p>
              </div>
              <div class="interest">
                  <img class="icon" src="images/forest-icon.png" alt="forest icon">
                  <p><?php echo $lang['INTEREST_2']; ?></p>
              </div>
              <div class="interest">
                  <img class="icon" src="images/yoda-icon.png" alt="yoda icon">
                  <p><?php echo $lang['INTEREST_3']; ?></p>
              </div>
              <div class="interest">
                  <img class="icon" src="images/beer-icon.png" alt="beer icon">
                  <p><?php echo $lang['INTEREST_4']; ?></p>
              </div>
          </div>
          <div class="col-md-6 col-xs-12 interests1">
              <div class="interest">
                  <img class="icon" src="images/dice-icon.png" alt="dice icon">
                  <p><?php echo $lang['INTEREST_5']; ?></p>
              </div>
              <div class="interest">
                  <img class="icon" src="images/game-icon.png" alt="game icon">
                  <p><?php echo $lang['INTEREST_6']; ?></p>
              </div>
              <div class="interest">
                  <img class="icon" src="images/fitness-icon.png" alt="fitness icon">
                  <p><?php echo $lang['INTEREST_7']; ?></p>
              </div>
              <div class="interest">
                  <img class="icon" src="images/television-icon.png" alt="television icon">
                  <p><?php echo $lang['INTEREST_8']; ?></p>
              </div>
          </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                 <h1 class="subtitle"><?php echo $lang['SECTION3_SUBTITLE_2']; ?></h1>
              </div>
              <div class="col-md-12">
                <div class="desk">
                    <img id="coffeeImg" src="images/coffee.png">
                    <img id="laptopImg" src="images/laptop.png">
                    <ul class="experienceList">
                        <li><i id="icon1" class="devicon-html5-plain-wordmark"></i></li>
                        <li><i id="icon2" class="devicon-css3-plain-wordmark"></i></li>
                        <li><i id="icon3" class="devicon-javascript-plain"></i></li>
                        <li><i id="icon4" class="devicon-mysql-plain-wordmark"></i></li>
                        <li><i id="icon5" class="devicon-php-plain"></i></li>
                        <li><i id="icon6" class="devicon-photoshop-plain"></i></li>
                        <li><i id="icon7" class="devicon-bootstrap-plain-wordmark"></i></li>
                        <li><i id="icon8" class="devicon-angularjs-plain-wordmark"></i></li>
                        <li><i id="icon9" class="devicon-csharp-plain"></i></li>
                        <li><i id="icon10" class="devicon-cplusplus-plain"></i></li>
                        <li><i id="icon11" class="devicon-laravel-plain-wordmark"></i></li>
                        <li><i id="icon12" class="devicon-jquery-plain-wordmark"></i></li>
                    </ul>
                </div>
              </div>
              <div class="col-xs-6">
                  <ul id="skillList">
                    <li><i class="fa fa-check-square-o"></i> HTML 5</li>
                    <li><i class="fa fa-check-square-o"></i> CSS 3</li>
                    <li><i class="fa fa-check-square-o"></i> Javascript</li>
                    <li><i class="fa fa-check-square-o"></i> MySQL</li>
                    <li><i class="fa fa-check-square-o"></i> PHP</li>
                    <li><i class="fa fa-check-square-o"></i> Photoshop</li>
                  </ul>
              </div>
              <div class="col-xs-6">
                <ul id="skillList">
                    <li><i class="fa fa-check-square-o"></i> Bootstrap</li>
                    <li><i class="fa fa-check-square-o"></i> AngularJS</li>
                    <li><i class="fa fa-check-square-o"></i> C#</li>
                    <li><i class="fa fa-check-square-o"></i> C++</li>
                    <li><i class="fa fa-check-square-o"></i> Laravel</li>
                    <li><i class="fa fa-check-square-o"></i> Jquery</li>
                </ul>
              </div>
          </div>

      
     </div>
   </div>
    
   <div class="section section4" id="section4">
    <div class="container">
        <div class="row">
          <h1 class="sectiontitle">Contact
          </h1>
            <hr>
                <div class="col-md-12">
                    <img class="contactPicture img-responsive img-circle" src="images/me.jpg">
                    <ul id="contactInfo">
                        <?php echo $lang['CONTACTINFO']; ?>
                    </ul>
                    <div class="icons" id="icons1">
                        <a href="https://www.facebook.com/jim.peeters.10"><img class="logo" src="images/facebook.png" alt="facebook logo flat"></a>
                        <a href="https://instagram.com/jimpeeterske/"><img class="logo" src="images/instagram.png" alt="instagram logo flat"></a>
                        <a href="https://be.linkedin.com/pub/jim-peeters/b9/b28/8a3"><img class="logo" src="images/linkedin.png" alt="linkedin logo flat"></a>
                        <a href=" https://www.youtube.com/user/Jimpeeterske/"><img class="logo" src="images/youtube.png" alt="youtube logo flat"></a>
                    </div>
                </div>
            <div class="col-md-12">
             
               <form class="form-horizontal" method="post" action="MAILTO:jim.peeters.93@gmail.com">
                  <input class="form-control" placeholder="<?php echo $lang['PLACEHOLDER1']; ?>" type="text" name="mail">
                  <textarea rows="4" class="form-control" placeholder="<?php echo $lang['PLACEHOLDER2']; ?>" type="text" name="comment"></textarea>
                  <button type='submit' value="Send" class="btn btnSend"><?php echo $lang['SENDBUTTON']; ?></button>
               </form>

            </div>
            
            <div class="col-md-12">
                <div class="icons" id="icons2">
                    <a href="https://www.facebook.com/jim.peeters.10"><img class="logo" src="images/facebook.png" alt="facebook logo flat"></a>
                    <a href="https://instagram.com/jimpeeterske/"><img class="logo" src="images/instagram.png" alt="instagram logo flat"></a>
                    <a href="https://be.linkedin.com/pub/jim-peeters/b9/b28/8a3"><img class="logo" src="images/linkedin.png" alt="linkedin logo flat"></a>
                    <a href=" https://www.youtube.com/user/Jimpeeterske/"><img class="logo" src="images/youtube.png" alt="youtube logo flat"></a>
				</div>
            </div>
        </div>
    </div>
   </div>
    

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>


</body>
</html>
