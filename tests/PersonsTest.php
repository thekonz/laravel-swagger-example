<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PersonsTest extends TestCase
{
    public function testGetPersons()
    {
        $this->visit('/persons')
            ->seeJsonHasKey('persons');
    }

    public function testGetPerson()
    {
        $id = '123';
        $this->visit('/persons/' . $id)
            ->seeJsonHasKey('id')
            ->seeJson([
                'id' => $id,
            ]);
    }
}
