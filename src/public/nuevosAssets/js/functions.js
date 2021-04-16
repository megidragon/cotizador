<!--DOCUMENT CONTENT_TYPE="text/javascript"  -->

/***********************************************
* Scrollable content Script- � Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
var agt=navigator.userAgent.toLowerCase(); 

var is_nav  = ((agt.indexOf('mozilla')!=-1) && (agt.indexOf('spoofer')==-1) 
            && (agt.indexOf('compatible') == -1) && (agt.indexOf('opera')==-1) 
            && (agt.indexOf('webtv')==-1));

var nsstyle='display:""'
if (document.layers)
var scrolldoc=document.scroll1.document.scroll2
function up(){
  if (!document.layers) return
  if (scrolldoc.top<0)
    scrolldoc.top+=10
  temp2=setTimeout("up()",50)
}
function down(){
  if (!document.layers) return
  if (scrolldoc.top-150>=scrolldoc.document.height*-1)
    scrolldoc.top-=10
  temp=setTimeout("down()",50)
}

function clearup(){
  if (window.temp2)
    clearInterval(temp2)
}

function cleardown(){
  if (window.temp)
    clearInterval(temp)
}

function MM_findObj(n, d) { //v4.01
  var p,i,x; 
  if(!d) 
    d=document;
  if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; 
    n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) 
    x=d.all[n]; 
  for (i=0;!x&&i<d.forms.length;i++) 
    x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) 
    x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) 
    x=d.getElementById(n); return x;
}

function MM_openBrWindow(theURL,winName,features) { //v2.0
  strw = 'width=';
  strh = 'height=';

  // obtengo el valor de width y lo pongo en w
  w1 = features.substr(features.indexOf(strw) + strw.length);
  w = w1.substr(0, w1.indexOf(','));

  // obtengo el valor de height y lo pongo en h
  h1 = features.substr(features.indexOf(strh) + strh.length);
  h = h1.substr(0, h1.indexOf(','));

  LeftPosition=(screen.width)?(screen.width-w)/2:100;
  TopPosition=(screen.height)?(screen.height-h)/2:100;

  settings = features+',top='+TopPosition+',left='+LeftPosition;
  
  
  if (winName=='popFull'){
  settings = settings + ',type=fullWindow,fullscreen';
  
  }
  settings = settings + ',resizable=yes';
 
  window.open(theURL,winName,settings);

}



function MM_openBrWindowParam(theURL,winName,features, imagen) { //v2.0
  strw = 'width=';
  strh = 'height=';

  // obtengo el valor de width y lo pongo en w
  w1 = features.substr(features.indexOf(strw) + strw.length);
  w = w1.substr(0, w1.indexOf(','));

  // obtengo el valor de height y lo pongo en h
  h1 = features.substr(features.indexOf(strh) + strh.length);
  h = h1.substr(0, h1.indexOf(','));

  LeftPosition=(screen.width)?(screen.width-w)/2:100;
  TopPosition=(screen.height)?(screen.height-h)/2:100;

  settings = features+',top='+TopPosition+',left='+LeftPosition;
  
  

  theURL=theURL+'&idn_image='+'Imagen'+imagen;
  
  
  window.open(theURL,winName,settings);
}
function MM_openBrWindowTop(theURL,winName,features) { //v2.0
  LeftPosition=0;
  TopPosition=0;

  settings = features+',top='+TopPosition+',left='+LeftPosition;

  window.open(theURL,winName,settings);
}

function MM_openLink(theURL) {
  window.open(theURL,winName,features);
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; 
  for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) 
    x.src=x.oSrc;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; 
  document.MM_sr=new Array; 
  for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){
     document.MM_sr[j++]=x; 
     if(!x.oSrc) 
       x.oSrc=x.src; 
     x.src=a[i+2];}
}

function openPopup( url, name, width, height, options ) {
    if (is_nav) {
		if ( ! width ) Width = 792;
		if ( ! height ) Height = 467;
    } else {
		if ( ! width ) width = 792;
		if ( ! height ) height = 467;
	}
	if (is_nav) {
		if ( ! options ) options = "toolbar=no,scrollbars=yes,menubar=no,location=no,directories=no,status=yes,screenX=10,screenY=10";
	} else {
		if ( ! options ) options = "toolbar=no,scrollbars=yes,menubar=no,location=no,directories=no,status=yes,left=10,top=10";
	}
	if ( ! name ) name = "PopUp";
	var newWin = window.open( url, name, "width=" + width + ",height=" + height + "," + options );
	
	return newWin;
}

function MM_openLink(theURL) {
  window.location.href=theURL;
}

function MM_openLinkPopupFull(theURL) {
  window.open(theURL,"plain","width=800,height=600,dependent=yes,directories=yes,hotkeys=yes,location=yes,menubar=yes,personalbar=yes,resizable=yes,scrollbars=yes,status=yes,toolbar=yes"); 
}

/************
 * Caracteres
 * 8: 
 * 32: Spc
 * 39: '
 * 44: ,
 * 45: -
 * 46: .
 ************/
function onlyNumbers(e)
{
	tecla = (document.all) ? e.keyCode : e.which; // 2
	if (tecla == 9)
	return true;
	if (tecla == 0)
	return true;
	if (tecla > 45 && tecla < 58)
	return true;
	if (tecla == 47)
	return true;
    if (tecla==8) return true; // 3
    patron =/\d/; // 4
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
    
}


function onlyLetters()
{
	if (((event.keyCode>64) && (event.keyCode<123)) 
	    || (event.keyCode==32)
	    || (event.keyCode==39)
	    || (event.keyCode==44)) {
		return true;
	}
	return false;
}

function alfanumerico(){
	tecla = (document.all) ? event.keyCode : event.which;
	if(!(65<=tecla && tecla<=90 || 97<=tecla && tecla<=122 || 48<=tecla && tecla<=57)){
      window.event.keyCode=0;
      return false;
	}
	return true;
}

function setLabel(v, f) {
  document.getElementById(v).value = f.options [f.selectedIndex].text;
}

/*
si no trae imagen muestra una por defecto
*/    
    
function validarImagen(imagen, defaultImage) {
			myImage = new Image()
			myImage.src = imagen;
		
			if (myImage.height > 0){
				document.test.src = myImage.src;
				
			} else {
			   
				document.test.src = defaultImage;
			}
		}    
		
