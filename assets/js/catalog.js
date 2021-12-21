
//unfold the ad in catalog.php
let container = document.querySelector(".txt-ann");
let a = 0;
function unfold(){
    container.classList.replace('fold','unfold');
}
function fold(){
    container.classList.replace('unfold','fold');
}

    // container.addEventListener("click", fold);
    container.addEventListener("click", unfold);
