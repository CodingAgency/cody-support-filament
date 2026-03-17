<?php

it('merges config', function () {
    expect(config('cody'))->toBeArray()
        ->and(config('cody'))->toHaveKeys(['api_token', 'project_key', 'api_url']);
});

it('registers views namespace', function () {
    $hints = app('view')->getFinder()->getHints();

    expect($hints)->toHaveKey('filament-cody');
});

it('registers translations namespace', function () {
    $namespaces = app('translator')->getLoader()->namespaces();

    expect($namespaces)->toHaveKey('cody');
});
