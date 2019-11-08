<?php

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group = new \App\Group();
        $group->name = 'Lễ tân';
        $group->save();

        $group = new \App\Group();
        $group->name = 'Quản lí hệ thống';
        $group->save();

        $group = new \App\Group();
        $group->name = 'Quản lí nhân sự';
        $group->save();

        $group = new \App\Group();
        $group->name = 'Quản lí phòng';
        $group->save();

        $group = new \App\Group();
        $group->name = 'Quản lí dịch vụ';
        $group->save();


    }
}
