function login(){
    window.open("login.html");
    window.close("index.html");
}
function home(){
    window.open("index.html");
    window.close("login.html");
    window.close("hospital.html");
    window.close("shelter.html");
    window.close("rescue.html");
    window.close("supplies.html");
    window.close("legal.html");
    window.close("online_vet.html");
}
function hospitals(){
    window.open("hospital.html");
    window.close("home.html");
}
function shelter(){
    window.open("shelter.html");
    window.close("home.html");
}
function rescue(){
    window.open("rescue.html");
    window.close("home.html");
}
function supplies(){
    window.open("supplies.html");
    window.close("home.html");
}
function legal(){
    window.open("legal.html");
    window.close("home.html");
}
function online_vet(){
    window.open("online_vet.html");
    window.close("home.html");
}
function phospitals(){
    window.open("phospitals.html");
    window.close("home.html");
}
function ghospitals(){
    window.open("ghospitals.html");
    window.close("home.html");
}
function about(){
    window.open("about.html");
    window.close("home.html");
}
function full_time_phospitals() {
    window.open("full_time_phospitals.html");
    window.close("home.html"); 
}
function feedback(){
    window.open("feedback.html");
    window.close("home.html");
}
const search = () => {
   const searchbox = document.getElementById('searchinput').value.toUpperCase();
   const searchlist = document.querySelectorAll('.card mb-3');
   const searchlist1 = document.querySelectorAll('.row g-0'); 
   const searchlist2 = document.querySelectorAll('.col-md-8');
   const searchlist3 = document.querySelectorAll('.card-body'); 
   const searchlist4 = searchlist.querySelectorAll('.card-title'); 
   const name = document.getElementsByTagName("h5");

   for(var i=0; i< name.length; i++){
    let match = searchlist3[i].getElementsByTagName('h5')[0];

    if(match){
        let textValue = match.textContent || match.innerHTML

        if(textValue.toUpperCase().indexOf(searchbox) > -1){
            searchlist3[i].Style.display = "";
        }
        else {
            searchlist3[i].Style.display = "none";
        }
    }
   }
}
