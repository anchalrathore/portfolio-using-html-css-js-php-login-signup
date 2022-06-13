<?php
include_once("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="ANCHAL RAJ, portfolio ANCHAL RAJ, Data Scientist,Web Developer, portfolio website, ANCHAL RAJ website, Founder CodeIN" />
    <meta name="description" content="Welcome to Rathore's Portfolio. Passionate Web & App Developer. Freelancer Data Scientist Machine Learning Ethusiast." />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assests/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link id='favicon' rel="shortcut icon" href="./assests/images/favicon.png" type="image/x-png">
    <title>Portfolio | Anchal Raj</title>
    
</head>
<body oncontextmenu="return false">

<!-- pre loader -->
<div class="loader-container">
  <img draggable="false" src="./assests/images/preloader.gif" alt="">
</div>


<!-- navbar starts -->
<header>
        <a href="/Portfolio-ANCHAL RAJ" class="logo"><i class="fab fa-node-js"></i> @NCH@L</a>

        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#contact">Contact</a></li>
            </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php"><i class="fas fa-file-alt"></i> signup& LogIn</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><i class="fas fa-file-alt"></i> logout</a>
        </li>
            </ul>
        </nav>
</header>
<!-- navbar ends -->




<!-- hero section starts -->
<section class="home" id="home">
    <div id="particles-js"></div>

    <div class="content">
    <h3>Hi There,<br/> I'm Anchal <span>Rathore</span></h3>
    <p>i am into <span class="typing-text"></span></p>
    <a href="#about" class="btn"><span>About Me</span>
      <i class="fas fa-arrow-circle-down"></i>
    </a>
    <div class="socials">
        <ul class="social-icons">
          <li><a class="linkedin" href="https://www.linkedin.com/in/anchal-raj" target="_blank"><i class="fab fa-linkedin"></i></a></li> 
          <li><a class="github" href="https://github.com/anchalrathore?tab=projects&type=beta" target="_blank"><i class="fab fa-github"></i></a></li>
          <li><a class="YouTube" href="https://https://www.youtube.com/channel/UConfacTS1rvxTcug-U8EzUA" target="_blank"><i class="fab fa-youtube"></i></a></li>
          <li><a class="twitter" href="https://https://twitter.com/Anchal70604179" target="_blank"><i class="fab fa-twitter"></i></a></li>
          <li><a class="Discord" href=" https://discord.gg/hWwbgP4dz9" target="_blank"><i class="fab fa-discord"></i></a></li>
          <li><a class="login" href="https://www.instagram.com/anchal.raj__/"><i class="fab fa-instagram" target="_blank"></i></a></li>
          
        </ul>
      </div>
    </div>
<div class="image">
    <img draggable="false" class="tilt" src="./assests/images/hero.gif" alt="">
</div>
</section>
<!-- hero section ends -->


<!-- about section starts -->
<section class="about" id="about">
    <h2 class="heading"><i class="fas fa-user-alt"></i> About <span>Me</span></h2>
    
    <div class="row">

    <div class="image">
        <img draggable="false" class="tilt" src="./assests/images/meri-maa.jpg" alt="">
    </div>
    <div class="content">
        <h3>I'm ANCHAL</h3>
        <span class="tag">Passionate Web and App Developer| Machine Learning Enthusiast </span>
        <p>First-year Master of computer Application Student at Vellore Institute of Technology Chennai. 
          Founder and Organizer at (CodeIN) Community of Coding Hackthon. 
          Along with a wonderful team, I lead the center for entrepreneurial leadership at my college.

          Skills:Full-Stack development, Machine learning, Microsoft Azure, Deep learning, jQuery and Google cloud.
          Known Languages: Python,Java, C++, C, Java, HTML, CSS,JavaScript,R,Autocad,Visual-Basic.
          
         </p>
        
        <div class="box-container">
            <div class="box">
              <p><span> age: </span> 20</p>
              <p><span> college : </span> Vellore Institute of Technology Chennai</p>
            </div>
            <div class="box">
              <p><span> email : </span> rajanchal468@gmail.com</p>
              <p><span> place : </span> Boaring Road Patna, India-800001 </p>
            </div>
        </div>
        
        <div class="resumebtn">
            <a href="./assests/my cv - Copy.pdf" class="btn"><span>Resume</span>
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>

    </div>
    </div>
</section>
<!-- about section ends -->

<!-- skills section starts -->
<section class="skills" id="skills">

    <h2 class="heading"><i class="fas fa-laptop-code"></i> Skills & <span>Abilities</span></h2>

    <div class="container">
          <div class="row">
              <div class="col">

                <div class="bar">
                    <div class="info">
                      <i class="fab fa-html5">
                      <span>HTML</span></i>
                      <span>90%</span>
                    </div>
                    <div class="line html"></div>
                </div>

                  <div class="bar">
                    <div class="info">
                      <i class="fab fa-css3-alt">
                      <span>CSS</span></i>
                      <span>82%</span>
                    </div>
                    <div class="line css"></div>
                  </div>

                  <div class="bar">
                    <div class="info">
                      <i class="fab fa-js-square">
                      <span>Javascript</span></i>
                      <span>80%</span>
                    </div>
                    <div class="line javascript"></div>
                  </div>

                  <div class="bar">
                    <div class="info">
                      <i class="fas fa-code">
                      <span>jQuery</span></i>
                      <span>73%</span>
                    </div>
                    <div class="line jquery"></div>
                  </div>

                  <div class="bar">
                    <div class="info">
                      <i class="fab fa-google cloud">
                      <span>Google Cloud Platform</span></i>
                      <span>85%</span>
                    </div>
                    <div class="line php"></div>
                  </div>

                  <div class="bar">
                    <div class="info">
                      <i class="fas fa-database">
                      <span>MySQL</span></i>
                      <span>80%</span>
                    </div>
                    <div class="line mysql"></div>
                  </div>

                  <div class="bar">
                    <div class="info">
                      <i class="fab fa-react">
                      <span>ReactJS</span></i>
                      <span>55%</span>
                    </div>
                    <div class="line reactjs"></div>
                  </div>
              </div>

              <div class="col">
                <div class="bar">
                    <div class="info">
                      <i class="fab fa-java">
                      <span>Java</span></i>
                      <span>80%</span>
                    </div>
                    <div class="line java"></div>
                  </div>

                  <div class="bar">
                    <div class="info">
                      <i class="fab fa-python">
                      <span>Python</span></i>
                      <span>90%</span>
                    </div>
                    <div class="line python"></div>
                  </div>

                  <div class="bar">
                    <div class="info">
                      <i class="fab fa-android">
                      <span>Android</span></i>
                      <span>70%</span>
                    </div>
                    <div class="line android"></div>
                  </div>

                  <div class="bar">
                    <div class="info">
                      <i class="fab fa-node-js">
                      <span>NodeJS</span></i>
                      <span>70%</span>
                    </div>
                    <div class="line nodejs"></div>
                  </div>

                  <div class="bar">
                    <div class="info">
                      <i class="fas fa-code-branch">
                      <span>Git & GitHub | VCS</span></i>
                      <span>88%</span>
                    </div>
                    <div class="line vcs"></div>
                  </div>

                  <div class="bar">
                    <div class="info">
                      <i class="fab fa-">
                      <span>C/C++</span></i>
                      <span>85%</span>
                    </div>
                    <div class="line cms"></div>
                  </div>

                  <div class="bar">
                    <div class="info">
                      <i class="fab fa-python">
                      <span>Jupyter Notebook</span></i>
                      <span>90%</span>
                    </div>
                    <div class="line firebase"></div>
                  </div>

            </div>
      </div>
</div>
</section>
<!-- skills section ends -->


<!-- education section starts -->
<section class="education" id="education">

  <h1 class="heading"><i class="fas fa-graduation-cap"></i> My <span>Education</span></h1>

    <p class="qoute">Education is not the learning of facts, but the training of the mind to think.</p>

    <div class="box-container">

    <div class="box">
        <div class="image">
        <a href="https://www.aecwb.edu.in/">
        <img draggable="false" src="./assests/images/educat/vit-chennai.jpg" alt="">
        
        </div>
        <div class="content">
        <h3>Master of Computer Application </h3>
        <p>Vellore Institute of Technology Chennai </p>
        <h4>2021-2023 | Pursuing</h4>
      </a> 
        </div>
    </div>

    <div class="box">
      <div class="image">
        <a href="http://dpsdhanbad.in/">
      <img draggable="false" src="./assests/images/educat/ancollege.jfif" alt="">
      </div>
      <div class="content">
      <h3>B.C.A | COMPUTER APPLICATION</h3>
      <p> A.N.COLLEGE PATNA  | COMPUTER APPLICATION</p>
    </a>
      <h4>2017-2020 | Completed</h4>
      </div>
    </div>

</div>
</section>
<!-- education section ends -->


<!-- work project section starts -->
<section class="work" id="work">

  <h2 class="heading"><i class="fas fa-laptop-code"></i> Projects <span>Made</span></h2>

  <div class="box-container">

    


    <div class="box tilt">
      <img draggable="false" src="./assests/images/projects/mlpr.jpg" alt="" />
      <div class="content">
        <div class="tag">
        <h3>E-Mail Classification ML Model</h3>
        </div>
        <div class="desc">
          <p>Classify emails as spam or not-spam on the basis of the message.[Naive Bayes, Numpy, Pandas and Sklearn]
 
          
            
            </p>
          <div class="btns">
            <a href="https://github.com/SauravMukherjee44/Email-Classification-Model/blob/main/Model/email_classification.ipynb" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="https://github.com/SauravMukherjee44/Email-Classification-Model" class="btn" target="_blank"><i class="fas fa-code"></i> Code</a>
          </div>
        </div>
      </div>
    </div>
    
    
    
    
    <div class="box tilt">
      <img draggable="false" src="./assests/images/projects/portfolio1.jpg" alt="" />
      <div class="content">
        <div class="tag">
        <h3>Portfolio Website</h3>
        </div>
        <div class="desc">
          <p>Personal portfolio website. Don't need much info about it, just scroll down. You're here only!</p>
          <div class="btns">
            <a href="https://sauravmukherjee44.github.io/Portfolio-Saurav-Mukherjee/" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="https://github.com/SauravMukherjee44/Portfolio-Saurav-Mukherjee" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
          </div>
        </div>
      </div>
    </div>
    

    <div class="box tilt">
      <img draggable="false" src="./assests/images/projects/Library.png" alt="" />
      <div class="content">
        <div class="tag">
        <h3>College Library Website</h3>
        </div>
        <div class="desc">
          <p>This is a College Library Website in which you can keep a record of all the books you have issued. 
          © 2022 ANCHAL RAJ</p>
          <div class="btns">
            <a href="https://sauravmukherjee44.github.io/Aec-Library-Website/" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="https://github.com/SauravMukherjee44/Aec-Library-Website" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
          </div>
        </div>
      </div>
    </div>
    

   
    <div class="box tilt">
      <img draggable="false" src="./assests/images/projects/CodeIN.jpg" alt="" />
      <div class="content">
        <div class="tag">
        <h3>CodeIN Community Website</h3>
        </div>
        <div class="desc">
          <p>This is an Open Source Website for my Community CodeIN Community built using HTML, CSS, JavaScript and Bootstrap.</p>
          <div class="btns">
            <a href="https://codeincommunity.tech/" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="https://github.com/SauravMukherjee44/CodeIN-Community-Website" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
          </div>
        </div>
      </div>
    </div>
    

    <div class="box tilt">
      <img draggable="false" src="./assests/images/projects/Netflix.PNG" alt="" />
      <div class="content">
        <div class="tag">
        <h3>Netflix Clone | React-App</h3>
        </div>
        <div class="desc">
          <p>Netflix clone App built with React and Redux. The objective of this project is to practising the concepts of 'React-Hooks', 'Redux-Hooks', react-router, redux-setup.</p>
          <div class="btns">
            <a href="https://netflix-clone-saurav.herokuapp.com/" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="https://github.com/SauravMukherjee44/Netflix-Clone-PC-App" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
          </div>
        </div>
      </div>
    </div>  
    
    
    

<div class="viewall">
  <a href="/Portfolio-Saurav-Mukherjee/projects" class="btn"><span>View All</span>
    <i class="fas fa-arrow-right"></i>
</a>
</div>

</section>
<!-- work project section ends -->

<!-- experience section starts -->
<section class="experience" id="experience">

  <h2 class="heading"><i class="fas fa-briefcase"></i> Experience </h2>

  <div class="timeline">

    <div class="container left">
      <div class="content">
        <div class="tag">
          <h2>GirlScript Summer of Code</h2>
        </div>
        <div class="desc">
            <h3>Open Source Mentor and Project Admin</h3>
            <p>March 2022 - Present</p>
            <p>
              Mentored 500+ Students to get started with open source contributions using my projects.</p>
        </div>
      </div>
    </div>

    <div class="container right">
      <div class="content">
        <div class="tag">
          <h2>INTEL</h2>
        </div>
        <div class="desc">
            <h3>Student Lead</h3>
            <p>DEC 2021 - April 2022</p>
            <p> Simplify programming, improve efficiency, and aid innovation on the latest Intel® CPUs, GPUs, and FPGAs using Intel® one API Toolkits, the Intel® AI Analytics Toolkit, and the new programming language, Data-Parallel.
              - Deliver technical content on Intel’s Developer Website discussing my research, projects, and interests in the space of IoT, Deep Learning, and Artificial Intelligence.
              - Host speaker of Ambassador Labs on campus, connecting with my peers and local community, providing training and insight into our work.</p>
        </div>
      </div>
    </div>

    <div class="container left">
      <div class="content">
        <div class="tag">
          <h2>ConnectBud</h2>
        </div>
        <div class="desc">
            <h3>Coding-Tutor</h3>
            <p>Aug 2021 - Present</p>
            <p>ConnectBud Tutor | Live 1:1 Online Coding Classes for Kids.</p>
               
            
        </div>
      </div>
    </div>

    <div class="container right">
      <div class="content">
        <div class="tag">
          <h2>The Sparks Foundation</h2>
        </div>
        <div class="desc">
            <h3> Web Development and Designing | Internship</h3>
            <p>July 2021 - Present</p>
            <p>Created Basic Banking System Website for The Sparks Foundation  this is a simple credit management system given in sparks foundation internship program..</p>
        </div>
      </div>
    </div>

    <div class="container left">
      <div class="content">
        <div class="tag">
          <h2>Google Cloud </h2>
        </div>
        <div class="desc">
            <h3> Google Cloud Facilitator </h3>
            <h2>Student Mentor</h2>
            <p>April 2022 - Present</p>
            <p>
              For the upcoming months, I will be leading Google Cloud Ready Facilitator program and will be helping folks to get started with the Google Cloud Platform.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="morebtn">
    <a href="./experience/index.html" class="btn"><span>View All</span>
      <i class="fas fa-arrow-right"></i>
  </a>
  </div>

</div>

</section>
<!-- experience section ends -->

<!-- contact section starts -->
<section class="contact" id="contact">
  
  <h2 class="heading"><i class="fas fa-headset"></i> Get in <span>Touch</span></h2>

  <div class="container">
    <div class="content">
      <div class="image-box">
        <img draggable="false" src="./assests/images/contact1.png" alt="">
      </div>
    <form action="https://forms.office.com/r/4EyxDwY6QH">
      
      <div class="form-group">
        <div class="field">
          <input type="text" name="name" placeholder="Name" required>
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="email" placeholder="Email" required>
          <i class='fas fa-envelope'></i>
        </div>
        <div class="field">
          <input type="text" name="phone" placeholder="Phone">
          <i class='fas fa-phone-alt'></i>
        </div>
        <div class="message">
        <textarea placeholder="Message" name="message" required></textarea>
        <i class="fas fa-comment-dots"></i>
        </div>
        </div>
      <div class="button-area">
        <button type="submit">
          Submit <i class="fa fa-paper-plane"></i></button>
      </div>
    </form>
  </div>
  </div>
</section>
<!-- contact section ends -->


<!-- footer section starts -->
<section class="footer">

  <div class="box-container">

      <div class="box">
          <h3>@NCH@L's Portfolio</h3>
          <p>Thank you for visiting my personal portfolio website. Connect with me over socials. <br/> <br/> Please wait for a while all major projects will be listed soon. Till then keep visiting. Connect with me over live chat!</p>
      </div>

      <div class="box">
          <h3>quick links</h3>
          <a href="#home"><i class="fas fa-chevron-circle-right"></i> home</a>
          <a href="#about"><i class="fas fa-chevron-circle-right"></i> about</a>
          <a href="#skills"><i class="fas fa-chevron-circle-right"></i> skills</a>
          <a href="#education"><i class="fas fa-chevron-circle-right"></i> education</a>
          <a href="#work"><i class="fas fa-chevron-circle-right"></i> work</a>

          <a href="#experience"><i class="fas fa-chevron-circle-right"></i> experience</a>
      </div>

      <div class="box">
          <h3>contact info</h3>
          
          <p> <i class="fas fa-envelope"></i>rajanchal468@gmail.com</p>
          <p> <i class="fas fa-map-marked-alt"></i>Boaring Road Patna , India-800001</p>
          <div class="share">

              <a href="login.php" target="_blank"></a>
              <a href="https://github.com/anchalrathore?tab=projects&type=beta" class="fab fa-github" target="_blank"></a>
              <a href="mailto:rajanchal468@gmail.com" class="fas fa-envelope" target="_blank"></a>
              <a href="https://https://twitter.com/Anchal70604179" class="fab fa-twitter" target="_blank"></a>
              <a href="https://www.instagram.com/anchal.raj__/" class="fab fa-instagram" target="_blank"></a>
              <a href="https://https://www.youtube.com/channel/UConfacTS1rvxTcug-U8EzUA" class="fab fa-youtube" target="_blank"></a>
          </div>
      </div>
  </div>

  <h1 class="credit">Designed with <i class="fa fa-heart pulse"></i> by <a href="https://www.linkedin.com/in/sauravmukherjee44/"> Anch@l R@j</a></h1>

</section>
<!-- footer section ends -->


<!-- scroll top btn -->
<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>
<!-- scroll back to top -->


<!-- ==== ALL MAJOR JAVASCRIPT CDNS STARTS ==== -->
<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- typed.js cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js" integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- particle.js links -->
<script src="./assests/js/particles.min.js"></script>
<script src="./assests/js/app.js"></script>

<!-- vanilla tilt.js links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js" integrity="sha512-SttpKhJqONuBVxbRcuH0wezjuX+BoFoli0yPsnrAADcHsQMW8rkR84ItFHGIkPvhnlRnE2FaifDOUw+EltbuHg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- scroll reveal anim -->
<script src="https://unpkg.com/scrollreveal"></script>
<!-- ==== ALL MAJOR JAVASCRIPT CDNS ENDS ==== -->

<script src="./assests/js/script.js"></script>

</body>
</html>
