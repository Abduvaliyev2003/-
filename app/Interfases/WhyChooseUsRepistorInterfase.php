<?php


namespace App\Interfases;


interface WhyChooseUsRepistorInterfase 
{
            /**
     * Display a listing of the resource.
     */
    public function getDataWhy();
   

    /**
     * Store a newly created resource in storage.
     */
    public function storeWhyChoose($data, $path);
    

    /**
     * Display the specified resource.
     */
    public function showWhyChoose($whyChooseUs);
   


    /**
     * Update the specified resource in storage.
     */
    public function updateWhyChoose($data, $whyChooseUs, $path);
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroyWhyChoose($whyChooseUs);
    
}