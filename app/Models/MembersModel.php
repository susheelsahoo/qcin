<?php


namespace App\Models;



use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class MembersModel extends BaseModel
{
    use SoftDeletes;
    protected $table = 'memberships';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['question', 'answer', 'status'];
}
