function toggleJobDetails(jobId, show) {
    const detailsElement = document.getElementById(`job-details-${jobId}`);
    const showButton = detailsElement.previousElementSibling.querySelector('.btn-show-details');
    const hideButton = detailsElement.previousElementSibling.querySelector('.btn-hide-details');

    if (show) {
        detailsElement.style.display = 'block'; // Affiche les détails
        showButton.style.display = 'none'; // Cache le bouton "Afficher les détails"
        hideButton.style.display = 'inline-block'; // Affiche le bouton "Fermer les détails"
    } else {
        detailsElement.style.display = 'none'; // Cache les détails
        showButton.style.display = 'inline-block'; // Affiche le bouton "Afficher les détails"
        hideButton.style.display = 'none'; // Cache le bouton "Fermer les détails"
    }
}

// Rendre la fonction accessible globalement
window.toggleJobDetails = toggleJobDetails;