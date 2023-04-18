<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
  // All Listings
  public function index()
  {
    return view('listings', [
      'listings' => Listing::all()
    ]);
  }


  // Single Listings
  public function show(Listing $listing)
  {
    return view('listing', [
      'listing' => $listing
    ]);
  }
}
