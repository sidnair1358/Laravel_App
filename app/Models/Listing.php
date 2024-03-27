<?php
namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            ['id' => 1, 'title' => ' Web Developer'],
            ['id' => 2, 'title' => 'Fullsatck Developer'],
            ['id' => 3, 'title' => 'Backend Developer'],
            ['id' => 4, 'title' => 'Frontend Developer']
        ];
    }

    public static function getById($id)
    {
        $listings = self::all();
        foreach ($listings as $listing) {
            if ($listing['id'] == $id)
                return $listing;
        }
    }

}
