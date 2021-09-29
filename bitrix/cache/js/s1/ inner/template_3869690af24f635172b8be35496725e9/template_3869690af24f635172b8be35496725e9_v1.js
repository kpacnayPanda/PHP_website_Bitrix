
; /* Start:"a:4:{s:4:"full";s:83:"/bitrix/templates/.default/components/bitrix/menu/side_menu/script.js?1632909325890";s:6:"source";s:69:"/bitrix/templates/.default/components/bitrix/menu/side_menu/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
var opened = false;

function change_menu() { 
  opened = true;
  var menu = document.getElementById("open");
  if (menu.className == "close") {
    menu.className = "open current";
  } else {
    menu.className = "close";
  }
} 

// var jsvhover = function()
// {
// 	// var menuDiv = document.getElementById("vertical-multilevel-menu");
//     var menuDiv = document.getElementById("side_menu");
// 	if (!menuDiv)
// 		return;
//   console.log(menuDiv);
//   var nodes = menuDiv.getElementsByTagName("span");
//   for (var i=0; i<nodes.length; i++) 
//   {
//     nodes[i].onmouseover = function()
//     { 
//       this.className += " jsvhover";
//     }
    
//     nodes[i].onmouseout = function()
//     {
//       this.className = this.className.replace(new RegExp(" jsvhover\\b"), "");
//     }
//   }
// }

// if (window.attachEvent) 
// 	window.attachEvent("onload", jsvhover); 

/* End */
;; /* /bitrix/templates/.default/components/bitrix/menu/side_menu/script.js?1632909325890*/
