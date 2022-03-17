<?php

namespace App\Http\Controllers;

use App\Models\Locatie;
use App\Models\Status;
use App\Models\Werkorder;


class WerkorderController extends Controller
{
    public function getAlleWerkorders(): array
    {
        $array = Werkorder::all()->sortBy([['aanmaakdatum', 'desc'], ['aanmaaktijd', 'desc'],])->toArray();
        foreach ($array as $key=>$item){
            $string_status = Status::all()->where("id", "=", $item["status_id"]);
            $array[$key]["status_id"] = $string_status->first()["status"];

            $string_locatie = Locatie::all()->where("id", "=", $item["locatie_id"]);
            $array[$key]["locatie_id"] = $string_locatie->first()["locatie"];
        }
        return $array;
    }
}
