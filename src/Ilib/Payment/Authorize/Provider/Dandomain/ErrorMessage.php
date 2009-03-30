<?php

class Ilib_Payment_Authorize_Provider_Dandomain_ErrorMessage {
    
    
    static public function getErrorCodes()
    {
        return array(
            '' => 'Udefineret fejl!',
            '0' => 'Merchant/forretningsnummer ugyldigt',
            '1' => 'Ugyldigt kreditkortnummer',
            '2' => 'Ugyldigt bel�b',
            '3' => 'OrderID mangler eller er ugyldig',
            '4' => 'PBS afvisning',
            '5' => 'Intern server fejl hos DanDomain eller PBS',
            '6' => 'E-dankort ikke tilladt.',
            '7' => 'ewire ikke tilladt.',
            '8' => '3-D Secure ikke tilladt.',
            '9' => 'Udløbsdato ugyldig.',
            '10' => 'Ugyldig kreditkort type.',
            '11' => 'Fejl i ordre. Ugyldig Checksum',
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
            '002' => 'Ingen d�kning for bel�bet',
            '100' => 'Benyt et andet kort',
            '101' => 'Kortet er udl�bet',
            '102' => 'Formodet misbrug. Kunden skal kontakte sin bank',
            '103' => 'Kunden skal kontakte sin bank',
            '104' => 'Kunden skal kontakte sin bank',
            '105' => 'Kunden skal kontakte sin bank',
            '106' => 'Kortet er pin blokkeret',
            '107' => 'Kunden skal kontakte sin bank',
            '108' => 'Kunden skal kontakte sin bank',
            '109' => 'Forretningen er sat forkert op hos indl�ser.',
            '110' => 'Fejl i bel�b',
            '111' => 'Fejl i kortnummer',
            '112' => 'Pin kode skal benyttes ved brug af dette kort',
            '113' => 'Uacceptabelt gebyr',
            '114' => 'Kunden skal kontakte sin bank',
            '115' => 'Afvist',
            '116' => 'Ikke d�kning for bel�bet',
            '117' => 'Kortet er pin blokkeret',
            '118' => 'Ukendt kort',
            '119' => 'Transaktion ikke tilladt for kortholder',
            '120' => 'Ugyldigt kortnummer (Muligt at forretningen er sat forkert op)',
            '121' => 'Ikke d�kning for bel�bet',
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
            '200' => 'Kortet er sp�rret',
            '201' => 'Kortet er sp�rret',
            '202' => 'Kortet er sp�rret',
            '203' => 'Kortet er sp�rret',
            '204' => 'Kortet er sp�rret',
            '205' => 'Kortet er sp�rret',
            '206' => 'Kortet er sp�rret',
            '207' => 'Kortet er sp�rret',
            '208' => 'Kortet er sp�rret',
            '209' => 'Kortet er sp�rret',
            '210' => 'Kortet er sp�rret',
            '900' => 'Afvist',
            '901' => 'Afvist',
            '902' => 'Ugyldig transaktion',
            '903' => 'Fejl - pr�v igen',
            '904' => 'Format fejl - kontakt DanDomain',
            '905' => 'Afvist',
            '906' => 'Fejl - pr�v igen',
            '907' => 'Fejl - pr�v igen',
            '908' => 'Afvist'
        );
    }
    
}
