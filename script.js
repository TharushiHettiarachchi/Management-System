function switchToLogin(){
var newAccountPage = document.getElementById("newAccountPage");
var loginPage = document.getElementById("loginPage");
newAccountPage.style.display = "none";
loginPage.style.display = "block";
loginPage.style.display = "flex";
}

function switchToNewAccount(){
    var newAccountPage = document.getElementById("newAccountPage");
    var loginPage = document.getElementById("loginPage");
    newAccountPage.style.display = "block";
    newAccountPage.style.display = "flex";
    loginPage.style.display = "none";
}