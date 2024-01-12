<?php
  
 namespace App\Interfases;


interface OfficalTaxiInterFase {


    public function AllOfficalTaxi();
    


    /**
     * Store a newly created resource in storage.
     */
    public function storeOfficalTaxi($data);
    

    /**
     * Display the specified resource.
     */
    public function showOfficalTaxi($id);
   


    /**
     * Update the specified resource in storage.
     */
    public function updateOfficalTaxi($data, $id);
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroyOfficalTaxi($id);
    
}


