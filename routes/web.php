<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/hello', function () {
//     return response('<h1>Hello World</h1>', 200)
//         ->header('Content-Type', 'text/plain')
//         ->header('foo', 'bar');
// });
// Route::get('/posts/{id}', function ($id) {
//     // dd($id); // dd = die and dump-- this stop everything and show me attribute
//     // ddd($id); // ddd = dump, die, debug
//     return response("Post " . $id);
// })->where("id", "[0-9]+");
// Route::get('/search', function (Request $request) {
//     // dd($request->name . " " . $request->city);
// });

// // Listings
// Route::get("/", function () {
//     return view("listings", [
//         "listings" => Listing::all()
//     ]);
// });
Route::get("/", [ListingController::class, 'index']);

// // Single Listing
// Route::get("/listings/{id}", function ($id) {
//     $listing = Listing::find($id);

//     if ($listing) {
//         return view("listing", [
//             "listing" => $listing
//         ]);
//     } else {
//         abort('404');
//     }
// });
// // Single Listing Route Model Binding
// Route::get("/listings/{listing}", function (Listing $listing) {
//     return view("listing", [
//         "listing" => $listing
//     ]);
// });
// Single Listing with Controller
Route::get("/listings/{listing}", [ListingController::class, "show"]);

Route::get("/dbconn", function () {
    return view("dbconn");
});