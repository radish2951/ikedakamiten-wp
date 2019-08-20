const images = document.querySelectorAll('#main-image img');
const n = images.length;
const visibleDuration = 0.7;
const transitDuration = 1.2;
const unitDuration = visibleDuration + transitDuration;
const totalDuration = unitDuration * n;
const mainImage = document.getElementById('main-image');
const style = document.createElement('style');

style.innerText = `
    @keyframes slideshow {
        0% {
            opacity: 0;
            transform: scale(1.1);
        } ${100 * transitDuration / totalDuration}% {
            opacity: 1;
        } ${100 * unitDuration / totalDuration}% {
            opacity: 1;
        } ${100 * (unitDuration + transitDuration) / totalDuration}% {
            opacity: 0;
        } 100% {
            opacity: 0;
            transform: scale(1);
        }
    }
`;

mainImage.appendChild(style);

document.addEventListener('DOMContentLoaded', e => {
    for (let i = 0; i < n; i++) {
        images[i].style.opacity = 0;
        images[i].style.animation = `${totalDuration}s ${i * unitDuration}s linear infinite slideshow`;
    }
});
