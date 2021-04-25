<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\ImageAsset;

class ImageAssetTest extends TestCase
{
    use RefreshDatabase;

    /** @test **/
    public function can_view_image_asset() {
        $imageAsset = ImageAsset::create([
            'file_name' => 'foo.jpg'
        ]);

        $response = $this->get('/image-asset/' . $imageAsset->id);

        $response->assertStatus(200);
        $response->assertSee('foo.jpg');
    }
}
