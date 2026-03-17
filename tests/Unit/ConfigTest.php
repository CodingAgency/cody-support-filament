<?php

it('loads the config file', function () {
    expect(config('cody'))->toBeArray();
});

it('has api_token config key', function () {
    expect(config('cody.api_token'))->toBe('test-token-123');
});

it('has project_key config key', function () {
    expect(config('cody.project_key'))->toBe('TEST');
});

it('has api_url with default value', function () {
    expect(config('cody.api_url'))->toBe('https://cody.support/api/v1');
});

it('reads api_token from env', function () {
    expect(config('cody.api_token'))->not->toBeNull();
});
