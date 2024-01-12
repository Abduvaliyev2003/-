<?php

namespace App\Http\Controllers;

use App\Models\OurTaxiNum;
use App\Http\Requests\StoreOurTaxiNumRequest;
use App\Http\Requests\UpdateOurTaxiNumRequest;
use App\Interfases\OurTaxiNumReposInterfase;
use Illuminate\Http\JsonResponse;

class OurTaxiNumController extends Controller
{
    protected OurTaxiNumReposInterfase $ourTaxiNumReposInterfase;
    public function __construct(OurTaxiNumReposInterfase $ourTaxiNumReposInterfase)
    {
        $this->ourTaxiNumReposInterfase = $ourTaxiNumReposInterfase;
    }

    /**
     * Display a listing of the resource.
     */
    public function getOurTaxiNum()
    {
        $data = $this->ourTaxiNumReposInterfase->getOurTaxiNum();
        
        return response()->json([
             'status' => 200,
             'data' => $data
        ]);
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function storeOurTaxiNum(StoreOurTaxiNumRequest $request)
    {
        $request->validated();
        $data = $this->ourTaxiNumReposInterfase->storeOurTaxiNum($request->all());
        return response()->json([
            'status' => 200,
            'data' => $data
       ]);
    }

    /**
     * Display the specified resource.
     */
    public function showOurTaxiNum(OurTaxiNum $ourTaxiNum)
    {
        $data = $this->ourTaxiNumReposInterfase->showOurTaxiNum($ourTaxiNum);
        return response()->json([
            'status' => 200,
            'data' => $data
       ]);
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function updateOurTaxiNum(UpdateOurTaxiNumRequest $request, OurTaxiNum $ourTaxiNum)
    {
        $data = $this->ourTaxiNumReposInterfase->updateOurTaxiNum($request->all(), $ourTaxiNum);
        return response()->json([
            'status' => 200,
            'data' => $data
       ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyOurTaxiNum(OurTaxiNum $ourTaxiNum)
    {
        $data = $this->ourTaxiNumReposInterfase->destroyOurTaxiNum( $ourTaxiNum);
        return response()->json([
            'status' => 200,
            'data' => $data
       ]);
    }
}
