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
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="sourse.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>

<header>
	
<nav>
	<div class="logo"> <h1 style="font-size: 20px;"> CarResume</h1> </div>
	<div class="menu">
		<a href="source.html"  >Home</a>
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

	<main>
		<section>
			
			<h1>Resume your Career.</h1>
			<br>
			<h2>	<span class="change_content"> </span>  </h2>
			<br>
			<br>	
			<p>CREATE A PROFESSIONAL RESUME FOR FREE USING PROFESSIONAL ONLINE RESUME BUILDER</p>
			<a href="About/aboutus.html" class="btnone">learn more</a>
			<a href="template/index (1).html" class="btntwo">Let's create</a>
		</section>
	</main>
	<section class="container-fluid">
	
	</section>

      <section class="footer py-5 mb-4 mb-md-0" style="background-color: black; color: white;">
        <div class="container">
            <div class="row">
               
                <div class="col-md-4 py-3 py-md-0">
                    <h2 class="sub-heading text-light">About</h2>
    
                    <svg width="54" height="5" viewBox="0 0 54 5" fill="none" xmlns="http://www.w3.org/2000/svg" id="" class="topicon mb-3 replaced-svg text-light">
                         <rect width="54" height="5" fill="#2E3192"></rect>
                    </svg>
                    <div class="pt-1 pt-md-3 text-light">
                      <ul style="list-style: disclosure-closed ;font-size: initial ;" class="highlight_points">
                      <li>CarResume is a professional online resume builder that helps you create impressive resumes for free.</li>
                      </ul>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <h2 class="sub-heading text-light">SOCIAL LINKS</h2>
    
                    <svg width="54" height="5" viewBox="0 0 54 5" fill="none" xmlns="http://www.w3.org/2000/svg" id="" class="topicon mb-3 replaced-svg text-light">
                         <rect width="54" height="5" fill="#2E3192"></rect>
                    </svg>
                    <div id="links" class="pt-1 pt-md-3 text-light">
                      <a href="#" class="fa fa-facebook text-light"></a>
                        <a href="#" class="fa fa-instagram text-light"></a>
                        <a href="#" class="fa fa-linkedin text-light"></a>
                        <a href="#" class="fa fa-twitter text-light"></a>
                        <a href="#" class="fa fa-youtube text-light"></a>
                    </div>
                    <p class="link-clr pt-4 text-light">© 2023. All Rights Reserved.</p>
                </div>
    
                <div class="col-md-4">
                  <h2 class="sub-heading text-light">CONTACT US</h2>
                  <svg width="54" height="5" viewBox="0 0 54 5" fill="none" xmlns="http://www.w3.org/2000/svg" id="" class="topicon mb-3 replaced-svg">
                       <rect width="54" height="5" fill="#2E3192"></rect>
                  </svg> <br>
                  <ul class="p-0 list-unstyled pt-3">
                      <li>
    
                          <a href="tel:+91-9928555222" class="text-decoration-none f-text text-light"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" id="" class="topicon me-2 replaced-svg">
                            <g clip-path="url(#clip0_122_338)">
                              <path d="M15.5574 11.2841L12.3574 9.68408C12.2072 9.60912 12.0373 9.58331 11.8716 9.6103C11.7059 9.63729 11.5529 9.71572 11.4343 9.83448L10.0943 11.1745C8.1687 10.8649 5.13433 7.8313 4.82554 5.90573L6.16552 4.56575C6.28428 4.4471 6.36271 4.29411 6.3897 4.12842C6.41669 3.96274 6.39088 3.79276 6.31592 3.64256L4.71594 0.442598C4.66356 0.337707 4.58877 0.245611 4.49686 0.172828C4.40495 0.100044 4.29816 0.0483516 4.18406 0.0214096C4.06996 -0.00553233 3.95133 -0.00706554 3.83657 0.0169185C3.7218 0.0409025 3.61372 0.0898175 3.51996 0.160201L0.319996 2.56017C0.22064 2.63469 0.139999 2.73131 0.0844571 2.8424C0.0289156 2.95348 0 3.07597 0 3.20016C0 10.8561 5.14394 16 12.7998 16C12.924 16 13.0465 15.9711 13.1576 15.9155C13.2687 15.86 13.3653 15.7794 13.4398 15.68L15.8398 12.48C15.9102 12.3863 15.9591 12.2782 15.9831 12.1634C16.0071 12.0487 16.0055 11.93 15.9786 11.8159C15.9516 11.7018 15.9 11.5951 15.8272 11.5031C15.7544 11.4112 15.6623 11.3364 15.5574 11.2841Z"></path>
                              <path d="M9.19989 1.59998C10.5785 1.60167 11.9001 2.15007 12.8749 3.12488C13.8497 4.09969 14.3981 5.42133 14.3998 6.79991C14.3998 7.01208 14.4841 7.21556 14.6341 7.36559C14.7842 7.51562 14.9876 7.5999 15.1998 7.5999C15.412 7.5999 15.6155 7.51562 15.7655 7.36559C15.9155 7.21556 15.9998 7.01208 15.9998 6.79991C15.9977 4.99711 15.2806 3.26876 14.0058 1.99399C12.731 0.719215 11.0027 0.00211721 9.19989 0C8.98772 0 8.78424 0.0842844 8.63421 0.234312C8.48419 0.384339 8.3999 0.587819 8.3999 0.79999C8.3999 1.01216 8.48419 1.21564 8.63421 1.36567C8.78424 1.5157 8.98772 1.59998 9.19989 1.59998Z"></path>
                               <path d="M9.19989 4.80018C9.73032 4.80018 10.239 5.01089 10.6141 5.38595C10.9892 5.76102 11.1999 6.26972 11.1999 6.80015C11.1999 7.01232 11.2842 7.2158 11.4342 7.36583C11.5842 7.51586 11.7877 7.60014 11.9999 7.60014C12.212 7.60014 12.4155 7.51586 12.5655 7.36583C12.7156 7.2158 12.7998 7.01232 12.7998 6.80015C12.7998 5.84538 12.4206 4.92972 11.7454 4.2546C11.0703 3.57948 10.1547 3.2002 9.19989 3.2002C8.98772 3.2002 8.78424 3.28448 8.63421 3.43451C8.48419 3.58453 8.3999 3.78801 8.3999 4.00019C8.3999 4.21236 8.48419 4.41584 8.63421 4.56586C8.78424 4.71589 8.98772 4.80018 9.19989 4.80018Z"></path>
                           </g>
                          <defs>
                          <clipPath id="clip0_122_338">
                               <rect width="16" height="16"></rect>
                           </clipPath>
                           </defs>
                          </svg> +1 123-456-7890
                          </a>
                      </li>
                      <li class="mt-3">
                          <a href="mailto:info@poornima.org" class="text-decoration-none f-text text-light" target="_blank">
                              <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg" id="" class="topicon me-2 replaced-svg">
                              <g clip-path="url(#clip0_122_349)">
                                  <path d="M8 6.65143L0.977143 0.171429C1.20702 0.0600838 1.45887 0.00151367 1.71429 0H14.2857C14.5411 0.00151367 14.793 0.0600838 15.0229 0.171429L8 6.65143ZM15.8286 0.977143L8.4 7.83429C8.29434 7.93228 8.15554 7.98674 8.01143 7.98674C7.86732 7.98674 7.72852 7.93228 7.62286 7.83429L0.194286 0.977143C0.0750195 1.20516 0.00861598 1.4571 0 1.71429V9.71429C0 10.1689 0.180612 10.605 0.502103 10.9265C0.823594 11.248 1.25963 11.4286 1.71429 11.4286H14.2857C14.7404 11.4286 15.1764 11.248 15.4979 10.9265C15.8194 10.605 16 10.1689 16 9.71429V1.71429C15.9985 1.45887 15.9399 1.20702 15.8286 0.977143Z"></path>
                              </g>
                              <defs>
                                   <clipPath id="clip0_122_349">
                                       <rect width="16" height="11.4286"></rect>
                                   </clipPath>
                               </defs>
                           </svg> info@carresume.com
                          </a>
                      </li>
                  </ul>
              </div>
            </div>
        </div>
    </section>
	  
</header>

</body>
</html>