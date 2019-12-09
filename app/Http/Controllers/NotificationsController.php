<?php

namespace App\Http\Controllers;

use App\User;
use App\Notifications\SubscriptionRenewalFailed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class NotificationsController extends Controller
{
    
    public function __construct()
    
    {
        
        $this->middleware('auth');
        
    }
    
    public function notification() {
        
        $user = User::where('id', auth()->id())->get();
        
    
       // $user->notify(new SubscriptionRenewalFailed);
        Notification::send($user, new SubscriptionRenewalFailed());
    
        return view ('notification');
    
    }
}
