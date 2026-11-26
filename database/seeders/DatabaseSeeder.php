<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Reports de demonstração: seguros em qualquer ambiente
        $this->call(ReportSeeder::class);

        // Contas de demonstração: nunca em produção
        if (! app()->environment('production')) {
            $this->call(DemoUserSeeder::class);
        }
    }
}
