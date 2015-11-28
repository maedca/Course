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
            'user_id' => 1,


        ];
    }

    public function run()
    {
        $this->createMultiple(50);
    }
}