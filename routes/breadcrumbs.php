<?php

use App\Models\Group;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


Breadcrumbs::for('Home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});


//  SPELTAKKEN
Breadcrumbs::for('groups.groups', function ($trail) {
    $trail->parent('Home');
    $trail->push('Speltakken', route('groups.groups'));
});
Breadcrumbs::for('groups.group', function ($trail, $group) {
    $trail->parent('groups.groups');
    $trail->push($group->name, route('groups.group', [ 'group' => $group->slug ]));
});


//      SCOUTING MEPPEL
Breadcrumbs::for('organisation.albums', function (BreadcrumbTrail $trail) {
    $trail->parent('Home');
    $trail->push('Fotos', route('organisation.albums'));
});

Breadcrumbs::for('organisation.album', function (BreadcrumbTrail $trail) {
    $trail->parent('organisation.albums');
    $trail->push('test');
    //    $trail->push($album->name);
});


Breadcrumbs::for('organisation.rental', function (BreadcrumbTrail $trail) {
    $trail->parent('Home');
    $trail->push('Verhuur', route('organisation.rental'));
});


//      VOOR LEDEN
Breadcrumbs::for('self.documents', function (BreadcrumbTrail $trail) {
    $trail->parent('Home');
    $trail->push('Voor leden');
    $trail->push('Documenten');
});
Breadcrumbs::for('self.contribution', function (BreadcrumbTrail $trail) {
    $trail->parent('Home');
    $trail->push('Voor leden');
    $trail->push('Contributie');
});

