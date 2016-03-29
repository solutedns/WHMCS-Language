<?php
/*
***********************************************

         *** SoluteDNS for WHMCS ***

Language file:			Italian
Created by:				SoluteDNS

Version:				0.2.4
Date:					30-03-2016
Distribution Package:	16002

Copyright (C) NetDistrict 2016
All Rights Reserved
***********************************************
Have language improvements? Please let us know!
***********************************************
*/

####################
// CLIENT LANGUAGE //
####################

// Menu
$_ADDONLANG['client_manage'] = "Gestione";
$_ADDONLANG['client_overview'] = "Panoramica";
$_ADDONLANG['client_defaulttemplate'] = "Template di Default";
$_ADDONLANG['client_reversedns'] = "DNS inverso";
$_ADDONLANG['client_dnssec'] = "DNSsec";

// Titles
$_ADDONLANG['client_title'] = "Gestione DNS";
$_ADDONLANG['client_records'] = "Record";
$_ADDONLANG['client_dnsseckeys'] = "Chiavi di DNSsec";
$_ADDONLANG['client_dsrecords'] = "Record di DS";
$_ADDONLANG['client_deleterecord'] = "Elimina Record";
$_ADDONLANG['client_deletezone'] = "Elimina Zona";

// DNS Management
$_ADDONLANG['client_addrecord'] = "Aggiungi Record";
$_ADDONLANG['client_srvassistant'] = "Assistenza SRV";

$_ADDONLANG['client_name'] = "Nome";
$_ADDONLANG['client_type'] = "Tipo";
$_ADDONLANG['client_content'] = "Contenuto";
$_ADDONLANG['client_prio'] = "Prio";
$_ADDONLANG['client_ttl'] = "TTL";

$_ADDONLANG['client_loading'] = "Caricamento…";

$_ADDONLANG['client_minute'] = "minuto";
$_ADDONLANG['client_minutes'] = "minuti";
$_ADDONLANG['client_hour'] = "ora";
$_ADDONLANG['client_day'] = "giorno";

$_ADDONLANG['client_service'] = "Servizio";
$_ADDONLANG['client_protocol'] = "Protocollo";
$_ADDONLANG['client_priority'] = "Priorità";
$_ADDONLANG['client_weight'] = "Peso";
$_ADDONLANG['client_target'] = "Target";
$_ADDONLANG['client_port'] = "Porta";

// Zone Management
$_ADDONLANG['client_addnewzone'] = "Aggiungi nuova zona";
$_ADDONLANG['client_addupto'] = "Puoi aggiungere fino a";
$_ADDONLANG['client_none'] = "nessuno";
$_ADDONLANG['client_unlimited'] = "illimitato";
$_ADDONLANG['client_zones'] = "zona";
$_ADDONLANG['client_domain'] = "dominio";
$_ADDONLANG['client_status'] = "stato";

// Buttons
$_ADDONLANG['client_add'] = "Aggiungi";
$_ADDONLANG['client_delete'] = "Elimina";
$_ADDONLANG['client_cancel'] = "Annulla";
$_ADDONLANG['client_back'] = "Indietro";
$_ADDONLANG['client_activate'] = "Attiva";

// Text
$_ADDONLANG['client_text_deleterecord'] = "Sei sicuro di voler eliminare questo record?";
$_ADDONLANG['client_text_deletezone'] = "Sei sicuro di voler eliminare questa zona?";
$_ADDONLANG['client_text_templatedesc'] = "Per favore, usa &lt;domain&gt; come dominio. Questo tag sarà sostituita dal dominio corretto.";
$_ADDONLANG['client_text_activatedesc'] = "Puoi impostare un template di default che sarà utilizzato quando creerai una nuova zona o ordinerai la registrazione di un nuovo dominio senza servizi.";

// DNSsec
$_ADDONLANG['client_keytag'] = "Tag Chiave";
$_ADDONLANG['client_flag'] = "Flag";
$_ADDONLANG['client_algorithm'] = "Algoritmo";
$_ADDONLANG['client_publickey'] = "Chiave Pubblica";
$_ADDONLANG['client_digesttype'] = "Tipo di Digest";
$_ADDONLANG['client_digest'] = "Digest";

$_ADDONLANG['client_none_available'] = "Nulla di Disponibile";

// Reverse Management
$_ADDONLANG['client_ip'] = "IP";
$_ADDONLANG['client_hostname'] = "Nome Host";

// DataTables
$_ADDONLANG['client_entersearch'] = "Inserisci parola per ricerca...";

// DataTable Records
$_ADDONLANG['client_records_sEmptyTable'] = "Nessun Record Trovato";
$_ADDONLANG['client_records_sInfo'] = "Visualizzati _START_ alla _END_ dei _TOTAL_ record";
$_ADDONLANG['client_records_sInfoEmpty'] = "Sono visualizzati i record da 0 a 0 di 0 totali";
$_ADDONLANG['client_records_sInfoFiltered'] = "(da_MAX_ record totali filtrati)";
$_ADDONLANG['client_records_sInfoPostFix'] = "";
$_ADDONLANG['client_records_sInfoThousands'] = ",";
$_ADDONLANG['client_records_sLoadingRecords'] = "Caricamento...";
$_ADDONLANG['client_records_sProcessing'] = "Elaborazione...";
$_ADDONLANG['client_records_sZeroRecords'] = "Nessun Record Trovato";

// DatTable Table
$_ADDONLANG['client_table_sEmptyTable'] = "Nessun Dominio Trovato";
$_ADDONLANG['client_table_sInfo'] = "Visualizzati _START_ alla _END_ dei_TOTAL_ domini";
$_ADDONLANG['client_table_sInfoEmpty'] = "Sono visualizzati i domini da 0 a 0 di 0 totali";
$_ADDONLANG['client_table_sInfoFiltered'] = "(da _MAX_ domini totali filtrati)";
$_ADDONLANG['client_table_sInfoPostFix'] = "";
$_ADDONLANG['client_table_sInfoThousands'] = ",";
$_ADDONLANG['client_table_sLengthMenu'] = "Mostra _MENU_ inserimenti";
$_ADDONLANG['client_table_sLoadingRecords'] = "Caricamento...";
$_ADDONLANG['client_table_sProcessing'] = "Elaborazione...";
$_ADDONLANG['client_table_sSearch'] = "";
$_ADDONLANG['client_table_sZeroRecords'] = "Nessun Dominio Trovato";
$_ADDONLANG['client_table_sFirst'] = "Primo";
$_ADDONLANG['client_table_sLast'] = "Ultimo";
$_ADDONLANG['client_table_sNext'] = "Successivo";
$_ADDONLANG['client_table_sPrevious'] = "Precedente";

// DatTable Reverse
$_ADDONLANG['client_reverse_sEmptyTable'] = "Nessun Indirizzo IP Trovato";
$_ADDONLANG['client_reverse_sInfo'] = "Visualizzati _START_alla _END_ di _TOTAL_ Indirizzi IP";
$_ADDONLANG['client_reverse_sInfoEmpty'] = "Sono visualizzati gli Indirizzi IP da 0 a 0 di 0 totali";
$_ADDONLANG['client_reverse_sInfoFiltered'] = "(da _MAX_ Indirizzi totali IP filtrati)";
$_ADDONLANG['client_reverse_sInfoPostFix'] = "";
$_ADDONLANG['client_reverse_sInfoThousands'] = ",";
$_ADDONLANG['client_reverse_sLengthMenu'] = "Mostra _MENU_ inserimenti";
$_ADDONLANG['client_reverse_sLoadingRecords'] = "Caricamento...";
$_ADDONLANG['client_reverse_sProcessing'] = "Elaborazione...";
$_ADDONLANG['client_reverse_sSearch'] = "";
$_ADDONLANG['client_reverse_sZeroRecords'] = "Nessun Indirizzo IP Trovato";
$_ADDONLANG['client_reverse_sFirst'] = "Primo";
$_ADDONLANG['client_reverse_sLast'] = "Ultimo";
$_ADDONLANG['client_reverse_sNext'] = "Successivo";
$_ADDONLANG['client_reverse_sPrevious'] = "Precedente";

// Access messages
$_ADDONLANG['client_title_maintenance'] = "Gestione DNS non disponibile!";
$_ADDONLANG['client_desc_maintenance'] = "Gestione DNS temporaneamente non disponibile per manutenzione. Per favore riprova più tardi.";

$_ADDONLANG['client_title_pdnserror'] = "Impossibile modificare le impostazioni del DNS!";
$_ADDONLANG['client_desc_pdnserror'] = "Al momento non puoi modificare le impostazioni del DNS per il tuo dominio. <br/>Per favore, riprova più tardi. Se il problema persiste, per favore contatta l'assistenza.";
$_ADDONLANG['client_desc_pdnserror2'] = "Al momento non puoi modificare nessuna impostazione del DNS per il tuo account. Per favore, riprova più tardi. Se il problema persiste, per favore contatta l'assistenza.";

$_ADDONLANG['client_title_permission'] = "Accesso negato!";
$_ADDONLANG['client_desc_permission'] = "Non hai i permessi necessari per accedere a questa zona!";
$_ADDONLANG['client_slavezone_error'] = "Sembra che quest'zona sia un'zona slave, che non può essere modificata! Se pensi che ci sia un errore contatta l'assistenza.";


####################
// ADMIN LANGUAGE //
####################

$_ADDONLANG['admin_eula'] = "EULA";
$_ADDONLANG['admin_eula_long'] = "End User License Agreement";
$_ADDONLANG['admin_eula_missing'] = "Il file EULA sembra essere mancante, per favore carica o ricarica i file di add-on per continuare.";

$_ADDONLANG['admin_menu_overview'] = "Panoramica";
$_ADDONLANG['admin_menu_templates'] = "Template";
$_ADDONLANG['admin_menu_settings'] = "Impostazioni";
$_ADDONLANG['admin_menu_records'] = "Record";
$_ADDONLANG['admin_menu_accessibility'] = "Accessibilità";
$_ADDONLANG['admin_menu_automation'] = "Automazione";
$_ADDONLANG['admin_menu_assignment'] = "Assegnazione";
$_ADDONLANG['admin_menu_handling'] = "Gestione";
$_ADDONLANG['admin_menu_nameservers'] = "Nameserver";
$_ADDONLANG['admin_menu_system'] = "Sistema";
$_ADDONLANG['admin_menu_tools'] = "Strumenti";
$_ADDONLANG['admin_menu_accesscontrol'] = "Controllo di Accesso";
$_ADDONLANG['admin_menu_logs'] = "Log";
$_ADDONLANG['admin_menu_license'] = "Licenza";

$_ADDONLANG['admin_help'] = "Aiuto";
$_ADDONLANG['admin_back'] = "Indietro";

$_ADDONLANG['admin_yes'] = "Sì";
$_ADDONLANG['admin_no'] = "No";
$_ADDONLANG['admin_never'] = "Mai";

$_ADDONLANG['admin_add'] = "Aggiungi";
$_ADDONLANG['admin_apply'] = "Applica";
$_ADDONLANG['admin_delete'] = "Elimina";
$_ADDONLANG['admin_cancel'] = "Annulla";
$_ADDONLANG['admin_close'] = "Chiudi";
$_ADDONLANG['admin_import'] = "Importa";
$_ADDONLANG['admin_assign'] = "Assegna";
$_ADDONLANG['admin_check'] = "Controlla";
$_ADDONLANG['admin_edit'] = "Modifica";
$_ADDONLANG['admin_continue'] = "Continua";
$_ADDONLANG['admin_updatenow'] = "Aggiorna Ora";
$_ADDONLANG['admin_dismiss'] = "Scarta";
$_ADDONLANG['admin_none'] = "Nulla";
$_ADDONLANG['admin_index'] = "Indice";

$_ADDONLANG['admin_savechanges'] = "Salva Modifiche";

// Statusses
$_ADDONLANG['admin_cancelled'] = "Annullato";
$_ADDONLANG['admin_terminated'] = "Terminato";
$_ADDONLANG['admin_expired'] = "Scaduto";
$_ADDONLANG['admin_suspended'] = "Sospeso";
$_ADDONLANG['admin_fraud'] = "Frode";

// Accessibility
$_ADDONLANG['admin_accessibility_title_accessibility'] = "Accessibilità";
$_ADDONLANG['admin_accessibility_title_clientzones'] = "Zona Cliente";
$_ADDONLANG['admin_accessibility_title_menu'] = "Menu Cliente";
$_ADDONLANG['admin_accessibility_title_admin'] = "Amministratore";

$_ADDONLANG['admin_accessibility_option_disableprimarymenu'] = "Disabilita Menu Primario";
$_ADDONLANG['admin_accessibility_option_disablesecondarymenu'] = "Disabilita Menu di Gestione";
$_ADDONLANG['admin_accessibility_option_hidesoa'] = "Nascondi Record SOA";
$_ADDONLANG['admin_accessibility_option_disablens'] = "Disabilita Record NS";
$_ADDONLANG['admin_accessibility_option_presetttl'] = "Usa il campo TTL preimpostato";
$_ADDONLANG['admin_accessibility_option_hideassist'] = "Nascondi Assistente DNS Cliente";
$_ADDONLANG['admin_accessibility_option_dnspagination'] = "Paginazione DNS";

$_ADDONLANG['admin_accessibility_option_clientzones'] = "Abilita Zona Cliente";
$_ADDONLANG['admin_accessibility_option_clienttemplate'] = "Abilita Template Cliente";
$_ADDONLANG['admin_accessibility_option_clienthealth'] = "Abilita Stato di Salute";
$_ADDONLANG['admin_accessibility_option_clientreverse'] = "Gestione Inversi";
$_ADDONLANG['admin_accessibility_option_zonelimit'] = "Limite di Zona";

$_ADDONLANG['admin_accessibility_option_adminreverse'] = "Abilita Inversi";
$_ADDONLANG['admin_accessibility_option_adminhealth'] = "Icona Salute";

$_ADDONLANG['admin_accessibility_desc_disableprimarymenu'] = "Disabilita l'accesso alla gestione DNS nell'zona cliente del menu primario.";
$_ADDONLANG['admin_accessibility_desc_disablesecondarymenu'] = "Disabilita l'accesso alla gestione DNS nell'zona cliente del menu di gestione del dominio e pagine di dettagli dei prodotti.";
$_ADDONLANG['admin_accessibility_desc_hidesoa'] = "Nascondi il record SOA per gli utenti. Se mostri il record SOA sarà sempre disabilitato.";
$_ADDONLANG['admin_accessibility_desc_disablens'] = "Se spuntato, i record di nameserver saranno disabilitati per gli utenti.";
$_ADDONLANG['admin_accessibility_desc_presetttl'] = "Usa un menu dropdown per la preimpostazione del TTL invece che una casella di testo.";
$_ADDONLANG['admin_accessibility_desc_hideassist'] = "Spunta questa casella per nascondere il gestore di DNS per i tuoi clienti.";
$_ADDONLANG['admin_accessibility_desc_dnspagination'] = "Passa alla paginazione se la zona supera i record. (0=sempre)";

$_ADDONLANG['admin_accessibility_desc_clientzones'] = "Seleziona per abilitare la gestione di zona per i clienti.";
$_ADDONLANG['admin_accessibility_desc_clienttemplate'] = "Seleziona per abilitare il template di default per i clienti.";
$_ADDONLANG['admin_accessibility_desc_clienthealth'] = "Seleziona per abilitare l'icona dello stato di salute nell'zona clienti.";
$_ADDONLANG['admin_accessibility_desc_clientreverse'] = "Spunta per abilitare i clienti a gestire i nomi host inversi per indirizzi IP assegnati.";
$_ADDONLANG['admin_accessibility_desc_zonelimit'] = "Limita il numero massimo di zona consentite per i clienti. (0 = illimitato, -1 = nulla)";

$_ADDONLANG['admin_accessibility_desc_adminreverse'] = "Spunta per abilitare le zona inverse nell'zona di amministrazione.";
$_ADDONLANG['admin_accessibility_desc_adminhealth'] = "Mostra l'icona di salute nelle panoramiche dell'amministrazione del dominio.";

// Automation
$_ADDONLANG['admin_automation_title_zones'] = "Zona";
$_ADDONLANG['admin_automation_title_dnsmanagement'] = "Gestione DNS";
$_ADDONLANG['admin_automation_title_admin'] = "Amministratore";

$_ADDONLANG['admin_automation_option_create'] = "Crea zona in automatico";
$_ADDONLANG['admin_automation_option_maintenance'] = "Manutenzione automatica";
$_ADDONLANG['admin_automation_option_delete'] = "Elimina zona in automatico";
$_ADDONLANG['admin_automation_option_todo'] = "Aggiungi elementi da-fare in automatico";

$_ADDONLANG['admin_automation_option_enabledns'] = "Abilita in automatico la gestione DNS";
$_ADDONLANG['admin_automation_option_health'] = "Abilita Sistema di Salute";

$_ADDONLANG['admin_automation_option_products'] = "Abilita DNS per i prodotti";

$_ADDONLANG['admin_automation_desc_create'] = "Crea in automatico una nuova zona per nuovi ordini di dominio dopo il checkout dalla sezione di shopping.";
$_ADDONLANG['admin_automation_desc_maintenance'] = "Mantieni in automatico l'indice locale.";
$_ADDONLANG['admin_automation_desc_delete'] = "Elimina in automatico le zona di domini e prodotti con le condizioni selezionate.";
$_ADDONLANG['admin_automation_desc_deletewhmcs'] = "Quando un dominio / prodotto viene rimosso in WHMCS.";

$_ADDONLANG['admin_automation_desc_enabledns'] = "Abilita in automatico la gestione DNS WHMCS per nuove zona create.";
$_ADDONLANG['admin_automation_desc_health'] = "Spunta per abilitare il sistema di salute delle zona.";

$_ADDONLANG['admin_automation_desc_products'] = "Crea in automatico un'zona per i prodotti specificati con domini esterni.";

$_ADDONLANG['admin_automation_desc_todo'] = "Aggiungi in automatico elementi da-fare quando è richiesta l'attenzione dello staff.";

// Handling
$_ADDONLANG['admin_handling_title_product'] = "Gestione Prodotto";
$_ADDONLANG['admin_handling_title_registrar'] = "Gestione Registro";
$_ADDONLANG['admin_handling_title_nameserver'] = "Gestione Nameserver";

$_ADDONLANG['admin_handling_desc_selectcreated'] = "Seleziona i prodotti per i quali <u>dovrebbe essere</u> creata un'zona DNS.";
$_ADDONLANG['admin_handling_desc_selectignoreproduct'] = "Seleziona i prodotti per i quali <u>non dovrebbe essere</u> creata un'zona DNS per la sua registrazione o trasferimento di dominio associato.";
$_ADDONLANG['admin_handling_desc_selectignoreregistrar'] = "Seleziona i registri per i quali <u>non dovrebbe essere</u> creata un'zona DNS.";
$_ADDONLANG['admin_handling_desc_nameserver'] = "Configura in che modo le zona sono distribuite nei tuoi settori del nameserver.";

$_ADDONLANG['admin_handling_option_default'] = "Nameserver di Default";
$_ADDONLANG['admin_handling_desc_default'] = "Seleziona quale nameserver dovrebbe essere usato di default.";

$_ADDONLANG['admin_handling_option_distribution'] = "Distribuzione Zona";
$_ADDONLANG['admin_handling_desc_distribution'] = "Seleziona come le zona dovrebbero essere distribuite nei tuoi settori del nameserver.";
$_ADDONLANG['admin_handling_option_default'] = "Default";
$_ADDONLANG['admin_handling_option_equal'] = "Uguale";

$_ADDONLANG['admin_handling_dnsforproduct'] = "Il DNS per il prodotto non è abilitato. Per favore, abilita il DNS per i prodotti nelle impostazioni di automazione.";

// License
$_ADDONLANG['admin_title_licenseinfo'] = "Informazioni Licenza";
$_ADDONLANG['admin_title_licensesettings'] = "Impostazioni Licenza";

$_ADDONLANG['admin_license_product'] = "Prodotto";
$_ADDONLANG['admin_license_edition'] = "Edizione";
$_ADDONLANG['admin_license_status'] = "Stato";
$_ADDONLANG['admin_license_licensedto'] = "Autorizzato per";
$_ADDONLANG['admin_license_brandremoval'] = "Rimozione Brand";
$_ADDONLANG['admin_license_zonelimit'] = "Limite Zona";
$_ADDONLANG['admin_license_unlimited'] = "Illimitato";
$_ADDONLANG['admin_license_zones'] = "zona";
$_ADDONLANG['admin_license_addons'] = "Aggiunta";
$_ADDONLANG['admin_license_none'] = "Nulla";
$_ADDONLANG['admin_license_expires'] = "Scade";
$_ADDONLANG['admin_license_validdomains'] = "Domini validi";
$_ADDONLANG['admin_license_validips'] = "IP validi";
$_ADDONLANG['admin_license_validdirectory'] = "Cartella valida";

$_ADDONLANG['admin_license_licensekey'] = "Chiave di licenza";

// Logs
$_ADDONLANG['admin_logs_title_logs'] = "Log";
$_ADDONLANG['admin_logs_table_id'] = "ID";
$_ADDONLANG['admin_logs_table_log'] = "Log";
$_ADDONLANG['admin_logs_table_type'] = "Tipo";
$_ADDONLANG['admin_logs_table_date'] = "Data";
$_ADDONLANG['admin_logs_clearlogs'] = "Pulisci i Log";

// DNS Management
$_ADDONLANG['admin_manage_tab_records'] = "Record";
$_ADDONLANG['admin_manage_tab_dnssec'] = "DNSsec";
$_ADDONLANG['admin_manage_tab_health'] = "Salute";
$_ADDONLANG['admin_manage_tab_settings'] = "Impostazioni";

$_ADDONLANG['admin_manage_title_zone'] = "Zona";
$_ADDONLANG['admin_manage_title_client'] = "Cliente";
$_ADDONLANG['admin_manage_title_email'] = "Email";
$_ADDONLANG['admin_manage_title_dnsseckeys'] = "Chiavi di DNSsec";
$_ADDONLANG['admin_manage_title_dsrecords'] = "Record DS";
$_ADDONLANG['admin_manage_title_health'] = "Salute";
$_ADDONLANG['admin_manage_title_records'] = "Record";

$_ADDONLANG['admin_manage_title_actioncompleted'] = "Azione Completata";
$_ADDONLANG['admin_manage_title_actioncompleted_reload'] = "Ricaricamento chiavi di DNSsec completato.";

$_ADDONLANG['admin_manage_table_id'] = "ID";
$_ADDONLANG['admin_manage_table_keytag'] = "Tag Chiave";
$_ADDONLANG['admin_manage_table_flag'] = "Flag";
$_ADDONLANG['admin_manage_table_algorithm'] = "Algoritmo";
$_ADDONLANG['admin_manage_table_publickey'] = "Chiave Pubblica";
$_ADDONLANG['admin_manage_table_status'] = "Stato";
$_ADDONLANG['admin_manage_table_digesttype'] = "Tipo di Digest";
$_ADDONLANG['admin_manage_table_digest'] = "Digest";
$_ADDONLANG['admin_manage_table_log'] = "Log";
$_ADDONLANG['admin_manage_table_date'] = "Data";

$_ADDONLANG['admin_manage_name'] = "Nome";
$_ADDONLANG['admin_manage_type'] = "Tipo";
$_ADDONLANG['admin_manage_content'] = "Contenuto";
$_ADDONLANG['admin_manage_prio'] = "Prio";
$_ADDONLANG['admin_manage_ttl'] = "TTL";

$_ADDONLANG['admin_manage_service'] = "Servizio";
$_ADDONLANG['admin_manage_protocol'] = "Protocollo";
$_ADDONLANG['admin_manage_priority'] = "Priorità";
$_ADDONLANG['admin_manage_weight'] = "Peso";
$_ADDONLANG['admin_manage_target'] = "Target";
$_ADDONLANG['admin_manage_port'] = "Porta";

$_ADDONLANG['admin_manage_dnssec_addnewkey'] = "Aggiungi nuova chiave DNSsec";
$_ADDONLANG['admin_manage_dnssec_flag'] = "Flag";
$_ADDONLANG['admin_manage_dnssec_ksk'] = "KSK";
$_ADDONLANG['admin_manage_dnssec_zsk'] = "ZSK";
$_ADDONLANG['admin_manage_dnssec_bits'] = "Bit";
$_ADDONLANG['admin_manage_dnssec_algorithm'] = "Algoritmo";

$_ADDONLANG['admin_manage_health_recheck'] = "Ricontrolla Salute";

$_ADDONLANG['admin_manage_health_warning'] = "attenzione";
$_ADDONLANG['admin_manage_health_error'] = "errore";
$_ADDONLANG['admin_manage_health_noissues'] = "Nessun problema di salute conosciuto.";

$_ADDONLANG['admin_manage_records_addrecord'] = "Aggiungi Record";
$_ADDONLANG['admin_manage_records_srvassist'] = "Assistente SRV";

$_ADDONLANG['admin_manage_records_manage'] = "Gestisci";
$_ADDONLANG['admin_manage_records_applytemplate'] = "Applica Template";
$_ADDONLANG['admin_manage_records_selecttemplate'] = "Seleziona Template";
$_ADDONLANG['admin_manage_records_importzone'] = "Importa Zona";
$_ADDONLANG['admin_manage_records_exportzone'] = "Esporta Zona";
$_ADDONLANG['admin_manage_records_deleterecord'] = "Elimina Record";
$_ADDONLANG['admin_manage_records_deleteselected'] = "Elimina Selezionati";

$_ADDONLANG['admin_manage_text_deleterecord'] = "Sei sicuro di voler eliminare questo record?";
$_ADDONLANG['admin_manage_text_importzone'] = "Inserisci un file di zona da importare. I record importati saranno moderati dal sistema.";
$_ADDONLANG['admin_manage_text_importzoneoverwrite'] = "Sovrascrivi l'zona corrente, tutti i record saranno rimossi prima di essere importati.";

$_ADDONLANG['admin_manage_manage'] = "Gestisci";
$_ADDONLANG['admin_manage_edit'] = "Modifica";
$_ADDONLANG['admin_manage_delete'] = "Elimina";

$_ADDONLANG['admin_manage_minute'] = "minuto";
$_ADDONLANG['admin_manage_minutes'] = "minuti";
$_ADDONLANG['admin_manage_hour'] = "ora";
$_ADDONLANG['admin_manage_day'] = "giorno";

$_ADDONLANG['admin_manage_unknown'] = "Sconosciuto";

$_ADDONLANG['admin_isslave_title'] = "Zona Slave!";
$_ADDONLANG['admin_isslave_desc'] = "Questa è un'zona slave, non dovresti provare a modificare quest'zona perché potrebbe causare problemi di inconsistenza di DNS tra nameserver.";

$_ADDONLANG['admin_dnssec_add'] = "Aggiungi Chiave";
$_ADDONLANG['admin_dnssec_rectify'] = "Rettifica Zona";
$_ADDONLANG['admin_dnssec_check'] = "Controlla Stato";
$_ADDONLANG['admin_dnssec_nsec3'] = "Imposta NSEC3";
$_ADDONLANG['admin_dnssec_reset'] = "Reimposta DNSsec";
$_ADDONLANG['admin_dnssec_unset'] = "Azzera Impostazione DNSsec";
$_ADDONLANG['admin_dnssec_reload'] = "Ricarica Chiavi";

$_ADDONLANG['admin_loading_zone'] = "Caricamento zona...";

// Nameservers
$_ADDONLANG['admin_nameservers_title_primarydb'] = "Database Principale PowerDNS";
$_ADDONLANG['admin_nameservers_title_nameservers'] = "Nomiserver";
$_ADDONLANG['admin_nameservers_title_ssh2details'] = "Dati DNSsec SSH2";
$_ADDONLANG['admin_nameservers_title_dnssecoptions'] = "Opzioni DNSsec";

$_ADDONLANG['admin_nameservers_option_host'] = "Host";
$_ADDONLANG['admin_nameservers_option_port'] = "Porta";
$_ADDONLANG['admin_nameservers_option_user'] = "Utente";
$_ADDONLANG['admin_nameservers_option_password'] = "Password";
$_ADDONLANG['admin_nameservers_option_database'] = "Database";
$_ADDONLANG['admin_nameservers_option_zonetype'] = "Tipologia Zona";

$_ADDONLANG['admin_nameservers_option_nameserver1'] = "Nomeserver 1";
$_ADDONLANG['admin_nameservers_option_nameserver2'] = "Nomeserver 2";
$_ADDONLANG['admin_nameservers_option_nameserver3'] = "Nomeserver 3";
$_ADDONLANG['admin_nameservers_option_nameserver4'] = "Nomeserver 4";
$_ADDONLANG['admin_nameservers_option_nameserver5'] = "Nomeserver 5";
$_ADDONLANG['admin_nameservers_option_nameserver6'] = "Nomeserver 6";

$_ADDONLANG['admin_nameservers_option_useprivatekey'] = "Utilizza Chiave Privata";
$_ADDONLANG['admin_nameservers_option_privatekey'] = "Chiave Privata";

$_ADDONLANG['admin_nameservers_option_pdnsversion'] = "Versione PowerDNS";
$_ADDONLANG['admin_nameservers_option_enablednssec'] = "Attiva DNSsec";
$_ADDONLANG['admin_nameservers_option_autorectify'] = "Zona Autorettifica";
$_ADDONLANG['admin_nameservers_option_autoenablednssec'] = "Attivita automaticamente DNSsec";
$_ADDONLANG['admin_nameservers_option_setnsec3'] = "Imposta NSEC3";
$_ADDONLANG['admin_nameservers_option_showtoclient'] = "Mostra chiave al cliente";

$_ADDONLANG['admin_nameservers_desc_host'] = "Dominio o IP del server remoto MySQL contenente le Zone PowerDNS.";
$_ADDONLANG['admin_nameservers_desc_port'] = "La porta predefinita MySQL è 3306.";
$_ADDONLANG['admin_nameservers_desc_zonetype'] = "Seleziona la tipologia di zona di cui hai bisogno per il trasferimento di zona sul tuo nomeserver.";

$_ADDONLANG['admin_nameservers_desc_nameserver1'] = "Il nomeserver principale verrà anche usato nel registro SOA.";
$_ADDONLANG['admin_nameservers_desc_nameserver6'] = "Lascia campi vuoti extra se vengono usati meno nomiserver.";

$_ADDONLANG['admin_nameservers_desc_sshhost'] = "Dominio o IP  del server remoto contenenti le Zone PowerDNS.";
$_ADDONLANG['admin_nameservers_desc_sshport'] = "La porta Predefinita SSH è 22.";

$_ADDONLANG['admin_nameservers_desc_useprivatekey'] = "Spunta, per usare una chiave privata per accedere ad SSH invece di una password.";

$_ADDONLANG['admin_nameservers_desc_enablednssec'] = "Attiva assistenza DNSsec.";
$_ADDONLANG['admin_nameservers_desc_autorectify'] = "Le zone devono essere corrette per continuare ad operare.";
$_ADDONLANG['admin_nameservers_desc_autoenablednssec'] = "Proteggi Automaticamente le nuove zone create.";
$_ADDONLANG['admin_nameservers_desc_setnsec3'] = "Utilizza NSEC3 invece del predefinito NSEC.";
$_ADDONLANG['admin_nameservers_desc_showtoclient'] = "Mostra le chiavi DNSsec al cliente.";

$_ADDONLANG['admin_nameservers_error'] = "Errore dati";

$_ADDONLANG['admin_nameservers_add_title'] = "Aggiungi nuovo Nomeserver";
$_ADDONLANG['admin_nameservers_add_desc'] = "Qui puoi aggiungere un nuovo nomeserver. Assicurati di aggiungere solo nomiserver master. Slave server non dovrebbero essere aggiunti.";

$_ADDONLANG['admin_nameservers_index_title'] = "Nomeserver non presente nell'indice?";
$_ADDONLANG['admin_nameservers_index_desc'] = "Questo nomeserver non è stato trovato nell'indice. Potresti voler indicizzare il nomeserver.";

// Overview
$_ADDONLANG['admin_overview_title_domains']  = "Domini";
$_ADDONLANG['admin_overview_title_products']  = "Prodotti";
$_ADDONLANG['admin_overview_title_standalone']  = "Stand-alone";
$_ADDONLANG['admin_overview_title_reverse']  = "Inverti";
$_ADDONLANG['admin_overview_title_unassigned']  = "Non assegnati";

$_ADDONLANG['admin_overview_addzone']  = "Aggiungi Zona";
$_ADDONLANG['admin_overview_delete']  = "Elimina";
$_ADDONLANG['admin_overview_zone']  = "Zona";
$_ADDONLANG['admin_overview_domain']  = "Dominio";
$_ADDONLANG['admin_overview_product']  = "Prodotto";
$_ADDONLANG['admin_overview_reverse']  = "Inverti";
$_ADDONLANG['admin_overview_standalone']  = "Stand-alone";

$_ADDONLANG['admin_overview_zonetype']  = "Tipologia Zona";
$_ADDONLANG['admin_overview_selecttype']  = "Seleziona tipologia";
$_ADDONLANG['admin_overview_ipaddresszone']  = "Indirizzo IP o Nome Zona";
$_ADDONLANG['admin_overview_client']  = "Cliente";

$_ADDONLANG['admin_overview_table_id']  = "ID";
$_ADDONLANG['admin_overview_table_domain']  = "Domini";
$_ADDONLANG['admin_overview_table_status']  = "Stato";
$_ADDONLANG['admin_overview_table_date']  = "Data";

$_ADDONLANG['admin_overview_text_deletezone']  = "Sei sicuro di voler eliminare questo registro?";

$_ADDONLANG['admin_loading_data'] = "Caricamento dati dal server...";
$_ADDONLANG['admin_none_available'] = "Nessuno disponibile";

// Records
$_ADDONLANG['admin_records_title_allowed'] = "Record Consentiti";
$_ADDONLANG['admin_records_title_defaultsoa'] = "Record SOA di Default";
$_ADDONLANG['admin_records_title_limit'] = "Limita Record";

$_ADDONLANG['admin_records_option_allowedtypes'] = "Tipi di Record Consentiti";

$_ADDONLANG['admin_records_option_hostmaster'] = "Hostmaster";
$_ADDONLANG['admin_records_option_serial'] = "Seriale";
$_ADDONLANG['admin_records_option_refresh'] = "Aggiorna";
$_ADDONLANG['admin_records_option_retry'] = "Riprova";
$_ADDONLANG['admin_records_option_expire'] = "Scadenza";
$_ADDONLANG['admin_records_option_ttl'] = "TTL Minimo";

$_ADDONLANG['admin_records_option_recordlimit'] = "Limite Record";

$_ADDONLANG['admin_records_desc_hostmaster'] = "Aggiungi &lt;domain&gt; per usare il dominio relativo come hostmaster.";
$_ADDONLANG['admin_records_desc_serial'] = "Lascia questo di default se non sei sicuro di che effetto abbia!";

$_ADDONLANG['admin_records_desc_recordlimit'] = "Limita il numero massimo di record consentiti in un'zona (o=illimitati).";

$_ADDONLANG['admin_records_select_default'] = "Default (yyyymmddcc)";
$_ADDONLANG['admin_records_select_epoch'] = "Epoca(Unix time)";
$_ADDONLANG['admin_records_select_zero'] = "Orario dell'ultima modifica del record";

// Tools
$_ADDONLANG['admin_tools_title_tools'] = "Strumenti";
$_ADDONLANG['admin_tools_title_mutationtool'] = "Strumento mutazione";
$_ADDONLANG['admin_tools_title_dnssectool'] = "Strumento DNSsec";

$_ADDONLANG['admin_tools_startmutation'] = "Avvia Mutazione";
$_ADDONLANG['admin_tools_starttool'] = "Avvia Strumento";
$_ADDONLANG['admin_tools_server'] = "Server";
$_ADDONLANG['admin_tools_action'] = "Azione";

// System
$_ADDONLANG['admin_system_title_system'] = "Sistema";

$_ADDONLANG['admin_system_option_rectifyqueue'] = "Coda di Rettifica DNSsec";
$_ADDONLANG['admin_system_option_rectifycron'] = "Cron Rettifica DNSsec";
$_ADDONLANG['admin_system_option_index'] = "Indice";
$_ADDONLANG['admin_system_option_idn'] = "Supporto IDN";
$_ADDONLANG['admin_system_option_version'] = "Versione";
$_ADDONLANG['admin_system_option_maintenance'] = "Modalità Manutenzione";
$_ADDONLANG['admin_system_option_logging'] = "Log di Sistema";
$_ADDONLANG['admin_system_option_debug'] = "Log di Debug";

$_ADDONLANG['admin_system_desc_maintenance'] = "Spunta per abilitare la modalità manutenzione.";
$_ADDONLANG['admin_system_desc_logging'] = "Spunta per abilitare i log di sistema (solo processi di log automatizzati).";
$_ADDONLANG['admin_system_desc_debug'] = "Spunta per abilitare i log di debug per i task cron.";

$_ADDONLANG['admin_system_active'] = "Attivo";
$_ADDONLANG['admin_system_inactive'] = "Inattivo";
$_ADDONLANG['admin_system_inqueue'] = "In coda";
$_ADDONLANG['admin_system_lastrun'] = "Ultimo cron lanciato con task";
$_ADDONLANG['admin_system_idle'] = "Inutilizzato";
$_ADDONLANG['admin_system_running'] = "In esecuzione";
$_ADDONLANG['admin_system_reset'] = "Reimposta Cron";
$_ADDONLANG['admin_system_inindex'] = "Zona in indice.";
$_ADDONLANG['admin_system_checkupdates'] = "Cerca Aggiornamenti";

$_ADDONLANG['admin_system_text_runningtoolong'] = "Cron in esecuzione per troppo tempo?";

// Access Control
$_ADDONLANG['admin_access_title_accesscontrol'] = "Controllo Accesso";
$_ADDONLANG['admin_access_title_accesslevels'] = "Livelli Accesso";
$_ADDONLANG['admin_access_title_groupassignment'] = "Assegnazione Gruppo";
$_ADDONLANG['admin_access_fullaccess'] = "Pieno Accesso";
$_ADDONLANG['admin_access_zonemanagement'] = "Gestione Zona";
$_ADDONLANG['admin_access_level'] = "Livello";
$_ADDONLANG['admin_access_notassigned'] = "Non Assegnato";
$_ADDONLANG['admin_access_warning'] = "Controlla anche le impostazioni di Ruoli Amministratore WHMCS e Controllo di Accesso ai Moduli di Aggiunta.";

// Templates
$_ADDONLANG['admin_template_title_templates'] = "Template";
$_ADDONLANG['admin_template_title_template'] = "Template";
$_ADDONLANG['admin_template_title_settings'] = "Impostazioni";
$_ADDONLANG['admin_template_title_defaultip'] = "Indirizzi IP di Default";
$_ADDONLANG['admin_template_title_assignment'] = "Assegnazione Prodotto";
$_ADDONLANG['admin_template_title_ttl'] = "Impostazioni TTL";

$_ADDONLANG['admin_template_addtemplate'] = "Aggiungi Template";
$_ADDONLANG['admin_template_addnewtemplate'] = "Aggiungi Nuovo Template";
$_ADDONLANG['admin_template_templatename'] = "Nome Template";
$_ADDONLANG['admin_template_deletetemplate'] = "Elimina Template";
$_ADDONLANG['admin_template_unnamed'] = "Non Nominato";

$_ADDONLANG['admin_template_table_id'] = "ID";
$_ADDONLANG['admin_template_table_name'] = "Nome";
$_ADDONLANG['admin_template_table_type'] = "Tipo";

$_ADDONLANG['admin_template_text_deletetemplate'] = "Sei sicuro di voler eliminare questo template?";

$_ADDONLANG['admin_template_option_defaultipv4'] = "IPv4 di Default";
$_ADDONLANG['admin_template_option_defaultipv6'] = "IPv6 di Default";
$_ADDONLANG['admin_template_option_assignedproducts'] = "Prodotti assegnati";
$_ADDONLANG['admin_template_option_defaultttl'] = "TTL di Default";
$_ADDONLANG['admin_template_option_soattl'] = "TTL di SOA";
$_ADDONLANG['admin_template_option_nsttl'] = "TTL di NS";

$_ADDONLANG['admin_template_desc_defaultipv4'] = "Per l'etichetta: &lt;default-ipv4&gt;.";
$_ADDONLANG['admin_template_desc_defaultipv6'] = "Per l'etichetta: &lt;default-ipv6&gt;.";

$_ADDONLANG['admin_template_desc_assignedproducts'] = "I prodotti possono essere selezionati solo quando non sono utilizzati per un altro template. Puoi selezionare più prodotti.";
$_ADDONLANG['admin_template_desc_cannotassign'] = "Il prodotto non può essere impostato per il template di default.";
$_ADDONLANG['admin_template_desc_ttl'] = "Lascia vuoto per il valore TTL di default.";

// Console
$_ADDONLANG['admin_console_title_updater'] = "Aggiornatore";
$_ADDONLANG['admin_console_title_mutation'] = "Strumento di Mutazione";
$_ADDONLANG['admin_console_title_dnssec'] = "Strumento DNSsec";
$_ADDONLANG['admin_console_title_index'] = "Indice Nameserver";

// Admin Messages
$_ADDONLANG['admin_msg_rde_title'] = "Problema Database Remoto";
$_ADDONLANG['admin_msg_rde_desc'] = "C'è un problema con un database remoto. Controlla le impostazioni del tuo database di nameserver!";

$_ADDONLANG['admin_msg_ssherror_title'] = "Si è verificato un Errore SSH";
$_ADDONLANG['admin_msg_ssherror_desc'] = "C'è un errore con la connessione SSH. Controlla le impostazioni del tuo nameserver SSH!";

$_ADDONLANG['admin_msg_sshsuccess_title'] = "Connessione SSH Stabilita";
$_ADDONLANG['admin_msg_sshsuccess_desc'] = "Una connessione SSH con il server è stata stabilita correttamente.";

$_ADDONLANG['admin_msg_invalid_request_title'] = "Richiesta Non Valida";
$_ADDONLANG['admin_msg_invalid_request_desc'] = "Il sistema non può elaborare la tua richiesta in quanto sembra non essere valida.";

$_ADDONLANG['admin_msg_invalid_license_title'] = "Funzione Non Autorizzata";
$_ADDONLANG['admin_msg_invalid_license_desc'] = "La funzione richiesta non può essere completata in quanto non autorizzata per la tua licenza.";

$_ADDONLANG['admin_msg_maintenance_title'] = "Modalità Manutenzione Attivata";
$_ADDONLANG['admin_msg_maintenance_desc'] = "La modalità manutenzione è attiva. La Gestione DNS per i clienti è disabilitata.";

$_ADDONLANG['admin_msg_cron_reset_title'] = "Reimpostazione Cron Completata";
$_ADDONLANG['admin_msg_cron_reset_desc'] = "Lo stato di rettifica cron è stato reimpostato correttamente.";

$_ADDONLANG['admin_msg_update_title'] = "Nuovo Aggiornamento Disponibile";
$_ADDONLANG['admin_msg_update_desc'] = "Un nuovo aggiornamento v%s (%h) è ora disponibile. Puoi scaricare il pacchetto di aggiornamento dall <a href=\"https://ssc.netdistrict.net\">area clienti</a>.";

$_ADDONLANG['admin_msg_update_dismiss_title'] = "Update Dismesso";
$_ADDONLANG['admin_msg_update_dismiss_desc'] = "La notifica di aggiornamento è stata dismessa.";

$_ADDONLANG['admin_msg_update_check_title'] = "Controllo Aggiornamenti Completato";
$_ADDONLANG['admin_msg_update_check_desc'] = "Il sistema ho cercato aggiornamenti.";

$_ADDONLANG['admin_msg_nozone_title'] = "L'zona non può essere trovata!";
$_ADDONLANG['admin_msg_nozone_desc'] = "Quest'zona non sembra essere assegnata e potrebbe non esistere sul nameserver.";

$_ADDONLANG['admin_msg_clearlogs_title'] = "Log Puliti Correttamente!";
$_ADDONLANG['admin_msg_clearlogs_desc'] = "Tutti i log SoluteDNS sono stati puliti correttamente.";


#####################
// GLOBAL LANGUAGE //
#####################

// Titles
$_ADDONLANG['global_title_system_error'] = "Impossibile modificare le impostazioni del DNS!";
$_ADDONLANG['global_title_system_permission'] = "Accesso negato!";
$_ADDONLANG['global_title_system_invalid'] = "Richiesta non valida";
$_ADDONLANG['global_title_unauthorized'] = "Richiesta non autorizzata";

$_ADDONLANG['global_title_dns_record_edited'] = "Il Record è stato modificato!";
$_ADDONLANG['global_title_dns_record_added'] = "Il Record è stato aggiunto!";
$_ADDONLANG['global_title_dns_record_deleted'] = "Il Record è stato eliminato!";
$_ADDONLANG['global_title_dns_record_limit'] = "Hai raggiunto il numero massimo di record!";
$_ADDONLANG['global_title_dns_zone_limit'] = "Hai raggiunto il numero massimo di zona!";
$_ADDONLANG['global_title_dns_error'] = "Impossibile effettuare modifiche";
$_ADDONLANG['global_title_dns_invalid_hostname'] = "Nome Host non valido";
$_ADDONLANG['global_title_dns_invalid_domain'] = "Dominio non valido";
$_ADDONLANG['global_title_dns_reverse_updated'] = "Nome Host Inverso Aggiornato";
$_ADDONLANG['global_title_dns_zone_exists'] = "Zona non disponibile";
$_ADDONLANG['global_title_dns_zone_created'] = "Zona Creata";
$_ADDONLANG['global_title_dns_zone_unable_delete'] = "Impossibile Eliminare l'Zona";
$_ADDONLANG['global_title_dns_zone_exception_delete'] = "Zona Eliminata con Eccezione";
$_ADDONLANG['global_title_dns_zone_deleted'] = "Zona Eliminata";
$_ADDONLANG['global_title_dns_zone_imported'] = "Zona Importata";

$_ADDONLANG['global_title_template_applied'] = "Template Applicato";

// Descriptions
$_ADDONLANG['global_desc_system_dbnotavailable'] = "Al momento non puoi modificare le impostazioni del DNS per il tuo dominio. Per favore, riprova più tardi. Se il problema persiste, per favore contatta l'assistenza.";
$_ADDONLANG['global_desc_system_dbnotavailable_admin'] = "Database di Nameserver non disponibile, impossibile effettuare modifiche";
$_ADDONLANG['global_desc_system_slavezone'] = "Sembra che quest'zona sia un'zona slave, che non può essere modificata! Se pensi che ci sia un errore contatta l'assistenza.";
$_ADDONLANG['global_desc_system_permission'] = "Non hai i permessi necessari per accedere a questa zona.";
$_ADDONLANG['global_desc_system_auth'] = "Sembra che tu non sia autorizzato ad effettuare modifiche a quest'zona.";
$_ADDONLANG['global_desc_system_invalid'] = "Il sistema non può elaborare la tua richiesta perché sembra che non sia valida.";
$_ADDONLANG['global_desc_system_invalid_record'] = "Il sistema non può processare la tua richiesta perché questo tipo di record non è consentito.";
$_ADDONLANG['global_desc_unauthorized'] = "Il sistema non può elaborare la tua richiesta perché sembra che non sia autorizzata.";

$_ADDONLANG['global_desc_dns_record_edited'] = "Modifiche ai record salvate correttamente.";
$_ADDONLANG['global_desc_dns_record_added'] = "Il nuovo record è stato aggiunto correttamente.";
$_ADDONLANG['global_desc_dns_record_deleted'] = "Il record è stato eliminato correttamente.";
$_ADDONLANG['global_desc_dns_record_limit'] = "Il record attualmente permesso in un'zona è: ";
$_ADDONLANG['global_desc_dns_zone_system_limit'] = "Il sistema non può aggiungere ulteriori zona.";
$_ADDONLANG['global_desc_dns_zone_client_limit'] = "Hai raggiunto il massimo numero di zona consentite per il tuo account.";
$_ADDONLANG['global_desc_dns_invalid_hostname'] = "Per favore, inserisci un nome host valido.";
$_ADDONLANG['global_desc_dns_invalid_domain'] = "Per favore, inserisci un dominio valido.";
$_ADDONLANG['global_desc_dns_reverse_updated'] = "Il nome host inverso è stato aggiornato.";
$_ADDONLANG['global_desc_dns_zone_exists'] = "L'zona non è disponibile perché è già in uso.";
$_ADDONLANG['global_desc_dns_zone_created'] = "La nuova zona è stata creata correttamente.";
$_ADDONLANG['global_desc_dns_zone_unable_delete'] = "Il sistema non è stato in grado di eliminare questa zona perché non è stata trovata nel nameserver.";
$_ADDONLANG['global_desc_dns_zone_deleted'] = "Zona eliminata correttamente.";
$_ADDONLANG['global_desc_dns_zone_imported'] = "Importazione zona completata. I record sono stati moderati dal sistema.";

$_ADDONLANG['global_desc_template_applied'] = "Il template è stato applicato correttamente.";

// DNS Validation
$_ADDONLANG['global_validate_dns_service_unavailable'] = "Servizio non disponibile!";	
$_ADDONLANG['global_validate_dns_zone_not_found'] = "Zona non trovata. Impossibile elaborare la richiesta.";
$_ADDONLANG['global_validate_dns_no_records_in_zone'] = "Nessun record trovato per quest'zona.";
$_ADDONLANG['global_validate_dns_no_dnssec_for_zone'] = "Nessuna chiave DNSsec trovata per quest'zona.";

$_ADDONLANG['global_validate_dns_record_not_found'] = "Il record non è stato trovato.";
$_ADDONLANG['global_validate_dns_record_collision'] = "Diversi record trovati, impossibile completare la richiesta.";
$_ADDONLANG['global_validate_dns_record_no_priority'] = "Il tipo di record richiede che specifichi una priorità numerica.";
$_ADDONLANG['global_validate_dns_record_invalid_priority'] = "Il tipo di record richiede che specifichi una priorità numerica.";

$_ADDONLANG['global_validate_dns_no_database'] = "Impossibile convalidare. Connessione al database non disponibile.";
$_ADDONLANG['global_validate_dns_domain_not_in_name'] = "Il campo nome deve contenere il nome del dominio.";
$_ADDONLANG['global_validate_dns_type_empty'] = "Il tipo di campo deve essere specificato.";
$_ADDONLANG['global_validate_dns_invalid_type'] = "Il tipo di campo non è riconosciuto.";
$_ADDONLANG['global_validate_dns_invalid_ttl'] = "Il valore di TTL deve essere numerico.";
$_ADDONLANG['global_validate_dns_content_too_long'] = "Il valore inserito è troppo lungo e non può contenere più di 4096 caratteri.";

$_ADDONLANG['global_validate_dns_invalid_ipv4'] = "L'indirizzo IPv4 non sembra essere valido.";
$_ADDONLANG['global_validate_dns_invalid_ipv6'] = "L'indirizzo IPv6 non sembra essere valido. Gli indirizzi IPv4 in forma IPv6 non sono supportati.";

$_ADDONLANG['global_validate_dns_invalid_not_quoted'] = "Il commento deve essere quotato (\").";

$_ADDONLANG['global_validate_dns_invalid_fqhn'] = "Il tipo di record deve contenere un nome host valido, non terminare con un punto (.).";
$_ADDONLANG['global_validate_dns_invalid_fqdn'] = "Il tipo di record deve contenere un dominio valido, non terminare con un punto (.).";

$_ADDONLANG['global_validate_dns_invalid_arpa'] = "Nome inverso non valido.";
$_ADDONLANG['global_validate_dns_not_unique'] = "Sono presenti record simili.";
$_ADDONLANG['global_validate_dns_non_alias_target'] = "Non puoi associare un record NS o MX a un record CNAME.";

$_ADDONLANG['global_validate_dns_tlsa_parts_missing'] = htmlentities("Un record TLSA deve contenere: <usage> <selector> <type> <fingeprint>.");
$_ADDONLANG['global_validate_dns_tlsa_invalid_0_part'] = "Deve essere fornito un campo di utilizzo tra 0 (PKIX-TA), 1 (PKIX-EE), 2 (DANE-TA) o 3 (DANE-EE).";
$_ADDONLANG['global_validate_dns_tlsa_invalid_1_part'] = "Deve essere fornito un campo selettore tra 0 (Match full certificate) o 1 (Match only SubjectPublicKeyInfo).";
$_ADDONLANG['global_validate_dns_tlsa_invalid_2_part'] = "Deve essere fornito un campo di associazione tra 0 (Exact match), 1 (SHA-256 hash) or 2 (SHA-512 hash).";
$_ADDONLANG['global_validate_dns_tlsa_invalid_3_part'] = "Deve essere fornita una impronta digitale SHA-256 con 64 caratteri ASCII esadecimali.";
$_ADDONLANG['global_validate_dns_tlsa_invalid_4_part'] = "Deve essere fornita una impronta digitale SHA-512 con 128 caratteri ASCII esadecimali.";

$_ADDONLANG['global_validate_dns_naptr_parts_missing'] = htmlentities("Un record NAPTR deve contenere (incluse le quote e il punto finale) la sostituzione di: <order> <preference> \"<flags>\" \"<service>\" \"<regexp>\".");
$_ADDONLANG['global_validate_dns_naptr_part_0_invalid'] = "La parte di record 1 deve essere numerica.";
$_ADDONLANG['global_validate_dns_naptr_part_1_quote_invalid'] = "La parte di record 2 deve essere quotata.";
$_ADDONLANG['global_validate_dns_naptr_part_1_flags_invalid'] = "La parte di record 2 contiene caratteri non validi. Questa parte può contenere solo caratteri alfanumerici.";
$_ADDONLANG['global_validate_dns_naptr_part_1_ex_flags_invalid'] = "La parte di record 2 contiene troppi FLAGS (S, A, U). È possibile utilizzarne uno per volta.";
$_ADDONLANG['global_validate_dns_naptr_part_2_quote_invalid'] = "La parte di record 3 deve essere quotata.";
$_ADDONLANG['global_validate_dns_naptr_part_2_terminal_flag_invalid'] = "Un SERVICE (parte di record 3) deve essere specificato se i FLAGS includono un flag terminale.";
$_ADDONLANG['global_validate_dns_naptr_part_2_service_invalid'] = "Il SERVICE (parte di record 3) sembra non essere valido.";
$_ADDONLANG['global_validate_dns_naptr_part_3_delimiter_invalid'] = "La sostituzione POSIX regexp (parte di record 4) non è valida. Il separatore non dovrebbe essere: 'i', '\\' o un numero.";
$_ADDONLANG['global_validate_dns_naptr_part_3_replacement_invalid'] = "La sostituzione POSIX regexp (parte di record 4) non è valida. Non tutte le parti richieste sono state specificate.";
$_ADDONLANG['global_validate_dns_naptr_part_3_backref_invalid'] = "La sostituzione POSIX regexp (parte di record 4) non è valida. Solo in riferimento back può essere utilizzato, e dovrebbe essere del tipo '\\1'.";
$_ADDONLANG['global_validate_dns_naptr_part_3_flag_invalid'] = "Il flag POSIX regexp di (parte di record 5) non è valido. Può contenere 'i' o essere vuoto.";
$_ADDONLANG['global_validate_dns_naptr_part_4_empty_invalid'] = "La parte di record 5 non è valida e deve essere un puntatore di record o un singolo punto.";
$_ADDONLANG['global_validate_dns_naptr_part_4_sim_invalid'] = "Le variabili REGEXP e REPLACEMENT (parte di record 5) non possono essere utilizzate contemporaneamente.";
$_ADDONLANG['global_validate_dns_naptr_part_4_replacement_invalid'] = "La variabile REPLACEMENT (parte di record 5) deve essere '.' o un dominio valido.";

$_ADDONLANG['global_validate_dns_rp_parts_missing'] = htmlentities("I record RP devono avere: <mailbox name> <more info pointer>");
$_ADDONLANG['global_validate_dns_rp_part_0_invalid'] = "Il nome della mailbox deve essere un indirizzo email con la chiocciola (@) rimpiazzata da un punto (.).";
$_ADDONLANG['global_validate_dns_rp_part_1_invalid'] = "Il puntatore more-info deve essere un nome di dominio valido.";

$_ADDONLANG['global_validate_dns_soa_parts_missing'] = htmlentities("Il record SOA deve contenere: <primary-ns> <hostmaster> <serial> <refresh> <retry> <expire> <default_ttl>");
$_ADDONLANG['global_validate_dns_soa_part_0_invalid'] = "Il dominio di nameserver primario non è valido.";
$_ADDONLANG['global_validate_dns_soa_part_1_invalid'] = "L'indirizzo email dell'hostmaster non è valido.";
$_ADDONLANG['global_validate_dns_soa_part_2_invalid'] = "Il seriale (parte 3) deve essere numerico.";
$_ADDONLANG['global_validate_dns_soa_part_3_invalid'] = "Il refresh (parte 4) deve essere numerico.";
$_ADDONLANG['global_validate_dns_soa_part_4_invalid'] = "Nuovo tentativo (parte 5) deve essere numerico.";
$_ADDONLANG['global_validate_dns_soa_part_5_invalid'] = "Scadenza (parte 6) deve essere numerico.";
$_ADDONLANG['global_validate_dns_soa_part_6_invalid'] = "TTL di default (parte 7) deve essere numerico.";

$_ADDONLANG['global_validate_dns_sshfp_parts_missing'] = htmlentities("Un record SSHFP deve contenere: <algorithm> <fp-type> <fingeprint>");
$_ADDONLANG['global_validate_dns_sshfp_invalid_0_part'] = "Deve essere fornito almeno un algoritmo tra: 1 (RSA), 2 (DSA) o 3 (ECDSA).";
$_ADDONLANG['global_validate_dns_sshfp_invalid_1_part'] = "Deve essere fornito almeno un fp-type tra: 1 (SHA-1) o 2 (SHA-256).";
$_ADDONLANG['global_validate_dns_sshfp_invalid_2_part'] = "Deve essere fornita una impronta digitale SHA-1 con 40 caratteri ASCII esadecimali.";
$_ADDONLANG['global_validate_dns_sshfp_invalid_3_part'] = "Deve essere fornita una impronta digitale SHA-256 con 64 caratteri ASCII esadecimali.";

$_ADDONLANG['global_validate_dns_srv_missing_priority'] = "Deve essere fornita una priorità.";
$_ADDONLANG['global_validate_dns_srv_parts_missing'] = htmlentities("Il record SRV deve contenere: <weight> <port> <service>");
$_ADDONLANG['global_validate_dns_srv_part_0_invalid'] = "Il peso (parte 1) deve essere numerico.";
$_ADDONLANG['global_validate_dns_srv_part_1_invalid'] = "La porta (parte 2) deve essere numerica.";
$_ADDONLANG['global_validate_dns_srv_part_2_invalid'] =  "Un record SRV deve contenere un dominio valido come servizio.";

$_ADDONLANG['global_validate_dns_hinfo_invalid'] = "Il campo HINFO contiene un valore non valido.";

$_ADDONLANG['global_validate_template_tag'] = "Per favore, assicurati di sapere quale tag hai usato, se &lt;default-ipv4&gt; o &lt;default-ipv6&gt;, l'IP di default è stato definito nelle impostazioni del template.";

// Global Messages
$_ADDONLANG['global_msg_changes_saved_title'] = "Le modifiche sono state salvate!";
$_ADDONLANG['global_msg_changes_saved_desc'] = "Tutte le modifiche sono state salvate correttamente.";

$_ADDONLANG['global_msg_template_created_title'] = "Nuovo Template Creato!";
$_ADDONLANG['global_msg_template_created_desc'] = "Un nuovo template è stato aggiunto correttamente.";

$_ADDONLANG['global_msg_template_update_title'] = "Nome del template aggiornato correttamente.";
$_ADDONLANG['global_msg_template_update_desc'] = "Il nome del template è stato aggiornato correttamente.";

$_ADDONLANG['global_msg_template_removed_title'] = "Template rimosso!";
$_ADDONLANG['global_msg_template_removed_desc'] = "Il template è stato rimosso correttamente.";

$_ADDONLANG['global_msg_invalid_ip_title'] = "L'indirizzo IP non è valido!";
$_ADDONLANG['global_msg_invalid_ip_desc'] = "L'indirizzo IP inserito non è valido.";
$_ADDONLANG['global_msg_invalid_ip4_desc'] = "L'IP di default IPv4 inserito non è valido.";
$_ADDONLANG['global_msg_invalid_ip6_desc'] = "L'IP di default IPv6 inserito non è valido.";

$_ADDONLANG['global_msg_template_updated_title'] = "Impostazioni Template Aggiornate!";
$_ADDONLANG['global_msg_template_updated_desc'] = "Le impostazioni del template sono state aggiornate correttamente.";

$_ADDONLANG['global_msg_health_reset_title'] = "Reimpostazione Salute Completata!";
$_ADDONLANG['global_msg_health_reset_desc'] = "Lo stato di salute è stato reimpostato correttamente.";

$_ADDONLANG['global_msg_client_notfound_title'] = "Cliente Non Trovato!";
$_ADDONLANG['global_msg_client_notfound_desc'] = "Il cliente non è stato trovato. Impossibile procedere.";

$_ADDONLANG['global_msg_domain_notlocal_title'] = "Impossibile associare al dominio locale!";
$_ADDONLANG['global_msg_domain_notlocald_desc'] = "Impossibile associare questa zona a un dominio locale attivo o in attesa per questo cliente.";
$_ADDONLANG['global_msg_domain_notlocalp_desc'] = "Impossibile associare questa zona a un prodotto locale attivo o in attesa per questo cliente impostato per consentire le zona di DNS per questo cliente.";

$_ADDONLANG['global_msg_unknown_zonetype_title'] = "Impossibile determinare il tipo di zona!";
$_ADDONLANG['global_msg_unknown_zonetype_desc'] = "L'zona non può essere creata perché il tipo di zona è sconosciuto.";

$_ADDONLANG['global_msg_delete_selected_title'] = "Eliminazione dei selezionati completata!";
$_ADDONLANG['global_msg_delete_selected_desc'] = "L'eliminazione degli elementi selezionati è stata completata.";

$_ADDONLANG['global_msg_template_activated_title'] = "Template Attivato";
$_ADDONLANG['global_msg_template_activated_desc'] = "La zona inversa non sembra essere valida e non può essere creata.";

$_ADDONLANG['global_msg_invalid_reverse_title'] = "Zona inversa non valida";
$_ADDONLANG['global_msg_invalid_reverse_desc'] = "Reverse zone seems to be invalid and cannot be created.";

$_ADDONLANG['global_msg_invalid_input_title'] = "Input non valido";
$_ADDONLANG['global_msg_invalid_input_desc'] = "Il sistema non può elaborare la tua richiesta a causa di un input non valido.";
		
// Health
$_ADDONLANG['health_ok'] = "Ok.";
$_ADDONLANG['health_pending'] = "Lo stato è in attesa...";

$_ADDONLANG['health_NS001'] = "ERRORE: Il nameserver genitore restituisce nameserver non conformi!";
$_ADDONLANG['health_NS002'] = "ATTENZIONE: Non tutti i nameserver sono conosciuti dal nameserver genitore!";
$_ADDONLANG['health_ZONE001'] = "ERRORE: C'è un problema con l'elaborazione dei record in questa zona, per favore contatta l'assistenza!";
$_ADDONLANG['health_ZONE002'] = "ATTENZIONE: Uno o più record non sono corretti, questo può causare problemi.";
$_ADDONLANG['health_LU001'] = "ERRORE: L'zona non è consistente per tutti i nameserver e uno o più nameserver non riescono a riportare a quest'zona.";
$_ADDONLANG['health_LU002'] = "ERRORE: L'zona non è consistente per tutti i nameserver!";
$_ADDONLANG['health_LU003'] = "ATTENZIONE: Uno o più nameserver non riescono a riportare a quest'zona.";

// No JavaScript
$_ADDONLANG['nojavascript_title'] = "JavaScript Disabilitato";
$_ADDONLANG['nojavascript_desc'] = "Questa pagina richiede che JavaScript sia abilitato per un corretto funzionamento. Per favore, attiva JavaScript nel tuo browser per continuare.";

// Override
if(file_exists(dirname(__FILE__).'/override/italian.php'))
	include dirname(__FILE__).'/override/italian.php';

?>