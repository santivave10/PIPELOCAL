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
 * Strings for component 'tool_wp', language 'es', version '4.1'.
 *
 * @package     tool_wp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutexportfile'] = 'Sobre este archivo';
$string['activitycompletion'] = 'Finalización de la actividad';
$string['allcohorts'] = 'Todas las cohortes';
$string['allcohorts_help'] = 'Todas las cohortes que este usuario puede administrar';
$string['alldata'] = 'Todos los datos';
$string['allsystemcohorts'] = 'Todas las cohortes del sistema';
$string['cantlocatefileindraftarea'] = 'No se puede ubicar el archivo en el área de borrador del usuario.';
$string['certificates'] = 'Certificados';
$string['certificatetemplates'] = 'Plantillas de certificados';
$string['certificatetemplates_help'] = 'Incluye plantillas de certificados, páginas y elementos. Debe tenerse en cuenta que las emisiones de certificados no son incluidos';
$string['certificatetemplatesdetails'] = 'Detalles de plantillas de certificados';
$string['change'] = 'Cambiar';
$string['cleanupexpiredimportsexports'] = 'Limpiar exportaciones e importaciones caducadas';
$string['codechanged'] = 'El código de emisión fue reemplazado de \'{$a->from}\' a \'{$a->to}\'';
$string['cohortdetails'] = 'Detalles de cohorte';
$string['cohortdetails_help'] = 'Detalles de cohorte para cada instancia seleccionada';
$string['cohortdetailswithmembers'] = 'Detalles de cohorte incluyendo miembros';
$string['cohortdetailswithmembers_help'] = 'Detalles de la cohorte, incluida la información de membresía. Tener en cuenta que los usuarios no están incluidos';
$string['cohortmembers'] = 'Miembros de la cohorte';
$string['cohortmembers_help'] = 'Sólo se incluirá la información de membresía de la cohorte, pero no se incluirán los usuarios reales.';
$string['confighideparentlang'] = 'Escoder paquetes padre de Workplace';
$string['confighideparentlangdesc'] = 'Si se activa, no se mostrará en el menú de idiomas el padre de ningún paquete de idiomas de Workplace. Por ejemplo, "English (en)" no se mostrará si está instalado "English for Workplace (en_wp)".';
$string['confirmdeleteexport'] = '¿Estás seguro de querer eliminar esta exportación?';
$string['confirmdeleteimport'] = '¿Estás seguro de querer eliminar esta importación?';
$string['confirmprevbutton'] = '¿Abandonar el sitio? Es posible que los cambios que hayas realizado no se guarden.';
$string['confirmprocess'] = 'Al hacer clic en "Continuar", el proceso comenzará en breve. Recibirás una notificación cuando termine.';
$string['conflictidnumber'] = 'Agregar un sufijo numérico al número de ID de la cohorte';
$string['conflicts'] = 'Conflictos';
$string['conflictshortname'] = 'Agregar un sufijo numérico al nombre corto del curso';
$string['content'] = 'Contenido';
$string['copiedtoclipboard'] = 'Texto copiado al portapapeles';
$string['copytoclipboard'] = 'Copiar al portapapeles';
$string['coursecontentbackup'] = 'Permitir copia de seguridad del contenido del curso';
$string['coursecontentbackupdesc'] = 'Esta configuración controla si los usuarios que pueden hacer una copia de seguridad de los cursos pueden incluir el contenido del curso como parte de una exportación. Si no se configura, sólo los usuarios que pueden editar la administración del sitio pueden exportar el contenido del curso como parte de la migración. Mantener esta configuración deshabilitada ayudará a reducir el tamaño del archivo exportado.';
$string['coursereset'] = 'Reinicio del curso para un usuario individual';
$string['coursesadmintab'] = 'Aprendizaje';
$string['createdby'] = 'Creado por';
$string['csvcolumn'] = 'Columna csv';
$string['csvdefaultvalue'] = 'Valor por defecto';
$string['csvfieldsmapping'] = 'Mapeo de campo';
$string['csvmappingnotspecified'] = 'Sin especificar';
$string['csvwpcolumn'] = 'Moodle Workplace';
$string['deletegradeshistory'] = 'Eliminar el historial de calificaciones durante el reinicio del curso';
$string['deletegradeshistory_desc'] = 'Se recomienda eliminar el historial de calificaciones durante el reinicio del curso, especialmente cuando la configuración "Recuperar calificaciones predeterminadas" está activada. Si el historial de calificaciones no se elimina durante el reinicio del curso, el proceso de recuperación de las calificaciones del curso en la rematriculación recuperará las calificaciones, sin embargo, toda la información de finalización de actividades ya no estará presente.';
$string['descriptionformat'] = 'Formato de descripción';
$string['descriptionformatdefault'] = 'Formato de descripción por defecto';
$string['doexport'] = 'Exportar';
$string['doimport'] = 'Importar';
$string['doyouagreelicense'] = '¿Has leído estos términos y has firmado la licencia propietaria de Moodle Workplace™?';
$string['entitiescountpostfix'] = '({$a})';
$string['entitycertificateissues'] = 'Emisión de certificados';
$string['entitycertificateissueuser'] = 'Emisión de certificado: {$a}';
$string['entitycoursereset'] = 'Datos de reinicio del curso';
$string['entityidentifier'] = '{$a->name} ({$a->idnumber})';
$string['errorcantdeleteexport'] = 'No se puede eliminar la exportación';
$string['errorcantdeleteimport'] = 'No se puede eliminar la importación';
$string['errorcohortsameidnumber'] = 'Ya existen cohortes con el mismo número de ID';
$string['errorcouldnotallocatecohort'] = 'No se pudo matricular el usuario \'{$a->originaluserfullname}\' a la cohorte \'{$a->name}\'';
$string['errorcouldnotimportissue'] = 'No se pudo importar el certificado emitido para \'{$a}\'';
$string['errorcoursesdonotexist'] = 'Algunos cursos no existen';
$string['errorcoursessameshortname'] = 'Ya existen cursos con el mismo nombre corto';
$string['errorcustomfielddoesnotexist'] = 'El campo personalizado no existe, no se pudieron importar los datos \'{$a}\'';
$string['errorcustomfieldnotfound'] = 'Instancia de campo del campo personalizado no fue encontrada';
$string['errorcustomfieldnotfounddetail'] = 'Campo personalizado \'{$a}\' no encontrado';
$string['errornegativenumber'] = 'No se puede incluir un número que no sea negativo aquí.';
$string['eventcoursemodulereset'] = 'Restablecimiento del módulo del curso para un usuario individual';
$string['eventcoursereset'] = 'Reinicio de curso para un usuario individual';
$string['eventexportcreated'] = 'Exportación creada';
$string['eventexportdeleted'] = 'Exportación eliminada';
$string['eventexportupdated'] = 'Exportación actualizada';
$string['eventimportcreated'] = 'Importación creada';
$string['eventimportdeleted'] = 'Importación eliminada';
$string['eventimportupdated'] = 'Importación actualizada';
$string['export_content'] = 'Detalles de la plantilla del certificado';
$string['export_content_help'] = 'Plantillas de certificados, páginas y elementos.';
$string['export_issued'] = 'Certificados emitidos';
$string['export_issued_help'] = 'Certificados emitidos a los usuarios. No se incluirá una copia de los propios usuarios.';
$string['exportcoursecategoriescontent'] = 'Detalles de la categoría de cursos';
$string['exportcoursecategoriescontent_help'] = 'Incluye detalles de la categoría de cursos. Las asignaciones de roles y filtros no serán incluidas.';
$string['exportcoursecontent'] = 'Estructura de curso';
$string['exportcoursecontent_help'] = 'Esto incluye todo en el curso excepto su contenido.

El archivo exportado contendrá la misma configuración que la establecida como predeterminada en este sitio al crear una copia de seguridad estándar del curso. No se incluirán datos del usuario.';
$string['exported'] = 'Exportado';
$string['exporter'] = 'Exportador';
$string['exportercreatefrom'] = 'Crear exportación desde';
$string['exportercreatefrom_help'] = 'Esta opción te permite definir si deseas exportar las entidades de todo el sitio, o sólo aquellas asociadas con el micrositio actual';
$string['exportercreatefromcurrenttenant'] = 'Micrositio actual';
$string['exporterdesc'] = 'Certificados emitidos y plantillas';
$string['exporterdescription'] = 'Cursos sin información de usuario, usando la configuración de la copia de seguridad por defecto';
$string['exporterdescriptioncategories'] = 'Categorías y subcategorías de cursos';
$string['exporterdescriptioncohorts'] = 'Cohortes, incluyendo a sus miembros sin información del usuario';
$string['exporterdescriptionreports'] = 'Reportes personalizados, incluyendo los datos de la audiencia y la planificación';
$string['exporternotavailable'] = 'El exportador \'{$a}\' no está disponible aquí';
$string['exporternotfound'] = 'No se pudo encontrar el exportador \'{$a}\'';
$string['exporterrequirestenant'] = 'El exportador \'{$a}\' requiere un micrositio';
$string['exportersettingsinvalid'] = 'La configuración del exportador no tiene un formato JSON válido';
$string['exportersettingsvalidationfailed'] = 'Falló la validación de la configuración del exportador: {$a}';
$string['exportersunavailable'] = 'No tenés disponibles exportadores para utilizar';
$string['exportgeneralsettings'] = 'Configuraciones generales';
$string['exportgeneralsettingsdesc'] = 'Seleccionar qué exportador deseas usar. En el próximo paso podrá reducir su selección y especificar qué elementos desea exportar.';
$string['exportimport'] = 'Migración';
$string['exportimportconflictsuffix'] = 'Agregar un sufijo numérico al campo \'{$a}\'';
$string['exportimportentityunavailable'] = '{$a} (No disponible)';
$string['exportimporterrorentityexists'] = 'Ya existe una instancia con el mismo \'{$a}\'';
$string['exportimportfieldchanged'] = 'Archivo modificado \'{$a->field}\' desde \'{$a->from}\' a \'{$a->to}\'';
$string['exportimportsettings'] = 'Ajustes de la migración';
$string['exportimportsitecontent'] = 'Contenido: cursos, categorías, programas y certificaciones';
$string['exportimportsitedescription'] = 'El contenido completo del sitio incluyendo todos los micrositios junto con todas las entidades contenidas en ellos. Las copias de seguridad incluirán todo el contenido y los datos del usuario, excepto sus registros';
$string['exportimportsiteerror'] = 'No se pudo importar el sitio';
$string['exportimportsitesame'] = 'No se puede importar en el mismo sitio desde el que se originó la exportación';
$string['exportimportsitesuccess'] = 'Sitio importado';
$string['exportimportstatuscompleted'] = 'Éxito';
$string['exportimportstatuscreated'] = 'No está listo';
$string['exportimportstatuserror'] = 'Error';
$string['exportimportstatusinprogress'] = 'En progreso';
$string['exportimportstatusscheduled'] = 'Planificado';
$string['exportimportuserfieldserror'] = 'No se pudo importar el campo de perfil \'{$a}\'';
$string['exportimportusersall'] = 'Seleccionar todos los usuarios';
$string['exportimportusersdescription'] = 'Sitio y usuarios de micrositio';
$string['exportimportuserserror'] = 'No se pudo crear el usuario \'{$a}\'';
$string['exportimportuserslanguseselected'] = 'Usar los idiomas seleccionados';
$string['exportimportusersmanual'] = 'Seleccionar usuarios manualmente...';
$string['exportimportusersmissinglangerror'] = 'Falta el idioma del usuario en el sistema';
$string['exportimportusersmissinglangerrorlog'] = 'Falta el idioma de usuario \'{$a->lang}\' en el sistema';
$string['exportimportusersmnetconflict'] = 'El valor del host de MNet difiere';
$string['exportimportusersmnetmatchlocal'] = 'Actualizar valor para que coincida con el sitio';
$string['exportimportusersmnetuseexisting'] = 'Importar con valor existente';
$string['exportimportuserspicture'] = 'Imágenes de usuarios';
$string['exportimportusersprofile'] = 'Perfiles de usuario';
$string['exportimportuserssuccess'] = 'Usuario creado \'{$a}\'';
$string['exportimportuserssuspended'] = 'Incluir usuarios suspendidos';
$string['exportimportuserstenant'] = 'Seleccionar todos los usuarios desde \'{$a}\'';
$string['exportnotfound'] = 'No se encontró la exportación';
$string['exportnotfoundornotready'] = 'La exportación no se encontró o no está lista para importarse';
$string['exportnotready'] = 'La exportación no está lista para importarse';
$string['exportoptions'] = 'Opciones';
$string['exportoptionsdesc'] = 'Especificar qué elementos deseas exportar seleccionándolos.';
$string['exportreview'] = 'Revisar';
$string['exportreviewdesc'] = 'Revisar si todo es correcto antes de exportar el archivo.';
$string['exports'] = 'Exportaciones';
$string['exportselectallreports'] = 'Exportar todos los reportes personalizados';
$string['exportselectlimitreports'] = 'Exportar un reporte personalizado específico...';
$string['exportstatus'] = 'Estado';
$string['filecontent'] = 'Contenido del archivo';
$string['grade'] = 'Calificación';
$string['idnumberchanged'] = 'El número ID fue reemplazado de \'{$a->from}\' a \'{$a->to}\'';
$string['import_content'] = 'Detalles de la plantilla del certificado';
$string['import_content_help'] = 'Plantillas de certificados, páginas y elementos.';
$string['import_issued'] = 'Certificados emitidos';
$string['import_issued_help'] = 'Emisiones de este certificado a los usuarios';
$string['importallselectedcategory'] = 'Importar todo en la categoría seleccionada';
$string['importallsystemcontext'] = 'Importar todo en el contexto de sistema';
$string['importaudiencelogerror'] = 'No se pudo importar el registro de audiencia';
$string['importaudiencelogsuccess'] = 'Registro de audiencia importado';
$string['importchoosetenant'] = 'Elegir micrositio';
$string['importconflictcreatecourse'] = 'Crear un curso vacío';
$string['importconflictcreatecourseincategory'] = 'Crear un curso vacío en la categoría \'{$a}\'';
$string['importconflictincategory'] = 'en la categoría';
$string['importconflictinstances'] = 'Instancias ({$a}):';
$string['importconflicts'] = 'Conflictos';
$string['importconflictsdesc'] = 'Resolver los conflictos, si es necesario.';
$string['importconflictskip'] = 'No importar';
$string['importcoursecontent'] = 'Copia de seguridad del curso excluyendo información de usuario';
$string['importcoursecontent_help'] = 'Importar copias de seguridad del curso para cada instancia seleccionada';
$string['importdestination'] = 'Destino';
$string['imported'] = 'Importado';
$string['importeitherexportidorfile'] = 'Es necesario especificar exportid o archivo, pero no ambos.';
$string['importer'] = 'Importador';
$string['importernotfound'] = 'El importador {$a} no fue encontrado o no está disponible';
$string['importerrequired'] = 'Hay más de un importador disponible, debe especificarse';
$string['importerrequirestenant'] = 'El importador \'{$ a}\' requiere un micrositio';
$string['importersettingsinvalid'] = 'La configuración del importador no tiene un formato JSON válido';
$string['importersettingsvalidationfailed'] = 'La validación de la configuración del importador falló: {$a}';
$string['importformat'] = 'Formato de archivo';
$string['importformatauto'] = 'Detectar automáticamente';
$string['importformatcsv'] = 'CSV';
$string['importformatworkplace'] = 'Formato de Workplace';
$string['importfromfile'] = 'Nueva importación desde este archivo';
$string['importgeneralsettings'] = 'Configuraciones generales';
$string['importgeneralsettingsalt'] = 'Seleccionar el destino de los datos importados. Podrás especificar qué elementos deseas importar en el próximo paso.';
$string['importhasconflits'] = 'La importación tiene conflictos: {$a}';
$string['importincrementidnumber'] = 'Agregar un sufijo numérico al número de ID';
$string['importintothecurrenttenant'] = 'Importar al micrositio actual';
$string['importlogerror'] = 'No se pudo importar la plantilla de certificado \'{$a->name}\'';
$string['importlogerrorinvalidaudience'] = 'Audiencia faltante o inválida';
$string['importlogerrorinvalidreportsource'] = 'Fuente del reporte faltante o inválida';
$string['importlogerrorinvalidreporttype'] = 'Tipo de reporte inválido';
$string['importlogerrorinvalidscheduleformat'] = 'Formato de planificación inexistente o inválido';
$string['importlogexception'] = 'Excepción: {$a}';
$string['importlogfailed'] = 'No se pudo importar el curso \'{$a->fullname}\'';
$string['importlogfailedcohort'] = 'No se pudo importar la categoría de curso \'{$a->name}\'';
$string['importlogfailedcoursecategory'] = 'No se pudo importar la categoría de cursos \'{$a->name}\'';
$string['importlogsuccess'] = 'Se creó un nuevo curso \'<a href="{$a->url}">{$a->fullname}</a>\'';
$string['importlogsuccesscertificates'] = 'Se creó una nueva plantilla de certificado \'<a href="{$a->url}">{$a->name}</a>\' con {$a->pagescount} páginas y {$a->elementscount} elementos';
$string['importlogsuccesscohort'] = 'Se creó una nueva cohorte \'<a href="{$a->url}">{$a->name}</a>\'';
$string['importlogsuccesscohortallocations'] = 'Se matriculó el usuario \'{$a->userfullname}\' en la cohorte \'{$a->name}\'';
$string['importlogsuccesscoursecategory'] = 'Se crepo una nueva categoría de cursos \'<a href="{$a->url}">{$a->name}</a>\'';
$string['importlogsuccessissue'] = 'Se creó una nueva emisión del certificado \'{$a->template}\' para el usuario: \'{$a->originaluserfullname}\'';
$string['importnotenant'] = 'Disponible para todos los micrositios';
$string['importnotfound'] = 'Importación no encontrada';
$string['importoptions'] = 'Opciones';
$string['importoptionsdesc'] = 'Especificar qué elementos deseas importar seleccionándolos.';
$string['importproblem'] = 'Problema: {$a}';
$string['importproblemaffects'] = 'Esto afecta:';
$string['importreportlogerror'] = 'No se pudo importar el reporte \'{$a}\'';
$string['importreportlogsuccess'] = 'Se creó el reporte \'<a href="{$a->url}">{$a->name}</a>\' con {$a->columncount} columnas, {$a->conditioncount} condiciones y {$a->filtercount} filtros';
$string['importreview'] = 'Revisar';
$string['importreviewdesc'] = 'Comprobar si todo es correcto antes de importar el archivo.';
$string['imports'] = 'Importaciones';
$string['importschedulelogerror'] = 'No se pudo importar el registro de planificación';
$string['importschedulelogsuccess'] = 'Se importó el registro de planificación';
$string['importselectallreports'] = 'Importar todos los reportes personalizados';
$string['importselectlimitreports'] = 'Importar reportes personalizados específicos...';
$string['importselectsource'] = 'Seleccionar fuente';
$string['importselectsourcedesc'] = 'Subir un csv válido o un archivo de Moodle Workplace. En el siguiente paso, podrás definir qué elementos querés importar desde el archivo.';
$string['importselecttenant'] = 'Seleccionar micrositio...';
$string['importsetidnumbertoempty'] = 'Establecer el ID en una cadena vacía';
$string['importsolution'] = 'Solución:';
$string['importstatus'] = 'Estatus';
$string['importunknownerror'] = 'Error desconocido {$a}';
$string['importunknownformat'] = 'No se puede detectar el formato de archivo de la extensión, seleccione el formato';
$string['includecoursecontent'] = 'Incluir contenido de curso';
$string['includecoursecontent_help'] = 'Incluir todo el contenido del curso como actividades, filtros, eventos de calendario, etc.

El archivo exportado contendrá la misma configuración que la establecida como predeterminada en este sitio al crear una copia de seguridad estándar del curso. No se incluirán datos del usuario.';
$string['instances'] = 'Instancias';
$string['instancescount'] = 'Instancias ({$a}):';
$string['invaliddevice'] = 'Estás intentando acceder al sitio de Moodle Workplace usando la aplicación Moodle. Por favor, descargá la aplicación de Moodle Workplace para continuar';
$string['loading'] = 'Cargando...';
$string['log'] = 'Registro';
$string['managecoursecategories'] = 'Administrar categorías de cursos';
$string['mappingerrorbadgeheader'] = 'Algunas insignias no existen';
$string['mappingerrorbadgelog'] = 'La insignia {$a} no fue encontrada';
$string['mappingerrorcertificateheader'] = 'Algunas plantillas de certificado no existen';
$string['mappingerrorcertificatelog'] = 'El certificado {$a} no fue encontrado';
$string['mappingerrorcohortheader'] = 'Algunas cohortes no existen';
$string['mappingerrorcohortlog'] = 'La cohorte {$a} no fue encontrada';
$string['mappingerrorcompetencyheader'] = 'Algunas competencias no existen';
$string['mappingerrorcompetencylog'] = 'La competencia {$a} no fue encontrada';
$string['mappingerrorcontextnotfound'] = 'Contexto no fue encontrado';
$string['mappingerrorcoursenotfound'] = 'El curso {$a} no fue encontrado';
$string['mappingerrorlpheader'] = 'Algunos planes de aprendizaje no existen';
$string['mappingerrorlplog'] = 'No se encontró el plan de aprendizaje {$a}.';
$string['mappingerroruserfieldheader'] = 'Algunos campos de perfil de usuario no existen';
$string['mappingerroruserfieldlog'] = 'No se encontró el campo de perfil de usuario {$a}';
$string['mappingerrorusernotfound'] = 'No se pudo encontrar al usuario {$a} en el micrositio actual';
$string['mappingnoticecoursecreated'] = 'El curso vacío <a href="{$a->courseurl}">{$a->fullname}</a> fue creado';
$string['mappingnoticecourseidnumber'] = 'El curso con el nombre corto \'{$a->shortname}\' no fue encontrado. <a href="{$a->courseurl}">Otro curso</a> con el número de ID \'{$a->idnumber}\' fue encontrado, pero este curso tiene un nombre corto diferente';
$string['mappingnoticeuseremail'] = 'Un usuario con nombre de usuario \'{$a->username}\' no fue encontrado. <a href="{$a->profileurl}">Otro usuario</a> con el correo electrónico {$a->email} fue encontrado, pero este usuario tiene un nombre de usuario diferente';
$string['messagefullexportcomplete'] = 'Tu exportación fue completada el {$a->date}

Estado: {$a->status}

Clic <a href="{$a->url}">here</a> para ver los detalles';
$string['messagefullimportcomplete'] = 'Tu importación fue completada el {$a->date}

Estado: {$a->status}

Clic <a href="{$a->url}">here</a> para ver los detalles';
$string['messageprovider:exportcomplete'] = 'Exportación completada';
$string['messageprovider:importcomplete'] = 'Importación completada';
$string['migrationcannotswitchtenant'] = 'No se encuentra el micrositio con ID o número de ID {$a} no se encuentra o no estás habilitado para cambiar a él';
$string['migrationnotenanterror'] = 'Las opciones micrositio y no-micrositio no se pueden usar en simultáneo';
$string['migrationreportaudiences'] = 'Audiencias';
$string['migrationreportdefinition'] = 'Definicion del reporte';
$string['migrationreportdefinition_help'] = 'Incluye reporte de columnas, condiciones y filtros';
$string['migrationreportschedules'] = 'Planificaciones';
$string['migrationschoosefrom'] = 'Elegir desde';
$string['noavailableimporter'] = 'No pudimos encontrar un importador disponible para este archivo.';
$string['noavailableimporters'] = 'No hay importadores disponibles';
$string['nocategoriesavailable'] = 'No hay categorías disponibles';
$string['noconflictsfound'] = 'No se encontraron conflictos';
$string['nodetails'] = 'No se encontraron detalles';
$string['nonproductionsite'] = 'Sitio no-productivo';
$string['nonproductionsitemessage'] = 'Este no es un sitio productivo';
$string['nopermissioncategoryimport'] = 'No tenés permiso para importar en esta categoría.';
$string['nopermissioncategoryrestore'] = 'No tenés permiso para restaurar esta categoría.';
$string['nopermissionform'] = 'No tiene permiso para acceder a este formulario.';
$string['nopermissiontab'] = 'No tiene permiso para acceder a esta página.';
$string['nothing'] = 'Nada';
$string['nothingtoexport'] = 'Nada que exportar';
$string['nothingtoimport'] = 'Nada que importar';
$string['notpossible'] = 'No es posible';
$string['numhour'] = '{$a} hora';
$string['outcomes'] = 'Resultados';
$string['performanceinfo'] = 'Información de rendimiento de la pestaña (lecturas/escrituras de base de datos: {$y->reads}/{$y->writes})';
$string['pluginname'] = 'Workplace';
$string['privacy:metadata:certificationid'] = 'El ID de la certificación de donde proviene este curso.';
$string['privacy:metadata:courseid'] = 'El curso que fue reiniciado.';
$string['privacy:metadata:exportcreatedby'] = 'El ID del usuario que realizó la exportación.';
$string['privacy:metadata:exportstatus'] = 'El estatus de la exportación.';
$string['privacy:metadata:grade'] = 'Calificación que obtuvo el usuario en el curso antes de que fuera reiniciado.';
$string['privacy:metadata:importcreatedby'] = 'El ID del usuario que realizó la importación.';
$string['privacy:metadata:importstatus'] = 'El estado de la importación.';
$string['privacy:metadata:programid'] = 'El ID del programa de donde proviene este curso.';
$string['privacy:metadata:reason'] = 'La razón por la cual el curso fue reiniciado.';
$string['privacy:metadata:resetinfo'] = 'Información sobre lo que se ha reiniciado en el curso.';
$string['privacy:metadata:resetstatus'] = 'Estado del reinicio.';
$string['privacy:metadata:tenantid'] = 'El ID del micrositio relacionado.';
$string['privacy:metadata:timecreated'] = 'El tiempo de creación.';
$string['privacy:metadata:timemodified'] = 'El tiempo de modificación.';
$string['privacy:metadata:timerequested'] = 'Momento en el que el reinicio fue requerido.';
$string['privacy:metadata:tool_wp_course_reset'] = 'Reinicio de curso.';
$string['privacy:metadata:tool_wp_export'] = 'Información sobre las exportaciones realizadas en el sitio.';
$string['privacy:metadata:tool_wp_import'] = 'Información sobre las importaciones realizadas en el sitio.';
$string['privacy:metadata:userid'] = 'El usuario al cual se le ha reiniciado el curso.';
$string['privacy:metadata:usermodified'] = 'El usuario modificado.';
$string['privacy:metadata:userrequested'] = 'Usuario que solicitó el reinicio del curso.';
$string['privacy:metadata:wascompleted'] = 'Si el curso fue completado por el usuario antes del reinicio.';
$string['problem'] = 'Problema';
$string['proceed'] = 'Avanzar';
$string['processing'] = 'Procesando';
$string['productionsite'] = 'Sitio productivo';
$string['productionstate'] = 'Estado de producción';
$string['productionstatedesc'] = 'Los sitios no productivos mostrarán un descargo de responsabilidad en la esquina inferior derecha de la pantalla.';
$string['quotedentity'] = '\'{$a}\'';
$string['reason'] = 'Motivo del reinicio';
$string['recovercoursegrades'] = 'Al habilitar esta configuración, asegurate de habilitar también la configuración \'Eliminar el historial de calificaciones durante el reinicio del curso\'.';
$string['refresh'] = 'Actualizar';
$string['reg_moodleproduct'] = 'Producto Moodle ({$a})';
$string['reg_wpactiveusers'] = 'Cantidad de usuarios únicos que ingresaron el último mes ({$a})';
$string['reg_wpcertificates'] = 'Número de certificados ({$a})';
$string['reg_wpcertificatesissues'] = 'Número de certificados emitidos ({$a})';
$string['reg_wpparticipantnumberaverage'] = 'Promedio de participantes activos durante el último mes  ({$a})';
$string['reg_wpplugins'] = 'Lista de plugins instalados y habilitados, cantidad de instancias ({$a})';
$string['reg_wpproductionstate'] = 'Sitio productivo ({$a})';
$string['resetinfo'] = 'Reiniciar información';
$string['resetstatus'] = 'Reiniciar estatus';
$string['safenavigation'] = 'Es seguro continuar navegando en este sitio.';
$string['selectallcategoriesinthisfile'] = 'Seleccionar todas las categorías de curso en este archivo';
$string['selectallcohortsinthisfile'] = 'Seleccionar todas las cohortes en este archivo';
$string['selectallcoursesinthisfile'] = 'Seleccionar todos los cursos en este archivo';
$string['selectalltemplates'] = 'Seleccionar todas las plantillas de certificado';
$string['selectalltemplatesinfile'] = 'Seleccionar todas las plantillas de certificado en este archivo';
$string['selectatleastonecategory'] = 'Seleccionar al menos una categoría';
$string['selectatleastonecohort'] = 'Seleccionar al menos una cohorte';
$string['selectatleastonecourse'] = 'Seleccionar al menos un curso';
$string['selectatleastonetemplate'] = 'Seleccionar al menos una plantilla';
$string['selectcoursecategory'] = 'Seleccionar categoría de curso';
$string['selectcoursesmanually'] = 'Seleccionar cursos manualmente...';
$string['selectedcoursecategory'] = 'Categoría de curso seleccionada: {$a}';
$string['selectexporter'] = 'Seleccionar exportador';
$string['selectimporter'] = 'Seleccionar importador';
$string['selectmanually'] = 'Seleccionar manualmente...';
$string['selectmanuallycategories'] = 'Seleccionar manualmente categorías y subcategorías';
$string['selectmanuallycertificates'] = 'Seleccionar manualmente plantillas de certificado';
$string['shortnamechanged'] = 'Nombre corto cambió de \'{$a->de}\' a \'{$a->a}\'';
$string['showless'] = 'Mostrar menos';
$string['showxmore'] = 'Mostrar{$a} más...';
$string['solution'] = 'Solución';
$string['stepx'] = 'Paso {$a}.';
$string['tenant'] = 'Micrositio';
$string['thissite'] = '(Este sitio)';
$string['timerequested'] = 'Tiempo solicitado';
$string['timereseted'] = 'Reajustar tiempo';
$string['uploadimportfile'] = 'Subir un archivo';
$string['userrequested'] = 'Usuario que solicitó';
$string['viewexport'] = 'Ver exportación';
$string['viewimport'] = 'Ver importación';
$string['viewlicense'] = 'Ver licencia';
$string['wascompleted'] = 'Fue completado';
$string['willbeimported'] = 'Será importado';
$string['workplacelicenseheader'] = 'Licencia de Moodle Workplace';
$string['workplacelicensenew'] = 'Moodle Workplace - Copyright © 2018 onwards, Moodle Pty Ltd
Moodle  - Copyright © 1999 onwards, Martin Dougiamas

Moodle Workplace™ Code is the collection of software scripts (plugins and modifications, and any derivations thereof) that are exclusively owned and licensed by Moodle under the terms of this proprietary Moodle Workplace Licence("MWL") alongside Moodle’s open software package ("Core") offering which itself is freely downloadable at "download.moodle.org" and which is provided by Moodle under a single GNU General Public Licence version 3.0, dated 29 June 2007("GPL"). MWL is strictly controlled by Moodle Pty Ltd and its certified premium partners. Wherever conflicting terms exist, the terms of the MWL are binding and shall prevail.

The Moodle Core software package governed by GPL is subject to copyright protection from 1999 onwards by Martin Dougiamas with portions contributed/copyrighted by other contributors. Such Moodle® open software and corresponding documentation are distributed in the hope that they will be useful, but without any warranty; without even the implied warranty of merchantability or fitness for a particular purpose.

By accessing Moodle Workplace™ that is governed by the MWL you agree that you have signed an MWL with Moodle Pty Ltd ensuring (among other things) that you:
- will not possess the Moodle Workplace™ Code without being subject to the terms of the MWL;
- will cease using Moodle Workplace™ and immediately delete all copies of the Moodle Workplace™ Code from your servers and any computers under your control if you are no longer a Moodle Certified Premium Partner or a client of a Moodle Certified Premium Partner. You must confirm this in writing to Moodle within 7 days of such event occurring;
- will not distribute copies of Moodle Workplace™ Code to any third party not a party to the MWL that you have signed and you must indemnify Moodle for any loss suffered by Moodle due to failure by you to comply with the MWL;
- agree that any improvements to Moodle Workplace™ Code must be explicitly shared with Moodle Pty Ltd and its certified premium partners, with such rights in the improvements assigned to Moodle Pty Ltd thereby allowing Moodle Pty Ltd full rights to include such improvements in future versions of Moodle Workplace™ Code.
- indemnify and hold both Moodle Pty Ltd and its certified premium partners harmless for any damages, fines, penalties, or other liability arising out of any data input by you and your end users.

Moodle Workplace™ websites may include a tracking pixel for statistical purposes and compliance monitoring. No personal data is collected or processed, only the site URL.

This is a summary only: for the full terms of the MWL please refer to the MWL you have signed.';
$string['workplacelicensenotagreed'] = 'No podés ver este contenido hasta que quien administra el sitio esté de acuerdo con la licencia de Moodle Workplace.';
$string['wp:manageexportimport'] = 'Gestionar exportar/importar de Workplace';
$string['wp:useexportimport'] = 'Usar exportar/importar de Workplace';
