<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
  // index
  public function index()
  {
    $companies = Company::all()->where('is_active', 1);
    // $companies = ['hi there'];

    return view('admin.companies', compact('companies'));
  }

  // add
  public function store(Request $request)
  {
    $company = new Company();

    $request->validate([
      'name' => 'required',
      'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
      'location' => 'required',
      'description' => 'required',
    ]);

    $file = $request->file('logo');
    $file->store('images', ['disk' => 'assets']);

    $company->name = $request->input('name');
    $company->logo = $file->hashName();
    $company->location = $request->input('location');
    $company->description = $request->input('description');
    $company->save();

    return redirect('admin/companies')->with('status', 'company added');
  }

  // edit
  public function update(Request $request)
  {
    $id = $request->id;

    $request->validate([
      'name' => 'required',
      'location' => 'required',
      'description' => 'required',
    ]);

    $file = $request->file('logo');

    $data = [
      'name' => $request->input('name'),
      "description" => $request->input('description')
    ];

    if ($file) {
      $file->store('images', ['disk' => 'assets']);
      $data['logo'] = $file->hashName();
    }

    Company::where('id', $id)->update($data);


    return redirect('admin/companies')->with('status', 'company edited');
  }

  // delete
  public function destroy(Request $request)
  {
    $id = $request->id;

    $result = Company::where('id', $id)->update([
      'is_active' => 0
    ]);

    return redirect('/admin/companies')->with(['status' => 'Company deleted']);
  }
}
