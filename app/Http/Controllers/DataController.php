<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataController extends Controller
{
    private static function getData() {
        $dummyData = [
            ['id'=>1, 'name'=>'yein', 'age'=>'29'],
            ['id'=>2, 'name'=>'jane', 'age'=>'24'],
            ['id'=>3, 'name'=>'tomas', 'age'=>'27'],
            ['id'=>4, 'name'=>'choi', 'age'=>'32'],
        ];
        return $dummyData;
    }

    public function index()
    {
        return view('data.index', [
            // 'data' => self::getData(),
            'data' => Data::all(),
            'result' => '성공' 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('data.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Data 모델을 이용해서, db 연결하고 그 결과를 객체로 저장
        $data = new Data();

        // form으로 전송받은 데이터 저장
        $data->name = $request->input('name');
        $data->age = $request->input('age');

        // DB에 저장
        $data->save();

        return redirect()->route('data.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = self::getData();

        // 파라미터로 받은 id를 배열로 만들고, 
        // 만든 배열 중에 id가 몇번째에 있는지 찾아 인덱스 값을 명확하게 찾는다.
        $index = array_search($id, array_column($data, 'id'));

        return view('data.show', [
            'data' => $data[$index]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
