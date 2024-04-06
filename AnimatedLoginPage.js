const register=document.getElementById("register");
const container=document.getElementById("container");
const loginbtn=document.getElementById("login");

register.addEventListener("click",()=>{
    container.classList.remove("active");

});

loginbtn.addEventListener("click",()=>{
    container.classList.add("active");
});
