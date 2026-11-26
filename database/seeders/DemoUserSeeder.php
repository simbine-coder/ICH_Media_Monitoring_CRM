<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DemoUserSeeder extends Seeder
{
    /**
     * Contas de demonstração (emails e password fictícios).
     * Só são criadas fora de produção (ver DatabaseSeeder).
     */
    public function run(): void
    {
        $accounts = [
            ['name' => 'Admin Demo', 'email' => 'admin@demo.test', 'user_category' => 'admin'],
            ['name' => 'Utilizador Demo', 'email' => 'user@demo.test', 'user_category' => 'user'],
        ];

        foreach ($accounts as $account) {
            $user = User::firstOrNew(['email' => $account['email']]);

            // forceFill porque user_category não é preenchível em massa (de propósito).
            // A password é cifrada automaticamente pelo cast 'hashed' do modelo.
            $user->forceFill([
                'name' => $account['name'],
                'password' => 'Demo-2026',
                'user_category' => $account['user_category'],
            ])->save();
        }
    }
}
