jQuery(function() {
	(function($){
        //you jQ code here

        // placeholder fix for IE
        // $('input, textarea').placeholder();

        //carousel init
        //   if($('.carousel')){
        	// $('.carousel').tinycarousel({
        //           animationTime : 500
        //       });
        //   }

        //gallery init
        // if($("[id^='zoom-gallery']")){
        //     $.each($("[id^='zoom-gallery']"), function(){
        //         $(this).magnificPopup({
        //             delegate: 'a',
        //             type: 'image',
        //             closeOnContentClick: false,
        //             closeBtnInside: false,
        //             mainClass: 'mfp-with-zoom mfp-img-mobile',
        //             image: {
        //                 verticalFit: true,
        //                 titleSrc: function(item) {
        //                     // return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
        //                     return false;
        //                 }
        //             },
        //             gallery: {
        //                 enabled: true
        //             },
        //             zoom: {
        //                 enabled: true,
        //                 duration: 300, // don't foget to change the duration also in CSS
        //                 opener: function(element) {
        //                     return element.find('img');
        //                 }
        //             }
        //         });
        //     });
        // }
		
	// slider..
	// var container = $('#slider-container');
	// if (container){
		
	// 	var
	// 	slideDuration = 8000,
	// 	count = container.find('li').length,
	// 	current = 0,
	// 	interval,
	// 	step = container.width(),
	// 	block = false,
	// 	showDots = false,
	// 	w = step*count;
		
	// 	container.find('li').css({'width': step});
	// 	container.css({'width':  w});
		
	// 	if(showDots){
	// 		var ul = $('<ul class="slider-dots unstyled"></ul>');
			
	// 		for (var i = 0; i < count; i++){
	// 			var li = $('<li class = "dot' + (i == 0 ? ' active' : '') + '" id ="'+i+'"></li>');
	// 			li.click(function(e){
	// 						// clearInterval(interval);
	// 						current = 0;
	// 						show(e.target.id);
	// 			});
	// 			ul.append(li);
	// 		}
	// 	container.parent().append(ul);
	// 	}
		
	// 	var show = function(v) { 
	// 		if (block) return;
	// 		block = true;
	// 		current += v || 1;
	// 		if (current >= count) current = 0;
	// 		if (current < 0) current = count-1;
	// 		container.animate({'margin-left' : -step*current}, 500, function(){block = false});
	// 		if(ul){
	// 			ul.find('li').each(function(i, el){
	// 					el[i == current ? 'addClass' : 'removeClass']('active');
	// 			})
	// 		}
	// 	};
		
	// 	container.next = function(){show()}
	// 	container.prev = function(){show(-1)}
	// 	container.nav = function(i){current = i;show(0)}
	// 	container.parent().find('.slider-next').click(function(e){
	// 		e.preventDefault();
	// 		container.next();
	// 	});
	// 	container.parent().find('.slider-prev').click(function(e){
	// 		e.preventDefault();
	// 		container.prev();
	// 	});	
	// 	//interval = show.periodical(slideDuration);
	// }	
	// ..slider

        // form uploader
        // if($('#file')){
        //     $('#file').change(function(){
        //         $('#file').each(function() {
        //             var name = this.value;
        //                 reWin = /.*\\(.*)/;
        //             var fileTitle = name.replace(reWin, "$1");
        //             reUnix = /.*\/(.*)/;
        //             fileTitle = fileTitle.replace(reUnix, "$1");
        //             $('#filename > .flname').text(fileTitle);
        //             $('#filename').show();
        //         });
        //     });

        //     $('#remove-file').click(function(event){
        //             // event.preventDefault();
        //             var control = $('.upload-control');
        //             control.replaceWith( control = control.clone( true ) );
        //             $('#filename').hide();
        //     });
        // }
        // ..form uploader

        //map..
        // if ($('#map-wrapper').length){
        //     var map;
        //     function initialize() {
        //         var mapOptions = {
        //             zoom: 17,
        //             center: new google.maps.LatLng(55.242512, 61.420713),
        //             scrollwheel: false,
        //             zoomControl: true,
        //             streetViewControl: false,
        //             mapTypeId: google.maps.MapTypeId.ROADMAP
        //             };

        //             map = new google.maps.Map(document.getElementById('map-wrapper'),
        //               mapOptions);

        //             var markerLatlng = new google.maps.LatLng(55.242512, 61.420713);
        //             var myMarker = new google.maps.Marker({
        //               position: markerLatlng,
        //               map: map,
        //         });

        //         var contentString = '<div id="content">Хлебозаводская, 7А</div>';
        //         var infowindow = new google.maps.InfoWindow({
        //             content: contentString
        //         });
        //         google.maps.event.addListener(myMarker, 'click', function() {
        //             infowindow.open(map,myMarker);
        //         });

        //     }

        //     google.maps.event.addDomListener(window, 'load', initialize);
        // }
        //..map

        //form submit
        // $jbtn = $('.btn-jsend-submit');
        // if($jbtn){
        //     $jbtn.on('click', function(e){
        //         e.preventDefault();
        //         $jform = $(this).parent();
        //         url = ($jform.attr('action') == '/index.php') ? $jform.attr('action') + '/?tmpl=send' : $jform.attr('action');
        //         $jform.attr('action', url);
        //         if(($jform).validate()){
        //             $jform.submit();
        //         } 
        //     });
        // }

	})(jQuery);
});

// tinycarousel..
// ;(function(factory)
// {
//     if(typeof define === 'function' && define.amd)
//     {
//         define(['jquery'], factory);
//     }
//     else if(typeof exports === 'object')
//     {
//         factory(require('jquery'));
//     }
//     else
//     {
//         factory(jQuery);
//     }
// }
// (function($)
// {
//     var pluginName = "tinycarousel"
//     ,   defaults   =
//         {
//             start:          1      // The starting slide
//         ,   axis:           "x"    // vertical or horizontal scroller? ( x || y ).
//         ,   buttons:        true   // show left and right navigation buttons.
//         ,   bullets:        false  // is there a page number navigation present?
//         ,   interval:       false  // move to another block on intervals.
//         ,   intervalTime:   4000   // interval time in milliseconds.
//         ,   animation:      true   // false is instant, true is animate.
//         ,   animationTime:  400   // how fast must the animation move in ms?
//         }
//     ;

//     function Plugin($container, options)
//     {
//         this.options   = $.extend({}, defaults, options);
//         this._defaults = defaults;
//         this._name     = pluginName;

//         var self      = this
//         ,   $viewport = $container.find(".viewport:first")
//         ,   $overview = $container.find(".overview:first")
//         ,   $slides   = 0
//         ,   $next     = $container.find(".next:first")
//         ,   $prev     = $container.find(".prev:first")
//         ,   $bullets  = $container.find(".bullet")

//         ,   viewportSize    = 0
//         ,   contentStyle    = {}
//         ,   slidesVisible   = 0
//         ,   slideSize       = 0

//         ,   isHorizontal  = this.options.axis === 'x'
//         ,   sizeLabel     = isHorizontal ? "Width" : "Height"
//         ,   posiLabel     = isHorizontal ? "left" : "top"
//         ,   intervalTimer = null
//         ;

//         this.slideCurrent = 0;
//         this.slidesTotal  = 0;


//         function initialize()
//         {
//             self.update();
//             self.move();

//             setEvents();

//             return self;
//         }

//         this.update = function()
//         {
//             $slides          = $overview.children();
//             viewportSize     = $viewport[0]["offset" + sizeLabel];
//             slideSize        = $slides.first()["outer" + sizeLabel](true);
//             self.slidesTotal = $slides.length;
//             slideCurrent     = self.options.start || 0;
//             slidesVisible    = Math.ceil(viewportSize / slideSize);

//             $overview.css(sizeLabel.toLowerCase(), slideSize * self.slidesTotal);
//         };

//         function setEvents()
//         {
//             if(self.options.buttons)
//             {
//                 $prev.click(function(e)
//                 {
//               		e.preventDefault();
//               		if( (self.slideCurrent - 1 ) < 0 ){
//               			return self.move(self.slidesTotal);
//               		}
//                   return self.move(self.slideCurrent - 1);
//                 });

//                 $next.click(function(e)
//                 {	
//                 	e.preventDefault();	
//                 	if( (self.slideCurrent + 5) > self.slidesTotal ){
//               			return self.move(0);
//                 	}
//                   return self.move(self.slideCurrent + 1);
//                 });
//             }

//             if(self.options.bullets)
//             {
//                 $container.on("click", ".bullet", function()
//                 {
//                     return self.move(+$(this).attr("data-slide"));
//                 });
//             }
//         }

//         this.start = function()
//         {
//             if(self.options.interval)
//             {
//                 clearTimeout(intervalTimer);

//                 intervalTimer = setTimeout(function()
//                 {
//                     self.move(self.slideCurrent + 1);

//                 }, this.options.intervalTime);
//             }
//         };

//         this.stop = function()
//         {
//             clearTimeout(intervalTimer);
//         };

//         this.move = function(slideIndex)
//         {
//             self.slideCurrent = Math.max(0, Math.min(slideIndex || 0, self.slidesTotal - slidesVisible));

//             contentStyle[posiLabel] = -self.slideCurrent * slideSize;

//             $overview.animate(
//                 contentStyle
//             ,   {
//                     queue    : false
//                 ,   duration : this.options.animation ? this.options.animationTime : 0
//                 ,   complete : function()
//                     {
//                         $container.trigger("move", [$slides[self.slideCurrent], self.slideCurrent]);
//                     }
//             });

//             setButtons();
//             self.start();

//             return false;
//         };

//         function setButtons()
//         {
//             if(self.options.buttons)
//             {
//                 // $prev.toggleClass("disable", self.slideCurrent <= 0);
//                 // $next.toggleClass("disable", self.slideCurrent >= self.slidesTotal - slidesVisible);
//             }

//             if(self.options.bullets)
//             {
//                 // $bullets.removeClass("active");
//                 // $($bullets[self.slideCurrent]).addClass("active");
//             }
//         }

//         return initialize();
//     }

//     $.fn[pluginName] = function(options)
//     {
//         return this.each(function()
//         {
//             if(!$.data(this, "plugin_" + pluginName))
//             {
//                 $.data(this, "plugin_" + pluginName, new Plugin($(this), options));
//             }
//         });
//     };
// }));
// ..tinycarousel

/*! tinycarousel - v2.1.4 - 2014-03-23
 * http://www.baijs.com/tinycarousel
 *
 * Copyright (c) 2014 Maarten Baijs <wieringen@gmail.com>;
 * Licensed under the MIT license */
!function(a){"function"==typeof define&&define.amd?define(jQuery||["jquery"],a):"object"==typeof exports?a(jQuery||require("jquery")):a(jQuery)}(function(a){function b(b,e){function f(){return i.update(),i.move(i.slideCurrent),g(),i}function g(){i.options.buttons&&(n.click(function(){return i.move(--t),!1}),m.click(function(){return i.move(++t),!1})),a(window).resize(i.update),i.options.bullets&&b.on("click",".bullet",function(){return i.move(t=+a(this).attr("data-slide")),!1})}function h(){i.options.buttons&&!i.options.infinite&&(n.toggleClass("disable",i.slideCurrent<=0),m.toggleClass("disable",i.slideCurrent>=i.slidesTotal-r)),i.options.bullets&&(o.removeClass("active"),a(o[i.slideCurrent]).addClass("active"))}this.options=a.extend({},d,e),this._defaults=d,this._name=c;var i=this,j=b.find(".viewport:first"),k=b.find(".overview:first"),l=0,m=b.find(".next:first"),n=b.find(".prev:first"),o=b.find(".bullet"),p=0,q={},r=0,s=0,t=0,u="x"===this.options.axis,v=u?"Width":"Height",w=u?"left":"top",x=null;return this.slideCurrent=0,this.slidesTotal=0,this.update=function(){return k.find(".mirrored").remove(),l=k.children(),p=j[0]["offset"+v],s=l.first()["outer"+v](!0),i.slidesTotal=l.length,slideCurrent=i.options.start||0,r=Math.ceil(p/s),k.append(l.slice(0,r).clone().addClass("mirrored")),k.css(v.toLowerCase(),s*(i.slidesTotal+r)),i},this.start=function(){return i.options.interval&&(clearTimeout(x),x=setTimeout(function(){i.move(++t)},i.options.intervalTime)),i},this.stop=function(){return clearTimeout(x),i},this.move=function(a){return t=a,i.slideCurrent=t%i.slidesTotal,0>t&&(i.slideCurrent=t=i.slidesTotal-1,k.css(w,-i.slidesTotal*s)),t>i.slidesTotal&&(i.slideCurrent=t=1,k.css(w,0)),q[w]=-t*s,k.animate(q,{queue:!1,duration:i.options.animation?i.options.animationTime:0,always:function(){b.trigger("move",[l[i.slideCurrent],i.slideCurrent])}}),h(),i.start(),i},f()}var c="tinycarousel",d={start:0,axis:"x",buttons:!0,bullets:!1,interval:!1,intervalTime:3e3,animation:!0,animationTime:1e3,infinite:!0};a.fn[c]=function(d){return this.each(function(){a.data(this,"plugin_"+c)||a.data(this,"plugin_"+c,new b(a(this),d))})}});