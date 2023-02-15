<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Attribute;
use App\Models\Card;
use App\Models\CardPhase;
use App\Models\CardType;
use App\Models\Character;
use Database\Factories\CardFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        Character::factory()
            ->count(8)
            ->has(
                Card::factory()
                    ->count(10)
                    ->hasAttached(
                        CardType::factory()
                    )
                    ->hasAttached(
                        CardPhase::factory()
                    )
            )
            ->hasAttached(
                Attribute::factory()
                    ->count(3)
            )->create();
    }
}
