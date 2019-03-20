<!DOCTYPE html>
<html lang="en">
<head>
	<title>Jameel Bokhari &#8212; Powerful R&eacute;sum&eacute;</title>
	<meta name="description" content="Web developer, Designer and Problem Solver for hire.">
    <link rel="shortcut icon" href="favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/style.css?n">
	<link rel="stylesheet" href="./assets/fontawesome/css/fontawesome-all.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|IBM+Plex+Sans" rel="stylesheet">
	<!-- production version, optimized for size and speed -->
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<!-- development version, includes helpful console warnings -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="js/scripts.js"></script>
</head>
<body >
	<div class="top decorative">
		
	</div>
	<div id="impressume" class="wrap">
		<header>
			<div class="top-info">
				<div class="contact-info">
					<div  v-if="person.phone" class="ci-item phone"><span class="icon-wrap"><i class="fa fa-mobile-alt"></i></span> <a :href=phoneLink() v-html=formattedPhone() class="contact-phone">
						</a></div>
					<div v-if="person.email" class="ci-item email">
						<span class="icon-wrap">
						 	<i class="fa fa-envelope"></i>
						 </span> <a :href=mailLink()>{{ person.email }}</a>
					</div>
					<div v-if="person.address" class="ci-item address-info">
						<span :data-href="person.address.link">
							<span class="icon-wrap"><i class="fa fa-map-marker-alt"></i></span>
							<span class="address line">{{person.address.street}}</span>
							<span class="address line2">{{person.address.city}}, {{person.address.state}}</span>
							<span class="address line3">{{person.address.zip}}</span>
						</span>
					</div>
				</div>
				<div class="title">
					<h1 :data-person="person.first_name + ' ' + person.last_name" v-html="formatName()"></h1>
					<div class="subheader" v-html="person.page_headline"></div>
				</div>
			</div>
		</header>
		<div class="grid-wrap">
			<main>
				<section class="job-list">
					<h2>Work History</h2>
					<div v-for="job in work_history">
						<div class="job-item">
							<h3 class="job-header "><span class="role" v-html=job.role></span> <span class="snail">@</span> <span class="place" v-html=job.company></span></h3>
							<div class="job-details">
								<p>{{job.location.city}}, {{job.location.state}}.
								<span v-html=startToEnd(job.data)></span><p>
								<!-- <h4>Contributions</h4> -->
								<ul class="contributions">
									<li v-for="win in job.contributions" v-html=win></li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<section class="references">
					<h2>{{references.header}}</h2>
					<p><em>{{references.text}}</em></p>
				</section>
			</main>
			<aside class="side">
				<div class="headshot large"><img :src="person.headshot.src" :alt="person.headshot.alt"></div>
				<section class="tagline">
					<p class="short-text">{{person.short_text}}</p>
				</section>
				<section class="skills-overview">
					<h2>{{skills.header}}</h2>
					<div class="skills">
						<ul>
							<li v-for="skill in skills.skills">
								<!-- <span class="rating">
									<span class="overlay" :style=skillratingCss(skill.rating)>
										<span class="fullstar">&#9733;</span>
										<span class="fullstar">&#9733;</span>
										<span class="fullstar">&#9733;</span>
										<span class="fullstar">&#9733;</span>
										<span class="fullstar">&#9733;</span>
									</span>
									<span class="bg">
										<span class="hollowstar">&#9734;</span>
										<span class="hollowstar">&#9734;</span>
										<span class="hollowstar">&#9734;</span>
										<span class="hollowstar">&#9734;</span>
										<span class="hollowstar">&#9734;</span>
									</span>
								</span> -->
								<span class="skill-name" v-html="skill.name"></span>
							</li>
						</ul>
					</div>
				</section>
				<section class="projects">
					<h2>{{projects.header}}</h2>
					<ul>
						<li v-for="project in projects.builds">
							<div class="project-item">
								<div><a :href="project.link" :data-project-print="formatProjectLinkForPrint(project.link)" rel="nofollow" target="_blank">{{project.name}} <span class="nsfw" v-if="project.nsfw === true">nsfw</span></a></div>
				
								<!-- <p>Roles: <ul v-for="role in project.roles">
									<li>{{role}}</li>
								</ul>
								</p> -->
								<!-- <p>Type: {{project.type}}</p> -->
								<!-- <p>Website: {{project.link}}</p> -->
								<!-- <p>{{project.short_description}}</p> -->
							</div>
						</li>
					</ul>
				</section>
				<section class="online-presence">
					<h2>{{online_presence.header}}</h2>
					<ul>
						<li v-for="link in online_presence.links">
							<a :href="link.href" rel="nofollow" target="_blank"><i :class="'fab fa-' + link.icon"></i>{{link.title}}</a>
						</li>
					</ul>
				</section>
			</aside>
		</div>
		<footer class="bottom">
			<a class="web-only" :href="source.web.repo_link">{{source.web.repo_text}} {{source.web.repo_link}}</a>
			<span class="print-only">{{source.print.repo_text}}</span>
			<span class="print-only"></span>
		</footer>
	</div> <!-- eof #impressume -->
	
</body>

<script>

	
</script>
</html>