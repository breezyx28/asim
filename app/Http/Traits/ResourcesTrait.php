<?php

namespace App\Http\Traits;

use App\Http\Services\StoreService;
use App\Http\Services\UpdateService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

trait ResourcesTrait
{

    public function StoreAction(Request $request, Model $model)
    {
        try {
            new StoreService($request, $model);
            return back()->with('success', 'تم بنجاح');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return back()->with('error', $th->getMessage());
        }
    }

    public function UpdateAction(Request $request, Model $model)
    {
        try {
            //code...
            new UpdateService($request, $model);
            return back()->with('success', 'تم بنجاح');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function DeleteAction(Model $model)
    {
        try {
            $model->delete();
            return back()->with('success', 'تم الحذف');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }
}
