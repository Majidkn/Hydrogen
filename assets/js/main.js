!function(a){skel.breakpoints({xlarge:"(max-width: 1680px)",large:"(max-width: 1280px)",medium:"(max-width: 980px)",small:"(max-width: 736px)",xsmall:"(max-width: 480px)"}),a(function(){var b=a(window),c=a("body");a("#wrapper");if(skel.vars.IEVersion<12&&c.addClass("ie"),skel.vars.mobile&&c.addClass("touch"),skel.canUse("transition")){c.addClass("loading"),b.on("load",function(){window.setTimeout(function(){c.removeClass("loading")},100)});var e;b.on("resize",function(){window.clearTimeout(e),c.addClass("resizing"),e=window.setTimeout(function(){c.removeClass("resizing")},100)})}b.scrollTop(0),a("form").placeholder();var f=a(".panel");f.each(function(){var b=a(this),d=a('[href="#'+b.attr("id")+'"]'),e=a('<div class="closer" />').appendTo(b);e.on("click",function(a){b.trigger("---hide")}),b.on("click",function(a){a.stopPropagation()}).on("---toggle",function(){b.hasClass("active")?b.triggerHandler("---hide"):b.triggerHandler("---show")}).on("---show",function(){c.hasClass("content-active")&&f.trigger("---hide"),b.addClass("active"),d.addClass("active"),c.addClass("content-active")}).on("---hide",function(){b.removeClass("active"),d.removeClass("active"),c.removeClass("content-active")}),d.removeAttr("href").css("cursor","pointer").on("click",function(a){a.preventDefault(),a.stopPropagation(),b.trigger("---toggle")})}),c.on("click",function(a){c.hasClass("content-active")&&(a.preventDefault(),a.stopPropagation(),f.trigger("---hide"))}),b.on("keyup",function(a){27==a.keyCode&&c.hasClass("content-active")&&(a.preventDefault(),a.stopPropagation(),f.trigger("---hide"))});var g=a("#header");g.find("a").each(function(){var b=a(this),c=b.attr("href");c&&"#"!=c.charAt(0)&&b.removeAttr("href").css("cursor","pointer").on("click",function(a){a.preventDefault(),a.stopPropagation(),window.location.href=c})});var h=a("#footer");h.find(".copyright").each(function(){var b=a(this),c=b.parent(),d=c.parent().children().last();skel.on("+medium",function(){b.appendTo(d)}).on("-medium",function(){b.appendTo(c)})});var i=a("#main");i.children(".thumb").each(function(){var e,b=a(this),c=b.find(".image"),d=c.children("img");0!=c.length&&(c.css("background-image","url("+d.attr("src")+")"),(e=d.data("position"))&&c.css("background-position",e),d.hide(),skel.vars.IEVersion<11&&b.css("cursor","pointer").on("click",function(){c.trigger("click")}))}),i.poptrox({baseZIndex:2e4,caption:function(a){var b="";return a.nextAll().each(function(){b+=this.outerHTML}),b},fadeSpeed:300,onPopupClose:function(){c.removeClass("modal-active")},onPopupOpen:function(){c.addClass("modal-active")},overlayOpacity:0,popupCloserText:"",popupHeight:150,popupLoaderText:"",popupSpeed:300,popupWidth:150,selector:".thumb > a.image",usePopupCaption:!0,usePopupCloser:!0,usePopupDefaultStyling:!1,usePopupForceClose:!0,usePopupLoader:!0,usePopupNav:!0,windowMargin:50}),skel.on("-xsmall",function(){i[0]._poptrox.windowMargin=50}).on("+xsmall",function(){i[0]._poptrox.windowMargin=0})})}(jQuery);