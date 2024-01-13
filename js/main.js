var logEmail=document.querySelector(".UserEmail");
var logPass=document.querySelector(".UserPass");
var BoxSection=document.querySelector(".main");
var BtnLogin=document.querySelector(".BTN");
var SectionHello=document.querySelector("#welcome");
var exitBtn=document.querySelector(".loGout");


var UsersList=[];
var UserLogin=[]
if(localStorage.getItem("myUsers") === null){
    UsersList=[]
}else{
    UsersList = JSON.parse(localStorage.getItem("myUsers"));
}

BtnLogin.addEventListener("click",function(){
 var usersLogin={
    email:logEmail.value,
    pass:logPass.value
 }
 UserLogin.push(usersLogin)

if (JSON.stringify(UsersList).includes(usersLogin.email&& usersLogin.pass)) {
    console.log("found")
    if (ValidatePass()== true &&  ValidateEmail() == true) {
        location.assign("welcome.html")
    }else{
        alert("Please Enter The Correct Info ")
    }
    

}
})



function Local_Storage(){
    localStorage.setItem("myUsers",JSON.stringify(UsersList));
}

function ValidatePass(){
    var regePass=/[A-Z][a-z]{3,9}$/
    return regePass.test(logPass.value);
  }
  
function ValidateEmail(){
    var regeEmail=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
    return regeEmail.test(logEmail.value);
  }
  
  