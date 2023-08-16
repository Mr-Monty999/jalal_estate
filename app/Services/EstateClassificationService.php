<?php

namespace App\Services;

use App\Models\EstateClassification;

/**
 * Class EstateClassificationService.
 */
class EstateClassificationService
{

    public static function store($request)
    {
        $data = $request->validated();
        $estateClassification = EstateClassification::create($data);

        return $estateClassification;
    }

    public static function update($request, $estateClassification)
    {

        $data = $request->validated();
        $estateClassification->update($data);

        return $estateClassification;
    }
}
