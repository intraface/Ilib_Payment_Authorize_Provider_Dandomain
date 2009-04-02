<?php
/**
 * Prepares Dandomain <www.dandomain.dk> online payments with html template
 * 
 * @author sune jensen <sj@sunet.dk>
 * @version 0.0.1
 * @package Payment_Html_Provider_Dandomain
 * @category Payment
 * @license http://www.gnu.org/licenses/lgpl.html LGPL
 */

/**
 * Prepares Dandomain <www.dandomain.dk> online payments with html template
 * 
 * @author sune jensen <sj@sunet.dk>
 * @version 0.0.1
 * @package Payment_Html_Provider_Dandomain
 * @category Payment
 * @license http://www.gnu.org/licenses/lgpl.html LGPL
 */
class Ilib_Payment_Authorize_Provider_Dandomain_SecureTunnel_Prepare extends Ilib_Payment_Authorize_Prepare
{
    /**
     * Contructor
     * 
     * @param string $merchant
     * @param string $verification_key
     * @param string $order_identifier
     * @param integer $order_number
     * @param float $amount
     * @param string $currency
     * @param string $language
     * @param string $okpage
     * @param string $errorpage
     * @param string $resultpage
     * @param string $inputpage
     * @param array $get_vars
     * @param array $post_vars
     * @param string $secure_url
     * @return void
     */
    public function __construct($merchant, $verification_key, $order_identifier, $order_number, $amount, $currency, $language, $okpage, $errorpage, $resultpage, $inputpage, $get_vars, $post_vars)
    {
        parent::__construct($merchant, $verification_key, $order_identifier, $order_number, $amount, $currency, $language, $okpage, $errorpage, $resultpage, $inputpage, $get_vars, $post_vars);
    }
    
    /**
     * prepares the payment values into the fields
     *  
     * @return string post fields
     */
    public function getHiddenFields() 
    {
        $amount = number_format($this->amount, 2, ',', '');
        
        $currency = array('DKK' => '208',
            'EUR' => 978,
            'USD' => 840);
        
        if (empty($currency[$this->currency])) {
            throw new Exception('Unknown currency "'.$this->currency.'"');
        }
        $this->currency = $currency[$this->currency];
        
        $fields = '<input type="hidden" name="MerchantNumber" value="'.$this->merchant.'" />'.
           '<input type="hidden" name="SessionID" value="'.session_id().'" />'.
           '<input type="hidden" name="OrderID" value="'.$this->order_number.'" />'.
           '<input type="hidden" name="Amount" value="'.$this->amount.'" />'.
           '<input type="hidden" name="CurrencyID" value="'.$this->currency.'" />'.
           '<input type="hidden" name="TunnelURL" value="'.$this->inputpage.'" />';
        
        return $fields;
    }
    
    /**
     * Returns the form action
     * 
     * @return string form action
     */
    public function getAction()
    {
        return 'https://pay.dandomain.dk/securetunnel.asp?AddFormPostVars=1';
    }
    
    /**
     * Returns the name of the provider. Needs to be overridden in extends.
     * 
     * @return string name of provider
     */
    public function getProviderName()
    {
        return 'Dandomain';
    }
    
    /**
     * Returns error message
     * @return string error message
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