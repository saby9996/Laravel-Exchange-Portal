<?php

namespace Swapstr;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'email', 'password', 'verification_token'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function ppreference()
    {
        return $this->hasOne('Swapstr\Ppreference');
    }

    /**
     * User has one email preference.
     */
    public function epreference()
    {
        return $this->hasOne('Swapstr\Epreference');
    }

    /**
     * User has many search preferences.
     */
    public function spreferences()
    {
        return $this->hasMany('Swapstr\Spreference');
    }

    public function wishlists()
    {
        return $this->hasMany('Swapstr\Wishlist');
    }

    /**
     * User has many reports.
     */
    public function reports()
    {
        return $this->morphMany('Swapstr\Report', 'target');
    }

    public function blocklist()
    {
        return $this->hasMany('Swapstr\Block', 'blocker');
    }

    public function items()
    {
        return $this->hasMany('Swapstr\Item', 'owner');
    }

    public function offered()
    {
        return $this->hasMany('Swapstr\Exchange', 'offered_by');
    }

    /**
     * User has many notifications.
     */
    public function notifications()
    {
        return $this->hasMany('Swapstr\Notification');
    }

    /**
     * User belongs to conversations.
     */
    public function conversations()
    {
        return $this->belongsToMany('Swapstr\Conversation', 'participants');
    }

    /**
     * User has many interests.
     */
    public function interests()
    {
        return $this->belongsToMany('Swapstr\Interest', 'interest_user');
    }

    public function profile()
    {
        return $this->hasOne('Swapstr\Profile');
    }

    /**
     * Get the addresses related to a profile.
     */
    public function address()
    {
        return $this->morphOne('Swapstr\Address', 'addressable');
    }
}
