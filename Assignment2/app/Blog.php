<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Blog extends Authenticatable
{
    public $title;
    public $content;
    public $username;
    public $createdAt;
    public $categoryID;

}
