<?php
/**
 * Created by PhpStorm.
 * User: Doraemon
 * Date: 7/24/2018
 * Time: 3:24 PM
 */

namespace App\Temp;

use PDO;

class verification
{
    public $db;
    public $users;

    function __construct()
    {


        $this->db = new PDO('mysql:host=localhost; dbname=cc_db; charset = utf8mb4', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //echo "<script> alert('database connected succesfully') </script>";

    }




    function insert_user($fname, $lname, $gender, $email, $username, $pass, $address, $Bstop, $city, $lga, $state)
    {
        $stmt= $this->db->prepare("INSERT INTO customer_datas(Cus_fname, Cus_lname, Cus_gender, Cus_email, Cus_username, Cus_pwd, Cus_address, Cus_Bstop, Cus_city, Cus_lga, Cus_state) VALUES (:fname, :lname, :gender, :email, :username, :pass, :address, :Bstop, :city, :lga, :state)");

        $stmt->bindValue(':fname', $fname, PDO::PARAM_STR);
        $stmt->bindValue(':lname', $lname, PDO::PARAM_STR);
        $stmt->bindValue(':gender', $gender, PDO::PARAM_STR);

        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->bindValue(':pass', $pass, PDO::PARAM_STR);
        $stmt->bindValue(':address', $address, PDO::PARAM_STR);

        $stmt->bindValue(':Bstop', $Bstop, PDO::PARAM_STR);
        $stmt->bindValue(':lga', $lga, PDO::PARAM_STR);
        $stmt->bindValue(':city', $city, PDO::PARAM_STR);
        $stmt->bindValue(':state', $state, PDO::PARAM_STR);


        $stmt->execute();
    }


    function select_userID($email)
    {
        $stmt = $this->db->prepare("SELECT Id FROM sp_data WHERE Business_email = :email");
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }



    function insert_bus($bsn_name, $category, $bsn_email, $pass, $phone, $category_id)
    {
        $stmt= $this->db->prepare("INSERT INTO sp_data(Business_email, Business_name, Business_Phone, Category, Category_ID, Pswd) VALUES (:bsn_email, :bsn_name, :bsn_phone, :category, :category_id, :pswd)");

        $stmt->bindValue(':bsn_email', $bsn_email, PDO::PARAM_STR);
        $stmt->bindValue(':category', $category, PDO::PARAM_STR);
        $stmt->bindValue(':bsn_phone', $phone, PDO::PARAM_STR);

        $stmt->bindValue(':bsn_name', $bsn_name, PDO::PARAM_STR);
        $stmt->bindValue(':category_id', $category_id, PDO::PARAM_STR);
        //$stmt->bindValue(':description', $description, PDO::PARAM_STR);

        $stmt->bindValue(':pswd', $pass, PDO::PARAM_STR);


        $stmt->execute();
    }




    function Update_bus($business_add, $state, $lga, $city, $workHours, $wordDays, $description, $email, $logo)
    {
        $stmt = $this->db->prepare("UPDATE sp_data SET Business_address = :buss_Add, Description = :description, State = :state, Lga = :lga, City = :city, Work_hours = :workhours, Work_days = :workdays, Logo = :logo WHERE Business_email = :email");
        $stmt->bindValue(':buss_Add', $business_add, PDO::PARAM_STR);
        $stmt->bindValue(':state', $state, PDO::PARAM_STR);
        $stmt->bindValue(':lga', $lga, PDO::PARAM_STR);

        $stmt->bindValue(':logo', $logo, PDO::PARAM_STR);

        $stmt->bindValue(':description', $description, PDO::PARAM_STR);

        $stmt->bindValue(':city', $city, PDO::PARAM_STR);
        $stmt->bindValue(':workhours', $workHours, PDO::PARAM_STR);
        $stmt->bindValue(':workdays', $wordDays, PDO::PARAM_STR);

        $stmt->bindValue(':email', $email, PDO::PARAM_STR);

        $stmt->execute();

    }



    function insert_social($facebook, $instagram, $twitter, $linkedin, $userID)
    {
        $stmt= $this->db->prepare("INSERT INTO Sp_social_handle(Facebook, Instagram, Twitter, Linkedin, Sp_id_fk) VALUES (:fb, :ig, :twitter, :linkedin, :userID)");

        $stmt->bindValue(':fb', $facebook, PDO::PARAM_STR);
        $stmt->bindValue(':ig', $instagram, PDO::PARAM_STR);

        $stmt->bindValue(':twitter', $twitter, PDO::PARAM_STR);
        $stmt->bindValue(':linkedin', $linkedin, PDO::PARAM_STR);

        $stmt->bindValue(':userID', $userID, PDO::PARAM_STR);

        $stmt->execute();

    }


    function search_query($category_id)
    {
        $stmt = $this->db->prepare("SELECT * FROM sp_data WHERE Category_ID = :category_id ORDER BY Id DESC LIMIT 12");
        $stmt->bindValue(':category_id', $category_id, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;


    }





    function search_query_state($category_id, $state)
    {
        $stmt = $this->db->prepare("SELECT * FROM sp_data WHERE Category_ID = :category_id AND State = :state ORDER BY Id DESC LIMIT 12");
        $stmt->bindValue(':category_id', $category_id, PDO::PARAM_STR);
        $stmt->bindValue(':state', $state, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;


    }

    function search_query_state_lga($category_id, $lga)  //might return an error
    {
        $stmt = $this->db->prepare("SELECT * FROM sp_data WHERE Category_ID = :category_id AND Lga = :lga ORDER BY Id DESC LIMIT 12");

        $stmt->bindValue(':category_id', $category_id, PDO::PARAM_STR);
        //$stmt->bindValue(':state', $state, PDO::PARAM_STR);
        $stmt->bindValue(':lga', $lga, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;


    }


    function search_query_lga($category_id, $lga)
    {
        $stmt = $this->db->prepare("SELECT * FROM sp_data WHERE Category_ID = :category_id AND Lga = :lga ORDER BY Id DESC LIMIT 12");
        $stmt->bindValue(':category_id', $category_id, PDO::PARAM_STR);
        $stmt->bindValue(':lga', $lga, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;


    }

    function user_profile_search($userID)
    {
        $stmt = $this->db->prepare("SELECT * FROM sp_data WHERE Id = :userID ");
        $stmt->bindValue(':userID', $userID, PDO::PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;

    }


    function user_social_search($userID)
    {
        $stmt = $this->db->prepare("SELECT * FROM sp_social_handle WHERE Sp_id_fk = :sp_id_FK ");
        $stmt->bindValue(':sp_id_FK', $userID, PDO::PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;

    }



    /****** Home page search query ****/

    //Converted
    function Home_main_query()
    {
        $stmt = $this->db->prepare("SELECT * FROM sp_data ORDER BY Id DESC LIMIT 4");
        //$stmt->bindValue(':category_id', $category_id, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;


    }




    function Home_search_query($category_id)
    {
        $stmt = $this->db->prepare("SELECT * FROM sp_data WHERE Category_ID = :category_id ORDER BY Id DESC LIMIT 4");
        $stmt->bindValue(':category_id', $category_id, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;


    }


    function Home_search_query_state($category_id, $state)
    {
        $stmt = $this->db->prepare("SELECT * FROM sp_data WHERE Category_ID = :category_id AND State = :state ORDER BY Id DESC LIMIT 4");
        $stmt->bindValue(':category_id', $category_id, PDO::PARAM_STR);
        $stmt->bindValue(':state', $state, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;


    }

    function Home_search_query_state_lga($category_id, $lga)  //might return an error
    {
        $stmt = $this->db->prepare("SELECT * FROM sp_data WHERE Category_ID = :category_id AND Lga = :lga ORDER BY Id DESC LIMIT 4");

        $stmt->bindValue(':category_id', $category_id, PDO::PARAM_STR);
        //$stmt->bindValue(':state', $state, PDO::PARAM_STR);
        $stmt->bindValue(':lga', $lga, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;


    }


    function Home_search_query_lga($category_id, $lga)
    {
        $stmt = $this->db->prepare("SELECT * FROM sp_data WHERE Category_ID = :category_id AND Lga = :lga ORDER BY Id DESC DESC LIMIT 4");
        $stmt->bindValue(':category_id', $category_id, PDO::PARAM_STR);
        $stmt->bindValue(':lga', $lga, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;


    }



    /*	function search_query_state_lga($category_id, $state, $lga)  //might return an error
        {
            $stmt = $this->db->prepare("SELECT * FROM sp_data WHERE Category_ID = :category_id AND Lga = :lga AND State = :state ORDER BY Id DESC");

            $stmt->bindValue(':category_id', $category_id, PDO::PARAM_STR);
            $stmt->bindValue(':state', $state, PDO::PARAM_STR);
            $stmt->bindValue(':lga', $lga, PDO::PARAM_STR);
            $stmt->execute();

            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $row;


        } */















    function insert_keyword($keyword, $cartegoryID)
    {

        $stmt = $this->db->prepare("INSERT INTO keyword(Keyword_Tbl, Cartegory_Id_FK) VALUES (:keyword, :categoryID)");

        $stmt->bindValue(':keyword', $keyword, PDO::PARAM_STR);
        $stmt->bindValue(':categoryID', $cartegoryID, PDO::PARAM_STR);

        $stmt->execute();


    }


    function search_keywordID($keyword)
    {
        $stmt = $this->db->prepare(" SELECT Cartegory_Id_FK FROM keyword WHERE Keyword_Tbl = :keyword");

        $stmt->bindValue(':keyword', $keyword, PDO::PARAM_STR);

        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }



    function search_related1($category_id)
    {
        $stmt = $this->db->prepare("SELECT * FROM sp_data WHERE Category_ID = :category_id ORDER BY Id LIMIT 2");
        $stmt->bindValue(':category_id', $category_id, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;


    }


    function search_related2($category_id)
    {
        $stmt = $this->db->prepare("SELECT * FROM sp_data WHERE Category_ID = :category_id ORDER BY Id DESC LIMIT 2");
        $stmt->bindValue(':category_id', $category_id, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;


    }


    /* insert into request table */




    function insert_request($fullName, $email, $Phone, $Subject, $Message, $userID, $spID)
    {

        $stmt = $this->db->prepare("INSERT INTO request_tbl(Full_name, Email, Phone, Subject, Message, User_id_fk, Sp_id_fk) VALUES (:fullname, :email, :phone, :Subject, :Message, :userID, :sp_id_FK)");

        $stmt->bindValue(':fullname', $fullName, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':phone', $Phone, PDO::PARAM_STR);
        $stmt->bindValue(':Subject', $Subject, PDO::PARAM_STR);

        $stmt->bindValue(':Message', $Message, PDO::PARAM_STR);
        $stmt->bindValue(':userID', $userID, PDO::PARAM_INT);
        $stmt->bindValue(':sp_id_FK', $spID, PDO::PARAM_INT);

        $stmt->execute();


    }


    function select_request($spID)
    {

        $stmt = $this->db->prepare("SELECT * FROM request_tbl WHERE Sp_id_fk = :spID ");


        $stmt->bindValue(':spID', $spID, PDO::PARAM_STR);

        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;


    }



    /* -----Ratings ---- */

    function insert_Ratings_Ex($rating, $userID, $spID)
    {

        $stmt = $this->db->prepare("INSERT INTO ratings_excellent(Excellent, Sp_id_fk, User_id_fk) VALUES (:rating, :sp_id_FK, :userID)");

        $stmt->bindValue(':rating', $rating, PDO::PARAM_STR);
        $stmt->bindValue(':userID', $userID, PDO::PARAM_INT);
        $stmt->bindValue(':sp_id_FK', $spID, PDO::PARAM_INT);

        $stmt->execute();


    }


    function insert_Rating_Vgood($rating, $userID, $spID)
    {

        $stmt = $this->db->prepare("INSERT INTO ratings_vgood(Very_good, Sp_id_fk, User_id_fk) VALUES (:rating, :sp_id_FK, :userID)");

        $stmt->bindValue(':rating', $rating, PDO::PARAM_STR);
        $stmt->bindValue(':userID', $userID, PDO::PARAM_INT);
        $stmt->bindValue(':sp_id_FK', $spID, PDO::PARAM_INT);

        $stmt->execute();


    }


    function insert_Rating_Qgood($rating, $userID, $spID)
    {

        $stmt = $this->db->prepare("INSERT INTO ratings_qgood(Quite_good, Sp_id_fk, User_id_fk) VALUES (:rating, :sp_id_FK, :userID)");

        $stmt->bindValue(':rating', $rating, PDO::PARAM_STR);
        $stmt->bindValue(':userID', $userID, PDO::PARAM_INT);
        $stmt->bindValue(':sp_id_FK', $spID, PDO::PARAM_INT);

        $stmt->execute();


    }


    function insert_Rating_Good($rating, $userID, $spID)
    {

        $stmt = $this->db->prepare("INSERT INTO ratings_Good(Good, Sp_id_fk, User_id_fk) VALUES (:rating, :sp_id_FK, :userID)");

        $stmt->bindValue(':rating', $rating, PDO::PARAM_STR);
        $stmt->bindValue(':userID', $userID, PDO::PARAM_INT);
        $stmt->bindValue(':sp_id_FK', $spID, PDO::PARAM_INT);

        $stmt->execute();


    }

    function insert_Rating_Ngood($rating, $userID, $spID)
    {

        $stmt = $this->db->prepare("INSERT INTO ratings_ngood(Not_good, Sp_id_fk, User_id_fk) VALUES (:rating, :sp_id_FK, :userID)");

        $stmt->bindValue(':rating', $rating, PDO::PARAM_STR);
        $stmt->bindValue(':userID', $userID, PDO::PARAM_INT);
        $stmt->bindValue(':sp_id_FK', $spID, PDO::PARAM_INT);

        $stmt->execute();


    }




    /* ---- select start rating ---*/


    function count_excellent($spID)
    {
        $stmt = $this->db->prepare("SELECT * FROM ratings_excellent WHERE Sp_id_fk = :spID ");

        $stmt->bindValue(':spID', $spID, PDO::PARAM_INT);

        $stmt->execute();

        $row_count = $stmt->rowCount();
        return $row_count;

    }


    function count_Vgood($spID)
    {
        $stmt = $this->db->prepare("SELECT * FROM ratings_vgood WHERE Sp_id_fk = :spID ");

        $stmt->bindValue(':spID', $spID, PDO::PARAM_INT);

        $stmt->execute();

        $row_count = $stmt->rowCount();
        return $row_count;

    }


    function count_Qgood($spID)
    {
        $stmt = $this->db->prepare("SELECT * FROM ratings_qgood WHERE Sp_id_fk = :spID ");

        $stmt->bindValue(':spID', $spID, PDO::PARAM_INT);

        $stmt->execute();

        $row_count = $stmt->rowCount();
        return $row_count;

    }


    function count_Good($spID)
    {
        $stmt = $this->db->prepare("SELECT * FROM ratings_good WHERE Sp_id_fk = :spID ");

        $stmt->bindValue(':spID', $spID, PDO::PARAM_INT);

        $stmt->execute();

        $row_count = $stmt->rowCount();
        return $row_count;

    }


    function count_Ngood($spID)
    {
        $stmt = $this->db->prepare("SELECT * FROM ratings_ngood WHERE Sp_id_fk = :spID ");

        $stmt->bindValue(':spID', $spID, PDO::PARAM_INT);

        $stmt->execute();

        $row_count = $stmt->rowCount();
        return $row_count;

    }



    function update_spEmail($email, $id)
    {
        $stmt = $this->db->prepare("UPDATE sp_data SET Business_email = :email WHERE Id = :id");
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        $stmt->execute();


    }


    function update_spLocation($location, $id)
    {
        $stmt = $this->db->prepare("UPDATE sp_data SET Business_address = :location WHERE Id = :id");
        $stmt->bindValue(':location', $location, PDO::PARAM_STR);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        $stmt->execute();


    }


    function update_spState($state, $id)
    {
        $stmt2 = $this->db->prepare("UPDATE sp_data SET State = :state WHERE Id = :id");
        $stmt->bindValue(':state', $state, PDO::PARAM_STR);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        $stmt->execute();


    }


    function update_spPhone($phone, $id)
    {
        $stmt = $this->db->prepare("UPDATE sp_data SET Business_Phone = :phone WHERE Id = :id");
        $stmt->bindValue(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        $stmt->execute();


    }


    function update_spHours($workHours, $id)
    {
        $stmt = $this->db->prepare("UPDATE sp_data SET Work_hours = :Whours WHERE Id = :id");
        $stmt->bindValue(':Whours', $workHours, PDO::PARAM_STR);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        $stmt->execute();


    }



    function update_spDays($workdays, $id)
    {
        $stmt = $this->db->prepare("UPDATE sp_data SET Work_days = :Wdays WHERE Id = :id");
        $stmt->bindValue(':Wdays', $workdays, PDO::PARAM_STR);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        $stmt->execute();


    }



    function update_spDescription($Description, $id)
    {
        $stmt = $this->db->prepare("UPDATE sp_data SET Description = :Description WHERE Id = :id");
        $stmt->bindValue(':Description', $Description, PDO::PARAM_STR);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        $stmt->execute();


    }




    function update_spFacebook($facebook, $id)
    {
        $stmt = $this->db->prepare("UPDATE sp_social_handle SET Facebook = :facebook WHERE Sp_id_fk = :spID");
        $stmt->bindValue(':facebook', $facebook, PDO::PARAM_STR);
        $stmt->bindValue(':spID', $id, PDO::PARAM_INT);

        $stmt->execute();


    }



    function update_spLinkedin($linkedin, $id)
    {
        $stmt = $this->db->prepare("UPDATE sp_social_handle SET Linkedin = :linkedin WHERE Sp_id_fk = :spID");
        $stmt->bindValue(':linkedin', $linkedin, PDO::PARAM_STR);
        $stmt->bindValue(':spID', $id, PDO::PARAM_INT);

        $stmt->execute();


    }


    function update_spInstagram($instagram, $id)
    {
        $stmt = $this->db->prepare("UPDATE sp_social_handle SET Instagram = :instagram WHERE Sp_id_fk = :spID");
        $stmt->bindValue(':instagram', $instagram, PDO::PARAM_STR);
        $stmt->bindValue(':spID', $id, PDO::PARAM_INT);

        $stmt->execute();


    }



    function update_spTwitter($twitter, $id)
    {
        $stmt = $this->db->prepare("UPDATE sp_social_handle SET Twitter = :twitter WHERE Sp_id_fk = :spID");
        $stmt->bindValue(':twitter', $twitter, PDO::PARAM_STR);
        $stmt->bindValue(':spID', $id, PDO::PARAM_INT);
        $stmt->execute();


    }














    function validate($data)
    {
        $data1 = trim($data);
        $data1 = stripcslashes($data);
        $data1 = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
        //$data1 = mysq_real_escape_string($data);

        return $data1;

    }

    function check($email)
    {
        $stmt = $this->db->prepare("SELECT * FROM customer_datas WHERE Cus_email = :logEmail");
        $stmt->bindValue(':logEmail', $email, PDO::PARAM_STR);
        $stmt->execute();

        $row_count = $stmt->rowCount();
        return $row_count;

    }


    function check_bus($email)
    {
        $stmt = $this->db->prepare("SELECT * FROM sp_data WHERE Business_email = :bus_email");
        $stmt->bindValue(':bus_email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $row_count = $stmt->rowCount();
        return $row_count;

        /*if($stmt->rowCount() > 0)
            {
            return $row;
           }else{
               return 0;
           }
    */
    }


    function insert_newHash($hash, $email)
    {
        $stmt = $this->db->prepare("UPDATE customer_datas SET Cus_pwd = :pass WHERE Cus_email = :email");
        $stmt->bindValue(':pass', $hash, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);

        $stmt->execute();
    }


    function insert_newHash_Biz($hash, $email)
    {
        $stmt = $this->db->prepare("UPDATE sp_data SET Pswd = :pass WHERE Business_email = :email");
        $stmt->bindValue(':pass', $hash, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);

        $stmt->execute();
    }


    function login($email, $pass)
    {
        $stmt = $this->db->prepare("SELECT Cus_email, Cus_pwd FROM customer_datas WHERE Cus_email = :email AND Password = :pass");

        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':pass', $pass, PDO::PARAM_STR);
        $stmt->execute();

        $row_count = $stmt->rowCount();
        return $row_count;

    }


    function get_userID($user_email)  //this does not just get user id alone but almost all th details
    {
        $stmt2 = $this->db->prepare("SELECT Id, Cus_fname, Cus_lname, Cus_username, Cus_address, Cus_Bstop, Cus_city, Cus_state FROM customer_datas WHERE Cus_email = :user_email");
        $stmt2->bindValue(':user_email', $user_email, PDO::PARAM_STR);
        $stmt2->execute();

        $row = $stmt2->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }


    function get_userID_Biz($user_email)  //this does not just get user id alone but almost all th details
    {
        $stmt2 = $this->db->prepare("SELECT Id, Cus_fname, Cus_lname, Cus_username, Cus_address, Cus_Bstop, Cus_city, Cus_state FROM customer_datas WHERE Cus_email = :user_email");
        $stmt2->bindValue(':user_email', $user_email, PDO::PARAM_STR);
        $stmt2->execute();

        $row = $stmt2->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }



    function get_userID2($user_email)  //this gets id alone but almost all th details
    {
        $stmt2 = $this->db->prepare("SELECT Id FROM customer_datas WHERE Cus_email = :user_email");
        $stmt2->bindValue(':user_email', $user_email, PDO::PARAM_STR);
        $stmt2->execute();

        $row = $stmt2->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }


    function get_userID2_Biz($user_email)  //this gets id alone but almost all th details
    {
        $stmt2 = $this->db->prepare("SELECT Id FROM sp_data WHERE Business_email = :Biz_email");
        $stmt2->bindValue(':Biz_email', $user_email, PDO::PARAM_STR);
        $stmt2->execute();

        $row = $stmt2->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }




    /*function hash_details($user_email) //this get the details we used in the hashing Userlogin
    {
        $stmt = $this->db->prepare("SELECT Cus_state, Cus_pwd FROM customer_datas WHERE Cus_email = :user_email");
        $stmt->bindValue(':user_email', $user_email, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if($stmt->rowCount() == 1)
        {
        return $row;
       }else{
           return 0;
       }

    }*/


    function hash_details2($user_email, $pass) //this get the details we used in the hashing Userlogin
    {
        $stmt = $this->db->prepare("SELECT * FROM customer_datas WHERE Cus_email = :user_email AND Cus_pwd = :userPass");
        $stmt->bindValue(':user_email', $user_email, PDO::PARAM_STR);
        $stmt->bindValue(':userPass', $pass, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $row_count = $stmt->rowCount();
        return $row_count;
    }

    function hash_details_Biz($user_email) //this get the details we used in the hashing Business login
    {
        $stmt2 = $this->db->prepare("SELECT State, Pswd, Category FROM sp_data WHERE Business_email = :user_email");
        $stmt2->bindValue(':user_email', $user_email, PDO::PARAM_STR);
        $stmt2->execute();

        $row = $stmt2->fetchAll(PDO::FETCH_ASSOC);

        if($stmt2->rowCount() == 1)
        {
            return $row;
        }else{
            return 0;
        }

    }


    function hash_details_Biz2($user_email, $pass) //this get the details we used in the hashing Business login
    {
        $stmt2 = $this->db->prepare("SELECT State, Pswd, Category FROM sp_data WHERE Business_email = :user_email AND Pswd = :pass");
        $stmt2->bindValue(':user_email', $user_email, PDO::PARAM_STR);
        $stmt2->bindValue(':pass', $pass, PDO::PARAM_STR);


        $stmt2->execute();

        $row = $stmt2->fetchAll(PDO::FETCH_ASSOC);

        if($stmt2->rowCount() == 1)
        {
            return $row;
        }else{
            return 0;
        }

    }


    function activation_insert($userID, $hash, $email)
    {
        $activate = 0;
        $stmt2 = $this->db->prepare("INSERT INTO Activation(user_id_FK, User_email, Hash, Activate) VALUES (:userID, :email, :hash, :activate)");

        $stmt2->bindValue(':userID', $userID, PDO::PARAM_INT);
        $stmt2->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt2->bindValue(':hash', $hash, PDO::PARAM_STR);
        $stmt2->bindValue(':activate', $activate, PDO::PARAM_STR);

    }


    function check_activation($email)
    {
        $stmt2 = $this->db->prepare("SELECT Hash FROM customer_datas WHERE Cus_email = :user_email");

        $stmt2->bindValue(':user_email', $user_email, PDO::PARAM_STR);
        $stmt2->execute();

        $row = $stmt2->fetchAll(PDO::FETCH_ASSOC);

        if($stmt2->rowCount() == 1)
        {
            return $row;
        }else{
            return 0;
        }

    }














}
