function callback(entries, observer) {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.classList.add('appeared');
        }
    });
};

const observer = new IntersectionObserver(callback, {
    rootMargin: '0px 0px -20% 0px'
});

const floatElements = document.getElementsByClassName('float');

for (const e of floatElements) {
    observer.observe(e);
}
