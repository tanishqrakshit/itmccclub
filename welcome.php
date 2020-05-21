<?php


$conn=mysqli_connect
('localhost','id4379397_gutssy','gutssy','id4379397_icclub');
if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	
$query="insert into message values
('$name','$email','$message')";


$res=mysqli_query($conn,$query);

}


?>


     <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="">
	 <html class="no-js lt-ie9 lt-ie8" lang=""> 
	 <html class="no-js lt-ie9" lang=""> 
	 <html class="no-js" lang=""> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>ITM Cricket Club</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>

        <div class="overlay"></div>
        <section class="top-part">
          <video controls autoplay loop>
            <source src="videos/video.mp4" type="video/mp4">
            <source src="videos/video.ogg" type="video/ogg">
          Your browser does not support the video tag.
          </video>
        </section>
        
        <section class="cd-hero">
														
          <div class="cd-slider-nav">
            <nav>
              <span class="cd-marker item-1"></span>
              <ul>
                <li class="selected"><a href="#0"><div class="image-icon"><img src="img/home-icon.png"></div><h6>Welcome</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/about-icon.png"></div><h6>Team</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/projects-icon.png"></div><h6>Notice</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/art-gallery-icon-13977.png"></div><h6>Gallery </h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/contact-icon.png"></div><h6>Contact Us</h6></a></li>
                
              </ul>
            </nav> 
          </div> <!-- .cd-slider-nav -->

          <ul class="cd-hero-slider">

            <li class="selected">
              <div class="heading">
                <h1>ITM <span style="color: #5379fa;font-size: 38px;font-weight: 900">CRICKET CLUB </span> </h1>
                <span>Welcome To The Cricket Board Of ITM </span>
              </div>
              <div class="cd-full-width first-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content first-content">
                        <h3>Let’s Talk More About ITM Cricket Club</h3> <br>
                        <p style="font-size:17px;color:#00147E	">ITM Cricket Club Was Formed Back In 2000,When The Nodal Level Cricket Tournament was Announced And To Compete With Other Highly College Team ,Our Vice Chancellor Created This Club. Today This Club Is Known As One Of The Best Cricket Club In Gwalior.Veteren Cricketer Yuvraj Singh Also Opened His Cricket Acedemy Here IN ITM Cricket Club Named "Yuvraj Singh Cricket Acedemy.
                        <br><br><b><a href="registration.php">Register</a></b> 
                         <br><br><b><a href="logout.php">Logout</a></b> </p></p>
                        
                        
                      
                        
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

            <li>
              <div class="heading">
                <h1>Team  <span style="color: #5379fa;font-size: 38px;font-weight: 900">Members</span></h1>
                <span>Current Members Of Our Club</span> 
              </div>
              <div class="cd-half-width second-slide">   
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content second-content">
                        <div class="row">
                          <div class="col-md-7 left-image">
                            <img src="img/shubham.jpg">
                          </div>
                          <div class="col-md-5">
                            <div class="right-about-text">
                              <h4>Shubham Singh Yadav (Captain)</h4> 
                              
							  <p  style="color: tomato;font-size:17px;font-family:calibri"> 
							     Born:       2 November 1996 <br>
								 Age:		 21 Year  <br>
								 Teams:  	 ITM Nodal Team, Gwalior State Team <br> 
								 Year:       4th Year
								 Nickname:   Shahi <br>
								 Bat Style:  Right-handed Bat <br>
								 Bowl Style: Right-arm Wrist Spin</p>
                              <div class="primary-button">
                                <a href="https://www.facebook.com/8878639851o">Social Media Link</a>
								</div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>SuryaKant Pachoury</h4>
                              <p style="color: tomato;font-size:17px;font-family:calibri">
							     Born:        <br>
								 Age:		   <br>
								 Teams:  	 <br> 	
								 Nickname:    <br>
								 Bat Style:   <br>
								 Bowl Style: </p>
								 <div class="primary-button">
                                <a href="https://www.facebook.com/surya.pachoury">Social Media Link</a>
                              </div>
                            </div>
                          </div>
						  <div class="col-md-5 right-image">
                            <img src="img/surya.jpg">
                          </div>
						</div><br>
						<div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>Rajkumar Sharma</h4>
                              <p style="color: tomato;font-size:17px;font-family:calibri">
							     Born:       20 June 1996 <br>
								 Age:		 21 Year <br>
								 Teams:  	 ITM Nodal Team, Gwalior State Team <br> 	
								 Nickname:   Raju <br>
								 Bat Style:  Right-handed Bat <br>
								 Bowl Style: Right-arm Fast</p>
								 <div class="primary-button">
                                <a href="https://www.facebook.com/rajkumar.sharma.3572846">Social Media Link</a>
                              </div>
                            </div>
                          </div>
						  <div class="col-md-5 right-image">
                            <img src="img/raju.jpg">
                          </div>
						</div>
						<div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>Amit Dinker</h4>
                              <p style="color: tomato;font-size:17px;font-family:calibri">
							     Born:       27 August 1996<br>
								 Age:		 21 Year  <br>
								 Teams:  	 ITM Nodal Team, Gwalior State Team <br> 	
								 Nickname:   Amit <br>
								 Bat Style:  Right-handed Bat <br>
								 Bowl Style: Right-arm Fast</p>
								 <div class="primary-button">
                                <a href="https://www.facebook.com/amit.dinkar2">Social Media Link</a>
                              </div>
                            </div>
                          </div>
						  <div class="col-md-5 right-image">
                            <img src="img/amitd.jpg">
                          </div>
						</div>
						<div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>Shubham Rajpoot</h4>
                              <p style="color: tomato;font-size:17px;font-family:calibri">
							     Born:        <br>
								 Age:		 <br>
								 Teams:  	  <br> 	
								 Nickname:    <br>
								 Bat Style:   <br>
								 Bowl Style: </p>
								 <div class="primary-button">
                                <a href="https://www.facebook.com/sam088888">Social Media Link</a>
                              </div>
                            </div>
                          </div>
						  <div class="col-md-5 right-image">
                            <img src="img/rajpoot.jpg">
                          </div>
		                 </div>
                         <div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>Amit Soni (WK)</h4>
                              <p style="color: tomato;font-size:17px;font-family:calibri">
							     Born:       15 February 1997 <br>
								 Age:		 20 Year <br>
								 Teams:  	 ITM Nodal Team  <br> 	
								 Nickname:   Ansh <br>
								 Bat Style:  Left-handed Bat <br>
								 Bowl Style: Right-arm leg Spin</p>
								 <div class="primary-button">
                                <a href="https://www.facebook.com/ansh.soni.786">Social Media Link</a>
                              </div>
                            </div>
                          </div>
						  <div class="col-md-5 right-image">
                            <img src="img/amit.jpg">
                          </div>
						 </div>                  
                        <div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>Rejin Saji</h4>
                              <p style="color: tomato;font-size:17px;font-family:calibri">
							     Born:        <br>
								 Age:		   <br>
								 Teams:  	  <br> 	
								 Nickname:    <br>
								 Bat Style:  <br>
								 Bowl Style: </p>
								 <div class="primary-button">
                                <a href="https://www.facebook.com/rejin.saji">Social Media Link</a>
                              </div>
                            </div>
                          </div>
						  <div class="col-md-5 right-image">
                            <img src="img/rejin.jpg">
                          </div>
						 </div>                      
			          <div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>Chaitanya Sharma</h4>
                              <p style="color: tomato;font-size:17px;font-family:calibri">
							     Born:        Chaitanya sharma<br>
								 Age:		  20 <br>
								 Teams:  	  Gwalior State team,ITM Nodal Team<br> 	
								 Nickname:    Chetu<br>
								 Bat Style:   Right Hand bat<br>
								 Bowl Style:  Right-Arm off Break</p>
								 <div class="primary-button">
                                <a href="https://www.facebook.com/Iamaparanoid">Social Media Link</a>
                              </div>
                            </div>
                          </div>
						  <div class="col-md-5 right-image">
                            <img src="img/chetu.jpg">
                          </div>
						 </div>	
				     <div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>Atul Sharma (CAPTAIN IITM)</h4>
                              <p style="color: tomato;font-size:17px;font-family:calibri">
							     Born:        28 June 1997<br>
								 Age:		  20<br>
								 Teams:  	  Gwalior State team,ITM Nodal Team<br> 	
								 Nickname:    Mr.Innocent<br>
								 Bat Style:   Right Hand Bat<br>
								 Bowl Style:  Right-arm Fast</p>
								 <div class="primary-button">
                                <a href="https://www.facebook.com/mr.coolatul">Social Media Link</a>
                              </div>
                            </div>
                          </div>
						  <div class="col-md-5 right-image">
                            <img src="img/atul.jpg">
                          </div>
						 </div>
		              <div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>Yogesh Patwa</h4>
                              <p style="color: tomato;font-size:17px;font-family:calibri">
							     Born:       16 January 1999 <br>
								 Age:		 18 Year 363 Days <br>
								 Teams:  	 ITM Nodal Team <br> 	
								 Nickname:   Sunny <br>
								 Bat Style:  Right-handed Bat <br>
								 Bowl Style: Right-arm Fast</p>
								 <div class="primary-button">
                                <a href="https://www.facebook.com/yogesh.patwa.777">Social Media Link</a>
                              </div>
                            </div>
                          </div>
						  <div class="col-md-5 right-image">
                            <img src="img/yogesh.jpg">
                          </div>
						 </div>		
				<div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4> Ankit Chourasiya</h4>
                              <p style="color: tomato;font-size:17px;font-family:calibri">
							     Born:       02 August 1997 <br>
								 Age:		 20 Year <br>
								 Teams:  	 ITM Nodal Team <br> 	
								 Nickname:   Anki <br>
								 Bat Style:  Right-handed Bat <br>
								 Bowl Style: Right-arm Medium fast</p>
								 <div class="primary-button">
                                <a href="https://www.facebook.com/ankitchourasiya02">Social Media Link</a>
                              </div>
                            </div>
                          </div>
						  <div class="col-md-5 right-image">
                            <img src="img/ankit.jpg">
                          </div>
						 </div>
				
				<div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>Aditya Kushwah</h4>
                              <p style="color: tomato;font-size:17px;font-family:calibri">
							     Born:       20 February 1999 <br>
								 Age:		 18 Year <br>
								 Teams:  	 ITM Nodal Team<br> 	
								 Nickname:   Adii <br>
								 Bat Style:  Right-handed Bat <br>
								 Bowl Style: Right-arm Fast</p>
								 <div class="primary-button">
                                <a href="https://www.facebook.com/aditya.kushwah.927">Social Media Link</a>
                              </div>
                            </div>
                          </div>
						  <div class="col-md-5 right-image">
                            <img src="img/aditya.jpg">
                          </div>
						 </div>
				
				<div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>Sahil Gupta</h4>
                              <p style="color: tomato;font-size:17px;font-family:calibri">
							     Born:        5 August 1998<br>
								 Age:		  19<br>
								 Teams:  	  Gwalior State Team<br> 	
								 Nickname:    Sahil<br>
								 Bat Style:   Right Hand Bat<br>
								 Bowl Style:  NA</p>
								 <div class="primary-button">
                                <a href="https://www.facebook.com/profile.php?id=100004774651046">Social Media Link</a>
                              </div>
                            </div>
                          </div>
						  <div class="col-md-5 right-image">
                            <img src="img/sahil.jpg">
                          </div>
						 </div>
				<div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>Pooja Raam</h4>
                              <p style="color: tomato;font-size:17px;font-family:calibri">
							     Born:       16 May 1999 <br>
								 Age:		 18 Year  <br>
								 Teams:  	 ITM Nodal Team <br> 	
								 Nickname:   Vijay <br>
								 Bat Style:  Right-handed Bat <br>
								 Bowl Style: Right-arm Medium Fast</p>
								 <div class="primary-button">
                                <a href="https://www.facebook.com/poojaram.sonkar.965">Social Media Link</a>
                              </div>
                            </div>
                          </div>
						  <div class="col-md-5 right-image">
                            <img src="img/puja.jpg">
                          </div>
						 </div>
				<div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>Shivam Tomar</h4>
                              <p style="color: tomato;font-size:17px;font-family:calibri">
							     Born:        <br>
								 Age:		  <br>
								 Teams:  	  <br> 	
								 Nickname:   <br>
								 Bat Style:   <br>
								 Bowl Style: </p>
								 <div class="primary-button">
                               <!-- <a href="https://www.facebook.com/surya.pachoury>Social Media Link</a> -->
                              </div>
                            </div>
                          </div>
						  <div class="col-md-5 right-image">
                            <img src="img/.jpg">
                          </div>
						 </div>
				<div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>Trilok Singh</h4>
                              <p style="color: tomato;font-size:17px;font-family:calibri">
							     Born:        <br>
								 Age:		  <br>
								 Teams:  	  <br> 	
								 Nickname:    <br>
								 Bat Style:   <br>
								 Bowl Style: </p>
								 <div class="primary-button">
                            <!--    <a href="https://www.facebook.com/surya.pachoury">Social Media Link</a>  -->
                              </div>
                            </div>
                          </div>
						  <div class="col-md-5 right-image">
                            <img src="img/.jpg">
                          </div>
						 </div>
						 <div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>Abhay Chauhan</h4>
                              <p style="color: tomato;font-size:17px;font-family:calibri">
							     Born:        3 June 1997<br>
								 Age:		  20<br>
								 Teams:  	  ITM Nodal Team<br> 	
								 Nickname:    Abhay<br>
								 Bat Style:   Left Hand Bat<br>
								 Bowl Style:  NA</p>
								 <div class="primary-button">
                            <!--    <a href="https://www.facebook.com/surya.pachoury">Social Media Link</a>  -->
                              </div>
                            </div>
                          </div>
						  <div class="col-md-5 right-image">
                            <img src="img/abhay.jpg">
                          </div>
						 <div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>Jankisharan Garg</h4>
                              <p style="color: tomato;font-size:17px;font-family:calibri">
							     Born:        20 June 1998<br>
								 Age:		  20<br>
								 Teams:  	  ITM Nodal Team<br> 	
								 Nickname:    Ravi<br>
								 Bat Style:   Right Hand Bat<br>
								 Bowl Style:  NA</p>
								 <div class="primary-button">
                            <!--    <a href="https://www.facebook.com/surya.pachoury">Social Media Link</a>  -->
                              </div>
                            </div>
                          </div>
						  <div class="col-md-5 right-image">
                            <img src="img/janki.jpg">
                          </div>
						 </div>
                       </div>
            </li>

            <li>
              <div class="heading">
                <h1>Notice And <span style="color: #5379fa;font-size: 38px;font-weight:900">updates</h1>
                <span>get in touch with us  with every minute</span> 
              </div>
              <div class="cd-half-width third-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content third-content">
                        <div class="row">
                          <div class="col-md-7 left-image">
                            <img src="img/IMG-20171230-WA0006.jpg">
                          </div>
                          <div class="col-md-5">
                            <div class="right-feature-text">
                              <h4>Latest updates: <em>Vidisha tour</em></h4><br>
                              <h4><em>Today is our pbl presentation held in IT LAB ,under Mr. Shirish Dubey. ITM GOI</em></h4> 
                              <p></p>
                              <div class="feature-list">
                                <ul>
                                  <p>- </p>
                                  <p>- </p>
                                  <p>- </p>
                                  <p>- </p>
                                  <p>- </p>
                                </ul>
                              </div>
                              <div class="primary-button">
                                <!-- <a href="#">Discover More</a> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

            <li>
              <div class="heading">
                <h1>GAll<span style="color: #5379fa;font-size: 38px;font-weight:900">ERY</span></h1>
                <span>Here Relive The Prestigeous Winning Moment Of Our Team</span> 
              </div>
              <div class="cd-half-width fourth-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content fourth-content">
                        <div class="row">
                          <div class="col-md-3 project-item">
                            <a href="img/item-01.jpg" data-lightbox="image-1"><img src="img/1.jpg"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-02.jpg" data-lightbox="image-1"><img src="img/2.jpg"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-03.jpg" data-lightbox="image-1"><img src="img/3.jpg"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-04.jpg" data-lightbox="image-1"><img src="img/4.jpg"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-05.jpg" data-lightbox="image-1"><img src="img/5.jpg"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-06.jpg" data-lightbox="image-1"><img src="img/6.jpg"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-07.jpg" data-lightbox="image-1"><img src="img/7.jpg"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-08.jpg" data-lightbox="image-1"><img src="img/8.jpg"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

            <li>
              <div class="heading">
                <h1>Contact <span style="color: #5379fa;font-size: 38px;font-weight: 900">us</span></h1>
                <span>You'll be responded within 48 hrs</span> 
              </div>
              <div class="cd-half-width fivth-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content fivth-content">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="left-info">
                              <p style="color: chocolate;font-size:17px;font-family:calibri">ITM CRICKET CLUB Is Situated At ITM Sithouli Campus Jhansi Road , Gwalior,Madhya Pradesh 474001.You Can Contact US by Email Or You Can Visit Our Office At ITM CAMPUS. 
                              <br><br>
                              <em>Phone Number: 8871525102,8982116552<br>Email:yogeshpatwa488@gmail.com</em>
                              </p>
                              <ul class="social-icons">
                                <i><a href="#"><i class="fa fa-facebook"></i></a></i>
                                <i><a href="#"><i class="fa fa-twitter"></i></a></i>
                                <i><a href="#"><i class="fa fa-linkedin"></i></a></i>
                                <i><a href="#"><i class="fa fa-rss"></i></a></i>
                                <i><a href="#"><i class="fa fa-behance"></i></a></i>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="row">
                              <form id="contact" action="" method="post">
                                <div class="col-md-6">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-6">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Email" required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message" required=""></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send Message</button>
                                  </fieldset>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>
          </ul> 
        </section> 


        <footer>
          <p>Copyright @ 2017 itmcc.com
                                
        	| Designed by <a href="http://www.itmcc.com" target="_parent"><em>itmcc</em></a></p>
        </footer>
    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>