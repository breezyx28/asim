<?php

namespace App\Http\Services;

use Error;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UpdateService
{
    public function __construct(Request $request, Model $model)
    {
        $validate =  $request->validated();

        $filter = (object) array_filter($validate, function ($item) {
            return $item != null || $item != '';
        });

        foreach ($filter as $key => $value) {
            $model->$key = $value;
            if (!empty($request->allFiles())) {
                foreach ($request->allFiles() as $index => $file) {
                    $model->$index = $request->file($index)->storeAs('public/' . ucfirst($model->getTable()), $file->getClientOriginalName());
                }
            }
        }

        try {
            $model->save();
            return true;
        } catch (\Throwable $th) {
            Log::alert('error', [
                'update error' => $th->getMessage()
            ]);
            return new Error($th->getMessage());
        }
    }
}
