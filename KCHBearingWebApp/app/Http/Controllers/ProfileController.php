<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
    function updateProfile(Request $request){

        $validated = Validator::make($request-> all(),[
        'name' => ['required','string','max:255'],
        'phone' => ['required','string','max:255'],
        'Address' => ['required','string','max:255'],
        ]);
    
        #check if user profile image is null, then validate.
        if(auth()->user()->profile_image == null){
    
            $validate_image = Validator::make($request->all(),[
                'profile_image' => ['required','image','max:1000']
            ]);
    
            #check if their is any error in image validation
            if($validate_image->fails()){
                return response()->json(['code'=> 400,'msg'=>$validate_image->errors()->first()]);
            }
        }
    
    }
}
