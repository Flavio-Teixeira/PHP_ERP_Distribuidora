jQuery(document).bind('mobileinit', function(){
  /**
  * jQuery code to handle the ajax calls
  * First we prevent all form submisions and replace it to ajax calls
  * Second, for all links with the attribute data-ajax set to true, we make an ajax call too
  */
  jQuery('div[ajax-url] form').live('submit',function(e){
  e.preventDefault();
    var url=jQuery.mobile.activePage.attr('ajax-url');
    AjaxCall(url);
    return false;
  });

  jQuery('a[data-ajax="true"]').live('click',function(){
    var url=jQuery(this).attr('href').split('?');
    var data=url[1];
    var url=jQuery.mobile.activePage.attr('ajax-url');
    AjaxCall(url,data);
    return false;
  });


});

// This function calls the uri page for JSONP data and injects the results on the elements on the page,
// If there is an error displays a standard error message
function AjaxCall(uri,extradata)
{

  //allow cross domain scripting in jQuery 1.6.x
  jQuery.support.cors = true;

  var formdata= jQuery.mobile.activePage.find('form').serialize();
  if(extradata)
    formdata=formdata+'&'+extradata;
  var d = new Date();
  jQuery.mobile.showPageLoadingMsg();
  jQuery.ajax({
    url:uri+"?callback=json&d="+d.getTime(),
    dataType: 'json',
    type: 'POST',
    data: formdata,
    crossDomain: true,
    success:function(data){
        if(!data.redirect)
        {
          var page=jQuery.mobile.activePage;
          jQuery.each(data,function(i,v){
            page.find('#'+i).html(Base64.decode(v));
          });
          //clean hidden dialogs if any
          jQuery('.ui-selectmenu,.ui-selectmenu-screen').remove();
          jQuery('div[data-role="dialog"]').remove();
          page.page("destroy");
          //inactivate the page
          page.removeClass(jQuery.mobile.activePageClass);
          //refresh it
          page.page();
          //activate it again
          page.addClass(jQuery.mobile.activePageClass);
          jQuery.mobile.hidePageLoadingMsg();
        }
        else
        {
          location.href=data.redirect;
        }
      return false;
    },
    error:function(){
      jQuery.mobile.hidePageLoadingMsg();
      var page=jQuery.mobile.activePage.find('form').attr('id');
      eval(page+'JSAjaxCallError()');
    }
  });


}

// JQueryfied version of jsWrapper in common.js
function jsWrapper(event,hiddenfield, submitvalue)
{
  event.preventDefault();

  jQuery('#'+hiddenfield).val(submitvalue);
  jQuery('#'+hiddenfield).parents('form').submit();
  jQuery('#'+hiddenfield).val('');
  return false;

}

//compatibility with findObj in common.js
function findObj(id,thedoc)
{
  return jQuery('#'+id);
}

//gets css font attributes from origin and put them on destination
// extra css styles can be passed as an object
function buttonStyle(origin,destination,extra){
      var styles=origin.attr('style');
      var cssInner={};
      var existingStyles={};
      if(jQuery.trim(styles))
      {
        var stylesArray=styles.split(';');

        for(x=0;x<stylesArray.length;x++)
        {
         if(jQuery.trim(stylesArray[x])!="")
          var value=stylesArray[x].split(':');
          existingStyles[jQuery.trim(value[0])]=jQuery.trim(value[1]);
        }

        var validValues=new Array('text-align','font-family','font-size','color','font-weight','font-style','font-variant','text-transform','cursor');

        for(x=0; x < validValues.length;x++)
        {

          if(existingStyles[validValues[x]])
           cssInner[validValues[x]]=existingStyles[validValues[x]];
        }

      }
      for(var i in extra)
      {
          cssInner[i]=extra[i];
      }
      destination.css(cssInner);
    }

// returns the background-color attribute from origin's style attribute and also can reset it
function changeBackgroundColor(origin,reset){
      var styles=origin.attr('style');

      if(styles && styles.search("background-color")!=-1)
      {
        var background= origin.css('background-color');
        if(reset)
          origin.css('background-color','');

        return background;
      }
    }

var borderBoxing={
  'box-sizing':'border-box',
  '-moz-box-sizing':'border-box',
  '-ms-box-sizing':'border-box',
  '-webkit-box-sizing':'border-box'
}

var contentBoxing={
  'box-sizing':'content-box',
  '-moz-box-sizing':'content-box',
  '-ms-box-sizing':'content-box',
  '-webkit-box-sizing':'content-box'
}

//let's adapt all buttons to accept RadPHP Styles
jQuery("div:jqmData(role='page')").live('pagecreate',function(){

  var page=jQuery(this);
  page.css('min-height','100%');

  //add upperclass modifier for custom themes
  jQuery('*[upper_class]').each(function(){
    var el=jQuery(this);
    var myClass=el.attr('upper_class');
    var name=el.attr('name');
    if(name)
    {
      var pos=name.indexOf('[');
      if(pos!=-1)
        name=name.substr(0,pos);
      page.find('#'+name+'_outer').addClass(myClass);
    }
    else
    {
      var id=el.attr('id');
      page.find('#'+id+'_outer').addClass(myClass);
     }
  });

  //check for scrollview elements

  /*jQuery('*[scroll_view]').each(function(){
    var el=jQuery(this);
    var id=el.attr('id');
    var myScroll=el.attr('scroll_view');
    page.find('#'+id+'_outer').attr('data-scroll',myScroll).css({'overflow':'auto'});
  });*/
});


jQuery("div:jqmData(role='page')").live('pageinit',function(){

    //page color
    if(jQuery('body').attr('bgcolor'))
      jQuery('.ui-page').css('background',jQuery('body').attr('bgcolor'));

    //changes for MCheckboxes and MRadioboxes
    jQuery('.ui-checkbox,.ui-radio').each(function(i,el){
      var label=jQuery(el).children('label');
      var styles=label.attr('style');

      if(styles && styles.search("background-color")!=-1)
         label.css('background-image',"none");

      label.children('.ui-btn-inner').css({'height':'100%'});
      label.children('.ui-btn-inner').css(borderBoxing);
      label.children('.ui-btn-inner').children('.ui-btn-text').css({'position':'absolute','top':'50%','margin-top':'-1ex'});

    });

    //Changes for MEdit
    jQuery('input[type=text],input[type=search],input[type=number],input[type=password],textarea,.ui-input-search, a.ui-btn,input[type=true]').css(borderBoxing);
    jQuery('.ui-input-clear').css(contentBoxing);

    jQuery('.ui-input-search').each(function(){
      var myinput=jQuery(this);
      myinput.children('input[type=text]').css({'width':'98%','height':'100%'});
      myinput.css({'height':'100%','background-color':changeBackgroundColor(myinput.children('input'),true)});
    });

    //Changes for MSlider
    jQuery('input[data-type=range]').each(function(){
      var input=jQuery(this);
      var slider=input.next('.ui-slider');
      var parentWidth=input.parent().width();
      var parentHeight=input.parent().height();
      var margin=20;
      var width=parentWidth-input.outerWidth(true)-margin-5;
      var childrenHeight=slider.children('.ui-slider-handle').height();

      slider.css({'margin-left':margin,'margin-right':0,'width':width});
    });

    //MLists
    //temporary css waiting for the jQueryMobile internal scrolling
    var mlist=jQuery('.ui-listview');
    var mlistForm=mlist.prev('form');
    mlist.parent().css({'overflow':'auto'});
    mlistForm.children('.ui-input-search').css({'width':'auto'});
    mlistForm.css({'width':'100%','margin':'0px'});

    //Changes for MComboBox
    jQuery('.ui-select').each(function(i,el){
      var MComboBox=jQuery(this);
      var button=MComboBox.find('.ui-btn').find('.ui-btn-inner');
      buttonStyle(MComboBox.children('select'),MComboBox.find('.ui-btn').andSelf(),{'height' : '100%','width' : '100%'});
      button.css(borderBoxing);
      button.css({'height':'100%'});
      button.children('.ui-btn-text').css({'position':'relative','top':'50%','display':'block','margin-top':'-9px'});
      MComboBox.find('.ui-btn').css({'background':changeBackgroundColor(jQuery(el).children('select')),margin:0});
      MComboBox.css({'display':'block'});
    });

    jQuery('.ui-selectmenu').each(function(i,el){
      jQuery(el).find('.ui-btn').css(contentBoxing);
    });

    //Changes for MButton
    jQuery('input[type=submit],input[type=button],input[type=reset],input[type=image]').not('[data-role="none"]').each(function(i,el){

      var button=jQuery(this);
      var parent=button.parent('.ui-btn');
      var styles=button.attr('style');
      var text=button.prev('.ui-btn-inner').children('.ui-btn-text');
      //css for external BOX

      var visibility="visible";
      if(styles && styles.search("visibility:hidden")!=-1)
        visibility="hidden";

      var css2={
        'visibility' : visibility,
        'height' : '100%'
      }
      parent.css(css2);

      //button top align
      var font=parseInt(text.css('font-size'));
      var padding=text.css('padding-top');
      var margin=parseInt(padding);
      if(padding && padding.indexOf('px')!=-1 && font>0)
        margin=(margin/font);

      margin=.6+margin;

      // all CSS for the inner box
      button.prev('.ui-btn-inner').css({'height' : '100%'});
      button.prev('.ui-btn-inner').css(borderBoxing);
      buttonStyle(button,text,{'position':'relative','top':'50%','display':'block','margin-top':'-'+margin+'em'});

      //jquery assigns a default color for the background so we have to check the inline style string
      parent.css({'background':changeBackgroundColor(button),margin:0});
      parent.css(borderBoxing);

      button.css({'opacity':'.01'});

    });

    //fix to visually uncheck components when the form is reset
    jQuery('form').bind('reset',function(){
      jQuery("input[type='checkbox']").not('input[data-role="none"]').attr('checked',false).checkboxradio("refresh");
      jQuery("input[type='radio']").not('input[data-role="none"]').attr('checked',false).checkboxradio("refresh");
      jQuery("input[data-type='range'],select[data-role='slider']").not('input[data-role="none"],select[data-role="none"]').each(function(){
        jQuery(this).val(this.defaultValue).slider('refresh');
      });
      jQuery('select[data-native-menu=false]').not('select[data-role="none"]').each(function(){
        jQuery(this).val(this.defaultValue).selectmenu('refresh');
      });
    });

    //styles por MLink
    jQuery("a:jqmData(role='button')").each(function(i,el){
      var mlink=jQuery(this);
      var text=mlink.children('.ui-btn-inner').children('.ui-btn-text');
      //button top align
      var font=parseInt(text.css('font-size'));
      var padding=text.css('padding-top');
      var margin=parseInt(padding);
      if(padding && padding.indexOf('px')!=-1 && font>0)
        margin=(margin/font);

      margin=.6+margin;

      mlink.children('.ui-btn-inner').css({'height' : '100%'});
      mlink.children('.ui-btn-inner').css(borderBoxing);
      buttonStyle(mlink,text,{'position':'relative','top':'50%','display':'block','margin-top':'-'+margin+'em'});
      //jquery assigns a default color for the background so we have to check the inline style string
      mlink.css({'background':changeBackgroundColor(mlink),margin:0});
    });

    //MToggle
    jQuery('.ui-slider-switch').each(function(i,el){
      var mtoggle=jQuery(this);
      var mtoggleNext=mtoggle.next('.ui-slider');
      var handle=mtoggleNext.find('.ui-slider-handle');

      var cssOuter={
        'height': '100%',
        'width': '100%',
        'top':'0px'
      }

      mtoggleNext.css(cssOuter);

      buttonStyle(mtoggle,mtoggleNext.find('.ui-slider-label'));

      handle.css({'height':'100%','margin-top':'0px','top':'-1px','background':changeBackgroundColor(mtoggle)});
    });

    //MCollapsible
    jQuery('.ui-collapsible-heading').each(function(){
      var mcollapsible=jQuery(this);
      buttonStyle(mcollapsible,mcollapsible.find('.ui-btn-inner'));
    });

    //MToolBar
    jQuery('.ui-navbar').each(function(){
      var mtoolbar=jQuery(this);
      buttonStyle(mtoolbar,mtoolbar.find('.ui-btn-inner'));
    });

});

