<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;

class SettingController extends Controller
{
    public function index()
    {
      $id = Auth::user()->id;
      $data = User::find($id);
      return view('setting',['data' => $data]);
    }
    public function update()
    {
      $id = Auth::user()->id;
      $data = User::find($id);
      return view('esetting',['data' => $data]);
    }
    public function edit(Request $Request, $id)
    {
      $this->validate($Request, [
          'nama' => 'required|min:2',
          'email' => 'required|min:8'
      ]);

      $data = User::find($id);
      $data->name = $Request->nama;
      $data->email = $Request->email;
      $data->save();

      return redirect('setting');
    }
    public function show()
    {

      $id = Auth::user()->id;
      $data = User::find($id);
      return view('foto',['data' => $data]);
    }
    public function ubahfoto(Request $Request, $id)
    {
      $data = User::find($id);
      $data->foto = $Request->foto;

      if($Request->file('foto') == "")
        {
            $data->foto = $data->foto;
        }
        else
        {
            $file       = $Request->file('foto');
            $fileName   = $file->getClientOriginalName();
            $Request->file('foto')->move("img/", $fileName);
            $data->foto = $fileName;
        }
      $data->save();

      return redirect('foto');
    }
}
