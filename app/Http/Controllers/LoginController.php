<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;
use Illuminate\Support\Facades\Schema;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function verification(User $request) {
        if (isset($_POST['enviar'])) {
            $codigo = $_POST['codigo'];

            $sql = DB::select("SELECT * FROM codigos WHERE codigo = '$codigo'");
            return view('login')->with('codigo', $sql->codigo);

            if ($_POST['codigo'] == $codigo) {
                destroy();
            }
        }
    }

    public function destroy($id) {
        $sql = sql::find($id);
        $sql->delete();

        Session::flash('message', 'Sucesso em deletar!');
        return Redirect::to('login');
    }
}
