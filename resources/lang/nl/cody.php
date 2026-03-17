<?php

return [

    'button' => [
        'label' => "\u{1F6DF}",
        'tooltip' => 'Support',
    ],

    'modal' => [
        'heading' => 'Neem contact op',
        'description' => 'Laat ons weten waar je hulp bij nodig hebt, of deel je idee.',
        'submit' => 'Versturen',
    ],

    'fields' => [
        'subject' => [
            'label' => 'Onderwerp',
            'placeholder' => 'Waar gaat het over?',
        ],
        'body' => [
            'label' => 'Omschrijving',
            'placeholder' => 'Vertel ons meer...',
        ],
        'type' => [
            'label' => 'Type',
            'options' => [
                'bug' => 'Bug',
                'task' => 'Taak',
                'support' => 'Ondersteuning',
                'improvement' => 'Verbetering',
                'idea' => 'Idee',
            ],
        ],
        'priority' => [
            'label' => 'Prioriteit',
            'options' => [
                'low' => 'Laag',
                'medium' => 'Gemiddeld',
                'high' => 'Hoog',
                'urgent' => 'Urgent',
            ],
        ],
    ],

    'notifications' => [
        'success' => [
            'title' => 'Verstuurd',
            'body' => 'Je bericht is succesvol verzonden.',
        ],
        'error' => [
            'title' => 'Verzenden mislukt',
            'body' => 'De server gaf status :status terug.',
        ],
        'connection_error' => [
            'title' => 'Verbindingsfout',
            'body' => 'Kan de supportserver niet bereiken. Probeer het later opnieuw.',
        ],
    ],

];
