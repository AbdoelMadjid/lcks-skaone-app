<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            'master',
            'admin',
            'kepsek',
            'guru',
            'tatausaha',
            'wakasek',
            'kaprog',
            'gmapel',
            'walas',
            'siswa',
            'tamu',
            'pembpkl',
            'adminpkl',
            'pesertapkl',
            'kaprodiak',
            'kaprodibd',
            'kaprodimp',
            'kaprodirpl',
            'kaproditkj',
            'bpbk',
            'alumni',
            'panitiapkl',
            'kaprakerinak',
            'kaprakerinbd',
            'kaprakerinmp',
            'kaprakerinrpl',
            'kaprakerintkj',
            'guruprakerin',
            'siswaprakerin',
            'guruwali',
        ];
        $default = [
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ];

        foreach ($users as $value) {
            User::create([...$default, ...[
                'name' => $value,
                'email' => $value . '@lcks.com',
            ]])->assignRole($value);
        }
    }
}
