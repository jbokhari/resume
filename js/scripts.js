"use strict";!function(n){console.log("Oh, hey there."),n.ajax({url:"./data.json",type:"get",data:{},dataType:"json",success:function(n){new Vue({el:"#impressume",data:n,methods:{formatName:function(){return(this.person.first_name+" "+this.person.last_name).split("").map(function(n,t){return"<span class='kn-"+t+"'>"+n+"</span>"}).join("")},mailLink:function(){return"mailto:"+this.person.email},phoneLink:function(){return"tel:"+this.person.phone},formattedPhone:function(){var n=this.person.phone;return"<span class='area-code'>"+n.substring(0,3)+"</span>.<span>"+n.substring(3,6)+"</span>.<span>"+n.substring(6,10)+"</span>"},skillratingCss:function(n){return"width: "+n+"%;"},startToEnd:function(n){var t=n.start+" &ndash; ";return t+="present"==n.end.toLowerCase()?"<em>":"",t+=n.end,t+="present"==n.end.toLowerCase()?"</em>":""},formatProjectLinkForPrint:function(n){return n.replace(/^(https?:\/\/)$/,"")}}})}})}(jQuery);
//# sourceMappingURL=scripts.js.map
