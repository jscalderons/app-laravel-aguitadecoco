<?php

namespace App\Http\Controllers\api\v1;

use \App\Promotion;
use Illuminate\Http\Request;
use \App\Http\Traits\RestTrait;
use App\Http\Controllers\Controller;

class PromotionController extends Controller
{
    use RestTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Promotion::paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promotion = Promotion::create([
            'description' => $request->description,
            'discount' => $request->discount,
            'started_at' => $request->startedAt,
            'ended_at' => $request->endedAt
        ]);

        if ($products = $request->products) {
            foreach ($products as $product) {
                $promotion->products()->attach($product['id']);
            }
        }

        return $this->createdResponse($promotion);
    }

    public function attach_product(Request $request)
    {

    }

    public function detach_product(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
