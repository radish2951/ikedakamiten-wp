document.addEventListener('DOMContentLoaded', () => {
    const chochinContainer = document.getElementById('chochin');
    const chochins = chochinContainer.getElementsByTagName('img');

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(e => {
            if(e.isIntersecting) {
                chochinContainer.classList.add('intersect');
                alert('Intersect');
            }
        });
    }, {threshold: 0.1});

    observer.observe(chochinContainer);



});
