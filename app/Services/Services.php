<?php
namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Request;

class Services {

    protected $data = [];
    protected $model;
    protected $request;

    public function instanceModel() {
        return $this->model;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->model->all();
        return response()->json($data);
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
    public function store($request)
    {
        
        $validation = $this->request->validation($request);
        if($validation->fails()) {
           return response() ->json($validation->errors(), 422);
        }

        $data = $this->model->create($request->all());
        return response()->json([
            'message' => 'Registro Criado com Sucesso.',
            'data' => $data,
        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->model->find($id);
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->model->find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($request, $id)
    {
        $validation = $this->request->validation($request);
        if($validation->fails()) {
           return response() ->json($validation->errors(), 422);
        }

        $result = $this->model->find($id);
        $data = $result->update($request->all());
        return response()->json([
            'message' => 'Registro Atualizado com Sucesso.',
            'data' => $data,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->model->find($id);
        try {
            $data->delete();
            return response()->json(['message' => 'Registro Removido com Sucesso.']);
        } catch(Exception $e) {
            // Isso pode ser melhorado com uma ótima implementação.
            return response()->json(['message' => $e->getMessage()], 500);
        }
        
    }
}