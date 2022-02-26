<?php

Breadcrumbs::for('admin.memberships.index', function ($trail) {
    $trail->push(__('labels.backend.access.blogs.management'), route('admin.memberships.index'));
});

Breadcrumbs::for('admin.memberships.create', function ($trail) {
    $trail->parent('admin.memberships.index');
    $trail->push(__('labels.backend.access.blogs.management'), route('admin.memberships.create'));
});

Breadcrumbs::for('admin.memberships.edit', function ($trail, $id) {
    $trail->parent('admin.memberships.index');
    $trail->push(__('labels.backend.access.blogs.management'), route('admin.memberships.edit', $id));
});
