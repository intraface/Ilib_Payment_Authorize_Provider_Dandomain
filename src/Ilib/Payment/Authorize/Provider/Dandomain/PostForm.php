<?php


class Ilib_Payment_Authorize_Provider_Dandomain_PostForm extends Ilib_Payment_Authorize_Provider_Dandomain
{
    
    private $merchant;
    private $verification_key;
    private $secure_url;
    private $form;
    
    public function __construct($merchant, $verification_key, $secure_url)
    {
        $this->merchant = $merchant;
        $this->verification_key = $verification_key;
        $this->secure_url = $secure_url;
    }
    
    /**
     * Given url https://www.carmakoma.com/da/shop/onlinepayment/[identifier]/postform
     */
    public function getRedirectUrlToPayment($order_identifier)
    {
        return $this->secure_url.'/shop/onlinepayment/'.$order_identifier.'/postform';
        
    }
    
    public function getForm()
    {
        if(!isset($this->form)) {
            $this->form = new Ilib_Payment_Authorize_Provider_Dandomain_PostForm_Form;
        }
        
        return $this->form;
    }
    
    
    
    
        
}
