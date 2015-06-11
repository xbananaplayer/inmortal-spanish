# inmortal-spanish
Archivos de idioma del foro de inmortal.es

## Ayudanos a traducir el foro!
Hay partes del foro que no estan traducidas, podria ser de una gran ayuda que nos ayudarais a traducirlo mientras nosotros nos encargamos de poner el foro bien bonito :)

## Guía
Los archivos de lenguaje son como los de SMF, tenemos la variable ($txt) y un indicador (['hola_soy_un_indicador']), se le añade un igual (=) para darle un valor y colocamos entre comillas su traduccion ('Hola soy un indicador').

Como usar github: http://playdoces.appspot.com/documentation/1.2.4/github

### Ejemplo
$txt['mboards_cancel_moving'] = 'Cancelar traslado';

Como veis solo hay que traducir la parte entre comillas despues del signo igual, si se tradujese la parte de 'mboards_cancel_moving' produciria fallos a la hora de mostrar el texto, ya que en el resto de archivos del foro esta declarada como 'mboards_cancel_moving' y si desaparece, no aparecería el texto en la página.
