<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\FuncionarioModel AS FuncionarioModel;

class FuncionarioController extends Controller
{

    private $funcionarioModel;

    public function __construct()
    {
        $this->funcionarioModel = new FuncionarioModel();
    }

    //Funcao Listar
    public function listar_funcionarios_brasil()
    {
        return $this->funcionarioModel->listar_funcionarios_brasil();
    }


}