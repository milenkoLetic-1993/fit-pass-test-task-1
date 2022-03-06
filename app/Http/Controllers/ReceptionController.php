<?php

namespace App\Http\Controllers;

use App\Actions\ScanCardAction;
use App\Http\Requests\ScanCardRequest;
use Exception;
use Illuminate\Http\JsonResponse;

class ReceptionController extends Controller
{
    /**
     * @throws Exception
     */
    public function scanCard(ScanCardRequest $request, ScanCardAction $action): JsonResponse
    {
        $userEntry = $action($request);

        return response()->json([
            'status' => 'OK',
            'object_name' => $userEntry->sportFacility->name,
            'first_name' => $userEntry->user->first_name,
            'last_name' => $userEntry->user->last_name
        ]);
    }
}
