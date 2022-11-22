<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type_products;
use App\Http\Resources\TypeResource as TypeResource;

class TypeAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type_products::all();
        return response()->json($types);
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
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required|string',
        ]);
        if($validator->fails()){
            $arr = [
            'success' => false,
            'message' => 'Lỗi kiểm tra dữ liệu',
            'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }
        $product = Products::create($input);
        $arr = ['status' => true,
            'message'=>"Danh mục đã lưu thành công",
            'data'=> new TypeResource($product)
        ];
        return response()->json($arr, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $types = Type_products::where('id',$id)->first();
        return response()->json($types);
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type_products $type)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required|string',
            'image' => 'required|string',
            'unit_price' => 'required|string',
            'promotion_price' => 'nullable',
            'description' => 'nullable',
            'type_id' => 'required|numeric',
        ]);
        if($validator->fails()){
            $arr = [
            'success' => false,
            'message' => 'Lỗi kiểm tra dữ liệu',
            'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }
        $type->name = $input['name'];
        $type->save();
        $arr = [
            'status' => true,
            'message' => 'Danh mục cập nhật thành công',
            'data' => new TypeResource($type)
        ];
        return response()->json($arr, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type_products $type)
    {
        $type->delete();
        $arr = [
            'status' => true,
            'message' =>'Danh mục đã được xóa',
            'data' => [],
        ];
        return response()->json($arr, 200);
    }
}
