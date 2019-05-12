# Innorbix

Objetivo: Diseñar un plan de acción para el diseño, desarrollo, pruebas e implementación de los requisitos definidos dentro de la solución..

Procedimiento: Deberás seleccionar una empresa u organización donde llevarás a cabo tu proyecto, identificar la necesidad que se requiere mitigar, desarrollar la aplicación e implementarla de acuerdo a lo aprendido en el certificado.

Requerimientos: Retroalimentación de la fase II, seleccionar una herramienta de administración de proyectos (gitlo, zube) e integrarla con el repositorio que contendrá el código de la integración (github o bitbucket).

Resultados:

Después de completar los requerimientos establecidos, realiza lo siguiente:
1.	Mediante la integración del administrador de código (GitHub) y el administrador de proyectos (gitlo/zube), crea las actividades a llevar a cabo, categorízalas con etiquetas y establece un tiempo estimado, esto con base en tu análisis previamente realizado. En trello, es importante agregar todo el detalle que sea posible, esto facilitará el análisis, desarrollo y solución del requerimiento, justificación, etc.
Nota: En estas tareas, es importante establecer lo que no se cubrirá y en la primera versión y categorizarla para futura referencia.
2.	Agrupar las tareas en etapas (milestones), las cuales definirán la madurez del producto. Dentro del proyecto integrador se manejarán dos etapas: Beta y General Availability (GA). Beta se utilizará para agrupar todo el código que sea de desarrollo y GA, será el código final. Esto te ayudará a validar cuál es el progreso de tu trabajo dentro de la solución.

3.	Hasta este momento con las tareas y las etapas definidas, cuentas con el programa.

Nombre del proyecto
INNORBITX
Descripción del proyecto
INNORBITX es un sistema web el cual ayuda a agilizar los procesos de un consultorio médico,  para que puedan tener una mejor administración en el área de consultas médicas, pacientes y médicos integrados al consultorio. También ayuda a los pacientes a llevar un control sobre sus citas y tratamientos a seguir.
Tiene dos interfaces principales las cuales dependen del tipo de usuario
●	a) Doctor: por medio de su cuenta podrá dar de alta, modificar y visualizar los pacientes que trata, así como también su expediente médico. 
●	 b) Paciente: por medio de su cuenta podrá consultar sus citas y tratamientos a llevar a cabo.

A.	Plan de proyecto

●	Análisis: Se realizarán diversos estudios y se plantearan las ideas y metodologías para la realización de las mejoras que puedan surgir. 

●	Diseño: El sistema será probado con distintos prototipos para observar cual es el más funcional hasta llegar al sistema final.

●	Programación: La codificación de nuestro programa se realizará a la par que se hacen los prototipos y diseños visuales para tener una mejora visión en lo que vamos a trabajar.

●	Pruebas: Una vez ya concluido la codificación se realizará y documentarán pruebas con distintos usuarios para generar posibles cambios al diseño o funcionalidad del programa y poder generar  así un programa sólido que justifique el porqué de cada  característica  de  nuestro  sistema.

●	Resultados: Con todos los objetivos antes planteados planeamos tener el sistema funcional tal cual fueron las necesidades de la empresa.

Antecedentes
En la actualidad diversos sistemas administrativos no cuentan con la manipulación de accesos debido a que es una manera de mantener asegurada los accesos a las plataformas web.  
Problema
El problema con el que nos encontramos fue que el sistema cuenta con poca flexibilidad al momento de ingresar a la plataforma, es decir los dos tipos de usuarios: doctores y pacientes comúnmente pierden sus accesos al sistema y se encuentran obligados a asistir con los administradores de la página, otro problema es la fácil manipulación para el robo de información cargada en el sistema ya que se trata de una plataforma web. 
Objetivo
El objetivo de nuestra mejora es lograr la encriptación de los accesos al sistema mediante la utilización de métodos externos a los administradores, doctores, pacientes o cualquier otro al que se le relacione así como confidencializar el flujo de datos del sistema web por la red.

Justificación
Menores tiempos de respuesta en la trata de personas con extravío de accesos y confidencialidad de la información de las personas involucradas en el consultorio.
Alcance
El alcance que esperamos con este sistema es beneficiar a los usuarios teniendo toda su información médica en un mismo lugar, agilizar procesos y facilitar la experiencia médica.
Beneficios
Los beneficios son que los usuarios podrán obtener sus accesos en cualquier momento  sin la necesidad de asistir a un administrador y por sobre todo con menores tiempos de respuesta. Además estarán 100% seguros de que la información que el consultorio recopile de su persona serán confidenciales. 

Análisis detallado
Se realizó una investigación con respecto a los tipos de seguridad existentes así como los tipos de criptografía web para lograr la mejor propuesta de mejora. Para la recolección de datos se platicó con diversos usuarios del sistema con el objetivo de conocer sus necesidades.
Análisis del problema
El sistema web no contaba con una recuperación de información hacia el usuario, esto debido a que se creía en un principio que sería factible que el área administrativa de la clínica otorgara esta información a ciertos pacientes y doctores, sin embargo la clínica cada vez es una organización de mayor tamaño y es necesario implementar nuevas medidas.
Análisis de requerimientos

Requerimientos del Usuario	Requerimientos del sistema
✓	Recuperación de datos de acceso.	✓	Cifrado del flujo de datos entre el sistema y la web.
✓	Acceso autenticado al sistema	✓	Confidencialidad de la información.
✓	Encriptación de contraseña	

Mejor propuesta de solución
Nuestra propuesta se basa 100% en la seguridad del sitio, implementaríamos certificado SSL con la finalidad de encriptar las contraseñas de acceso al sistema, además para la recuperación de datos de contraseña utilizaríamos resetearla por medio de una clave que se envía al correo del mismo usuario la cual al dar clic sobre ella le permitirá colocar una nueva contraseña (Solo puede usarse 1 vez esta clave y solo durara 15 minutos, sino expira), otra mejora consistirá en evitar que se pueda alterar el ID en la URL.
Requerimientos de Equipo

●	Para poder hacer uso del sistema se requieren un equipo de cómputo que cuente con cualquier versión navegador.
●	El manejo es principalmente con mouse y teclado.
Para la versión móvil:
●	Navegador 

Modelado y Arquitectura de la Solución
Pudimos observar que no ha habido innovación alguna en el método con el cual las personas del área médica hacen sus registros, inclusive muchos doctores siguen haciendo sus anotaciones en papel y así fue como llegó la idea de INNORBITX.
Se llegó a la conclusión de que este sistema es realmente fácil de implementar y de usar en esta área, ya que se puede manejar con gran facilidad, con el sistema se buscaría tener más rapidez y organización así como un mejor control en cuanto al manejo de la información.
Modelado de Datos/Diseño del Sistema
La parte de nuestro equipo que se encarga de analizar el sistema tendrá que adentrarse en el ámbito médico para poder identificar el problema y las áreas de oportunidad, además de revisar posibles soluciones para el modelado del sistema correcto, que sea lo más preciso posible y evitar la pérdida de tiempos y recurso o de información. Se realizaron diversos cuestionamientos a personas que trabajan en esta área para asegurarnos que estamos haciendo justo lo que ellos necesitan de la manera más compacta posible.
Se propone esta mejora en el sistema para trabajar de una manera más eficiente y organizada.

Entradas y Salidas enfocada a la mejora
La misma interfaz debe dar la posibilidad de recuperar la contraseña de una manera fácil y accesible para el administrador, así como para los usuarios.

Entrada: Correo electrónico 	
Salida: Posibilidad de Cambiar contraseña

Por seguridad deseamos que el correo no se muestre que existe en la base de datos, simplemente se le avisa que en dado caso de existir se le mandara un correo
Análisis de Diseño del Sistema
-	El usuario ingresa a la página y accede mediante su login 
-	Comienza con el manejo y llenado de información en el sistema
-	Se analiza el comportamiento de los datos
-	Se obtienen reportes de la información requerida por el usuario
-	Se puede: ingresar, modificar o editar, eliminar la información que fue previamente ingresada en nuestro sistema.

Descripción del proceso
Los casos de uso en los cuales los usuarios podrán acceder son los siguientes:
-	Administrador
Consulta de información tanto de pacientes como de médicos.
Crear y/o editar Pacientes, Médicos, Recetas y Citas
-	Doctor
Consulta de información de pacientes como de médicos.
Crear y/o editar recetas y tratamientos
-	Cliente
Consulta de información.
Usuarios con su relación en el caso de uso de mejora.
1.	Desarrollador: Debe de mantener un fácil acceso a las bases de datos de todos los accesos de usuarios que involucran al sistema. 
2.	Administrador/Recepción: Esta persona tiene el poder de recuperar la contraseña de sí misma y de los médicos.
3.	Paciente: Esta persona tiene el poder de recuperar la contraseña de sí misma. 

5.	Cuando estés agregando el código de una tarea o requerimiento, es importante que generes un Branch único y cuando esté listo lo agregues al Branch DEVELOP por medio de pull requests.
Nota: Si los términos Branch, sigue, pull request, git, commit y otros no te son familiares, es recomendable revisar los recursos relacionados con git y la documentación de gitlab.
En base a lo que hemos definido en conjunto con los del negocio se ha llevado a cabo la codificación del programa ante la necesidad del mismo. 

6.	Seleccionarás un sistema de integración continua (travesía, drone) y conectarás tu repositorio para ejecutar al menos una prueba (JUnit) de tu código.
7.	Arquitectura de la aplicación, la cual incluye los componentes necesarios, esto es servidor(es) de aplicación, servidor(es) web, repositorios, etc.

ARQUITECTURA DE SOLUCIÓN:
 
Es necesario de lo siguiente, para poder desarrollar el proyecto:
•	Servidor web.
•	Servidor gratuito.
•	La codificación del programa se llevará a cabo mediante el lenguaje de programación PHP

El sistema y sus mejoras fueron desarrolladas en 
●	PHP.
●	Framework de Bootstrap.
●	Base de datos MySQL .
●	Para el email se usó SMTP por medio de API usando SendGrid como proveedor de servicio SMTP.
●	Encriptación se usaron funciones nativas de PHP y algoritmos de encriptación como SHA-2.
