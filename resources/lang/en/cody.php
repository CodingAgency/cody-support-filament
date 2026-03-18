<?php

return [

    'navigation' => [
        'label' => 'Support',
    ],

    'page' => [
        'heading' => 'Need help?',
        'description' => 'Click the button above to send us a message.',
    ],

    'form' => [
        'type_section' => 'What would you like to report?',
        'details_section' => 'Details',
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
                'bug' => '🐛 Bug',
                'task' => '📋 Task',
                'support' => '🛟 Support',
                'improvement' => '✨ Improvement',
                'idea' => '💡 Idea',
            ],
            'descriptions' => [
                'bug' => 'Something is not working as expected',
                'task' => 'Work that needs to be done',
                'support' => 'You need help or have a question',
                'improvement' => 'Existing functionality could be better',
                'idea' => 'A new idea or proposal',
            ],
        ],
        'url' => [
            'label' => 'URL (which page is this about?)',
            'placeholder' => 'https://example.com/page',
        ],
        'priority' => [
            'label' => 'Priority',
            'options' => [
                'low' => '⚪ Low',
                'medium' => '🟡 Medium',
                'high' => '🟠 High',
                'urgent' => '🔴 Urgent',
            ],
            'descriptions' => [
                'low' => 'No rush — can go on the backlog',
                'medium' => 'Normal — pick up within a few days',
                'high' => 'Important — has direct impact on work',
                'urgent' => 'Everything is blocked — application is unusable',
            ],
        ],
    ],

    'types' => [
        'bug' => [
            'hint' => 'Describe as precisely as possible what is going wrong, so we can reproduce it quickly.',
            'subject_label' => 'What is going wrong?',
            'subject_placeholder' => 'e.g. Payment button not responding on checkout page',
            'body_label' => 'Explanation',
            'body_placeholder' => 'Describe what you were doing when it went wrong...',
            'expected_behavior' => 'What did you expect to happen?',
            'expected_behavior_placeholder' => 'e.g. After clicking, the payment should start',
            'actual_behavior' => 'What actually happened?',
            'actual_behavior_placeholder' => 'e.g. Nothing happens, no error message',
            'steps_to_reproduce' => 'Steps to reproduce',
            'steps_to_reproduce_placeholder' => "1. Go to checkout\n2. Fill in details\n3. Click 'Pay'\n4. Nothing happens",
            'environment' => 'Environment',
            'environment_placeholder' => 'e.g. Chrome 120, macOS Sonoma, iPhone 15',
        ],
        'task' => [
            'hint' => 'Clearly describe what needs to be done and when it is finished.',
            'subject_label' => 'Title',
            'subject_placeholder' => 'What needs to be done?',
            'body_label' => 'Description',
            'body_placeholder' => 'Describe the task and its context...',
            'acceptance_criteria' => 'Acceptance criteria',
            'acceptance_criteria_placeholder' => "When is this task done?\n- [ ] Criterion 1\n- [ ] Criterion 2",
        ],
        'support' => [
            'hint' => 'Ask your question as clearly as possible, so we can help you faster.',
            'subject_label' => 'Subject',
            'subject_placeholder' => 'What do you need help with?',
            'body_label' => 'Your question',
            'body_placeholder' => 'Describe as clearly as possible what you want to achieve...',
        ],
        'improvement' => [
            'hint' => 'Describe the current situation and how you would like it to be. This helps us assess the improvement.',
            'subject_label' => 'What improvement do you suggest?',
            'subject_placeholder' => 'e.g. Make search faster on overview page',
            'body_label' => 'Explanation',
            'body_placeholder' => 'Why is this improvement needed?',
            'current_situation' => 'Current situation',
            'current_situation_placeholder' => 'How does it work now? What is the problem?',
            'desired_situation' => 'Desired situation',
            'desired_situation_placeholder' => 'How should it work? What is the goal?',
        ],
        'idea' => [
            'hint' => 'All ideas are welcome! Describe your idea and why it would be valuable.',
            'subject_label' => 'What is your idea about?',
            'subject_placeholder' => 'e.g. Automatic monthly report via email',
            'body_label' => 'Description of your idea',
            'body_placeholder' => 'Describe your idea and what it would achieve...',
        ],
    ],

    'info' => [
        'description' => 'The AI assistant of :company. Here you can report bugs, submit tasks, share ideas and track the status of your requests.',
        'feature_track' => 'Track the progress of your reports',
        'feature_communicate' => 'Communicate directly with the team',
        'feature_status' => 'View the status of all requests',
        'login_button' => 'Login at Cody.support',
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
