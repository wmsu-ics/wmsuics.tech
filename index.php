<!--
/* 
 * Copyright (C) 2020 ICS WMSU - All Rights Reserved
 * Institute of Computer Studies Web Page
 * Developed By: Jason A. Catadman and Jaydee C. Ballaho
 *
 */
 -->
<!DOCTYPE html>
<html>
	<head>
		<title>Institute of Computer Studies</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="icon" type="image/png" href="images/ics-seal.png" />
		<script src="js/functions.js"></script>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="crossorigin=""/>
		<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="crossorigin=""></script>
		<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
		<meta name="keywords" content="institute, computer, studies, computer science, information technology, tech, science, technology, information, computer, programming, development">
		<meta name="description" content="Institute of Computer Studies">
	</head>
	<body id="main" oncontextmenu="return false"> <!-- oncontextmenu="return false"  -->
		<div id="header">
			<div id="box1">
				<img id="logo-image" src="images/ics-seal.png">
				<a class="ics-title" href="#ics">INSTITUTE OF <br> COMPUTER STUDIES</a>
			</div>
			<div class="table" id="box2">
				<div class="center-table" id="header-menu">
					<div class="menuitem"><a class="menulink" href="#welcome">Welcome</a></div>
					<div class="menuitem"><a class="menulink" href="#corevalues">Core Values</a></div>
					<div class="menuitem"><a class="menulink" href="#goals">Goals</a></div>
					<div class="menuitem"><a class="menulink" href="#academics">Academic Programs</a></div>
					<div class="menuitem"><a class="menulink" href="#faculty">Faculty</a></div>
					<div class="menuitem"><a class="menulink" href="#history">History</a></div>
					<div class="menuitem"><a class="menulink" href="#location">Location</a></div>
				</div>
			</div>
			<div class="table" id="box3">
				<div class="center-table" id="header-menu">
					<a id="wmsu-button" href="http://www.wmsu.edu.ph/" target="_blank">WMSU</a>
					<a id="ics-button" href="http://lms.wmsuics.tech/" target="_blank">Digital Education</a>
				</div>
			</div>
		</div>
		<div id="nav-container" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<div class="profile">
				<div class="table">
					<div class="center-table">
						<div class="bottom-dash">
							<img class="profile-pic" src="images/ics-seal.png"><br>
							<a class="ics-title" onclick="closeNav()" href="#ics">INSTITUTE OF <br> COMPUTER STUDIES</a>
						</div>
					</div>
				</div>
			</div>
			<div id="nav-bar">
				<a onclick="closeNav()" href="#welcome" class="nav-bar-item">Welcome</a>
				<a onclick="closeNav()" href="#corevalues" class="nav-bar-item">Core Values</a>
				<a onclick="closeNav()" href="#goals" class="nav-bar-item">Goals</a>
				<a onclick="closeNav()" href="#academics" class="nav-bar-item">Academic Programs</a>
				<a onclick="closeNav()" href="#faculty" class="nav-bar-item">Faculty</a>
				<a onclick="closeNav()" href="#history" class="nav-bar-item">History</a>
				<a onclick="closeNav()" href="#location" class="nav-bar-item">Location</a>
				<a onclick="closeNav()" id="wmsu-button" href="http://www.wmsu.edu.ph/" target="_blank">WMSU</a>
				<a onclick="closeNav()" id="ics-button" href="http://lms.wmsuics.tech/" target="_blank">Digital Education</a>
			</div>
		</div>
		<div class="hamburger-button" onclick="openNav(this)">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
		</div>
		<div id="container">
			<div id="ics" class="headerbanner">
				<div class="banner-text-column">
					<div class="table">
						<div class="center-table">
							<div class="info-box">
								<div id="banner-title">Institute of Computer Studies</div>
								<div id="banner-quote">
									Institute of Computer Studies is a stronghold Institute in 
									Western Mindanao State University, offering quality education in the field of 
									Computer Science and Information Technology. 
									Be proud and take part of this remarkable Institute.
								</div>
								<!--<div><a href="directorslist.php" id="go-to-directorslist" class="button">SEE DIRECTOR'S LIST</a></div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="welcome">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/nGsU6-jYJx4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div id="corevalues">
				<div class="table">
					<div class="center-table">
						<div class="header-container">
							<div class="title">Institute of Computer Studies Core Values</div>
						</div>
					</div>
				</div>
				<div class="table">
					<div class="center-table">
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/CREATIVITY.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="core-title">CREATIVITY</div>
									<div class="description">The value of turning ideas into innovative and socially-responsive solutions.</div>
								</div>
							</div>
						</div>
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/SELF-RELIANCE.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="core-title">SELF-RELIANCE</div>
									<div class="description">The ability to have confidence in and exercise one’s judgment decisively and rationally.</div>
								</div>
							</div>
						</div>
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/INTEGRITY.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="core-title">INTEGRITY</div>
									<div class="description">The value of having commitment, honesty, competence, transparency and responsibility.</div>
								</div>
							</div>
						</div>
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/TEAMWORK.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="core-title">TEAMWORK</div>
									<div class="description">The ability to support others and place the team over individual importance.</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="goals">
				<div class="table">
					<div class="center-table">
						<div class="header-container">
							<div class="title">Institute of Computer Studies Goals</div>
						</div>
					</div>
				</div>
				<div class="table">
					<div class="center-table">
						<div id="goal-box" class="core-box">
							<table>
								<tr bgcolor="#CCCCCC" height="80px">
									<th>The institute shall provide academic excellence in the field of Information and Communication Technology, with emphasis on the following goals:</th>
								</tr>
								<tr>
									<td height="60px">Produce quality, excellent and environmentally pro-active graduates imbued with gender responsiveness.</td>
									</tr>
								<tr>
									<td height="60px">Achieve highest level of accreditation and center of excellence imbued with outcomes-based education.</td>
									</tr>
								<tr>
									<td height="60px">Partner with national and international industries as an outlet for research development and extension.</td>
								</tr>
								<tr>
									<td height="60px">Support faculty members through faculty development programs to be competitive with the highest global standards.</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div id="academics">
				<div class="table">
					<div class="center-table">
						<div class="header-container">
							<div class="title">Institute of Computer Studies Academic Programs</div>
						</div>
					</div>
				</div>
				<div class="table">
					<div class="center-table">
						
						<div id="cs-desc" class="academics-box">
							<div class="core-image-box">
								<img class="academics-image" src="images/BSCS.png">
							</div>
							<div class="dash-footer">
								<div class="header-container">
									<div class="title2">Bachelor of Science in Computer Science (BSCS)</div>
								</div>
								<!--
								<div class="core-content">
									<table>
										<tr bgcolor="#CCCCCC" height="80px">
											<th>Bachelor of Science in Computer Science (BSCS) Program Objectives</th>
										</tr>
										<tr>
											<td height="60px">Computer science theories and methodologies and new technologies in the design and development of computing solutions with appropriate consideration to public health and safety, culture, society, gender and environment.</td>
											</tr>
										<tr>
											<td height="60px">Personal development and lifelong learning attitudes through research and advance studies, and recognize the professional, legal, security, and ethical issues relevant to computing career practice.</td>
											</tr>
										<tr>
											<td height="60px">Communication and collaborative skills in diverse teams and multidisciplinary settings.</td>
										</tr>
									</table>
								</div>
								-->
								<div class="core-content">
									<table>
										<tr bgcolor="#CCCCCC" height="80px">
											<!-- style="background-color:#249f73;" -->
											<th>Bachelor of Science in Computer Science (BSCS) Program Outcomes</th>
										</tr>
										<tr>
											<td height="60px">Utilize effectively the concepts of computer science theories and methodologies and adapt new technologies and ideas in formulating effective solutions to address public health and safety, cultural, societal, gender and environmental considerations.</td>
											</tr>
										<tr>
											<td height="60px">Work cohesively with members of a team using their individual skills to the successful completion of a project.</td>
											</tr>
										<tr>
											<td height="60px">Pursue personal development and lifelong learning through research, graduate studies, training and membership to professional organization to be globally competitive.</td>
										</tr>
										<tr>
											<td height="60px">Communicate effectively with the computing community and society through oral and written correspondence.</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					
						<div id="it-desc"  class="academics-box">
							<div class="core-image-box">
								<img class="academics-image" src="images/BSIT.png">
							</div>
							<div class="dash-footer">
								<div class="header-container">
									<div class="title2">Bachelor of Science in Information Technology (BSIT)</div>
								</div>
								<!--
								<div class="core-content">
									<table>
										<tr bgcolor="#CCCCCC" height="80px">
											<th>Bachelor of Science in Information Technology (BSIT) Program Objectives</th>
										</tr>
										<tr>
											<td height="60px">To provide students to endure with a life-long learning and improve performance as a foundation for continuing professional development.</td>
											</tr>
										<tr>
											<td height="60px">To involve and encourage students to produce researchers relevant with institutional, regional, national and globally priorities that will be able to address the needs of the community they serve.</td>
											</tr>
										<tr>
											<td height="60px">To provide a new technologies or programs that is being used globally.</td>
										</tr>
										<tr>
											<td height="60px">To provide avenue for graduates’ employability through IT industry linkages.</td>
										</tr>
									</table>
								</div>
								-->
								<div class="core-content">
									<table>
										<tr bgcolor="#CCCCCC" height="80px">
											<!-- style="background-color:#249f73;" -->
											<th>Bachelor of Science in Information Technology (BSIT) Program Outcomes</th>
										</tr>
										<tr>
											<td height="60px">Utilize effectively the acquisition of concepts and technologies preparing and methodologies concepts in modeling, designing, and electronic solutions to problems of varying complexities.</td>
											</tr>
										<tr>
											<td height="60px">Formulates an effective solution to solve information technology-related problems through proper research and understanding of problem.</td>
											</tr>
										<tr>
											<td height="60px">Adapts new technologies and ideas in the design, analysis and implementation of system and its components.</td>
										</tr>
										<tr>
											<td height="60px">Demonstrates the ability to work cohesively with members of a team using their individual skills to the successful completion of a project.</td>
										</tr>
										<tr>
											<td height="60px">Manages the available human and technical resources effectively and efficiently.</td>
											</tr>
										<tr>
											<td height="60px">Recognizes the societal needs and its professional, legal, security, and ethical issues relevant to IT practice.</td>
											</tr>
										<tr>
											<td height="60px">Produces IT related researches relevant with institutional, regional, and national priorities.</td>
										</tr>
										<tr>
											<td height="60px">Produces IT related researches that are relevant responsive to the needs and concerns of the communities they serve.</td>
										</tr>
										<tr>
											<td height="60px">Pursues personal development and lifelong learning through research, training and membership to professional organization to be globally competitive.</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div id="mit-desc" class="academics-box">
								<div class="core-image-box">
									<img class="academics-image" src="images/MIT.png">
								</div>
								<div class="dash-footer">
									<div class="header-container">
										<div class="title2">Master in Information Technology (MIT)</div>
									</div>
									<!--
									<div class="core-content">
										<table>
											<tr bgcolor="#CCCCCC" height="80px">
												<th>Master in Information Technology (MIT) Program Objectives</th>
											</tr>
											<tr>
												<td height="60px">
													
												</td>
											</tr>
											
										</table>
									</div>
									-->
									<div class="core-content">
										<table>
											<tr bgcolor="#CCCCCC" height="80px">
												<!-- style="background-color:#249f73;" -->
												<th>Master in Information Technology (MIT) Program Outcomes</th>
											</tr>
											<tr>
												<td height="60px">
													Utilize effectively the acquisition of concepts and technologies preparing and methodologies concepts in modeling, designing, and electronic solutions to problems of varying complexities.
												</td>
											</tr>
											<tr>
												<td height="60px">
													Formulates an effective solution to solve information technology-related problems through proper research and understanding of problem.
												</td>
											</tr>
											<tr>
												<td height="60px">
													Adapts new technologies and ideas in the design, analysis and implementation of system and its components.

												</td>
											</tr>
											<tr>
												<td height="60px">
													Demonstrates the ability to work cohesively with members of a team using their individual skills to the successful completion of a project.
												</td>
											</tr>
											<tr>
												<td height="60px">
													Manages the available human and technical resources effectively and efficiently.
												</td>
											</tr>
											<tr>
												<td height="60px">
													Recognize the social needs and its professional, legal, security, and ethical issues relevant to IT practice.
												</td>
											</tr>
											<tr>
												<td height="60px">
													Produces IT related researches relevant to institutional, regional, and national priorities.
												</td>
											</tr>
											<tr>
												<td height="60px">
													Produces IT related researches that are relevant responsive to the needs and concerns of the communities they serve.
												</td>
											</tr>
											<tr>
												<td height="60px">
													Pursues personal development and lifelong learning through research, graduate studies, training, and membership to a professional organization to be globally competitive.
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
			<div id="faculty">
				<div class="table">
					<div class="center-table">
						<div class="header-container">
							<div class="title">Institute of Computer Studies Faculty</div>
						</div>
					</div>
				</div>
				<div class="table">
					<div class="center-table">
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/placeholder.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="faculty-name">Dr. Roderick P. Go</div>
									<div class="faculty-position">Director</div>
								</div>
							</div>
						</div>
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/placeholder.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="faculty-name">Engr. Gadmar M. Belamide, MEnggEd</div>
									<div class="faculty-position">Institute Secretary</div>
								</div>
							</div>
						</div>
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/placeholder.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="faculty-name">Engr. Odon A. Maravillas Jr., MSCS</div>
									<div class="faculty-position">Head, Computer Science</div>
								</div>
							</div>
						</div>
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/placeholder.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="faculty-name">Mr. John Ed Augustus A. Escorial, MIT</div>
									<div class="faculty-position">Head, Information Technology</div>
								</div>
							</div>
						</div>
						<!-- -->
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/placeholder.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="faculty-name">Engr. Edwin I. Arip, MEnggEd</div>
									<div class="faculty-position">External Studies Unit</div>
								</div>
							</div>
						</div>
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/placeholder.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="faculty-name">Mr. Jhon Paul I. Arip</div>
									<div class="faculty-position">Member, LMS Development</div>
								</div>
							</div>
						</div>
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/placeholder.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="faculty-name">Mr. Jaydee C. Ballaho</div>
									<div class="faculty-position">Lead, LMS Development</div>
								</div>
							</div>
						</div>
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/placeholder.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="faculty-name">Mr. Jason A. Catadman</div>
									<div class="faculty-position">Member, LMS Development</div>
								</div>
							</div>
						</div>
						<!-- -->
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/placeholder.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="faculty-name">Ms. Aida A. Escorial, MIT</div>
									<div class="faculty-position">Quality Assurance</div>
								</div>
							</div>
						</div>
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/placeholder.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="faculty-name">Ms. Lucy Felix-Sadiwa</div>
									<div class="faculty-position">Guidance and Gender</div>
								</div>
							</div>
						</div>
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/placeholder.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="faculty-name">Engr. Mark L. Flores, MEnggEd</div>
									<div class="faculty-position">Network Administrator</div>
								</div>
							</div>
						</div>
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/placeholder.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="faculty-name">Ms. Pauleen Jean E. Gregana</div>
									<div class="faculty-position">CERT Associate</div>
								</div>
							</div>
						</div>
						<!-- -->
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/placeholder.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="faculty-name">Engr. Marvic A. Lines, MEnggEd</div>
									<div class="faculty-position">Member, LMS Training & Mngt</div>
								</div>
							</div>
						</div>
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/placeholder.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="faculty-name">Engr. Ceed Jezreel B. Lorenzo, MIT</div>
									<div class="faculty-position">Research</div>
								</div>
							</div>
						</div>
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/placeholder.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="faculty-name">Mr. Leirrand Christian A. Ochotorena</div>
									<div class="faculty-position">Data Protection/IT Officer</div>
								</div>
							</div>
						</div>
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/placeholder.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="faculty-name">Ms. Angeline Chrisette C. Olegario</div>
									<div class="faculty-position">Member, LMS Development</div>
								</div>
							</div>
						</div>
						<!-- -->
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/placeholder.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="faculty-name">Engr. Marjorie A. Rojas</div>
									<div class="faculty-position">Student Affairs</div>
								</div>
							</div>
						</div>
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/placeholder.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="faculty-name">Mr. Salimar B. Tahil, MEnggEd</div>
									<div class="faculty-position">Member, LMS Training & Mngt</div>
								</div>
							</div>
						</div>
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/placeholder.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="faculty-name">Mr. Whesley G. Timpangco</div>
									<div class="faculty-position">CERT Associate</div>
								</div>
							</div>
						</div>
						<div class="core-box">
							<div class="core-image-box">
								<img class="core-image" src="images/placeholder.png">
							</div>
							<div class="dash-footer">
								<div class="core-content">
									<div class="faculty-name">Ms. Jackaria M. Alhadzra</div>
									<div class="faculty-position">Laboratory Technician</div>
								</div>
							</div>
						</div>
						<!-- -->
						<!-- -->
					</div>
				</div>
			</div>
			<div id="history" class="historybanner">
				<div class="table">
					<div class="center-table">
						<div id="banner-title">Institute of Computer Studies</div>
						<div id="banner-title">History</div>
						<div id="historytext" class="text">The ICS is the Institute in Western Mindanao State University. It started on a ladderized program in the year 1994, offering: 2 years Associate Computer Technology, 3 years diploma in Computer Technology, 4 years Bachelor of Computer Science, 5 years Bachelor of Computer Engineering under the College of Engineering and Technology. In the year 2000, the ladderized program was removed. The Computer Engineer and Computer Science was separated, at the same time Computer Science has a major, Information Technology and Software Technology. It was revised in the year 2006 but nothing was change, 2016 last year the curriculum was change and the major was removed, BSCS and BSIT at the same time the ICS become an Institute and it is headed by Dr. Roderick P. Go.
						</div>
					</div>
				</div>
			</div>
			<div id="location"></div>
			<div id="footer">
				<div class="table">
					<div class="center-table">
						<p>Copyright © 2020 Western Mindanao State University Institute of Computer Studies</p>
						<p>All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169281050-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-169281050-1');
		</script>
		<script>
			var icsmap = L.map('location').setView([6.9136, 122.0614], 18);
			icsmap.removeControl(icsmap.zoomControl);
			L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiY2hveWNhdGFkbWFuIiwiYSI6ImNrYmF0ZXczeTByZ3oycHA1ZmJ1aXhkemYifQ.vbq4pYCSENvPwWDSkKglJQ',{
					attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
					maxZoom: 18,
					id: 'mapbox/streets-v11',
					tileSize: 512,
					zoomOffset: -1,
					accessToken: 'your.mapbox.access.token'
				}).addTo(icsmap);
			var marker = L.marker([6.9140, 122.0615]).addTo(icsmap);
			marker.bindPopup("<b>Institute of Computer Studies</b><br>Western Mindanao State University").openPopup();
		</script>
	</body>
</html>