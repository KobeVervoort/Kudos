<?php
namespace Tests\Browser;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
class ComplimentsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $random = rand();
            $browser->loginAs(\App\User::find(1))
                ->visit('/users/1')
                ->type('compliment', "This is a Dusky compliment with random data: $random")
                ->press('Give compliment')
                ->assertPathIs('/users/1')
                ->assertSee("This is a Dusky compliment with random data: $random")
                ->visit('/compliments/received')
                ->assertSee("This is a Dusky compliment with random data: $random");
        });
    }
}