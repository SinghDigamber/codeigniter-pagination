<?php 

namespace App\Controllers; 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class CrudController extends BaseController {
 
    public function index(){
		$data['name'] = 'John Doe';
		$data['content'] = 'crud/index_crud';
        return view('templates/main', $data);
    }

    public function user_table(){
        $model = new UserModel();
		$data['users'] = $model->getUsers();
        echo view('crud/user_table', $data);
    }

}
?>