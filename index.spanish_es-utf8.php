<?php
// Version: Inmortal 1.0 Beta; Index

global $forum_copyright, $webmaster_email, $scripturl, $context, $boardurl;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'es_ES.utf8';
$txt['lang_dictionary'] = 'es';
$txt['lang_spelling'] = 'spanish';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'UTF-8';
// Character set and right to left?
$txt['lang_rtl'] = false;
// Number format.
$txt['number_format'] = '1,234.00';

$txt['days_title'] = 'Días';
$txt['days'] = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');
$txt['days_short'] = array('Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months_title'] = 'Months';
$txt['months'] = array(1 => 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
$txt['months_titles'] = array(1 => 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
$txt['months_short'] = array(1 => 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic');

$txt['minutes_label'] = 'Minutos';
$txt['hours_label'] = 'Horas';
$txt['years_title'] = 'Años';

$txt['time_am'] = 'am';
$txt['time_pm'] = 'pm';

$txt['admin'] = 'Administración';
$txt['moderate'] = 'Moderar';

$txt['save'] = 'Guardar';
$txt['upload'] = 'Subir';

$txt['modify'] = 'Modificar';
$txt['forum_index'] = '%1$s - Índice';
$txt['members'] = 'Usuarios';
$txt['board_name'] = 'Nombre del foro';
$txt['posts'] = 'Mensajes';

$txt['member_postcount'] = 'Mensajes';
$txt['no_subject'] = '(Sin asunto)';
$txt['view_profile'] = 'Ver Perfil';
$txt['guest_title'] = 'Visitante';
$txt['author'] = 'Autor';
$txt['on'] = 'en';
$txt['remove'] = 'Eliminar';
$txt['start_new_topic'] = 'Crear nuevo tema';

$txt['login'] = 'Ingresar';
// Use numeric entities in the below string.
$txt['username'] = 'Usuario';
$txt['password'] = 'Contraseña';

$txt['username_no_exist'] = 'Nombre de usuario no existente.';
$txt['no_user_with_email'] = 'No hay usuarios asociados a este email.';

$txt['board_moderator'] = 'Moderador del Foro';
$txt['remove_topic'] = 'Eliminar Tema';
$txt['topics'] = 'Temas';
$txt['modify_msg'] = 'Modificar mensaje';
$txt['name'] = 'Nombre';
$txt['email'] = 'Email';
$txt['user_email_address'] = 'Dirección de email';
$txt['subject'] = 'Asunto';
$txt['message'] = 'Mensaje';
$txt['redirects'] = 'Redirecciones';
$txt['quick_modify'] = 'Modificación Rápida';
$txt['reason_for_edit'] = 'Razón de edición';

$txt['choose_pass'] = 'Escoge contraseña';
$txt['verify_pass'] = 'Verifica contraseña';
$txt['position'] = 'Grupo';

$txt['profile_of'] = 'Ver perfil de';
$txt['total'] = 'Total';
$txt['website'] = 'Web';
$txt['register'] = 'Registrarse';
$txt['warning_status'] = 'Estado de Advertencia';
$txt['user_warn_watch'] = 'El usuario está en la lista de vigilados';
$txt['user_warn_moderate'] = 'Cola de aprobación de mensajes de usuarios';
$txt['user_warn_mute'] = 'El usuario tiene restringida la publicación de mensajes';
$txt['warn_watch'] = 'Vigilado';
$txt['warn_moderate'] = 'Moderado';
$txt['warn_mute'] = 'Enmudecido';

$txt['message_index'] = 'Índice de Mensajes';
$txt['news'] = 'Noticias';
$txt['home'] = 'Inicio';
$txt['page'] = 'Page';
$txt['prev'] = 'página previa';
$txt['next'] = 'siguiente página';

$txt['lock_unlock'] = 'Cerrar/Abrir Tema';
$txt['post'] = 'Publicar';
$txt['error_occured'] = '¡Un error ha ocurrido!';
$txt['at'] = 'a las';
$txt['by'] = 'por';
$txt['logout'] = 'Salir';
$txt['started_by'] = 'Iniciado por';
$txt['topic_started_by'] = 'Iniciado por <strong>%1$s</strong> en <em>%2$s</em>';
$txt['replies'] = 'Respuestas';
$txt['last_post'] = 'Último mensaje';
$txt['first_post'] = 'Primer mensaje';
$txt['last_poster'] = 'Último mensaje por';
$txt['last_post_message'] = '<strong>Último mensaje: </strong>%3$s <span class="postby">%2$s por %1$s</span>';
$txt['last_post_topic'] = '%1$s<br>por %2$s';
$txt['post_by_member'] = '<strong>%1$s</strong> por <strong>%2$s</strong><br>';
$txt['boardindex_total_posts'] = '%1$s Mensajes en %2$s Temas por %3$s Usuarios';
$txt['show'] = 'Mostrar';
$txt['hide'] = 'Ocultar';

$txt['admin_login'] = 'Ingresar a Administración';
// Use numeric entities in the below string.
$txt['topic'] = 'Tema';
$txt['help'] = 'Ayuda';
$txt['terms_and_rules'] = 'Términos y normas';
$txt['watch_board'] = 'Ver éste foro';
$txt['unwatch_board'] = 'Dejar de ver este foro';
$txt['watch_topic'] = 'Ver este tema.';
$txt['unwatch_topic'] = 'Dejar de ver este tema';
$txt['watching_this_topic'] = 'Estás viendo este tema, y recibirás notificaciones sobre este.';
$txt['notify'] = 'Notificar';
$txt['unnotify'] = 'Cancelar Notificación';
$txt['notify_request'] = '¿Deseas una notificación por email si alguien responde a este tema?';
// Use numeric entities in the below string.
$txt['regards_team'] = 'Saludos,' . "\n" . 'El equipo de ' . $context['forum_name'] . '.';
$txt['notify_replies'] = 'Notificar respuestas';
$txt['move_topic'] = 'Mover tema';
$txt['move_to'] = 'Mover a';
$txt['pages'] = 'Páginas';
$txt['users_active'] = 'Usuarios activos en los últimos %1$d minutos';
$txt['personal_messages'] = 'Mensajes Privados';
$txt['reply_quote'] = 'Responder con cita';
$txt['reply'] = 'Responder';
$txt['reply_noun'] = 'Respuesta';
$txt['reply_number'] = 'Responder #%1$s';
$txt['approve'] = 'Aprobar';
$txt['unapprove'] = 'Desaprobar';
$txt['approve_all'] = 'Aprobar todo';
$txt['issue_warning'] = 'Enviar una advertencia';
$txt['awaiting_approval'] = 'Esperando Aprobación';
$txt['attach_awaiting_approve'] = 'Adjuntos esperando aprobación';
$txt['post_awaiting_approval'] = 'Nota: Este mensaje está esperando la aprobación de un moderador.';
$txt['there_are_unapproved_topics'] = 'Hay %1$s temas y %2$s mensajes esperando aprobación en este foro. Pulsa <a href="%3$s">aquí</a> para verlos todos.';
$txt['send_message'] = 'Enviar mensaje';

$txt['msg_alert_no_messages'] = 'no tienes ningún mensaje';
$txt['msg_alert_one_message'] = 'tienes <a href="%1$s">1 mensaje</a>';
$txt['msg_alert_many_message'] = 'tienes <a href="%1$s">%2$d mensajes</a>';
$txt['msg_alert_one_new'] = '1 es nuevo';
$txt['msg_alert_many_new'] = '%1$d son nuevos';
$txt['new_alert'] = 'Nueva Alerta';
$txt['remove_message'] = 'Eliminar este mensaje';

$txt['topic_alert_none'] = 'No hay mensajes...';
$txt['pm_alert_none'] = 'No hay mensajes...';
$txt['no_messages'] = 'No hay mensajes';

$txt['online_users'] = 'Usuarios en Línea';
$txt['jump_to'] = 'Ir a';
$txt['go'] = 'ir';
$txt['are_sure_remove_topic'] = '¿Estás seguro de borrar este tema?';
$txt['yes'] = 'Sí';
$txt['no'] = 'No';

$txt['search_end_results'] = 'Fin de resultados';
$txt['search_on'] = 'en';

$txt['search'] = 'Buscar';
$txt['all'] = 'Todos';
$txt['search_entireforum'] = 'Todo el foro';
$txt['search_thisbrd'] = 'Este foro';
$txt['search_thistopic'] = 'Este tema';
$txt['search_members'] = 'Usuarios';

$txt['back'] = 'Atrás';
$txt['continue'] = 'Continuar';
$txt['password_reminder'] = 'Contraseña recordatorio';
$txt['topic_started'] = 'Mensaje iniciado por';
$txt['title'] = 'Título';
$txt['post_by'] = 'Publicado por';
$txt['memberlist_searchable'] = 'Lista (con opción de búsqueda) de todos los usuarios registrados.';
$txt['welcome_newest_member'] = 'Démosle la bienvenida a %1$s, nuestro miembro más reciente.';
$txt['admin_center'] = 'Centro de Administración Inmortal';
$txt['last_edit_by'] = '<span class="lastedit">Last Edit</span>: %1$s by %2$s';
$txt['last_edit_reason'] = '<span class="lastedit">Razón</span>: %1$s';
$txt['notify_deactivate'] = '¿Deseas desactivar la notificación en este tema?';

$txt['recent_posts'] = 'Mensajes recientes';

$txt['location'] = 'Ubicación';
$txt['gender'] = 'Sexo';
$txt['personal_text'] = 'Texto Personal';
$txt['date_registered'] = 'Fecha de registro';

$txt['recent_view'] = 'Ver los mensajes más recientes del foro.';
$txt['recent_updated'] = 'es el tema actualizado más recientemente';
$txt['is_recent_updated'] = '%1$s es el tema más recientemente actualizado';

$txt['male'] = 'Masculino';
$txt['female'] = 'Femenino';

$txt['error_invalid_characters_username'] = 'Carácter inválido en el nombre de usuario.';

$txt['welcome_guest'] = 'Bienvenido(a), <strong>%1$s</strong>. Por favor, <a href="' . $scripturl . '?action=login">ingresa</a> o <a href="' . $scripturl . '?action=register">regístrate</a>.';

//$txt['welcome_guest_register'] = 'Welcome, <strong>%1$s</strong>. Please <a href="' . $scripturl . '?action=login">login</a> or <a href="' . $scripturl . '?action=register">register</a>.';
$txt['welcome_guest_register'] = 'Welcome to <strong>%2$s</strong>. Please <a href="%3$s" onclick="%4$s">login</a> or <a href="%5$s">sign up</a>.';

$txt['please_login'] = 'Please <a href="' . $scripturl . '?action=login">login</a>.';
$txt['login_or_register'] = 'Por favor <a href="' . $scripturl . '?action=login">ingresa</a> o <a href="' . $scripturl . '?action=register">regístrate</a>.';
$txt['welcome_guest_activate'] = '
¿Perdiste tu  <a href="' . $scripturl . '?action=activate">email de activación</a>?';
// @todo the following to sprintf
$txt['hello_member'] = 'Hola,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Bienvenido(a),';
$txt['welmsg_hey'] = 'Hola,';
$txt['welmsg_welcome'] = 'Bienvenido(a),';
$txt['welmsg_please'] = 'Por favor';
$txt['select_destination'] = 'Por favor selecciona un destino';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'Publicado por';

$txt['icon_smiley'] = 'Sonrisa';
$txt['icon_angry'] = 'Enojado';
$txt['icon_cheesy'] = 'Cheesy';
$txt['icon_laugh'] = 'Risa';
$txt['icon_sad'] = 'Triste';
$txt['icon_wink'] = 'Guiñar';
$txt['icon_grin'] = 'Sonreir';
$txt['icon_shocked'] = 'Impresionado';
$txt['icon_cool'] = 'Cool';
$txt['icon_huh'] = 'Huh';
$txt['icon_rolleyes'] = 'Girar ojos';
$txt['icon_tongue'] = 'Lengua';
$txt['icon_embarrassed'] = 'Avergonzado';
$txt['icon_lips'] = 'Labios sellados';
$txt['icon_undecided'] = 'Indeciso';
$txt['icon_kiss'] = 'Beso';
$txt['icon_cry'] = 'Llorar';

$txt['moderator'] = 'Moderador';
$txt['moderators'] = 'Moderadores';

$txt['mark_board_read'] = 'Marcar Temas como leídos para este foro';
$txt['views'] = 'Vistas';
$txt['new'] = 'Nuevo';

$txt['view_all_members'] = 'Ver todos los usuarios';
$txt['view'] = 'Ver';

$txt['viewing_members'] = 'Viendo usuarios de %1$s a %2$s';
$txt['of_total_members'] = 'de %1$s usuarios totales';

$txt['forgot_your_password'] = '¿Olvidaste tu contraseña?';

$txt['date'] = 'Fecha';
// Use numeric entities in the below string.
$txt['from'] = 'De';
$txt['check_new_messages'] = 'Recibir Nuevos Mensajes';
$txt['to'] = 'Para';

$txt['board_topics'] = 'Temas';
$txt['members_title'] = 'Usuarios';
$txt['members_list'] = 'Lista de usuarios';
$txt['new_posts'] = 'Nuevos Mensajes';
$txt['old_posts'] = 'No hay nuevos Mensajes';
$txt['redirect_board'] = 'Foro Redirigido';

$txt['sendtopic_send'] = 'Enviar';
$txt['report_sent'] = 'Tu informe fue enviado con éxito.';

$txt['time_offset'] = 'Diferencia Horaria';
$txt['or'] = 'o';

$txt['no_matches'] = 'Lo siento, no se encontraron mensajes';

$txt['notification'] = 'Notificación';

$txt['your_ban'] = 'Lo siento %1$s, tienes el acceso denegado a este foro!';
$txt['your_ban_expires'] = 'Tu bloqueo de acceso expira %1$s.';
$txt['your_ban_expires_never'] = 'Tu bloqueo de acceso es permanente.';
$txt['ban_continue_browse'] = 'Puedes continuar navegando por el foro como invitado.';

$txt['mark_as_read'] = 'Marcar TODOS los mensajes como leídos';

$txt['locked_topic'] = 'Tema cerrado';
$txt['normal_topic'] = 'Tema normal';
$txt['participation_caption'] = 'Temas en los que has publicado';
$txt['moved_topic'] = 'Tema movido';

$txt['go_caps'] = 'IR';

$txt['print'] = 'Imprimir';
$txt['profile'] = 'Perfil';
$txt['topic_summary'] = 'Sumario de Temas';
$txt['not_applicable'] = 'N/D';
$txt['name_in_use'] = 'Este nombre está en uso por otro usuario.';

$txt['total_members'] = 'Total de Usuarios';
$txt['total_posts'] = 'Total de Mensajes';
$txt['total_topics'] = 'Total de Temas';

$txt['mins_logged_in'] = 'Duración de la sesión en minutos';

$txt['preview'] = 'Previsualizar';
$txt['always_logged_in'] = 'Recordar siempre Usuario/Contraseña';

$txt['logged'] = 'En línea';
// Use numeric entities in the below string.
$txt['ip'] = 'IP';

$txt['www'] = 'WWW';

$txt['hours'] = 'horas';
$txt['minutes'] = 'minutos';
$txt['seconds'] = 'seconds';

// Used upper case in Paid subscriptions management
$txt['hour'] = 'Hora';
$txt['days_word'] = 'días';

$txt['search_for'] = 'Buscar por';
$txt['search_match'] = 'Coincidir';

$txt['forum_in_maintainence'] = 'Tu foro está en Modo Mantenimiento. Sólo administradores pueden iniciar sesión.';
$txt['maintenance_page'] = 'Puedes quitar el Modo Mantenimiento desde <a href="%1$s">Ajustes de servidor</a>.';

$txt['read_one_time'] = 'Leer 1 vez';
$txt['read_many_times'] = 'Leer %1$d veces';

$txt['forum_stats'] = 'Estadísticas Inmortal';
$txt['latest_member'] = 'Último usuario';
$txt['total_cats'] = 'Total de Categorías';
$txt['latest_post'] = 'Último mensaje';

$txt['total_boards'] = 'Total de Foros';

$txt['print_page'] = 'Imprimir Página';
$txt['print_page_text'] = 'Sólo texto';
$txt['print_page_images'] = 'Texto con imágenes';

$txt['valid_email'] = 'Debe ser una dirección válida de email.';

$txt['geek'] = 'un montón';
$txt['info_center_title'] = '%1$s - Centro de Información';

$txt['watch'] = 'Ver';
$txt['unwatch'] = 'Dejar de ver';

$txt['check_all'] = 'Seleccionar todo';

// Use numeric entities in the below string.
$txt['database_error'] = 'Error en la Base de Datos';
$txt['try_again'] = 'Por favor intenta nuevamente.  Si esta pantalla aparece nuevamente, notifica del error a un administrador.';
$txt['file'] = 'Archivo';
$txt['line'] = 'Línea';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'Inmortal ha detectado errores en la base de datos, y los ha tratado de corregir automáticamente.  Si los problemas persisten, o sigues obteniendo estos correos, por favor, contacta con tu proveedor de alojamiento web.';
$txt['database_error_versions'] = '<strong>Nota:</strong> Parece que tu base de datos <em>puede</em> necesitar una actualización. La versión de los archivos de tu foro están en la versión %1$s, mientras que tu base de datos está en la versión de Inmortal %2$s. Este error probablemente desaparecerá si ejecutas la última versión de upgrade.php.';
$txt['template_parse_error'] = '¡Error al analizar la Plantilla!';
$txt['template_parse_error_message'] = 'Parece que algo se ha estropeado en el foro con el sistema de temas.  Este problema puede que solamente sea temporal, por favor, regresa en unos momentos e intentalo nuevamente.  Si continuas viendo este mensaje, por favor contacta al administrador.<br /><br />Puedes intentar <a href="javascript:location.reload();">actualizar esta página</a>.';
$txt['template_parse_error_details'] = 'Hubo un problema cargando el tema o archivo de idioma <tt><strong>%1$s</strong></tt>.  Por favor revisa la sintaxis e intenta nuevamente - recuerda, los apóstrofes (<tt>\'</tt>) por lo general deben tener una secuencia de escape con la diagonal invertida (<tt>\\</tt>).  Para ver información especifica del error del sitio de PHP intenta <a href="' . $boardurl . '%1$s">acceder al archivo directamente</a>.<br /><br />Puedes intentar <a href="javascript:location.reload();">actualizar esta página</a> o <a href="' . $scripturl . '?theme=1">usar el tema de default</a>.';
$txt['template_parse_errmsg'] = 'Desafortunadamente no hay información actual disponible sobre el error.';

$txt['today'] = '<strong>Hoy</strong> a las ';
$txt['yesterday'] = '<strong>Ayer</strong> a las ';
$txt['new_poll'] = 'Nueva encuesta';
$txt['poll_question'] = 'Pregunta';
$txt['poll_vote'] = 'Enviar voto';
$txt['poll_total_voters'] = 'Total de votos';
$txt['shortcuts'] = 'acceso rápido: presiona alt+s para publicar o alt+p para previsualizar';
$txt['shortcuts_firefox'] = 'Atajos: Presiona shift+alt+s para enviar la entrada o shift+alt+p para pre-visualizarla.';
$txt['shortcuts_drafts'] = ', alt+d para guardar borrador';
$txt['shortcuts_drafts_firefox'] = ', shift+alt+d para guardar borrador';
$txt['poll_results'] = 'Ver resultados';
$txt['poll_lock'] = 'Cerrar Encuesta';
$txt['poll_unlock'] = 'Reabrir Encuesta';
$txt['poll_edit'] = 'Editar Encuesta';
$txt['poll'] = 'Encuesta';
$txt['one_day'] = '1 Día';
$txt['one_week'] = '1 Semana';
$txt['two_weeks'] = '2 Semanas';
$txt['one_month'] = '1 Mes';
$txt['two_months'] = '2 Meses';
$txt['forever'] = 'Siempre';
$txt['quick_login_dec'] = 'Ingresar con nombre de usuario, contraseña y duración de la sesión';
$txt['one_hour'] = '1 Hora';
$txt['moved'] = 'MOVIDO';
$txt['moved_why'] = 'Por favor introduce una breve descripción de<br />por qué este tema se está moviendo.';
$txt['merged_subject'] = '[Combinado] %1$s';
$txt['merged_body'] = 'Este tema ha sido combinado en [url=%1$s]%2$s[/url].';
$txt['board'] = 'Foro';
$txt['in'] = 'en';
$txt['sticky_topic'] = 'Tema fijado';

$txt['delete'] = 'Borrar';

$txt['your_pms'] = 'Tus Mensajes privados';

$txt['kilobyte'] = 'kB';
$txt['megabyte'] = 'MB';

$txt['more_stats'] = '[Más Estadísticas]';

// Use numeric entities in the below three strings.
$txt['code'] = 'Código';
$txt['code_select'] = '[Seleccionar]';
$txt['quote_from'] = 'Cita de';
$txt['quote'] = 'Citar';
$txt['quote_action'] = 'Cita';
$txt['fulledit'] = 'Edición&nbsp;completa';
$txt['edit'] = 'Editar';
$txt['quick_edit'] = 'Edición rápida';
$txt['post_options'] = 'Más...';

$txt['merge_to_topic_id'] = 'ID del tema de destino';
$txt['split'] = 'Dividir Tema';
$txt['merge'] = 'Combinar Temas';
$txt['target_id'] = 'Seleccione el objetivo por el ID del Tema.';
$txt['target_below'] = 'Seleccione el objetivo de la siguiente lista';
$txt['subject_new_topic'] = 'Asunto para el nuevo tema';
$txt['split_this_post'] = 'Sólo dividir este mensaje.';
$txt['split_after_and_this_post'] = 'Dividir tema a partir de este mensaje (incluyéndolo).';
$txt['select_split_posts'] = 'Selecciona los mensajes a dividir.';
$txt['new_topic'] = 'Nuevo Tema';
$txt['split_successful'] = 'El tema se ha dividido satisfactoriamente en dos temas.';
$txt['origin_topic'] = 'Tema de Origen';
$txt['please_select_split'] = 'Por favor selecciona qué mensajes deseas dividir.';
$txt['merge_successful'] = 'Los temas han sido satisfactoriamente combinados.';
$txt['new_merged_topic'] = 'Nuevo Tema Combinado';
$txt['topic_to_merge'] = 'Tema a ser combinado';
$txt['target_board'] = 'Foro destino';
$txt['target_topic'] = 'Tema destino';
$txt['merge_confirm'] = '¿Estás seguro que deseas combinar';
$txt['with'] = 'con';
$txt['merge_desc'] = 'Esta función combinará los mensajes de dos temas en un tema. Los mensajes serán ordenados de acuerdo con la fecha en que se publicaron. Por lo tanto, el mensaje publicado más recientemente será el primer mensaje del tema combinado.';

$txt['set_sticky'] = 'Fijar tema';
$txt['set_nonsticky'] = 'Desfijar tema';
$txt['set_lock'] = 'Cerrar tema';
$txt['set_unlock'] = 'Reabrir tema';

$txt['search_advanced'] = 'Búsqueda Avanzada';

$txt['security_risk'] = 'RIESGO MAYOR DE SEGURIDAD:';
$txt['not_removed'] = 'No has borrado ';
$txt['not_removed_extra'] = '%1$s es un respaldo de %2$s que no fue generado por Inmortal. Este respaldo es accesible directamente y puede ser utilizado para obtener acceso no autorizado a tu foro. Debes eliminarlo inmediatamente.';
$txt['generic_warning'] = 'Warning';
$txt['agreement_missing'] = 'You are requiring new users to accept a registration agreement, however the file (agreement.txt) doesn\'t exist.';

$txt['cache_writable'] = 'No se puede escribir en el directorio caché - afectará negativamente al rendimiento de tu foro.';

$txt['page_created_full'] = 'Page created in %1$.3f seconds with %2$d queries.';

$txt['report_to_mod_func'] = 'Usa esta función para informar a los moderadores y administradores de un mensaje abusivo, o publicado incorrectamente.<br /><em>Es importante mencionar que tu dirección de email será revelada a los moderadores si usas esta función.</em>';
$txt['report_profile_func'] = 'Use this function to inform the administrators of abusive profile content, such as spam or inappropriate images.';

$txt['online'] = 'Conectado';
$txt['member_is_online'] = '%1$s is online';
$txt['offline'] = 'Desconectado';
$txt['member_is_offline'] = '%1$s is offline';
$txt['pm_online'] = 'Mensaje Privado (Conectado)';
$txt['pm_offline'] = 'Mensaje Privado (Desconectado)';
$txt['status'] = 'Estado';

$txt['go_up'] = 'Ir Arriba';
$txt['go_down'] = 'Ir Abajo';

$forum_copyright = '<a href="' . $scripturl . '?action=credits" title="K Dev Team Forum" target="_blank" class="new_win">%1$s</a> |
 <a href="http://www.simplemachines.org/about/smf/license.php" title="License" target="_blank" class="new_win">Inmortal &copy; 2011</a>, <a href="http://www.simplemachines.org" title="K Dev Team" target="_blank" class="new_win">K Dev Team</a>';

$txt['birthdays'] = 'Cumpleaños:';
$txt['events'] = 'Eventos:';
$txt['birthdays_upcoming'] = 'Cumpleaños próximos:';
$txt['events_upcoming'] = 'Eventos próximos:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = '';
$txt['calendar_month'] = 'Mes:';
$txt['calendar_year'] = 'Año:';
$txt['calendar_day'] = 'Día:';
$txt['calendar_event_title'] = 'Título del Evento';
$txt['calendar_event_options'] = 'Opciones de Eventos';
$txt['calendar_post_in'] = 'Publicar en:';
$txt['calendar_edit'] = 'Editar evento';
$txt['calendar_export'] = 'Export Event';
$txt['calendar_view_week'] = 'Ver semana';
$txt['event_delete_confirm'] = '¿Borrar este evento?';
$txt['event_delete'] = 'Borrar evento';
$txt['calendar_post_event'] = 'Publicar evento';
$txt['calendar'] = 'Calendario';
$txt['calendar_link'] = 'Enlazar al calendario';
$txt['calendar_upcoming'] = 'Calendario de eventos próximos';
$txt['calendar_today'] = 'Calendario de Hoy';
$txt['calendar_week'] = 'Semana';
$txt['calendar_week_title'] = 'Semana %1$d de %2$d ';
// %1$s is the month, %2$s is the day, %3$s is the year. Change to suit your language.
$txt['calendar_week_beginning'] = 'Próxima semana %1$s %2$s, %3$s';
$txt['calendar_numb_days'] = 'Número de Días:';
$txt['calendar_how_edit'] = '¿cómo editas esos eventos?';
$txt['calendar_link_event'] = 'Enlazar evento';
$txt['calendar_confirm_delete'] = '¿Estás seguro que deseas borrar este evento?';
$txt['calendar_linked_events'] = 'Eventos Vinculados';
$txt['calendar_click_all'] = 'Pulsa para verlos todos %1$s';

$txt['moveTopic1'] = 'Publicar un tema de redireccionamiento';
$txt['moveTopic2'] = 'Cambiar el título del tema';
$txt['moveTopic3'] = 'Nuevo asunto';
$txt['moveTopic4'] = 'Cambiar el asunto de cada mensaje';
$txt['move_topic_unapproved_js'] = '¡Advertencia! Este tema aún no ha sido aprobado.\\n\\nNo se recomienda que crees un tema de redirección a menos que tengas la intención de aprobar el mensaje inmediatamente después de moverlo.';
$txt['movetopic_auto_board'] = '[FORO]';
$txt['movetopic_auto_topic'] = '[URL DEL TEMA]';
$txt['movetopic_default'] = 'El tema ha sido movido a ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];
$txt['movetopic_redirect'] = 'Redirección al tema movido';
$txt['movetopic_expires'] = 'Eliminar automaticamente la redirección del tema';

$txt['theme_template_error'] = 'No se pudo cargar la plantilla \'%1$s\'.';
$txt['theme_language_error'] = 'No se pudo cargar el archivo de idioma \'%1$s\'.';

$txt['sub_boards'] = 'Sub-Foros';
$txt['restricted_board'] = 'Foros restringidos';

$txt['smtp_no_connect'] = 'No fue posible conectarse al servidor SMTP';
$txt['smtp_port_ssl'] = 'Puerto SMTP configurado incorrectamente; debería ser 465 en servidores SSL.';
$txt['smtp_bad_response'] = 'No se pudieron obterer los codigos de respuesta del servidor de mail';
$txt['smtp_error'] = 'Hubo problemas al enviar el mail. Error: ';
$txt['mail_send_unable'] = 'No se pudo enviar el email a la dirección \'%1$s\'';

$txt['mlist_search'] = 'Buscar usuarios por';
$txt['mlist_search_again'] = 'Buscar nuevamente';
$txt['mlist_search_filter'] = 'Search Options';
$txt['mlist_search_email'] = 'Buscar por dirección de email';
$txt['mlist_search_messenger'] = 'Buscar por nick de messenger';
$txt['mlist_search_group'] = 'Buscar por grupo';
$txt['mlist_search_name'] = 'Buscar por nombre';
$txt['mlist_search_website'] = 'Buscar por sitio Web';
$txt['mlist_search_results'] = 'Buscar resultados por';
$txt['mlist_search_by'] = 'Buscar %1$s';
$txt['mlist_menu_view'] = 'Ver la lista de usuarios';

$txt['attach_downloaded'] = 'descargado';
$txt['attach_viewed'] = 'visto';

$txt['settings'] = 'Configuración';
$txt['never'] = 'Nunca';
$txt['more'] = 'más';

$txt['hostname'] = 'Nombre del servidor';
$txt['you_are_post_banned'] = 'Lo sentimos %1$s, tienes restringido el poder publicar mensajes o enviar mensajes privados en el foro.';
$txt['ban_reason'] = 'Razón';

$txt['tables_optimized'] = 'Tablas de la base de datos optimizadas';

$txt['add_poll'] = 'Agregar encuesta';
$txt['poll_options6'] = 'Solo puedes seleccionar hasta %1$s opciones.';
$txt['poll_remove'] = 'Eliminar encuesta';
$txt['poll_remove_warn'] = '¿Estás seguro que deseas eliminar esta encuesta del tema?';
$txt['poll_results_expire'] = 'Los resultados se mostrarán una vez que la encuesta se haya cerrado';
$txt['poll_expires_on'] = 'La votación se cierra';
$txt['poll_expired_on'] = 'Votación cerrada';
$txt['poll_change_vote'] = 'Eliminar Voto';
$txt['poll_return_vote'] = 'Opciones de votación';
$txt['poll_cannot_see'] = 'No puedes ver los resultados de la encuesta en este momento';

$txt['quick_mod_approve'] = 'Aprobar los seleccionados';
$txt['quick_mod_remove'] = 'Eliminar seleccionado(s)';
$txt['quick_mod_lock'] = 'Cerrar/reabrir seleccionado(s)';
$txt['quick_mod_sticky'] = 'Fijar/soltar seleccionado(s)';
$txt['quick_mod_move'] = 'Mover seleccionado(s) a';
$txt['quick_mod_merge'] = 'Combinar seleccionado(s)';
$txt['quick_mod_markread'] = 'Marcar seleccionados como leídos';
$txt['quick_mod_markunread'] = 'Marcar seleccionados como no leídos';
$txt['quick_mod_selected'] = 'Con las opciones seleccionadas hacer';
$txt['quick_mod_go'] = '¡Ir!';
$txt['quickmod_confirm'] = '¿Estás seguro que deseas hacer esto?';

$txt['spell_check'] = 'Revisar Ortografía';

$txt['quick_reply'] = 'Respuesta rápida';
$txt['quick_reply_desc'] = 'En la <em>Respuesta rápida</em> puedes escribir un mensaje mientras ves un tema completo sin necesidad de abrir una nueva ventana. Puedes usar BBC y emoticonos como lo harías en un mensaje normal.';
$txt['quick_reply_warning'] = '¡Advertencia: el tema está cerrado! Solamente admins y moderadores pueden responder.';
$txt['quick_reply_verification'] = 'Tras enviar tu post serás dirigido a la página de posts normal para verificar tu post %1$s.';
$txt['quick_reply_verification_guests'] = '(requerido para todos los invitados)';
$txt['quick_reply_verification_posts'] = '(requerido para todos los usuarios con menos de %1$d posts)';
$txt['wait_for_approval'] = 'Nota: este mensaje no se mostrará hasta que sea aprobado por un moderador.';

$txt['notification_enable_board'] = '¿Estás seguro que deseas activar la notificación de nuevos temas para este foro?';
$txt['notification_disable_board'] = '¿Estás seguro que deseas desactivar la notificación de nuevos temas para este foro?';
$txt['notification_enable_topic'] = '¿Estás seguro que deseas activar la notificación de nuevas respuestas para este tema?';
$txt['notification_disable_topic'] = '¿Estás seguro que deseas desactivar la notificación de nuevas respuestas para este tema?';

// Mentions
$txt['mentions'] = 'Mentions';

// Likes
$txt['likes'] = 'Me gustas';
$txt['like'] = 'Me gusta';
$txt['unlike'] = 'No me gusta';
$txt['like_success'] = 'Su contenido ha recibido Me gusta con éxito.';
$txt['like_delete'] = 'Su contenido fue eliminado con éxito.';
$txt['like_insert'] = 'Su contenido ha sido insertado con éxito.';
$txt['like_error'] = 'Hubo un error con su solicitud.';
$txt['like_disable'] = 'Función Me gusta está desactivada';
$txt['not_valid_like_type'] = 'El tipo Me gusta no es un modo válido.';
// Translators, if you need to make more strings to suit your language, e.g. $txt['likes_2'] = 'Two people like this', please do so.
$txt['likes_1'] = '<a href="%1$s">%2$s A alguien</a> le gusta esto.';
$txt['likes_n'] = '<a href="%1$s">%2$s A más de uno</a> les gusta esto.';
$txt['you_likes_0'] = 'Te gusta esto.';
$txt['you_likes_1'] = 'A ti y <a href="%1$s">%2$s a otra persona</a> le gusta esto.';
$txt['you_likes_n'] = 'A ti y <a href="%1$s">%2$s a más personas</a> les gusta esto.';

$txt['report_to_mod'] = 'Reportar al moderador';
$txt['report_profile'] = 'Reportar perfil de %1$s';

$txt['unread_topics_visit'] = 'Nuevos temas no leídos';
$txt['unread_topics_visit_none'] = 'No se han encontrado temas no leídos desde tu última visita.  <a href="' . $scripturl . '?action=unread;all">Haz <i>clic</i> aquí para intentar todos los temas no leídos</a>.';
$txt['unread_topics_all'] = 'Todos los temas no leídos';
$txt['unread_replies'] = 'Temas actualizados';

$txt['who_title'] = 'Quién está en línea';
$txt['who_and'] = ' y ';
$txt['who_viewing_topic'] = ' están viendo este tema.';
$txt['who_viewing_board'] = ' están viendo este foro.';
$txt['who_member'] = 'Usuario';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'Impulsado por PHP';
$txt['powered_by_mysql'] = 'Impulsado por MySQL';
$txt['valid_css'] = '¡CSS válido!';

// Current footer strings, no longer used
$txt['valid_html'] = 'HTML 4.01 válido';
$txt['valid_xhtml'] = '¡XHTML 1.0 válido!';
$txt['wap2'] = 'WAP2';
$txt['rss'] = 'RSS';
$txt['atom'] = 'Atom';
$txt['xhtml'] = 'XHTML';
$txt['html'] = 'HTML';

$txt['guest'] = 'Visitante';
$txt['guests'] = 'Visitantes';
$txt['user'] = 'Usuario';
$txt['users'] = 'Usuarios';
$txt['hidden'] = 'Oculto(s)';
// Plural form of hidden for languages other than English
$txt['hidden_s'] = 'Hidden';
$txt['buddy'] = 'Amigo';
$txt['buddies'] = 'Amigos';
$txt['most_online_ever'] = 'Máximo en linea siempre';
$txt['most_online_today'] = 'Máximo en linea hoy';

$txt['merge_select_target_board'] = 'Selecciona el foro destino del tema combinado';
$txt['merge_select_poll'] = 'Selecciona cual encuesta tendrá el tema combinado';
$txt['merge_topic_list'] = 'Selecciona los temas a combinar';
$txt['merge_select_subject'] = 'Selecciona el título del tema combinado';
$txt['merge_custom_subject'] = 'Título personalizado';
$txt['merge_enforce_subject'] = 'Cambiar el título de todos los mensajes';
$txt['merge_include_notifications'] = '¿Incluir notificaciones?';
$txt['merge_check'] = '¿Combinar?';
$txt['merge_no_poll'] = 'Sin encuesta';

$txt['response_prefix'] = 'Re:';
$txt['current_icon'] = 'Icono actual';
$txt['message_icon'] = 'Icono de mensaje';

$txt['smileys_current'] = 'Conjunto actual de Smileys';
$txt['smileys_none'] = 'Sin Smileys';
$txt['smileys_forum_board_default'] = 'Las que el foro esté utilizando por defecto';

$txt['search_results'] = 'Resultados de la búsqueda';
$txt['search_no_results'] = 'No se encontraron coincidencias';

$txt['totalTimeLogged2'] = ' días, ';
$txt['totalTimeLogged3'] = ' horas y ';
$txt['totalTimeLogged4'] = ' minutos.';
$txt['totalTimeLogged5'] = 'd';
$txt['totalTimeLogged6'] = 'h';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_members_waiting'] = 'esperando aprobación.';

$txt['notifyboard_turnon'] = '¿Deseas una notificación por email cuando alguien publique un nuevo tema en este foro?';
$txt['notifyboard_turnoff'] = '¿Estás seguro que NO deseas recibir notificaciones de temas nuevos en este foro?';

$txt['activate_code'] = 'Tu código de activación es';

$txt['find_members'] = 'Buscar usuarios';
$txt['find_username'] = 'Nombre, nombre de usuario, o dirección de email';
$txt['find_buddies'] = '¿Mostrar amigos solamente?';
$txt['find_wildcards'] = 'Comodines permitidos: *, ?';
$txt['find_no_results'] = 'No se encontraron resultados';
$txt['find_results'] = 'Resultados';
$txt['find_close'] = 'Cerrar';

$txt['unread_since_visit'] = 'Mostrar mensajes no leídos desde la última visita.';
$txt['show_unread_replies'] = 'Mostrar nuevas respuestas a tus mensajes.';

$txt['change_color'] = 'Cambiar Color';

$txt['quickmod_delete_selected'] = 'Borrar Seleccionados';
$txt['quickmod_split_selected'] = 'Split Selected';

$txt['show_personal_messages_heading'] = 'New messages';
$txt['show_personal_messages'] = 'Has recibido uno o más mensajes privados.\\n¿Deseas abrir una nueva ventana para verlo(s)?';

$txt['help_popup'] = 'A little lost? Let me explain:';

$txt['previous_next_back'] = '&laquo; anterior';
$txt['previous_next_forward'] = 'próximo &raquo;';

$txt['mark_unread'] = 'Marcar como no leídos';

$txt['ssi_not_direct'] = 'Por favor no accedas a SSI.php usando directamente la URL; mejor utiliza la ruta (%1$s) o agrega ?ssi_function=algun_valor.';
$txt['ssi_session_broken'] = '¡SSI.php no pudo cargar una sesión!  Esto puede causar problemas con algunas funciones, tales como ingresar o salir - ¡Por favor, asegúrate de que SSI.php esté incluído siempre al principio *antes de cualquier otro código* en todos tus scripts!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Previsualizar mensaje';
$txt['preview_fetch'] = 'Obteniendo la previsualización...';
$txt['preview_new'] = 'Mensaje Nuevo';
$txt['pm_error_while_submitting'] = 'The following error or errors occurred while sending this personal message:';
$txt['error_while_submitting'] = 'Hubo un error mientras se enviaba este mensaje.';
$txt['error_old_topic'] = 'Advertencia: No se ha publicado ninguna respuesta a este tema desde hace %1$d días como mínimo.<br />A menos que estés seguro de que quieres responder, por favor, considera el empezar un nuevo tema.';

$txt['split_selected_posts'] = 'Mensajes seleccionados';
$txt['split_selected_posts_desc'] = 'Los mensajes mostrados a continuación formarán un nuevo tema una vez divididos.';
$txt['split_reset_selection'] = 'reinicializar selección';

$txt['modify_cancel'] = 'Cancelar';
$txt['mark_read_short'] = 'Marcar como leido';

$txt['alerts'] = 'Alerts';

$txt['pm_short'] = 'Mis mensajes';
$txt['pm_menu_read'] = 'Leer tus mensajes';
$txt['pm_menu_send'] = 'Enviar un mensaje';

$txt['unapproved_posts'] = 'Mensajes no aprobados (Temas: %1$d, Mensajes: %2$d)';

$txt['ajax_in_progress'] = 'Cargando...';

$txt['mod_reports_waiting'] = 'Actualmente hay %1$d informes de moderador abiertos.';

$txt['view_unread_category'] = 'Mensajes no leídos';
$txt['new_posts_in_category'] = 'Click to see the new posts in %1$s';
$txt['verification'] = 'Verificación';
$txt['visual_verification_hidden'] = 'Please leave this box empty';
$txt['visual_verification_description'] = 'Escribe las letras mostradas en la imagen';
$txt['visual_verification_sound'] = 'Escuchar el texto';
$txt['visual_verification_request_new'] = 'Solicitar otra imagen';

// Sub menu labels
$txt['summary'] = 'Resumen';
$txt['account'] = 'Configuración de Cuenta';
$txt['theme'] = 'Diseño y disposición';
$txt['forumprofile'] = 'Perfil del Foro';
$txt['activate_changed_email_title'] = 'Correo electrónico cambiado';
$txt['activate_changed_email_desc'] = 'Has cambiado tu dirección de correo electrónico. En orden de validar esta dirección, recibirás un mensaje de correo electrónico. Haz clic en el link dentro del mensaje para reactivar tu cuenta.';
$txt['modSettings_title'] = 'Características y Opciones';
$txt['package'] = 'Gestor de paquetes';
$txt['errlog'] = 'Log de Errores';
$txt['edit_permissions'] = 'Permisos';
$txt['mc_unapproved_attachments'] = 'Adjuntos no aprobados';
$txt['mc_unapproved_poststopics'] = 'Mensajes y Temas no aprobados';
$txt['mc_reported_posts'] = 'Mensajes Informados';
$txt['mc_reported_members'] = 'Reported Members';
$txt['modlog_view'] = 'Log de Moderación';
$txt['calendar_menu'] = 'Ver el Calendario';

// @todo Send email strings - should move?
$txt['send_email'] = 'Enviar Email';
$txt['send_email_disclosed'] = 'Ten en cuenta que será visible por el destinatario.';

$txt['ignoring_user'] = 'Estás ignorando a este usuario.';
$txt['show_ignore_user_post'] = 'Muéstrame el mensaje.';

$txt['spider'] = 'Araña';
$txt['spiders'] = 'Arañas';

$txt['downloads'] = 'Descargas';
$txt['filesize'] = 'Tamaño';

// Restore topic
$txt['restore_topic'] = 'Restaurar Tema';
$txt['restore_message'] = 'Restaurar Mensaje';
$txt['quick_mod_restore'] = 'Restaurar Seleccionado';

// Editor prompt.
$txt['prompt_text_email'] = 'Por favor introduce la dirección de email.';
$txt['prompt_text_ftp'] = 'Por favor, introduce la dirección FTP';
$txt['prompt_text_url'] = 'Por favor, introduce la URL a la que quieres enlazar';
$txt['prompt_text_img'] = 'Introduce la dirección de la imagen';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'Borrar elemento';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Plantillas:';
$txt['debug_subtemplates'] = 'Sub plantillas:';
$txt['debug_language_files'] = 'Archivos de idioma:';
$txt['debug_stylesheets'] = 'Hojas de estilo:';
$txt['debug_files_included'] = 'Archivos incluídos:';
$txt['debug_memory_use'] = 'Memória utilizada: ';
$txt['debug_kb'] = 'KB.';
$txt['debug_show'] = 'mostrar';
$txt['debug_cache_hits'] = 'Caché de resultados:';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s bytes';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss para %2$s bytes';
$txt['debug_queries_used'] = 'Consultas utilizadas: %1$d. ';
$txt['debug_queries_used_and_warnings'] = 'Consultas utilizadas: %1$d, %2$d advertencias.';
$txt['debug_query_in_line'] = 'en <em>%1$s</em> linea <em>%2$s</em>,';
$txt['debug_query_which_took'] = 'se demoró %1$s segundos.';
$txt['debug_query_which_took_at'] = 'se demoró %1$s segundos en realizar %2$s peticiones.';
$txt['debug_show_queries'] = '[Mostrar Consultas]';
$txt['debug_hide_queries'] = '[Ocultar Consultas]';
$txt['debug_tokens'] = 'Tokens: ';
$txt['debug_browser'] = 'Explorador de ID: ';
$txt['debug_hooks'] = 'Ganchos llamados: ';
$txt['debug_instances'] = 'Instancias creadas: ';
$txt['are_sure_mark_read'] = '¿Estás seguro de que quieres marcar los mensajes como leídos?';

// Accessibility
$txt['hide_category'] = 'Ocultar categoría';
$txt['show_category'] = 'Mostrar categoría';
$txt['hide_infocenter'] = 'Ocultar centro de información';
$txt['show_infocenter'] = 'Mostrar centro de información';

// Notification post control
$txt['notify_topic_0'] = 'No siguiendo';
$txt['notify_topic_1'] = 'No recibir alertas o emails';
$txt['notify_topic_2'] = 'Recibir alertas';
$txt['notify_topic_3'] = 'Recibir emails y alertas';
$txt['notify_topic_0_desc'] = 'No recibirás ningún email o alerta de este post y tampoco se mostrarán en tus respuestas no leídas y lista de temas. Todavía recibirás @menciones de este tema.';
$txt['notify_topic_1_desc'] = 'No recibirás ningun email o alerta, solo @menciones de otros miembros.';
$txt['notify_topic_2_desc'] = 'Recibirás alertas de este tema.';
$txt['notify_topic_3_desc'] = 'Recibirás alertas y emails de este tema.';
$txt['notify_board_1'] = 'No recibir alertas o emails';
$txt['notify_board_2'] = 'Recibir alertas';
$txt['notify_board_3'] = 'Recibir emails y alertas';
$txt['notify_board_1_desc'] = 'No recibirás ningún email ni alerta de nuevos temas.';
$txt['notify_board_2_desc'] = 'Recibirás alertas de este foro.';
$txt['notify_board_3_desc'] = 'Recibirás alertas y emails de este foro.';

?>
