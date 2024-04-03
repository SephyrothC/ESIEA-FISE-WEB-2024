
/**
 * Changes the background color of an element when a button is clicked.
 * @param {string} elementId - The ID of the element to change the background color of.
 * @param {string} buttonId - The ID of the button that triggers the color change.
 */
let elementById = document.getElementById('section3');
let bouton = document.getElementById('btn');
clicked = false;
bouton.addEventListener('click', function() {
    if (clicked === false) {
        elementById.style.backgroundColor = 'red';
        clicked = true;
    } else {
        elementById.style.backgroundColor = 'white';
        clicked = false;
    }
    

});

function additioner(a, b) {
    return a + b;
}

let resultat = additioner(2, 3);
let elementByClass = document.getElementsByClassName('section2');
elementByClass[0].innerHTML = resultat;
