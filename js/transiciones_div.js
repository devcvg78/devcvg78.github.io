document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.col-lg-4');
    const image = document.querySelector('.position-relative img');

    function checkPosition() {
        const scrollPosition = window.scrollY + window.innerHeight;

        elements.forEach((element, index) => {
            const elementPosition = element.getBoundingClientRect().top + window.scrollY;

            if (scrollPosition > elementPosition) {
                if (index % 2 === 0) {
                    element.classList.add('show', 'hidden-left');
                    element.classList.remove('hidden-left');
                } else {
                    element.classList.add('show', 'hidden-right');
                    element.classList.remove('hidden-right');
                }
            } else {
                if (index % 2 === 0) {
                    element.classList.remove('show', 'hidden-left');
                    element.classList.add('hidden-left');
                } else {
                    element.classList.remove('show', 'hidden-right');
                    element.classList.add('hidden-right');
                }
            }
        });

        const imagePosition = image.getBoundingClientRect().top + window.scrollY;
        if (scrollPosition > imagePosition) {
            image.classList.add('show');
            image.classList.remove('hidden-right');
        } else {
            image.classList.remove('show');
            image.classList.add('hidden-right');
        }
    }

    window.addEventListener('scroll', checkPosition);
    checkPosition(); // Para comprobar la posición en la carga inicial
});
