<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile.show', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            // เพิ่มกฎการตรวจสอบอื่นๆ ที่คุณต้องการ
        ]);

        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // อัปเดตฟิลด์อื่นๆ ตามต้องการ
        $user->save();

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    }
}

