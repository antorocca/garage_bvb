//slider in car.php
const items = document.querySelectorAll('.img-sld');
const nbSlide = items.length;
const suivant = document.querySelector('.btn-right-sld');
const precedent = document.querySelector('.btn-left-sld');
let count = 0;

function slideSuivante(){
    items[count].classList.remove('active');

    if(count < nbSlide - 1){
        count++;
    }
    else{
        count = 0;
    }

    items[count].classList.add('active');
}
suivant.addEventListener('click',slideSuivante);

function slidePrecedent(){
    items[count].classList.remove('active');

    if(count > 0){
        count--;
    }
    else{
        count = nbSlide -1;
    }

    items[count].classList.add('active');
}
precedent.addEventListener('click', slidePrecedent);




//folder annonce in catalog.php

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


