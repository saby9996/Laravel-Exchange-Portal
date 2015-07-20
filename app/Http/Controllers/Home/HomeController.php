<?php

namespace Swapstr\Http\Controllers\Home;

use Illuminate\Http\Request;

use Swapstr\Http\Requests;
use Swapstr\Http\Requests\UpdateUserProfileDetails;
use Swapstr\Http\Controllers\Controller;

use Swapstr\User;
use Swapstr\City;
use Swapstr\Region;
use Swapstr\Country;
use Swapstr\Location;
use Swapstr\Profile;

class HomeController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function getUpdateProfile()
    {
    	$countries = Country::lists('name', 'name');

    	$cities = City::lists('name', 'name');

    	$regions = Region::lists('name', 'name');

    	$profile = \Auth::user()->profile;

    	$profile['line1'] = $profile->address->line1;

    	$profile['line2'] = $profile->address->line2;

    	$profile['pincode'] = $profile->address->pincode;

    	$profile['country'] = $profile->address->location->country->name;

    	$profile['city'] = $profile->address->location->city->name;

    	$profile['region'] = $profile->address->location->region->name;

    	return view('profiles.update', compact('countries', 'cities', 'regions', 'profile'));
    }

    public function postUpdateProfile(UpdateUserProfileDetails $request)
    {
    	$user = \Auth::user()->profile()->update($request->only('phone'));

    	$city = City::where('name', $request->only('city'))->first();

    	$region = Region::where('name', $request->only('region'))->first();

    	$country = Country::where('name', $request->only('country'))->first();

    	$location = Location::firstOrCreate([
    		'city_id' => $city->id, 
    		'region_id' => $region->id, 
    		'country_id' => $country->id
    	]);

    	$address_data = $request->only('line1', 'line2', 'pincode');

    	$profile = Profile::where('user_id', $user)->first();

    	$address_data['location_id'] = $location->id;

    	$address = Profile::find($profile->id)->address()->update($address_data);

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
}
