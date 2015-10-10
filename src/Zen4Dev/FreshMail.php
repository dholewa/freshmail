<?php
namespace Zen4Dev;

define ( 'FM_API_KEY', env('FM_API_KEY') );
define ( 'FM_API_SECRET', env('FM_API_SECRET') );

require_once __DIR__ .'/../class.rest.php';

class FreshMail extends \FmRestApi {

}