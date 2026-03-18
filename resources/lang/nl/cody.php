<?php

return [

    'navigation' => [
        'label' => 'Support',
    ],

    'page' => [
        'heading' => 'Hulp nodig?',
        'description' => 'Klik op de knop hierboven om een bericht te versturen.',
    ],

    'form' => [
        'type_section' => 'Wat wil je doorgeven?',
        'details_section' => 'Details',
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
                'bug' => '🐛 Bug',
                'task' => '📋 Taak',
                'support' => '🛟 Ondersteuning',
                'improvement' => '✨ Verbetering',
                'idea' => '💡 Idee',
            ],
            'descriptions' => [
                'bug' => 'Iets werkt niet zoals verwacht',
                'task' => 'Werk dat gedaan moet worden',
                'support' => 'Je hebt hulp nodig of een vraag',
                'improvement' => 'Bestaande functionaliteit kan beter',
                'idea' => 'Nieuw idee of voorstel',
            ],
        ],
        'priority' => [
            'label' => 'Prioriteit',
            'options' => [
                'low' => '⚪ Laag',
                'medium' => '🟡 Gemiddeld',
                'high' => '🟠 Hoog',
                'urgent' => '🔴 Urgent',
            ],
            'descriptions' => [
                'low' => 'Geen haast — mag op de backlog',
                'medium' => 'Normaal — binnen een paar dagen oppakken',
                'high' => 'Belangrijk — heeft directe impact op het werk',
                'urgent' => 'Alles ligt stil — applicatie is niet bruikbaar',
            ],
        ],
    ],

    'types' => [
        'bug' => [
            'hint' => 'Beschrijf zo precies mogelijk wat er misgaat, zodat we het snel kunnen reproduceren.',
            'subject_label' => 'Wat gaat er mis?',
            'subject_placeholder' => 'bijv. Betaalknop reageert niet op checkout pagina',
            'body_label' => 'Toelichting',
            'body_placeholder' => 'Beschrijf wat je deed toen het misging...',
            'expected_behavior' => 'Wat verwacht je dat er zou moeten gebeuren?',
            'expected_behavior_placeholder' => 'bijv. Na klikken zou de betaling moeten starten',
            'actual_behavior' => 'Wat gebeurt er in werkelijkheid?',
            'actual_behavior_placeholder' => 'bijv. Er gebeurt helemaal niets, geen foutmelding',
            'steps_to_reproduce' => 'Stappen om te reproduceren',
            'steps_to_reproduce_placeholder' => "1. Ga naar checkout\n2. Vul gegevens in\n3. Klik op 'Betalen'\n4. Niets gebeurt",
            'environment' => 'Omgeving',
            'environment_placeholder' => 'bijv. Chrome 120, macOS Sonoma, iPhone 15',
        ],
        'task' => [
            'hint' => 'Beschrijf duidelijk wat er gedaan moet worden en wanneer het klaar is.',
            'subject_label' => 'Titel',
            'subject_placeholder' => 'Wat moet er gedaan worden?',
            'body_label' => 'Omschrijving',
            'body_placeholder' => 'Beschrijf de taak en de context...',
            'acceptance_criteria' => 'Acceptatiecriteria',
            'acceptance_criteria_placeholder' => "Wanneer is deze taak klaar?\n- [ ] Criterium 1\n- [ ] Criterium 2",
        ],
        'support' => [
            'hint' => 'Stel je vraag zo duidelijk mogelijk, dan kunnen we je het snelst helpen.',
            'subject_label' => 'Onderwerp',
            'subject_placeholder' => 'Waar heb je hulp bij nodig?',
            'body_label' => 'Jouw vraag',
            'body_placeholder' => 'Beschrijf zo duidelijk mogelijk wat je wilt bereiken...',
        ],
        'improvement' => [
            'hint' => 'Beschrijf wat er nu is, en hoe je het graag zou zien. Zo kunnen we de verbetering goed inschatten.',
            'subject_label' => 'Welke verbetering stel je voor?',
            'subject_placeholder' => 'bijv. Zoekfunctie sneller maken op overzichtspagina',
            'body_label' => 'Toelichting',
            'body_placeholder' => 'Waarom is deze verbetering nodig?',
            'current_situation' => 'Huidige situatie',
            'current_situation_placeholder' => 'Hoe werkt het nu? Wat is het probleem?',
            'desired_situation' => 'Gewenste situatie',
            'desired_situation_placeholder' => 'Hoe zou het moeten werken? Wat is het doel?',
        ],
        'idea' => [
            'hint' => 'Alle ideeën zijn welkom! Beschrijf je idee en waarom het waardevol zou zijn.',
            'subject_label' => 'Waar gaat je idee over?',
            'subject_placeholder' => 'bijv. Automatische maandelijkse rapportage per e-mail',
            'body_label' => 'Beschrijving van je idee',
            'body_placeholder' => 'Beschrijf je idee en wat het zou opleveren...',
        ],
    ],

    'info' => [
        'description' => 'Het AI-hulpje van :company. Hier kun je bugs melden, taken doorgeven, ideeën delen en de status van je verzoeken volgen.',
        'feature_track' => 'Volg de voortgang van je meldingen',
        'feature_communicate' => 'Communiceer direct met het team',
        'feature_status' => 'Bekijk de status van alle verzoeken',
        'login_button' => 'Login bij Cody.support',
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
