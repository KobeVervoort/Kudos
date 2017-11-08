<?php
namespace Tests\Browser;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
class HomeTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $user = \App\User::find(1);
            $browser->loginAs(\App\User::find(1))
                ->visit('/home')
                ->assertSee('Welcome ' . $user->name)
                ->assertSee('Compliments received');
        });
    }
}