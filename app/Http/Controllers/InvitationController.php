<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index()
    {
        return Invitation::all();
    }

    public function store(Request $request)
    {
        $record = new Invitation();
        $record->fill($request->all());
        $record->save();
    }
    public function show(string $event_id, $user_id, $appeared)
    {
        $invitation = Invitation::where('user_id', $user_id)
        ->where('copy_id', $event_id)
        ->where('start',  $appeared)
        ->get();
        return $invitation[0];
    }

    public function update(Request $request, $event_id, $user_id,  $appeared)
    {
        $record = $this->show($event_id, $user_id,  $appeared);
        $record->fill($request->all());
        $record->save();
    }

    public function destroy($event_id, $user_id,  $appeared)
    {
        $this->show($event_id, $user_id, $appeared)->delete();
    }
}
