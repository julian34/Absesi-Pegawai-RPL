<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pegawai;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create test user
        $user = User::create([
            'name' => 'Andi Multimedia',
            'email' => 'Andimultimedia@papua.go.id',
            'password' => Hash::make('papua1324'),
        ]);

        // Create pegawai record linked to user
        Pegawai::create([
            'user_id' => $user->id,
            'nip' => '19900101001',
            'nama' => 'Andi Multimedia',
            'jabatan' => 'Staff IT',
            'unit_kerja' => 'Dinas Kepegawaian',
        ]);
    }
}
