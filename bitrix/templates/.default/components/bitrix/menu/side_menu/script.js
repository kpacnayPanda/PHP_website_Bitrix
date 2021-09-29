function change_menu() { 
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
