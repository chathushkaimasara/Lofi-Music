let text = document.getElementById('text')
let Cat = document.getElementById('Cat')
let playerimage = document.getElementById('playerimage')

window.addEventListener('scroll', () => {
    let value = window.scrollY;

    text.style.marginTop = value * -0.3 + 'px';
    Cat.style.marginTop = value * -0.2 + 'px';
});

ScrollTrigger.create({ 
    animation: gsap.from(".playerimage", {
        y: "50vh", 
        scale: 6, 
        yPercent: -50, 
    }), 
    scrub: true, 
    trigger: ".content", 
    start: "top bottom", 
    endTrigger: ".content",
    end: "top center",
});