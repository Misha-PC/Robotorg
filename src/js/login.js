

var state = true;


function swap(){
    document.getElementById("reg").style.display = "block";
    log = document.getElementById("log");

    if(state){
        document.getElementById("reg").style.display = "block";
        document.getElementById("log").style.display = "none";
        document.getElementById("swap_selector").style.left  = "auto";
        document.getElementById("swap_selector").style.right = 0;
    }
    else{
        document.getElementById("reg").style.display = "none";
        document.getElementById("log").style.display = "block";
        document.getElementById("swap_selector").style.left  = 0;
        document.getElementById("swap_selector").style.right = "auto";
    }
    state = !state;
}