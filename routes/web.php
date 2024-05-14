<?php
use App\Http\Controllers\ContactController;
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

Route::get('/clear', function () {
    //\Artisan::call('key:generate');
    \Artisan::call('route:clear');
    \Artisan::call('cache:clear');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('about-us', function () {
    return view('about');
})->name('about');

Route::get('gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('services/acute-pain-abdomen', function () {
    return view('acute-pain-abdomen');
})->name('acute-pain-abdomen');

Route::get('services/gastritis-acid-reflux-acidity', function () {
    return view('gastritis-acid-reflux-acidity');
})->name('gastritis-acid-reflux-acidity');

Route::get('services/gallstones', function () {
    return view('gallstones');
})->name('gallstones');

Route::get('services/gallstones', function () {
    return view('gallstones');
})->name('gallstones');

Route::get('services/appendicitis', function () {
    return view('appendicitis');
})->name('appendicitis');

Route::get('services/hernia', function () {
    return view('hernia');
})->name('hernia');

Route::get('services/fissure-piles-fistula-pilonidal-sinus', function () {
    return view('fissure-piles-fistula-pilonidal-sinus');
})->name('fissure-piles-fistula-pilonidal-sinus');

Route::get('services/cancer', function () {
    return view('cancer');
})->name('cancer');

Route::get('services/hydrocele', function () {
    return view('hydrocele');
})->name('hydrocele');

Route::get('services/ulcers', function () {
    return view('ulcers');
})->name('ulcers');

Route::get('services/nail-infections', function () {
    return view('nail-infections');
})->name('nail-infections');

Route::get('services/lipoma', function () {
    return view('lipoma');
})->name('lipoma');

Route::get('services/sebaceous-cyst', function () {
    return view('sebaceous-cyst');
})->name('sebaceous-cyst');

Route::get('services/kidney-stones', function () {
    return view('kidney-stones');
})->name('kidney-stones');

Route::get('services/laparoscopic-cholecystectomy', function () {
    return view('laparoscopic-cholecystectomy');
})->name('laparoscopic-cholecystectomy');

Route::get('services/laparoscopic-appendicectomy', function () {
    return view('laparoscopic-appendicectomy');
})->name('laparoscopic-appendicectomy');

Route::get('services/laparoscopic-hernia-treatment', function () {
    return view('laparoscopic-hernia-treatment');
})->name('laparoscopic-hernia-treatment');

Route::get('services/breast-lumps', function () {
    return view('breast-lumps');
})->name('breast-lumps');

Route::get('services/diabetic-foot', function () {
    return view('diabetic-foot');
})->name('diabetic-foot');

Route::get('services/acute-colitis', function () {
    return view('acute-colitis');
})->name('acute-colitis');

Route::get('services/laparoscopic-splenectomy', function () {
    return view('laparoscopic-splenectomy');
})->name('laparoscopic-splenectomy');

Route::get('services/laparoscopic-hemicolectomy', function () {
    return view('laparoscopic-hemicolectomy');
})->name('laparoscopic-hemicolectomy');

Route::get('services/laparoscopic-fundoplication', function () {
    return view('laparoscopic-fundoplication');
})->name('laparoscopic-fundoplication');

Route::get('services/endoscopic-thyroidectomy-open-thyroidectomy', function () {
    return view('endoscopic-thyroidectomy-open-thyroidectomy');
})->name('endoscopic-thyroidectomy-open-thyroidectomy');

Route::get('services/laser-piles-treatment', function () {
    return view('laser-piles-treatment');
})->name('laser-piles-treatment');

Route::get('services/hemorrhoids-piles', function () {
    return view('hemorrhoids-piles');
})->name('hemorrhoids-piles');

Route::get('services/anal-fissure', function () {
    return view('anal-fissure');
})->name('anal-fissure');

Route::get('services/anal-fistula', function () {
    return view('anal-fistula');
})->name('anal-fistula');

Route::get('services/pilonidal-sinus', function () {
    return view('pilonidal-sinus');
})->name('pilonidal-sinus');

Route::get('testimonial', function () {
    return view('testimonial');
})->name('testimonial');
















// Route::get('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');
// Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');

// Route::get('/admission',[ContactController::class, 'bookAppointment'])->name('admission');
// Route::get('/contact-us', [ContactController::class, 'viewForm'])->name('contact');
// Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');

