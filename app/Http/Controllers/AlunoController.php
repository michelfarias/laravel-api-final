<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Aluno;

class AlunoController extends Controller
{
	private $alunoModel;

	public function __construct(Aluno $aluno){
		$this->alunoModel = $aluno;
	}

    public function index(){
    	return $this->alunoModel->get();
    	//return Aluno::all();
    }

    public function find($id){
    	return $this->alunoModel->find($id);
    }

    public function insert(Request $request){
    	$dados = $request->all();
    	$this->alunoModel->create($dados);
    }

   	public function update(Request $request, $id){
   		$aluno = $this->find($id);
   		$aluno->update($request->all());
   	}

   	public function delete($id){
   		$aluno = $this->find($id);
   		$aluno->delete();
   	}
}
