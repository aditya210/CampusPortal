<?php
  if(!isset($_COOKIE['username']))
        {
          header("location: index.php");
          exit();
        }
?>
<!DOCTYPE html>
<html>
<head>
<title>Campus Portal</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>
 <script src="http://designshack.net/tutorialexamples/ScrollLinks/jquery.localscroll.js" type="text/javascript"></script> 
<script src="http://designshack.net/tutorialexamples/ScrollLinks/jquery.scrollTo.js" type="text/javascript"></script> 
<script src="layout/scripts/contact_us.js"></script>
<script src="layout/scripts/news_activites.js"></script>
<script src="layout/scripts/student_corner.js"></script>

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div>
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="#">Campus Portal</a></h1>
      <i class="fa fa-map-o"></i>
      <!--<p>An investment in knowledge pays the best interest.</p>-->
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="#">Pages</a>
          <ul>
            <li><a href="assignment.php">Assignment</a></li>
            <li><a href="questionbank.php">Question Bank</a></li>
            <li><a href="student_notices.php">Extra Notices</a></li>
            <li><a href="studymaterial.php">Study Material</a></li>
            <li><a href="examschedule.php">Exam Schedule</a></li>
            <li><a href="attendance.php">Attendance</a></li>
        </ul>
		 <li class="active"><a href="#news">News & Activites</a></li>
		 <li class="active"><a href="#student">Student's Corner</a></li>
		 <li class="active"><a href="#contact">Contact us</a></li>
     <li class="active"><a href=""><?php echo $_COOKIE['username']?><i class="fa fa-caret-down fa-fw"></i></a>
     <ul>
		<li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"> <?php echo $_COOKIE['username']?></i></div> <div class="menu-text">Edit Profile</div> </a> </li>             
         <li> <a href="logout.php"> <div class="menu-icon"><i class=" fa fa-sign-out"></i></div>  <div class="menu-text">Sign Out</div> </a></li>         <li> <a href="#contact"> <div class="menu-icon"><i class=" fa fa-question-circle"></i></div> <div class="menu-text">Help</div> </a></li>
    	<li> <a href="#"> <div class="menu-icon"><i class="fa fa-exclamation-circle"></i></div> <div class="menu-text">Report a Problem</div></a></li>       
     </ul>
     </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0 bgded" style="background-image:url('images/demo/backgrounds/milky_way.jpg');"-->
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <div class="overlay inspace-30 btmspace-30">
        <p class="font-xs nospace"></p>
        <h2 class="heading">Campus Portal</h2>
        <p><h3>Learn. Interact. Connect.</h3>
		On Campus Portal you will find information regarding studies and the services that facilitates your studies.Here you can find information about courses,result, assignments and question bank and much more. The Campus Portal is aimed for benificiary use of students and Faculties of college.<br><br>
		In addition to regular web pages, the Campus portal serves as an interface to a range of services in different systems. Links between systems can sometimes make the System slow. The Campus portal has a responsive design i.e. the design adapts to fit the size of the screen regardless of browser or device. It is ease of use for those students who have problems regarding the use of computer also.
		</p>
      </div>
      <footer>
        <ul class="nospace inline pushright">
        <!--  <li><a class="btn inverse" href="#">Consequat</a></li>
          <li><a class="btn" href="#">Scelerisque</a></li> -->
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <ul class="nospace group center">
      <li class="one_third first btmspace-30">
        <article class="block inspace-30 borderedbox"><a href="#"><i class="btmspace-15 fa fa-4x fa-bar-chart"></i></a>
          <h6 class="font-x1">Report</h6>
          <p class="nospace">Report regarding attendance,Student's performance during the course of semesters&hellip;</p>
        </article>
      </li>
      <li class="one_third btmspace-30">
        <article class="block inspace-30 borderedbox"><a href="#"><i class="btmspace-15 fa fa-4x fa-book"></i></a>
          <h6 class="font-x1">Assignment</h6>
          <p class="nospace">Subject wise assignment which are to be submitted during the semester&hellip;</p>
        </article>
      </li>
      <li class="one_third btmspace-30">
        <article class="block inspace-30 borderedbox"><a href="#"><i class="btmspace-15 fa fa-4x fa-clone"></i></a>
          <h6 class="font-x1">Extra Notices</h6>
          <p class="nospace">Recent activites and future activites which would be carried out in the campus&hellip;</p>
        </article>
      </li>
      <li class="one_third first">
        <article class="block inspace-30 borderedbox"><a href="#"><i class="btmspace-15 fa fa-4x fa-bookmark-o"></i></a>
          <h6 class="font-x1">Question Bank</h6>
          <p class="nospace">Subject-wise important set of questions for the college internal examination&hellip;</p>
        </article>
      </li>
      <li class="one_third">
        <article class="block inspace-30 borderedbox"><a href="#"><i class="btmspace-15 fa fa-4x fa-calendar"></i></a>
          <h6 class="font-x1">Exam Schedule</h6>
          <p class="nospace">Schedule for the examination which will be carried out in college&hellip;</p>
        </article>
      </li>
      <li class="one_third">
        <article class="block inspace-30 borderedbox"><a href="#"><i class="btmspace-15 fa fa-4x fa-briefcase"></i></a>
          <h6 class="font-x1">Study Material</h6>
          <p class="nospace">Important notes and study material subject-wise given specially by faculty for help of students&hellip;</p>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper coloured"><a name="student"></a>
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <ul class="nospace group center">
      <li class="one_third first">
        <article><a href="#"><i class="btmspace-15 fa fa-4x fa-optin-monster"></i></a>
          <h6 class="font-x1"><b>Student Corner</h6>
          <p class="nospace">“Education is the ability to listen to almost anything without losing your temper or your self-confidence ― Robert Frost&hellip;<br><br><br>
		  The roots of education are bitter, but the fruit is sweet.<br>
― Aristotle&hellip;</p>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="btmspace-15 fa fa-4x fa-paw"></i></a>
          <h6 class="font-x1"><b><a name="Annual">Annual TechFests</a></h6>
          <p class="nospace">Called Vision, Prakarsh where students corroborate their skills.</p>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="btmspace-15 fa fa-4x fa-puzzle-piece"></i></a>
          <h6 class="font-x1"><b><a name="grievance">Grievance Redressal Cell</a></h6>
          <p class="nospace">The function of the cell is to look into the complaints lodged by any student, and judge its merit.Anyone with a genuine grievance may approach the department members in person, or in consultation with the officer in-charge Students' Grievance Cell. In case the person is unwilling to appear in self, grievances may be dropped in writing at the letterbox/ suggestion box of the Grievance Cell at Administrative Block. &hellip;</p>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3"><a name="news"></a>
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h2 class="font-x2 nospace">Recent News and activities</h2>
      <p class="nospace">Everyday is an activity for all of us.</p>
    </div>
    <div class="group">
      <article class="one_third first">
        <time class="font-xs" datetime="2015-04-07">7<sup>th</sup> April 2015</time>
        <h2 class="nospace font-x1 bold">Workshop Organization</h2>
        <p>Three days workshop on “Embedded System Design And Interfaces” was 
		    Organized by Electronics and Communication Department on April 4-6, 2016</p>
        <p class="nospace"><a href="#">Read More &raquo;</a></p>
      </article>
      <article class="one_third">
        <time class="font-xs" datetime="2016-03-06">6<sup>th</sup> March 2016</time>
        <h2 class="nospace font-x1 bold">IOT Workshop</h2>
        <p>2 DAYS workshop on IOT with ARDUINO was conducted by Computer Engineering Department, SVIT - Vasad on 4-5th March at IIPC hall&hellip;</p>
        <p class="nospace"><a href="#">Read More &raquo;</a></p>
      </article>
      <article class="one_third">
        <time class="font-xs" datetime="2015-01-025">25<sup>th</sup> January 2015</time>
        <h2 class="nospace font-x1 bold">Book Lovers club</h2>
        <p>The Book Lovers' Club had organised review on the following books on 21 January 2016 From 2:45 pm onwards at IT Seminar Hall.<br>
		1. "Adventures of Tom Sawyer authored by Mark Twain.<br>
		2. "The murder of Roger Ackroyd " authored by Agatha Christae.<br></p>
        <p class="nospace"><a href="#">Read More &raquo;</a></p>
      </article>
    </div>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="title"><a name="contact">Contact Us</a></h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          B/h. S.T. Bus Depot, Vasad, 
		  Anand District, Gujarat 388306
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +91-02692-274766<br>
          +91-02692-274489 </li>
        <li><i class="fa fa-envelope-o"></i> svit_vasad@gmail.com</li>
		 <li> <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i>Facebook Page</a></li> 
		  <li><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i>Twitter Page</a></li>
		  <li><a href="https://www.plus.google.com/"><i class="fa fa-google-plus"></i>Google+</a></li>
      </ul>
    </div>
                              
	    <div class="one_third">
      <h6 class="title"><a name="contact">About Our Institute</a></h6>
      <ul class="nospace linklist">
        <li><b>Inspiration:</b> Ideals of Sardar Vallabhbhai Patel</li>
        <li><b>Trust: </b>New English School Trust(NEST)-a philanthropic institution/society</li>
        <li><b>Location: </b>On the banks of the river Mahi, at Vasad, in a peaceful and pollution-free environment (25 km from Baroda and 20 km from Anand on NH-8)</li>
        <li><b>SVIT Campus:</b> It comprises of 26 acres of land on which the institute building is Constructed with the plinth area of 232608(Carpet area 193840) sqft. Sufficient land is available for further development.</li>
        <li><b>Sports: </b>Playgrounds for outdoor and indoor games facilities are available.
	</li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title"><a name="contact">For more query</a></h6>
      <p class="btmspace-30">For further more queries related to our campus. Please fill up the form given below.</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<!--<script src="layout/scripts/jquery.min.js"></script> -->
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>