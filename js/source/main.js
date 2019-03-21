(function($){

	console.log("Oh, hey there.");
	var d;
	$.ajax({
		url: './data.json',
		type: 'get',
		data: {},
		dataType : "json",
		success: function (data) {
			d = data;
			var impressume = new Vue({
			el: '#impressume',
			data: d,
			methods : {
				formatName : function(){
					var name = this.person.first_name + " " + this.person.last_name;
					return (
						name.split('').map(function(a, i){
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
					return "<span class='area-code'>" + areacode + "</span>." + "<span>" + fthree + "</span>." + "<span>" + lfour + "</span>";
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

})(jQuery);