<?php

namespace App\Http\Controllers\API\Kanban;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KanbanStatus;
use App\Models\Kanban;

class KanbanController extends Controller
{
    public function index()
    {
        $kanbanStatus = KanbanStatus::all();
        $dashboards = array();
        foreach ($kanbanStatus as $kanban) {
          $dashboard = [
            'id' => $kanban->sku,
            'title' => $kanban->nombre,
            'item' => []
          ];
          if ($kanban->events != null)
          {
            foreach ($kanban->events as $key => $event) {
              $dashboard['item'][] = [
                'id' => $kanban->sku .'-'. $event->id,
                'title' => $event->titulo,
                'comments' => 0,
                'badge-text' => 'UX',
                'badge' => 'success',
                'due-date' => $event->fecha_vencimiento,
                'attachments' => 0,
                'assigned' => [
                  '12.png'
                ],
                'members' => [
                  'Osiris'
                ],
                'kanban_id' => $event->id
              ];
            }
          }

          array_push($dashboards, $dashboard);
        }

        return response()->json([
            'code' => 200,
            'message' => 'Lista de eventos',
            'data' => $dashboards
        ], 200);
    }

    public function updateStatus(string $event, string $status)
    {
      $kanban_id = substr($event, -1);

      $kanban_status = KanbanStatus::where('sku', $status)->first();
      $kanban = Kanban::find($kanban_id);
      if ($kanban == null) {
        return response()->json([
            'code' => 404,
            'message' => 'La tarea no se pudo actualizar',
            'data' => null
        ], 404);
      }
      $kanban->kanban_status_id = $kanban_status->id;
      $kanban->save();
      return response()->json([
          'code' => 201,
          'message' => 'Tarea actualizada',
          'data' => null
      ], 201);
    }

    public function delete($id)
    {
      $kanban = Kanban::find((int) $id);
      if ($kanban != null) {
        //$kanban->delete();
        return response()->json([
            'code' => 200,
            'message' => 'Tarea eliminada correctamente',
            'data' => null
        ], 200);
      } else {
        return response()->json([
            'code' => 200,
            'message' => 'La tarea no se pudo eliminar',
            'data' => null
        ], 200);
      }
    }
}
