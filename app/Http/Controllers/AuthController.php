<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage(){
        $data['countries'] = User::getCountries();
        return view('public.src.login')->with($data);
    }

    public function registration(Request $req){
        $this->validate($req, [
            'full_name' => 'required',
            'email' => 'required',
            'country' => 'required',
            'contact' => 'required',
            'password' => 'min:6|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'min:6',
            'terms_and_services' => 'required',
        ]);

        $name = $req['full_name'];
        $email = $req['email'];
        $country = $req['country'];
        $region = $req['region'];
        $state = $req['state'];
        $dob = $req['date_of_birth'];
        $contact = $req['contact'];
        $zip = $req['postal_code'];
        $subscribe = $req['subscribe'];
        $password = $req['password'];
        $gender = $req['gender'];
        $profile = $req['profile_image'];

        $user = new User();
        $user->name = $name;
        $user->contact = $contact;
        $user->email = $email;
        $user->country = $country;
        $user->date_of_birth = $dob;
        $user->gender = $gender;
        $user->region = $region;
        $user->state = $state;
        $user->zip = $zip;
        $user->lang = "en";
        $user->password = bcrypt($password);
        $user->contact = $contact;



        if($profile != null){
            $destinationPath = '/img/user/';
            $filename = $email.'.'.request()->profile_image->getClientOriginalExtension();
            request()->profile_image->move(public_path($destinationPath), $filename);
            $user->profile = '/img/user/'.$filename;
        } else {
            $user->profile = '/img/user/default.png';
        }

        $user->save();
        if($subscribe){
            $sub = new Subscriber();
                $sub->email = $email;
                try {
                    $sub->save();
                } catch (\Exception $th) {
                    //throw $th;
                }
            }

        $message = array('message' => 'Your registration was successful', 'alert-type' => 'success');
        return redirect()->back()->with($message);
    }



    public function login(Request $req){
        $this->validate($req, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $req['email'];
        $password = $req['password'];
        $remember = $req['remember'];

        //all admins using email
        if(Auth::guard('admin')->attempt(['email' => $email, 'password' => $password], $remember)){
            $notification = array(
                'message' => trans('messages.login_success', ['email' => $email]),
                'alert-type' => 'success'
            );
            return redirect()->route('admin.home')->with($notification);
        }

        //all student
        else if(Auth::attempt(['email' => $email, 'password' => $password], $remember)){

            $notification = array('message' => 'Login was sucessful', 'alert-type' => 'success');
            return redirect()->route('landingPage')->with($notification);
        }
        else {
            $notification = array(
                'message' => 'the email and password you entered are invalid, please try again',
                'alert-type' => 'error'
            );
            session()->flash('error', 'error');
            return redirect()->back()->withInput()->with($notification);
        }
    }

    public function adminLogout(){
        $notification = array(
            'message' => 'bye! bye!, logout successfully',
            'alert-type' => 'info'
        );
        session()->flash('error', 'error');
        Auth::guard('admin')->logout();
        return redirect('/')->with($notification);
    }

    public function userLogout(){
        $notification = array(
            'message' => 'bye! bye!, logout successfully',
            'alert-type' => 'info'
        );
        Auth::logout();
        return redirect('/')->with($notification);
    }
}
