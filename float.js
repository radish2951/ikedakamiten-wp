function callback(entries, observer) {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.classList.add('appeared');
        }
    });
};

const observer = new IntersectionObserver(callback, {threshold: 0.9});

const floatElements = document.getElementsByClassName('float');

for (const e of floatElements) {
    observer.observe(e);
}
