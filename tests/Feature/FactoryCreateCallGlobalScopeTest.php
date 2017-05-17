<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FactoryCreateCallGlobalScopeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_factory_create_method_doesnt_call_global_scope()
    {
        $this->doesntExpectEvents(\ErrorException::class);
        factory(User::class)->create();
    }
}
