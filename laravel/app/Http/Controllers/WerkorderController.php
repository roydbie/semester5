<?php

namespace App\Http\Controllers;

use App\Models\Werkorder;


class WerkorderController extends Controller
{
    public function getAlleWerkorders(): array
    {
        return Werkorder::all()->sortByDesc('aanmaaktijd')->sortByDesc('aanmaakdatum')->toArray();
    }
}
