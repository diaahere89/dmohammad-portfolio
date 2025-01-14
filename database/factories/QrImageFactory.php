<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QrImage>
 */
class QrImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'desired_url' => $this->faker->url,
            'redirect_url' => $this->faker->url,
            'is_active' => $this->faker->boolean,
            'status' => $this->faker->randomElement(['active', 'inactive', 'pending']),
            'qr_code' => $this->faker->uuid,
            'user_id' => \App\Models\User::factory(),
            'created_by' => \App\Models\User::factory(),
            'expires_at' => $this->faker->dateTimeBetween('now', '+1 month'),
            'scan_count' => $this->faker->numberBetween(0, 1000),
            'last_scanned_at' => $this->faker->dateTimeThisYear,
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'type' => $this->faker->randomElement(['url', 'wifi', 'other']), // Type of QR code (e.g., URL, Wi-Fi)
            'slug' => $this->faker->slug,
            'metadata' => $this->faker->text,
            'foreground_color' => $this->faker->hexColor,
            'background_color' => $this->faker->hexColor,
            'tags' => $this->faker->words(5, false),
        ];
    }
}
