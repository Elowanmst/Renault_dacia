<?php
return [
    'types' => [
        'full-time' => 'Temps plein',
        'part-time' => 'Temps partiel',
        'contract' => 'Contrat',
        'internship' => 'Stage',
    ],
    
    'fields' => [
        'title' => 'Titre du poste',
        'description' => 'Description',
        'location' => 'Lieu',
        'salary_description' => 'Rémunération',
        'status' => 'Statut',
        'type' => 'Type de contrat',
        'requirements' => 'Exigences',
        'responsibilities' => 'Responsabilités',
        'posted_at' => 'Posté le',
        'expires_at' => 'Expire le',
    ],

    'actions' => [
        'add' => 'Ajouter une offre d\'emploi',
        'edit' => 'Modifier l\'offre d\'emploi',
        'delete' => 'Supprimer l\'offre d\'emploi',
        'view' => 'Voir l\'offre d\'emploi',
    ],

    'messages' => [
        'no_offers' => 'Aucune offre d\'emploi disponible pour le moment.',
        'success_add' => 'L\'offre d\'emploi a été ajoutée avec succès.',
        'success_edit' => 'L\'offre d\'emploi a été mise à jour avec succès.',
        'success_delete' => 'L\'offre d\'emploi a été supprimée avec succès.',
        'confirm_delete' => 'Êtes-vous sûr de vouloir supprimer cette offre d\'emploi ?',
    ],
];