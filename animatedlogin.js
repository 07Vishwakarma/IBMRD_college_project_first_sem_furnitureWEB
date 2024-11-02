let registerbtn=document.querySelector(".registerbtn");
registerbtn.addEventListener("click",function(){
   document.querySelector(".signin").classList.add("active");
   document.querySelector(".register").classList.add("active");
})

let signinbtn=document.querySelector(".signinbtn");
signinbtn.addEventListener("click",function(){
   document.querySelector(".signin").classList.remove("active");
   document.querySelector(".register").classList.remove("active");
})