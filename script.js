// Working search box..
function workingSearchBox(){
    let query = document.querySelector('.query');
    let searchBtn = document.querySelector('.btn');
    searchBtn.onclick = function(){
        let url = 'https://www.google.com/search?q='+query.value;
        window.open(url);
        window.location.reload();
}
}
workingSearchBox();

// Loading Animation..
function loadingAnimation(){
    var loader = document.getElementById('preloader');
    window.addEventListener('load', function(){
    loader.style.display  = "none";
});
}
loadingAnimation();

//theme changing..
function changeTheme(){
    var icon = document.getElementById("icon");
    icon.onclick= function(){
        document.body.classList.toggle("dark-theme");
        if(document.body.classList.contains("dark-theme")){
            icon.src ="images/sun.png";
        }
        else{
            icon.src = "images/moon.png";
        }
    }
}
changeTheme();
