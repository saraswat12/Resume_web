<?php
session_start();
$loggedin = false;

if(isset($_SESSION['Use_Name'])){
  $loggedin = true;
// } else {
//   header('location: login.html');
//   exit();
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CarResume</title>
  <link rel="stylesheet" type="text/css" href="about.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- ***** Nav Starts***** -->
<nav style="background-color=black;">
	<!-- <div class="logo" style="float = left;"> <h1 style="font-size: 20px;"> CarResume</h1> </div> -->
	<div class="menu m-2">
		<a href="source.php">Home</a>
		<a href="aboutus.php">About Us</a>
        <?php
        if($loggedin){
        echo '<li><a href="logout.php" id="loginLink">Logout</a></li>';
        } else {
         echo '<li><a  href="login.php" id="loginLink">Login</a></li>';
         echo '<li><a  href="signup.php" id="loginLink">Sign up</a></li>';
         }
        ?>
        
        
	</div>
</nav>
  <!-- ***** Nav End***** -->


    <div id="about-main">
        <div class="jumbotron">
            <div class="jumbotron-inner">
                <div class="top-box">
                    <div class="content-box">
                        <h1>
                            About CarResume
                        </h1>
                        <p>
                            CarResume is a developer experience platform for the employees.
                            <br /> Our mission is to make employees' productive through automatic Resume generator.
                        </p>
                    </div>
                </div>
            </div>
            <div class="img-layer-container">
                <div class="team-image" id="team-image">
                    <img src="https://apimatic.io/img/theme/aboutUs/images-1.png" />
                </div>

                <div class="circles-container">
                    <div class="img-1">
                        <img src="https://apimatic.io/img/theme/aboutUs/Circles-1-1.svg" />                        
                    </div>
                    <div class="img-2">
                        <img src="https://apimatic.io/img/theme/aboutUs/Circles-2-1.svg" />                        
                    </div>                    
                </div>           
            </div>
        </div>
        <div class="story-container">
            <div class="need-for-dx-container">
                <h3 class="text-center">
                   A sleek resume design for every industry
                </h3>
                <p>
                    CarResume allows you to make as many changes to your design as needed. Choose a layout tailored to your industry, saving your time on surface details so you can focus on your skills and experience. With these layouts, even design newbies can create a resume that truly pops from the page.
                </p>
                <div class="img-container">
                    <img src="image.svg" alt="apimatic developer experience process" class="img-responsive"/>
                </div>
            </div>
            <div class="container-divider"></div>
            <div class="our-tech-container">
                <h3 class="text-center">
                    Our Vision
                </h3>
                <p>
                  Our Vision is to bring creditible and genuine assessment to various aspects of education, training and employment "CarResume" strives to help  Insititutions and companies from choosing the 'right' insividual rather than the 'best' individual.                </p>
                <div class="img-container">
                    <img src="cc-image.png" alt="apimatic code generation engine" class="img-responsive"/>
                </div>
            </div>
            <div class="container-divider"></div>
            <div class="origin-story-container">
                <h3 class="text-center">
                    Our Mission
                </h3>
                <p>
                    CarResume envisions a scalable, equiptable, merit driven labor market providing credibility and access to talent and opportunity. Our Mission is to establish one scientific and credible approach to measuring talent and matching it to opportunity.
                </p>
                <p>
                  Our goal is to help people get the job they want as quickly as possible. We provide text examples, expert tips and tools to assist our users in creating professional-quality resumes and cover letters instantly.
                </p>
                <p>
                  From students or entry-level job seekers to experienced executives, our Resume Builder offers job seekers a fast and easy way to create a resume. With pre-written, industry-specific phrases and recruiter-approved templates, Resume-Now enables users to download a polished and professional resume in minutes.
                </p>
            </div>
            <div class="container-divider"></div>
            <div class="today-container">
                <h3 class="text-center">
                    What we Do!!
                </h3>
                <p>
                  We believe that landing a job and building the perfect resume should be simple, and that a poorly written resume should be the last reason for not getting the job that you want. We’re dedicated to make sure that doesn’t happen. We aggregated millions of resumes for thousands of jobs and job descriptions from thousands of small businesses and large, international companies like Amazon, Apple, Morgan Stanley, Goldman Sachs, and more. With this information we built a machine learning engine that analyzed these resumes and job descriptions in order to build a resume matching profile – determining what keywords to use, what relevant experience to use, and, in general, what works and what doesn’t when making a resume.
                </p>
                <p>
                  We don’t just rely on technology. We also have a team of certified resume writers, experts, hiring managers, and employers that assess resumes and job posts to make sure that our results are accurate and have the best chance for getting the job you want.
                </p>
            </div>
            <div class="container-divider"></div>
        </div>
    </div>
    <!--footer new-->
    <section class="container-fluid footer">
        <div class="footer-content">
          <ul>
            <li>ABOUT US</li>
            <li> PRODUCTS</li>
            <li> HELP</li>
            <li>CONTACT</li>
          </ul>
          <hr style="width:80%;text-align:center;color: #fff; ">
          <p>Create your Resume With some easy steps.</p>
        </div>
        <div
          class="text-center p-3"
          style="background-color: rgba(0, 0, 0, 0.2)">
  
          <a class="text-white" href=>2021pietcaankita011@poornima.org</a>
        </div>
      </section>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
