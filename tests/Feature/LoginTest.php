<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoginTest extends TestCase
{
    public function test_login_page_posts_to_the_login_endpoint(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('action="'.route('login.authenticate').'"', false);
    }

    public function test_login_submission_redirects_to_dashboard(): void
    {
        $response = $this->post(route('login.authenticate'), [
            'username' => 'admin',
            'password' => 'password',
        ]);

        $response->assertRedirect(route('dashboard'));
        $this->get(route('dashboard'))->assertOk();
    }
}
