<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//models
use App\House;
use App\Location;
use App\Category;
use App\Contact;

class HouseController extends Controller
{
    public function index(Request $request)
    {
        $houses = House::all();
        $q = isset($request->q) ? $request->q : null;
        $loc = isset($request->loc) ? Location::where('slug', $request->loc)->first() : null;
        $cat = isset($request->cat) ? Category::where('slug', $request->cat)->first() : null;
        if($q != null || $loc != null || $cat != null){
            $houses = House::where('nama', 'like', '%' . $q . '%')
                            ->orWhere('location_id', isset($loc) ? $loc->id : null)
                            ->orWhere('category_id', isset($cat) ? $cat->id : null)
                            ->get();
        }
        
        $data = [
            'houses' => $houses
        ];

        return view('list', $data);
    }

    public function show($id)
    {
        $house = House::find($id);
        $houses = House::where('id', '!=', $id)->get();
        $contact = Contact::first();

        $data = [
            'house' => $house,
            'houses' => $houses,
            'contact' => $contact
        ];

        return view('detail', $data);
    }
}
