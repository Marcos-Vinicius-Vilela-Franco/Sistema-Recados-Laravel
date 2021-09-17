<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Recado;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RecadoRequest;
class RecadoController extends Controller
{
    private $recado;

    public function __construct(Recado $recado)
    {
        $this->recado = $recado;
    }
    public function index(){
        $user=Auth::user()->id;
        $userRecado= Auth::user()->recado;
        
        $userName = Auth::user()->name;
        
        // $recado = $this->recado::all();
       // dd($userRecado);
        $recado = $userRecado;
     
        return view('admin.recados.index', compact('recado','user','userName'));
    }


    public function create(){
        $users=\App\Models\User::all(['id','name']);
        return view('admin.recados.create', compact('users'));
    }


    public function recados(RecadoRequest $request){
        
       
       $data =$request->all();
       $user = \App\Models\User::find($data['user']);
       
       $recados = $user->recado()->create($data);
      
       $user=Auth::user()->id;
       $recado = $this->recado::all();
       
       
    

       return view('admin.recados.index',compact('recado','user'));
    }


    public function edit($recado){
        
      
        $recado = \App\Models\Recado::find($recado);
      
        return view('admin.recados.edit',compact('recado'));

    }
    public function update(RecadoRequest $request, $recado){
        $data = $request->all();
        $recado =\App\Models\Recado::find($recado);
        $recado->update($data);

        return redirect('admin/recados');
    }
    public function destroy($recado){
        $note = \App\Models\Recado::find($recado);
        $note->delete();
        
       
        return redirect('/admin/recados');
    }
}
