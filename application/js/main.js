document.querySelector('.next-perfomance__btn').addEventListener('click', () => window.open('/next-perfomance', '_self'));

window.addEventListener('resize', function(event) {
    console.log(`${window.outerWidth} ${window.outerHeight}`);
}, true);