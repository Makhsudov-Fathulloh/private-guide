let input = document.querySelector('#input');
let button = document.querySelectorAll('.button');

for (item of button) {
    item.addEventListener('click', (e) => {
        buttontext = e.target.innerText;

        if (buttontext == 'x') {
            buttontext = '*'
        }
        if (buttontext == '÷') {
            buttontext = '/'
        }
        input.value += buttontext;
    });
}

function sin() {
    input.value = Math.sin(input.value);
}
function cos() {
    input.value = Math.cos(input.value);
}
function tan() {
    input.value = Math.tan(input.value);
}
function pow() {
    input.value = Math.pow(input.value, 2);
}
function sqrt() {
    input.value = Math.sqrt(input.value, 2);
}
function log() {
    input.value = Math.log(input.value);
}
function pi() {
    input.value = 3.14159265359;
}
function e() {
    input.value = 2.71828182846;
}
function fact() {
    let i, num, f;
    f = 1;
    num = input.value;

    for (i=1; i<=num; i++) {
        f = f * i;
    }
    i = i - 1;
    input.value = f;
}
function backspc() {
    input.value = input.value.substr(0, input.value.length - 1);
}