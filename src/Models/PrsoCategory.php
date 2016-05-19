<?php
/**
 * Created by PhpStorm.
 * User: Bilyk
 * Date: 19.05.2016
 * Time: 13:16
 */




namespace GennadiyBilyk\Productso\Models;

use Kalnoy\Nestedset\Node;

class PrsoCategory extends Node
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', '_lft', '_rgt', 'parent_id', 'note', 'desc', 'showtop', 'showside', 'showbottom', 'showcontent',
    ];

}