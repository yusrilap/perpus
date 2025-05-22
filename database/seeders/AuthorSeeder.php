<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        collect(Author::factory()->count(10)->make())->each(fn($a) => $a->save());
    }
}