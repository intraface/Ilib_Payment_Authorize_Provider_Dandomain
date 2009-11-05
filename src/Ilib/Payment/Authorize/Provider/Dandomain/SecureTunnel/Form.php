<?php
/**
 * Post form form class
 * @author sune
 *
 */

/**
 * Post form form class
 * @author sune
 *
 */
class Ilib_Payment_Authorize_Provider_Dandomain_SecureTunnel_Form extends Ilib_Payment_Authorize_Form
{
    
    /**
     * Constructor
     * 
     * @todo $errorpage is no longer the errorpage, but the base url of the payment. The errorpage url is created from this
     * 
     * @param string $merchant
     * @param string $verification_key
     * @param integer $order_number
     * @param float $amount
     * @param string $currency
     * @param string $language
     * @param string $okpage
     * @param string $errorpage
     * @param string $resultpage
     * @param array GET vars
     * @param array POST vars
     * @return void
     */
    public function __construct($merchant, $verification_key, $order_number, $amount, $currency, $language, $okpage, $errorpage, $resultpage, $get_vars, $post_vars)
    {
        parent::__construct($merchant, $verification_key, $order_number, $amount, $currency, $language, $okpage, $errorpage, $resultpage, $get_vars, $post_vars);
    }
    
    
    
    /**
     * Returns the hidden fields for the form to post to the authorize page.
     * 
     * @return array with hidden post fields.
     */
    public function getHiddenFields()
    {
        
        $currency = array(
            'DKK' => '208',
            'EUR' => '978',
            'USD' => '840',
            'GBP' => '826'
        );
        
        if(!isset($currency[$this->currency])) {
            throw new Exception('Unsupported currency '.$this->currency);
        }
        
        $amount = number_format($this->amount, 2, ',', '');
        
        $checksum = md5($this->order_number.'+'.$amount.'+'.$this->verification_key.'+'.$currency[$this->currency]);
        
        /**
         * @todo Here we create the error url from base url (errorpage)
         */
        $error_url = $this->errorpage.'?error=1';
        
        return '<input type="hidden" name="CurrencyID" title="CurrencyID" value="'.$currency[$this->currency].'" />' .
                '<input type="hidden" name="MerchantNumber" value="'.$this->merchant.'" />' .
                '<input type="hidden" name="OrderID" value="'.$this->order_number.'" />' .
                '<input type="hidden" name="Amount" value="'.$amount.'" />' .
                '<input type="hidden" name="SessionId" value="'.session_id().'" />' .
                '<input type="hidden" name="Checksum" value="'.$checksum.'" />' .
                '<input type="hidden" name="OKURL" value="'.$this->okpage.'" />' .
                '<input type="hidden" name="FAILURL" value="'.$error_url.'" />' .
                '<input type="hidden" name="OKStatusURL" value="'.$this->resultpage.'" />' .
                '<input type="hidden" name="FAILStatusURL" value="'.$this->resultpage.'" />';
    }
    
    /**
     * Returns the form action
     * 
     * @return string form action
     */
    public function getAction()
    {
        return 'https://pay.dandomain.dk/securecapture.asp';
    }
    
    /**
     * Returns the secure tunnel
     * 
     * @return string secture tunnel
     */
    public function getSecureTunnel()
    {
        return 'https://pay.dandomain.dk/securetunnel-bin.asp?url=';
    }
    
    /**
     * Return the name of the card number field name
     * 
     * @return string
     */
    public function getCardNumberFieldName()
    {
        return 'CardNumber';
    }
    
    /**
     * Returns the name of the security number field name
     * 
     * @return unknown_type
     */
    public function getSecurityNumberFieldName()
    {
        return 'CardCVC';
    }
    
    /**
     * Returns the name of the expire month field name 
     * @return string 
     */
    public function getExpireMonthFieldName() 
    {
        return 'ExpireMonth';
    }
    
    /**
     * Returns the name of the expire year field name
     * @return string
     */
    public function getExpireYearFieldName()
    {
        return 'ExpireYear';
    }
    
    /**
     * return the currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    
    /**
     * Returns the amount 
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }
    
    /**
     * Returns errore message if is set
     * @return string
     */
    public function getErrorMessage()
    {
        if(isset($this->get_vars['errorcode'])) {
            $errorcodes = Ilib_Payment_Authorize_Provider_Dandomain_ErrorMessage::getErrorCodes();
            return $errorcodes[$this->get_vars['errorcode']];
        }
        
        return '';
    }
}