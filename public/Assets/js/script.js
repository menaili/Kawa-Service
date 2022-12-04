
const logo = document.getElementById("logo");
const services = document.getElementById("ourservice");
function show(){
    services.classList.add('show');
}
function hid(){
    services.classList.remove('show');
}



const profile = document.getElementById("ourprofile");
function showProfile(){
    profile.classList.add('showProfile');
}
function hidProfile(){
    profile.classList.remove('showProfile');
}




window.onscroll=()=>{
    var header= document.getElementById("head");
	if (window.scrollY>100) {
		header.classList.add("scrolled");
	}else{
		header.classList.remove("scrolled");
	}
}


