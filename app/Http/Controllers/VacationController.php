<?php

namespace App\Http\Controllers;

use App\Models\Vacation;
use Illuminate\Http\Request;



class VacationController extends Controller
{

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacations = Vacation::all();
        return view('requests.RequestHome', ['vacations' => $vacations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('requests.vacations.VacationRequest');

    }

    /**
     * Store a newly created resource in storage.
     */
    
     public function store(Request $request)
     {
         // Validate the incoming data
         $validatedData = $request->validate([
            // $user=User::all(),hello
            //  'emp_id' =>User::find($user->id),
             'start_date' => 'required|date',
             'end_date' => 'required|date|after_or_equal:start_date',
             'vacation_type' => 'required|in:1,2,3', // Assuming 1, 2, 3 are valid types
             
            //  'RemainingDates' => 'nullable|integer|min:1',
         ]);
 
         // Create a new Vacation instance and save to the database
         $vacation = Vacation::create($validatedData);
        //  $vacation->emp_id = auth()->id(); // إذا كان emp_id يمثل معرف المستخدم
        //  $vacation = Vacation::find($vacation->emp_id);


         // Redirect with success message
         return redirect()->route('RequestHome') ->with('success', 'Vacation request submitted successfully.');
     }

    /**
     * Display the specified resource.
     */
    public function show(Vacation $vacations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacation $vacation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vacation $vacation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacation $vacation)
    {
        //
    }
}
