var logName=document.querySelector(".UserName");
var logEmail=document.querySelector(".UserEmail");
var logPass=document.querySelector(".UserPass");
var BtnSignUp=document.querySelector(".BTNSignUp");

var UsersList=[]


if(localStorage.getItem("myUsers") === null){
    UsersList=[]
}else{
    UsersList = JSON.parse(localStorage.getItem("myUsers"));
}

BtnSignUp.addEventListener("click",function(){
if(ValidateName() == true && ValidateEmail() ==true){
    var users={
        Name:logName.value,
        Email:logEmail.value,
        Pass:logPass.value
      }
      UsersList.push(users)
      Local_Storage()
      CLear()
}else{
    alert("Please Check Your Input")
}
 
})

function ValidateName(){
  var regeName=/^[a-z]{3,9}$/
  return regeName.test(logName.value);
}

function ValidateEmail(){
  var regeEmail=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
  return regeEmail.test(logEmail.value);
}






function CLear(){
    logName.value="";
    logEmail.value="";
    logPass.value="";
}
function Local_Storage(){
    localStorage.setItem("myUsers",JSON.stringify(UsersList));
}

