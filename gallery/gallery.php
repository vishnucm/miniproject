<!DOCTYPE html>


<?php

$mysql_user = "root";
            $mysql_pass = "";
            $server_name = "localhost";
   
            $con = mysqli_connect($server_name, $mysql_user, $mysql_pass);
   
            if(! $con ) {    
                die('Could not connect: ' . mysqli_error($con));
            }
   
            $sql = 'SELECT event,datee FROM events';
            $d = mysqli_select_db ($con,"testdb");
            $retval = mysqli_query($con,$sql );
   
            if(! $retval ) {
                    die('Could not get data: ' . mysqli_error($con));
            }
            ;
 ?>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Gallery</title>

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="css/style.css" rel="stylesheet">

	</head>

	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ --> 
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					
					<div class="col-md-8">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">

											<ul class="nav navbar-nav navbar-right">

												<li><a href="../index.html">HOME</a></li>
        										<li><a href="../index.html #about">ABOUS US</a></li>
        										<li><a href="../login.php">LOGIN</a></li>
        										<li><a href="../index.html #contact">CONTACT US</a></li>
        										<li class="dropdown">
         	 										<a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          											<span class="caret"></span></a>
          											<ul class="dropdown-menu">
            											<li><a href="gallery.php">EVENTS</a></li>
            											<li><a href="../proposal.php">EVENT PROPOSAL</a></li>
            											<li><a href="../nylp.docx">REPORT 2016</a></li> 
          											</ul>
        										</li>
											</ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		<!-- header end -->
		<!-- section start -->
		<!-- ================ -->
		<div class="section">
			<div class="container">
			<br><br>
				<h1 class="text-center title" id="portfolio">EVENTS AND GALLERY</h1>
				
						<iframe align="left" src="https://calendar.google.com/calendar/embed?src=2tojss12um5hn5vt7t06v0fquo%40group.calendar.google.com&ctz=Asia/Calcutta" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
						<span style="display:inline-block; width: "100";"></span>
						<marquee style="position: relative; background-color: #99ccff" behavior="scroll" align="right" direction="up" scrollamount="2" scrolldelay="5" onmouseover="this.stop()" onmouseout="this.start()" height="600	" ><br>

						<center>
							<?php
                                                        while($row = mysqli_fetch_array($retval)) {
                                                                                                                    
                                                        echo "<br>
                                                             {$row['event']}<br>
                                                            {$row['datee']} <br>
                                                            
                                                                                                                       
                                                        ";
                                                        }
                                                        

                                                        ?>
						</center>


						
						</marquee>

						<br><br>
						</div>
						<!-- portfolio items start -->
						<div class="isotope-container row grid-space-20">
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/2.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-1">
											<i class="fa fa-search-plus"></i>
											<span>ENTREPRENEURSHIP DEVELOPMENT</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-1">ENTREPRENEURSHIP DEVELOPMENT</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-1" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-1-label">ENTREPRENEURSHIP DEVELOPMENT</h4>
											</div>
											<div class="modal-body">
												<h3>Report</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Rajiv Gandhi National Level Youth Entrepreneurship Development Program was organized in the college with the support of ICT academy Tamilnadu from 9/9/2015 to 13/9/2015.The program was inaugurated by principal prof.Dr.Neelakantan P.C and the sessions were handled by Mr. Sijo George (NSS program officer trained by ICT Academy Tamilnadu) and Mr.Ajay Basil Varghese of IT department (startup boot camp-ASIET).Around 40 volunteers were attended in the program. Different areas of entrepreneurship such as competencies of entrepreneur, idea generation, Market analysis, market survey, management, registration process, financial aspects and business plan preparation etc. were covered in various sessions.</p>
													</div>
													<div class="col-md-6">
														<img src="images/1.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item app-development">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/3.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-2">
											<i class="fa fa-search-plus"></i>
											<span>VINJANA YATHRA</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-2">VINJANA YATHRA</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-2" tabindex="-1" role="dialog" aria-labelledby="project-2-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-2-label">VINJANA YATHRA</h4>
											</div>
											<div class="modal-body">
												<h3>Report</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Bhoomithrasena club and NSS technical cell conducted a campaign on cleanliness and waste management. As part of this program a seminar and exhibition were organized. A warm welcome was given to vinjanayatra (a knowledge campaign) on waste management and renewable energy organized by Mithradam and Rajagiri outreach, KalamasseryEngineering and technology . Principal Prof. Dr.  Neelakandan P.C presided over the function.  Dr George Pittapillil delivered a talk on ‘Cleanliness and waste management’. Students of our college exhibited their environment friendly academic projects.</p>
													</div>
													<div class="col-md-6">
														<img src="images/4.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/5.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-3">
											<i class="fa fa-search-plus"></i>
											<span>NSS ORIENTATION</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-3">NSS ORIENTATION</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-3" tabindex="-1" role="dialog" aria-labelledby="project-3-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-3-label">NSS ORIENTATION</h4>
											</div>
											<div class="modal-body">
												<h3>Report</h3>
												<div class="row">
													<div class="col-md-6">
														<p>A General orientation program was organized for NSS volunteers on 15/1/2016.Mr Mohan Former NSS program officer of Sree Shankara college, Kalady handled the session. He spoke about history and philosophy of NSS. Afternoon session handled by Lakshmy Krishnakumar (Educational Psychologist,ASIET) and Leny Mathew Samuel ( Student counselor, ASIET) which was on the topics self awareness ,goal setting and positive mental attitude.</p>
													</div>
													<div class="col-md-6">
														<img src="images/6.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item site-building">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/7.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-4">
											<i class="fa fa-search-plus"></i>
											<span>REPUBLIC DAY CELEBRATION</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-4">REPUBLIC DAY CELEBRATION</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-4" tabindex="-1" role="dialog" aria-labelledby="project-4-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-4-label">REPUBLIC DAY CELEBRATION</h4>
											</div>
											<div class="modal-body">
												<h3>Report</h3>
												<div class="row">
													<div class="col-md-6">
														<p>NSS unit of ASIET,Kalady celebrated 67th Republic day in the college campus. Celebrations began with the hoisting of National flag by the Dean of the college Prof. Dr.N Hariharan followed by National Anthem and he addressed the students and staff about the importance of republic day.NSS program officer Mr.Sijo George and college students union chairman Mr.Jinu Addressed  the gathering. Every staff and students took the republic day pledge and sweets were distributed.</p>
													</div>
													<div class="col-md-6">
														<img src="images/8.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item app-development">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/9.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-5">
											<i class="fa fa-search-plus"></i>
											<span>OBSERVATION OF CANCERDAY</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-5">OBSERVATION OF CANCERDAY</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-5" tabindex="-1" role="dialog" aria-labelledby="project-5-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-5-label">OBSERVATION OF CANCERDAY</h4>
											</div>
											<div class="modal-body">
												<h3>Report</h3>
												<div class="row">
													<div class="col-md-6">
														<p>World cancer day is a global event taking place every year on 4 February; it unites the world’s population in the fight against cancer.	It aims to save millions of preventable deaths each year by raising awareness and education about the disease, pressing governments and individuals across the world to take action.NSS unit o ASIET organized an awareness rally on this occasion.</p>
													</div>
													<div class="col-md-6">
														<img src="images/10.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/12.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-6">
											<i class="fa fa-search-plus"></i>
											<span>CLASS ON GENDER EQUALITY</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-6">CLASS ON GENDER EQUALITY</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-6" tabindex="-1" role="dialog" aria-labelledby="project-6-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-6-label">CLASS ON GENDER EQUALITY</h4>
											</div>
											<div class="modal-body">
												<h3>Report</h3>
												<div class="row">
													<div class="col-md-6">
														<p>A class on gender equality was organized for NSS volunteers on 11/2/2016.The session were handled by Mrs Anitha P senior faculty member of ASIET. During her session she pointed out that Gender equality is achieved when women and men enjoy the same rights and opportunities across all sectors of society, including economic participation and decision-making, and when the different behaviors, aspirations and needs of women and men are equally valued and favored.</p>
													</div>
													<div class="col-md-6">
														<img src="images/13.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item site-building">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/14.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-7">
											<i class="fa fa-search-plus"></i>
											<span>CLEAN COCHI CAMPAIGN -2016</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-7">CLEAN COCHI CAMPAIGN -2016</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-7" tabindex="-1" role="dialog" aria-labelledby="project-7-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-7-label">CLEAN COCHI CAMPAIGN -2016</h4>
											</div>
											<div class="modal-body">
												<h3>Report</h3>
												<div class="row">
													<div class="col-md-6">
														<p>N.S.S Bhoomithrasena club of Adi Shankara Institute of Engineering technology organized a massive cleanliness drive ‘Clean Kochi’ at Fort Kochi beach on 14/2/2016 with the help of Cochin corporation . Around 300 hundred students and 20 faculty members were put their hands together for this wonderful event. 4 tons of waste removed from the beach.Honorable Cochi Mayer Smt. Soumini Jain inaugurated the cleaning drive. College Management trustee Adv.K.Anand , college Director S.G Iyer, Director board member V.Ramalingam , Muncipal councilor Smt.Shyni Mathew were facilitated the function.. The program was appreciated by the visitors and foreigner’s .Media provides good support during the program. The campaign rightly propagated the message that “Cleanliness is next to Godliness.”</p>
													</div>
													<div class="col-md-6">
														<img src="images/15.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/16.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-8">
											<i class="fa fa-search-plus"></i>
											<span>CULTURAL TALENT EXPRESSION</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-8">CULTURAL TALENT EXPRESSION</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-8" tabindex="-1" role="dialog" aria-labelledby="project-8-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-8-label">CULTURAL TALENT EXPRESSION</h4>
											</div>
											<div class="modal-body">
												<h3>Report</h3>
												<div class="row">
													<div class="col-md-6">
														<p>NSS unit of ASIET,Kalady pays tribute to soldiers who were died in Siachen and to the well-known Malayalam poet ONV Kuruppu. Students gave their feedback on clean Cochin event and they pointed out that it was a wonderful experience .The students exhibit their cultural talents during the session.</p>
													</div>
													<div class="col-md-6">
														<img src="images/17.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/18.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-9">
											<i class="fa fa-search-plus"></i>
											<span>BLOOD DONATION CAMP</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-9">BLOOD DONATION CAMP</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-9" tabindex="-1" role="dialog" aria-labelledby="project-9-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-9-label">BLOOD DONATION CAMP</h4>
											</div>
											<div class="modal-body">
												<h3>Report</h3>
												<div class="row">
													<div class="col-md-6">
														<p>NSS  unit of Adishankara college of Engineering and Technology, Kalady  organized a blood donation camp in association with IMA blood bank ,Ernakulam on 17/9/2015(Thursday). 56 students and 4 faculty members have donated their blood. A directory of blood donors was prepared.</p>
													</div>
													<div class="col-md-6">
														<img src="images/19.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item site-building">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/20.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-10">
											<i class="fa fa-search-plus"></i>
											<span>LEGAL LITERACY CLASS</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-10">LEGAL LITERACY CLASS</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-10" tabindex="-1" role="dialog" aria-labelledby="project-10-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-10-label">LEGAL LITERACY CLASS</h4>
											</div>
											<div class="modal-body">
												<h3>Report</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Aluva taluk legal services committee and NSS unit of ASIET organized a legal literacy class on 8/10/2015 (Thursday) from 2.30 pm to 4.15 pm. College director Prof.Dr.S.G Iyer inaugurated the program. Miss Priya and Mr Ameer Afsal of Aluva Taluk  legal services committee were facilitated the function.The classes were handled by senior advocates Adv.Sheeba and Adv Thankachan Vithayathil.</p>
													</div>
													<div class="col-md-6">
														<img src="images/21.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/22.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-11">
											<i class="fa fa-search-plus"></i>
											<span>NSS CAREER AWARENESS PROGRAM</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-11">NSS CAREER AWARENESS PROGRAM</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-11" tabindex="-1" role="dialog" aria-labelledby="project-11-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-11-label">NSS CAREER AWARENESS PROGRAM</h4>
											</div>
											<div class="modal-body">
												<h3>Report</h3>
												<div class="row">
													<div class="col-md-6">
														<p>NSS technical cell of Adi Shankara Institute of Engineering and Technology, Kalady organized a career awareness program at Angamaly Merchant association hall on 30/4/2016 for 10th and higher secondary students. The program was inaugurated by Sri Abdul Jabbar Ahammed, NSS state Program coordinator. The seminar was taken by the well-known career consultant Sri Moncy Varghese. YMCA Angamaly President Sri Saju Chacko,NSS district coordinator Sri Jai M Paul were facilitated the function. A counseling session on Engineering Study was conducted by the NSS career consultants.</p>
													</div>
													<div class="col-md-6">
														<img src="images/23.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item app-development">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/24.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-12">
											<i class="fa fa-search-plus"></i>
											<span>OBSERVATION OF FORESTRY DAY</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-12">OBSERVATION OF FORESTRY DAY</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-12" tabindex="-1" role="dialog" aria-labelledby="project-12-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-12-label">OBSERVATION OF FORESTRY DAY</h4>
											</div>
											<div class="modal-body">
												<h3>Report</h3>
												<div class="row">
													<div class="col-md-6">
														<p>World Forestry Day was observed at Adishankara Institute of Engineering college. College Director Dr SG Iyer Inuagurated the program by Planting a tree sapling. Principal Dr.Neelakandan P.C Delivered the message.</p>
													</div>
													<div class="col-md-6">
														<img src="images/25.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

						</div>
						<!-- portfolio items end -->
					
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>


	</body>
</html>
