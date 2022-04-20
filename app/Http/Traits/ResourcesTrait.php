<?php

namespace App\Http\Traits;

use App\Http\Services\StoreService;
use App\Http\Services\UpdateService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

trait ResourcesTrait
{

    public function StoreAction(Request $request, Model $model)
    {
        try {
            new StoreService($request, $model);
            return back()->with('success', 'تم بنجاح');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function UpdateAction(Request $request, Model $model)
    {
        try {
            new UpdateService($request, $model);
            return back()->with('success', 'تم بنجاح');
        } catch (\Throwable $th) {
            Log::alert('error', [
                'update error' => $th->getMessage()
            ]);
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
