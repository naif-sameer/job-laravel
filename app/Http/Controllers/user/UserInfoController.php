<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
  public function index()
  {
    $userInfos = User::all()->where('is_active', 1);

    return view('user.user-info', compact('userInfos'));
  }


  // add
  public function store(Request $request)
  {
    $userInfo = new UserInfo();

    $request->validate([
      'name' => 'required',
      'phone' => 'required',
      'gender' => 'required',
      'birth_date' => 'required',
      'experience_id' => 'required',
      'description' => 'required',
    ]);

    $userInfo->name = $request->input('name');
    $userInfo->phone = $request->input('phone');
    $userInfo->gender = $request->input('gender');
    $userInfo->birth_date = $request->input('birth_date');
    $userInfo->experience_id = $request->input('experience_id');
    $userInfo->description = $request->input('description');
    $userInfo->save();

    return redirect('profile/userInfo')->with('status', 'user Info added');
  }

  // edit
  public function update(Request $request)
  {
    $id = $request->id;

    $request->validate([
      'name' => 'required',
      'phone' => 'required',
      'gender' => 'required',
      'birth_date' => 'required',
      'experience_id' => 'required',
      'description' => 'required',
    ]);

    UserInfo::where('id', $id)->update([
      'name' => $request->input('name'),
      'phone' => $request->input('phone'),
      'gender' => $request->input('gender'),
      'birth_date' => $request->input('birth_date'),
      'experience_id' => $request->input('experience_id'),
      'description' => $request->input('description'),
    ]);

    return redirect('profile/userInfo')->with('status', 'user info edited');
  }

  // delete
  public function destroy(Request $request)
  {
    $id = $request->id;

    $result = UserInfo::where('id', $id)->update(['is_active' => 0]);

    return redirect('profile/userInfo')->with(['status' => 'UserInfo deleted']);
  }
}
