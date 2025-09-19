<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
    <div>
      <img src="Images/logo7.jpg" id="logo" width="100%"  class="img-fluid">
    </div>
</div>
      <nav class="navbar navbar-expand-lg ">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"><i class="bi bi-list" style="color: black; font-size: x-large;"></i></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" style="color:white;" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:white;"  href="https://www.sipnaengg.ac.in/faculty/it-faculty.html">FACULTY</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;" >
              BRANCHES
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">INFORMATION TECHNOLOGY</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">ELECTRONIC & TELECOMMUNICATION</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">COMPUTER SCIENCE ENGINEERING</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">CIVIL ENGINEERING</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">MECHNICAL ENGINEERING</a>
                
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#teacher-guardian-scheme " class="scroll-button" style="color:white;" >ABOUTUS</a>
              
            </li>
          </ul>

          <div class="btn-group  " id="searchbutton">
            <a href="#" class=" dropdown-toggle" data-toggle="dropdown">
              <i class="bi bi-search" style="color:white;" ></i>
            </a>
            <div class="dropdown-menu" >
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> 
            </div>
          </div>
        </div>
        <button onclick="location.href='register.php'" class="btn btn-outline-warning" style="margin-right:20px;">Register</button>
        <button onclick="location.href='login.php'" class="btn btn-outline-info">Login</button>
      </nav>
    <!-- navbar end -->
    
      <div class="alert alert-primary" role="alert">
            <b class="news-list"> NOTICE: </b>
            <marquee>
               My college: Intelligence plus curiosity-that is the root of true education.
            </marquee>
      </div>
     
      <!-- <div class="jumbotron jumbotron-fluid" id="cmp">
        
          <img src="Images/campus.jpg"  width="100%"  class="img-fluid">
          
      </div>   -->
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="Images/campus.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Images/campus2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Images/campus3.jpg" alt="Third slide">
          </div>
          <div class="carousel-caption d-none d-md-block">
             <span id="tg">TEACHER GUARDIAN SCHEME</span>

            
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      
      <div class="container">
        <div class="row" id="board">
          <div class="col-md-4">
            <div class="card" style="width: 18rem;" id="latest-news">
              <div class="card-header bg-primary">
              <h3 class="head-title">Latest New</h3>

              </div>
              <div class="width-33">
      <div >
        <div class="heading-sect">
          <!-- <h3 class="head-title">Latest New</h3> -->
        </div>
        <marquee direction="left">
        <ul class="latest-news-ul">
          <li> 31 mar 2022 Ph D merit list Part 01_16 feb 2022 <img src="images/latest-news-blink-img.gif"></li>
          <li> 31 mar 2022 Ph D merit list Part 02_16 feb 2022 <img src="images/latest-news-blink-img.gif"> </li>
          <li> 24 May 2022 Incubation Center <img src="images/latest-news-blink-img.gif"></li>
          <li> 31 mar 2022 Instituitional Distinctiveness <img src="images/latest-news-blink-img.gif"></li>
          <li> 31 mar 2022 Academic Calender Session 2019-20 <img src="images/latest-news-blink-img.gif"></li>
          <li> 16 feb 2022 Ph D merit list Part 01_16 feb 2022 <img src="images/latest-news-blink-img.gif"></li>
          <li> 16 feb 2022 Ph D merit list Part 02_16 feb 2022 <img src="images/latest-news-blink-img.gif"></li>
          <li> 17 Oct 2022 Consolidate academic Calender <img src="images/latest-news-blink-img.gif"></li>
        </ul>
        </marquee>
      </div>
      </div>
</div>
            </div>
            <div class="col-md-4">
              <div class="card" style="width: 18rem;" id="event-list">
                <div class="card-header bg-primary">
                <h3 class="head-title">Upcoming Events</h3>
                </div>
                
                <div class="card-body">
                  
                <div class="width-33">
      <div >
        <div class="heading-sect">
         
        </div>
        <ul class="upcoming-event-list">
          <li><span class="event-date">29 <br>
            April</span><span> Seminar is conducted on BCA courses.</span> </li>
          <li><span class="event-date">30 <br>
            April</span><span> Seminar is conducted on B.com courses.</span> </li>
          <li><span class="event-date">2 <br>
            Mar</span><span> Conducted its 2nd convocation ceremony.</span> </li>
          
        </ul>
      </div>
    </div>
                 
                </div>
              </div>
              
          </div>

       
        <div class="col-md-4">
         
            <div class="card" style="width: 18rem;" id="notice-board" >
              <div class="card-header bg-primary">
               <h3> Notice Board </h3>
              </div>
            <div class="card-body">
              <ul class="notice-board-list">
          <li><img src="images/notice-board-img.png"> Participation in Climate Correction Day (CCD) Challenge for Mission LiFE </li>
          <li><img src="images/notice-board-img.png">    West Zone Inter University Table Teniss (man) Tournament 2022-23 </li>
          <li><img src="images/notice-board-img.png">    PhD Registration Form for Selected Candidates </li>
          <li><img src="images/notice-board-img.png">    List of Activities organised under TEQIP-III </li>
          
          
        </ul>
              
              
              
            </div>
          </div>
        </div>
      </div>
    </div> 
    
    <div class="container"style="bg-color:white;">
    <section id="teacher-guardian-scheme" style="bg-color:white;">
        <h2>About Teacher Guardian Scheme</h2>
        <p>
            1.At our college, we understand the importance of academic and personal support for students. 
            The Teacher Guardian Scheme is designed to provide each student with a dedicated faculty member 
            who serves as their mentor and guide throughout their academic journey.
        </p>
        <p>
            2.Under this scheme, every student is assigned a teacher guardian who assists them with academic 
            advice, career guidance, and personal development. Teacher guardians monitor students' progress, 
            provide feedback, and offer support to ensure that each student reaches their full potential.
        </p>
        <p>
            3.Through regular meetings and interactions, teacher guardians build strong relationships with 
            students, creating a supportive environment where students feel comfortable discussing their 
            challenges and aspirations. This personalized approach fosters academic success, personal growth, 
            and overall well-being among our students.
        </p>
    </section>
    </div>

    <div class="bg-theme" style="margin-top: 100px;padding:0px;" id="footer">
      <div class="container">
        <div class="row mt-5">
          <div class="col-md-3" id="endings">
            <h4> Student Section</h4>
       <ul>
        <li><a href="#" id="end">Result</a></li>
        <li><a href="#"id="end"> Pay Fee</a></li>
        <li><a href="#"id="end"> Training</a></li>
        <li><a href="#"id="end"> Placements</a></li>
      </ul>
          </div>
      
          <div class="col-md-3"id="endings">
            <h4> QUICK LINKS </h4>
            <ul >
              <li><a href="#"id="end">Home </a> </li>
              <li><a href="#"id="end">  About us</a> </li>
              <li><a href="#"id="end">Gallery </a> </li>
              <li><a href="#"id="end"> Contact us <i class="bi bi-arrow-up-right"></i></a> </li>
              
              
            </ul>
      
          </div>
      
          <div class="col-md-3"id="endings">
            <h4> Information Link</h4>
            <ul so>
              <li><a href="#"id="end"> News</a> </li>
              <li><a href="#"id="end">R&D Policy</a> </li>
              <li><a href="#"id="end"> Anti-Ragging</a> </li>
              <li><a href="#"id="end"> Admission</a> </li>
            </ul>
      
          </div>
      
          <div class="col-md-3"id="endings">
            <h4> GET IN TOUCH </h4>
            <div id="iconss">
        <ul id="socialicons" style=""> 
          <li><a href="https://www.facebook.com/bmwindia" target="_blank"> <i class="bi bi-facebook" style="color: #ffff;" ></i></a> </li>
          <li><a href="https://www.instagram.com/bmwindia_official/" target="_blank"> <i class="bi bi-instagram" style="color: #ffff;"></i></a></li>
          <li> <a href="https://www.youtube.com/user/bmwindia" target="_blank"><i class="bi bi-youtube" style="color: #ffff;"></i> </a></li>
          <li><a href="https://in.linkedin.com/showcase/bmw-india/"target="_blank"><i class="bi bi-linkedin" style="color: #ffff;"></i></a> </li>
          <li><a href="https://twitter.com/bmwindia"target="_blank"><i class="bi bi-twitter-x" style="color: #ffff;"></i></a></li>
        </ul>
</div>
      
          </div>
       
     
      </div>	
      </div>
</div>

 









    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>$('.carousel').carousel({
      interval: 3000
    })</script>



    
</body>
</html>