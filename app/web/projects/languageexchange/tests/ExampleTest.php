<?php
use App\User;
use App\Requirement;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    
    public function testviewrequirements()
    {
        $this->visit('/requirements');
    }
    public function test_i_can_create_an_account()
    {
        $this->visit('/register')
            ->type('Taylor Otwell', 'name')
            ->type('taylor@laravel.com', 'email')
            ->type('secret', 'password')
            ->type('secret', 'password_confirmation')
            ->press('Register')
            ->seePageIs('/requirements')
            ->seeInDatabase('users', ['email' => 'taylor@laravel.com']);
    }
}
