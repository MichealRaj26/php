<?php
namespace App\Http\Controllers;

use App\Models\BasicCrud;
use Illuminate\Http\Request;

class BasicCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = BasicCrud::all();

        return view('basic_crud.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('basic_crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                'name'    => 'required|string',
                'email'   => 'required|string|unique:basic_cruds,email',
                'phone'   => 'required|numeric|unique:basic_cruds,phone|digits:10',
                'address' => 'required|string',
                'dob'     => 'required',
                'age'     => 'required|numeric|digits_between:1,2',
            ]
        );

        $validate['created_at'] = now();

        BasicCrud::create($validate);

        return redirect()->route('basic_crud.index')->with('sucess', 'Successfully Saved');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $basicCrud = BasicCrud::findOrFail($id);

        return view('basic_crud.show', compact('basicCrud'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $basicCrud = BasicCrud::findOrFail($id);
        return view('basic_crud.edit', compact('basicCrud'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Get the BasiCrud models record
        $basicCrud = BasicCrud::findOrFail($id);

        $validated = $request->validate(
            [
                'name'    => 'required|string',
                'email'   => 'required|string|unique:basic_cruds,email,' . $basicCrud->id,
                'phone'   => 'required|numeric|digits:10|unique:basic_cruds,phone,' . $basicCrud->id,
                'address' => 'required|string',
                'dob'     => 'required',
                'age'     => 'required|numeric|digits_between:1,2',
            ]
        );

        $validated['updated_at'] = now();

        // This line tries to update all records in the basic_cruds table.
        // BasicCrud::update($validated);

        $basicCrud->update($validated);

        return redirect()->route('basic_crud.index')->with('success', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the BasicCrud Records using findorFail
        $basicCrud = BasicCrud::findOrFail($id);

        $basicCrud->delete();

        return redirect()->route('basic_crud.index')->with('success', 'Delete Successfully');

    }
}
