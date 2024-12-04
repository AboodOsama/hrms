<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\industry;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{

    public function index()
    {

        //$companies = Company::with('industry')->get();
         $companies = Company::all();
        //return response($companies);
        return view('companies.ListCompanies')->with('companies', $companies);
    }

    // Show the form for creating a new company
    public function create()
    {
      //  $industry = industry::all();
        // return view('companies.CompanyAdd')->with('industries', $industry);
        return view('companies.CompanyAdd');
    }

    // Store a newly created company in storage
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            //'industry_id' => 'required',
            'address' => 'nullable',
            'img' => 'sometimes|file|image|max:5000',
            'recipient' => 'nullable',
            'recipient_phone' => 'nullable',
        ]);

        // Handle the file upload
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            // Generate a unique filename using UUID
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/companies_images', $filename);

            // Add the filename to the validated data array
            $validatedData['img'] = $filename;
        }


        // Create the company
        $company = Company::create($validatedData);

        // Redirect or return response
        return redirect('/company/ListCompanies')->with('success', 'company added successfully.');
    }




    // Show the form for editing the specified company
    public function edit(Company $company)
    {
        $company = Company::find($company->id);
        //$industry = industry::all();
        return view('companies.CompanyEdit', ['company' => $company]);
    }




    // Update the specified user in storage
    public function update(Request $request, company $company)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'industry_id' => 'required',
            'address' => 'nullable',
            'recipient' => 'nullable',
            'recipient_phone' => 'nullable',
            'img' => 'sometimes|file|image|max:5000',
        ]);

        // Check if a new profile image was uploaded
        if ($request->hasFile('img')) {
            // Delete the old image if it exists and is not the default image
            if ($company->img && $company->img !== 'company.png') {
                Storage::disk('public')->delete("companies_images/{$company->img}");
            }

            // Store the new image with a unique filename
            $file = $request->file('img');
            $filename = 'company_' . $company->id . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/companies_images/', $filename);

            // Add the filename to the validated data array
            $validatedData['img'] = $filename;
        } else {
            // If no new image is provided, keep the current image
            $validatedData['img'] = $company->img;
        }


        // Update the user with the validated data
        $company->update($validatedData);

        // Redirect or return response
        return redirect('/company/ListCompanies')->with('success', 'User updated successfully.');
    }

    // Remove the specified company from storage
    public function destroy(Company $company)
    {
        $company->delete();
        Storage::disk('public')->delete("companies_images/{$company->img}");

        return redirect('/company/ListCompanies')->with('success', 'User deleted successfully!');
    }
}
