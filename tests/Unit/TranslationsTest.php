<?php

it('has english translations', function () {
    $translations = trans('cody::cody', [], 'en');

    expect($translations)->toBeArray()
        ->and($translations)->toHaveKeys(['navigation', 'page', 'modal', 'fields', 'notifications']);
});

it('has dutch translations', function () {
    $translations = trans('cody::cody', [], 'nl');

    expect($translations)->toBeArray()
        ->and($translations)->toHaveKeys(['navigation', 'page', 'modal', 'fields', 'notifications']);
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

it('has all type options in english', function () {
    $options = __('cody::cody.fields.type.options', [], 'en');

    expect($options)->toHaveKeys(['bug', 'task', 'support', 'improvement', 'idea'])
        ->and($options['bug'])->toBe('Bug')
        ->and($options['idea'])->toBe('Idea');
});

it('has all priority options in english', function () {
    $options = __('cody::cody.fields.priority.options', [], 'en');

    expect($options)->toHaveKeys(['low', 'medium', 'high', 'urgent']);
});

it('has notification translations in both languages', function () {
    expect(__('cody::cody.notifications.success.title', [], 'en'))->toBe('Submitted');
    expect(__('cody::cody.notifications.success.title', [], 'nl'))->toBe('Verstuurd');
});
