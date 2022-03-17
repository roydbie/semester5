<?php

namespace App\Http\Controllers;

use App\Models\Locatie;


class LocatieController extends Controller
{
    public function getAlleLocaties(): array
    {
        $locaties = Locatie::all()->toArray();
        $arraytodelete = [];
        foreach ($locaties as $key=>$item){
            if($locaties[$key]["actief"] != 1) {
                array_push($arraytodelete, $key);
            }
        }
        foreach($arraytodelete as $item)
        array_splice($locaties, $item, 1);
        return $locaties;
    }
}
