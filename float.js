function callback(entries, observer) {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.classList.add('appeared')
        }
    })
}

document.addEventListener('DOMContentLoaded', () => {

    const style = document.createElement('style')
    style.innerHTML = `
        .float {
            opacity: 0;
            transition: opacity 2s;
        }
        .float.appeared {
            opacity: 1;
        }`

    document.body.appendChild(style);

    const observer = new IntersectionObserver(callback, {
        rootMargin: '0px 0px -20% 0px'
    })

    const floatElements = document.getElementsByClassName('float')

    for (const e of floatElements) {
        observer.observe(e);
    }
})
