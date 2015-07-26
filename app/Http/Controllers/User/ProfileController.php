<?php

namespace Swapstr\Http\Controllers\User;

use Illuminate\Http\Request;

use Swapstr\Http\Requests;
use Swapstr\Http\Requests\UpdateUserContactDetails;
use Swapstr\Http\Controllers\Controller;

use Swapstr\City;
use Swapstr\Region;
use Swapstr\Country;
use Swapstr\Location;

class ProfileController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    /**
     * Edit contact details page.
     * @return View
     */
    public function getUpdateContactDetails()
    {
    	$countries = Country::lists('name', 'name');

    	$cities = City::lists('name', 'name');

    	$regions = Region::lists('name', 'name');

    	$profile = \Auth::user()->profile;

    	$contact_details = \Auth::user()->contact_details();

    	return view('profiles.contact', compact('countries', 'cities', 'regions', 'contact_details'));
    }

    /**
     * Update the user's contact details
     * @param  UpdateUserContactDetails $request
     * @return Redirect
     */
    public function postUpdateContactDetails(UpdateUserContactDetails $request)
    {
    	\Auth::user()->profile()->update($request->only('phone'));

    	$location = Location::firstOrCreate([
    		'city_id' => City::where('name', $request->only('city'))->first()->id, 
    		'region_id' => Region::where('name', $request->only('region'))->first()->id, 
    		'country_id' => Country::where('name', $request->only('country'))->first()->id
    	]);

    	$address_data = $request->only('line1', 'line2', 'pincode');

    	$address_data['location_id'] = $location->id;

    	\Auth::user()->address->createOrUpdate($address_data);

    	return redirect('update/profile/photo');
    }

    public function getUpdatePhoto()
    {
    	return view('profiles.photo');
    }

    public function postUpdatePhoto()
    {
    	# code...
    }

    public function getUserInterests()
    {
    	# code...
    }

    public function postUserInterests()
    {
    	# code...
    }
}
