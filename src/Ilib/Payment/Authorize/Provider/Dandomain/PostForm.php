<?php


class Ilib_Payment_Authorize_Provider_Dandomain_PostForm extends Ilib_Payment_Authorize_Provider_Dandomain
{
    
    private $merchant;
    private $verification_key;
    private $session_id;
    private $url;
    
    public function construct($merchant, $verification_key, $session_id, $url)
    {
        
        $this->merchant = $merchant;
        $this->verification_key = $verification_key;
        $this->session_id = $session_id;
    }
    
    
    /**
     * Must return https://www.carmakoma.com/##language##/shop/onlinepayment/[identifier]/postform
     */
    public function getPlaceOrderRedirect($order_identifier, $language)
    {
        
        $url = str_replace('##language##', $language, $this->url);
        $url = str_replace('##identifier##', $order_identifier, $url);
        
        return $url;
        
    }
    
    
}
