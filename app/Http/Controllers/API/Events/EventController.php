<?php

namespace App\Http\Controllers\API\Events;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use App\Models\Label;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::with('label')->get();
        return response()->json([
            'code' => 200,
            'message' => 'Lista de eventos',
            'events' => $events
        ], 200);
    }
    public function store(Request $request)
    {
        $label = Label::where('sku', $request->calendar)->first();
        $user = User::where('id', $request->user_id)->first();

        $invitado = ($request->filled('guests')) ? $request->guests : null;

        if ($invitado == 'none') {
          $invitado = null;
        }

        $event = new Event();
        $event->titulo = $request->titulo;
        $event->descripcion = ($request->filled('descripcion')) ? $request->descripcion : 'Sin comentarios';
        $event->url_meeting = ($request->filled('url_meeting')) ? $request->url_meeting : null;
        $event->locacion = ($request->filled('locacion')) ? $request->locacion : 'México';
        $event->fecha_inicio = $request->fecha_inicio;
        $event->fecha_fin = $request->fecha_fin;
        $event->invitado_id = $invitado;
        $event->user_id = $user->id;
        $event->label_id = $label->id;
        $event->save();

        return response()->json([
            'code' => 201,
            'message' => 'Evento creado correctamente',
            'event' => $event
        ], 201);
    }
}
