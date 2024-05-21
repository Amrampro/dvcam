<?php

use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Admin\AdminLivreController;
use App\Http\Controllers\Admin\AdminSermonController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\CategorieSermonController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\TestimonyController as UserTestimony;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\SermonController;
use App\Http\Controllers\ApkController;
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

Route::group([
	"prefix" => LaravelLocalization::setLocale(),
	'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

	// APK
	Route::middleware("auth")->group(function () {

		Route::get("/apk/index", [ApkController::class, "dashboard"]);

		Route::get("/apk/alerts/all", [ApkController::class, "alerts_all"]);
		Route::get("/apk/alerts/me", [ApkController::class, "alerts_me"]);
		Route::get("/apk/alerts/add", [ApkController::class, "alerts_add"]);
		Route::get("/apk/alerts/edit/{id}", [ApkController::class, "alerts_edit"]);
		Route::POST("/alert/edit/{id}/update", [ApkController::class, "alert_update"]);
		Route::POST("alert/add", [ApkController::class, "alert_add"]);

		Route::get("/apk/therapy/all", [ApkController::class, "therapy_all"]);
		Route::get("/apk/therapy/me", [ApkController::class, "therapy_me"]);
		Route::get("/apk/therapy/add", [ApkController::class, "therapy_add"]);
		Route::POST("therapy/add", [ApkController::class, "therapy_store"]);

		Route::get("/apk/posts/all", [ApkController::class, "posts_all"]);
		Route::get("/apk/posts/me", [ApkController::class, "posts_me"]);
		Route::get("/apk/posts/add", [ApkController::class, "posts_add"]);
		Route::POST("post/add", [ApkController::class, "post_add"]);
		Route::get("post/{id}/del", [ApkController::class, "post_del"]);

		Route::get("/apk/askref/all", [ApkController::class, "askref_all"]);
		Route::get("/apk/askref/me", [ApkController::class, "askref_me"]);
		Route::get("/apk/askref/add", [ApkController::class, "askref_add"]);
		Route::get('refuge/{id}/{page}/del', [ApkController::class, "refuge_del"]);
		Route::get('refuge/edit/{id}', [ApkController::class, "askref_edit"]);
		Route::POST('askref/edit/{id}/update', [ApkController::class, "askref_update"]);
		Route::POST("askref/add", [ApkController::class, "askref_add_post"]);

		Route::get("/apk/enquetes/all", [ApkController::class, "enquetes_all"]);
		Route::get("/apk/enquetes/me", [ApkController::class, "enquetes_me"]);
		Route::get("/apk/enquetes/add", [ApkController::class, "enquetes_add"]);
		Route::get('enquete/single/{id}', [ApkController::class, "enquete_single"]);
		Route::get('enquete/edit/{id}', [ApkController::class, "enquete_edit"]);
		Route::get('enquetes/{id}/{page}/del', [ApkController::class, "enquetes_del"]);
		Route::POST("enquete/edit/{id}/update", [ApkController::class, "enquetes_update"]);
		Route::POST("enquetes/add", [ApkController::class, "enquetes_add_post"]);

		Route::get("apk/users", [ApkController::class, "users_see"]);
		Route::get("user/{id}/del", [ApkController::class, "user_del"]);

		Route::get("apk/my_account", [ApkController::class, "my_account"]);
		Route::POST("apk/my_account/validate", [ApkController::class, "my_account_validate"]);

		Route::get("/apk/team", [ApkController::class, "team_all"]);
		Route::get("/apk/team/add", [ApkController::class, "teams_add"]);
		Route::POST("team/add", [ApkController::class, "team_add"]);
		Route::get("team/{id}/del", [ApkController::class, "team_del"]);

		Route::get("/apk/gallery", [ApkController::class, "gallery_all"]);
		Route::get("/apk/gallery/add", [ApkController::class, "galleries_add"]);
		Route::POST("gallery/add", [ApkController::class, "gallery_add"]);
		Route::get("gallery/{id}/del", [ApkController::class, "gallery_del"]);

		Route::get("/apk/pdf", [ApkController::class, "document"]);
		Route::POST("/apk/getpdf", [ApkController::class, "generatePDF"]);
	});

	// Home
	Route::get('/', [HomeController::class, "index"]);

	Route::get('/about', [HomeController::class, "about"])->name("about");

	Route::get("/gallery", [HomeController::class, "gallery"])->name("gallery");

	Route::get("/blog", [HomeController::class, "blog"])->name("blog");

	Route::get("blog/detail/{id}", [HomeController::class, "blog_detail"])->name("blog_detail");

	Route::get("/contact", [HomeController::class, "contact"])->name("contact");

});


// Auth
require __DIR__ . '/auth.php';
