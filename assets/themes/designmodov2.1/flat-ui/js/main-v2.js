jQuery(document).ready(function() {
	
	jQuery('#buynowbutton').after('<a href="http://designmodo.github.io/Flat-UI/" target="_blank" class="btn demo">View Demo</a>');
	
	if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
		window.mobile = true;
	} else {
		window.mobile = false;
	} 
        
        // Show / Hide comments via AJAX
        function load_comments(post_id, cpage, element) {
            var list_div = jQuery(element);

            if (list_div.html() == '') {
                list_div.html('Loading...');

                jQuery.ajax({
                    type: 'post',
                    url: '/wp-admin/admin-ajax.php',
                    data: 'post_id=' + post_id + '&cpage=' + cpage + '&action=dm_show_comments',
                    success: function(response) {
                        list_div.html(response);
                    }
                });
            }
        }
        
        // Show / Hide comments trigger
	jQuery(document).on('click', '#flat_ui_comments_trigger', function(){
		var comments_trigger = jQuery(this);
		load_comments(jQuery(this).data('post-id'), jQuery(this).data('cpage'), '.flat_ui_comments_list_ajax');
            
                if (!jQuery('.flat_ui_comments_list').is(':visible')) {
                    jQuery('.flat-comments-wrapper .slide_wrapper').slideUp(400, function() {
                        jQuery('.comments-wrapper').removeClass('flat-comments-wrapper');
                        jQuery('.flat_ui-comments-title').css('margin-top', '0px');
                        jQuery('.flat_ui_comments_list').toggle(400);
                    });
                }
	});   
        
        // Show comments when #comments- in url hash
        var page_hash = window.location.hash;
        if(page_hash != '' && page_hash.match(/comment-/g)){
            jQuery('#flat_ui_comments_trigger').click();
        }
			
	//SWTICH SVG TO PNG
	if ((!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image", "1.1"))||(window.mobile)) {
 		jQuery('.svg').remove();
		jQuery('.nosvg').attr('style','display:block !important;');
	}
	
	if (!window.mobile) { 
		jQuery('.zoomify').click(function(a){
			jQuery('html').addClass('noscroll');
			var widthStr = '';
			if (jQuery(this).attr('data')) { 
				widthStr = ' style="width: '+jQuery(this).attr("data")+'px"';
			}
			jQuery('body').addClass('noscroll').append('<div class="previewer"><span class="loading"></span><img src="'+jQuery(this).attr('href')+'" class="largeimage"'+widthStr+'/></div>');
				
			jQuery(".previewer").click(function(){
				jQuery('html').removeClass('noscroll');
				jQuery('body').removeClass('noscroll');
				jQuery(this).remove();
			});
			jQuery('.largeimage').load(function(){ 
				jQuery('.largeimage').addClass('animated');
				jQuery('.loading').remove();
			});
			
			return false;
		});
	}
	
	jQuery(document).scroll(function(){ init(); });
	
	jQuery(document).resize(function(){ init(); });
	var i = 0; var paddingForMobile = 0;
	
	function init(){
		var baseSection = jQuery('.base-section').offset();
		var itemSection = jQuery('.item-section').offset();
		var responsiveSection = jQuery('.responsive-section').offset();
		var swatchSection = jQuery('.swatch-section').offset();
		var iconSection = jQuery('.icon-section').offset();
		var shareSection = jQuery('.share-section').offset();
		
		if (window.mobile) paddingForMobile = 500;
		
		if (jQuery(document).scrollTop() >= baseSection.top - jQuery(window).height()+700-paddingForMobile){
			jQuery('.base-section .holder').addClass("highlight");
		}
		
		if ( jQuery(document).scrollTop() >= responsiveSection.top - jQuery(window).height()+300-paddingForMobile){
			showResponsive();
		}
			
		if ( jQuery(document).scrollTop() >= swatchSection.top - jQuery(window).height()-paddingForMobile){
			showSwatchSection();
		}
			
		if ( jQuery(document).scrollTop() >= iconSection.top - jQuery(window).height()+300-paddingForMobile){
			showIconSection();
		}
		
		if ( jQuery(document).scrollTop() >= itemSection.top - jQuery(window).height()+300-paddingForMobile){
			showFeatures();
		}
		
		if ( jQuery(document).scrollTop() >= shareSection.top - jQuery(window).height()+300-paddingForMobile){
			jQuery("#counts").animateNumber(window.newNumber,{easing:"easeInOutCirc",duration:1000,floatStepDecimals:0});
		}		
	}
	init();
	
	var showResponsiveRunning = 0;
	function showResponsive(){
		if (showResponsiveRunning == 0){
			jQuery('.responsive-iphone').css('left',0).css('opacity',1);
			showResponsiveRunning = 1;
		}
	}
	
	var showSwatchSectionRunning = 0;
	function showSwatchSection(){
		if (showSwatchSectionRunning == 0){
			jQuery('#colorful-icon').css('background-color',"rgb(26, 188, 156)");
			showSwatchSectionRunning = 1;
		}
	}
	
	var showIconSectionRunning = 0;
	function showIconSection(){
		if (showIconSectionRunning == 0){
			showIconSectionRunning = 1;
			jQuery('#icon-heart').addClass('animated');
		}
	}
	
	var showFeaturesRunning = 0; var i = 0;
	function showFeatures(){
		if (showFeaturesRunning == 0){
			jQuery('.item-list li').each(function(){
				jQuery(this).delay(jQuery(this).index()*50).animate({opacity:1},0);
			});
			showFeaturesRunning = 1;
		}
	}
	
	//SWATCHES CHANGE
	jQuery('.color-list li span').click(function(){
		jQuery('.color-list li.selected').removeClass('selected');
		jQuery(this).parent().addClass('selected');
		var colors = new Array('#1abc9c','#2dc86f','#3498db','#9b59b6','#f1c40f','#e67e22','#e74c3c','#34495e','#ecf0f1','#95a5a6');
		jQuery('#colorful-icon').css('background-color',colors[jQuery(this).parent().index()]);
	});
	jQuery('#colorful-icon').click(function(){
		jQuery('.color-list li.selected').nextOrFirst('li').find('span').click();
	});
	
	
	//RESPONSIVE TOGGLES
	jQuery('.mobile-list li div').click(function(){
		
		if (jQuery(this).hasClass('selected')){
			
			jQuery('.mobile-list li div').not('selected').addClass('selected');
			jQuery(this).removeClass('selected');
			
			if (jQuery('.responsive-ipad').is(':visible')){
		jQuery('.responsive-iphone').show().animate({left:0, opacity:1},{duration:0});
		jQuery('.responsive-ipad').removeAttr('style').hide();
			} else if (jQuery('.responsive-iphone').is(':visible')) {
		jQuery('.responsive-ipad').show().animate({left:0, opacity:1},{duration:0});
		jQuery('.responsive-iphone').removeAttr('style').hide();
			}
		}
	});
	
	//PROTOTYPING PAGINATION
	jQuery('.prototype-section .pr-navigation li').click(function(){
		if (!jQuery(this).hasClass('active')){
			jQuery('.prototype-section .pr-navigation li.active').removeClass('active');
			jQuery(this).addClass('active');
			
			jQuery('.prototype-section .pr-block div').not(".hidden").addClass('hidden');
			jQuery('.prototype-section .pr-block div:eq('+jQuery(this).index()+')').removeClass('hidden');
			
			jQuery('.prototype-section .pr-block div:eq('+jQuery(this).index()+') span').each(function(index) {
				pos = jQuery(this).css('left');
				jQuery(this).css('left',"+=10").css('opacity',0).delay(jQuery(this).index()*50).animate({left:pos, opacity:1},{duration:500,easing:"easeOutCubic"});
			});
			
		}
	});
	
	//PROTOTYPING NEXT
	jQuery('#pr-site, #pr-blog, #pr-page').click(function(){
		jQuery('.prototype-section .pr-navigation li.active').nextOrFirst('li').click();
	});
	
	//LICENSE CHANGE
	jQuery('.license-list li span').click(function(){
		if (jQuery(this).parent().attr('class') != 'active'){
			jQuery('.license-list li.active').removeClass('active'); 
			jQuery(this).parent().addClass('active');
			jQuery('.boxes.developer').slideToggle(300);
			jQuery('.boxes.personal').slideToggle(300);
			jQuery('.boxes.personal').before( jQuery('.boxes.developer') );
		}
	});
	
	//================================================================================================
	//================================================================================================
	//==================================                            ==================================
	//==================================        SVG ANIMATION       ==================================
	//==================================                            ==================================
	//================================================================================================
	//================================================================================================
	
	//CLOCK ANIMATION
	function startTicking(){
		newInt = window.setInterval(function(){
			
			var d = new Date();
			var h = d.getHours();
			var m = d.getMinutes();
			var s = d.getSeconds();
			
			h = (h > 12)? h -12 : h;
			h = (h == '00')? 12 : h;
			
			var secangle = (s)*6;
			var minangle = (m)*6;
			var hrsangle = h*30;
			
			jQuerysvg = jQuery("#clock");
			
			if(s == 0){
		jQuery("#sec", jQuerysvg).attr('transform', "rotate("+secangle+",50,50)");
			}
			
			jQuery("#sec", jQuerysvg).animate({svgTransform: 'rotate('+secangle+',50,50)'}, {duration: 400, easing: 'easeOutElastic'});
			jQuery("#min", jQuerysvg).animate({svgTransform: 'rotate('+minangle+',50,50)'}, {duration: 600, easing: 'easeOutElastic'});
			jQuery("#hrs", jQuerysvg).animate({svgTransform: 'rotate('+hrsangle+',50,50)'}, {duration: 800, easing: 'easeOutElastic'});
			
		}, 1000);
	} 
	jQuery('#clock').hover(function(){
	
		var d = new Date();
		var h = d.getHours();
		var m = d.getMinutes();
		var s = d.getSeconds();
		
		h = (h > 12)? h -12 : h;
		h = (h == '00')? 12 : h;
		
		var secangle = (s)*6;
		var minangle = (m)*6;
		var hrsangle = h*30;
		
		jQuerysvg = jQuery("#clock");
		
		jQuery("#sec", jQuerysvg).animate({svgTransform: 'rotate('+secangle+',50,50)'}, {duration: 400, easing: 'easeOutElastic'});
		jQuery("#min", jQuerysvg).animate({svgTransform: 'rotate('+minangle+',50,50)'}, {duration: 400, easing: 'easeOutElastic'});
		jQuery("#hrs", jQuerysvg).animate({svgTransform: 'rotate('+hrsangle+',50,50)'}, {duration: 600, easing: 'easeOutElastic'});
		
		startTicking();
	
	}, function(){
		window.clearInterval(newInt);	
	});
	
	
	//================================================================================================
	//SWATCHES
	jQuery('#swatches').hover(function(){
		jQuerysvg = jQuery('#swatches');
		rotate();
		
	}, function(){
		jQuery('#body-1').stop(true).animate({svgFill: "#29bb9c"}, 500);
		jQuery('#body-2').stop(true).animate({svgFill: "#e54d42"}, 500);
		
	}).click(function(){
		jQuerysvg = jQuery('#swatches');
		var colors = new Array('#1abc9c','#2dc86f','#3498db','#9b59b6','#f1c40f','#e67e22','#e74c3c','#34495e');
		
		newcolor1 = getRandomInt(0,colors.length)
		newcolor2 = getRandomInt(0,colors.length)
		
		if (newcolor1 == newcolor2) { newcolor1 = getRandomInt(0,colors.length); }
		
		jQuery('#body-1').stop(true).animate({svgFill: colors[newcolor1]}, 500);
		jQuery('#body-2').stop(true).animate({svgFill: colors[newcolor2]}, 500);
		
		rotate();
	});
	newangle = 0;
	function rotate(){
		newangle = newangle - 180;
		jQuery('#pen-1',jQuerysvg).stop(true).animate({svgTransform: 'rotate('+newangle+',50,50)'}, {duration: 1400, easing: 'easeOutElastic'});
		jQuery('#pen-2',jQuerysvg).stop(true).animate({svgTransform: 'rotate('+newangle+',50,50)'}, {duration: 1500, easing: 'easeOutElastic'});
		
		var nf1 = jQuery('#inner-2',jQuerysvg).attr('fill');
		var nf2 = jQuery('#inner-1',jQuerysvg).attr('fill');
	}
	
	
	//================================================================================================
	//RESPONSIVE ICON
	h = 1;
	jQuery('#responsive').click(function() {
		jQuerysvg = jQuery('#responsive');
		
		var colors = new Array('#1abc9c','#2ecc71','#3498db','#f1c40f','#ebedee','#e74c3c');
		newcolor1 = colors[getRandomInt(0,colors.length)];
		newcolor2 = shadeColor(newcolor1,-10);
		
		jQuery('#window-screen2').stop().clearQueue().animate({svgFill:newcolor1},500);
		jQuery('#window-screen1').stop().clearQueue().animate({svgFill:newcolor2},600);
		
		jQuery('#iphone-screen2').stop().clearQueue().animate({svgFill:newcolor1},500);
		jQuery('#iphone-screen1').stop().clearQueue().animate({svgFill:newcolor2},600);

	}).hover(function(){
		
		jQuerysvg = jQuery('#responsive');
		jQuery('#responsive-window').stop().animate({svgTransform:"translate(20,-15)"},{duration:500,easing:"easeInOutQuad"});
		jQuery('#responsive-iphone').stop().animate({svgTransform:"translate(-52,12)"},{duration:500,easing:"easeInOutQuad"});
		jQuery('#shade',jQuerysvg).stop().animate({opacity:0},{duration:100,easing:"easeInOutQuad"});
		
	},function(){
		jQuerysvg = jQuery('#responsive');
		jQuery('#responsive-window').stop().animate({svgTransform:"translate(0)"},{duration:500,easing:"easeInOutQuad"});
		jQuery('#responsive-iphone').stop().animate({svgTransform:"translate(0)"},{duration:500,easing:"easeInOutQuad",complete:function(){jQuery('#iphone-shade').show();}});
		jQuery('#shade',jQuerysvg).stop().animate({svgTransform:"translate(0)",opacity:0.2},{duration:500,easing:"easeInOutQuad"});
	});
	
	
	//================================================================================================
	//B00TSTRAP ICON
	var jQuerysvg = jQuery("#bootstrap");
	var dragging = false;
	var degree = 0;
	jQuery('#bootstrap').on('mousedown',function(e){
        dragging = true;
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop - 154;
		var radians = Math.atan2(x - 50, y - 50);
		window.degreeOnClick = (radians * (180 / Math.PI) * -1) + 90;
	}).on('mousemove',function(e){
		
		if (dragging) {
			
			var x = e.pageX - this.offsetLeft;
			var y = e.pageY - this.offsetTop - 154;
			if (jQuery('.header-banner').is(":visible")){
				y = y - jQuery('.header-banner').height()
			}
			
			if (jQuery.browser.mozilla) y = y + 238; 
		
			var radians = Math.atan2(x - 50, y - 50);
			var degree = (radians * (180 / Math.PI) * -1) + 90;
			degree = Math.round(degree - window.degreeOnClick);
			var jQuerysvg = jQuery("#bootstrap");
			jQuery('#all-lines',jQuerysvg).stop().clearQueue().attr('transform','rotate('+degree+',50,50)');
		}
	}).hover(function(){
		
		animateBootstrap = window.setInterval(function(){
			var jQuerysvg = jQuery("#bootstrap");
			
			var newX = 70;
			var newY = 86;
			
			var lines = new Array("line-1","line-1-2","line-2","line-2-3","line-3","line-3-4","line-4","line-4-5","line-5","line-5-6","line-6");
			var opac = new Array("0","1");
			
			jQuery("#"+lines[getRandomInt(0,11)], jQuerysvg).animate({opacity: opac[getRandomInt(0,1)]}, {duration: 250, easing: 'easeOutCubic'});
		}, 250);
		
		animateBootstrap2 = window.setInterval(function(){
			var jQuerysvg = jQuery("#bootstrap");
			jQuery('#bootstrap-bg, #circle-1, #circle-2, #circle-3, #circle-4, #circle-5, #circle-6', jQuerysvg).animate({svgFill: '#34495e'}, {duration: 1500, easing: 'easeInOutQuad'}).animate({svgFill: '#4A245A'}, {duration: 1500, easing: 'easeInOutQuad'});
		}, 3000);
		
	}, function(){
		
		window.clearInterval(animateBootstrap);
		window.clearInterval(animateBootstrap2);
	
	});
	
	jQuery(document).on('mouseup',function(){
        dragging = false;
		var jQuerysvg = jQuery("#bootstrap");
		jQuery('#all-lines',jQuerysvg).stop().clearQueue().animate({svgTransform: 'rotate(0,50,50)'}, {duration: 1000, easing: 'easeOutElastic'});
	});
	
	
	//================================================================================================
	//SPACESHIP ANIMATION
	var up = 1;
	function animateSpaceship(){
		
		if (up == 1){
			area = 30;
			distance1 = getRandomInt(20,30);
			distance2 = distance1;
			
			speed = 1986;
			
			var translate1 = "translate(-"+distance1+","+distance2+")";
			var translate2 = "translate("+distance1+",-"+distance2+")";
			up = 0;
		} else {
			distance1 = getRandomInt(1,10)
			distance2 = getRandomInt(1,10);
			
			speed = 1986;
			
			var translate1 = "translate(-"+distance1+","+distance2+")";
			var translate2 = "translate("+distance1+",-"+distance2+")";
			up = 1;
		}
		
		jQuerysvg = jQuery('#spaceship');
		
		jQuery('#rocket-raw',jQuerysvg).animate({svgTransform: translate1},{duration:speed,easing:"easeInOutQuad"});
		jQuery('#rocketmask1',jQuerysvg).animate({svgTransform: translate2},{duration:speed,easing:"easeInOutQuad"});
	};

	var speedmin = 1000;
	var speedmax = 2000;
	function animateStar(what){
		function randomate(type){
			if (type == 'speed'){
		return getRandomInt(speedmin,speedmax);
			} else if (type == 'pos') {
		
		if (getRandomInt(0,1) == 1){
			posx = 0;
			posy = getRandomInt(25,80);
		} else {
			posy = 0;
			posx = getRandomInt(25,80);
		}
		
		var result = new Array('translate('+(10-posx)+','+(-10+posy)+')','translate('+(-110-posx)+','+(110+posy)+')');
		return result;
			} else if (type == 'delay'){
		return getRandomInt(0,1000);
			}
		}
			
		jQuerysvg = jQuery('#spaceship');
			
		var position = randomate('pos');
		jQuery(what).attr('transform',position[0]).delay(randomate('delay')).animate({svgTransform: position[1]},{duration:randomate('speed'),complete:function(){ animateStar(this); },easing:'linear'});
	}

	
	jQuery('#spaceship').hover(
		function(){
			animateSpaceship();
			liftSpaceship = window.setInterval(function(){
				animateSpaceship();
			}, 2000);
			
			animateStar(jQuery('#star0', jQuery('#spaceship')));
			animateStar(jQuery('#star1', jQuery('#spaceship')));
			animateStar(jQuery('#star2', jQuery('#spaceship')));
			
		}, function(){
			window.clearInterval(liftSpaceship);
			
			var translate1 = "translate(0,0)";
			var translate2 = "translate(0,0)";
			jQuery('#rocket-raw',jQuerysvg).clearQueue().stop().animate({svgTransform: translate1},500);
			jQuery('#rocketmask1',jQuerysvg).clearQueue().stop().animate({svgTransform: translate2},500);
			
			jQuery('#star0', jQuery('#spaceship')).animate({svgTransform:'translate(+=100,+=100)'},{duration:500,complete:function(){jQuery(this).clearQueue()}});
			jQuery('#star1', jQuery('#spaceship')).animate({svgTransform:'translate(+=100,+=100)'},{duration:500,complete:function(){jQuery(this).clearQueue()}});
			jQuery('#star2', jQuery('#spaceship')).animate({svgTransform:'translate(+=100,+=100)'},{duration:500,complete:function(){jQuery(this).clearQueue()}});
			jQuery('#star3', jQuery('#spaceship')).animate({svgTransform:'translate(+=100,+=100)'},{duration:500,complete:function(){jQuery(this).clearQueue()}});
			
	});
	
	//================================================================================================
	//RETINA ICON
	jQuerysvg = jQuery('#retina');
	if (jQuery.browser.webkit){
		jQuery('#retina').on('mousemove',function(e){
			
			var x = e.pageX - jQuery(this).position().left;
			var y = e.pageY - jQuery(this).position().top - 154;
			
			
			if (jQuery('.header-banner').is(":visible")){
				y = y - jQuery('.header-banner').height();
			}
			
			if (x < 30) x = 30; if (x > 86) x = 86; 
			if (y < 28) y = 28; if (y > 75) y = 75;
			
			jQuery('#lens',jQuery(this)).attr('transform','translate('+x+','+y+')');
			var largeGlyphPosX = x*2;
			var largeGlyphPosY = y*2;
			jQuery('#largeGlyph',jQuery(this)).attr('transform','translate('+(0-largeGlyphPosX)+','+(0-largeGlyphPosY)+')');
			jQuery('#lensmask',jQuery(this)).attr('transform','translate('+((x*2)+1)+','+(y*2)+')');
			jQuery(this).css('cursor','none');
		}).on('mouseleave',function(e){
			
			jQuery('#lens',jQuery(this)).stop().animate({svgTransform:'translate(81,35)'},{duration:500,easing:"easeOutBack"});
			jQuery('#largeGlyph',jQuery(this)).stop().animate({svgTransform:'translate(-163,-70)'},{duration:500,easing:"easeOutBack"});
			jQuery('#lensmask',jQuery(this)).stop().animate({svgTransform:'translate(163,70)'},{duration:500,easing:"easeOutBack"});
			
		});
	} else {
		var pos = 0;
		jQuery('#retina').on('click',function(e){
			
			posX = new Array('44','30','78');
			posY = new Array('75','56','39');
			
			
			x = posX[pos];
			y = posY[pos];
			
			
			var largeGlyphPosX = x*2;
			var largeGlyphPosY = y*2;
			
			
			jQuery('#lens',jQuery(this)).stop().animate({svgTransform:'translate('+x+','+y+')'},{duration:500,easing:"easeOutBack"});
			jQuery('#largeGlyph',jQuery(this)).stop().animate({svgTransform:'translate('+(0-largeGlyphPosX)+','+(0-largeGlyphPosY)+')'},{duration:500,easing:"easeOutBack"});
			jQuery('#lensmask',jQuery(this)).stop().animate({svgTransform:'translate('+((x*2)+1)+','+(y*2)+')'},{duration:500,easing:"easeOutBack"});
			
			
			pos++;
			if (pos >= 3) pos = 0;
		}).on('mouseleave',function(e){
			pos = 0;
			jQuery('#lens',jQuery(this)).stop().animate({svgTransform:'translate(81,35)'},{duration:500,easing:"easeOutBack"});
			jQuery('#largeGlyph',jQuery(this)).stop().animate({svgTransform:'translate(-163,-70)'},{duration:500,easing:"easeOutBack"});
			jQuery('#lensmask',jQuery(this)).stop().animate({svgTransform:'translate(163,70)'},{duration:500,easing:"easeOutBack"});
			
		});
	}
	
	//================================================================================================
	//FIT TOGETHER ICON
	window.rotateAngle = 0;
	jQuery('#fittogether').data('color','white');
	jQuery('#fittogether').hover(
		function(){
			jQuery('#whitehalf',jQuery(this)).animate({svgFill: "#34495E"},250);
			jQuery('#darkhalf',jQuery(this)).animate({svgFill: '#ffffff'},250);
		},function() {
			jQuery('#whitehalf',jQuery(this)).animate({svgFill: "#ffffff"},250);
			jQuery('#darkhalf',jQuery(this)).animate({svgFill: "#34495E"},250);
			var durationBack = ( window.rotateAngle / 180 ) * 250;
			if (durationBack >= 5000) durationBack = 5000;
			if (durationBack <= 1000) durationBack = 1000;
			jQuery('#shape',jQuery(this)).animate({svgTransform: 'rotate(0,54,50)'},{duration:durationBack,easing:"easeOutElastic"});
			window.rotateAngle = 0;
		}
	).click(function(){
		window.rotateAngle = window.rotateAngle+180;
		jQuery('#shape',jQuery(this)).stop().clearQueue().animate({svgTransform: 'rotate('+window.rotateAngle+',54,50)'},{duration:250,easing:"easeOutCubic"});
		
		
	});
	
	//================================================================================================
	//ALIGNED TO GRID ICON
	jQuery('#aligned').on('mouseover',
		function(){
			jQuery('#finger',jQuery(this)).stop().animate({svgTransform: 'translate(-10,-10)'},250);
		}).on('mouseleave',function() {
			jQuery('#finger',jQuery(this)).stop().clearQueue().animate({svgTransform: 'translate(0,0)'},400);
		}).on('click',function(){
			rand = getRandomInt(-10,0);
			jQuery('#finger',jQuery(this)).stop().clearQueue().animate({svgTransform: 'translate('+rand+',0)'},{duration:100,complete:function(){jQuery('#surface',jQuery('#aligned')).stop().clearQueue().animate({svgTransform: 'translate(0,2)'},100).animate({svgTransform: 'translate(0,0)'},{duration:500,easing:'easeOutElastic'});  }}).animate({svgTransform: 'translate(-10,-10)'},100);
		});
	
	//================================================================================================
	//FREE FONT ICON
	window.case = 0;
	jQuery('#freefont').on('click',
		function(){
			switch (window.case) {
				case 0:
					/* f - r */ posX = "37"; posY = "72"; letter = "r"; pimple = 0; break;
				case 1:
					/* r - e */ posX = "72"; posY = "0"; letter = "e"; pimple = 0; break;
				case 2:
					/* e - e */ posX = "0"; posY = "0"; letter = "e"; pimple = 0; break;
				case 3:
					/* e - f */ posX = "-37"; posY = "-72"; letter = "f"; pimple = 1; break;
				case 4:
					/* f - o */ posX = "-37"; posY = "72"; letter = "o"; pimple = 0; break;
				case 5:
					/* o - n */ posX = "37"; posY = "-72"; letter = "n"; pimple = 0; break;
				case 6:
					/* n - t */ posX = "37"; posY = "72"; letter = "t"; pimple = 0; break;
				case 7:
					/* t - f */ posX = "37"; posY = "-72"; letter = "f"; pimple = 1; break;
			}
				
			window.case++;
			if (window.case > 7)  window.case = 0;
			
			
			jQuery('#group',jQuery(this)).stop().animate({svgTransform:"translate("+posX+","+posY+")"},{duration:100,complete:function(){
				jQuery(this).removeAttr("transform");
				
				jQuery('#letters *',jQuery('#freefont')).each(function(){
					jQuery(this).attr('opacity','0');
				});
				
				jQuery('#symbol-'+letter,jQuery('#freefont')).attr('opacity',1);
				jQuery('#pimple', jQuery('#freefont')).attr('opacity',pimple);
			
			}});
			jQuery('#groupmask',jQuery(this)).stop().animate({svgTransform:"translate("+(0-posX)+","+(0-posY)+")"},{duration:100,complete:function(){ jQuery(this).removeAttr("transform"); }});

	}).on('mousedown',function(){
		jQuery('#hl',jQuery('#freefont')).stop().clearQueue().animate({opacity:0},250);
		jQuery('#shadow',jQuery('#freefont')).stop().clearQueue().animate({opacity:0},250);
	}).on('mouseup',function(){
		jQuery('#hl',jQuery('#freefont')).stop().clearQueue().animate({opacity:1},250);
		jQuery('#shadow',jQuery('#freefont')).stop().clearQueue().animate({opacity:1},250);
	});
	
	
	// ================================================================================================
	// LOOP ICON
	// animated by css 

	
	//LIB
	function getRandomInt (min, max) {
		return Math.floor(Math.random() * (max - min + 1)) + min;
	}
	function shadeColor(color, percent) {   
		var num = parseInt(color.slice(1),16), amt = Math.round(2.55 * percent), R = (num >> 16) + amt, B = (num >> 8 & 0x00FF) + amt, G = (num & 0x0000FF) + amt;
		return "#" + (0x1000000 + (R<255?R<1?0:R:255)*0x10000 + (B<255?B<1?0:B:255)*0x100 + (G<255?G<1?0:G:255)).toString(16).slice(1);
	}
	
	jQuery.fn.nextOrFirst = function(selector){ var next = this.next(selector);return (next.length) ? next : this.prevAll(selector).last(); }
	
	//Sharrre
	window.newNumber = 0;
	jQuery('.share-section-cont').sharrre({
	  share: {
	  	googlePlus: true,
	  	facebook: true,
	  	twitter: true,
	  	pinterest: true,
	  	linkedin: true
	  },
	  template: " ",
	  url:"http://designmodo.com/flat/",
	  urlCurl: '/wp-content/themes/designmodov2.1/custom-pages/startup/presentation/js/sharrre.php',
	  enableHover: false,
	  className: '',
	  render: function(api, options){
		if (options.count.pinterest == 0){ options.count.pinterest = 546; }
	  	jQuery('.share-section .google span').text(options.count.googlePlus); 
	  	jQuery('.share-section .twitter span').text(options.count.twitter);
		jQuery('.share-section .facebook span').text(options.count.facebook);
	  	jQuery('.share-section .linkedin span').text(options.count.linkedin);
		jQuery('.share-section .pin span').text(options.count.pinterest);
		
		window.newNumber = options.count.googlePlus + options.count.twitter + options.count.facebook + options.count.linkedin + options.count.pinterest;
	  }
	});
});
		
		
		

//===============================================================================================================================================================================
//===============================================================================================================================================================================
//===============================================================================================================================================================================
//===============================================================================================================================================================================
//===============================================================================================================================================================================
//===============================================================================================================================================================================
//===============================================================================================================================================================================
//===============================================================================================================================================================================
//===============================================================================================================================================================================


// sharrre.com
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}(';(6(jQuery,g,h,i){l j=\'1Y\',23={3i:\'1Y\',L:{O:C,E:C,z:C,I:C,p:C,K:C,N:C,B:C},2a:0,18:\'\',12:\'\',3:h.3h.1a,x:h.12,1p:\'1Y.3d\',y:{},1q:0,1w:w,3c:w,3b:w,2o:C,1X:6(){},38:6(){},1P:6(){},26:6(){},8:{O:{3:\'\',15:C,1j:\'37\',13:\'35-4Y\',2p:\'\'},E:{3:\'\',15:C,R:\'1L\',11:\'4V\',H:\'\',1A:\'C\',2c:\'C\',2d:\'\',1B:\'\',13:\'4R\'},z:{3:\'\',15:C,y:\'33\',2m:\'\',16:\'\',1I:\'\',13:\'35\'},I:{3:\'\',15:C,Q:\'4K\'},p:{3:\'\',15:C,1j:\'37\'},K:{3:\'\',15:C,11:\'1\'},N:{3:\'\',15:C,22:\'\'},B:{3:\'\',1s:\'\',1C:\'\',11:\'33\'}}},1n={O:"",E:"1D://4J.E.o/4x?q=4u%2X,%4j,%4i,%4h,%4f,%4e,46,%45,%44%42%41%40%2X=%27{3}%27&1y=?",z:"S://3W.3P.z.o/1/3D/y.2G?3={3}&1y=?",I:"S://3l.I.o/2.0/5a.59?54={3}&Q=1c&1y=?",p:\'S://52.p.o/4Q/2G/4B/m?3={3}&1y=?\',K:"",N:"S://1o.N.o/4z/y/L?4r=4o&3={3}&1y=?",B:""},2A={O:6(b){l c=b.4.8.O;jQuery(b.r).X(\'.8\').Z(\'<n G="U 4d"><n G="g-25" m-1j="\'+c.1j+\'" m-1a="\'+(c.3!==\'\'?c.3:b.4.3)+\'" m-2p="\'+c.2p+\'"></n></n>\');g.3Z={13:b.4.8.O.13};l d=0;9(A 2x===\'F\'&&d==0){d=1;(6(){l a=h.1g(\'P\');a.Q=\'x/1c\';a.1r=w;a.17=\'//3w.2w.o/Y/25.Y\';l s=h.1d(\'P\')[0];s.1e.1f(a,s)})()}J{2x.25.3X()}},E:6(c){l e=c.4.8.E;jQuery(c.r).X(\'.8\').Z(\'<n G="U E"><n 2T="1V-47"></n><n G="1V-1L" m-1a="\'+(e.3!==\'\'?e.3:c.4.3)+\'" m-1A="\'+e.1A+\'" m-11="\'+e.11+\'" m-H="\'+e.H+\'" m-3u-2c="\'+e.2c+\'" m-R="\'+e.R+\'" m-2d="\'+e.2d+\'" m-1B="\'+e.1B+\'" m-16="\'+e.16+\'"></n></n>\');l f=0;9(A 1i===\'F\'&&f==0){f=1;(6(d,s,a){l b,2s=d.1d(s)[0];9(d.3x(a)){1v}b=d.1g(s);b.2T=a;b.17=\'//4c.E.4n/\'+e.13+\'/4t.Y#4C=1\';2s.1e.1f(b,2s)}(h,\'P\',\'E-5g\'))}J{1i.3n.3p()}},z:6(b){l c=b.4.8.z;jQuery(b.r).X(\'.8\').Z(\'<n G="U z"><a 1a="1D://z.o/L" G="z-L-U" m-3="\'+(c.3!==\'\'?c.3:b.4.3)+\'" m-y="\'+c.y+\'" m-x="\'+b.4.x+\'" m-16="\'+c.16+\'" m-2m="\'+c.2m+\'" m-1I="\'+c.1I+\'" m-13="\'+c.13+\'">3q</a></n>\');l d=0;9(A 2j===\'F\'&&d==0){d=1;(6(){l a=h.1g(\'P\');a.Q=\'x/1c\';a.1r=w;a.17=\'//1M.z.o/1N.Y\';l s=h.1d(\'P\')[0];s.1e.1f(a,s)})()}J{jQuery.3C({3:\'//1M.z.o/1N.Y\',3E:\'P\',3F:w})}},I:6(a){l b=a.4.8.I;jQuery(a.r).X(\'.8\').Z(\'<n G="U I"><a G="3H \'+b.Q+\'" 3L="3U 3V" 1a="S://I.o/2y?3=\'+V((b.3!==\'\'?b.3:a.4.3))+\'"></a></n>\');l c=0;9(A 43===\'F\'&&c==0){c=1;(6(){l s=h.1g(\'2z\'),24=h.1d(\'2z\')[0];s.Q=\'x/1c\';s.1r=w;s.17=\'//1N.I.o/8.Y\';24.1e.1f(s,24)})()}},p:6(a){9(a.4.8.p.1j==\'4g\'){l b=\'H:2r;\',2e=\'D:2B;H:2r;1B-1j:4y;1t-D:2B;\',2l=\'D:2C;1t-D:2C;2k-50:1H;\'}J{l b=\'H:53;\',2e=\'2g:58;2f:0 1H;D:1u;H:5c;1t-D:1u;\',2l=\'2g:5d;D:1u;1t-D:1u;\'}l c=a.1w(a.4.y.p);9(A c==="F"){c=0}jQuery(a.r).X(\'.8\').Z(\'<n G="U p"><n 1T="\'+b+\'1B:5i 5j,5k,5l-5n;5t:3k;1S:#3m;2D:3o-2E;2g:2F;D:1u;1t-D:3r;2k:0;2f:0;x-3s:0;3t-2b:3v;">\'+\'<n 1T="\'+2e+\'2H-1S:#2I;2k-3y:3z;3A:3B;x-2b:2J;1O:2K 2L #3G;1O-2M:1H;">\'+c+\'</n>\'+\'<n 1T="\'+2l+\'2D:2E;2f:0;x-2b:2J;x-3I:2F;H:2r;2H-1S:#3J;1O:2K 2L #3K;1O-2M:1H;1S:#2I;">\'+\'<2N 17="S://1o.p.o/3M/2N/p.3N.3O" D="10" H="10" 3Q="3R" /> 3S</n></n></n>\');jQuery(a.r).X(\'.p\').3T(\'1P\',6(){a.2O(\'p\')})},K:6(b){l c=b.4.8.K;jQuery(b.r).X(\'.8\').Z(\'<n G="U K"><2P:28 11="\'+c.11+\'" 3h="\'+(c.3!==\'\'?c.3:b.4.3)+\'"></2P:28></n>\');l d=0;9(A 1E===\'F\'&&d==0){d=1;(6(){l a=h.1g(\'P\');a.Q=\'x/1c\';a.1r=w;a.17=\'//1M.K.o/1/1N.Y\';l s=h.1d(\'P\')[0];s.1e.1f(a,s)})();s=g.3Y(6(){9(A 1E!==\'F\'){1E.2Q();21(s)}},20)}J{1E.2Q()}},N:6(b){l c=b.4.8.N;jQuery(b.r).X(\'.8\').Z(\'<n G="U N"><P Q="1Z/L" m-3="\'+(c.3!==\'\'?c.3:b.4.3)+\'" m-22="\'+c.22+\'"></P></n>\');l d=0;9(A g.2R===\'F\'&&d==0){d=1;(6(){l a=h.1g(\'P\');a.Q=\'x/1c\';a.1r=w;a.17=\'//1M.N.o/1Z.Y\';l s=h.1d(\'P\')[0];s.1e.1f(a,s)})()}J{g.2R.1W()}},B:6(b){l c=b.4.8.B;jQuery(b.r).X(\'.8\').Z(\'<n G="U B"><a 1a="S://B.o/1K/2u/U/?3=\'+(c.3!==\'\'?c.3:b.4.3)+\'&1s=\'+c.1s+\'&1C=\'+c.1C+\'" G="1K-3j-U" y-11="\'+c.11+\'">48 49</a></n>\');(6(){l a=h.1g(\'P\');a.Q=\'x/1c\';a.1r=w;a.17=\'//4a.B.o/Y/4b.Y\';l s=h.1d(\'P\')[0];s.1e.1f(a,s)})()}},2S={O:6(){},E:6(){1V=g.2v(6(){9(A 1i!==\'F\'){1i.2t.2q(\'2U.2u\',6(a){1m.1l([\'1k\',\'E\',\'1L\',a])});1i.2t.2q(\'2U.4k\',6(a){1m.1l([\'1k\',\'E\',\'4l\',a])});1i.2t.2q(\'4m.1A\',6(a){1m.1l([\'1k\',\'E\',\'1A\',a])});21(1V)}},2V)},z:6(){2W=g.2v(6(){9(A 2j!==\'F\'){2j.4p.4q(\'1J\',6(a){9(a){1m.1l([\'1k\',\'z\',\'1J\'])}});21(2W)}},2V)},I:6(){},p:6(){},K:6(){},N:6(){6 4s(){1m.1l([\'1k\',\'N\',\'L\'])}},B:6(){}},2Y={O:6(a){g.19("1D://4v.2w.o/L?4w="+a.8.O.13+"&3="+V((a.8.O.3!==\'\'?a.8.O.3:a.3)),"","1b=0, 1G=0, H=2Z, D=20")},E:6(a){g.19("S://1o.E.o/30/30.3d?u="+V((a.8.E.3!==\'\'?a.8.E.3:a.3))+"&t="+a.x+"","","1b=0, 1G=0, H=2Z, D=20")},z:6(a){g.19("1D://z.o/4A/1J?x="+V(a.x)+"&3="+V((a.8.z.3!==\'\'?a.8.z.3:a.3))+(a.8.z.16!==\'\'?\'&16=\'+a.8.z.16:\'\'),"","1b=0, 1G=0, H=31, D=32")},I:6(a){g.19("S://I.o/4D/4E/2y?3="+V((a.8.I.3!==\'\'?a.8.I.3:a.3))+"&12="+a.x+"&1I=w&1T=w","","1b=0, 1G=0, H=31, D=32")},p:6(a){g.19(\'S://1o.p.o/4F?v=5&4G&4H=4I&3=\'+V((a.8.p.3!==\'\'?a.8.p.3:a.3))+\'&12=\'+a.x,\'p\',\'1b=1F,H=1h,D=1h\')},K:6(a){g.19(\'S://1o.K.o/28/?3=\'+V((a.8.p.3!==\'\'?a.8.p.3:a.3)),\'K\',\'1b=1F,H=1h,D=1h\')},N:6(a){g.19(\'1D://1o.N.o/4L/L?3=\'+V((a.8.p.3!==\'\'?a.8.p.3:a.3))+\'&4M=&4N=w\',\'N\',\'1b=1F,H=1h,D=1h\')},B:6(a){g.19(\'S://B.o/1K/2u/U/?3=\'+V((a.8.B.3!==\'\'?a.8.B.3:a.3))+\'&1s=\'+V(a.8.B.1s)+\'&1C=\'+a.8.B.1C,\'B\',\'1b=1F,H=4O,D=4P\')}};6 T(a,b){7.r=a;7.4=jQuery.4S(w,{},23,b);7.4.L=b.L;7.4T=23;7.4U=j;7.1W()};T.W.1W=6(){l c=7;9(7.4.1p!==\'\'){1n.O=7.4.1p+\'?3={3}&Q=O\';1n.K=7.4.1p+\'?3={3}&Q=K\';1n.B=7.4.1p+\'?3={3}&Q=B\'}jQuery(7.r).4W(7.4.3i);9(A jQuery(7.r).m(\'12\')!==\'F\'){7.4.12=jQuery(7.r).4X(\'m-12\')}9(A jQuery(7.r).m(\'3\')!==\'F\'){7.4.3=jQuery(7.r).m(\'3\')}9(A jQuery(7.r).m(\'x\')!==\'F\'){7.4.x=jQuery(7.r).m(\'x\')}jQuery.1z(7.4.L,6(a,b){9(b===w){c.4.2a++}});9(c.4.3b===w){jQuery.1z(7.4.L,6(a,b){9(b===w){4Z{c.34(a)}51(e){}}})}J 9(c.4.18!==\'\'){7.4.26(7,7.4)}J{7.2n()}jQuery(7.r).1X(6(){9(jQuery(7).X(\'.8\').36===0&&c.4.3c===w){c.2n()}c.4.1X(c,c.4)},6(){c.4.38(c,c.4)});jQuery(7.r).1P(6(){c.4.1P(c,c.4);1v C})};T.W.2n=6(){l c=7;jQuery(7.r).Z(\'<n G="8"></n>\');jQuery.1z(c.4.L,6(a,b){9(b==w){2A[a](c);9(c.4.2o===w){2S[a]()}}})};T.W.34=6(c){l d=7,y=0,3=1n[c].1x(\'{3}\',V(7.4.3));9(7.4.8[c].15===w&&7.4.8[c].3!==\'\'){3=1n[c].1x(\'{3}\',7.4.8[c].3)}9(3!=\'\'&&d.4.1p!==\'\'){jQuery.55(3,6(a){9(A a.y!=="F"){l b=a.y+\'\';b=b.1x(\'\\56\\57\',\'\');y+=1Q(b,10)}J 9(a.m&&a.m.36>0&&A a.m[0].39!=="F"){y+=1Q(a.m[0].39,10)}J 9(A a.3a!=="F"){y+=1Q(a.3a,10)}J 9(A a[0]!=="F"){y+=1Q(a[0].5b,10)}J 9(A a[0]!=="F"){}d.4.y[c]=y;d.4.1q+=y;d.2i();d.1R()}).5e(6(){d.4.y[c]=0;d.1R()})}J{d.2i();d.4.y[c]=0;d.1R()}};T.W.1R=6(){l a=0;5f(e 1Z 7.4.y){a++}9(a===7.4.2a){7.4.26(7,7.4)}};T.W.2i=6(){l a=7.4.1q,18=7.4.18;9(7.4.1w===w){a=7.1w(a)}9(18!==\'\'){18=18.1x(\'{1q}\',a);jQuery(7.r).1U(18)}J{jQuery(7.r).1U(\'<n G="5h"><a G="y" 1a="#">\'+a+\'</a>\'+(7.4.12!==\'\'?\'<a G="L" 1a="#">\'+7.4.12+\'</a>\':\'\')+\'</n>\')}};T.W.1w=6(a){9(a>=3e){a=(a/3e).3f(2)+"M"}J 9(a>=3g){a=(a/3g).3f(1)+"k"}1v a};T.W.2O=6(a){2Y[a](7.4);9(7.4.2o===w){l b={O:{14:\'5m\',R:\'+1\'},E:{14:\'E\',R:\'1L\'},z:{14:\'z\',R:\'1J\'},I:{14:\'I\',R:\'29\'},p:{14:\'p\',R:\'29\'},K:{14:\'K\',R:\'29\'},N:{14:\'N\',R:\'L\'},B:{14:\'B\',R:\'1K\'}};1m.1l([\'1k\',b[a].14,b[a].R])}};T.W.5o=6(){l a=jQuery(7.r).1U();jQuery(7.r).1U(a.1x(7.4.1q,7.4.1q+1))};T.W.5p=6(a,b){9(a!==\'\'){7.4.3=a}9(b!==\'\'){7.4.x=b}};jQuery.5q[j]=6(b){l c=5r;9(b===i||A b===\'5s\'){1v 7.1z(6(){9(!jQuery.m(7,\'2h\'+j)){jQuery.m(7,\'2h\'+j,5u T(7,b))}})}J 9(A b===\'5v\'&&b[0]!==\'5w\'&&b!==\'1W\'){1v 7.1z(6(){l a=jQuery.m(7,\'2h\'+j);9(a 5x T&&A a[b]===\'6\'){a[b].5y(a,5z.W.5A.5B(c,1))}})}}})(5C,5D,5E);',62,351,'|||url|options||function|this|buttons|if||||||||||||var|data|div|com|delicious||element|||||true|text|count|twitter|typeof|pinterest|false|height|facebook|undefined|class|width|digg|else|stumbleupon|share||linkedin|googlePlus|script|type|action|http|Plugin|button|encodeURIComponent|prototype|find|js|append||layout|title|lang|site|urlCount|via|src|template|open|href|toolbar|javascript|getElementsByTagName|parentNode|insertBefore|createElement|550|FB|size|_trackSocial|push|_gaq|urlJson|www|urlCurl|total|async|media|line|20px|return|shorterTotal|replace|callback|each|send|font|description|https|STMBLPN|no|status|3px|related|tweet|pin|like|platform|widgets|border|click|parseInt|rendererPerso|color|style|html|fb|init|hover|sharrre|in|500|clearInterval|counter|defaults|s1|plusone|render||badge|add|shareTotal|align|faces|colorscheme|cssCount|padding|float|plugin_|renderer|twttr|margin|cssShare|hashtags|loadButtons|enableTracking|annotation|subscribe|50px|fjs|Event|create|setInterval|google|gapi|submit|SCRIPT|loadButton|35px|18px|display|block|none|json|background|fff|center|1px|solid|radius|img|openPopup|su|processWidgets|IN|tracking|id|edge|1000|tw|20url|popup|900|sharer|650|360|horizontal|getSocialJson|en|length|medium|hide|total_count|shares|enableCounter|enableHover|php|1e6|toFixed|1e3|location|className|it|pointer|services|666666|XFBML|inline|parse|Tweet|normal|indent|vertical|show|baseline|apis|getElementById|bottom|5px|overflow|hidden|ajax|urls|dataType|cache|ccc|DiggThisButton|decoration|7EACEE|40679C|rel|static|small|gif|api|alt|Delicious|Add|on|nofollow|external|cdn|go|setTimeout|___gcfg|20WHERE|20link_stat|20FROM|__DBW|20click_count|20comments_fbid|commentsbox_count|root|Pin|It|assets|pinit|connect|googleplus|20total_count|20comment_count|tall|20like_count|20share_count|20normalized_url|remove|unlike|message|net|jsonp|events|bind|format|LinkedInShare|all|SELECT|plus|hl|fql|15px|countserv|intent|urlinfo|xfbml|tools|diggthis|save|noui|jump|close|graph|DiggCompact|cws|token|isFramed|700|300|v2|en_US|extend|_defaults|_name|button_count|addClass|attr|US|try|top|catch|feeds|93px|links|getJSON|u00c2|u00a0|right|getInfo|story|total_posts|26px|left|error|for|jssdk|box|12px|Arial|Helvetica|sans|Google|serif|simulateClick|update|fn|arguments|object|cursor|new|string|_|instanceof|apply|Array|slice|call|jQuery|window|document'.split('|'),0,{}))

//nextOrFirst? prevOrLast?
jQuery.fn.nextOrFirst = function(selector) { var next = this.next(selector); return (next.length) ? next : this.prevAll(selector).last(); }
jQuery.fn.prevOrLast = function(selector){ var prev = this.prev(selector); return (prev.length) ? prev : this.nextAll(selector).last(); }

// OpenInWindow
function oiw(theURL,winName,w,h,scrollbars){LeftPosition=(screen.width)?(screen.width-w)/2:100;TopPosition=(screen.height)?(screen.height-h)/2:100;settings='width='+w+',height='+h+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scrollbars+',location=no,directories=no,status=0,menubar=no,toolbar=no,resizable=no';URL=theURL;window.open(URL,winName,settings);}

//ANIMATE
(function(jQuery,undefined){var defaults={duration:5E3,easing:"swing",animateOpacity:false,intStepDecimals:0,intEndDecimals:0,floatStepDecimals:4,floatEndDecimals:1,callback:function(){}};function round(number,decimals){return Math.round(number*Math.pow(10,decimals))/Math.pow(10,decimals)}function isInt(number){return/^-?[\d]+jQuery/.test(number)}jQuery.fn.animateNumber=function(value,options,callback){if(typeof options==="function"){callback=options;options={}}options=jQuery.extend({},defaults,options);return this.each(function(){var container=
jQuery(this);var initialValue=parseFloat(jQuery(this).text(),10);if(round(value,options.floatEndDecimals)==round(initialValue,options.floatEndDecimals))return;var type=container.data("type")||(isInt(jQuery(this).text())?"int":"float"),stepDecimals,endDecimals,defaultStepDecimals,defaultEndDecimals;if(type=="int"){defaultStepDecimals=options.intStepDecimals;defaultEndDecimals=options.intEndDecimals}else{defaultStepDecimals=options.floatStepDecimals;defaultEndDecimals=options.floatEndDecimals}stepDecimals=container.data("stepDecimals")||
defaultStepDecimals;endDecimals=container.data("endDecimals")||defaultEndDecimals;if(options.animateOpacity)container.animate({opacity:0.2},{duration:options.duration/2,easing:options.easing,complete:function(){container.animate({opacity:1},{duration:options.duration/2,easing:options.easing})}});jQuery({number:initialValue}).animate({number:value},{duration:options.duration,easing:options.easing,step:function(){container.text(round(this.number,stepDecimals))},complete:function(){container.text(round(this.number,
endDecimals));if(typeof options.callback==="function")options.callback.call(container)}})})}})(jQuery);


//COLOR SHADE
function shadeColor(e,t){var n=parseInt(e.substring(1,3),16);var r=parseInt(e.substring(3,5),16);var i=parseInt(e.substring(5,7),16);n=parseInt(n*(100+t)/100);r=parseInt(r*(100+t)/100);i=parseInt(i*(100+t)/100);n=n<255?n:255;r=r<255?r:255;i=i<255?i:255;var s=n.toString(16).length==1?"0"+n.toString(16):n.toString(16);var o=r.toString(16).length==1?"0"+r.toString(16):r.toString(16);var u=i.toString(16).length==1?"0"+i.toString(16):i.toString(16);return"#"+s+o+u}

//Get Original Width Of Img
function getOriginalWidthOfImg(img_element) { var t = new Image(); t.src = (img_element.getAttribute ? img_element.getAttribute("src") : false) || img_element.src; return t.width; }
