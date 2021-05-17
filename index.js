
/* JS for Togglee Menu*/
var navLinks= document.getElementById("navLinks");
function showMenu(){
    navLinks.style.right="0";
}
function hideMenu(){
    navLinks.style.right="-200px";
}


/*JS for user's Location*/
const successCallback = (position) =>{
    console.log(position);
};

const errorCallback = (error) =>{
    console.log(error);
};

navigator.geolocation.getCurrentPosition(successCallback, errorCallback);