<?php

namespace Spatie\Tags\Test;

use Spatie\Tags\HasTags;
use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    use HasTags;

    protected $guarded = [];
    public $timestamps = false;
}
