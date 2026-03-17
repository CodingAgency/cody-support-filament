<?php

use CodySupport\FilamentCody\Pages\CodySupportPage;

it('has the correct slug', function () {
    expect(CodySupportPage::getSlug())->toBe('cody-support');
});

it('has navigation group with robot emoji', function () {
    expect(CodySupportPage::getNavigationGroup())->toBe('🤖 Cody.support');
});

it('has lifebuoy navigation icon', function () {
    expect(CodySupportPage::getNavigationIcon())->toBe('heroicon-o-lifebuoy');
});

it('has navigation sort of 100', function () {
    expect(CodySupportPage::getNavigationSort())->toBe(100);
});

it('has translatable navigation label', function () {
    $label = CodySupportPage::getNavigationLabel();

    expect($label)->toBeString()->not->toBeEmpty();
});

it('has a form method', function () {
    expect(CodySupportPage::class)
        ->toHaveMethod('form');
});

it('has a submit method', function () {
    expect(CodySupportPage::class)
        ->toHaveMethod('submit');
});
