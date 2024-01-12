<?php

namespace App\Repositories;

use App\Interfases\OurTaxiNumReposInterfase;
use App\Models\OurTaxiNum;

class OurTaxiNumRepositor implements  OurTaxiNumReposInterfase
{
     /**
     * Display a listing of the resource.
     */
    public function getOurTaxiNum()
    {
         return OurTaxiNum::all();
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function storeOurTaxiNum($data)
    {
        return OurTaxiNum::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function showOurTaxiNum($ourTaxiNum)
    {
        return $ourTaxiNum;
    }

   
    /**
     * Update the specified resource in storage.
     */
    public function updateOurTaxiNum($data, $ourTaxiNum)
    {
        return $ourTaxiNum->update($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyOurTaxiNum($ourTaxiNum)
    {
        return $ourTaxiNum->delete();
    }
}

