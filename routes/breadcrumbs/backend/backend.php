<?php
Breadcrumbs::register('admin.dashboard', function ($breadcrumbs) {
    $breadcrumbs->push(
        __('strings.backend.dashboard.title'),
        route('admin.dashboard')
    );
});

//start_Test88_start
Breadcrumbs::register('admin.test88.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.test88s.title'),
        route('admin.test88.index')
    );
});

Breadcrumbs::register('admin.test88.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.test88.index');
    $breadcrumbs->push(
        __('labels.backend.test88s.create'),
        route('admin.test88.create')
    );
});

Breadcrumbs::register('admin.test88.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.test88.index');
    $breadcrumbs->push(
        __('menus.backend.test88s.view'),
        route('admin.test88.show', $id)
    );
});

Breadcrumbs::register('admin.test88.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.test88.index');
    $breadcrumbs->push(
        __('menus.backend.test88s.edit'),
        route('admin.test88.edit', $id)
    );
});
//end_Test88_end

//*****Do Not Delete Me
require __DIR__ . '/auth.php';
require __DIR__ . '/log-viewer.php';
