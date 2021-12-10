
//unfold the ad in catalog.php
let container = document.querySelector(".txt-ann");
let a = 0;
function unfold(){
    container.style.clipPath = 'polygon(100% 0, 85% 100%, 0 100%, 0 100%, 0 100%, 0 100%, 0 100%, 0 100%, 0 0)';
    container.style.borderTopRightRadius = "none";
    a++;
    console.log(a);

    function fold(){
        container.style.clipPath ='polygon(100% 0, 100% 100%, 95% 14%, 95% 13%, 94% 10%, 93% 8%, 91% 6%, 89% 5%, 0 0)';
        container.style.borderRadius = "20px";
    }
    container.addEventListener("click", fold);
}


if(a%2 == 0){
    container.addEventListener("click", unfold);
}