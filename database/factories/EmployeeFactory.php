<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    
    public function definition()
    {
        $sbu = [
            'jfc',
            'jws',
            'jwsl',
            'zfc',
            'jgf',
            'zfc',
            'jb',
            'ffc',
            'rr',
            'mi',
            'gw',
            'ck',
            'bk',
            'pho24',
            'px'
        ];
        return [
            'employee_id' => $this->faker->randomNumber(8, true),
            'first_name' => $this->faker->firstName(),
            'middle_name' => $this->faker->lastName(),
            'last_name' => $this->faker->lastName(),
            'nick_name' => $this->faker->firstName(),
            'sss' => $this->faker->randomNumber(9, true),
            'sbu' => Arr::random($sbu),       
            'contact_person' => $this->faker->name(),
            'contact_person_number' => $this->faker->phoneNumber()  
        ];
    }
}
