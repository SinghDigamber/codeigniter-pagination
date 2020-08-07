<?php 
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller
{

    public function getAll() {
        $userModel = new UserModel();
 
        $data = [
            'users' => $userModel->paginate(6),
            'pager' => $userModel->pager
        ];

        return view('user_view', $data);
    }
 
}


