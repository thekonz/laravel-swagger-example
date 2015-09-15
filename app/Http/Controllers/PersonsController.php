<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PersonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @SWG\Get(
     *      path="/persons",
     *      tags={"persons"},
     *      summary="List all persons",
     *      @SWG\Response(
     *          response=200,
     *          description="success",
     *          @SWG\Schema(
     *              type="array",
     *              @SWG\Items(ref="#/definitions/Person")
     *          )
     *      )
     * )
     *
     * @return Response
     */
    public function index()
    {
        return response()->json([
            'persons' => [
                [
                    'id' => 1,
                    'name' => 'Peter',
                    'thoughts' => [
                        'yolo',
                    ],
                ],
            ],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @SWG\Post(
     *      path="/persons",
     *      tags={"persons"},
     *      summary="Create a person",
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Person object",
     *          required=true,
     *          @SWG\Schema(ref="#/definitions/Person"),
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="success",
     *          @SWG\Schema(
     *              type="object",
     *              properties={
     *                  @SWG\Property(property="id",type="number",example=1),
     *                  @SWG\Property(property="message",type="string",example="Person was created.")
     *              }
     *          )
     *      )
     * )
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @SWG\Get(
     *      path="/persons/{id}",
     *      tags={"persons"},
     *      summary="Show a person",
     *      @SWG\Parameter(
     *          name="id",
     *          in="path",
     *          description="Person id",
     *          required=true,
     *          type="number"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="success",
     *          @SWG\Schema(ref="#/definitions/Person")
     *      )
     * )
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return response()->json([
            'id' => $id,
            'name' => 'Peter',
            'thoughts' => [
                'yolo',
            ],
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @SWG\Put(
     *      path="/persons/{id}",
     *      tags={"persons"},
     *      summary="Update a person",
     *      @SWG\Parameter(
     *          name="id",
     *          in="path",
     *          description="Person id",
     *          required=true,
     *          type="number"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Person object",
     *          required=true,
     *          @SWG\Schema(ref="#/definitions/Person"),
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="success",
     *          @SWG\Schema(
     *              type="object",
     *              properties={
     *                  @SWG\Property(property="id",type="number",example=1),
     *                  @SWG\Property(property="message",type="string",example="Person was updated.")
     *              }
     *          )
     *      )
     * )
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @SWG\Delete(
     *      path="/persons/{id}",
     *      tags={"persons"},
     *      summary="Delete a person",
     *      @SWG\Parameter(
     *          name="id",
     *          in="path",
     *          description="Person id",
     *          required=true,
     *          type="number"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="success",
     *          @SWG\Schema(
     *              type="object",
     *              properties={
     *                  @SWG\Property(property="message",type="string",example="Person was deleted.")
     *              }
     *          )
     *      )
     * )
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
