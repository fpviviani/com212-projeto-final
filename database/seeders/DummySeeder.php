<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTimestamp = \DB::raw('CURRENT_TIMESTAMP');
        $class = [
            'year' => 'Primeiro ano',
            'designation' => 'A',
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ];
        \DB::table('classes')->insert($class);

        $classroom = [
            'id' => '123',
            'availability' => true,
            'capacity' => 22,
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ];
        \DB::table('classrooms')->insert($classroom);

        $equipment = [
            'name' => 'Projetor',
            'description' => 'Projeta imagens de um computador através de um cabo VGA.',
            'condition' => 'Em funcionamento',
            'buy_date' => '2021-07-20',
            'price' => 500.00,
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ];
        \DB::table('equipments')->insert($equipment);

        $teacher = [
            [
                'name' => 'Adler',
                'birthdate' => '1980-01-01',
                'phone_number' => '(35) 11111-1111',
                'document' => '123.456.765-32',
                'sex' => 'Masculino',
                'address' => 'Rua do Adler',
                'address_number' => '27',
                'neighborhood' => 'Bairro do Adler',
                'zipcode' => '37503-144',
                'city' => 'Itajubá',
                'state' => 'MG',
                'subjects' => 'Engenharia de Software, Gerência de Projetos.',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ]
        ];
        \DB::table('teachers')->insert($teacher);

        $student = [
            [
                'name' => 'José Luiz',
                'registration_number' => '2017006788',
                'class_id' => 1,
                'birthdate' => '1999-01-01',
                'phone_number' => '(35) 11111-1111',
                'document' => '123.456.765-32',
                'sex' => 'Masculino',
                'address' => 'Rua do Juninho',
                'address_number' => '27',
                'neighborhood' => 'Bairro do Juninho',
                'zipcode' => '37503-144',
                'city' => 'Itajubá',
                'state' => 'MG',
                'responsible_name' => 'Pai do Juninho',
                'responsible_phone_number' => '(35) 3234-2334',
                'responsible_document' => '292.351.414-22',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ]
        ];
        \DB::table('students')->insert($student);

        $employee = [
            [
                'name' => 'Fábio',
                'phone_numer' => '(35) 11111-1111',
                'birthdate' => '1999-01-01',
                'document' => '123.456.765-32',
                'sex' => 'Masculino',
                'address' => 'Rua do Adler',
                'address_number' => '27',
                'neighborhood' => 'Bairro do Adler',
                'zipcode' => '37503-144',
                'city' => 'Itajubá',
                'state' => 'MG',
                'employee_type' => 'Diretoria',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ]
        ];
        \DB::table('employees')->insert($employee);
    }
}
