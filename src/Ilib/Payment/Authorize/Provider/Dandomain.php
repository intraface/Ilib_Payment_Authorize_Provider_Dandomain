<?php

abstract class Ilib_Payment_Authorize_Provider_Dandomain extends Ilib_Payment_Authorize
{
    
    
    
    /**
     * returns merchant number
     *
     * @return string merchant number
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * returns the verification key
     *
     * @return string verification key
     */
    public function getVerificationKey()
    {
        return $this->verification_key;
    }
    
    
}