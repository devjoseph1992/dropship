<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
            [
                'id' =>1,
                'name' => 'john',
                'type' => 'admin',
                'mobile' => '+639120823679',
                'email' => 'john@admin.com',
                'password' => '$2y$10$8V3yPHjwCtyN1TwDcVu3S.x9VHunMip6Cj7m4fgiNup8SqG7KgyrS',
                'image' => '',
                'status' => 1,
            ],
            [
                'id' =>2,
                'name' => 'joseph',
                'type' => 'subadmin',
                'mobile' => '+639120823679',
                'email' => 'joseph@admin.com',
                'password' => '$2y$10$8V3yPHjwCtyN1TwDcVu3S.x9VHunMip6Cj7m4fgiNup8SqG7KgyrS',
                'image' => '',
                'status' => 1,
            ],
        ];
        DB::table('admins')->insert($adminRecords);
    //     foreach ($adminRecords as $key => $record) {
    //         \App\Admin::create($record);
    //     }
     }
}
