<?php

use CodySupport\FilamentCody\CodyPlugin;

it('can be instantiated', function () {
    $plugin = CodyPlugin::make();

    expect($plugin)->toBeInstanceOf(CodyPlugin::class);
});

it('has correct id', function () {
    $plugin = CodyPlugin::make();

    expect($plugin->getId())->toBe('cody');
});

it('returns default types from translations', function () {
    $plugin = CodyPlugin::make();
    $types = $plugin->getTypes();

    expect($types)->toBeArray()
        ->and($types)->toHaveKeys(['bug', 'task', 'support', 'improvement', 'idea']);
});

it('returns default priorities from translations', function () {
    $plugin = CodyPlugin::make();
    $priorities = $plugin->getPriorities();

    expect($priorities)->toBeArray()
        ->and($priorities)->toHaveKeys(['low', 'medium', 'high', 'urgent']);
});

it('allows custom types', function () {
    $plugin = CodyPlugin::make();
    $custom = ['bug' => 'Bug', 'feature' => 'Feature'];

    $result = $plugin->types($custom);

    expect($result)->toBeInstanceOf(CodyPlugin::class)
        ->and($result->getTypes())->toBe($custom);
});

it('allows custom priorities', function () {
    $plugin = CodyPlugin::make();
    $custom = ['low' => 'Low', 'critical' => 'Critical'];

    $result = $plugin->priorities($custom);

    expect($result)->toBeInstanceOf(CodyPlugin::class)
        ->and($result->getPriorities())->toBe($custom);
});
