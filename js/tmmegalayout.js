var isMobile=false;$(document).ready(function(){compareBtn();mobileMenu();$(window).resize(function(){mobileMenu();if($(document).width()+ compensante<992){$('#page-preloader').fadeOut();}});var stickUp=$(".stick-up");if(stickUp.length&&$('body').width()>1199){stickUp.wrap('<div class="stickUpTop"><div class="stickUpHolder">');$('.stickUpTop').tmStickUp();}
cmsInfoCarousel();});$(window).on('load',function(){if($(document).width()+ compensante<992){$('#page-preloader').fadeOut();}});function compareBtn(){var compare_lnk=$('header .compare-form');var compare_div=$('header .compare-link');if(compare_div&&compare_lnk){compare_lnk.appendTo(compare_div);}}
(function($){$.fn.tmStickUp=function(options){var getOptions={correctionSelector:$('.correctionSelector')};$.extend(getOptions,options);var
_this=$(this),_window=$(window),_document=$(document),thisOffsetTop=0,thisOuterHeight=0,thisMarginTop=0,thisPaddingTop=0,documentScroll=0,pseudoBlock,lastScrollValue=0,scrollDir='',tmpScrolled;init();function init(){thisOffsetTop=parseInt(_this.offset().top);thisMarginTop=parseInt(_this.css('margin-top'));thisOuterHeight=parseInt(_this.outerHeight(true));$('<div class="pseudoStickyBlock"></div>').insertAfter(_this);pseudoBlock=$('.pseudoStickyBlock');pseudoBlock.css({'position':'relative','display':'block'});addEventsFunction();}
function addEventsFunction(){var isS=false;var stuck;_document.on('scroll',function(){tmpScrolled=$(this).scrollTop();if(tmpScrolled>lastScrollValue){scrollDir='down';}else{scrollDir='up';}
lastScrollValue=tmpScrolled;correctionValue=getOptions.correctionSelector.outerHeight(true);documentScroll=parseInt(_window.scrollTop());stuck=thisOffsetTop- correctionValue+ 250<documentScroll;if(stuck&&!isS){_this.addClass('isStuck');_this.css({position:'fixed',top:correctionValue});pseudoBlock.css({'height':thisOuterHeight});isS=true;}else if(!stuck&&isS){_this.css({top:-70});setTimeout(function(){_this.removeClass('isStuck');_this.css({position:'relative',top:0});pseudoBlock.css({'height':0});},100);isS=false;}}).trigger('scroll');}};})(jQuery);function mobileMenu(){var menu_mobile,head_login,languages,currencies,search,wishlist,compare,cart,mega_menu_container,top_menu;if($(document).width()+ compensante<992&&!isMobile){mega_menu_container=$('header .top_menu').parent();top_menu=$('header .top_menu > .menu');if(top_menu.length){head_login=$('#header-login');languages=$('#languages-block-top');currencies=$('#currencies-block-top');search=$('header #tmsearch');wishlist=$('header .wishlist-link');compare=$('header .compare-form');cart=$('header .cartBox');top_menu.append('<li class="mobile-items"></li>');menu_mobile=top_menu.find('.mobile-items');if(head_login.length){head_login.parent().addClass('header-login');head_login.appendTo(menu_mobile);}
if(languages.length){languages.parent().addClass('languages');languages.appendTo(menu_mobile);}
if(currencies.length){currencies.parent().addClass('currencies');currencies.appendTo(menu_mobile);}
if(search.length){search.parent().addClass('search');search.appendTo(mega_menu_container);}
if(wishlist.length){wishlist.parent().addClass('wishlist');wishlist.appendTo(mega_menu_container);}
if(compare.length){compare.parent().addClass('compare');compare.appendTo(mega_menu_container);}
if(cart.length){cart.parent().addClass('cart');cart.appendTo(mega_menu_container);}
isMobile=true;}}else if($(document).width()+ compensante>991&&isMobile){mega_menu_container=$('header .top_menu').parent();top_menu=$('header .top_menu > .menu');menu_mobile=top_menu.find('.mobile-items');head_login=menu_mobile.find('#header-login');languages=menu_mobile.find('#languages-block-top');currencies=menu_mobile.find('#currencies-block-top');search=mega_menu_container.find('#tmsearch');wishlist=mega_menu_container.find('.wishlist-link');compare=mega_menu_container.find('.compare-form');cart=mega_menu_container.find('.cartBox');if(head_login.length){head_login.appendTo($('header .header-login'));}
if(languages.length){languages.appendTo($('header .languages'));}
if(currencies.length){currencies.appendTo($('header .currencies'));}
if(search.length){search.appendTo($('header .search'));}
if(wishlist.length){wishlist.appendTo($('header .wishlist'));}
if(compare.length){compare.appendTo($('header .compare'));}
if(cart.length){cart.appendTo($('header .cart'));}
menu_mobile.remove();isMobile=false;}}
function cmsInfoCarousel(){countItemsCMS();var cmsCarousel=$('.customcms-carousel #cmsinfo_block');if(cmsCarousel.length&&!!$.prototype.bxSlider){cms_slider=cmsCarousel.bxSlider({minSlides:cms_carousel_items,maxSlides:cms_carousel_items,slideWidth:600,slideMargin:cms_carousel_margin,pager:false,nextText:'',prevText:'',moveSlides:1,infiniteLoop:true,hideControlOnEnd:true,responsive:true,useCSS:false,autoHover:false,auto:true,speed:500,pause:3000,controls:true,autoControls:false});}
$(window).resize(function(){if(cmsCarousel.length){resizeCarouselCMS()}});}
function resizeCarouselCMS(){countItemsCMS();cms_slider.reloadSlider({minSlides:cms_carousel_items,maxSlides:cms_carousel_items,slideWidth:600,slideMargin:cms_carousel_margin,pager:false,nextText:'',prevText:'',moveSlides:1,infiniteLoop:true,hideControlOnEnd:true,responsive:true,useCSS:false,autoHover:false,auto:true,speed:500,pause:4000,controls:true,autoControls:false});}
function countItemsCMS(){var featured=$('.customcms-carousel');cms_carousel_margin=30;cms_carousel_items=1;if(featured.width()>=500){cms_carousel_items=2;}
if(featured.width()>=800){cms_carousel_items=3;cms_carousel_margin=40;}
if(featured.width()>=1750){cms_carousel_items=4;}}