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
 * Strings for component 'quizaccess_delayed', language 'es', version '4.1'.
 *
 * @package     quizaccess_delayed
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attemptquiz'] = 'Realizar el cuestionario ahora';
$string['delayedattemptlock'] = 'Entrada gradual al cuestionario';
$string['delayedattemptlock_help'] = 'Si se activa, al acceder a la página antes del momento de apertura del cuestionario se inhabilita transitoriamente el botón de comienzo.
Se activa un contador de tiempo con un plazo aleatorio para cada estudiante (hasta un tiempo configurado por su institución). Solo cuando ese plazo termina el estudiante puede usar el botón de comienzo del cuestionario.';
$string['explaindelayedattempt'] = 'Establece una demora aleatoria para comenzar';
$string['noscriptwarning'] = 'Este cuestionario necesita un navegador que soporte JavaScript. Si tiene un bloqueador de Javascript necesitará desactivarlo.';
$string['pleasewait'] = 'Por favor, espere en esta página.';
$string['pluginname'] = 'Entrada con retardo aleatorio al cuestionario.';
$string['pluginname_desc'] = 'Auto activa el botón de inicio de cuestionario con un retardo aleatorio.';
$string['quizaccess_delayed_allowdisable'] = 'A los profesores se les permite desactivar la regla';
$string['quizaccess_delayed_countertype'] = 'Tipo de contador.';
$string['quizaccess_delayed_dangerousquiznotice'] = 'Mensaje institucional que se muestra si el cuestionario puede ser problemático';
$string['quizaccess_delayed_enabled'] = 'Entrada retardada a los cuestionarios activada';
$string['quizaccess_delayed_enabledbydefault'] = 'Los nuevos exámenes usarán esta regla por defecto';
$string['quizaccess_delayed_maxdelay'] = 'Máximo retardo (minutos)';
$string['quizaccess_delayed_notice'] = 'Aviso para los estudiantes';
$string['quizaccess_delayed_startrate'] = 'Tasa de entrada (alumnos por minuto)';
$string['quizaccess_delayed_teachernotice'] = 'Este cuestionario aplicará un control de entrada gradual, que hará que los estudiantes entren aleatoriamente hasta con {$a} minutos de retardo.';
$string['quizaccess_delayed_timelimitpercent'] = 'Máximo retardo como porcentaje del tiempo de realización';
$string['quizwillstartinabout'] = 'Su turno para completar el cuestionario comenzará en';
$string['quizwillstartinless'] = 'Su turno para completar el cuestionario comenzará en menos de un minuto';
$string['tooshortpagesadvice'] = 'El cuestionario tiene {$a->pages} páginas demasiado cortas. Esto aumenta la carga sobre el servidor gravemente. Considere asignar más tiempo a cada página, por ejemplo poniendo más preguntas en cada página.';
$string['tooshorttimeguardadvice'] = 'Un tiempo de disponibilidad de {$a->timespanstr} es demasiado ajustado. Tenga en cuenta que se aplicará a algunos estudiantes un retardo de espera de hasta {$a->maxdelaystr}, tiene {$a->timelimitstr} para realizar la prueba y conviene dejar un márgen de seguridad para otros retardos en el inicio del cuestionario.';
