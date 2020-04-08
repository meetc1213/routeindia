// // Sticky navbar
// var prevScrollpos = window.pageYOffset;
//
//
// window.onscroll = function() {
//   var currentScrollPos = window.pageYOffset;
//   if (prevScrollpos > currentScrollPos) {
//     console.log("stick!!");
//     document.getElementById("navbar").style.top = "0%";
//   } else {
//     document.getElementById("navbar").style.top = "-100%";
//   }
//   prevScrollpos = currentScrollPos;
// }
// Active links
//
// var tabs=document.querySelectorAll(".topnav a.anc");
// for (i=0;i<tabs.length;i=i+1){
//   tabs[i].addEventListener("click", activate);
//   console.log("set");
// }
// function activate() {
//   console.log("clicked");
//   if (this.classList.contains("active")==false){
//     this.className=this.className+" active"
//   }
// }
// $('.topnav a').on('click', function(){
//   $('.topnav .active').removeClass('active');
//   $(this).addClass('active');
// });
