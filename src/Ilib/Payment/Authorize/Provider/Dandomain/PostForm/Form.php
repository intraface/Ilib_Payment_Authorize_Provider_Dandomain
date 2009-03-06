<?php

class Ilib_Payment_Authorize_Provider_Dandomain_PostForm_Form extends Ilib_Payment_Authorize_PostForm_Form
{
    /**
     * Returns the hidden fields for the form to post to the authorize page.
     * 
     * @return array with hidden post fields.
     */
    public function getHiddenields()
    {
        return '<input type="hidden" name="CurrencyID" title="CurrencyID" value="%%CurrencyID%%" />' .
                '<input type="hidden" name="MerchantNumber" value="%%MerchantNumber%%" />' .
                '<input type="hidden" name="OrderID" value="%%OrderID%%" />' .
                '<input type="hidden" name="Amount" value="%%Amount%%" />' .
                '<input type="hidden" name="SessionId" value="<?php e(session_id()); ?>" />' .
                '<input type="hidden" name="Checksum" value="<?php e($checksum); ?>" />' .
                '<input type="hidden" name="OKURL" value="<?php e($ok_url); ?>" />' .
                '<input type="hidden" name="FAILURL" value="<?php e($error_url); ?>" />' .
                '<input type="hidden" name="OKStatusURL" value="<?php e($postprocess_url); ?>" />' .
                '<input type="hidden" name="FAILStatusURL" value="<?php e($postprocess_url); ?>" />';
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
    
    public function getExpireMonthFieldName() 
    {
        return 'ExpireMonth';
    }
    
    public function getExpireYearFieldName()
    {
        return 'ExpireYear';
    }
}