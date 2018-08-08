<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class IndexController extends BaseController {


	public function index()
	{
		$url = url()->current();
		if (!str_contains($url, 'index.php')){
			return redirect('/index.php');
		}
		return view('solmaforo3');
	}

	public function solma()
	{
		return view('solma');
	}

	public function info()
	{
		return view('info');
	}

	public function galeria()
	{
		$data['files'] = Storage::files('/galeria');
		return view('galeria')->with('data', $data);
	}

	public function docs()
	{
		return view('documentos');
	}

	public function database()
	{
		$data = DB::select("select DATE_FORMAT(Fecha_Hora, '%d/%m/%Y %H:%i') as Fecha_Hora, Temperatura, Humedad, UV from mediciones");
		return view('reporte')->with('data', $data);
	}

	public function nosotros()
	{
		return view('nosotros');
	}

}
