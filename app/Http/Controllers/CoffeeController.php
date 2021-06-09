<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormCoffeeRequest;
use App\Models\Coffee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CoffeeController extends Controller
{
    public function index()
    {
        return view('backend.coffee.index', ['coffees' => Coffee::all()]);
    }

    public function create()
    {
        return view('backend.coffee.create');
    }

    public function store(FormCoffeeRequest $request)
    {
        $coffee = new Coffee();
        $coffee->fill($request->all());

        $coffee->image = "img";

        $coffee->save();

        return redirect()->route('backend.coffee.index')->with('success', 'Thêm thành công!');
    }

    public function edit($id)
    {
        return view('', ['ackend.coffee.edit' => Coffee::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $coffee = Coffee::findOrFail($id);

        $coffee->save();

        return redirect()->route('backend.coffee.create', $id)->with('success', 'Cập nhật thành công!');
    }


    public function delete($id)
    {
        $coffee = Coffee::findOrFail($id);
        $coffee->delete();
        return redirect()->back()->with('success', 'Xoá  thành công!');
    }



    public function checkValidation(FormCoffeeRequest $request)
    {
        $success = "Dữ liệu được xác thực thành công";
        return view('', compact('success'));
    }

}
