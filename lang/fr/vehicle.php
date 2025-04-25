<?php

return [
    'title' => 'Véhicules',
    'fields' => [
        'brand' => 'Marque',
        'model' => 'Modèle',
        'description' => 'Description',
        'year' => 'Année',
        'mileage' => 'Kilométrage',
        'transmission' => 'Transmission',
        'puissance' => 'Puissance (CV)',
        'fuel' => 'Carburant',
        'type' => 'Type de véhicule',
        'price' => 'Prix',
        'picture' => 'Image du véhicule',
        'color' => 'Couleur',
        'license_plate' => 'Plaque d\'immatriculation',
    ],
    'actions' => [
        'add' => 'Ajouter un véhicule',
        'edit' => 'Modifier le véhicule',
        'delete' => 'Supprimer le véhicule',
        'view' => 'Voir le véhicule',
    ],
    'messages' => [
        'no_vehicles' => 'Aucun véhicule disponible pour le moment.',
        'success_add' => 'Le véhicule a été ajouté avec succès.',
        'success_edit' => 'Le véhicule a été mis à jour avec succès.',
        'success_delete' => 'Le véhicule a été supprimé avec succès.',
        'confirm_delete' => 'Êtes-vous sûr de vouloir supprimer ce véhicule ?',
    ],
    'types' => [
        'new' => 'Neuf',
        'used' => 'Occasion',
    ],
    'fuel_types' => [
        'gasoline' => 'Essence',
        'diesel' => 'Diesel',
        'electric' => 'Électrique',
        'hybrid' => 'Hybride',
    ],
    'transmissions' => [
        'manual' => 'Manuelle',
        'automatic' => 'Automatique',
    ],
];

