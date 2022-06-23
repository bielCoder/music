<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Dado;
use App\Models\User;

class Storecontroller extends Controller
{
    public function index()
    {
       
        $all = Dado::all();
        return view('index',['all'=>$all]);
    }

    public function logout()
    {
        return redirect('/');
    }

     public function meusAnuncios()
    {
        return view('meus-anuncios');
    }

    public function anunciar()
    {
        return view('anunciar');
    }

    public function dados(Dado $dados)
    {
        $date = Dado::all();
        return view('dados',['date'=>$date]);
    }

    public function register(Request $request){
            $dados = new User();
            $dados -> first_name = $request -> first_name;
            $dados -> last_name = $request -> last_name;
            $dados -> email = $request -> email;
            $dados -> telefone = $request -> telefone;
            $dados -> password =  bcrypt($request -> password);
            $dados -> save();    

        return redirect('/');
    }

    public function storeAnunciar(Request $request)
    {
        $all = new Dado;

        $all -> nomeCompleto = $request -> nome;
        $all -> telefone = $request -> telefone;
        $all -> funcao = $request -> funcao;
        $all -> quantoTempoTocando = $request -> tempo;
        $all -> cache = $request -> cache;
        $all -> transporte = $request -> transporte;


        // image upload

        if($request->hasfile('image')&&$request->file('image')->isValid())
        {
            $requestImage = $request -> image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now").".".$extension);
            $request -> image->move(public_path('/img/imageStorage'),$imageName);
            $all -> image = $imageName;
            $all->save();
        }

        return redirect('/')->with('msg','Anuncio registrado com Sucesso!');
    }

    public function edit(User $user){
        return view('editdado',['user' => $user]);
    }

    public function update(Request $request,$id){
        $user = new User;
        $data = [
            'first_name' => $request -> first_name,
            'last_name' => $request -> last_name,
            'email' => $request -> email,
            'telefone' => $request -> telefone,
        ];

        $user = User::findorfail($id)->update($data);

        return redirect('dados');

    }
}