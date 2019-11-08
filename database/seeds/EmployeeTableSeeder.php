<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = new \App\Employee();
        $employee->name = "Adam";
        $employee->dob = '27/10/1998';
        $employee->gender = 'nam';
        $employee->phone = '0358463366';
        $employee->cart = '212121';
        $employee->email = 'adam@gmail.com';
        $employee->address = "Chicago";
        $employee->group_id = 1;
        $employee->save();

        $employee = new \App\Employee();
        $employee->name = "Ashley";
        $employee->dob = '08/10/1982';
        $employee->gender = 'nữ';
        $employee->phone = '0564654515';
        $employee->cart = '884841';
        $employee->email = 'ashley@gmail.com';
        $employee->address = "london";
        $employee->group_id = 2;

        $employee->save();

        $employee = new \App\Employee();
        $employee->name = "Phong";
        $employee->dob = '28/9/1968';
        $employee->gender = 'nam';
        $employee->phone = '0554545454';
        $employee->cart = '8798';
        $employee->email = 'phong@gmail.com';
        $employee->address = "Vietnam";
        $employee->group_id = 3;

        $employee->save();


    }
}
