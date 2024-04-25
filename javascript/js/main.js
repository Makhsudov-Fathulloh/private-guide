

const getRandomNumber = (min, max) => {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
const generate = () => {
    const minEl = document.getElementById('min');
    const maxEl = document.getElementById('max');
    const min = Number(minEl.value);
    const max = Number(maxEl.value);

    if (typeof min !== 'number' || typeof max !== 'number') {
        alert("Min va Max qiymatlari NUMBER bo'lishi kerak!");
        // console.log(typeof min, typeof max)
        return;
    }
    if (min > max) {
        alert("Min qiymati Max qiymatidan kichik bo'lishi kerak!");
        return;
    }

    if (minEl.value === '' && maxEl.value === '') {
        alert("Iltimos min va max qiymatlarini kiriting!");
        return;
    }
    if (minEl.value === '') {
        alert("Iltimos min qiymatlarini kiriting!");
        return;
    }
    if (maxEl.value === '') {
        alert("Iltimos max qiymatlarini kiriting!");
        return;
    }

    const placeholderEl = document.querySelector('#placeholder');
    placeholderEl.textContent = getRandomNumber(min, max);
}

const btnEl = document.getElementById('generate');
btnEl.addEventListener('click', generate);