<%@ taglib uri="/WEB-INF/cda.tld" prefix="cda" %>
<%@ taglib uri="/WEB-INF/struts-logic.tld" prefix="logic" %>

<script language="JavaScript">

<logic:present name="page_bean">

/*
	 Milonic DHTML Website Navigation Menu
	 Written by Andy Woolley - Copyright 2003 (c) Milonic Solutions Limited. All Rights Reserved
	 Please visit http://www.milonic.co.uk/ for more information

	 Although this software may have been freely downloaded, you must obtain a license before using it in any production environment
	 The free use of this menu is only available to Non-Profit, Educational & Personal Web Sites who have obtained a license to use 
	 
	 Free, Commercial and Corporate Licenses are available from our website at http://www.milonic.co.uk/menu/supportcontracts.php
	 You also need to include a link back to http://www.milonic.co.uk/ if you use the free license
	 
	 All Copyright notices MUST remain in place at ALL times
	 If you cannot comply with all of the above requirements, please contact us to arrange a license waiver
*/



//The following line is critical for menu operation, and MUST APPEAR ONLY ONCE.
menunum=0;menus=new Array();_d=document;function addmenu(){menunum++;menus[menunum]=menu;}function dumpmenus(){mt="<scr"+"ipt language=JavaScript>";for(a=1;a<menus.length;a++){mt+=" menu"+a+"=menus["+a+"];"}mt+="<\/scr"+"ipt>";_d.write(mt)}
//Please leave the above line intact. The above also needs to be enabled if it not already enabled unless you have more than one _array.js file


////////////////////////////////////
// Editable properties START here //
////////////////////////////////////

timegap=500                   // The time delay for menus to remain visible
followspeed=5                 // Follow Scrolling speed
followrate=50                 // Follow Scrolling Rate
suboffset_top=5               // Sub menu offset Top position
suboffset_left=10             // Sub menu offset Left position



PlainStyle=[                  // PlainStyle is an array of properties. You can have as many property arrays as you need
"99ccff",                     // Mouse Off Font Color
"3366CC",                     // Mouse Off Background Color (use zero for transparent in Netscape 6)
"FFFFFF",                     // Mouse On Font Color
"999999",                     // Mouse On Background Color
,                             // Menu Border Color
"11",                         // Font Size (default is px but you can specify mm, pt or a percentage)
"normal",                     // Font Style (italic or normal)
"normal",                     // Font Weight (bold or normal)
"Geneva, Arial, Helvetica, sans-serif",			  // Font Name
1,                            // Menu Item Padding or spacing
,                             // Sub Menu Image (Leave this blank if not needed)
1,                            // 3D Border & Separator bar
"999999",                     // 3D High Color
"999999",                     // 3D Low Color
,                             // Current Page Item Font Color (leave this blank to disable)
,                             // Current Page Item Background Color (leave this blank to disable)
,                             // Top Bar image (Leave this blank to disable)
"ffffff",                     // Menu Header Font Color (Leave blank if headers are not needed)
"ffffff",                     // Menu Header Background Color (Leave blank if headers are not needed)
,                             // Menu Item Separator Color
]


addmenu(menu=[
"boundmenu",                  // Menu Name - This is needed in order for this menu to be called
,                             // Menu Top - The Top position of this menu in pixels
,                             // Menu Left - The Left position of this menu in pixels
,                             // Menu Width - Menus width in pixels
,                             // Menu Border Width
,                             // Screen Position - here you can use "center;left;right;middle;top;bottom" or a combination of "center:middle"
PlainStyle,                   // Properties Array - this array is declared higher up as you can see above
1,                            // Always Visible - allows this menu item to be visible at all time (1=on or 0=off)
,                             // Alignment - sets this menu elements text alignment, values valid here are: left, right or center
,                             // Filter - Text variable for setting transitional effects on menu activation - see above for more info
0,                            // Follow Scrolling Top Position - Tells this menu to follow the user down the screen on scroll placing the menu at the value specified.
1,                            // Horizontal Menu - Tells this menu to display horizontaly instead of top to bottom style (1=on or 0=off)
0,                            // Keep Alive - Keeps the menu visible until the user moves over another menu or clicks elsewhere on the page (1=on or 0=off)
,                             // Position of TOP sub image left:center:right
,                             // Set the Overall Width of Horizontal Menu to specified width or 100% and height to a specified amount
0,                            // Right To Left - Used in Hebrew for example. (1=on or 0=off)
0,                            // Open the Menus OnClick - leave blank for OnMouseover (1=on or 0=off)
,                             // ID of the div you want to hide on MouseOver (useful for hiding form elements)
,                             // Background image for menu Color must be set to transparent for this to work
0,                            // Scrollable Menu
,                             // Miscellaneous Menu Properties
<cda:menu id="mItem" name="page_bean" menuSet="menuTree" type="Top" level="1">
,"<cda:menuItem name="mItem" property="name" />"
<logic:equal name="mItem" property="childs" value="0">
  ,"<cda:menuItem name="mItem" property="url" />"
</logic:equal>
<logic:notEqual name="mItem" property="childs" value="0">
  ,"show-menu=<cda:menuItem name="mItem" property="idn" />"
</logic:notEqual>
,,,1
</cda:menu>
])

<cda:menu id="mItem" name="page_bean" menuSet="menuTree" type="Top" level="1">
addmenu(menu=[
"<cda:menuItem name="mItem" property="idn" />",
,
,
85,
1,
,
PlainStyle,
0,
,
,
0,
0,
0,
,
,
0,
,
,
,
0,
,
<cda:menu id="smItem" name="page_bean" menuSet="menuTree" type="Top" 
          level="2" parentId="mItem" >
,"<cda:menuItem name="smItem" property="name" />"
<logic:equal name="smItem" property="childs" value="0">
  ,"<cda:menuItem name="smItem" property="url" />"
</logic:equal>
<logic:notEqual name="smItem" property="childs" value="0">
  ,"show-menu=<cda:menuItem name="smItem" property="idn" />"
</logic:notEqual>
,,,0
</cda:menu>
])
</cda:menu>

dumpmenus();

</logic:present>
</script>
	