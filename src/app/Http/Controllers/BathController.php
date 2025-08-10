<?php

namespace App\Http\Controllers;

use App\Models\Bathroom;
use Illuminate\Http\Request;

class BathroomController extends Controller {
    public function index() {
        return response()->json(Bathroom::all());
    }

    public function store(Request $request) {
        $bathroom = Bathroom::create($request->all());
        return response()->json($bathroom, 201);
    }

    public function show($id) {
        return response()->json(Bathroom::findOrFail($id));
    }

    public function update(Request $request, $id) {
        $bathroom = Bathroom::findOrFail($id);
        $bathroom->update($request->all());
        return response()->json($bathroom);
    }

    public function destroy($id){
        Bathroom::destroy($id);
        return response()->json(null, 204);
    }
}
