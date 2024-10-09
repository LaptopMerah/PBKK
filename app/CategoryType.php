<?php

namespace App;

enum CategoryType: string
{
    case TECHNOLOGY = 'Technology';
    case SPORTS = 'Sports';
    case ENTERTAINMENT = 'Entertainment';
    case HEALTH = 'Health';
    case BUSINESS = 'Business';

    public function color(): string
    {
        return match($this) {
            CategoryType::TECHNOLOGY => 'red',
            CategoryType::SPORTS => 'green',
            CategoryType::ENTERTAINMENT => 'blue',
            CategoryType::HEALTH => 'yellow',
            CategoryType::BUSINESS => 'purple',
        };
    }
}