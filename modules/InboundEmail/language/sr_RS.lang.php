<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(

	'LBL_ASSIGN_TEAM'		=> 'Dodeli timovima',

	'LBL_RE'					=> 'RE:',

	'ERR_BAD_LOGIN_PASSWORD'=> 'Netačno korisničko ime i lozinka',
	'ERR_BODY_TOO_LONG'		=> '\\r Tekst je predugačak za dohvatanje kompletnog email-a. Skraćeno.',
	'ERR_INI_ZLIB'			=> 'Ne mogu da trajno isključim Zlib kompresiju. "Test podešavanje" možda beće uspeti.',
	'ERR_MAILBOX_FAIL'		=> 'Nijedan email nalog ne može da se povrati.',
	'ERR_NO_IMAP'			=> 'Nisu nađene IMAP biblioteke. Molim, rešite ovaj problem pre nego što nastavite sa dolaznom e-poštom',
	'ERR_NO_OPTS_SAVED'		=> 'Optimalna podešavanja za Vaš nalog dolazne e-pošte nisu sačuvana. Molim, pregledajte podešavanja',
	'ERR_TEST_MAILBOX'		=> 'Molim, proverite Vaša podešavanja i pokušajte ponovo.',
    'ERR_DELETE_FOLDER' => 'Brisanje fascikle nije moguće.',
    'ERR_UNSUBSCRIBE_FROM_FOLDER' => 'Nije moguće odjaviti se sa fascikle pre brisanja.',

	'LBL_APPLY_OPTIMUMS'	=> 'Primeni optimalno',
	'LBL_ASSIGN_TO_USER'	=> 'Dodeli korisniku',
	'LBL_AUTOREPLY_OPTIONS'	=> 'Opcije automatskog odgovaranja',
	'LBL_AUTOREPLY'			=> 'Šablon za automatsko odgovaranje',
	'LBL_AUTOREPLY_HELP'	=> 'Izaberite automatski odgovor da obavestite email pošiljaoce da je njihov odgovor primljen.',
	'LBL_BASIC'				=> 'Informacije Mail naloga',
	'LBL_CASE_MACRO'		=> 'U slučaju makroa',
	'LBL_CASE_MACRO_DESC'	=> 'Postavite makro koji će biti parsiran i korišćen da bi povezao uveženu email poruku sa Slučajem.',
	'LBL_CASE_MACRO_DESC2'	=> 'Postavite ovo na bilo koju vrednost, ali sačuvajte <b>"%1"</b>.',
	'LBL_CERT_DESC'			=> 'Forsira validaciju sigurnosnog sertifikata mail servera - ne koristite ako samopotpisujete.',
	'LBL_CERT'				=> 'Potvrdi sertifikat',
	'LBL_CLOSE_POPUP'		=> 'Zatvori prozor',
	'LBL_CREATE_NEW_GROUP'	=> '--Prilikom čuvanja kreiraj grupu--',
	'LBL_CREATE_TEMPLATE'	=> 'Kreiraj',
	'LBL_SUBSCRIBE_FOLDERS'	=> 'Prijavi foldere',
	'LBL_DEFAULT_FROM_ADDR'	=> 'Podrazumevano:',
	'LBL_DEFAULT_FROM_NAME'	=> 'Podrazumevano:',
	'LBL_DELETE_SEEN'		=> 'Obriši pročitane Email poruke nakon uvoza',
	'LBL_EDIT_TEMPLATE'		=> 'Izmeni',
	'LBL_EMAIL_OPTIONS'		=> 'Opcije obrade Email-a',
	'LBL_EMAIL_BOUNCE_OPTIONS' => 'Opcije obrade odbijenih',
	'LBL_FILTER_DOMAIN_DESC'=> 'Navedite domen kojem se neće slati automatski odgovori.',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> 'Izaberite da se automatski kreiraju email zapisi u Sugar-u za sve dolazne email poruke.',
	'LBL_POSSIBLE_ACTION_DESC'		=> 'Za opciju Kreiraj slučaj, mora biti izabran Grupni folder',
	'LBL_FILTER_DOMAIN'		=> 'Bez automatskog slanja odgovora na ovaj domen',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> '<br> Tražim optimalne parametre za uspostavljanje veze.',
	'LBL_FIND_OPTIMUM_TITLE'=> 'Nađi optimalnu konfiguraciju',
	'LBL_FIND_SSL_WARN'		=> '<br>Za testiranje SSL-a  potrebno je izvesno vreme. Molim, budite strpljivi.<br>',
	'LBL_FORCE_DESC'		=> 'Neki IMAP/POP3 serveri zahtevaju specijalne prekidače. Odaberite da bi forsirali negativan prekidač kada se konektujete (i.e., /notls)',
	'LBL_FORCE'				=> 'Forsiraj negativno',
	'LBL_FOUND_MAILBOXES'	=> 'Nađeni su sledeći korisni folderi. <br>Kliknite na jedan da bi ga izabrali:',
	'LBL_FOUND_OPTIMUM_MSG'	=> '<br>Nađena optimalna podešavanja. Pritisnite dugme ispod da bi se primenila na Vaše mail nalog.',
	'LBL_FROM_ADDR'			=> 'Adresa "Pošiljaoca"',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "Email adresa koja je data ovde se možda neće pojaviti u adresama \"Pošiljaoca\" poslatog emaila zbog resrtikcija mail servis provajdera. U ovakvim okolnostima, biće korišćena email adresa koja je definisana u polju Servera odlazne pošte.",
	'LBL_FROM_NAME_ADDR'	=> 'Ime/Email pošiljaoca',
	'LBL_FROM_NAME'			=> 'Ime "Pošiljaoca"',
	'LBL_GROUP_QUEUE'		=> 'Dodeljeno grupi',
    'LBL_HOME'              => 'Početna strana',
	'LBL_LIST_MAILBOX_TYPE'	=> 'Upotreba Mail naloga',
	'LBL_LIST_NAME'			=> 'Ime:',
	'LBL_LIST_GLOBAL_PERSONAL'			=> 'Tip',
	'LBL_LIST_SERVER_URL'	=> 'Mail server',
	'LBL_LIST_STATUS'		=> 'Status',
	'LBL_LOGIN'				=> 'Korisničko ime',
	'LBL_MAILBOX_DEFAULT'	=> 'PRIMLJENO',
	'LBL_MAILBOX_SSL_DESC'	=> 'Koristi SSL pri povezivanju. Ako to ne radi proverite da li vaša PHP instalacija uključuje  "--with-imap-ssl"  u konfiguraciji.',
	'LBL_MAILBOX_SSL'		=> 'Koristi SSL',
	'LBL_MAILBOX_TYPE'		=> 'Moguće akcije',
	'LBL_DISTRIBUTION_METHOD' => 'Metod distribuiranja',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Novi šablon automatskog odgovora za slučaj',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Izaberite automatski odgovor za obaveštavanje email pošiljaoca da je slučaj kreiran. Email sadrži broj slučaja u naslovnoj liniji koja odgovara podešavanju Makroa za slučaj. Ovaj odgovor se šalje samo kada je primljen prvi email od pošiljaoca.',
	'LBL_MAILBOX'			=> 'Nadgledan folder',
	'LBL_TRASH_FOLDER'		=> 'Folder za otpatke',
	'LBL_GET_TRASH_FOLDER'	=> 'Dodaj folder za otpatke',
	'LBL_SENT_FOLDER'		=> 'Folder za poslate',
	'LBL_GET_SENT_FOLDER'	=> 'Dodaj folder za poslate',
	'LBL_SELECT'				=> 'Izaberi',
	'LBL_MARK_READ_DESC'	=> 'Označi poruke koje su pročitane na mail serveru pri uvozu; ne briši.',
	'LBL_MARK_READ_NO'		=> 'Obeležen Email je obrisan nakon uvoza',
	'LBL_MARK_READ_YES'		=> 'Email je ostao na serveru nakon uvoza',
	'LBL_MARK_READ'			=> 'Ostavi poruke na serveru',
	'LBL_MAX_AUTO_REPLIES'	=> 'Broj automatskih odgovora',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> 'Podesite maksimalan broj automatskih odgovora za slanje na jedinstvenu email adresu u toku 24 sata.',
	'LBL_PERSONAL_MODULE_NAME' => 'Lični Email Nalog',
	'LBL_PERSONAL_MODULE_NAME_SINGULAR' => 'Lični Email Nalog',
	'LBL_CREATE_CASE'      => 'Kreiraj slučaj iz Email-a',
	'LBL_CREATE_CASE_HELP'  => 'Odaberite da automatski napravite zapise slučajeva u Sugar-u iz dolaznih email poruka.',
	'LBL_MODULE_NAME'		=> 'Grupni Mail nalog',
	'LBL_MODULE_NAME_SINGULAR' => 'Grupni Mail nalog',
	'LBL_BOUNCE_MODULE_NAME' => 'Poštansko sanduče za odbijenu poštu',
	'LBL_MODULE_TITLE'		=> 'Dolazni Email',
	'LBL_NAME'				=> 'Ime',
    'LBL_NONE'              => 'Nijedna',
	'LBL_NO_OPTIMUMS'		=> 'Ne mogu da nađem optimalno. Molim, proverite Vaša podešavanja i pokušajte ponovo.',
	'LBL_ONLY_SINCE_DESC'	=> 'Kada koristi POP3, PHP ne može da filtrira Nove/Nepročitane poruke.  Ova oznaka omogućava davanje zahteva za proveru svih poruka od trenutka kada je poslednji put povučen email nalog. Ovim će značajno biti poboljšane performance ako Vaš mail server ne podržava IMAP.',
	'LBL_ONLY_SINCE_NO'		=> 'Ne. Proveri ponovo sve Email-ove na mail serveru.',
	'LBL_ONLY_SINCE_YES'	=> 'Da.',
	'LBL_ONLY_SINCE'		=> 'Uvezi samo one nakon poslednje provere',
	'LBL_OUTBOUND_SERVER'	=> 'Odlazni Mail server',
	'LBL_PASSWORD_CHECK'	=> 'Provera lozinke',
	'LBL_PASSWORD'			=> 'Lozinka',
	'LBL_POP3_SUCCESS'		=> 'POP3 konekciju je uspešno testirana.',
	'LBL_POPUP_FAILURE'		=> 'Testiranje konekcije je neuspešno. Greška je prikazana ispod.',
	'LBL_POPUP_SUCCESS'		=> 'Testiranje konekcije je uspešno. Vaša podešavanja su u redu.',
	'LBL_POPUP_TITLE'		=> 'Test Podešavanja',
	'LBL_GETTING_FOLDERS_LIST' 		=> 'Preuzimanje liste Foldera',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> 'Izaberite prihvaćen(e) folder(e)',
	'LBL_SELECT_TRASH_FOLDERS' 		=> 'Izaberite Folder za Otpatke',
	'LBL_SELECT_SENT_FOLDERS' 		=> 'Izaberite Folder za Poslate',
	'LBL_DELETED_FOLDERS_LIST' 		=> 'Sledeći folder(i) %s ili ne postoje ili su obrisani sa servera',
	'LBL_PORT'				=> 'Port mail servera',
	'LBL_QUEUE'				=> 'Red naloga elektronske pošte',
	'LBL_REPLY_NAME_ADDR'	=> 'Ogovori na ime/Email',
	'LBL_REPLY_TO_NAME'		=> 'Ime primaoca',
	'LBL_REPLY_TO_ADDR'		=> 'Adresa primaoca',
	'LBL_SAME_AS_ABOVE'		=> 'Koristi ime/adresu pošiljaoca',
	'LBL_SAVE_RAW'			=> 'Sačuvaj izvorni oblik',
	'LBL_SAVE_RAW_DESC_1'	=> 'Odaberite "Da" ako želite da sačuvate izvorni oblik za svak i uveženi email.',
	'LBL_SAVE_RAW_DESC_2'	=> 'Veliki prilozi mogu da uzrokuju kvarove u konzervativnim ili neispravno konfigurisanim bazama podataka.',
	'LBL_SERVER_OPTIONS'	=> 'Napredna podešavanja',
	'LBL_SERVER_TYPE'		=> 'Protokol mail servera',
	'LBL_SERVER_URL'		=> 'Adresa mail servera',
	'LBL_SSL_DESC'			=> 'Ako Vaš mail server podržava SSL, uključivanjem ove opcije pri uvozu email poruka uključiće se SSL.',
	'LBL_ASSIGN_TO_TEAM_DESC' => 'Izabrani tim ima pristup mail nalogu.',
	'LBL_SSL'				=> 'Koristi SSL',
	'LBL_STATUS'			=> 'Status',
	'LBL_SYSTEM_DEFAULT'	=> 'Sistemski Podrazumevano',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> 'Test [Alt+T]',
	'LBL_TEST_SETTINGS'		=> 'Test Podešavanja',
	'LBL_TEST_SUCCESSFUL'	=> 'Veza je uspešno uspostavljana.',
	'LBL_TEST_WAIT_MESSAGE'	=> 'Samo trenutak, molim...',
	'LBL_TLS_DESC'			=> 'Koristi TLS pri povezivanju na mail server - koristite ga samo ako Vaš mail server podržava ovaj protokol.',
	'LBL_TLS'				=> 'Koristi TLS',
	'LBL_WARN_IMAP_TITLE'	=> 'Dolazni Email je onemogućen',
	'LBL_WARN_IMAP'			=> 'Upozorenja:',
	'LBL_WARN_NO_IMAP'		=> 'Dolazni Email <b>ne može</b> da funkcioniše bez IMP c-client biblioteke uključene/kompajlirane sa PHP modulom. Molimo da kontaktirate Vašeg administratora kako bi rešili ovaj problem.',

	'LNK_CREATE_GROUP'		=> 'Kreiraj novu grupu',
	'LNK_LIST_CREATE_NEW_GROUP'	 => 'Novi grupni Mail nalog',
	'LNK_LIST_CREATE_NEW_BOUNCE' => 'Novi nalog za obradu ododbijenih',
	'LNK_LIST_MAILBOXES'	=> 'Svi Mail nalozi',
	'LNK_LIST_QUEUES'		=> 'Svi redovi',
	'LNK_LIST_SCHEDULER'	=> 'Planeri',
	'LNK_LIST_TEST_IMPORT'	=> 'Testiraj Email uvoz',
	'LNK_NEW_QUEUES'		=> 'Kreiraj novi red',
	'LNK_SEED_QUEUES'		=> 'Početni redovi za timove',
	'LBL_GROUPFOLDER_ID'	=> 'Id broj grupnog foldera',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Dodeli grupnom folderu',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Dozvoli korisnicima da šalju email poruke koristeći ime i adresu "Pošiljaoca" kao odgovor na adresu.',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Kada je izabrana ova opcija , Ime i Adresa "Pošiljaoca" povezanog sa ovim grupnim mail nalogom će se pojaviti kao opcija za polje "Od" pri sastavljanju email poruka za korisnike koji imaju pristupgrupnom mail nalogu.',
    'LBL_STATUS_ACTIVE'     => 'Aktivan',
    'LBL_STATUS_INACTIVE'   => 'Neaktivan',
    'LBL_IS_PERSONAL' => 'lični',
    'LBL_IS_GROUP' => 'grupni',
    'LBL_ENABLE_AUTO_IMPORT' => 'Uvezi Email-ove automatski',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Upozorenje: Menjate vaše podešavanje za automatski unvoz što može rezultovati gubitkom podataka.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Upozorenje: Automatski uvoz mora biti omogućen pri automatskom kreiranju slučajeva.',
	'LBL_EDIT_LAYOUT' => 'Izmeni raspored' /*for 508 compliance fix*/,
);
?>
