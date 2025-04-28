document.addEventListener('DOMContentLoaded', () => {
    const carousels = document.querySelectorAll('.carousel-container-show');

    carousels.forEach(container => {
        const carousel = container.querySelector('.carousel-show');
        const nextButton = container.querySelector('.next-show');
        const prevButton = container.querySelector('.prev-show');
        const images = carousel.querySelectorAll('.vehicle-image-show');
        const imageWidth = images[0].clientWidth; // Largeur d'une image
        let currentIndex = 0;

        // Fonction pour mettre à jour la position du carrousel
        const updateCarousel = () => {
            carousel.style.transform = `translateX(-${currentIndex * imageWidth}px)`;
        };

        // Bouton "Next"
        nextButton.addEventListener('click', () => {
            if (currentIndex < images.length - 1) {
                currentIndex++;
                updateCarousel();
            }
        });

        // Bouton "Prev"
        prevButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });

        // Ajuste la largeur du carrousel lors du redimensionnement de la fenêtre
        window.addEventListener('resize', () => {
            carousel.style.transition = 'none'; // Désactive temporairement la transition
            updateCarousel();
            setTimeout(() => {
                carousel.style.transition = 'transform 0.5s ease-in-out'; // Réactive la transition
            });
        });
    });
});