<?php

class Ilib_Payment_Authorize_Provider_Dandomain_ErrorMessage {
    
    
    static public function getErrorCodes()
    {
        return array(
            '' => 'Udefined error!',
            '0' => 'Invalid merchant',
            '1' => 'Invalid card number / Ugyldigt kreditkortnummer',
            '2' => 'Invalid amount',
            '3' => 'OrderID is missing og invalid',
            '4' => 'PBS rejection',
            '5' => 'Internal server error at DanDomain or PBS',
            '6' => 'E-dankort is not valid / E-dankort er ikke tilladt.',
            '7' => 'ewire is not allowed / ewire ikke tilladt.',
            '8' => '3-D secure is not allowed / 3-D Secure ikke tilladt.',
            '9' => 'Invalid expire date / Udløbsdato ugyldig.',
            '10' => 'Invalid card type / Ugyldig kreditkort type.',
            '11' => 'Error in order. Invalid checksum',
            '12' => 'Instant Capture failed.',
            '13' => 'Recurring payments not allowed',
            '14' => 'OrderID must be unique within same date',
            '15' => 'Customer number for recurring payment must be unique'
        );
    }
    
    static public function getActionCodes()
    {
        return array(
            '001' => 'Kunden skal kontakte sin bank',
            '002' => 'Ingen dækning for beløbet',
            '100' => 'Benyt et andet kort',
            '101' => 'Kortet er udløbet',
            '102' => 'Formodet misbrug. Kunden skal kontakte sin bank',
            '103' => 'Kunden skal kontakte sin bank',
            '104' => 'Kunden skal kontakte sin bank',
            '105' => 'Kunden skal kontakte sin bank',
            '106' => 'Kortet er pin blokkeret',
            '107' => 'Kunden skal kontakte sin bank',
            '108' => 'Kunden skal kontakte sin bank',
            '109' => 'Forretningen er sat forkert op hos indløser.',
            '110' => 'Fejl i beløb',
            '111' => 'Fejl i kortnummer',
            '112' => 'Pin kode skal benyttes ved brug af dette kort',
            '113' => 'Uacceptabelt gebyr',
            '114' => 'Kunden skal kontakte sin bank',
            '115' => 'Afvist',
            '116' => 'Ikke dækning for beløbet',
            '117' => 'Kortet er pin blokkeret',
            '118' => 'Ukendt kort',
            '119' => 'Transaktion ikke tilladt for kortholder',
            '120' => 'Ugyldigt kortnummer (Muligt at forretningen er sat forkert op)',
            '121' => 'Ikke dækning for beløbet',
            '122' => 'Afvist',
            '123' => 'Afvist',
            '124' => 'Afvist',
            '125' => 'Afvist',
            '126' => 'Afvist',
            '127' => 'Afvist',
            '128' => 'Afvist',
            '129' => 'Kunden skal kontakte sin bank',
            '160' => 'Afvist',
            '161' => 'Kortet er pin blokkeret',
            '162' => 'Afvist',
            '164' => 'Afvist',
            '165' => 'Ukendt kort',
            '167' => 'Afvist',
            '200' => 'Kortet er spærret',
            '201' => 'Kortet er spærret',
            '202' => 'Kortet er spærret',
            '203' => 'Kortet er spærret',
            '204' => 'Kortet er spærret',
            '205' => 'Kortet er spærret',
            '206' => 'Kortet er spærret',
            '207' => 'Kortet er spærret',
            '208' => 'Kortet er spærret',
            '209' => 'Kortet er spærret',
            '210' => 'Kortet er spærret',
            '900' => 'Afvist',
            '901' => 'Afvist',
            '902' => 'Ugyldig transaktion',
            '903' => 'Fejl - prøv igen',
            '904' => 'Format fejl - kontakt DanDomain',
            '905' => 'Afvist',
            '906' => 'Fejl - prøv igen',
            '907' => 'Fejl - prøv igen',
            '908' => 'Afvist'
        );
    }
    
}
