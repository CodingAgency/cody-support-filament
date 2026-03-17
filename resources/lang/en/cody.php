<?php

return [

    'navigation' => [
        'label' => 'Support',
    ],

    'page' => [
        'heading' => 'Need help?',
        'description' => 'Click the button above to send us a message.',
    ],

    'modal' => [
        'heading' => 'Contact Support',
        'description' => 'Let us know what you need help with, or share your idea.',
        'submit' => 'Submit',
    ],

    'fields' => [
        'subject' => [
            'label' => 'Subject',
            'placeholder' => 'What is this about?',
        ],
        'body' => [
            'label' => 'Description',
            'placeholder' => 'Tell us more...',
        ],
        'type' => [
            'label' => 'Type',
            'options' => [
                'bug' => 'Bug',
                'task' => 'Task',
                'support' => 'Support',
                'improvement' => 'Improvement',
                'idea' => 'Idea',
            ],
        ],
        'priority' => [
            'label' => 'Priority',
            'options' => [
                'low' => 'Low',
                'medium' => 'Medium',
                'high' => 'High',
                'urgent' => 'Urgent',
            ],
        ],
    ],

    'notifications' => [
        'success' => [
            'title' => 'Submitted',
            'body' => 'Your message has been sent successfully.',
        ],
        'error' => [
            'title' => 'Submission failed',
            'body' => 'The server returned status :status.',
        ],
        'connection_error' => [
            'title' => 'Connection error',
            'body' => 'Could not reach the support server. Please try again later.',
        ],
    ],

];
