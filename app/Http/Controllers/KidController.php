<?php

namespace App\Http\Controllers;
use App\Models\Kid;
use App\Models\Package;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class KidController extends Controller
{
    public function index()
    {
        $kids = Kid::orderBy('created_at', 'desc')->paginate(5);

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
        Validator::make($request->all(), [
            'full_name' => ['required'],
            'birthdate' => ['required'],
            'no_mykid' => ['required', 'digits:12'],
            'gender' => ['required', 'string'],
            'no_birth_cert' => ['required', 'integer'],
            'address' => ['required'],
            'city' => ['required'],
            'zip' => ['required'],
            'state' => ['required'],
            'photo_temp'=> ['nullable','image', 'max:5000'],
            'package_id'=> ['required']
        ],[
            'gender.required' => 'Please select one of the gender',
            'package_id.required' => 'Please select one of the package',
            'no_birth_cert.required' => 'The birth certification number field is required',
            'no_mykid.required' => 'The my kid number field is required',
            'no_mykid.digits' => 'The my kid number must be exactly 12 digits.',
            'photo_temp.max' => "Student's photo must below than 5 MB",
        ])->validate();

            $fulladress = [$request['address'],$request['city'],$request['zip'],$request['state']];

        Kid::create(
            [
                'full_name' => $request['full_name'],
                'birthdate' => '2019-03-03',
                'no_mykid' => $request['no_mykid'],
                'place_birth' => $fulladress[0] . ", " . $fulladress[1] . ", " . $fulladress[2] . ", " . $fulladress[3] . ".",
                'gender' => $request['gender'],
                'no_birth_cert' => $request['no_birth_cert'],
                'package_id' => $request['package_id'],
                'photo' => $request->file('photo_temp') ? $request->file('photo_temp')->store('public/kids') : null,

            ]
        );

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
            'birthdate' => 'required|date',
            'no_mykid' => 'required|integer|max:20',
            'place_birth' => 'required|string',
            'gender' => 'required|string',
            'no_birth_cert' => 'required|integer',
            'package_id' => 'required',
        ],[
            'gender.required' => 'Please select one of the gender'
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
