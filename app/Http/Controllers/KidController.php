<?php

namespace App\Http\Controllers;
use App\Models\Kid;
use App\Models\Package;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Carbon;


use DateTime;

use Illuminate\Http\Request;

class KidController extends Controller
{
    public function index()
    {
        $kids = Kid::paginate(5);

      //  dd($kids);
        $kids_count = Kid::all()->count();


        foreach ($kids as $kid) {
             $kid->package->name;
        }


        return Inertia::render('Admin/Kids/Index', ['kids' => $kids , 'kids_count' =>$kids_count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function store(Request $request)
    {


        Kid::create($request->all());

        return redirect()->back()
                    ->with('message', 'Student Successful.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'full_name' => 'required',
            'birhtdate' => 'required|date',
            'no_mykid' => 'required|integer|max:12',
            'place_birth' => 'required|string',
            'gender' => 'required|string',
            'no_birth_cert' => 'required|integer',
        ])->validate();

        if ($request->has('id')) {
            Kid::find($request->input('id'))->update($request->all());
            return redirect()->back()
                    ->with('message', 'Kid Updated Successfully.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function destroy(Request $request)
    {
        if ($request->has('id')) {
            Kid::find($request->input('id'))->delete();
            return redirect()->back();
        }
    }
}
