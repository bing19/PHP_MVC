<?php

namespace App\Models;

use App\Model;

class News extends Model
{
    const TABLE = 'News';

    public $news_title;
    public $news_text;

}