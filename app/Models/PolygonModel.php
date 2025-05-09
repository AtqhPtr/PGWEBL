<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class PolygonModel extends Model
{
    protected $table = 'polygons';

    protected $guarded = ['id'];

    public function geojson_polygons()
    {
        $polygons = $this->select(DB::raw('id, st_asgeojson(geom) as geom, name, description, image,
        st_area(geom, true) as area_m, st_area(geom, true)/1000 as area_hektar,  st_area(geom, true)/1000000 as area_km,
        created_at, updated_at'))->get();

    $geojson = [
        'type' => 'FeatureCollection',
        'features' => [],
    ];

    foreach ($polygons as $p) {
        $feature = [
            'type' => 'Feature',
            'geometry' => json_decode($p->geom),
            'properties' => [
                'id' => $p->id,
                'name' => $p->name,
                'description' => $p->description,
                'area_m' => $p->area_m,
                'area_km' => $p->area_km,
                'area_hektar' => $p->area_hektar,
                'image' => $p->image,
                'created_at' => $p->created_at,
                'updated_at' => $p->updated_at,
            ],
        ];
        array_push($geojson['features'], $feature);
    }
    return $geojson;
    }


}
