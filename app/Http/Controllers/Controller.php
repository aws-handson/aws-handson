<?php

namespace App\Http\Controllers;

use App\Gun;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Redis;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function gunsIndex()
    {
        try {
            $gunsFromDB = Gun::all();
            Redis::set('guns', json_encode($gunsFromDB->all()));
            $gunsFromRedis = json_decode(Redis::get('guns'), true);
        } catch (\Throwable $exception) {
        } finally {
            return view('gunsIndex')->with(
                [
                    'gunsFromDB' => $gunsFromDB ?? [],
                    'gunsFromRedis' => $gunsFromRedis ?? [],
                ]
            );
        }
    }
}
