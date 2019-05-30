const backgroundImages = document.querySelectorAll('#main-image img');
const n = backgroundImages.length;
const visibleDuration = 1.5;
const transitDuration = 1;
const unitDuration = visibleDuration + transitDuration;
const totalDuration = unitDuration * n;
const t = transitDuration / unitDuration;
const mainImage = document.getElementById('main-image');
const style = document.createElement('style');

style.innerText = `
    @keyframes slideshow-first {
        0%   { opacity: 0; }
        ${t * 100 / n}% { opacity: 1; }
        ${100 / n}% { opacity: 1; }
        ${(1+t) * 100 / n}% { opacity: 0; }
        100% { opacity: 0; }
    }
    @keyframes slideshow-middle {
        0%   { opacity: 1; }
        ${100 / n}% { opacity: 1; }
        ${(1+t) * 100 / n}% { opacity: 0; }
        ${(n-t) * 100 / n}% { opacity: 0; }
        100% { opacity: 1; }
    }
    @keyframes slideshow-last {
        0%   { opacity: 1; }
        ${(1+t) * 100 / n}% { opacity: 1; }
        ${(1+2*t) * 100 / n}% { opacity: 0; }
        ${(n-t) * 100 / n}% { opacity: 0; }
        100% { opacity: 1; }
    }

    @keyframes slideshow {
        0% { opacity: 1; }
        ${100 * 0.5 * visibleDuration / totalDuration}% { opacity: 1; }
        ${100 * (0.5 * visibleDuration + transitDuration) / totalDuration}% { opacity: 0; }
        ${100 * (1 - 0.5 * visibleDuration / totalDuration)}% { opacity: 1; }
        ${100 * (1 - (0.5 * visibleDuration + transitDuration) / totalDuration)}% { opacity: 0; }
        100% { opacity: 1; }
    }

    @keyframes z {
    0% { z-index: 0; }
    50% { z-index: 100; }
    100% { z-index: 0; }
    }

`;

mainImage.appendChild(style);

for (i = n - 1; i > 0; i--) {
    let position = 'middle';
    if (i == n - 1) {
        position = 'first';
    } else if (i == 0) {
        position = 'last';
    }
    //backgroundImages[i].style.animation = `${totalDuration}s ${(n-1-i) * unitDuration}s infinite slideshow-${position}`;
    backgroundImages[i].style.animation = `${totalDuration}s ${i * unitDuration}s infinite slideshow`;
    //backgroundImages[i].style.animation = `0.2s ${i*0.73}s infinite z`;
}

