(function(){var $;$=jQuery,$.fn.autoHeight=function(t){var e,i,n,r,h;return n=this,h=null,r=$.extend({selector:"> *"},t),i=function(){var t,e,i,h,o,s,u,l,f,c,a,g,d,p;if(u=[],$.isArray(r.selector))for(p=r.selector,l=0,a=p.length;a>l;l++)s=p[l],u.push($(s,n));else"string"==typeof r.selector&&u.push($(r.selector,n));for(f=0,g=u.length;g>f;f++)if(e=u[f],e.length>1&&(h=0,o=parseInt(n.innerWidth(),10),i=[],e.each(function(){var t;return t=parseInt($(this).outerWidth(),10),$(this).height("auto"),o>t&&(i.push($(this)),$(this).height()>h)?h=$(this).height():void 0}),h>0))for(c=0,d=i.length;d>c;c++)t=i[c],t.height(h);return n.trigger("autoHeightComplete",r)},e=function(){return h=h||setTimeout(function(){return i(),h=null},200)},i(),"function"==typeof window.addResizeListener?n.resize(e):$(window).resize(e),this}}).call(this);

var $ = jQuery;
$(document).ready(function(){
    $('#cred').autoHeight({
      selector: ['.autoheight']
    });
    $('#heroSlider').owlCarousel({
      loop: true,
      autoplay:true,
      items: 1,
      itemsDesktop: [1024,1],
      itemsTablet: [992,1],
      itemsMobile : [480,1],
      dots: true,
    });
});