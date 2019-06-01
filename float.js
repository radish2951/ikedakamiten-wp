

function callback(entries, observer) {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.classList.add('appeared');
        }
    });
};


let observer = new IntersectionObserver(callback, {threshold: 0.1});

let floatElements = document.getElementsByClassName('float');

for (const e of floatElements) {
    observer.observe(e);
}
