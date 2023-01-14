<?php
namespace App\Http\Controllers;
use App\Models\People;
use App\Http\Requests\StorePeopleRequest;
use App\Http\Requests\UpdatePeopleRequest;
use Illuminate\Http\JsonResponse;
use App\Http\Resources;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input as Input;

class PeopleController extends Controller
{
    public function index()
    {
        $people = People::all();
        return response()->json([
            "success" => true,
            "message" => "People List",
            "data" => $people
        ]);
    }
    public function show(People $people, int $id)
    {
        return response(people::find($id),200);
    }
    public function store(People $people, $request):JsonResponse
    {
        $people = People::create([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'phone_number' => $request->input('phone_number'),
            'street' => $request->input('street'),
            'city' => $request->input('city'),
            'country' => $request->input('country')]);
        return response()->json([
        "success" => true,
        "message" => "People List",
        "data" => $people
        ]);
    }
    public function update( Request $request,  $id)
    {
        People::where('id', $id)->update($request->all());
        return response()->json([
            "success" => true,
            "message" => "People List"
        ]);
    }
    public function destroy(People $people, int $id)
    {
        return response(people::destroy($id),200);
    }
}
