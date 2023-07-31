<?php

namespace App\Http\Controllers;

use App\Models\ComplementaryMeal;
use Illuminate\Http\Request;

class ComplementaryMealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $cms = ComplementaryMeal::where('mess_id',\Auth::id());

        if(isset($request->from) && isset($request->to))
        {
                $cms = $cms->whereDate('complementary_meal.created_at', '>=', $request->from);
                $cms = $cms->whereDate('complementary_meal.created_at', '<=', $request->to);
        }
       $cms   = $cms->get();
       $fromdate   = $request->from;
       $todate     = $request->to;
        return view('Complementary_meal.index', compact('cms','fromdate','todate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Complementary_meal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return $request;
        $CM                     = new ComplementaryMeal;
        $CM->event_name         = $request->event_name;
        $CM->date               = $request->date;
        $CM->meal_description   = $request->meal_description;
        $CM->mess_id            = \Auth::id();
        $CM->save();

        toastr()
        ->positionClass('toast-top-center')
        ->addSuccess('Complementary Meal Save Done Successfully');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ComplementaryMeal  $complementaryMeal
     * @return \Illuminate\Http\Response
     */
    public function show(ComplementaryMeal $complementaryMeal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComplementaryMeal  $complementaryMeal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       $cms = ComplementaryMeal::findorfail($id);
       return view('Complementary_meal.edit',compact('cms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ComplementaryMeal  $complementaryMeal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $CM                     = ComplementaryMeal::findorfail($id);
        $CM->event_name         = $request->event_name;
        $CM->date               = $request->date;
        $CM->meal_description   = $request->meal_description;
        $CM->mess_id            = \Auth::id();
        $CM->save();

        toastr()
        ->positionClass('toast-top-center')
        ->addSuccess('Complementary Meal Updated Done Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComplementaryMeal  $complementaryMeal
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComplementaryMeal $complementaryMeal)
    {
        //
    }
}
