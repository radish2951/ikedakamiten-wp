const images = document.querySelectorAll('#main-image img');
const n = images.length;
const visibleDuration = 0.5;
const transitDuration = 2;
const unitDuration = visibleDuration + transitDuration;
const totalDuration = unitDuration * n;
const mainImage = document.getElementById('main-image');
const style = document.createElement('style');

style.innerText = `
    @keyframes slideshow {
        0% { opacity: 0; }
        ${100 * transitDuration / totalDuration}%                  { opacity: 1; }
        ${100 * unitDuration / totalDuration}%                     { opacity: 1; }
        ${100 * (unitDuration + transitDuration) / totalDuration}% { opacity: 0; }
        100% { opacity: 0; }
    }
`;

mainImage.appendChild(style);

document.addEventListener('DOMContentLoaded', e => {
    for (let i = 0; i < n; i++) {
        images[i].style.opacity = 0;
    }
});

window.addEventListener('load', e => {
    for (i = 0; i < n; i++) {
        images[i].style.animation = `${totalDuration}s ${i * unitDuration}s infinite slideshow`;
    }
});
