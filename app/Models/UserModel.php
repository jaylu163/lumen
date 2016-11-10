<?php
namespace App\Models;

class UserModel extends BaseModel{

   // use Authenticatable, Authorizable;

    protected $table ='user';
    /**
     *
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'name', 'email',
    ];

    /**
     *
     * The attributes excluded from the model's JSON form.
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public static function getUserById($id){
        $result = self::select(['id','name'])->where('id',$id)->get()->first()->toArray();

        return $result;
    }

}
