<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/autocomplete-search', [PageController::class, 'autocompleteSearch']);
Route::get('search-result', [PageController::class, 'searchResult'])->name('search-result');

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::get('/', function () { return view('welcome'); })->name('index');
Route::get('home1', [PageController::class, 'home1']);
Route::get('home2', [PageController::class, 'home2']);
Route::get('home3', [PageController::class, 'home3']);
Route::get('home4', [PageController::class, 'home4']);
Route::get('home5', [PageController::class, 'home5']);
Route::get('home6', [PageController::class, 'home6']);

Route::get('joblanding', [PageController::class, 'jobslanding']);

Route::prefix('competencies')->group(function () {
    Route::prefix('business-processes')->group(function () {
        Route::get('/robotic-process-automation', [PageController::class, 'privacy']);
        Route::get('/business-process-management-&-automation', [PageController::class, 'privacy']);
    });

    Route::prefix('information-management')->group(function () {
        Route::get('................................................................................................................................................................./business-intelligence-&-analytical-services', [PageController::class, 'privacy']);
        Route::get('/database-&-storage-admin', [PageController::class, 'privacy']);
    });

    Route::prefix('applications')->group(function () {
        Route::get('/application-development', [PageController::class, 'privacy']);
        Route::get('/erp-application-development-services', [PageController::class, 'privacy']);
        Route::get('/application-management', [PageController::class, 'privacy']);
        Route::get('/application-QA-&-validation', [PageController::class, 'privacy']);
        Route::get('/devops-advisory', [PageController::class, 'privacy']);
    });

    Route::prefix('platform-&-Infrastructure')->group(function () {
        Route::get('/cloud-computing', [PageController::class, 'privacy']);
        Route::get('/it-&-infra-management', [PageController::class, 'privacy']);
        Route::get('/data-center-enablement', [PageController::class, 'privacy']);
    });

    Route::get('/managed-services', [PageController::class, 'privacy']);

    Route::prefix('staffing-solutions')->group(function () {
        Route::get('/contingent-staffing', [PageController::class, 'privacy']);
        Route::get('/msp-parternship', [PageController::class, 'privacy']);
        Route::get('/short-term-engagement', [PageController::class, 'privacy']);
        Route::get('/talent-kloud', [PageController::class, 'privacy']);
        Route::get('/compliance', [PageController::class, 'privacy']);
    });

    Route::get('/learning-academy', [PageController::class, 'privacy']);
});

Route::get('industries', [PageController::class, 'industries'])->name('Industries');

Route::prefix('industries')->group(function () {
    Route::get('/banking', [PageController::class, 'banking'])->name('banking');
    Route::get('/fintech', [PageController::class, 'fintech'])->name('fintech');
    Route::get('/healthcare', [PageController::class, 'healthcare'])->name('healthcare');
    Route::get('/manufacturing', [PageController::class, 'manufacturing'])->name('manufacturing');
    Route::get('/enterprise-technology', [PageController::class, 'enterprise_technology'])->name('enterprise-technology');
    Route::get('/retail-&-ecommerce', [PageController::class, 'retail_ecommerce'])->name('retail-&-ecommerce');
});

Route::prefix('careers')->group(function () {
    Route::get('/life-Culture-fidelis', [PageController::class, 'life_Culture_fidelis'])->name('life-fidelis');
    Route::get('/job-listing', [PageController::class, 'careers'])->name('careers');
    Route::get('/jobs/{slug}', [PageController::class, 'careerdetails'])->name('careers-details');
    Route::get('/refer-candidate', [PageController::class, 'refer_candidate'])->name('refer-candidate');
    Route::get('/apply-now', [PageController::class, 'privacy']);
});

Route::get('/blogs', [PageController::class, 'journal'])->name('blogs');
Route::get('/article/{articleid}', [PageController::class, 'article'])->name('article');

Route::prefix('corporate')->group(function () {
    Route::get('/about-us', [PageController::class, 'about_us'])->name('about_us');
    Route::get('/our-competencies', [PageController::class, 'our_competencies'])->name('our-competencies');
    Route::get('/people', [PageController::class, 'people'])->name('people');
    Route::get('/journey', [PageController::class, 'journey'])->name('journey');
    Route::get('/mission-vision-values', [PageController::class, 'mission_vision_values'])->name('mission-vision-values');
    Route::get('/corporate-governance', [PageController::class, 'corporate_governance'])->name('corporate-governance');
    Route::get('/partners-alliances', [PageController::class, 'partners_alliances'])->name('partners-alliances');
    Route::get('/why-choose-us', [PageController::class, 'why_choose_us'])->name('why-choose-us');
    Route::get('/clients-speak', [PageController::class, 'clients_speak'])->name('clients-speak');
    Route::get('/case-studies', [PageController::class, 'casestudies'])->name('case-studies');
    Route::get('/case-studies/{slug}', [PageController::class, 'casedetails'])->name('case-details');
    Route::get('/locations', [PageController::class, 'locations'])->name('locations');
});

Route::get('gallery', [PageController::class, 'gallery'])->name('');

Route::prefix('products')->group(function () {
    Route::get('fidelis-noc', [PageController::class, 'noc'])->name('fidelis-noc');
    Route::get('fidelis-soc', [PageController::class, 'soc'])->name('fidelis-soc');
});

Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/copyright', [PageController::class, 'copyright'])->name('copyright');

Route::get('/faq', [PageController::class, 'faq'])->name('faq');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/contact-us', [PageController::class, 'contactus'])->name('contact-us');
Route::post('store-data', [PageController::class, 'store-contactus'])->name('store-contact-us');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('canvas-ui')->group(function () {
    Route::prefix('api')->group(function () {
        Route::get('posts', [\App\Http\Controllers\CanvasUiController::class, 'getPosts']);
        Route::get('posts/{slug}', [\App\Http\Controllers\CanvasUiController::class, 'showPost'])
             ->middleware('Canvas\Http\Middleware\Session');

        Route::get('tags', [\App\Http\Controllers\CanvasUiController::class, 'getTags']);
        Route::get('tags/{slug}', [\App\Http\Controllers\CanvasUiController::class, 'showTag']);
        Route::get('tags/{slug}/posts', [\App\Http\Controllers\CanvasUiController::class, 'getPostsForTag']);

        Route::get('topics', [\App\Http\Controllers\CanvasUiController::class, 'getTopics']);
        Route::get('topics/{slug}', [\App\Http\Controllers\CanvasUiController::class, 'showTopic']);
        Route::get('topics/{slug}/posts', [\App\Http\Controllers\CanvasUiController::class, 'getPostsForTopic']);

        Route::get('users/{id}', [\App\Http\Controllers\CanvasUiController::class, 'showUser']);
        Route::get('users/{id}/posts', [\App\Http\Controllers\CanvasUiController::class, 'getPostsForUser']);
    });

    Route::get('/{view?}', [\App\Http\Controllers\CanvasUiController::class, 'index'])
         ->where('view', '(.*)')
         ->name('canvas-ui');
});
