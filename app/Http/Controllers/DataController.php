<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'data' => self::getData(),
            'result' => '성공' 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
