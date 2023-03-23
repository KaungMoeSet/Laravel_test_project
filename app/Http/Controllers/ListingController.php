<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //Show all listings
    public function index() // or you can use DI like index(Request $request)
    {
        // dd(request()); // this is using helper method 
        // dd(request()->tag); // ဒီနည်းနဲ့လဲရတယ်
        dd(request('tag')); // ဒီနည်းနဲ့လဲရတယ် အတူတူပဲ
        return view("listings.index", [
            'listings' => Listing::latest()->filter(request(['tag']))->get()
        ]);
    }

    //Show single listing
    // public function show(Listing $listing)
    // {
    //     // Laravel will automatically retrieve the Listing instance based on the id parameter in the URL
    //     return view("listings.show", [
    //         'listing' => $listing
    //     ]);
    // }
    // public function show($listing)
    // {
    //     return view("listings.show", [
    //                 'listing' => Listing::find($listing)
    //             ]);
    // }
    public function show(Listing $listing)
    {
        return view("listings.show", [
                    'listing' => $listing
                ]);
    }

}