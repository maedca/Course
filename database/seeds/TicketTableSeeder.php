<?php

/**
 * Created by PhpStorm.
 * User: maedc
 * Date: 27/11/2015
 * Time: 10:29 PM
 *
 */
use TeachMe\Entities\Ticket;
class TicketTableSeeder extends BaseSeeder
{

    public function getModel()
    {
        // TODO: Implement getModel() method.
        return new Ticket();
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return [
            'title' => $faker->sentence(),
            'status' => $faker->randomElement(['open', 'open', 'closed']),
           // 'user_id' => rand(1,51),//manera mas facil
            //'user_id' => $this->createFrom('UserTableSeeder')->id
            'user_id'=>$this->getRandom('User')->id//modelo User


        ];
    }

//    public function run()
//    {
//        $this->createMultiple(50);
//    }
}