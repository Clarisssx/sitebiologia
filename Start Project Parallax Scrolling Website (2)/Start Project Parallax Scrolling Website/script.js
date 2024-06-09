let text = document.getElementById('text');
let leaf = document.getElementById('leaf');
let hill1 = document.getElementById('hill1');
let hill4 = document.getElementById('hill4');
let hill5 = document.getElementById('hill5');
let btnBox = document.getElementById('btn-box');

window.addEventListener('scroll', () => {
    let value = window.scrollY;

    text.style.marginTop = value * 2.5 + 'px';
    leaf.style.left = value * 1.5 + 'px';
    hill5.style.left = value * 1.5 + 'px';
    hill4.style.left = value * 1.5 + 'px';
    hill1.style.top = value * 1 + 'px';
    btnBox.style.marginTop = value * 2.5 + 'px'; // Move buttons with text

    if (value > window.innerHeight) { // Adjust as needed
        text.style.opacity = '0'; // Hide the title
        btnBox.style.opacity = '0'; // Hide the buttons
    } else {
        text.style.opacity = '1'; // Show the title
        btnBox.style.opacity = '1'; // Show the buttons
    }
});
