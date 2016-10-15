<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */

    public function testCantViewWishListBeforeLogin()
    {
        $this->visit('/')
             ->click('Wish List')
             ->seePageIs("/login");
    }

    public function testMoviesActuallyStoreInDatabase()
    {
        $this->seeInDatabase('movies', ['title' => 'The Hollow']);
    }

    public function testUserHasOwnSession()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->withSession(['foo' => 'bar'])
            ->visit('/');
    }

    /*
    public function testEachUserHasSufficientInformation()
    {
        // Assert that each user in the list has at least an id, name and email attribute.
        $this->get('/users')
            ->seeJsonStructure([
                '*' => [
                    'id', 'name', 'email'
                ]
            ]);
    }
    */


}
