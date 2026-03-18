<?php

it('has english translations', function () {
    $translations = trans('cody::cody', [], 'en');

    expect($translations)->toBeArray()
        ->and($translations)->toHaveKeys(['navigation', 'page', 'modal', 'fields', 'notifications', 'types', 'info']);
});

it('has dutch translations', function () {
    $translations = trans('cody::cody', [], 'nl');

    expect($translations)->toBeArray()
        ->and($translations)->toHaveKeys(['navigation', 'page', 'modal', 'fields', 'notifications', 'types', 'info']);
});

it('has all required field translations in english', function () {
    expect(__('cody::cody.fields.subject.label', [], 'en'))->toBe('Subject');
    expect(__('cody::cody.fields.body.label', [], 'en'))->toBe('Description');
    expect(__('cody::cody.fields.type.label', [], 'en'))->toBe('Type');
    expect(__('cody::cody.fields.priority.label', [], 'en'))->toBe('Priority');
});

it('has all required field translations in dutch', function () {
    expect(__('cody::cody.fields.subject.label', [], 'nl'))->toBe('Onderwerp');
    expect(__('cody::cody.fields.body.label', [], 'nl'))->toBe('Omschrijving');
    expect(__('cody::cody.fields.type.label', [], 'nl'))->toBe('Type');
    expect(__('cody::cody.fields.priority.label', [], 'nl'))->toBe('Prioriteit');
});

it('has all type options with emoji in english', function () {
    $options = __('cody::cody.fields.type.options', [], 'en');

    expect($options)->toHaveKeys(['bug', 'task', 'support', 'improvement', 'idea'])
        ->and($options['bug'])->toContain('Bug')
        ->and($options['idea'])->toContain('Idea');
});

it('has type descriptions in english', function () {
    $descriptions = __('cody::cody.fields.type.descriptions', [], 'en');

    expect($descriptions)->toHaveKeys(['bug', 'task', 'support', 'improvement', 'idea']);
});

it('has priority options with emoji in english', function () {
    $options = __('cody::cody.fields.priority.options', [], 'en');

    expect($options)->toHaveKeys(['low', 'medium', 'high', 'urgent']);
});

it('has priority descriptions in english', function () {
    $descriptions = __('cody::cody.fields.priority.descriptions', [], 'en');

    expect($descriptions)->toHaveKeys(['low', 'medium', 'high', 'urgent']);
});

it('has type-specific translations for bug', function () {
    $bug = __('cody::cody.types.bug', [], 'en');

    expect($bug)->toHaveKeys([
        'hint', 'subject_label', 'subject_placeholder', 'body_label',
        'expected_behavior', 'actual_behavior', 'steps_to_reproduce', 'environment',
    ]);
});

it('has type-specific translations for task', function () {
    $task = __('cody::cody.types.task', [], 'en');

    expect($task)->toHaveKeys(['hint', 'subject_label', 'acceptance_criteria']);
});

it('has type-specific translations for improvement', function () {
    $improvement = __('cody::cody.types.improvement', [], 'en');

    expect($improvement)->toHaveKeys(['hint', 'subject_label', 'current_situation', 'desired_situation']);
});

it('has type-specific translations for idea', function () {
    $idea = __('cody::cody.types.idea', [], 'en');

    expect($idea)->toHaveKeys(['hint', 'subject_label', 'body_label']);
});

it('has info block translations', function () {
    $info = __('cody::cody.info', [], 'en');

    expect($info)->toHaveKeys(['description', 'feature_track', 'feature_communicate', 'feature_status', 'login_button']);
});

it('has notification translations in both languages', function () {
    expect(__('cody::cody.notifications.success.title', [], 'en'))->toBe('Submitted');
    expect(__('cody::cody.notifications.success.title', [], 'nl'))->toBe('Verstuurd');
});
