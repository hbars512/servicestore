<?php

namespace App\Http\Controllers;

use App\Purchase;
use App\Rating;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $bd_purchase = Purchase::where([
            ['service_id', $request->service_id],
            ['profile_id', $request->profile_id],
            ['status', False]
        ])->first();

        //  Validacion para no repetir peticiones
        if (!is_null($bd_purchase)) {
            return back();
        }

        $rating = Rating::create([
            'type_rating_id' => 3
        ]);
        $rating->save();

        $datetime = date("c", strtotime($request->due_date));
        $due_date = Carbon::createFromFormat('Y-m-d\TH:i:sP', $datetime, 'America/Lima');
        $due_date->addHours(5);
        $purchase = Purchase::create([
            'service_id' => $request->service_id,
            'profile_id' => $request->profile_id,
            'rating_id' => $rating->id,
            'code' => 'pch' . (string)$request->service_id . '-' . (string)$request->profile_id,
            'due_date' => $due_date,
            'seller_confirmation' => False,
            'customer_confirmation' => False,
            'status' => False,
        ]);
        $purchase->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}
