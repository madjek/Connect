<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Relation;

class RelationController extends Controller
{
    public function friend($id)
    {
        $relation = new Relation();
        $obj = session()->get('id');
        $dec = json_decode($obj);
        $id_u= $dec[0]->id;

        $relation->first_user_id = $id_u;
        $relation->second_user_id = $id;

        
        if (Relation::where('first_user_id', '=', $id_u)->where('second_user_id', '=', $id)->exists()) {
            return redirect()->back()->with('error', 'You are friends already');
        }else {
            $relation->save();
            return redirect()->back()->with('success', 'Now you are friends');
        }

    }

    public function destroy($id)
    {
        $obj = session()->get('id');
        $dec = json_decode($obj);
        $id_u= $dec[0]->id;
        $relation = Relation::where('first_user_id', '=', $id_u)->where('second_user_id', '=', $id);
        $relation->delete();
        return redirect()->back()->with('success', 'You are not friends anymore');
    }
}
