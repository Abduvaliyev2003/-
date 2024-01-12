<?php



namespace App\Interfases;


interface OurTaxiNumReposInterfase {
    public function getOurTaxiNum();
    
    /**
     * Store a newly created resource in storage.
     */
    public function storeOurTaxiNum($data);
 
    /**
     * Display the specified resource.
     */
    public function showOurTaxiNum($ourTaxiNum);
    

   
    /**
     * Update the specified resource in storage.
     */
    public function updateOurTaxiNum($data, $ourTaxiNum);
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroyOurTaxiNum($ourTaxiNum);
    
}