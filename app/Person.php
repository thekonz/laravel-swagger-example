<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Person
 *
 * @SWG\Definition(
 *      @SWG\Xml(name="Person"),
 *      required={"testnumber"},
 *      @SWG\Property(property="id",type="number"),
 *      @SWG\Property(property="name",type="string"),
 *      @SWG\Property(
 *          property="thoughts",
 *          type="array",
 *          @SWG\Items(type="string")
 *      )
 * )
 *
 * @package App
 */
class Person extends Model
{
}
