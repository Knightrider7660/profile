<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Profile | Sukanta</title>
      <link rel="icon" href="img/icons_los_24.png" type="image/gif" sizes="16x16">
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="assets/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
   </head>
   <body>
      <!-- Navbar -->
      <nav id="navigation">
         <a data-scroll  href="#home_section" >Home</a>
         <a data-scroll  href="#about_section">About</a>
         <a data-scroll  href="#gallery">Photos</a>
         <a data-scroll  href="#contact">Contact</a>
         <a data-scroll  href="#share">Share</a>
      </nav>
      <!-- Navbar -->
      <!-- Home -->
      <section id="home_section">
         <div class="home" style="background-image: url(assets/img/backgroundimage.jpg);">
         </div>
         <div class="homeContent text-center">
            <h1>Hey Friend!</h1>
            <h2 ><i>I'm Sukanta Showrav</i></h2>
            <p >Welcome to My Little Website!!!</p>
            <br />
            <a data-scroll href="#contact"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Sent Me Email</a>
         </div>
      </section>
      <!-- Home -->
      <!-- About -->
      <section id="about_section">
         <h1 style="font-weight: bold;font-size: 5rem;" class="text-center">About Me</h1>
         <hr />
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="aboutImg">
                     <img src="assets/img/about.jpg" alt="sukanta" />
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="aboutcont">
                     <h2 style="color:#3495d4;">Sukanta Purkayastha (CSE Student)</h2>
                     <div class="description">
                        <p style="line-height: 21px;font-size: 17px;padding-top:6px;">
                           I am Sukanta Purkayastha. A student of CSE department of Leading University.
                        </p>
                        <p style="line-height: 21px;font-size: 17px;padding-top:14px;">
                           Working With: <br />
						   1. Laravel <br />
						   2. HTML <br />
						   3. CSS <br /> 
						   4. JavaScript ( Knowledge about 0 [ Zero ] )
                        </p>
                        <p style="line-height: 21px;font-size: 17px;padding-top:14px;">
                           In life and business, I live by a simple motto:
                        </p>
                        <p class="goal">Always Be Learning</p>
                        <p class="icons">
                           <a href="http://www.facebook.com/showrav.purkayastha.9" target="_blank">
                           <i style="background-color: #5189b9; color:#fff" class="fa fa-facebook" aria-hidden="true"></i>
                           </a>
                           <a href="https://plus.google.com/u/1/102582837554851118413" target="_blank">
                           <i style="background-color: #c56579; color:#fff" class="fa fa-google-plus" aria-hidden="true"></i>
                           </a>
                           <a href="https://www.linkedin.com/in/sukanta-purkayastha-624b13134/" target="_blank">
                           <i style="background-color: #5189b9; color:#fff" class="fa fa-linkedin" aria-hidden="true"></i>
                           </a>
                           <a href="https://twitter.com/sp_showrav" target="_blank">
                           <i style="background-color: #5189b9; color:#fff" class="fa fa-twitter" aria-hidden="true"></i>
                           </a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- About -->
      <!-- Gallery -->
      <section id="gallery" class="text-center">
         <h1 style="font-weight: bold;font-size: 5rem;" class="text-center">Gallery</h1>
         <hr />
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-3">
                  <div class="gallery_img">
                     <img src="assets/img/gallery1.jpg" alt="Avatar" class="image">
                     <div class="overlay">
                        <p class="text">Cycling is LOVE</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="gallery_img">
                     <img src="assets/img/gallery2.jpg" alt="Avatar" class="image">
                     <div class="overlay">
                        <p class="text">LUPS React</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="gallery_img">
                     <img src="assets/img/gallery3.jpg" alt="Avatar" class="image">
                     <div class="overlay">
                        <p class="text">CGPA Don't Care Bro</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="gallery_img">
                     <img src="assets/img/gallery4.jpg" alt="Avatar" class="image">
                     <div class="overlay">
                        <p class="text">Tilagorh Gang :p</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Gallery -->
      <!-- Contact -->
      <section id="contact">
         <h1 style="font-weight: bold;font-size: 5rem;" class="text-center">Contact Me</h1>
         <hr/>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <form action="#">
                     <h3 style="color:#ce1717;" class="text-center">Have a question, or just want to connect? Fill out the form below and I’ll reply via email.</h3>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="name">
                              Name</label>
                              <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                           </div>
                           <div class="form-group">
                              <label for="email">
                              Email Address</label>
                              <div class="input-group">
                                 <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                 </span>
                                 <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" />
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="name">
                              Message</label>
                              <textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
                                 placeholder="Message"></textarea>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                           Send Message</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- Contact -->
      <!-- Share -->
      <section id="share" class="text-center">
         <h1 style="font-weight: bold;font-size: 5rem;" class="text-center">Share The Love</h1>
         <hr/>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="sharing">
                     <h3 style="color:#3495d4;">Sharing & Caring</h3>
                     <p class="share_icons">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://sukantaprofile.herokuapp.com/" target="_blank">
                        <i style="background-color: #5189b9; color:#fff" class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="https://plus.google.com/share?url=https://sukantaprofile.herokuapp.com/" target="_blank">
                        <i style="background-color: #c56579; color:#fff" class="fa fa-google-plus" aria-hidden="true"></i>
                        </a>
                        <a href="http://www.linkedin.com/shareArticle?mini=true&url=https://sukantaprofile.herokuapp.com/" target="_blank">
                        <i style="background-color: #5189b9; color:#fff" class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=https://sukantaprofile.herokuapp.com&text=John Meese: Always Be Teaching&" target="_blank">
                        <i style="background-color: #5189b9; color:#fff" class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                     </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <p class="credit">
                     Copyright &copy; 2018. All Rights Reserved <a href="">Sukanta Showrav</a>
                  </p>
               </div>
            </div>
         </div>
      </section>
      <!-- Share -->
      <script type="text/javascript" src="assets/jquery/jquery-3.2.1.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="customs.js"></script>
   </body>
</html>

