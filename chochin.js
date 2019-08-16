document.addEventListener('DOMContentLoaded', () => {
    const chochinContainer = document.getElementById('chochin');
    const chochins = chochinContainer.getElementsByTagName('img');

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(e => {
            if(e.isIntersecting) {
                // document.body.classList.toggle('dark');
                for (let i = 0; i < chochins.length; i++) {
                    window.setTimeout(() => {
                        chochins[i].classList.add('appeared');
                    }, i * 200);
                }
            }
        });
    }, {threshold: 0.4});

    observer.observe(chochinContainer);



});
