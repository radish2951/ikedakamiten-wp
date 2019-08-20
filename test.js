function f() {
    const fusuma = document.querySelector('#fusuma')
    const fusumah2 = document.querySelector('#fusuma h2');
    const h = parseInt(window.getComputedStyle(fusuma).getPropertyValue('height'))

    window.onload = e => {
        const t = fusuma.getBoundingClientRect().top + window.scrollY
        const b = fusuma.getBoundingClientRect().bottom + window.scrollY
        console.log(t, b, b - t)
    }

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(e => {
            // This is triggered only when intersection
            if (e.isIntersecting) {
                const start = window.scrollY
                let ratio = 0
                window.addEventListener('scroll', e => {
                    const direction = Math.sign(window.scrollY - start)
                    ratio = 1 - direction * (window.scrollY - start) / h
                    fusuma.style.opacity = ratio
                })
            }
        })
    }, {threshold: [1.0]});

    observer.observe(fusumah2);
}

function g() {
    const fusuma = document.getElementById('fusuma')

    window.onload = () => {
        const dom = fusuma.getBoundingClientRect()
        const t = dom.top + window.scrollY
        const b = dom.bottom + window.scrollY

        const sumires = fusuma.getElementsByTagName('img')
        console.log(sumires)

        let r
        let s

        window.onscroll = () => {
            s = window.scrollY
            if (s < t || b < s) return
            r = (s - t) / (b - t)
            sumires[0].style.transform = `translateX(-${r*240}px) translateZ(${r*240}px)`
            sumires[1].style.transform = `translateX(${r*240}px) translateZ(${r*240}px)`
        }
    }
}


g()
