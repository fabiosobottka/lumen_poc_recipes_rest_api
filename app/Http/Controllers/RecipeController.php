<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request)
    {
        //validate incoming request
        $this->validate($request, [
            'name' => 'required|string',
            'ingredients' => 'required',
            'steps' => 'required',
        ]);

        $recipe = new Recipe();
        $recipe->name = $request->name;
        $recipe->ingredients = $request->ingredients;
        $recipe->steps = $request->steps;

        $recipe->save();
        return response()->json($recipe, 201);
    }

    public function update(Request $request, $id)
    {
        $recipe = Recipe::find($id);

        //validate incoming request
        $this->validate($request, [
            'name' => 'required|string',
            'ingredients' => 'required',
            'steps' => 'required',
        ]);

        $recipe->name = $request->name;
        $recipe->ingredients = $request->ingredients;
        $recipe->steps = $request->steps;

        $recipe->save();

        return response()->json($recipe, 200);
    }

    public function getRecipe(Request $request, $id)
    {
        try {
            $recipe = Recipe::findOrFail($id);
            return response()->json(['recipe' => $recipe], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'recipe not found!'], 404);
        }
    }

    public function delete($id)
    {

        try {
            $recipe = Recipe::findOrFail($id);
            $recipe->delete();
            return response()->json(["msg" => "Excluído com sucesso !"], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'recipe not found!'], 404);
        }
    }

    public function getAll(Request $request)
    {
        return response()->json(Recipe::all(), 200);
    }
}
