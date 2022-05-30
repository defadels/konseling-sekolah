<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class, 150)->create();

        DB::table('users')->insert([
            [
                'nama' => 'Master 1',
                'email' => 'masterone@gmail.com',
                'password' => Hash::make('master123'),
                'tempat_lahir' => 'Medan',
                'tanggal_lahir' => '2002-02-26',
                'nip' => '1654798654',
                'jenis' => 'master',
                'nomor_hp' => '085344659982',
                'alamat' => 'Jalan Karya',
                'agama' => 'islam',
                'status' => 'aktif',

            ],
            [
                'nama' => 'Master 2',
                'email' => 'mastertwo@gmail.com',
                'password' => Hash::make('master123'),
                'tempat_lahir' => 'Medan',
                'tanggal_lahir' => '2001-05-13',
                'nip' => '1654798644',
                'jenis' => 'master',
                'nomor_hp' => '085287889561',
                'alamat' => 'Jalan Kapten Muslim',
                'agama' => 'kristen',
                'status' => 'aktif',

            ],
        ]);
    }
}
