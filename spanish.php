<?php
/*
**********************************************

         *** SoluteDNS for WHMCS ***

Language file:			Spanish
Created by:				SoluteDNS

Version:				0.2.7
Date:					16-12-2016
Distribution Package:	16005

Copyright (C) NetDistrict 2016
All Rights Reserved
**********************************************
*/

####################
// CLIENT LANGUAGE //
####################

// Menu
$_ADDONLANG['client_manage'] = "Gestionar";
$_ADDONLANG['client_overview'] = "Vista general";
$_ADDONLANG['client_defaulttemplate'] = "Plantilla por defecto";
$_ADDONLANG['client_reversedns'] = "DNS Inversa";
$_ADDONLANG['client_dnssec'] = "DNSsec";

// Titles
$_ADDONLANG['client_title'] = "Gestión DNS";
$_ADDONLANG['client_records'] = "Registros";
$_ADDONLANG['client_dnsseckeys'] = "Claves DNSsc";
$_ADDONLANG['client_dsrecords'] = "Registros DS";
$_ADDONLANG['client_deleterecord'] = "Borrar registro";
$_ADDONLANG['client_deletezone'] = "Borrar zona";

// DNS Management
$_ADDONLANG['client_addrecord'] = "Añadir registro";
$_ADDONLANG['client_srvassistant'] = "Asistente SRV";
$_ADDONLANG['client_tlsaassistant'] = "Asistente TLSA";

$_ADDONLANG['client_name'] = "Nombre";
$_ADDONLANG['client_type'] = "Tipo";
$_ADDONLANG['client_content'] = "Contenido";
$_ADDONLANG['client_prio'] = "Prio";
$_ADDONLANG['client_ttl'] = "TTL";

$_ADDONLANG['client_loading'] = "Cargando...";

$_ADDONLANG['client_minute'] = "minuto";
$_ADDONLANG['client_minutes'] = "minutos";
$_ADDONLANG['client_hour'] = "hora";
$_ADDONLANG['client_day'] = "día";

$_ADDONLANG['client_service'] = "Servicio";
$_ADDONLANG['client_protocol'] = "Protocolo";
$_ADDONLANG['client_priority'] = "Prioridad";
$_ADDONLANG['client_weight'] = "Peso";
$_ADDONLANG['client_target'] = "Objetivo";
$_ADDONLANG['client_port'] = "Puerto";

$_ADDONLANG['client_actioncompleted'] = "Acción completada";

// Zone Management
$_ADDONLANG['client_addnewzone'] = "Añadir nueva zona";
$_ADDONLANG['client_addupto'] = "Puede añadir hasta";
$_ADDONLANG['client_none'] = "ninguna";
$_ADDONLANG['client_unlimited'] = "ilimitadas";
$_ADDONLANG['client_zones'] = "zonas";
$_ADDONLANG['client_domain'] = "dominio";
$_ADDONLANG['client_status'] = "estado";

// Buttons
$_ADDONLANG['client_add'] = "Añadir";
$_ADDONLANG['client_delete'] = "Borrar";
$_ADDONLANG['client_cancel'] = "Cancelar";
$_ADDONLANG['client_back'] = "Volver";
$_ADDONLANG['client_activate'] = "Activar";

$_ADDONLANG['client_enable'] = "Enable";
$_ADDONLANG['client_disable'] = "Disable";
$_ADDONLANG['client_enable'] = "Enabled";
$_ADDONLANG['client_disable'] = "Disabled";

// Text
$_ADDONLANG['client_text_deleterecord'] = "Está seguro de que desea borrar este registro?";
$_ADDONLANG['client_text_deletezone'] = "Está seguro de que desea borrar esta zona?";
$_ADDONLANG['client_text_templatedesc'] = "Por favor utilice: &lt;domain&gt; como dominio. Esta etiqueta será convertida al dominio actual.";
$_ADDONLANG['client_text_activatedesc'] = "Puede establecer una plantilla por defecto que se utiliza cuando crea una nueva zona o solicita el registro de un nuevo dominio sin servicios.";

// DNSsec
$_ADDONLANG['client_keytag'] = "Etiqueta clave";
$_ADDONLANG['client_flag'] = "Bandera";
$_ADDONLANG['client_algorithm'] = "Algoritmo";
$_ADDONLANG['client_publickey'] = "Clave pública";
$_ADDONLANG['client_digesttype'] = "Tipo de digest";
$_ADDONLANG['client_digest'] = "Digest";

$_ADDONLANG['client_none_available'] = "Ninguno Disponible";

// Reverse Management
$_ADDONLANG['client_ip'] = "IP";
$_ADDONLANG['client_hostname'] = "Nombre del host";

// DataTables
$_ADDONLANG['client_entersearch'] = "Introducir término de búsqueda...";

// DataTable Records
$_ADDONLANG['client_records_sEmptyTable'] = "No se han encontrado registros";
$_ADDONLANG['client_records_sInfo'] = "Mostrando _START_ a _END_ de _TOTAL_ registros";
$_ADDONLANG['client_records_sInfoEmpty'] = "Mostrando 0 a 0 de 0 registros";
$_ADDONLANG['client_records_sInfoFiltered'] = "(filtrado de _MAX_ registros totales)";
$_ADDONLANG['client_records_sInfoPostFix'] = "";
$_ADDONLANG['client_records_sInfoThousands'] = ",";
$_ADDONLANG['client_records_sLoadingRecords'] = "Cargando...";
$_ADDONLANG['client_records_sProcessing'] = "Procesando...";
$_ADDONLANG['client_records_sZeroRecords'] = "No se han encontrado registros";

// DatTable Table
$_ADDONLANG['client_table_sEmptyTable'] = "No se han encontrado dominios";
$_ADDONLANG['client_table_sInfo'] = "Mostrando _START_ a _END_ de _TOTAL_ dominios";
$_ADDONLANG['client_table_sInfoEmpty'] = "Mostrando 0 a 0 de 0 dominios";
$_ADDONLANG['client_table_sInfoFiltered'] = "(filtrado de _MAX_ dominios totales)";
$_ADDONLANG['client_table_sInfoPostFix'] = "";
$_ADDONLANG['client_table_sInfoThousands'] = ",";
$_ADDONLANG['client_table_sLengthMenu'] = "Mostrar _MENU_ entradas";
$_ADDONLANG['client_table_sLoadingRecords'] = "Cargando...";
$_ADDONLANG['client_table_sProcessing'] = "Procesando...";
$_ADDONLANG['client_table_sSearch'] = "";
$_ADDONLANG['client_table_sZeroRecords'] = "No se han encontrado dominios";
$_ADDONLANG['client_table_sFirst'] = "Primero";
$_ADDONLANG['client_table_sLast'] = "Último";
$_ADDONLANG['client_table_sNext'] = "Siguiente";
$_ADDONLANG['client_table_sPrevious'] = "Anterior";

// DatTable Reverse
$_ADDONLANG['client_reverse_sEmptyTable'] = "No se han encontrado direcciones IP";
$_ADDONLANG['client_reverse_sInfo'] = "Mostrando _START_ a _END_ de _TOTAL_ direcciones IP";
$_ADDONLANG['client_reverse_sInfoEmpty'] = "Mostrando 0 a 0 de 0 direcciones IP";
$_ADDONLANG['client_reverse_sInfoFiltered'] = "(filtrado de _MAX_ direcciones IP totales)";
$_ADDONLANG['client_reverse_sInfoPostFix'] = "";
$_ADDONLANG['client_reverse_sInfoThousands'] = ",";
$_ADDONLANG['client_reverse_sLengthMenu'] = "Mostrar _MENU_ entradas";
$_ADDONLANG['client_reverse_sLoadingRecords'] = "Cargando...";
$_ADDONLANG['client_reverse_sProcessing'] = "Procesando...";
$_ADDONLANG['client_reverse_sSearch'] = "";
$_ADDONLANG['client_reverse_sZeroRecords'] = "No se han encontrado direcciones IP";
$_ADDONLANG['client_reverse_sFirst'] = "Primero";
$_ADDONLANG['client_reverse_sLast'] = "Último";
$_ADDONLANG['client_reverse_sNext'] = "Siguiente";
$_ADDONLANG['client_reverse_sPrevious'] = "Anterior";

// Access messages
$_ADDONLANG['client_title_maintenance'] = "La gestion DNS no está disponible!";
$_ADDONLANG['client_desc_maintenance'] = "La gestión DNS no está disponible temporalmente debido a mantenimiento. Por favor intente de nuevo más tarde!";

$_ADDONLANG['client_title_pdnserror'] = "Imposible cambiar los ajustes DNS!";
$_ADDONLANG['client_desc_pdnserror'] = "En este momento es imposible cambiar los ajustes DNS de su domino. <br/>Por favor intente de nuevo más tarde. Si este problema persiste por favor contacte con soporte!";
$_ADDONLANG['client_desc_pdnserror2'] = "En este momento es imposible cambiar cualquier ajuste DNS de su domino. Por favor intente de nuevo más tarde. Si este problema persiste por favor contacte con soporte!";

$_ADDONLANG['client_title_permission'] = "Accceso denegado!";
$_ADDONLANG['client_desc_permission'] = "No tiene suficientes permisos para acceder a esta zona!";
$_ADDONLANG['client_slavezone_error'] = "La zona parece ser una zona esclava, la cual no puede ser editada. Si cre que esto está mal por favor contacte con soporte.";


####################
// ADMIN LANGUAGE //
####################

$_ADDONLANG['admin_eula'] = "EULA";
$_ADDONLANG['admin_eula_long'] = "Acuerdo de licencia de usuario final";
$_ADDONLANG['admin_eula_missing'] = "El archivo EULA parece estar perdido, por favor cargue o vuelva a cargar los archivos añadidos para continuar.";

$_ADDONLANG['admin_menu_overview'] = "Vista general";
$_ADDONLANG['admin_menu_templates'] = "Plantillas";
$_ADDONLANG['admin_menu_settings'] = "Ajustes";
$_ADDONLANG['admin_menu_records'] = "Registros";
$_ADDONLANG['admin_menu_accessibility'] = "Accesibilidad";
$_ADDONLANG['admin_menu_automation'] = "Automatización";
$_ADDONLANG['admin_menu_assignment'] = "Asignación";
$_ADDONLANG['admin_menu_handling'] = "Manejo";
$_ADDONLANG['admin_menu_nameservers'] = "Nombre de servidores";
$_ADDONLANG['admin_menu_system'] = "Sistema";
$_ADDONLANG['admin_menu_tools'] = "Herramientas";
$_ADDONLANG['admin_menu_accesscontrol'] = "Control de acceso";
$_ADDONLANG['admin_menu_logs'] = "Registros";
$_ADDONLANG['admin_menu_license'] = "Licencia";

$_ADDONLANG['admin_help'] = "Ayuda";
$_ADDONLANG['admin_back'] = "Volver";

$_ADDONLANG['admin_yes'] = "Sí";
$_ADDONLANG['admin_no'] = "No";
$_ADDONLANG['admin_never'] = "Nunca";

$_ADDONLANG['admin_add'] = "Añadir";
$_ADDONLANG['admin_apply'] = "Aplicar";
$_ADDONLANG['admin_delete'] = "Borrar";
$_ADDONLANG['admin_cancel'] = "Cancelar";
$_ADDONLANG['admin_close'] = "Cerrar";
$_ADDONLANG['admin_import'] = "Importar";
$_ADDONLANG['admin_assign'] = "Asignar";
$_ADDONLANG['admin_check'] = "Comprobar";
$_ADDONLANG['admin_edit'] = "Editar";
$_ADDONLANG['admin_continue'] = "Continuar";
$_ADDONLANG['admin_updatenow'] = "Actualizar ahora";
$_ADDONLANG['admin_dismiss'] = "Descartar";
$_ADDONLANG['admin_none'] = "Ninguno";
$_ADDONLANG['admin_index'] = "Índice";

$_ADDONLANG['admin_savechanges'] = "Guardar cambios";

// Statusses
$_ADDONLANG['admin_cancelled'] = "Cancelado";
$_ADDONLANG['admin_terminated'] = "Terminado";
$_ADDONLANG['admin_expired'] = "Caducado";
$_ADDONLANG['admin_suspended'] = "Suspendido";
$_ADDONLANG['admin_fraud'] = "Fraude";

// Accessibility
$_ADDONLANG['admin_accessibility_title_accessibility'] = "Accesibilidad";
$_ADDONLANG['admin_accessibility_title_clientzones'] = "Zonas del cliente";
$_ADDONLANG['admin_accessibility_title_menu'] = "Menús del cliente";
$_ADDONLANG['admin_accessibility_title_admin'] = "Administrador";

$_ADDONLANG['admin_accessibility_option_disableprimarymenu'] = "Deshabilitar menú principal";
$_ADDONLANG['admin_accessibility_option_disablesecondarymenu'] = "Deshabilitar menú de gestión";
$_ADDONLANG['admin_accessibility_option_hidesoa'] = "Ocultar registro SOA";
$_ADDONLANG['admin_accessibility_option_disablens'] = "Deshabilitar registro NS";
$_ADDONLANG['admin_accessibility_option_presetttl'] = "Usar campo TTL previamente establecido";
$_ADDONLANG['admin_accessibility_option_hideassist'] = "Ocultar cliente de asistente DNS";
$_ADDONLANG['admin_accessibility_option_dnspagination'] = "Paginación DNS";
$_ADDONLANG['admin_accessibility_option_urlrewrite'] = "Rewrite client area URL";

$_ADDONLANG['admin_accessibility_option_clientzones'] = "Habilitar zonas de cliente";
$_ADDONLANG['admin_accessibility_option_client_zones_subdomains'] = "Allow Subdomain Zones";
$_ADDONLANG['admin_accessibility_option_client_zones_dnssec'] = "Allow DNSsec control";
$_ADDONLANG['admin_accessibility_option_clienttemplate'] = "Habilitar plantillas de cliente";
$_ADDONLANG['admin_accessibility_option_clienthealth'] = "Habilitar estado de salud";
$_ADDONLANG['admin_accessibility_option_clientreverse'] = "Gestión inversa";
$_ADDONLANG['admin_accessibility_option_zonelimit'] = "Límite de zona";

$_ADDONLANG['admin_accessibility_option_adminreverse'] = "Habilitar inversa";
$_ADDONLANG['admin_accessibility_option_adminhealth'] = "Icono de salud";

$_ADDONLANG['admin_accessibility_desc_disableprimarymenu'] = "Deshabilitar en el área de cliente la entrada de gestión DNS en el menú principal.";
$_ADDONLANG['admin_accessibility_desc_disablesecondarymenu'] = "Deshabilitar en el área de cliente la entrada de gestión DNS en el menú de gestión del dominio y en la página de detalles del producto.";
$_ADDONLANG['admin_accessibility_desc_hidesoa'] = "Ocultar el registro SOA a usuarios. Si muestra el registro SOA siempre estará deshabilitado.";
$_ADDONLANG['admin_accessibility_desc_disablens'] = "Cuando estén marcados, los registros de nombre del servidor estarán deshabilitados para los usuarios.";
$_ADDONLANG['admin_accessibility_desc_presetttl'] = "Usar un menú desplegable TTL previamente establecido en lugar de un cuadro de texto.";
$_ADDONLANG['admin_accessibility_desc_hideassist'] = "Marque esta casilla de verificación para ocultar este asistente DNS a sus clientes.";
$_ADDONLANG['admin_accessibility_desc_dnspagination'] = "Cambiar a paginaciones si la zona excede los registros (0 = ninguna)";
$_ADDONLANG['admin_accessibility_desc_urlrewrite'] = "Rewrite the client area URL, requires .htaccess customizations. Leave empty to disable. See: <a class=\"text-info\" href=\"http://www.solutedns.com/documentation/customized-url\" target=\"_blank\">Custom URL</a>";

$_ADDONLANG['admin_accessibility_desc_clientzones'] = "Seleccionar para habilitar gestión de zona para clientes.";
$_ADDONLANG['admin_accessibility_desc_client_zones_subdomains'] = "Allow clients to add subdomains as new zone.";
$_ADDONLANG['admin_accessibility_desc_client_zones_dnssec'] = "Allow clients to enable or disable DNSsec for a zone.";
$_ADDONLANG['admin_accessibility_desc_clienttemplate'] = "Seleccionar para habilitar plantilla por defecto para clientes.";
$_ADDONLANG['admin_accessibility_desc_clienthealth'] = "Seleccionar para habilitar el icono del estado de salud en la zona de cliente.";
$_ADDONLANG['admin_accessibility_desc_clientreverse'] = "Marcar para permitir a los clientes gestionar los nombres de servidor inversos para direcciones IP asignadas.";
$_ADDONLANG['admin_accessibility_desc_zonelimit'] = "Limitar las zonas máximas permitiddas para los clientes (0 = ilimitadas=, -1 = ninguna)";

$_ADDONLANG['admin_accessibility_desc_adminreverse'] = "Marcar para habilitar zonas inversas en la zona de administración.";
$_ADDONLANG['admin_accessibility_desc_adminhealth'] = "Mostrar el icono de salud en la vista general del dominio de administrador";

// Automation
$_ADDONLANG['admin_automation_title_zones'] = "Zonas";
$_ADDONLANG['admin_automation_title_dnsmanagement'] = "Gestión DNS";
$_ADDONLANG['admin_automation_title_admin'] = "Administrador";

$_ADDONLANG['admin_automation_option_create'] = "Crear zona automáticamente";
$_ADDONLANG['admin_automation_option_maintenance'] = "Mantenimiento automático";
$_ADDONLANG['admin_automation_option_delete'] = "Borrar zona automáticamente";
$_ADDONLANG['admin_automation_option_todo'] = "Añadir automáticamente elementos para hacer";

$_ADDONLANG['admin_automation_option_enabledns'] = "Habilitar automáticamente la gestión DNS";
$_ADDONLANG['admin_automation_option_health'] = "Habilitar sistema de salud";

$_ADDONLANG['admin_automation_option_products'] = "Habilitar DNS para productos";

$_ADDONLANG['admin_automation_desc_create'] = "Crear automáticamente una nueva zona para nuevos pedidos de dominios después de realizar pedido de la compra.";
$_ADDONLANG['admin_automation_desc_maintenance'] = "Mantener automáticamente el índice local.";
$_ADDONLANG['admin_automation_desc_delete'] = "Borrar automáticamente las zonas de dominios y productos con el estado seleccionado.";
$_ADDONLANG['admin_automation_desc_deletewhmcs'] = "Cuando el dominio / producto sea eliminado en WHMCS.";

$_ADDONLANG['admin_automation_desc_enabledns'] = "Habilitar automáticamente la gestión DNS WHMCS para zonas creadas recientemente.";
$_ADDONLANG['admin_automation_desc_health'] = "Marcar para habilitar la salud de la zona del sistema.";

$_ADDONLANG['admin_automation_desc_products'] = "Crear una zona automáticamente para productos especificados con dominios externos.";

$_ADDONLANG['admin_automation_desc_todo'] = "Añadir elementos para hacer automáticamente cuando se necesite atención del personal.";

// Handling
$_ADDONLANG['admin_handling_title_product'] = "Manejo de producto";
$_ADDONLANG['admin_handling_title_registrar'] = "Manejo de registrador";
$_ADDONLANG['admin_handling_title_nameserver'] = "Manejo de nombre de servidor";

$_ADDONLANG['admin_handling_productzone'] = "Crearse producto zona";
$_ADDONLANG['admin_handling_domainzone'] = "Omitir dominio zona";
$_ADDONLANG['admin_handling_productsettings'] = "Habilitar producto ajustes";
$_ADDONLANG['admin_handling_dnssec'] = "DNSsec habilitada";
$_ADDONLANG['admin_handling_recordlimit'] = "Límite de registro";
$_ADDONLANG['admin_handling_defaultcluster'] = "Racimo por defecto";

$_ADDONLANG['admin_handling_autosave'] = "Guardado automático los campos ";

$_ADDONLANG['admin_handling_desc_selectcreated'] = "Seleccione productos para los cuales debería crearse una zona DNS.";
$_ADDONLANG['admin_handling_desc_selectignoreproduct'] = "Seleccione productos para los cuales no debería crearse una zona DNS para su registro de dominio enlazado o transferencia.";
$_ADDONLANG['admin_handling_desc_recordlimit'] = "Limitar el máximo de registros permitidos en una zona (0=ilimitado).";
$_ADDONLANG['admin_handling_desc_selectignoreregistrar'] = "Seleccione los registradores para los cuales <u>no debería</u> crearse una zona DNS.";
$_ADDONLANG['admin_handling_desc_nameserver'] = "Configurar en qué forma de zonas se distribuyen entre los grupos del nombre del servidor.";

$_ADDONLANG['admin_handling_option_default'] = "Nombre del servidor por defecto";
$_ADDONLANG['admin_handling_desc_default'] = "Seleccione qué nombre de servidor debería utilizarse por defecto.";

$_ADDONLANG['admin_handling_option_distribution'] = "Distribución de zona";
$_ADDONLANG['admin_handling_desc_distribution'] = "Seleccione cuántas zonas deberían distribuirse entre los grupos de su nombre de servidor.";
$_ADDONLANG['admin_handling_option_default'] = "Por defecto";
$_ADDONLANG['admin_handling_option_equal'] = "Igual";

$_ADDONLANG['admin_handling_dnsforproduct'] = "El DNS para el producto no está habilitado. Por favor habilite DNS para productos primero en los ajustes de automatización.";

// License
$_ADDONLANG['admin_title_licenseinfo'] = "Información de licencia";
$_ADDONLANG['admin_title_licensesettings'] = "Ajustes de licencia";

$_ADDONLANG['admin_license_product'] = "Producto";
$_ADDONLANG['admin_license_edition'] = "Edición";
$_ADDONLANG['admin_license_status'] = "Estado";
$_ADDONLANG['admin_license_licensedto'] = "Licenciado a";
$_ADDONLANG['admin_license_brandremoval'] = "Eliminación de marca";
$_ADDONLANG['admin_license_zonelimit'] = "Límite de zona";
$_ADDONLANG['admin_license_unlimited'] = "Ilimitado";
$_ADDONLANG['admin_license_zones'] = "zonas";
$_ADDONLANG['admin_license_addons'] = "Añadidos";
$_ADDONLANG['admin_license_none'] = "Ninguno";
$_ADDONLANG['admin_license_expires'] = "Caduca";
$_ADDONLANG['admin_license_validdomains'] = "Dominios válidos";
$_ADDONLANG['admin_license_validips'] = "IP válidas";
$_ADDONLANG['admin_license_validdirectory'] = "Directorios válidos";

$_ADDONLANG['admin_license_licensekey'] = "Clave de licencia";

// Logs
$_ADDONLANG['admin_logs_title_logs'] = "Registros";
$_ADDONLANG['admin_logs_table_id'] = "ID";
$_ADDONLANG['admin_logs_table_log'] = "Registro";
$_ADDONLANG['admin_logs_table_type'] = "Tipo";
$_ADDONLANG['admin_logs_table_date'] = "Fecha";
$_ADDONLANG['admin_logs_clearlogs'] = "Limpiar registros";

// DNS Management
$_ADDONLANG['admin_manage_tab_records'] = "Registros";
$_ADDONLANG['admin_manage_tab_dnssec'] = "DNSsec";
$_ADDONLANG['admin_manage_tab_health'] = "Salud";
$_ADDONLANG['admin_manage_tab_settings'] = "Ajustes";

$_ADDONLANG['admin_manage_title_zone'] = "Zona";
$_ADDONLANG['admin_manage_title_client'] = "Cliente";
$_ADDONLANG['admin_manage_title_email'] = "Correo electrónico";
$_ADDONLANG['admin_manage_title_dnsseckeys'] = "Claves DNSsec";
$_ADDONLANG['admin_manage_title_dsrecords'] = "Registros DS";
$_ADDONLANG['admin_manage_title_health'] = "Salud";
$_ADDONLANG['admin_manage_title_records'] = "Registros";

$_ADDONLANG['admin_manage_title_actioncompleted'] = "Acción completada";
$_ADDONLANG['admin_manage_title_actioncompleted_reload'] = "Claves DNSsec cargadas de nuevo trabajo completado.";

$_ADDONLANG['admin_manage_table_id'] = "ID";
$_ADDONLANG['admin_manage_table_keytag'] = "Etiqueta clave";
$_ADDONLANG['admin_manage_table_flag'] = "Bandera";
$_ADDONLANG['admin_manage_table_algorithm'] = "Algoritmo";
$_ADDONLANG['admin_manage_table_publickey'] = "Clave pública";
$_ADDONLANG['admin_manage_table_status'] = "Estado";
$_ADDONLANG['admin_manage_table_digesttype'] = "Tipo de digest";
$_ADDONLANG['admin_manage_table_digest'] = "Digest";
$_ADDONLANG['admin_manage_table_log'] = "Registro";
$_ADDONLANG['admin_manage_table_date'] = "Fecha";

$_ADDONLANG['admin_manage_name'] = "Nombre";
$_ADDONLANG['admin_manage_type'] = "Tipo";
$_ADDONLANG['admin_manage_content'] = "Contenido";
$_ADDONLANG['admin_manage_prio'] = "Prio";
$_ADDONLANG['admin_manage_ttl'] = "TTL";

$_ADDONLANG['admin_manage_service'] = "Servicio";
$_ADDONLANG['admin_manage_protocol'] = "Protocolo";
$_ADDONLANG['admin_manage_priority'] = "Prioridad";
$_ADDONLANG['admin_manage_weight'] = "Peso";
$_ADDONLANG['admin_manage_target'] = "Objetivo";
$_ADDONLANG['admin_manage_port'] = "Puerto";
$_ADDONLANG['admin_manage_usage'] = "Uso";
$_ADDONLANG['admin_manage_selector'] = "Selector";
$_ADDONLANG['admin_manage_matchingtype'] = "Tipo de concordancia";
$_ADDONLANG['admin_manage_certificate'] = "Certificado";

$_ADDONLANG['admin_manage_dnssec_addnewkey'] = "Añadir nueva clave DNSsec";
$_ADDONLANG['admin_manage_dnssec_flag'] = "Bandeara";
$_ADDONLANG['admin_manage_dnssec_ksk'] = "KSK";
$_ADDONLANG['admin_manage_dnssec_zsk'] = "ZSK";
$_ADDONLANG['admin_manage_dnssec_bits'] = "Bits";
$_ADDONLANG['admin_manage_dnssec_algorithm'] = "Algoritmo";

$_ADDONLANG['admin_manage_health_recheck'] = "Volver a comprobar salud";

$_ADDONLANG['admin_manage_health_warning'] = "atención";
$_ADDONLANG['admin_manage_health_error'] = "error";
$_ADDONLANG['admin_manage_health_noissues'] = "No se conocen errores de salud.";

$_ADDONLANG['admin_manage_records_addrecord'] = "Añadir registro";
$_ADDONLANG['admin_manage_records_srvassist'] = "Asistente SRV";
$_ADDONLANG['admin_manage_records_tlsaassist'] = "Asistente TLSA";

$_ADDONLANG['admin_manage_records_manage'] = "Gestionar";
$_ADDONLANG['admin_manage_records_applytemplate'] = "Aplicar plantilla";
$_ADDONLANG['admin_manage_records_selecttemplate'] = "Seleccionar plantilla";
$_ADDONLANG['admin_manage_records_importzone'] = "Importar zona";
$_ADDONLANG['admin_manage_records_exportzone'] = "Exportar zona";
$_ADDONLANG['admin_manage_records_deleterecord'] = "Borrar registro";
$_ADDONLANG['admin_manage_records_deleteselected'] = "Borrar seleccionado";

$_ADDONLANG['admin_manage_text_deleterecord'] = "Está seguro de que desea borrar este registro?";
$_ADDONLANG['admin_manage_text_importzone'] = "Introduzca un archivo de zona para importar. Los registros importados están siendo moderados por el sistema.";
$_ADDONLANG['admin_manage_text_importzoneoverwrite'] = "Sobreescribir zona actual, todos los registros se eliminan antes de la importación.";

$_ADDONLANG['admin_manage_manage'] = "Gestionar";
$_ADDONLANG['admin_manage_edit'] = "Editar";
$_ADDONLANG['admin_manage_delete'] = "Borrar";

$_ADDONLANG['admin_manage_minute'] = "minuto";
$_ADDONLANG['admin_manage_minutes'] = "minutos";
$_ADDONLANG['admin_manage_hour'] = "hora";
$_ADDONLANG['admin_manage_day'] = "día";

$_ADDONLANG['admin_manage_unknown'] = "desconocido";

$_ADDONLANG['admin_isslave_title'] = "Zona esclava!";
$_ADDONLANG['admin_isslave_desc'] = "Esta es una zona esclava, no debería intentar editar esta zona ya que podría causar problemas de inconsistencia DNS entre nombres de servidores.";

$_ADDONLANG['admin_dnssec_add'] = "Añadir clave";
$_ADDONLANG['admin_dnssec_rectify'] = "Rectificar zona";
$_ADDONLANG['admin_dnssec_check'] = "Comprobar estado";
$_ADDONLANG['admin_dnssec_nsec3'] = "Configurar NSEC3";
$_ADDONLANG['admin_dnssec_reset'] = "Reiniciar DNSsec";
$_ADDONLANG['admin_dnssec_unset'] = "Desconfigurar DNSsec";
$_ADDONLANG['admin_dnssec_reload'] = "Volver a cargar claves";

$_ADDONLANG['admin_loading_zone'] = "Cargando zona...";

// Nameservers
$_ADDONLANG['admin_nameservers_title_primarydb'] = "Base de datos primaria PowerDNS";
$_ADDONLANG['admin_nameservers_title_nameservers'] = "Nombres servidores";
$_ADDONLANG['admin_nameservers_title_ssh2details'] = "Detalles de DNSsec  SSH2";
$_ADDONLANG['admin_nameservers_title_dnssecoptions'] = "Opciones de DNSSEC";

$_ADDONLANG['admin_nameservers_option_host'] = "Anfitrión";
$_ADDONLANG['admin_nameservers_option_port'] = "Puerto";
$_ADDONLANG['admin_nameservers_option_user'] = "Usuario";
$_ADDONLANG['admin_nameservers_option_password'] = "Contraseña";
$_ADDONLANG['admin_nameservers_option_database'] = "Base de datos";
$_ADDONLANG['admin_nameservers_option_zonetype'] = "tipo de zona";

$_ADDONLANG['admin_nameservers_option_nameserver1'] = "Nombre servidor 1";
$_ADDONLANG['admin_nameservers_option_nameserver2'] = "Nombre servidor 2";
$_ADDONLANG['admin_nameservers_option_nameserver3'] = "Nombre servidor 3";
$_ADDONLANG['admin_nameservers_option_nameserver4'] = "Nombre servidor 4";
$_ADDONLANG['admin_nameservers_option_nameserver5'] = "Nombre servidor 5";
$_ADDONLANG['admin_nameservers_option_nameserver6'] = "Nombre servidor 6";

$_ADDONLANG['admin_nameservers_option_useprivatekey'] = "Utilizar la llave privada";
$_ADDONLANG['admin_nameservers_option_privatekey'] = "Llave privada";

$_ADDONLANG['admin_nameservers_option_pdnsversion'] = "Versión PowerDNS";
$_ADDONLANG['admin_nameservers_option_enablednssec'] = "Habilitar DNSsec";
$_ADDONLANG['admin_nameservers_option_autorectify'] = "Rectificar zona automáticamente";
$_ADDONLANG['admin_nameservers_option_autoenablednssec'] = "Activar automáticamente DNSsec";
$_ADDONLANG['admin_nameservers_option_setnsec3'] = "Establecer NSEC3";
$_ADDONLANG['admin_nameservers_option_showtoclient'] = "Mostrar llave al  cliente";

$_ADDONLANG['admin_nameservers_desc_host'] = "Dominio o dirección IP del servidor MySQL remoto que contiene las zonas PowerDNS.";
$_ADDONLANG['admin_nameservers_desc_port'] = "puerto MySQL por defecto es 3306.";
$_ADDONLANG['admin_nameservers_desc_zonetype'] = "Seleccionar el tipo de zona, lo necesita para la transferencia de zona en su nombredeservidor.";

$_ADDONLANG['admin_nameservers_desc_nameserver1'] = "El nombredeservidor primario también se utilizará en el registro SOA.";
$_ADDONLANG['admin_nameservers_desc_nameserver6'] = "Deja campos extra vacío si se utilizan menos nombredeservidor.";

$_ADDONLANG['admin_nameservers_desc_sshhost'] = "Dominio o dirección IP del servidor remoto que contiene las zonas PowerDNS.";
$_ADDONLANG['admin_nameservers_desc_sshport'] = "Puerto SSH por defecto es 22.";

$_ADDONLANG['admin_nameservers_desc_useprivatekey'] = "Tick, para utilizar una clave privada para acceder a SSH en lugar de una contraseña.";

$_ADDONLANG['admin_nameservers_desc_enablednssec'] = "Habilitar el soporte DNSsec.";
$_ADDONLANG['admin_nameservers_desc_autorectify'] = "Zonas  están obligados a ser rectificados con el fin de continuar operando.";
$_ADDONLANG['admin_nameservers_desc_autoenablednssec'] = "Asegurar automáticamente las zonas de nueva creación.";
$_ADDONLANG['admin_nameservers_desc_setnsec3'] = "Utilice NSEC3 en lugar de  CNMV por defecto.";
$_ADDONLANG['admin_nameservers_desc_showtoclient'] = "Mostrar claves DNSSEC a cliente.";

$_ADDONLANG['admin_nameservers_error'] = "Detalles del error";

$_ADDONLANG['admin_nameservers_add_title'] = "Agregar nuevo nombreservidor";
$_ADDONLANG['admin_nameservers_add_desc'] = "Aquí puede añadir un nuevo nombreservidor. Por favor asegúrese de que sólo agrega los servidores maestros. No se deben agregar los servidores esclavos.";

$_ADDONLANG['admin_nameservers_index_title'] = "Nombreservidor no en el índice?";
$_ADDONLANG['admin_nameservers_index_desc'] = "El nombreservidor no se encontró en el índice. Es posible que desee indexar el nombreservidor.";

// Overview
$_ADDONLANG['admin_overview_title_domains']  = "Dominios";
$_ADDONLANG['admin_overview_title_products']  = "Productos";
$_ADDONLANG['admin_overview_title_standalone']  = "Autónomo";
$_ADDONLANG['admin_overview_title_reverse']  = "Marcha atrás";
$_ADDONLANG['admin_overview_title_unassigned']  = "Sin asignar";

$_ADDONLANG['admin_overview_addzone']  = "Añadir zona";
$_ADDONLANG['admin_overview_delete']  = "Borrar";
$_ADDONLANG['admin_overview_zone']  = "Zona";
$_ADDONLANG['admin_overview_domain']  = "Dominio";
$_ADDONLANG['admin_overview_product']  = "Producto";
$_ADDONLANG['admin_overview_reverse']  = "Marcha atrás";
$_ADDONLANG['admin_overview_standalone']  = "Autónomo";

$_ADDONLANG['admin_overview_zonetype']  = "Tipo de zona";
$_ADDONLANG['admin_overview_selecttype']  = "Seleccionar el tipo de";
$_ADDONLANG['admin_overview_ipaddresszone']  = "Dirección IP o Nombre de la zona";
$_ADDONLANG['admin_overview_client']  = "Cliente";

$_ADDONLANG['admin_overview_table_id']  = "ID";
$_ADDONLANG['admin_overview_table_domain']  = "Dominio";
$_ADDONLANG['admin_overview_table_status']  = "Estado";
$_ADDONLANG['admin_overview_table_date']  = "Fecha";

$_ADDONLANG['admin_overview_text_deletezone']  = "Está seguro de que desea eliminar este registro?";

$_ADDONLANG['admin_loading_data'] = "Carga de datos desde un servidor...";
$_ADDONLANG['admin_none_available'] = "Ninguno disponible";

// Records
$_ADDONLANG['admin_records_title_allowed'] = "Registros permitidos";
$_ADDONLANG['admin_records_title_defaultsoa'] = "Registro por defecto SOA";
$_ADDONLANG['admin_records_title_limit'] = "Límite de registros";

$_ADDONLANG['admin_records_option_allowedtypes'] = "Tipos de registro permitidos";

$_ADDONLANG['admin_records_option_hostmaster'] = "Maestro del servidor";
$_ADDONLANG['admin_records_option_serial'] = "Serie";
$_ADDONLANG['admin_records_option_refresh'] = "Refrescar";
$_ADDONLANG['admin_records_option_retry'] = "Volver a intentar";
$_ADDONLANG['admin_records_option_expire'] = "Caducar";
$_ADDONLANG['admin_records_option_ttl'] = "Mínimo TTL";
$_ADDONLANG['admin_records_option_customprimary'] = "Allow custom primary";

$_ADDONLANG['admin_records_option_recordlimit'] = "Límite de registro";

$_ADDONLANG['admin_records_desc_hostmaster'] = "Añadir &lt;domain&gt; para usar el dominio referente como maestro del servidor";
$_ADDONLANG['admin_records_desc_serial'] = "Deje esto por defecto si no está seguro de lo que hace!";
$_ADDONLANG['admin_records_desc_customprimary'] = "Do not overwrite the primary nameserver SOA value with the cluster default.";

$_ADDONLANG['admin_records_desc_recordlimit'] = "Limitar el máximo de registros permitidos en una zona (0=ilimitado).";

$_ADDONLANG['admin_records_select_default'] = "Por defecto (aaaammddcc)";
$_ADDONLANG['admin_records_select_epoch'] = "Época (tiempo Unix)";
$_ADDONLANG['admin_records_select_zero'] = "Último tiempo de registro editado";

// Tools
$_ADDONLANG['admin_tools_title_tools'] = "Herramientas";
$_ADDONLANG['admin_tools_title_mutationtool'] = "Herramienta de mutación";
$_ADDONLANG['admin_tools_title_dnssectool'] = "Herramienta DNSsec";

$_ADDONLANG['admin_tools_startmutation'] = "Empezar mutación";
$_ADDONLANG['admin_tools_starttool'] = "Herramienta de inicio";
$_ADDONLANG['admin_tools_server'] = "Servidor";
$_ADDONLANG['admin_tools_action'] = "Acción";

// System
$_ADDONLANG['admin_system_title_system'] = "Sistema";
$_ADDONLANG['admin_system_title_crons'] = "Cronjobs";
$_ADDONLANG['admin_system_title_logging'] = "Registro del sistema";

$_ADDONLANG['admin_system_option_rectifycron'] = "Rectificar cron DNSsec";
$_ADDONLANG['admin_system_option_healthcron'] = "Sistema de salud cron";
$_ADDONLANG['admin_system_option_cronmode'] = "Cron Modo";
$_ADDONLANG['admin_system_option_cronstatus'] = "Estado";

$_ADDONLANG['admin_system_option_index'] = "Índice";
$_ADDONLANG['admin_system_option_idn'] = "Soporte IDN";
$_ADDONLANG['admin_system_option_version'] = "Versión";
$_ADDONLANG['admin_system_option_maintenance'] = "Modo de mantenimiento";
$_ADDONLANG['admin_system_option_logging'] = "Registro del sistema";
$_ADDONLANG['admin_system_option_debug'] = "Registro de depuración";

$_ADDONLANG['admin_system_desc_maintenance'] = "Intentar habilitar el modo de mantenimiento.";
$_ADDONLANG['admin_system_desc_logging'] = "Intentar habilitar el registro del sistema (solo registra procesos automatizados).";
$_ADDONLANG['admin_system_desc_debug'] = "Intentar habilitar el registro de depuración para tareas cron.";

$_ADDONLANG['admin_system_active'] = "Activo";
$_ADDONLANG['admin_system_inactive'] = "Inactivo";
$_ADDONLANG['admin_system_inqueue'] = "En cola";
$_ADDONLANG['admin_system_lastrun'] = "Último arranque de cron con tareas";
$_ADDONLANG['admin_system_idle'] = "En reposo";
$_ADDONLANG['admin_system_running'] = "Funcionando";
$_ADDONLANG['admin_system_reset'] = "Reiniciar cron";
$_ADDONLANG['admin_system_inindex'] = "Zonas en índice.";
$_ADDONLANG['admin_system_checkupdates'] = "Comprobar actualizaciones";

$_ADDONLANG['admin_system_text_runningtoolong'] = "Cron funcionando durante demasiado tiempo?";

// Access Control
$_ADDONLANG['admin_access_title_accesscontrol'] = "Control de acceso";
$_ADDONLANG['admin_access_title_accesslevels'] = "Niveles de acceso";
$_ADDONLANG['admin_access_title_groupassignment'] = "Asignaciones de grupo";
$_ADDONLANG['admin_access_fullaccess'] = "Acceso completo";
$_ADDONLANG['admin_access_zonemanagement'] = "Gestión de zona";
$_ADDONLANG['admin_access_level'] = "Nivel";
$_ADDONLANG['admin_access_notassigned'] = "No asignado";
$_ADDONLANG['admin_access_warning'] = "Comprobar también la configuración de roles de administrador WHMCS y los ajustes de control de acceso del módulo añadido.";

// Templates
$_ADDONLANG['admin_template_title_templates'] = "Plantillas";
$_ADDONLANG['admin_template_title_template'] = "Plantilla";
$_ADDONLANG['admin_template_title_settings'] = "Ajustes";
$_ADDONLANG['admin_template_title_defaultip'] = "Direcciones IP por defecto";
$_ADDONLANG['admin_template_title_assignment'] = "Asignación del producto";
$_ADDONLANG['admin_template_title_ttl'] = "Ajustes TTL";

$_ADDONLANG['admin_template_addtemplate'] = "Añadir plantilla";
$_ADDONLANG['admin_template_addnewtemplate'] = "Añadir nueva plantilla";
$_ADDONLANG['admin_template_templatename'] = "Nombre de plantilla";
$_ADDONLANG['admin_template_deletetemplate'] = "Borrar plantilla";
$_ADDONLANG['admin_template_unnamed'] = "Sin nombre";

$_ADDONLANG['admin_template_table_id'] = "ID";
$_ADDONLANG['admin_template_table_name'] = "Nombre";
$_ADDONLANG['admin_template_table_type'] = "Tipo";

$_ADDONLANG['admin_template_text_deletetemplate'] = "Está seguro de que quiere borrar esta plantilla?";

$_ADDONLANG['admin_template_option_defaultipv4'] = "IPv4 por defecto";
$_ADDONLANG['admin_template_option_defaultipv6'] = "IPv6 por defecto";
$_ADDONLANG['admin_template_option_assignedproducts'] = "Productos asignados";
$_ADDONLANG['admin_template_option_defaultttl'] = "TTL por defecto";
$_ADDONLANG['admin_template_option_soattl'] = "SOA TTL";
$_ADDONLANG['admin_template_option_nsttl'] = "NS TTL";

$_ADDONLANG['admin_template_desc_defaultipv4'] = "Para etiqueta: &lt;default-ipv4&gt;.";
$_ADDONLANG['admin_template_desc_defaultipv6'] = "Para etiqueta: &lt;default-ipv6&gt;.";

$_ADDONLANG['admin_template_desc_assignedproducts'] = "Solamente se pueden seleccionar productos cuando no se utilizan para otra plantilla. Puede seleccionar múltiples productos.";
$_ADDONLANG['admin_template_desc_cannotassign'] = "No se puede establecer un producto para la plantilla por defecto.";
$_ADDONLANG['admin_template_desc_ttl'] = "Dejar vacío para el valor TTL por defecto.";

// Console
$_ADDONLANG['admin_console_title_updater'] = "Actualizador";
$_ADDONLANG['admin_console_title_mutation'] = "Herramienta de mutación";
$_ADDONLANG['admin_console_title_dnssec'] = "Heramienta DNSsec";
$_ADDONLANG['admin_console_title_index'] = "Indexar nombre del servidor";

// Admin Messages
$_ADDONLANG['admin_msg_rde_title'] = "Problema de base de datos remota";
$_ADDONLANG['admin_msg_rde_desc'] = "Hay un problema con una base de datos remota. Compruebe los ajustes de la base de datos del nombre del servidor!";

$_ADDONLANG['admin_msg_ssherror_title'] = "Ha ocurrido un error SSH";
$_ADDONLANG['admin_msg_ssherror_desc'] = "Hay un problema con una conexión SSH. Compruebe los ajustes del nombre de servidor SSH!";

$_ADDONLANG['admin_msg_sshsuccess_title'] = "Conexión SSH establecida";
$_ADDONLANG['admin_msg_sshsuccess_desc'] = "Se ha establecido con éxito una conexión SSH al servidor.";

$_ADDONLANG['admin_msg_invalid_request_title'] = "Solicitud inválida";
$_ADDONLANG['admin_msg_invalid_request_desc'] = "El sistema podría no procesar su solicitud ya que parece ser inválida.";

$_ADDONLANG['admin_msg_invalid_license_title'] = "La función no tiene licencia";
$_ADDONLANG['admin_msg_invalid_license_desc'] = "La función solicitada podría no completarse porque no tiene licencia.";

$_ADDONLANG['admin_msg_maintenance_title'] = "Modo de mantenimiento activado";
$_ADDONLANG['admin_msg_maintenance_desc'] = "El modo de mantenimiento está activado. La gestión DNS para clientes está deshabilitada.";

$_ADDONLANG['admin_msg_cron_reset_title'] = "Reinicio Cron completado";
$_ADDONLANG['admin_msg_cron_reset_desc'] = "El estado de cron se ha restablecido correctamente.";

$_ADDONLANG['admin_msg_update_title'] = "Nueva actualización disponible";
$_ADDONLANG['admin_msg_update_desc'] = "Hay una nueva actualización disponible v%s (%h). Puede descargar el paquete de <a href=\"https://ssc.netdistrict.net\">client area</a>.";

$_ADDONLANG['admin_msg_update_dismiss_title'] = "Actualización descartada";
$_ADDONLANG['admin_msg_update_dismiss_desc'] = "La notificación de actualización ha sido descartada.";

$_ADDONLANG['admin_msg_update_check_title'] = "Comprobación de actualización completada";
$_ADDONLANG['admin_msg_update_check_desc'] = "El sistema ha comprobado actualizaciones.";

$_ADDONLANG['admin_msg_nozone_title'] = "La zona no ha podido encontrarse!";
$_ADDONLANG['admin_msg_nozone_desc'] = "La zona no parece estar asignada y puede no existir en el nombre del servidor.";

$_ADDONLANG['admin_msg_clearlogs_title'] = "Registros borrados con éxito!";
$_ADDONLANG['admin_msg_clearlogs_desc'] = "Todos los registros SoluteDNS han sido borrados con éxito.";

#####################
// GLOBAL LANGUAGE //
#####################

// Titles
$_ADDONLANG['global_title_system_error'] = "Imposible cambiar los ajustes DNS!";
$_ADDONLANG['global_title_system_permission'] = "Accceso denegado!";
$_ADDONLANG['global_title_system_invalid'] = "Solicitud Inválida";
$_ADDONLANG['global_title_unauthorized'] = "Solicitud no autorizada";

$_ADDONLANG['global_title_dns_record_edited'] = "El registro ha sido editado!";
$_ADDONLANG['global_title_dns_record_added'] = "El registro ha sido añadido!";
$_ADDONLANG['global_title_dns_record_deleted'] = "El registro ha sido borrado!";
$_ADDONLANG['global_title_dns_record_limit'] = "Se ha alcanzado el máximo número de registros!";
$_ADDONLANG['global_title_dns_zone_limit'] = "Se ha alcanzado el máximo número de zonas!";
$_ADDONLANG['global_title_dns_error'] = "Imposible hacer cambios";
$_ADDONLANG['global_title_dns_invalid_hostname'] = "Nombre del host inválido";
$_ADDONLANG['global_title_dns_invalid_domain'] = "Dominio inválido";
$_ADDONLANG['global_title_dns_reverse_updated'] = "Nombre del host inverso actualizado";
$_ADDONLANG['global_title_dns_zone_exists'] = "Zona no disponible";
$_ADDONLANG['global_title_dns_zone_created'] = "Zona creada";
$_ADDONLANG['global_title_dns_zone_unable_delete'] = "Imposible borrar zona";
$_ADDONLANG['global_title_dns_zone_exception_delete'] = "Zona borrada con excepción";
$_ADDONLANG['global_title_dns_zone_deleted'] = "Zona borrada";
$_ADDONLANG['global_title_dns_zone_imported'] = "Zona importada";

$_ADDONLANG['global_title_template_applied'] = "Plantilla aplicada";

// Desc
$_ADDONLANG['global_desc_system_dbnotavailable'] = "En este momento es imposible cambiar los ajustes DNS de su dominio. Por favor intente de nuevo más tarde. Si este problema persiste por favor contacte con soporte!";
$_ADDONLANG['global_desc_system_dbnotavailable_admin'] = "La base de datos del nombre del servidor no está disponible, es imposible realizar cambios!";
$_ADDONLANG['global_desc_system_slavezone'] = "La zona parece ser una zona esclava, la cual no puede ser editada. Si cre que esto está mal por favor contacte con soporte.";
$_ADDONLANG['global_desc_system_permission'] = "No tiene suficientes permisos para acceder a esta zona.";
$_ADDONLANG['global_desc_system_auth'] = "No parece estar autorizado para hacer cambios en esta zona.";
$_ADDONLANG['global_desc_system_invalid'] = "El sistema podría no procesar su solicitud ya que parece ser inválida.";
$_ADDONLANG['global_desc_system_invalid_record'] = "El sistema podría no procesar su solicitud ya que el tipo de registro no está permitido.";
$_ADDONLANG['global_desc_unauthorized'] = "El sistema podría no procesar su solicitud ya que parece no estar autorizada.";

$_ADDONLANG['global_desc_dns_record_edited'] = "Los registros cambiados han sido guardados con éxito.";
$_ADDONLANG['global_desc_dns_record_added'] = "Se ha añadido un nuevo registro con éxito.";
$_ADDONLANG['global_desc_dns_record_deleted'] = "El registro ha sido borrado con éxito.";
$_ADDONLANG['global_desc_dns_record_limit'] = "Los registros permitidos actuales en una zona son: ";
$_ADDONLANG['global_desc_dns_zone_system_limit'] = "El sistema no puede añadir zonas adicionales.";
$_ADDONLANG['global_desc_dns_zone_client_limit'] = "Ha alcanzado el máximo de zonas permitidas en su cuenta.";
$_ADDONLANG['global_desc_dns_invalid_hostname'] = "Por favor introduzca un nombre de host válido.";
$_ADDONLANG['global_desc_dns_invalid_domain'] = "Por favor introduzca un nombre de dominio válido.";
$_ADDONLANG['global_desc_dns_reverse_updated'] = "El nombre del host inverso ha sido actualizado.";
$_ADDONLANG['global_desc_dns_zone_exists'] = "La zona no está disponible porque ya se está utilizando.";
$_ADDONLANG['global_desc_dns_zone_created'] = "Se ha creado una nueva zona con éxito.";
$_ADDONLANG['global_desc_dns_zone_unable_delete'] = "El sistema no ha podido borrar esta zona porque podría no encontrarse en el nombre del servidor.";
$_ADDONLANG['global_desc_dns_zone_deleted'] = "Zona borrada con éxito.";
$_ADDONLANG['global_desc_dns_zone_imported'] = "La importación de la zona se ha completado. Los registros fueron moderados por el sistema.";

$_ADDONLANG['global_desc_template_applied'] = "La plantilla se ha aplicado con éxito.";

// DNS Validation
$_ADDONLANG['global_validate_dns_service_unavailable'] = "Servicio no disponible!";	
$_ADDONLANG['global_validate_dns_zone_not_found'] = "La zona no se ha encontrado. Imposible llevar a cabo la acción.";
$_ADDONLANG['global_validate_dns_no_records_in_zone'] = "No se han encontrado registros para est zona.";
$_ADDONLANG['global_validate_dns_no_dnssec_for_zone'] = "No se han encontrado claves DNSsec para esta zona.";

$_ADDONLANG['global_validate_dns_record_not_found'] = "No se ha encontrado registro.";
$_ADDONLANG['global_validate_dns_record_collision'] = "Se han encontrado múltiples registros, imposible completar la acción!";
$_ADDONLANG['global_validate_dns_record_no_priority'] = "El tipo de registro le solicita especificar una prioridad numérica.";
$_ADDONLANG['global_validate_dns_record_invalid_priority'] = "El tipo de registro le solicita especificar una prioridad numérica.";

$_ADDONLANG['global_validate_dns_no_database'] = "La validación no es posible. Conexión a la base de datos no disponible.";
$_ADDONLANG['global_validate_dns_domain_not_in_name'] = "El campo de nombre debe contener el nombre del dominio.";
$_ADDONLANG['global_validate_dns_type_empty'] = "El tipo de registro no puede estar vacío.";
$_ADDONLANG['global_validate_dns_invalid_type'] = "El tipo de registro no se reconoce.";
$_ADDONLANG['global_validate_dns_invalid_ttl'] = "El valor TTL debe ser numérico.";
$_ADDONLANG['global_validate_dns_content_too_long'] = "El contenido de valor introucido es demasiado largo y no puede contener más de 4096 caracteres.";

$_ADDONLANG['global_validate_dns_invalid_ipv4'] = "La dirección IPv4 parece no ser válida.";
$_ADDONLANG['global_validate_dns_invalid_ipv6'] = "La dirección IPv6 parece no ser válida. Las direcciones IPv4 en notación IPv6 no están soportadas.";

$_ADDONLANG['global_validate_dns_invalid_not_quoted'] = "El contenido debe ser citado (\").";

$_ADDONLANG['global_validate_dns_invalid_fqhn'] = "El tipo de registro debe contener un nombre de host válido, no finalizar con un punto (.).";
$_ADDONLANG['global_validate_dns_invalid_fqdn'] = "El tipo de registro debe contener un dominioválido, no finalizar con un punto (.).";

$_ADDONLANG['global_validate_dns_invalid_arpa'] = "Nombre inverso no válido.";
$_ADDONLANG['global_validate_dns_not_unique'] = "Ya existe un registro similar.";
$_ADDONLANG['global_validate_dns_non_alias_target'] = "No pudere referir un registro NS o MX a un registro CNAME.";

$_ADDONLANG['global_validate_dns_tlsa_parts_missing'] = htmlentities("Un registro TLSA debe contener: <usage> <selector> <type> <fingeprint>.");
$_ADDONLANG['global_validate_dns_tlsa_invalid_0_part'] = "O bien debe proporcionarse un campo de uso: 0 (PKIX-TA), 1 (PKIX-EE), 2 (DANE-TA) o 3 (DANE-EE).";
$_ADDONLANG['global_validate_dns_tlsa_invalid_1_part'] = "O bien debe proporcionarse un campo selector: 0 (Coincidencia de certificado completo) o 1 (Coincidencia solamente en información de clave pública sujeto).";
$_ADDONLANG['global_validate_dns_tlsa_invalid_2_part'] = "O bien debe proporcionarse un campo de tipo coincidente: 0 (Coincidencia exacta), 1 (SHA-256 hash) o 2 (SHA-512 hash).";
$_ADDONLANG['global_validate_dns_tlsa_invalid_3_part'] = "Debe proporcionarse una huella SHA-256 con 64 caracteres ASCII hexadecimales.";
$_ADDONLANG['global_validate_dns_tlsa_invalid_4_part'] = "Debe proporcionarse una huella SHA-512 con 128 caracteres ASCII hexadecimales";

$_ADDONLANG['global_validate_dns_naptr_parts_missing'] = htmlentities("Un registro NAPTR debe contener (incluyendo las comillas y finales de puntos): <order> <preference> \"<flags>\" \"<service>\" \"<regexp>\" reemplazo.");
$_ADDONLANG['global_validate_dns_naptr_part_0_invalid'] = "La parte 1 del registro debe ser numérica.";
$_ADDONLANG['global_validate_dns_naptr_part_1_quote_invalid'] = "La parte 2 del registro debe ser citada.";
$_ADDONLANG['global_validate_dns_naptr_part_1_flags_invalid'] = "La parte 2 del registro contiene caracteres inválidos. Esta parte solo puede contener caracteres alfanuméricos.";
$_ADDONLANG['global_validate_dns_naptr_part_1_ex_flags_invalid'] = "La parte 2 del registro contiene demasiadas banderas (S, A, U) Solamente se puede utilizar una cada vez.";
$_ADDONLANG['global_validate_dns_naptr_part_2_quote_invalid'] = "La parte 3 del registro debe ser citada.";
$_ADDONLANG['global_validate_dns_naptr_part_2_terminal_flag_invalid'] = "Un SERVICIO (parte 3 del registro) debe especificarse si las banderas incluyen una bandera terminal.";
$_ADDONLANG['global_validate_dns_naptr_part_2_service_invalid'] = "SERVICIO (parte 3 del registro) parece ser inválido.";
$_ADDONLANG['global_validate_dns_naptr_part_3_delimiter_invalid'] = "La expresión regular de reemplazo POSIX (parte 4 del registro) es inválida. El delimitador no puede ser: 'i', '\\' o ser un dígito.";
$_ADDONLANG['global_validate_dns_naptr_part_3_replacement_invalid'] = "La expresión regular de reemplazo POSIX (parte 4 del registro) es inválida. No se han especificado todas las partes necesarias.";
$_ADDONLANG['global_validate_dns_naptr_part_3_backref_invalid'] = "La expresión regular de reemplazo POSIX (parte 4 del registro) es inválida. Sólo se puede utilizar una referencia hacia atrás, y debe ser como: '\\1'.";
$_ADDONLANG['global_validate_dns_naptr_part_3_flag_invalid'] = "La bandera de expresiones regulares POSIX (parte 5 del registro ) es inválida. Opcionalmente puede contener 'i', o nada en absoluto.";
$_ADDONLANG['global_validate_dns_naptr_part_4_empty_invalid'] = "La parte 5 del registro es inválida y debe ser un puntero de registro o un punto simple.";
$_ADDONLANG['global_validate_dns_naptr_part_4_sim_invalid'] = "Las variables de sustitución y de expresiones regulares (parte 5 del registro) no pueden utilizarse simultáneamente.";
$_ADDONLANG['global_validate_dns_naptr_part_4_replacement_invalid'] = "La variable de sustitución (parte 5 del registro) debe ser  '.' o un dominio válido.";

$_ADDONLANG['global_validate_dns_rp_parts_missing'] = htmlentities("Los registros RP deben tener: <mailbox name> <more info pointer>");
$_ADDONLANG['global_validate_dns_rp_part_0_invalid'] = "El nombre de buzón de correo debe tener una dirección de correo electrónico con el signo arroba (@) reemplazado por un punto (.).";
$_ADDONLANG['global_validate_dns_rp_part_1_invalid'] = "El puntero de más información debe ser un nombre de dominio válido.";

$_ADDONLANG['global_validate_dns_soa_parts_missing'] = htmlentities("El registro SOA debe contener: <primary-ns> <hostmaster> <serial> <refresh> <retry> <expire> <default_ttl>");
$_ADDONLANG['global_validate_dns_soa_part_0_invalid'] = "El dominio del nombre de servidor principal no es válido.";
$_ADDONLANG['global_validate_dns_soa_part_1_invalid'] = "La dirección de correo electrónico del maestro del servidor no es válido.";
$_ADDONLANG['global_validate_dns_soa_part_2_invalid'] = "El serial (parte 3) debe ser numérico.";
$_ADDONLANG['global_validate_dns_soa_part_3_invalid'] = "El refresco (parte 4) debe ser numérico.";
$_ADDONLANG['global_validate_dns_soa_part_4_invalid'] = "Volver a intentar (parte 5) debe ser numérico.";
$_ADDONLANG['global_validate_dns_soa_part_5_invalid'] = "Caducar (parte 6) debe ser numérico.";
$_ADDONLANG['global_validate_dns_soa_part_6_invalid'] = "TTL por defecto (parte 7) debe ser numérico.";

$_ADDONLANG['global_validate_dns_sshfp_parts_missing'] = htmlentities("Un registro SSHFP debe contener: <algorithm> <fp-type> <fingeprint>");
$_ADDONLANG['global_validate_dns_sshfp_invalid_0_part'] = "O bien debe proporcionarse un algoritmo: 1 (RSA), 2 (DSA) o 3 (ECDSA).";
$_ADDONLANG['global_validate_dns_sshfp_invalid_1_part'] = "O bien debe proporcionarse como tipo FP: 1 (SHA-1) o 2 (SHA-256).";
$_ADDONLANG['global_validate_dns_sshfp_invalid_2_part'] = "Debe proporcionarse una huella SHA-1 con 40 caracteres ASCII hexadecimales.";
$_ADDONLANG['global_validate_dns_sshfp_invalid_3_part'] = "Debe proporcionarse una huella SHA-256 con 64 caracteres ASCII hexadecimales.";

$_ADDONLANG['global_validate_dns_srv_missing_priority'] = "Debe proporcionarse una prioridad.";
$_ADDONLANG['global_validate_dns_srv_parts_missing'] = htmlentities("El registro SRV debe contener: <weight> <port> <service>");
$_ADDONLANG['global_validate_dns_srv_part_0_invalid'] = "El peso (parte 1) debe ser numérico.";
$_ADDONLANG['global_validate_dns_srv_part_1_invalid'] = "El puerto (parte 2) debe ser numérico.";
$_ADDONLANG['global_validate_dns_srv_part_2_invalid'] =  "Un registro SRV debe contener un dominio válido como servicio.";

$_ADDONLANG['global_validate_dns_hinfo_invalid'] = "El contenido del campo HINFI contiene un valor inválido.";

$_ADDONLANG['global_validate_template_tag'] = "Por favor asegúrese si utiliza la etiqueta &lt;default-ipv4&gt; o &lt;default-ipv6&gt; que la dirección IP ha sido definida en los ajustes de la plantilla.";

// Global Assistant
$_ADDONLANG['global_tlsa_pkixta'] = "PKIX-TA: CA Constraint";
$_ADDONLANG['global_tlsa_pkixee'] = "PKIX-EE: Service Certificate Constraint";
$_ADDONLANG['global_tlsa_daneta'] = "DANE-TA: Trust Anchor Assertion";
$_ADDONLANG['global_tlsa_daneee'] = "DANE-EE: Domain Issued Certificate";
$_ADDONLANG['global_tlsa_fullcert'] = "Use full certificate";
$_ADDONLANG['global_tlsa_subjectpublickey'] = "Use subject public key";
$_ADDONLANG['global_tlsa_256hash'] = "SHA-256 Hash";
$_ADDONLANG['global_tlsa_512hash'] = "SHA-512 Hash";

$_ADDONLANG['global_tlsa_pkixta_info'] = "For a CA certificate or public key of this certificate that requires to be in the certification path and must pass PKIX validation (Public-Key Infrastructure).";
$_ADDONLANG['global_tlsa_pkixee_info'] = "For a certificate or public key of this certificate that requires to match the server certificate and must pass PKIX validation (Public-Key Infrastructure).";
$_ADDONLANG['global_tlsa_daneta_info'] = "For a CA certificate or public key of this certificate that requires to be in the certification path. The record is considered to be the trust anchor.";
$_ADDONLANG['global_tlsa_daneee_info'] = "For a certificate or public key of this certificate that requires to match the server certificate.";
$_ADDONLANG['global_tlsa_certificate_info'] = "Enter PEM format X.509 certificate.";

$_ADDONLANG['global_tlsa_cert_expired_title'] = "Certificate Invalid";
$_ADDONLANG['global_tlsa_cert_expired_desc'] = "The certificate you have entered has expired or is invalid and cannot be used.";

// Global Messages
$_ADDONLANG['global_msg_changes_saved_title'] = "Se han guardado los cambios!";
$_ADDONLANG['global_msg_changes_saved_desc'] = "Todos los cambios han sido guardados con éxito.";

$_ADDONLANG['global_msg_template_created_title'] = "Nueva plantilla creada!";
$_ADDONLANG['global_msg_template_created_desc'] = "Se ha añadido una nueva plantilla con éxito.";

$_ADDONLANG['global_msg_template_update_title'] = "Nombre de plantilla actualizado!";
$_ADDONLANG['global_msg_template_update_desc'] = "El nombre de la plantilla ha sido actualizado con éxito.";

$_ADDONLANG['global_msg_template_removed_title'] = "Plantilla eliminada!";
$_ADDONLANG['global_msg_template_removed_desc'] = "La plantilla ha sido eliminada con éxito.";

$_ADDONLANG['global_msg_invalid_ip_title'] = "La dirección IP no es válida!";
$_ADDONLANG['global_msg_invalid_ip_desc'] = "La dirección IP introducida no es válida.";
$_ADDONLANG['global_msg_invalid_ip4_desc'] = "La dirección IPv4 por defecto introducida no es válida.";
$_ADDONLANG['global_msg_invalid_ip6_desc'] = "La dirección IPv6 por defecto introducida no es válida.";

$_ADDONLANG['global_msg_template_updated_title'] = "Ajustes de plantilla actualizados!";
$_ADDONLANG['global_msg_template_updated_desc'] = "Los ajustes de plantilla fueron actualizados con éxito.";

$_ADDONLANG['global_msg_health_reset_title'] = "Salud reiniciada completada!";
$_ADDONLANG['global_msg_health_reset_desc'] = "El estado de salud ha sido reiniciado con éxito.";

$_ADDONLANG['global_msg_client_notfound_title'] = "Cliente no encontrado!";
$_ADDONLANG['global_msg_client_notfound_desc'] = "El cliente no ha sido encontrado. Imposible proceder.";

$_ADDONLANG['global_msg_domain_notlocal_title'] = "Imposible enlazar al dominio local!";
$_ADDONLANG['global_msg_domain_notlocald_desc'] = "No se ha podido enlazar esta zona a un activo local o dominio pendiente para este cliente.";
$_ADDONLANG['global_msg_domain_notlocalp_desc'] = "No se ha podido enlazar esta zona a un activo local o producto pendiente que esta establecido para permitir zonas DNS para este cliente.";

$_ADDONLANG['global_msg_unknown_zonetype_title'] = "Imposible determinar el tipo de zona!";
$_ADDONLANG['global_msg_unknown_zonetype_desc'] = "No se ha podido crear la zona porque el tipo de zona es desconocido.";

$_ADDONLANG['global_msg_delete_selected_title'] = "Borrado seleccionado completado!";
$_ADDONLANG['global_msg_delete_selected_desc'] = "La acción para borrar los elementos seleccionados ha sido completada.";

$_ADDONLANG['global_msg_template_activated_title'] = "Plantilla activada!";
$_ADDONLANG['global_msg_template_activated_desc'] = "La plantilla por defecto para su cuenta ha sido activada con éxito.";

$_ADDONLANG['global_msg_invalid_reverse_title'] = "La zona inversa es inválida";
$_ADDONLANG['global_msg_invalid_reverse_desc'] = "La zona inversa parece ser inválida y no puede ser creada.";

$_ADDONLANG['global_msg_invalid_input_title'] = "Entrada inválida";
$_ADDONLANG['global_msg_invalid_input_desc'] = "El sistema no ha podido procesar su solicitud debido a una entrada inválida.";
		
// Health
$_ADDONLANG['health_ok'] = "Ok.";
$_ADDONLANG['health_pending'] = "El estado está pendiente...";

$_ADDONLANG['health_NS001'] = "ERROR: El nombre del servidor padre devuelve los nombres de servidores desviados!";
$_ADDONLANG['health_NS002'] = "AVISO: No todos los nombres de servidores son conocidos por el nombre del servidor padre!";
$_ADDONLANG['health_ZONE001'] = "ERROR: Hay un problema con el procesado de los registros en esta zona, por favor contacte con soporte!";
$_ADDONLANG['health_ZONE002'] = "AVISO: Uno o más registros son incorrectos, esto puede causar problemas.";
$_ADDONLANG['health_LU001'] = "ERROR: La zona no es consistente en todos los nombres de servidores y uno o más nombres de servidores han fallado en informar a esta zona!";
$_ADDONLANG['health_LU002'] = "ERROR: La zona no es consistente en todos los nombres de servidores!";
$_ADDONLANG['health_LU003'] = "AVISO: Uno o más nombres de servidores han fallado en informar a esta zona!";

// No JavaScript
$_ADDONLANG['nojavascript_title'] = "JavaScript deshabilitado";
$_ADDONLANG['nojavascript_desc'] = "Esta página requiere que JavaScript esté habilitado para funcionar apropiadamente. Por favor habilite JavaScript en su navegador para continuar.";

// Override
if(file_exists(dirname(__FILE__).'/override/spanish.php'))
	include dirname(__FILE__).'/override/spanish.php';

?>