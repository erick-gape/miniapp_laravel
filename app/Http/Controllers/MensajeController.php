<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MensajeController extends Controller
{
    public function index()
    {
        return view('formulario');
    }

    public function guardar(Request $request)
    {
        $mensaje = [
            'nombre' => $request->nombre,
            'email' => $request->email,
            'mensaje' => $request->mensaje,
            'fecha' => now()->format('Y-m-d H:i:s')
        ];

        $archivo = storage_path('app/mensajes.json');

        $mensajes = [];
        if (File::exists($archivo)) {
            $mensajes = json_decode(File::get($archivo), true);
        }

        $mensajes[] = $mensaje;

        File::put($archivo, json_encode($mensajes, JSON_PRETTY_PRINT));

        return response()->json(['status' => 'ok']);
    }

    public function registros()
    {
        $archivo = storage_path('app/mensajes.json');

        $mensajes = [];
        if (File::exists($archivo)) {
            $mensajes = json_decode(File::get($archivo), true);
        }

        return view('registros', compact('mensajes'));
    }
}
