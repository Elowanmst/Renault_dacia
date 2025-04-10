document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.carousel-container').forEach(container => {
        const carousel = container.querySelector('.carousel');
        const nextButton = container.querySelector('.next');
        const prevButton = container.querySelector('.prev');

        let scrollAmount = 0;

        nextButton.addEventListener('click', () => {
            scrollAmount += 250; // Définit la largeur de défilement
            carousel.style.transform = `translateX(-${scrollAmount}px)`;
        });

        prevButton.addEventListener('click', () => {
            scrollAmount -= 250;
            if (scrollAmount < 0) scrollAmount = 0; // Empêche le défilement négatif
            carousel.style.transform = `translateX(-${scrollAmount}px)`;
        });
    });
});