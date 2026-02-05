<?php return array (
  'App\\Providers\\EventServiceProvider' => 
  array (
    'Illuminate\\Auth\\Events\\Registered' => 
    array (
      0 => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
    ),
    'Illuminate\\Mail\\Events\\MessageSent' => 
    array (
      0 => 'App\\Listeners\\EmailTracker',
    ),
  ),
);