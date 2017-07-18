<?php
class AppController extends Controller{
    
    var $components = array('Acl', 'Auth','Session','RequestHandler');
    var $helpers = array('Html','Form','Session');
    
    

    var $beforeFilter = array('checkAccess'); 

    
    
    function checkAccess(){ 
        // This part not required. It shows one way to 
        // integrate this permission with authentication: login/logout 
        // We always put the login_name in the session under 
        // the key USER_LOGIN_KEY, even for anonymous users. 
        // So whether a user is logged in or not depends on 
        // whether this value is ANONY_USER or not. You may 
        // choose to implement it some other way (e.g., whether it's 
        // set or not.) 
        if (!$this->Session->valid()) { 
            $this->Session->renew(); 
        } 
        if (!$this->Session->check(USER_LOGIN_KEY)) { 
            $this->Session->write(USER_LOGIN_KEY,ANONY_USER); 
        } 

        // here we check the permissions based on 
        // username and controller name (which is 
        // is the first part of the URL) 
        $user = $this->Session->read(USER_LOGIN_KEY); 
        $aco = $this->params['controller']; 
        if ($this->Acl->check($user, "/$aco", '*')) { 
            return;  
        }else{ 
            // if anonymous, redirect to login 
            // otherwise, give permission error 
            if( $user == ANONY_USER){ 
                $this->redirect("/authentications/login"); 
            }else{ 
                $this->redirect("/pages/permission_denied"); 
            } 
        } 
    } 
    

		

}