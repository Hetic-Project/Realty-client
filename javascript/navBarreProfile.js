let buttonprofile = document.getElementById("buttonProfile");
let buttonlocation = document.getElementById("buttonLocation");
let buttonbillings = document.getElementById("buttonBillings");
let buttonmessage = document.getElementById("buttonMessage");

buttonprofile.addEventListener("click" , function(){
    profile.classList.add("active");
    location.classList.remove("active");
    billings.classList.remove("active");
    message.classList.remove("active");
    console.log("profile");
});

buttonlocation.addEventListener("click" , function(){
    profile.classList.remove("active");
    location.classList.add("active");
    billings.classList.remove("active");
    message.classList.remove("active");
    console.log("location");
});

buttonbillings.addEventListener("click" , function(){
    profile.classList.remove("active");
    location.classList.remove("active");
    billings.classList.add("active");
    message.classList.remove("active");
    console.log("billings");
});

buttonmessage.addEventListener("click" , function(){
    profile.classList.remove("active");
    location.classList.remove("active");
    billings.classList.remove("active");
    message.classList.add("active");
    console.log("message");
});
console.log("ça marche")