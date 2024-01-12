<?php

namespace App\Http\Controllers;

use App\Models\OfficalTaxi;
use App\Http\Requests\StoreOfficalTaxiRequest;
use App\Http\Requests\UpdateOfficalTaxiRequest;
use App\Interfases\OfficalTaxiInterFase;

class OfficalTaxiController extends Controller
{
    protected OfficalTaxiInterFase $officalTaxiRepository;
    public function __construct(OfficalTaxiInterFase $officalTaxiRepository)
    {
        $this->officalTaxiRepository = $officalTaxiRepository;
    }


    /**
     * Display a listing of the resource.
     */
    public function AllOfficalTaxi()
    {
        $data = $this->officalTaxiRepository->AllOfficalTaxi();

        return  response()->json([
            'status' => 200,
             'data' => $data
        ]);

    }


    /**
     * Store a newly created resource in storage.
     */
    public function storeOfficalTaxi(StoreOfficalTaxiRequest $request)
    {
        $request->validated();

        $data = $this->officalTaxiRepository->storeOfficalTaxi($request->all());

        return  response()->json([
            'status' => 200,
            'message' => 'success created',
            'data' => $data
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function showOfficalTaxi(OfficalTaxi $officalTaxi)
    {  

        return  response()->json([
            'status' => 200,
            'message' => 'success created',
            'data' => $officalTaxi,
        ]);

    }


    /**
     * Update the specified resource in storage.
     */
    public function updateOfficalTaxi(UpdateOfficalTaxiRequest $request, OfficalTaxi $officalTaxi)
    {
        $request->validated();

        $data =  $this->officalTaxiRepository->updateOfficalTaxi($request->all(), $officalTaxi);

        return  response()->json([
            'status' => 200,
            'message' => 'success created',
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyOfficalTaxi(OfficalTaxi $officalTaxi)
    {
        $data = $this->officalTaxiRepository->destroyOfficalTaxi($officalTaxi);

        return response()->json([
            'status' => 200,
            'message' => 'Successfully deleted',
            'data' => $data
        ]);

    }
}
