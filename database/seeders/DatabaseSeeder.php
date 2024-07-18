<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\Event;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Event::factory(6)->create([
        //     'created_at' => Carbon::now()->startOfYear(),
        // ])->each(function($post){
        //     $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 365));
        //     $post->save();
        // });

        // Event::factory(6)->create([
        //     'created_at' => Carbon::now()->subYear()->startOfYear(),
        // ])->each(function($post){
        //     $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 365));
        //     $post->save();
        // });
    }
}
