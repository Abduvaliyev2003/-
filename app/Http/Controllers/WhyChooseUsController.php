<?php

namespace App\Http\Controllers;

use App\Models\WhyChooseUs;
use App\Http\Requests\StoreWhyChooseUsRequest;
use App\Http\Requests\UpdateWhyChooseUsRequest;
use App\Interfases\WhyChooseUsRepistorInterfase;
use Illuminate\Support\Facades\Storage;

class WhyChooseUsController extends Controller
{

    protected WhyChooseUsRepistorInterfase $whyChooseUsRepistorInterfase;
   public function __construct(WhyChooseUsRepistorInterfase $whyChooseUsRepistorInterfase)
   {
        $this->whyChooseUsRepistorInterfase = $whyChooseUsRepistorInterfase;
   }




    /**
     * Display a listing of the resource.
     */
    public function getDataWhy()
    {
         $data = $this->whyChooseUsRepistorInterfase->getDataWhy();

         return response()->json([
            'status' => 200,
            'data' => $data
         ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeWhyChoose(StoreWhyChooseUsRequest $request)
    {
        $request->validated();
        if ($request->hasFile('icon')){
            $path = $request->file('icon')->store('whyChoose', 'public');
        }

        $data = $this->whyChooseUsRepistorInterfase->storeWhyChoose($request->all(), $path);

        return response()->json([
              'status' => 200,
              'message' => 'Successfully created',
              'data' => $data
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showWhyChoose(WhyChooseUs $whyChooseUs)
    {
        $data = $this->whyChooseUsRepistorInterfase->showWhyChoose($whyChooseUs);
        return response()->json([
              'status' => 200,
              'data' => $data
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function updateWhyChoose(UpdateWhyChooseUsRequest $request, WhyChooseUs $whyChooseUs)
    {   
         $request->validated();

        if ($request->hasFile('icon')){
            Storage::disk('public')->delete($whyChooseUs->icon);
            $path = $request->file('icon')->store('whyChoose', 'public');
        }

        $data =  $this->whyChooseUsRepistorInterfase->updateWhyChoose($request->all, $whyChooseUs, $path);

        return response()->json([
            'status'=> 200,
            'message' => 'Successfully updated',
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyWhyChoose(WhyChooseUs $whyChooseUs)
    {
        Storage::disk('public')->delete($whyChooseUs->icon);
         $data = $this->whyChooseUsRepistorInterfase->destroyWhyChoose($whyChooseUs);
        return response()->json([
            'status'=> 200,
            'message' => 'Successfully deleted',
            'data' => $data
        ]);
    }
}
