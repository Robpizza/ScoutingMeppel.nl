<?php

use App\Http\Controllers\GeneralPagesController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\GroupPagesController;
use App\Http\Controllers\MemberPagesController;
use App\Http\Controllers\OrganisationPagesController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\VolunteerRoleController;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade as PDF;
////asdas

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/documents', function () {
    return view('documents.index');
});
Route::get('/documents/down', function () {
    $pdf = PDF::loadView("documents.index", []);
    return $pdf->download('test.pdf');
});

Route::get('/', [ PageController::class, "home" ])->name('home');
Route::get('/lid-worden', [ PageController::class, "becomeAMember" ])->name("becomeAMember");
Route::get('/vrijwilligers', [ PageController::class, "volunteers" ])->name("volunteers");


Route::name('groups.')->prefix('speltakken')->group(function () {
    Route::get('/', [ GroupPagesController::class, "general" ])->name('groups');
    Route::get('/{group:slug}', [ GroupPagesController::class, "group" ])->name('group');
});

Route::name('organisation.')->prefix('scouting-meppel')->group(function () {
    Route::get('/fotos', [ OrganisationPagesController::class, "albums" ])->name("albums");
    Route::get('/fotos/{album}', [ OrganisationPagesController::class, "album" ])->name("album");
    Route::get('/verhuur', [ OrganisationPagesController::class, "rental" ])->name("rental");
    Route::get('/donateur', [ OrganisationPagesController::class, "donor" ])->name("donor");
});

Route::name('self.')->prefix('voor-leden')->group(function () {
    Route::get('/scoutfit', [ MemberPagesController::class, "scoutFit" ])->name("scoutFit");
    Route::get('/documenten', [ MemberPagesController::class, "documents" ])->name("documents");
    Route::get('/vertrouwenspersoon', [ MemberPagesController::class, "trustee" ])->name("trustee");
    Route::get('/mijn-scouting', [ MemberPagesController::class, "myScouting" ])->name("myScout");
    Route::get('/contributie', [ MemberPagesController::class, "contribution" ])->name("contribution");
});

Route::name('general.')->prefix('algemeen')->group(function () {
    Route::get('/over-scouting', [ GeneralPagesController::class, "aboutScouting" ])->name("about");
    Route::get('/bestuur', [ GeneralPagesController::class, "management" ])->name("management");
    Route::get('/groepsraad', [ GeneralPagesController::class, "groupCouncil" ])->name("groupCouncil");
    Route::get('/privacy', [ GeneralPagesController::class, "privacy" ])->name("privacy");
    Route::get('/sociale-veiligheid', [ GeneralPagesController::class, "socialSafety" ])->name("socialSafety");
});




Route::middleware('auth')->name('admin.')->prefix('admin')->group(function () {
    Route::get('', function () {
        return view('admin.home');
    })->name('dashboard');

    Route::resource('groups', GroupController::class);
    Route::resource('roles', VolunteerRoleController::class);
    Route::resource('volunteers', VolunteerController::class);
    Route::resource('administrators', UserController::class)->parameters(['administrator' =>'user']);
    Route::resource('sponsors', SponsorController::class);
});
