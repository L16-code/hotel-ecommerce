<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Hotels extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name',
        'email',
        'role','business_name','country',
        'city','not_listed','country_code','s_address',
        'a_address','latitude','longitude','singlemap',
        'phone','fax','inquiry_email','website','facebook','instagram',
        'twitter','linkedin','total_rooms_suites	','min','max','currency',
        'select_language','optional_message','message','stay','security',
        'staff','housekeeping','front_desk','bathroom','files','agree',
        'amenities',

        // 'password',
    ];
}
