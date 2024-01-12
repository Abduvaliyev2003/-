<?php


namespace App\Repositories;

use App\Interfases\WhyChooseUsRepistorInterfase;
use App\Models\WhyChooseUs;

class WhyChooseUsRepistor implements WhyChooseUsRepistorInterfase
{
         /**
     * Display a listing of the resource.
     */
    public function getDataWhy()
    {
         return WhyChooseUs::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeWhyChoose($data, $path)
    {
        return WhyChooseUs::create([
            'icon'=> $path,
            'title' => $data['title'],
            'text' => $data['text']
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showWhyChoose($whyChooseUs)
    {
        return $whyChooseUs;
    }


    /**
     * Update the specified resource in storage.
     */
    public function updateWhyChoose($data, $whyChooseUs, $path)
    {
        return $whyChooseUs->update([
            'icon'=> $path ?? $whyChooseUs->icon,
            'title' => $data['title'] ?? $whyChooseUs->title,
            'text' => $data['text'] ?? $whyChooseUs->text,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyWhyChoose( $whyChooseUs)
    {
        return $whyChooseUs->delete();
    }
}  

