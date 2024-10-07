<?php

namespace App;

enum CategoryType: string
{
    case TECHNOLOGY = 'Technology';
    case SPORTS = 'Sports';
    case ENTERTAINMENT = 'Entertainment';
    case HEALTH = 'Health';
    case BUSINESS = 'Business';
}