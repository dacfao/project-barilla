document.addEventListener("DOMContentLoaded", () => {
// classe time  document.queryall  instance de button time add event lisenet et savoir si plus et moins
    const btn1 = document.querySelector('#myButton1');
    const btn2 = document.querySelector('#myButton2');
    const btn3 = document.querySelector('#myButton3');
  
    const btn4 = document.querySelector('#myButton4');
    const btn5 = document.querySelector('#myButton5');
  
        let compteur = 0; 

    if (btn1) {
        btn1.addEventListener('click', (ev) => {
            ev.preventDefault();
            compteur++; 
            console.log("Compteur:", compteur); // Affiche la valeur actuelle
        });
    } else {
        console.error("L'élément #myButton1 n'existe pas !");
    }
    if (btn2) {
        btn2.addEventListener('click', (ev) => {
            ev.preventDefault();
            compteur--; 
        });
    } else {
        console.error("L'élément #myButton2 n'existe pas !");
    }
    if (btn3) {
        btn3.addEventListener('click', (ev) => {
            ev.preventDefault();
            compteur--; 
        });
    } else {
        console.error("L'élément #myButton2 n'existe pas !");
    }
    if (btn4) {
        btn4.addEventListener('click', (ev) => {
            ev.preventDefault();
            compteur--; 
        });
    } else {
        console.error("L'élément #myButton2 n'existe pas !");
    }
    if (btn5) {
        btn5.addEventListener('click', (ev) => {
            ev.preventDefault();
            compteur--; 
        });
    } else {
        console.error("L'élément #myButton2 n'existe pas !");
    }
});