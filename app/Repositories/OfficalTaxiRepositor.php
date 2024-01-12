<?php
namespace App\Repositories;

use App\Interfases\OfficalTaxiInterFase;
use App\Models\OfficalTaxi;

class OfficalTaxiRepositor implements OfficalTaxiInterFase 
{
      
    public function AllOfficalTaxi(){
           return OfficalTaxi::all();
    }
    


    /**
     * Store a newly created resource in storage.
     */
    public function storeOfficalTaxi($data)
    {
        return OfficalTaxi::create($data);
    }


    /**
     * Display the specified resource.
     */
    public function showOfficalTaxi($id)
    {
         
    }
   


    /**
     * Update the specified resource in storage.
     */
    public function updateOfficalTaxi($data, $id)
    {
       return $id->update($data);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroyOfficalTaxi($id)
    {
         return $id->delete();
    }
    
}
