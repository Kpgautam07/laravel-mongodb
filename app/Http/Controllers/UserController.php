<?php
namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Model\UsersModel;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;





class UserController extends Controller 
{
	public function index()
    {
    
		$data['users'] = DB::table('users')->where('is_deleted',0)->where('user_type','!=','admin')->get();
        return view('admin.users.index',$data);
	}
     public function users_status(Request $request)
    {
        $id = $request->input('id');
        $status = $request->input('status');
        if($status == '1')
        {
            DB::table('users')->where('_id',$id)->update(['status' => '0']);
                return response()->json(['return' => 'Inactive']);
        }
        elseif($status == '0')
        {
            DB::table('users')->where('_id',$id)->update(['status' => '1']);
                return response()->json(['return' => 'Active']);
        }
        else
        {
            return redirect()->back()
                    ->with('error','Unable to change the status');
        }
    }
}