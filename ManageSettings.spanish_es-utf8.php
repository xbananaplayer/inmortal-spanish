<?php
// Version: Inmortal 1.0 Beta; ManageSettings

global $scripturl;

$txt['modSettings_desc'] = 'Esta página te permite cambiar la configuración de características, mods y opciones básicas de tu foro. Por favor, entra en <a href="' . $scripturl . '?action=admin;area=theme;sa=settings;th=%1$s;%3$s=%2$s">Configuración del tema</a> para más opciones. Pulsa en los iconos de ayuda para obtener más información acerca de una opción.';
$txt['modification_settings_desc'] = 'Esta página contiene configuraciones añadidas por las modificaciones que tengas instaladas en tu foro';

$txt['modification_no_misc_settings'] = 'No hay modificaciones instaladas que hayan añadido ninguna configuración a este área aún.';

$txt['pollMode'] = 'Modo Encuesta';
$txt['disable_polls'] = 'Desactivar encuestas';
$txt['enable_polls'] = 'Activar encuestas';
$txt['polls_as_topics'] = 'Mostrar las encuestas existentes como temas';
$txt['allow_guestAccess'] = 'Permitir ver el foro a los invitados';
$txt['userLanguage'] = 'Activar soporte de idioma seleccionable por el usuario';
$txt['allow_hideOnline'] = 'Permitir a los no-administradores ocultar su estado de conexión';
$txt['titlesEnable'] = 'Activar títulos personalizados';
$txt['enable_buddylist'] = 'Activar listas de amigos/ignorados';
$txt['default_personal_text'] = 'Texto personal por defecto';
$txt['default_personal_text_note'] = 'Personal text to assign to newly registered members.';
$txt['time_format'] = 'Formato de Tiempo por defecto';
$txt['setting_time_offset'] = 'Diferencia horaria global<div class="smalltext">(añadida a la opción específica del usuario.)</div>';
$txt['setting_time_offset_note'] = '(added to the member specific option)';
$txt['setting_default_timezone'] = 'Zona horaria del servidor';
$txt['failed_login_threshold'] = 'Umbral de conexiones fallidas';
$txt['loginHistoryDays'] = 'Days to keep login history';
$txt['lastActive'] = 'Umbral de tiempo conectado';
$txt['trackStats'] = 'Estadísticas diarias';
$txt['hitStats'] = 'Visualizaciones de página diaria de Estadísticas (las estadísticas deben estar activadas)';
$txt['enableCompressedOutput'] = 'Activar salida comprimida';
$txt['disableTemplateEval'] = 'Desactivar evaluación de plantillas';
$txt['databaseSession_enable'] = 'Utilizar sesiones controladas por base de datos';
$txt['databaseSession_loose'] = 'Permitir a los navegadores ir atrás hacia páginas en caché';
$txt['databaseSession_lifetime'] = 'Segundos transcurridos antes de que expire una sesión inactiva';
$txt['error_log_desc'] = 'The error log, if enabled, will log every error encountered by users using your forum. This can be an invaluable aid to identifying forum problems.';
$txt['enableErrorLogging'] = 'Activar log de errores';
$txt['enableErrorQueryLogging'] = 'Incluir consultas a la base de datos en el registro (log) de errores';
$txt['pruningOptions'] = 'Activar la purga de entradas del registro';
$txt['pruneErrorLog'] = 'Eliminar entradas del registro de errores con más de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['pruneModLog'] = 'Eliminar entradas del registro de moderación con más de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['pruneBanLog'] = 'Eliminar entradas del registro de baneos con más de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['pruneReportLog'] = 'Eliminar entradas del registro de avisos de moderación con más de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['pruneScheduledTaskLog'] = 'Eliminar entradas del registro de tareas programadas con más de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['pruneSpiderHitLog'] = 'Eliminar entradas del registro de búsquedas con más de:<div class="smalltext">(0 para deshabilitar)</div>';
$txt['cookieTime'] = 'Duración de cookies de conexión por defecto (en minutos)';
$txt['localCookies'] = 'Activar el almacenamiento local de cookies<div class="smalltext">(SSI no funciona bien activando esta opción.)</div>';
$txt['globalCookies'] = 'Utilizar cookies independientes por subdominios<div class="smalltext">(¡debes desactivar las cookies locales primero!)</div>';
$txt['globalCookiesDomain'] = 'Main domain used for subdomain independent cookies';
$txt['invalid_cookie_domain'] = 'The domain introduced seems to be invalid, please check it and save again.';
$txt['secureCookies'] = 'Forzar a que las cookies sean seguras<div class="smalltext">(Esto sólo se aplica si estás usando HTTPS - ¡no lo uses en otro caso!)</div>';
$txt['httponlyCookies'] = 'Force cookies to be made accessible only through the HTTP protocol';
$txt['securityDisable'] = 'Desactivar la seguridad de la administración';
$txt['securityDisable_moderate'] = 'Disable moderation security';
$txt['send_validation_onChange'] = 'Requerir reactivación después de un cambio de dirección email';
$txt['approveAccountDeletion'] = 'Requerir aprobación del administrador cuando el usuario borra su cuenta';
$txt['autoFixDatabase'] = 'Arreglar automáticamente tablas corruptas';
$txt['allow_disableAnnounce'] = 'Permitir a los usuarios desactivar notificaciones';
$txt['disallow_sendBody'] = 'No permitir enviar el texto del mensaje en las notificaciones';
$txt['enable_ajax_alerts'] = 'Allow AJAX Desktop Notifications for Alerts';
$txt['jquery_source'] = 'Source for the jQuery Library';
$txt['jquery_custom_label'] = 'Custom';
$txt['jquery_custom'] = 'Custom url to the jQuery Library';
$txt['jquery_local'] = 'Local';
$txt['jquery_cdn'] = 'Google CDN';
$txt['jquery_auto'] = 'Auto';
$txt['queryless_urls'] = 'Mostrar URLs de búsqueda de modo amigable<div class="smalltext"><strong>¡Sólo Apache/Lighttpd!</strong></div>';
$txt['queryless_urls_note'] = 'Apache/Lighttpd only';
$txt['enableReportPM'] = 'Activar el aviso de mensajes privados';
$txt['max_pm_recipients'] = 'Número máximo de destinatarios permitidos en un mensaje privado.<div class="smalltext">(0 para ilimitado, exceptuando administradores)</div>';
$txt['max_pm_recipients_note'] = '(0 for no limit, admins are exempt)';
$txt['pm_posts_verification'] = 'Número de mensajes mínimo para no tener que introducir un código al enviar mensajes privados.<div class="smalltext">(0 para ilimitado, exceptuando administradores)</div>';
$txt['pm_posts_verification_note'] = '(0 for no limit, admins are exempt)';
$txt['pm_posts_per_hour'] = 'Número de mensajes privados que puede enviar un usuario en una hora <div class="smalltext">(0 para ilimitados, exceptuando moderadores)</div>';
$txt['pm_posts_per_hour_note'] = '(0 for no limit, moderators are exempt)';
$txt['compactTopicPagesEnable'] = 'Límitar el número de vínculos mostrados';
$txt['contiguous_page_display'] = 'Páginas contiguas a mostrar';
$txt['to_display'] = 'mostrar';
$txt['todayMod'] = 'Activar la funcionalidad &quot;Hoy&quot;';
$txt['today_disabled'] = 'Desactivada';
$txt['today_only'] = 'Sólo Hoy';
$txt['yesterday_today'] = 'Hoy y Ayer';
$txt['onlineEnable'] = 'Mostrar conectado/desconectados en mensajes normales y privados';
$txt['defaultMaxMembers'] = 'Usuarios por página de la lista de usuarios';
$txt['timeLoadPageEnable'] = 'Mostrar el tiempo transcurrido para crear cada página';
$txt['disableHostnameLookup'] = '¿Desactivar búsquedas de nombre de servidor?';
$txt['who_enabled'] = 'Activar la lista de Usuarios conectados';
$txt['meta_keywords'] = 'Palabras clave meta (meta keywords) asociadas con el foro.<div class="smalltext">Para motores de búsqueda. Dejar en blanco para usar las establecidas por defecto.</div>';
$txt['meta_keywords_note'] = 'For search engines. Leave blank for default.';
$txt['settings_error'] = 'Warning: Updating of Settings.php failed, the settings cannot be saved.';
$txt['image_proxy_enabled'] = 'Enable Image Proxy';
$txt['image_proxy_secret'] = 'Image Proxy Secret';
$txt['image_proxy_maxsize'] = 'Maximum file size of images to cache (in KB)';
$txt['force_ssl'] = 'Forum SSL mode';
$txt['force_ssl_off'] = 'Disable SSL';
$txt['force_ssl_auth'] = 'Enable SSL for Authentication (Login and Register)';
$txt['force_ssl_complete'] = 'Force SSL throughout the forum';

// Like settings.
$txt['enable_likes'] = 'Enable likes';

// Mention settings.
$txt['enable_mentions'] = 'Enable mentions';

$txt['caching_information'] = '<div class="aligncenter underline"><strong>¡Importante! Lee esto antes de activar estas características.</strong></div><br />Inmortal soporta el caché utilizado con aceleradores. Los aceleradores actualmente soportados son:<br /> <ul class="normallist"> <li>APC</li> <li>eAccelerator</li> 	<li>Turck MMCache</li> <li>Memcached</li> <li>Zend Platform/Performance Suite (No Zend Optimizer)</li> <li>XCache</li>	</ul> El caché sólo funcionará en tu servidor si tienes PHP compilado con uno de los optimizadores de arriba, o si tienes el caché de memoria disponible.  Si no tienes ningún optimizador instalado en Inmortal, se utilizará un caché basado en archivos.<br /><br /> Inmortal guarda en caché a varios niveles. Cuanto mayor es el nivel de caché activado más tiempo de CPU se utilizará para obtener la información en caché. Si está disponible el caché en tu máquina es recomendable que intentes guardar en caché al nivel 1 primero.  <br /><br /> Ten en cuenta que si utilizas el caché de memoria necesitas proporcionar detalles del servidor en las opciones de abajo. Deberías introducirlo como lista separada por comas como se muestra en el ejemplo de abajo:<br /> &quot;servidor1,servidor2,servidor3:puerto,servidor4&quot;<br /><br /> Ten en cuenta que si no se especifica el puerto, Inmortal utilizará el puerto 11211. Inmortal intentará realizar un balanceo aleatorio entre los servidores. <br /><br />	%1$s';
$txt['detected_no_caching'] = '<strong class="alert">Inmortal no ha podido detectar un acelerador compatible en tu servidor.</strong>';
$txt['detected_accelerators'] = '<strong class="success">Inmortal has detected the following accelerators: %1$s</strong>';

$txt['cache_enable'] = 'Nivel de Caché';
$txt['cache_off'] = 'Sin caché';
$txt['cache_level1'] = 'Caché de Nivel 1 (Recomendado)';
$txt['cache_level2'] = 'Caché de Nivel 2';
$txt['cache_level3'] = 'Caché de Nivel 3 (No Recomendado)';
$txt['cache_memcached'] = 'Opciones de Memoria caché';
$txt['cache_accelerator'] = 'Caching Accelerator';
$txt['default_cache'] = 'Inmortal file based caching';
$txt['apc_cache'] = 'APC';
$txt['memcached_cache'] = 'Memcached';
$txt['zend_cache'] = 'Zend Platform/Performance Suite';
$txt['xcache_cache'] = 'XCache';

$txt['loadavg_warning'] = '<span class="error">Importante: las opciones de configuración que hay a continuación deben ser editadas con cuidado. Establecer alguna de ellas en un valor demasiado bajo puede dejar tu foro <strong>inutilizable</strong>. Actualmente el valor medio de carga es <strong>%01.2f</strong></span> ';
$txt['loadavg_enable'] = 'Activar balanceo de carga según valores medios de carga';
$txt['loadavg_auto_opt'] = 'Umbral para desactivar la optimización automática de base de datos';
$txt['loadavg_search'] = 'Umbral para desactivar la búsqueda';
$txt['loadavg_allunread'] = 'Umbral para desactivar todos los mensajes no leídos';
$txt['loadavg_unreadreplies'] = 'Umbral para desactivar respuestas no leídas';
$txt['loadavg_show_posts'] = 'Umbral para desactivar mostrar mensajes de usuario';
$txt['loadavg_userstats'] = 'Threshold to disabling showing user statistics';
$txt['loadavg_bbc'] = 'Threshold to disabling BBC formating when showing posts';
$txt['loadavg_forum'] = 'Umbral para desactivar el foro <strong>completamente</strong> ';
$txt['loadavg_disabled_windows'] = '<span class="error">El soporte para balanceo de carga no está disponible en Windows.</span> ';
$txt['loadavg_disabled_conf'] = '<span class="error">El soporte para balanceo de carga está desactivado por la configuración de tu host.</span> ';

$txt['setting_password_strength'] = 'Fuerza requerida para las claves de usuario';
$txt['setting_password_strength_low'] = 'Baja - 4 caracteres mínimo';
$txt['setting_password_strength_medium'] = 'Media - no puede contener el nombre de usuario';
$txt['setting_password_strength_high'] = 'Alta - mezcla de diferentes caracteres';
$txt['setting_enable_password_conversion'] = 'Allow password hash conversion';

$txt['antispam_Settings'] = 'Verificación Anti-Spam';
$txt['antispam_Settings_desc'] = 'Esta sección te permite configurar las comprobaciones de verificación para asegurar que el usuario es un humanon (y no un bot), y determinar cómo y dónde se aplican.';
$txt['setting_reg_verification'] = 'Requierir verificación en la página de registro';
$txt['posts_require_captcha'] = 'Número de posts por debajo del cual los usuarios deben pasar la verificación para escribir un post';
$txt['posts_require_captcha_desc'] = '(0 para ilimitado, los moderadores están exentos de esta limitación)';
$txt['search_enable_captcha'] = 'Requerir verificación en todas las búsquedas de invitados';
$txt['setting_guests_require_captcha'] = 'Los invitados deben pasar la verificación cuando escriban nuevos posts';
$txt['setting_guests_require_captcha_desc'] = '(Activado automáticamente si especificas un número mínimo de posts a continuación)';
$txt['question_not_defined'] = 'You need to add a question and answer for your forum\'s default language (%1$s) otherwise users will not be able to fill in a CAPTCHA, meaning no registration.';

$txt['configure_verification_means'] = 'Configurar métodos de verificación';
$txt['setting_qa_verification_number'] = 'Número de preguntas de verificación que el usuario debe contestar';
$txt['setting_qa_verification_number_desc'] = '(0 para desactivar; las preguntas se establecen más abajo)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">A continuación puedes establecer qué características anti-spam quieres tener activas cuando un usuario necesite verificar que es humano. Ten en cuenta que el usuario tendrá que pasar <em>todas</em> las verificaciones, así que si activas tanto la verificación de imagen como el test de pregunta/respuesta tendrá que completar ambas para proceder.</span>';
$txt['setting_visual_verification_type'] = 'Imagen para mostrar en la verificación visual';
$txt['setting_visual_verification_type_desc'] = 'Mientras más compleja sea la imagen más difícil será superarla para los bots';
$txt['setting_image_verification_off'] = 'Ninguna';
$txt['setting_image_verification_vsimple'] = 'Muy Simple - Texto plano en una imagen';
$txt['setting_image_verification_simple'] = 'Simple - Letras de colores solapadas, sin ruido';
$txt['setting_image_verification_medium'] = 'Media - Letras de colores solapadas, con ruido/líneas';
$txt['setting_image_verification_high'] = 'Alta - Letras torcidas, ruido/líneas considerables';
$txt['setting_image_verification_extreme'] = 'Extremo - Letras torcidas, ruido, líneas y bloques';
$txt['setting_image_verification_sample'] = 'Muestra';
$txt['setting_image_verification_nogd'] = '<strong>Aviso:</strong> dado que este servidor no tiene la librería GD instalada las configuraciones de distinta complejidad no tendrán ningún efecto.';
$txt['setup_verification_questions'] = 'Preguntas de verificación';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Si quieres que los usuarios respondan a una pregunta de verificación para detener a los bots de spam deberías establecer algunas preguntas en la tabla de debajo. Deberías elegir preguntas relativamente simples; las respuestas no son sensibles a las mayúsculas (case sensitive). Puedes usar BBC en las preguntas para darles formato. Para eliminar una pregunta simplemente borra el contenido de esa línea.</span>';
$txt['setup_verification_question'] = 'Pregunta';
$txt['setup_verification_answer'] = 'Respuesta';
$txt['setup_verification_add_more'] = 'Añadir otra pregunta';
$txt['setup_verification_add_answer'] = 'Add another answer';

$txt['moderation_settings'] = 'Opciones de Moderación';
$txt['setting_warning_enable'] = 'Activar Sistema de Advertencias al Usuario';
$txt['setting_warning_watch'] = 'Nivel de advertencia para usuarios vigilados<div class="smalltext">El nivel de advertencia al usuario con el que comenzará a ser vigilado - 0 para desactivar.</div>';
$txt['setting_warning_watch_note'] = 'The user warning level after which a user watch is put in place.';
$txt['setting_warning_moderate'] = 'Nivel de advertencia para moderación de mensajes<div class="smalltext">El nivel de advertencia al usuario a partir del que todos sus mensajes serán moderados - 0 para desactivar.</div>';
$txt['setting_warning_moderate_note'] = 'The user warning level after which a user has all posts moderated.';
$txt['setting_warning_mute'] = 'Nivel de advertencia para enmudecer<div class="smalltext">El nivel de advertencia al usuario a partir del cual el usuario no podrá continuar publicando mensajes - 0 para desactivar.</div>';
$txt['setting_warning_mute_note'] = 'The user warning level after which a user cannot post any further.';
$txt['setting_user_limit'] = 'Número máximo de puntos de advertencia por día<div class="smalltext">Este valor es la cantidad máxima de puntos de advertencia que un moderador puede asignar a un usuario en un periodo de 24 horas - 0 para ilimitado.</div>';
$txt['setting_user_limit_note'] = 'This value is the maximum amount of warning points a single moderator can assign to a user in a 24 hour period - 0 for no limit.';
$txt['setting_warning_decrement'] = 'Puntos de advertencia a decrementar a los usuarios cada 24 horas<div class="smalltext">Solo se aplica en usuarios que no hayan sido advertidos en las últimas 24 horas - establecer a 0 para desactivarlo.</div>';
$txt['setting_warning_decrement_note'] = 'Only applies to users not warned within last 24 hours.';
$txt['setting_warning_show'] = 'Mostrar el estado de advertencia de todos los usuarios<div class="smalltext">Si está desactivado, sólo los moderadores pueden ver el estado de advertencia de un usuario.</div>';
$txt['setting_warning_show_note'] = 'Determines who can see the warning level of users on the forum.';
$txt['setting_warning_show_mods'] = 'Sólo moderadores';
$txt['setting_warning_show_user'] = 'Moderadores y usuarios avisados';
$txt['setting_warning_show_all'] = 'Todos los usuarios';

$txt['signature_settings'] = 'Opciones de Firma';
$txt['signature_settings_desc'] = 'Utiliza las opciones de esta página para decidir cómo deberían ser tratadas las firmas de usuarios en Inmortal.';
$txt['signature_settings_warning'] = 'Las opciones no se aplicarán por defecto a las firmas ya existentes. Entra <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">aquí</a> para aplicar reglas a todas las firmas existentes.';
$txt['signature_settings_applied'] = 'The updated rules have been applied to the existing signatures.';
$txt['signature_enable'] = 'Activar firmas';
$txt['signature_max_length'] = 'Número máximo de caracteres permitidos<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_max_lines'] = 'Número máximo de líneas<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_max_images'] = 'Número máximo de imágenes<div class="smalltext">(0 para ilimitados - emoticonos excluidos)</div>';
$txt['signature_max_images_note'] = '(0 for no max - excludes smileys)';
$txt['signature_allow_smileys'] = 'Permitir smileys en las firmas';
$txt['signature_max_smileys'] = 'Número máximo de emoticonos<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_max_image_width'] = 'Ancho máximo para imágenes en la firma (pixels)<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_max_image_height'] = 'Largo máximo para imágenes en la firma (pixels)<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_max_font_size'] = 'Tamaño máximo de fuente permitido en las firmas<div class="smalltext">(0 para ilimitado)</div>';
$txt['signature_bbc'] = 'Activar etiquetas BBC';

$txt['custom_profile_title'] = 'Campos personalizados del Perfil';
$txt['custom_profile_desc'] = 'En esta página puedes crear tus propios campos personalizados para ajustarse a los requerimientos del foro';
$txt['custom_profile_active'] = 'Activo';
$txt['custom_profile_fieldname'] = 'Nombre del Campo';
$txt['custom_profile_fieldtype'] = 'Tipo de Campo';
$txt['custom_profile_fieldorder'] = 'Field Order';
$txt['custom_profile_make_new'] = 'Nuevo Campo';
$txt['custom_profile_none'] = '¡Aún no has creado ningún campo personalizado!';
$txt['custom_profile_icon'] = 'Icono';

$txt['custom_profile_type_text'] = 'Texto';
$txt['custom_profile_type_textarea'] = 'Texto largo';
$txt['custom_profile_type_select'] = 'Lista desplegable';
$txt['custom_profile_type_radio'] = 'Botón de selección';
$txt['custom_profile_type_check'] = 'Casilla de verificación';

$txt['custom_add_title'] = 'Añadir Campo del Perfil';
$txt['custom_edit_title'] = 'Editar Campo del Perfil';
$txt['custom_edit_general'] = 'Opciones de Visualización';
$txt['custom_edit_input'] = 'Opciones de Entrada';
$txt['custom_edit_advanced'] = 'Opciones Avanzadas';
$txt['custom_edit_name'] = 'Nombre';
$txt['custom_edit_desc'] = 'Descripción';
$txt['custom_edit_profile'] = 'Sección del Perfil';
$txt['custom_edit_profile_desc'] = 'Sección del perfil donde es editado.';
$txt['custom_edit_profile_none'] = 'En ninguna';
$txt['custom_edit_registration'] = 'Mostrar en la página de registro';
$txt['custom_edit_registration_disable'] = 'No';
$txt['custom_edit_registration_allow'] = 'Sí';
$txt['custom_edit_registration_require'] = 'Sí, y requerir entrada';
$txt['custom_edit_display'] = 'Mostrar en los Temas';
$txt['custom_edit_mlist'] = 'Show on memberlist';
$txt['custom_edit_picktype'] = 'Tipo de Campo';

$txt['custom_edit_max_length'] = 'Longitud Máxima';
$txt['custom_edit_max_length_desc'] = '(0 para ilimitada)';
$txt['custom_edit_dimension'] = 'Dimensiones';
$txt['custom_edit_dimension_row'] = 'Filas';
$txt['custom_edit_dimension_col'] = 'Columnas';
$txt['custom_edit_bbc'] = 'Permitir BBC';
$txt['custom_edit_options'] = 'Opciones';
$txt['custom_edit_options_desc'] = 'Dejar el cuadro de opción vacío para eliminarlo. El botón de selección marca la opción por defecto.';
$txt['custom_edit_options_more'] = 'Más';
$txt['custom_edit_default'] = 'Estado por defecto';
$txt['custom_edit_active'] = 'Activo';
$txt['custom_edit_active_desc'] = 'Si no está seleccionado este campo no se mostrará a nadie.';
$txt['custom_edit_privacy'] = 'Privacidad';
$txt['custom_edit_privacy_desc'] = 'Quién puede ver y editar este campo.';
$txt['custom_edit_privacy_all'] = 'Los usuarios pueden ver este campo; el propietario puede editarlo';
$txt['custom_edit_privacy_see'] = 'Los usuarios pueden ver este campo; sólo los administradores pueden editarlo';
$txt['custom_edit_privacy_owner'] = 'Los usuarios no pueden ver este campo; el propietario y los administradores pueden editarlo.';
$txt['custom_edit_privacy_none'] = 'Este campo sólo es visible para los administradores';
$txt['custom_edit_can_search'] = 'Se puede buscar';
$txt['custom_edit_can_search_desc'] = 'Este campo puede ser buscado en la lista de usuarios.';
$txt['custom_edit_mask'] = 'Máscara de Introducción';
$txt['custom_edit_mask_desc'] = 'Para los campos de texto se puede seleccionar una máscara de introducción para validar los datos.';
$txt['custom_edit_mask_email'] = 'Dirección Email válida';
$txt['custom_edit_mask_number'] = 'Numérico';
$txt['custom_edit_mask_nohtml'] = 'Sin HTML';
$txt['custom_edit_mask_regex'] = 'Expresión Regular (Avanzado)';
$txt['custom_edit_enclose'] = 'Mostrar incrustado en el texto (opcional)';
$txt['custom_edit_enclose_desc'] = 'Te recomendamos <strong>fervientemente</strong> que uses una máscara de entrada para validar los datos de entrada proporcionados por el usuario.';

$txt['custom_edit_order_move'] = 'Move ';
$txt['custom_edit_order_up'] = 'Up';
$txt['custom_edit_order_down'] = 'Down';
$txt['custom_edit_placement'] = 'Elegir colocación';
$txt['custom_edit_placement_standard'] = 'Estándar (con título)';
$txt['custom_edit_placement_with_icons'] = 'With Icons';
$txt['custom_edit_placement_above_signature'] = 'Above Signature';
$txt['custom_profile_placement'] = 'Colocación';
$txt['custom_profile_placement_standard'] = 'Estándar';
$txt['custom_profile_placement_with_icons'] = 'With Icons';
$txt['custom_profile_placement_above_signature'] = 'Above Signature';
$txt['custom_profile_placement_below_signature'] = 'Below Signature';
$txt['custom_profile_placement_below_avatar'] = 'Below Avatar';
$txt['custom_profile_placement_above_name'] = 'Above Username';
$txt['custom_profile_placement_bottom'] = 'Bottom poster info';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = '¿Estás seguro de que quieres eliminar este campo? - ¡toda la información de usuarios relacionada se perderá!';

$txt['standard_profile_title'] = 'Campos Estándar del Perfil';
$txt['standard_profile_field'] = 'Campo';
$txt['standard_profile_field_timezone'] = 'Timezone';

$txt['languages_lang_name'] = 'Nombre del idioma';
$txt['languages_locale'] = 'Locale';
$txt['languages_default'] = 'Por defecto';
$txt['languages_character_set'] = 'Juego de caracteres';
$txt['languages_users'] = 'Usuarios';
$txt['language_settings_writable'] = 'Aviso: el archivo Settings.php no es escribible, así que la configuración del idioma por defecto no puede ser guardada.';
$txt['edit_languages'] = 'Editar idiomas';
$txt['lang_file_not_writable'] = '<strong>Aviso:</strong> El archivo de idioma primario (%1$s) no es escribible. Debes hacerlo escribible antes de poder aplicar ningún cambio.';
$txt['lang_entries_not_writable'] = '<strong>Aviso:</strong> El archivo de idioma que quieres editar (%1$s) no es escribible. Debes hacerlo escribible antes de que puedas hacerle algún cambio.';
$txt['languages_ltr'] = 'De derecha a izquierda';

$txt['add_language'] = 'Añadir idioma';
$txt['add_language_smf'] = 'Descargar desde K Dev Team';
$txt['add_language_smf_browse'] = 'Escriba el nombre del idioma a buscar, o déjelo en blanco para buscar todos los disponibles.';
$txt['add_language_smf_install'] = 'Instalar';
$txt['add_language_found_title'] = 'Found Languages';
$txt['add_language_smf_found'] = 'Los siguientes idiomas fueron encontrados. Haz clic en el enlace de instalación del idioma que quieres instalar, y serás conducido al gestor de paquetes para instalarlo.';
$txt['add_language_error_no_response'] = 'El sitio de K Dev Team no responde. Inténtalo más tarde.';
$txt['add_language_error_no_files'] = 'No se encontraron archivos.';
$txt['add_language_smf_desc'] = 'Descripción';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'Versión';

$txt['edit_language_entries_primary'] = 'Debajo están las opciones primarias del idioma para este paquete de idioma.';
$txt['edit_language_entries'] = 'Editar entradas del idioma';
$txt['edit_language_entries_file'] = 'Seleccionar entradas a editar';
$txt['languages_dictionary'] = 'Diccionario';
$txt['languages_spelling'] = 'Deletreo';
$txt['languages_for_pspell'] = 'Esto es para <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> - si está instalado';
$txt['languages_rtl'] = 'Activar el modo &quot;de derecha a izquierda&quot;';

$txt['lang_file_desc_index'] = 'Cadenas generales';
$txt['lang_file_desc_EmailTemplates'] = 'Plantillas de Email';

$txt['languages_download'] = 'Descargar paquete de idioma';
$txt['languages_download_note'] = 'Esta página lista todos los archivos contenidos en el paquete de idioma, así como alguna información útil acerca de cada uno. Todos los archivos que tienen marcada la check box asociada, serán copiados.';
$txt['languages_download_info'] = '<strong>Nota:</strong>
	<ul class="normallist">
		<li>Los archivos que tienen el estatus de &quot;no escribible&quot; no podrán ser copiados por Inmortal al directorio elegido en este momento. Tendrás que hacer el destino escribible usando un cliente FTP o bien rellenando tus detalles en la parte inferior de la página.</li>
		<li>La información de versión de un archivo muestra la última versión de Inmortal para la que fue actualizado. Si está marcada en verde entonces se trata de una versión más nueva de que tienes actualmente. Si está en ambar indica que es la misma versión. Y si está en rojo indica que tienes instalada una versión más nueva que la contenida en el paquete.</li>
		<li>Cuando un archivo ya existe en tu foro, la columna &quot;Ya existe&quot; uno de dos posibles valores. &quot;Idéntico&quot; indica que el archivo existente es exacto al que se quiere instalar, y no es necesario sobreescribirlo. &quot;Diferente&quot; quiere decir que los contenidos de ambos archivos varían de alguna manera, y sobreescribir el que ya tienes sea probablemente la solución óptima.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Archivos primarios';
$txt['languages_download_theme_files'] = 'Archivos relacionados con plantillas';
$txt['languages_download_filename'] = 'Nombre del archivo';
$txt['languages_download_dest'] = 'Destino';
$txt['languages_download_writable'] = 'Escribible';
$txt['languages_download_version'] = 'Versión';
$txt['languages_download_older'] = 'Tienes instalada una versión más nueva de este archivo; no se recomienda sobreescribirla.';
$txt['languages_download_exists'] = 'Ya existe';
$txt['languages_download_exists_same'] = 'Idéntico';
$txt['languages_download_exists_different'] = 'Diferente';
$txt['languages_download_copy'] = 'Copiar';
$txt['languages_download_not_chmod'] = 'No puedes proceder con la instalación hasta que todos los archivos seleccionados para ser copiados sean escribibles.';
$txt['languages_download_illegal_paths'] = 'El paquete contiene rutas ilegales - por favor contacte con K Dev Team';
$txt['languages_download_complete'] = 'Instalación completada';
$txt['languages_download_complete_desc'] = 'El paquete de idioma se instaló correctamente. Por favor haga clic <a href="%1$s">aquí</a> para volver a la página de idiomas';
$txt['languages_delete_confirm'] = '¿Estás seguro de que quieres eliminar este idioma?';

$txt['setting_frame_security'] = 'Opciones de seguridad del marco';
$txt['setting_frame_security_SAMEORIGIN'] = 'Permitir el mismo origen';
$txt['setting_frame_security_DENY'] = 'Denegar todos los marcos';
$txt['setting_frame_security_DISABLE'] = 'Inhabilitado';

$txt['select_boards_from_list'] = 'Seleccionar los posts de la lista';

$txt['topic_move_any'] = 'Permitir movimiento de temas a los posts de sólo lectura';

$txt['defaultMaxListItems'] = 'El número máximo de objetos por página en las listas';

?>
