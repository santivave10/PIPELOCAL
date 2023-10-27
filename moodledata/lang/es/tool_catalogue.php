<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_catalogue', language 'es', version '4.1'.
 *
 * @package     tool_catalogue
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutthiscourse'] = 'Acerca de este curso';
$string['aboutthisprogram'] = 'Acerca de este programa';
$string['all'] = 'Todos';
$string['aria:courseactions'] = 'Acciones del curso';
$string['cataloguesettings'] = 'Configuración del catálogo de mis programas y cursos';
$string['certifications'] = 'Certificaciones';
$string['certificationstatuscertified'] = 'La certificación \'<strong>{$a->name}</strong>\' está completa';
$string['certificationstatuscertifiedwithdate'] = 'La certificación \'<strong>{$a->name}</strong>\' está completa. La misma vence el \'<strong>{$a->date}</strong>\'';
$string['certificationstatusexpired'] = 'La certificación \'<strong>{$a->name}</strong>\' venció el {$a->date}';
$string['certificationstatusopen'] = 'La certificación \'<strong>{$a->name}</strong>\' no tiene fecha de vencimiento';
$string['certificationstatusopenwithdate'] = 'Completar el programa \'<strong>{$a->date}</strong>\' para obtener la certificación \'<strong>{$a->name}</strong>\'';
$string['certificationstatusoverdue'] = 'La certificación \'<strong>{$a->name}</strong>\' venció el \'<strong>{$a->date}</strong>\'';
$string['complete'] = 'Completo';
$string['completeatleast'] = 'Completar al menos {$a}';
$string['coursecoverhelp'] = 'Este curso es parte del programa \'{$a}\'';
$string['coursecoverhelpmultiprogram'] = 'Este curso es parte de algunos programas';
$string['coursecoverhelptext'] = '<ul><li>Este es solo un curso que forma parte de programas más grandes</li><li>Puede haber nuevos cursos disponibles después de completar este</li></ul>';
$string['coursedisplayduelimit'] = 'Mostrar días restantes de cursos';
$string['coursedisplayduelimit_desc'] = 'Cantidad de días a partir de los cuales los usuarios verán un pequeño recordatorio (quedan X días) junto al nombre del curso. Por ejemplo, si se establece en 14, el recordatorio será visible durante los 14 días anteriores a la fecha de finalización del curso. En el caso de muchas fechas de finalización diferentes, el sistema evaluará cuál es la siguiente más cercana. Dejarlo en 0 para deshabilitar esta funcionalidad.';
$string['coursefiles'] = 'Archivos de curso';
$string['courseimage_help'] = 'Imagen del curso.';
$string['coursenotavailable'] = 'Curso no disponible';
$string['courses'] = 'Cursos';
$string['dates'] = 'Fechas';
$string['datesduedate'] = 'Fecha de vencimiento';
$string['datesenddate'] = 'Fecha de fin';
$string['datesstartdate'] = 'Fecha de inicio';
$string['daysleft'] = 'Quedan {$a} días';
$string['defaultsortorder'] = 'Ordenamiento predeterminado';
$string['displaycourseinfomodal'] = 'Mostrar información del curso modal';
$string['displayforeverybody'] = 'Mostrar a todos';
$string['displayfornotadmin'] = 'Mostrar sólo para usuarios que no sean administradores';
$string['displayforstudentsandguests'] = 'Mostrar sólo durante el acceso de invitados y para estudiantes';
$string['displaynever'] = 'No mostrar nunca';
$string['displayprogramcoverpage'] = 'Mostrar la portada del programa';
$string['dontshowagain'] = 'No volver a mostrar este mensaje';
$string['duedate'] = 'Ordenar por fecha de completud';
$string['duedateinfo'] = 'Vence en un día';
$string['duedateinfodays'] = 'Vence en {$a} días';
$string['duedatex'] = '<strong>Fecha de vencimiento:</strong> {$a}';
$string['enddatex'] = '<strong>Fecha de fin:</strong> {$a}';
$string['errornopermissionviewcoursecover'] = 'Sin permisos para ver la portada del curso';
$string['errornopermissionviewprogram'] = 'Sin permisos para ver el programa';
$string['hiddenfromlearners'] = 'Oculto para los colaboradores';
$string['incomplete'] = 'No concluído';
$string['information'] = 'Información';
$string['iunderstand'] = 'Entiendo';
$string['lastaccess'] = 'Ordenado por el último acceso';
$string['moreinfo'] = 'Más información';
$string['mycourses'] = 'Mis cursos';
$string['name'] = 'Ordenar por nombre';
$string['notavailableunless'] = 'No disponible a menos que \'<strong>{$a}</strong>\' esté disponible';
$string['notavailableuntil'] = 'No disponible hasta que \'{$a}\' esté completado';
$string['notnow'] = 'No ahora';
$string['notset'] = 'No ajustado';
$string['overdue'] = 'Vencido';
$string['pluginname'] = 'Catálogo de aprendizaje';
$string['privacy:metadata:preference:tool_catalogue_collapse_recently_accessed_courses'] = 'Si colapsar la sección "Cursos accedidos recientemente"';
$string['privacy:metadata:preference:tool_catalogue_hide_program_cover_help'] = 'Si mostrar la ayuda de la portada del programa';
$string['privacy:metadata:preference:tool_catalogue_my_courses_filter'] = 'Si filtrar los programas/cursos por todos/cursos/programas/completo/incompleto';
$string['privacy:metadata:preference:tool_catalogue_my_courses_sort'] = 'Si ordenar programas/cursos por nombre/fecha de vencimiento/último acceso';
$string['privacy:metadata:showprogramcoverhelp'] = 'Si mostrar la ayuda de la portada del programa';
$string['privacy:programcoverhelphidden'] = 'La portada de ayuda del programa fue ocultado';
$string['privacy:request:preference:set'] = 'El valor del ajuste \'{$a->name}\' fue \'{$a->value}\'';
$string['proceedtocourse'] = 'Ir al contenido del curso';
$string['proceedtoprogram'] = 'Ir al contenido del programa';
$string['program'] = 'Programa';
$string['programdisplayduelimit'] = 'Mostrar los días que faltan para el vencimiento del programa';
$string['programdisplayduelimit_desc'] = 'Cantidad de días a partir de los cuales los usuarios verán un pequeño recordatorio (Vence en X días) junto al nombre del programa. Por ejemplo, si se establece en 14, el recordatorio será visible durante los 14 días antes de que el programa llegue a su fecha de vencimiento. Establecerlo en 0 para deshabilitar esta funcionalidad.';
$string['programempty'] = 'No hay cursos en este programa';
$string['programhelpimage'] = 'La imagen de ayuda del programa';
$string['programhelptext'] = '<ul><li>Los programas pueden contener diferentes cursos</li><li>Completar los cursos para completar el programa</li></ul>';
$string['programhelptitle'] = '¿Qué es un programa?';
$string['programimage_help'] = 'La imagen del programa.';
$string['programlink'] = 'Ver "{$a}" detalles';
$string['programlinksingle'] = 'Ver detalles del programa';
$string['programs'] = 'Programas';
$string['programstructure'] = 'Estructura del programa';
$string['progress'] = '{$a}% completo';
$string['progresscompleted'] = '{$a->completed} de {$a->total} completos';
$string['recentlyaccessedcourses'] = 'Cursos accedidos recientemente';
$string['restricted'] = 'No disponible hasta que \'<strong>{$a}</strong>\' esté completo';
$string['searchplaceholder'] = 'Buscar cursos o programas';
$string['selectenrolmentmethod'] = 'Seleccionar un método de matriculación';
$string['showcataloguecoursecategory'] = 'Mostrar categoría de cursos en tarjetas de cursos';
$string['showcataloguecoursecategory_desc'] = 'La categoría de curso será visible en cualquier tarjeta de curso encontrada en "Área personal", "Mis cursos" y algunos bloques.';
$string['showcoursedates'] = 'Mostrar las fechas del curso en el modal del curso';
$string['showcoursedates_desc'] = 'Las fechas del curso serán visibles en el modal del curso y en la pestaña de información del curso.';
$string['showmore'] = 'Mostrar {$a} más...';
$string['startcourse'] = 'Comenzar curso';
$string['startdatex'] = '<strong>Fecha de inicio:</strong> {$a}';
$string['todo'] = 'Pendiente:';
$string['trainers'] = 'Formadores';
$string['xcourses'] = '{$a} cursos';
