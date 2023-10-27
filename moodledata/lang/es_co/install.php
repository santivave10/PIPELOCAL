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
 * Strings for component 'install', language 'es_co', version '4.1'.
 *
 * @package     install
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Directorio Admin';
$string['availablelangs'] = 'Paquetes de idiomas disponibles';
$string['caution'] = 'Precaución';
$string['chooselanguagehead'] = 'Seleccionar el idioma';
$string['chooselanguagesub'] = 'Selecciona un idioma para el proceso de instalación. Este idioma se usará también como el idioma por defecto del sitio, aunque se puede cambiar más adelante.';
$string['cliadminemail'] = 'Nuevo correo electrónico del usuario admin';
$string['cliadminpassword'] = 'Nueva contraseña del usuario admin';
$string['cliadminusername'] = 'Usuario';
$string['clialreadyconfigured'] = 'Ya existe el archivo de configuración: config.php. Emplea admin/cli/install_database.php para instalar moodle en este sitio.';
$string['clialreadyinstalled'] = 'Ya existe el archivo de configuración: config.php. Emplea admin/cli/install_database.php para actualizar el moodle de este sitio.';
$string['cliinstallfinished'] = 'La instalación se completó correctamente.';
$string['cliinstallheader'] = 'Programa de instalación desde la linea de comandos de Moodle {$a}';
$string['climustagreelicense'] = 'En modo no interactivo debes aceptar la licencia empleando  la opción: --agree-license';
$string['cliskipdatabase'] = 'Saltándose la instalación de la base de datos.';
$string['clitablesexist'] = 'Ya existen las tablas en la base de datos, la instalación cli no puede continuar.';
$string['configfilenotwritten'] = 'El script de instalación no puede crear automáticamente el archivo. config.php para que contenga la configuración seleccionada, probablemente por que no se puede escribir en el directorio de Moodle. Puedes copiar manualmente el código siguiente en el archivo: config.php dentro del directorio raíz de Moodle';
$string['configurationcompletehead'] = 'Configuración completa';
$string['configurationcompletesub'] = 'Moodle intentó guardar tu configuración en un archivo en la raíz de tu instalación de Moodle.';
$string['database'] = 'Base de Datos';
$string['databasehead'] = 'Configuración Base de Datos';
$string['databasehost'] = 'Servidor';
$string['databasename'] = 'Base de datos';
$string['databasepass'] = 'Contraseña';
$string['databaseport'] = 'Puerto';
$string['databasesocket'] = 'Socket Unix';
$string['databasetypehead'] = 'Controlador';
$string['databasetypesub'] = 'Moodle soporta varios tipos de servidores de base de datos. Si no sabes qué tipo usar, pónte en contacto con el administrador del servidor .';
$string['databaseuser'] = 'Usuario';
$string['dataroot'] = 'Directorio de Datos';
$string['datarootpermission'] = 'Permiso par EL  directorios de datos';
$string['dbconnectionerror'] = 'No pudimos conectarnos a la base de datos que indicaste. Verifica la configuración de la base de datos.';
$string['dbhost'] = 'Servidor';
$string['dbpass'] = 'Contraseña';
$string['dbport'] = 'Puerto';
$string['dbprefix'] = 'Prefijo para Tablas';
$string['dbtype'] = 'Tipo';
$string['dirroot'] = 'Directorio Moodle';
$string['download'] = 'Descargar';
$string['doyouagree'] = '¿Estás de acuerdo? (sí/no):';
$string['environmenthead'] = 'Verificando tu entorno...';
$string['environmentsub2'] = 'Cada versión de Moodle tiene algunos requerimientos mínimos de la versión de PHP y un número de extensiones obligatorias de PHP.
La verificación completa del entorno se realiza antes de cada instalación y actualización. Ponte en contacto con el administrador del servidor si no sabes cómo instalar una nueva versión o habilitar las extensiones de PHP.';
$string['errorsinenvironment'] = '¡Falló la verificación del entrono!';
$string['fail'] = 'Fallo';
$string['installation'] = 'Instalación';
$string['langdownloaderror'] = 'Desafortunadamente el idioma "{$ a}" no pudo ser descargado. El proceso de instalación continuará en inglés.';
$string['mysqliextensionisnotpresentinphp'] = 'PHP no ha sido configurado apropiadamente con la extensión MySQLi para poder comunicarse con MySQL. Verifica tu archivo: php.ini o recompila PHP.';
$string['nativemariadb'] = 'MariaDB (nativo/mariadb)';
$string['nativemariadbhelp'] = '<p>La base de datos es donde se almacenarán la mayoría de los ajustes y datos de Moodle y debe ser configurada aquí.</p>
<p>La base de datos, usuario y contraseña son obligatorios; el prefijo de las tablas es opcional.</p>
<p>El nombre de la base de datos solo puede contener caracteres alfanuméricos, peso ($) y guión bajo (_).</p>
<p>Si la base de datos no existe y el usuario indicado tiene los permisos apropiados, Moodle intentará crear la base de datos con los permisos y ajustes correctos.</p>
<p>Este controlador no es compatible con el motor MyISAM legacy</p>';
$string['nativemysqli'] = 'Improved MySQL (nativo/mysqli)';
$string['nativemysqlihelp'] = '<p>La base de datos es donde se almacenarán la mayoría de los ajustes y datos de Moodle.</p>
<p>La base de datos, usuario y contraseña son obligatorios; el prefijo de las tablas es opcional.</p>
<p>El nombre de la base de datos solo puede contener caracteres alfanuméricos, peso ($) y guión bajo (_).</p>
<p>Si la base de datos no existe y el usuario indicado tiene los permisos apropiados, Moodle intentará crear la base de datos con los permisos y ajustes correctos.</p>';
$string['nativeoci'] = 'Oracle (nativo/oci)';
$string['nativeocihelp'] = 'Ahora necesitas configurar la base de datos donde se almacenarán la mayoría de los datos de Moodle.
Esta base de datos ya debe haber sido creada, así como el usuario y contraseña para acceder a ella. El prefijo para las tablas es obligatorio.';
$string['nativepgsql'] = 'PostgreSQL (nativo/pgsql)';
$string['nativepgsqlhelp'] = '<p>La base de datos es donde se almacenarán la mayoría de los ajustes y datos de Moodle y debe ser configurada aqui.</p>
<p>La base de datos, usuario, contraseña y prefijo de las tablas son obligatorios.</p>
<p>La base de datos ya debe estar creada y el usuario debe tener permisos tanto para lectura como para escritura.</p>';
$string['nativesqlsrv'] = 'Microsoft SQL*Server (nativo/sqlsrv)';
$string['nativesqlsrvhelp'] = 'Ahora necesitas configurar la base de datos donde se almacenarán la mayoría de los datos de Moodle.
Esta base de datos ya debe haber sido creada, así como el usuario y contraseña para acceder a ella. El prefijo para las tablas es obligatorio.';
$string['nativesqlsrvnodriver'] = 'Los Controladores SQL Server de Microsoft para PHP no están instalados o configurados apropiadamente.';
$string['ociextensionisnotpresentinphp'] = 'PHP no ha sido configurado apropiadamente conla extensión OCI8 para poder comunicarse con Oracle. Verifica tu archivo: php.ini o recompila PHP.';
$string['pass'] = 'Pasó';
$string['paths'] = 'Rutas';
$string['pathserrcreatedataroot'] = 'El directorio de datos ({$a->dataroot}) no puede ser creado por el instalador.';
$string['pathshead'] = 'Confirma las rutas';
$string['pathsrodataroot'] = 'No se puede escribir en el directorio raíz';
$string['pathsroparentdataroot'] = 'No se puede escribir en el directorio base ({$a->parent}). El directorio de datos ({$a->dataroot}) no puede ser creado por el instalador.';
$string['pathssubdataroot'] = '<p>El directorio donde Moodle guardará los documentos subidos por los usuarios.</p>
<p>El directorio debe permitir LEER y ESCRIBIR al usuario del servidor web (<i>usualmente \'www-data\', \'nobody\' o \'apache\'</i>).</p>
<p>No debe ser accesible directamente desde la web.</p>
<p>Si el directorio no existe, el proceso de instalación tratará de crearlo.</p>';
$string['pathssubdirroot'] = '<p>La ruta completa del directorio que contiene el código de Moodle.</p>';
$string['pathssubwwwroot'] = '<p>La dirección web completa para acceder a Moodle (<i>la dirección que los usuarios escribirán en el navegador para acceder a Moodle</i>)</p>
<p>No es posible acceder a Moodle utilizando múltiples direcciones. Si tu sitio es accesible desde múltiples direcciones debes seleccionar la mas conveniente y redireccionar permanentemente a está las demás direcciones.</p>
<p>Si tu sitio web es accesible tanto desde internet como desde una red interna (<i>algunas veces llamada Intranet</i>), escribe aquí la dirección pública.</p>
<p>Si la dirección actual no es correcta, cambia la URL en el navegador y reinicia la instalación.</p>';
$string['pathsunsecuredataroot'] = 'La ubicación del directorio raíz no es segura';
$string['pathswrongadmindir'] = 'El directorio admin no existe';
$string['phpextension'] = '{$a} extensión PHP';
$string['phpversion'] = 'Versión PHP';
$string['releasenoteslink'] = 'Para información acerca de la versión de Moodle, consulta las notas de la versión en {$a}';
$string['safemode'] = 'Modo seguro';
$string['safemodeerror'] = 'Moodle puede tener problemas con el modo seguro activo';
