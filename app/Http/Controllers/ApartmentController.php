<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartment;
use Illuminate\Support\Facades\Storage;

class ApartmentController extends Controller
{
    public function index(Request $request)
    {


        $filterStatus = $request->input('status');
        $filterPrice = $request->input('price');
        $filterLocation = $request->input('location');
        $filterDate = $request->input('registerDate');
        if($filterPrice != "" || $filterStatus != "" || $filterLocation != "" || $filterDate != ""){

            $apartments = Apartment::where(function($query) use ($filterStatus){
                $query->where('status', 'like', '%'.$filterStatus.'%');
            })->when($filterDate, function($query, $filterPrice){
                return $query->orderBy('price', $filterPrice);
            })->when($filterDate, function($query, $filterLocation){
                return $query->orderBy('location', $filterLocation);
            })->when($filterDate, function($query, $filterDate){
                return $query->orderBy('created_at', $filterDate);
            })->simplePaginate(15);
        }
        else{
            $apartments = Apartment::simplePaginate(15);
        }


        return view('pages.home', compact('apartments'));
    }
    public function addApartment(){
        return view('pages.add-apartment');
    }
    public function storeApartment(Request $request){

        $validated = $request->validate([
            'name'=> 'required|max:255',
            'location'=> 'required|max:255',
            'floor'=> 'required',
            'bedrooms'=> 'required',
            'car_spaces'=> 'required',
            'area'=> 'required',
            'price' => 'required',

        ]);
        Apartment::create([
            'name'=> request('name'),
            'location'=> request('location'),
            'floor'=> request('floor'),
            'bedrooms'=> request('bedrooms'),
            'car_spaces'=> request('car_spaces'),
            'living_spaces'=> request('living_spaces'),
            'bathrooms' => request('bathrooms'),
            'area'=> request('area'),
            'price' => request('price'),
            'status' => request('status'),
            'date_sell_from' => request('date_sell_from'),
            'date_sell_to' => request('date_sell_to')
        ]);
        return redirect('/');
    }
    public function deleteApartment(Apartment $apartment){
        $apartment->delete();
        return redirect('/');
    }
    public function updateStatus(Apartment $apartment){
        return view('pages.edit-status', compact('apartment'));
    }
    public function storeUpdate(Apartment $apartment, Request $request){
        Apartment::where('id', $apartment->id)->update($request->only(['status']));
        return redirect('/');
    }
    public function importCompany(){
        return view('pages.import');
    }
    public function importAdd(Request $request){
        $path = $request->file('file')->storeAs('public/data', 'data.csv');
        $dataFile = Storage::get($path);
        $dataFile = explode(PHP_EOL, $dataFile);
        $file = [];
        foreach ($dataFile as $data){
            $file[] = explode(',', $data);
        }
        //dd($file);
        return redirect('/');
    }
}
