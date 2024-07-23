<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $animalsData = [
            ['id' => 1, 'name' => 'Charlie', 'species' => 'Dog', 'age' => 3],
            ['id' => 2, 'name' => 'Bella', 'species' => 'Cat', 'age' => 2],
            ['id' => 3, 'name' => 'Max', 'species' => 'Bird', 'age' => 1],
            ['id' => 4, 'name' => 'Luna', 'species' => 'Rabbit', 'age' => 4],
            ['id' => 5, 'name' => 'Rocky', 'species' => 'Dog', 'age' => 5],
            ['id' => 6, 'name' => 'Milo', 'species' => 'Cat', 'age' => 3],
            ['id' => 7, 'name' => 'Ruby', 'species' => 'Bird', 'age' => 2],
            ['id' => 8, 'name' => 'Daisy', 'species' => 'Rabbit', 'age' => 1],
            ['id' => 9, 'name' => 'Buddy', 'species' => 'Dog', 'age' => 4],
            ['id' => 10, 'name' => 'Coco', 'species' => 'Cat', 'age' => 5],
            ['id' => 11, 'name' => 'Jake', 'species' => 'Dog', 'age' => 6],
            ['id' => 12, 'name' => 'Lily', 'species' => 'Cat', 'age' => 1],
            ['id' => 13, 'name' => 'Jack', 'species' => 'Bird', 'age' => 3],
            ['id' => 14, 'name' => 'Nala', 'species' => 'Rabbit', 'age' => 2],
            ['id' => 15, 'name' => 'Toby', 'species' => 'Dog', 'age' => 4],
            ['id' => 16, 'name' => 'Zoe', 'species' => 'Cat', 'age' => 3],
            ['id' => 17, 'name' => 'Finn', 'species' => 'Bird', 'age' => 5],
            ['id' => 18, 'name' => 'Chloe', 'species' => 'Rabbit', 'age' => 2],
            ['id' => 19, 'name' => 'Oscar', 'species' => 'Dog', 'age' => 3],
            ['id' => 20, 'name' => 'Nina', 'species' => 'Cat', 'age' => 4],
            ['id' => 21, 'name' => 'Blue', 'species' => 'Bird', 'age' => 1],
            ['id' => 22, 'name' => 'Poppy', 'species' => 'Rabbit', 'age' => 3],
            ['id' => 23, 'name' => 'Buster', 'species' => 'Dog', 'age' => 5],
            ['id' => 24, 'name' => 'Misty', 'species' => 'Cat', 'age' => 2],
            ['id' => 25, 'name' => 'Sunny', 'species' => 'Bird', 'age' => 4],
            ['id' => 26, 'name' => 'Willow', 'species' => 'Rabbit', 'age' => 3],
            ['id' => 27, 'name' => 'Harley', 'species' => 'Dog', 'age' => 2],
            ['id' => 28, 'name' => 'Oliver', 'species' => 'Cat', 'age' => 4],
            ['id' => 29, 'name' => 'Pepper', 'species' => 'Bird', 'age' => 5],
            ['id' => 30, 'name' => 'Penny', 'species' => 'Rabbit', 'age' => 1],
            ['id' => 31, 'name' => 'Zeus', 'species' => 'Dog', 'age' => 6],
            ['id' => 32, 'name' => 'Simba', 'species' => 'Cat', 'age' => 3],
            ['id' => 33, 'name' => 'Rocco', 'species' => 'Bird', 'age' => 2],
            ['id' => 34, 'name' => 'Hazel', 'species' => 'Rabbit', 'age' => 4],
            ['id' => 35, 'name' => 'Rex', 'species' => 'Dog', 'age' => 3],
            ['id' => 36, 'name' => 'Mia', 'species' => 'Cat', 'age' => 2],
            ['id' => 37, 'name' => 'Sky', 'species' => 'Bird', 'age' => 1],
            ['id' => 38, 'name' => 'Pumpkin', 'species' => 'Rabbit', 'age' => 5],
            ['id' => 39, 'name' => 'Thor', 'species' => 'Dog', 'age' => 4],
            ['id' => 40, 'name' => 'Lola', 'species' => 'Cat', 'age' => 3],
            ['id' => 41, 'name' => 'Buddy', 'species' => 'Bird', 'age' => 2],
            ['id' => 42, 'name' => 'Fluffy', 'species' => 'Rabbit', 'age' => 1],
            ['id' => 43, 'name' => 'Sam', 'species' => 'Dog', 'age' => 6],
            ['id' => 44, 'name' => 'Jasper', 'species' => 'Cat', 'age' => 4],
            ['id' => 45, 'name' => 'Chirpy', 'species' => 'Bird', 'age' => 3],
            ['id' => 46, 'name' => 'Snowball', 'species' => 'Rabbit', 'age' => 2],
            ['id' => 47, 'name' => 'Scout', 'species' => 'Dog', 'age' => 5],
            ['id' => 48, 'name' => 'Shadow', 'species' => 'Cat', 'age' => 1],
            ['id' => 49, 'name' => 'Bingo', 'species' => 'Bird', 'age' => 4],
            ['id' => 50, 'name' => 'Cotton', 'species' => 'Rabbit', 'age' => 3]
        ];

        foreach ($animalsData as $animalData) {
            # code...
            $newAnimal = new Animal($animalData);
            $newAnimal->save();
        }
    }
}
