<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Car;
use App\Http\Controllers\Controller;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cars = Car::all();
        return view('admin.cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.cars.create');
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
        $request->validate($this->validator());
        $form_data = $request->all();

        $new_car = new Car();
        $new_car->brand = $form_data['brand'];
        $new_car->model = $form_data['model'];
        $new_car->engine_displacement = $form_data['engine_displacement'];
        $new_car->doors = $form_data['doors'];
        $new_car->img = $form_data['img'];
        $new_car->save();
        return redirect()->route('admin.cars.show', ['car' => $new_car->id]);
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
        $car = Car::findOrFail($id);

        return view('admin.cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $car = Car::findOrFail($id);

        return view('admin.cars.edit', compact('car'));
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
        $request->validate($this->validator());
        $form_data = $request->all();

        $car_to_update = Car::findOrFail($id);
        $car_to_update->update($form_data);

        return redirect()->route('admin.cars.show', ['car' => $car_to_update->id]);
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
        $car_to_destroy = Car::findOrFail($id);
        $car_to_destroy->delete();
        return redirect()->route('admin.cars.index');
    }
    protected function validator(){
        return [
            'brand' => 'required|max:30',
            'model' => 'required|max:30',
            'engine_displacement' => 'required|max:30',
            'doors' => 'required',
            'img' =>'required'
        ];
    }
}
