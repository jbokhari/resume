<!DOCTYPE html>
<html lang="en">
<head>
	<title>Jameel Bokhari &#8212; Best Web Developer R&eacute;sum&eacute; Ever</title>
	<meta name="description" content="Web developer, Designer and Problem Solver for hire.">
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./assets/fontawesome/css/fontawesome-all.min.css">
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Montserrat|Bevan|Black+Han+Sans|Candal|Hammersmith+One|Hind|IBM+Plex+Sans|Karla|Passion+One|Paytone+One|Rambla|Reem+Kufi|Righteous|Alegreya+Sans:900" rel="stylesheet">
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
					<div class="ci-item phone"><span class="icon-wrap"><i class="fa fa-mobile-alt"></i></span> <a :href=phoneLink() v-html=formattedPhone() class="contact-phone">
						</a></div>
					<div class="ci-item email">
						<span class="icon-wrap">
						 	<i class="fa fa-envelope"></i>
						 </span> <a :href=mailLink()>{{ person.email }}</a>
					</div>
					<div class="ci-item address-info">
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
								<h4>Contributions</h4>
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
					<h2>Skills Overview</h2>
					<div class="skills">
						<ul>
							<li v-for="skill in skills">
								<span class="rating">
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
								</span>
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
			<a :href="source.repo_link">{{source.repo_text}} {{source.repo_link}}</a>
		</footer>
	</div> <!-- eof #impressume -->
	
</body>

<script>
(function(){

	var d;
	$.ajax({
		url: './data.json',
		type: 'get',
		data: {},
		dataType : "json",
		success: function (data) {
			console.log(data);
			d = data;
			var impressume = new Vue({
			el: '#impressume',
			data: d,
			methods : {
				formatName : function(){
					var name = this.person.first_name + " " + this.person.last_name;
					return (
						name.split('').map(function(a, i){
							console.log(a, i);
							return "<span class='kn-" + i + "'>" + a + "</span>";
						}).join('')
					);
				},
				mailLink : function(){
					return "mailto:" + this.person.email;
				},
				phoneLink : function(){
					return "tel:" + this.person.phone;
				},
				formattedPhone : function(){
					var n = this.person.phone;
					var areacode = n.substring(0,3);
					var fthree = n.substring(3,6);
					var lfour = n.substring(6,10);
					return "<span class='area-code'>" + areacode + "</span> " + "<span>" + fthree + "</span>." + "<span>" + lfour + "</span>";
				},
				skillratingCss : function(rating){
					return "width: " + rating + "%;";
				},
				startToEnd : function(dates){
					var html = dates.start + " &ndash; ";
					html += (dates.end.toLowerCase() == "present") ? "<em>" : "";
					html += dates.end;
					html += (dates.end.toLowerCase() == "present") ? "</em>" : "";
					return html;
				},
				formatProjectLinkForPrint : function(link){
					return link.replace(/^(https?:\/\/)$/, '');
				}
			}
		});
		}
	});

})();
	
</script>
</html>