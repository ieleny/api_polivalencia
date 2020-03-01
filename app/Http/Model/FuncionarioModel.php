<?php 

namespace App\Http\Model;

use Illuminate\Support\Facades\DB;


class FuncionarioModel
{
    //Funcao Listar
    public function listar_funcionarios_brasil()
    {

        try {

            $result = DB::select("  SELECT * FROM dbo.posto_trabalho AS posto_trabalho
                                        WHERE   
                                            posto_trabalho.pais_posto_trabalho LIKE '%BRAZIL%';
                                ");
        } catch (\Throwable $th) {
            throw $th;
        }

        if(empty($result)){
            $result = json_encode(["msg" => "Não nenhum funcionário, que trabalhe no brasil"]);
        }

        return $result;

    }


}