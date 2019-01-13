const backgroundImages = document.querySelectorAll('#main-image img');
const n = backgroundImages.length;
const visibleDuration = 1;
const transitDuration = 0.4;
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

`;

mainImage.appendChild(style);

for (i = n - 1; i > 0; i--) {
    let position = 'middle';
    if (i == n - 1) {
        position = 'first';
    } else if (i == 0) {
        position = 'last';
    }
    backgroundImages[i].style.animation = `${totalDuration}s ${(n-1-i) * unitDuration}s infinite slideshow-${position}`;
}
