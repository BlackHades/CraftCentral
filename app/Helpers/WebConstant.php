<?php
/**
 * Created by PhpStorm.
 * User: Fatosin Samuel O
 * Date: 6/10/2018
 * Time: 12:13 PM
 */

namespace App\Helpers;


class WebConstant
{
    public static $MODE = 'development';

    //Post Type
    public static $GET = 'GET';
    public static $POST = 'POST';


    //User Type
    public static $DEV = 1;
    public static $SUPER_ADMIN = 2;
    public static $ADMIN = 3;
    public static $BT_KAIZEN = 4;
    public static $PARTNER = 5;
    public static $OTHERS = 6;

    //Access
    public static $ACCESS_DEV = 10;
    public static $ACCESS_SUPER_ADMIN = 5;
    public static $ACCESS_ADMIN = 4;
    public static $ACCESS_BT_KAIZEN = 3;
    public static $ACCESS_PARTNER = 2;
    public static $ACCESS_OTHERS = 1;


    //Emails
    public static  $CONTACT_EMAIL  = 'contacts@tsf.com.ng';
    public static  $REQUEST_EMAIL  = 'requests@tsf.com.ng';
    public static  $COMPLAINT_EMAIL  = 'complaints@tsf.com.ng';
    public static  $GENERAL_EMAIL  = 'general@tsf.com.ng';
    public static  $SUPPORT_EMAIL  = 'support@tsf.com.ng';


    //Onboard
    public static $ONBOARD_LANGUAGES = ["ENGLISH",'SWAHILI',"AMHARIC","YORUBA","OROMO","HAUSA","IGBO","ZULU","SHONA","ARABIC","PORTUGUESE","FRENCH"];



    //Defaults
    public static $DEFAULT_PASSWORD = "asdfghjklqwertyuiop";


    static function tempImage($name){
        return "https://ui-avatars.com/api/?name=$name&background=0D8ABC&color=fff&rounded=true";
    }


    static function FULL_URL(){
        if(self::$MODE == "production")
            return "http://tsf.com.ng/";
        return "http://localhost:8000/";
    }

    //Arrays
    public static $CONTINENT = ["Africa","Asia","Australia","China","Europe","North America","South America","Russia","United Kingdom"];
    public static $LOCATION = ["Lagos","Abuja","Port Harcourt","Ibadan","Oyo","Cape Town","Cairo","Addis Ababa","Johannesburg",
        "Arusha","Nairobi","Tripoli","Enugu","Uyo","Calabar","Onitcha","Ugheli","Asaba","Benin","Ore","Owerri","Others (Please Name the City)"];
    public static $CONTACT_SUBJECT = ["Products & Services","Blog / Vlog Topics","Request for Proposal","BT’s Enlistment Criteria","Office Locations","Others (Please Indicate)"];
}