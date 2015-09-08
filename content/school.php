<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  	<script>
  $(function() {
    var icons = {
      header: "ui-icon-circle-arrow-e",
      activeHeader: "ui-icon-circle-arrow-s"
    };
    $( "#accordion" ).accordion({
      //icons: icons
      heightStyle: "content"
    });
	$( "#accordion" ).accordion({
      icons: icons
      //heightStyle: "content"
    });
    $( "#toggle" ).button().click(function() {
      if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
        $( "#accordion" ).accordion( "option", "icons", null );
      } else {
        $( "#accordion" ).accordion( "option", "icons", icons );
      }
    });
  });
  	</script>
</head>
<body>
	<h1><u>School</u> | <small>University of Missouri - Columbia '16</small></h1>
	<h4>Major: <small>Computer Science</small></h4>
	<h4>Minor: <small>Mathematics</small></h4>
	<h3>Computer Science Courses</h3>
	<div id="accordion">
  		<h3>(CMP_CS 1000)Intro to Computer Science</h3>
  	<div>
    	<p>This course introduces the Computer Science field, including 
    	the history of computers, career opportunities, and ethical/social 
    	issues. There will be lectures given by MU Computer Science faculty 
    	to discuss exciting fields as well as career advisement given by 
    	Computer Science industry representatives. </p>
  	</div>
	<h3><li>(CMP_CS 1050)Algorithm Design I</li></h3>
  <div>
    <p>
   This course provides experience in developing algorithms, designing, 
   implementing programs. Topics include syntax/semantics, flow control,
    loops, recursion, I/O, arrays, strings and pointers. Math Reasoning
     Proficiency Course. 
    </p>
  </div>
  <h3>(CMP_CS 2050)Algorithm Design II</h3>
  <div>
    <p>
    	A study of fundamental techniques and algorithms for representing and 
		manipulating data structures. Topics include data abstraction, recursion, 
		stacks, queues, linked lists, trees, efficient methods of sorting and 
		searching, and Big-O analysis.
    </p>
  </div>
  <h3>CMP_CS 2270)Intro Digital Logic</h3>
  <div>
    <p>
    Basic tools, methods and procedures to design combinational and sequential 
    digital circuits and systems, including number systems, boolean algebra, 
    logic minimization, adder design, memory elements, and finite state machine 
    design.
    </p>
  </div>
  <h3>(CMP_CS 2830)Intro Internet, WWW, and Multimedia Systems</h3>
  	<div>
    	<p>
		This course will attempt to provide a comprehensive understanding of the evolution, 
		the technologies, and the tools of the Internet. In particular, issues pertaining to
 		the World Wide Web and Multimedia (HTML, CGI, Web based applications) will be 
		discussed in detail
    	</p>
	</div>
	<h3>(CMP_CS 3280)Computer Organization and Assembly Language</h3>
  	<div>
  	  	<p>
		Introduces computer architectures, programming concepts including parameter passing,
		I/O, interrupt handling, DMA, memory systems, cache, and virtual memory.
    	</p>
	</div>

	<h3>(CMP_CS 3330)Object Oriented Programing</h3>
  	<div>
  	 	<p>
		This course focuses on object-oriented programming concepts: abstraction, 
		polymorphism, encapsulation, inheritance, interfaces, abstract classes, files,
		 streams, and object serialization. Topics such as GUI and event-driven 
		 programming are also tackled.
    	</p>
 	</div>
 	
 	<h3>(CMP_CS 3380)Database Application and Info Systems</h3>
  	<div>
  	 	<p>
		Covers fundamental topics of database management systems (DBMS) and database-enabled applications. Topics include a brief history of secondary storage and databases, data modeling, introductory SQL, an overview of current database trends, and current popular database systems
    	</p>
 	</div>
 	<h3>(CMP_CS 4085)Problems in Computer Science</h3>
  	<div>
  	 	<p>
		Independent investigation or project in Computer Science
    	</p>
 	</div>
 	<h3>(CMP_CS 4320)Software Engineering I</h3>
  	<div>
  	 	<p>
		Overview of software life cycle, including topics in systems analysis and requirements specification, design, implementation testing and maintenance. Uses modeling techniques, project management, peer review, quality assurance, and system acquisition.
    	</p>
 	</div>
 	<h3>(CMP_CS 4650)Digital Image Processing</h3>
  	<div>
  	 	<p>
		Fundamentals of digital image processing hardware and software including digital image acquisition, image display, image enhancement, image transforms and segmentation
    	</p>
 	</div>
 	<h3>(CMP_CS 4830)Science and Engineering of the WWW</h3>
  	<div>
  	 	<p>
		This course will study the science and engineering of the World Wide Web. We will study the languages, protocols, services and tools that enable the web. Emphasis will be placed on basics and technologies.
    	</p>
 	</div>
</div>

	<h3>Regular Courses</h3>
	<p>In Progress.  Will be completed by May 29, 2015</p>
</body>
</html>