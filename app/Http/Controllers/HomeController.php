<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user=\Auth::user();

        return view('home',compact('user'));
    }

    public function galleryUpload(Request $request)
    {

        try {
            if ($request->has('file')) {

                $this->validate($request, [
                    'file' => 'mimes:jpg,jpeg,png|max:3000',
                ]);

                $user=\Auth::user();
                $user->addMedia($request->file('file'))->withCustomProperties(['root' => 'user_' . $user->id])->toMediaCollection($user->galleryMediaCollection);
                $message="ssuu";
            }
        } catch (\Exception $exception) {
            $message="ff";

        }
        return response()->json($message);
    }
}
