<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Jenssegers\Mongodb\Model as Eloquent;
use Carbon\Carbon;

class User extends Eloquent implements UserInterface, RemindableInterface
{

    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    public function checkEligibility()
    {
        /*
         * To be eligible to vote for the nominations, the individual must be a member for at least 1 year and have
         * passed the first mainline exam
         */

        // Check how long they've been a member
        if (Carbon::today()->diffInYears(Carbon::createFromFormat('Y-m-d', Auth::user()->registration_date)) < 1) {
            return false;
        }

        // Check that they've passed at least the first exam

        try {
            $exams = Exam::where('member_id', '=', Auth::user()->member_id)->firstOrFail()->exams;
        } catch (Exception $e) {
            $exams = [];
        }

        $exams = array_where($exams,
            function ($key, $value) {
                switch ($key) {
                    case 'IMNA-GSN-0001':
                    case 'KR1MA-RMA-0001':
                    case 'LU-Core-01':
                    case 'SIA-RMMC-0001':
                    case 'SIA-RMN-0001':
                        return true;
                    default:
                        return false;
                }
            }
        );

        if (count($exams) >= 1) {
            return true;
        }

        return false;
    }

    public function alreadyVoted()
    {
        try {
            $votes = Vote::where('member', '=', Auth::user()->id)->firstOrFail();
        } catch (Exception $e) {
            return false;
        }

        return true;
    }

}
