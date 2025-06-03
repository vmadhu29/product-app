<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Product;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function madhu_can_list_products()
    {
        $user = User::factory()->create();
        Product::factory()->count(3)->create();
        $response = $this->actingAs($user)->get('/products');
        $response->assertStatus(200);
        $response->assertSee('Products');
    }

    /** @test */
    public function madhu_can_create_a_product()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('/products', [
            'name' => 'Test Product',
            'description' => 'A test product',
            'price' => 99.99,
            'stock_quantity' => 10,
        ]);
        $response->assertRedirect('/products');
        $this->assertDatabaseHas('products', ['name' => 'Test Product']);
    }

    /** @test */
    public function madhu_can_update_a_product()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();
        $response = $this->actingAs($user)->put('/products/' . $product->id, [
            'name' => 'Updated Product',
            'description' => 'Updated',
            'price' => 199.99,
            'stock_quantity' => 20,
        ]);
        $response->assertRedirect('/products');
        $this->assertDatabaseHas('products', ['name' => 'Updated Product']);
    }

    /** @test */
    public function madhu_can_delete_a_product()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();
        $response = $this->actingAs($user)->delete('/products/' . $product->id);
        $response->assertRedirect('/products');
        $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }
} 
