<?php
namespace App\Http\Controllers;
use App\Code;
use App\User;
use Illuminate\Http\Request;
class userController extends Controller
{
    public function indexGet(){
        $userId = \auth()->user()->id;
        $userName = \auth()->user()->name;
        $this->checkIfExist($userId, $userName);
        return view('users.auth.login_pin');
    }
    public function indexPost(Request $request){
        $user = User::find(\auth()->user()->id);
        $myPin = $user->code->pin;
        $userInput = $request->input('pin');
        if ($myPin === $userInput){
           return redirect('log/change');
        } else {
            session()->flash('message','YOUR PIN INCORRECT, TRY AGAIN');
            return redirect('log/pin');
        }
    }
    public function changePin(Request $request){
        if ($request->getMethod() === 'GET'){
            return view('users.auth.change_pin');
        } else if ($request->getMethod() === 'POST') {
            $myNewPin = $request->input('pin');
            $code = Code::where('user_id', $request->user()->id)->update(['pin'=>$myNewPin]);
            return redirect('log/pin');
        }else {
            return 'ERROR';
        }
    }
    public function logout(){
        auth()->logout();
        return redirect('log/pin');
    }
    protected function checkIfExist($id,$userName){
        $exist = Code::find($id);
        if (!empty($exist)){
            return true;
        }else {
            $pin = new Code();
            $pin->user_id = $id;
            $pin->user_name = $userName;
            $pin->save();
            return false;
        }
    }
}
