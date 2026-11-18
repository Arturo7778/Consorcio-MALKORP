<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| CONSORCIO MALKORP - Portal corporativo
|--------------------------------------------------------------------------
*/

$divisiones = [
    'ingenieria' => [
        'name' => 'Ingeniería',
        'eyebrow' => 'INFRAESTRUCTURA Y DESARROLLO',
        'headline' => 'Diseñamos soluciones para construir y transformar nuestro entorno.',
        'description' => 'Una división orientada al desarrollo de proyectos de ingeniería civil, infraestructura y consultoría técnica.',
        'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1800&q=85',
        'status' => 'Área en desarrollo',
        'services' => [
            'ingenieria-civil-infraestructura' => [
                'title' => 'Ingeniería civil e infraestructura',
                'category' => 'INFRAESTRUCTURA Y OBRAS CIVILES',
                'short' => 'Desarrollo conceptual y técnico de proyectos de infraestructura y obras civiles.',
                'description' => 'Exploramos soluciones para infraestructura que conectan comunidades, facilitan actividades y responden a las necesidades de cada entorno.',
                'image' => 'https://images.unsplash.com/photo-1511818966892-d7d671e672a2?auto=format&fit=crop&w=1800&q=85',
                'scope' => ['Estudios preliminares y recopilación de información', 'Evaluación de alternativas de solución', 'Desarrollo de documentación técnica', 'Coordinación de especialidades'],
                'tools' => ['AutoCAD', 'Civil 3D', 'Revit', ' herramientas de análisis técnico'],
            ],
            'diseno-analisis-estructural' => [
                'title' => 'Diseño y análisis estructural',
                'category' => 'ESTRUCTURAS Y SEGURIDAD',
                'short' => 'Análisis y concepción de sistemas estructurales para edificaciones y obras.',
                'description' => 'Presentamos conceptos de análisis y diseño estructural considerando el uso previsto, los criterios normativos aplicables y las características del proyecto.',
                'image' => 'https://images.unsplash.com/photo-1590644365607-1c5a5c9b7b8a?auto=format&fit=crop&w=1800&q=85',
                'scope' => ['Definición del sistema estructural', 'Predimensionamiento de elementos', 'Modelamiento y análisis estructural', 'Documentación y detalles de diseño'],
                'tools' => ['ETABS', 'SAP2000', 'SAFE', 'AutoCAD'],
            ],
            'carreteras-pavimentos' => [
                'title' => 'Carreteras y pavimentos',
                'category' => 'TRANSPORTE Y VÍAS',
                'short' => 'Conceptos de trazado vial, diseño geométrico y soluciones de pavimentación.',
                'description' => 'Abordamos proyectos viales desde el análisis del terreno y el trazado hasta la evaluación de alternativas geométricas y de pavimento.',
                'image' => 'https://images.unsplash.com/photo-1545459720-aac8509eb02d?auto=format&fit=crop&w=1800&q=85',
                'scope' => ['Análisis topográfico y del terreno', 'Diseño geométrico vial', 'Evaluación de alternativas de pavimento', 'Planos y documentación técnica'],
                'tools' => ['Civil 3D', 'InfraWorks', 'Global Mapper', 'Google Earth Pro'],
            ],
            'metrados-costos-presupuestos' => [
                'title' => 'Metrados, costos y presupuestos',
                'category' => 'GESTIÓN DE PROYECTOS',
                'short' => 'Cuantificación de partidas y elaboración referencial de presupuestos de obra.',
                'description' => 'Organizamos información técnica para estimar cantidades, costos y recursos asociados a proyectos de construcción.',
                'image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=1800&q=85',
                'scope' => ['Revisión de planos y especificaciones', 'Cuantificación de partidas', 'Análisis de precios unitarios', 'Presupuesto y documentación de soporte'],
                'tools' => ['Excel', 'S10', 'AutoCAD', 'Revit'],
            ],
            'supervision-consultoria-tecnica' => [
                'title' => 'Supervisión y consultoría técnica',
                'category' => 'ASESORÍA Y CONTROL TÉCNICO',
                'short' => 'Acompañamiento técnico y revisión de información durante el desarrollo de proyectos.',
                'description' => 'Una línea de trabajo orientada al seguimiento técnico, la revisión de entregables y el apoyo en la toma de decisiones del proyecto.',
                'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1800&q=85',
                'scope' => ['Revisión de documentación técnica', 'Seguimiento de avances y entregables', 'Identificación de observaciones', 'Informes y recomendaciones técnicas'],
                'tools' => ['Excel', 'AutoCAD', 'MS Project', 'herramientas de gestión documental'],
            ],
        ],
    ],
    'arquitectura' => [
        'name' => 'Arquitectura',
        'eyebrow' => 'DISEÑO Y ESPACIOS',
        'headline' => 'Convertimos ideas en espacios funcionales y bien concebidos.',
        'description' => 'Una división enfocada en el diseño arquitectónico, la planificación y la representación de proyectos.',
        'image' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1800&q=85',
        'status' => 'Área en desarrollo',
        'services' => [
            'diseno-arquitectonico' => ['title'=>'Diseño arquitectónico','category'=>'DISEÑO Y PLANIFICACIÓN','short'=>'Conceptualización de espacios funcionales y coherentes con su contexto.','description'=>'Desarrollo conceptual de propuestas arquitectónicas que integran necesidades, uso, forma y relación con el entorno.','image'=>'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1800&q=85','scope'=>['Análisis de necesidades y programa arquitectónico','Estudios de distribución y funcionalidad','Propuestas conceptuales','Documentación de diseño'],'tools'=>['AutoCAD','Revit','SketchUp',' herramientas de visualización']],
            'planos-documentacion-tecnica' => ['title'=>'Planos y documentación técnica','category'=>'DOCUMENTACIÓN DE PROYECTO','short'=>'Organización y representación gráfica de la información del proyecto.','description'=>'Preparación conceptual de planos y documentación para comunicar las características espaciales y técnicas de una propuesta.','image'=>'https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=1800&q=85','scope'=>['Planos de distribución','Elevaciones y cortes','Detalles arquitectónicos','Coordinación de documentación'],'tools'=>['AutoCAD','Revit',' herramientas CAD']],
            'modelado-bim' => ['title'=>'Modelado BIM','category'=>'MODELADO Y COORDINACIÓN','short'=>'Modelado digital de edificaciones y coordinación de información.','description'=>'Uso de metodologías BIM para representar componentes del proyecto y facilitar la coordinación entre disciplinas.','image'=>'https://images.unsplash.com/photo-1581092921461-eab62e97a780?auto=format&fit=crop&w=1800&q=85','scope'=>['Modelado tridimensional','Organización de información','Coordinación interdisciplinaria','Revisión de interferencias'],'tools'=>['Revit','Navisworks',' herramientas BIM']],
            'visualizacion-renders-3d' => ['title'=>'Visualización y renders 3D','category'=>'REPRESENTACIÓN VISUAL','short'=>'Imágenes y recorridos visuales para comunicar propuestas de diseño.','description'=>'Representación visual de espacios y proyectos mediante imágenes tridimensionales de carácter ilustrativo.','image'=>'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=1800&q=85','scope'=>['Modelado de ambientes','Materiales e iluminación','Imágenes renderizadas','Presentaciones visuales'],'tools'=>['Enscape','Lumion','3ds Max','SketchUp']],
            'diseno-interiores' => ['title'=>'Diseño de espacios interiores','category'=>'INTERIORES Y EXPERIENCIA','short'=>'Propuestas de distribución, materiales y ambientación interior.','description'=>'Diseño conceptual de ambientes interiores que busca equilibrar funcionalidad, comodidad y expresión estética.','image'=>'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=1800&q=85','scope'=>['Distribución de mobiliario','Selección conceptual de acabados','Paletas de materiales','Visualización de ambientes'],'tools'=>['AutoCAD','SketchUp','Revit','Enscape']],
        ],
    ],
    'technology' => [
        'name' => 'Technology',
        'eyebrow' => 'TRANSFORMACIÓN DIGITAL',
        'headline' => 'La tecnología como herramienta para resolver desafíos reales.',
        'description' => 'Una división dedicada al desarrollo de soluciones digitales, software y automatización de procesos.',
        'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1800&q=85',
        'status' => 'Área en desarrollo',
        'services' => [
            'desarrollo-sistemas-web' => ['title'=>'Desarrollo de sistemas y aplicaciones web','category'=>'SOFTWARE Y APLICACIONES','short'=>'Soluciones web para organizar información y facilitar operaciones.','description'=>'Diseño conceptual y desarrollo de aplicaciones web orientadas a necesidades operativas y de gestión.','image'=>'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1800&q=85','scope'=>['Análisis de requerimientos','Diseño de interfaces','Desarrollo de funcionalidades','Pruebas y mejora continua'],'tools'=>['Laravel','PHP','JavaScript','MySQL']],
            'automatizacion-procesos' => ['title'=>'Automatización de procesos','category'=>'EFICIENCIA OPERATIVA','short'=>'Simplificación de tareas repetitivas mediante flujos digitales.','description'=>'Identificación de tareas susceptibles de automatización y diseño de flujos para reducir trabajo manual.','image'=>'https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1800&q=85','scope'=>['Mapeo de procesos','Diseño de flujos','Integración de herramientas','Seguimiento de resultados'],'tools'=>['APIs','Python','Power Automate','Laravel']],
            'inteligencia-artificial' => ['title'=>'Inteligencia artificial aplicada','category'=>'IA E INNOVACIÓN','short'=>'Aplicaciones de IA como apoyo al análisis y a los procesos de trabajo.','description'=>'Exploración de soluciones basadas en inteligencia artificial para asistir tareas, consultar información y apoyar decisiones.','image'=>'https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&w=1800&q=85','scope'=>['Identificación de casos de uso','Prototipos y asistentes','Integración con sistemas','Evaluación y mejora'],'tools'=>['Python','Modelos de lenguaje','APIs','Bases de conocimiento']],
            'integracion-herramientas' => ['title'=>'Integración de herramientas digitales','category'=>'CONECTIVIDAD Y DATOS','short'=>'Conexión de plataformas y sistemas para compartir información.','description'=>'Diseño de integraciones entre herramientas digitales mediante interfaces y mecanismos de intercambio de datos.','image'=>'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=1800&q=85','scope'=>['Revisión de sistemas','Diseño de integración','Intercambio de datos','Validación de funcionamiento'],'tools'=>['REST APIs','JSON','MySQL','servicios web']],
            'consultoria-tecnologica' => ['title'=>'Consultoría tecnológica','category'=>'ESTRATEGIA DIGITAL','short'=>'Orientación para evaluar herramientas y oportunidades de transformación digital.','description'=>'Acompañamiento conceptual para identificar necesidades tecnológicas, priorizar iniciativas y definir posibles soluciones.','image'=>'https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1800&q=85','scope'=>['Diagnóstico de necesidades','Evaluación de alternativas','Hoja de ruta tecnológica','Recomendaciones de implementación'],'tools'=>['Herramientas de análisis','Diagramación','Gestión de proyectos']],
        ],
    ],
    'academy' => [
        'name' => 'Academy',
        'eyebrow' => 'FORMACIÓN Y CONOCIMIENTO',
        'headline' => 'Compartimos conocimiento para impulsar el crecimiento profesional.',
        'description' => 'Una propuesta de formación y capacitación especializada que conectará la experiencia técnica con el aprendizaje práctico.',
        'image' => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=1800&q=85',
        'status' => 'Próximamente',
        'services' => [
            'cursos-talleres' => ['title'=>'Cursos y talleres especializados','category'=>'FORMACIÓN PROFESIONAL','short'=>'Experiencias de aprendizaje centradas en conocimientos aplicados.','description'=>'Propuesta de cursos y talleres temáticos para fortalecer competencias técnicas y profesionales.','image'=>'https://images.unsplash.com/photo-1523580494863-6f3031224c94?auto=format&fit=crop&w=1800&q=85','scope'=>['Diseño de contenidos','Sesiones prácticas','Material de aprendizaje','Evaluación formativa'],'tools'=>['Aula virtual','Material digital','Software especializado']],
            'capacitacion-herramientas' => ['title'=>'Capacitación en herramientas técnicas','category'=>'HERRAMIENTAS Y SOFTWARE','short'=>'Aprendizaje guiado de herramientas utilizadas en entornos profesionales.','description'=>'Programas demostrativos para conocer flujos de trabajo y herramientas técnicas de distintas especialidades.','image'=>'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1800&q=85','scope'=>['Introducción a herramientas','Ejercicios guiados','Casos prácticos','Recursos complementarios'],'tools'=>['AutoCAD','Civil 3D','Revit','Excel']],
            'actualizacion-profesional' => ['title'=>'Programas de actualización profesional','category'=>'ACTUALIZACIÓN','short'=>'Contenidos para acompañar la evolución de conocimientos profesionales.','description'=>'Propuesta de programas de actualización sobre metodologías, herramientas y tendencias de distintas disciplinas.','image'=>'https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1800&q=85','scope'=>['Selección de temas','Planificación de módulos','Sesiones de actualización','Recursos de consulta'],'tools'=>['Plataforma de aprendizaje','Biblioteca digital']],
            'formacion-presencial-virtual' => ['title'=>'Formación presencial y virtual','category'=>'MODALIDADES DE APRENDIZAJE','short'=>'Alternativas de aprendizaje para distintos contextos y necesidades.','description'=>'Diseño de experiencias formativas que pueden desarrollarse en modalidad presencial, virtual o híbrida.','image'=>'https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=1800&q=85','scope'=>['Planificación de sesiones','Recursos para aprendizaje remoto','Actividades presenciales','Acompañamiento formativo'],'tools'=>['Aula virtual','Videoconferencia','Recursos interactivos']],
        ],
    ],
];

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/{division}/{service}', function (string $division, string $service) use (&$divisiones) {
    abort_unless(isset($divisiones[$division]['services'][$service]), 404);

    return view('service', [
        'division' => $divisiones[$division],
        'service' => $divisiones[$division]['services'][$service],
        'divisionSlug' => $division,
        'serviceSlug' => $service,
    ]);
})->whereIn('division', array_keys($divisiones))
  ->name('service.show');

Route::get('/{division}', function (string $division) use (&$divisiones) {
    abort_unless(isset($divisiones[$division]), 404);

    return view('division', [
        'division' => $divisiones[$division],
        'slug' => $division,
    ]);
})->whereIn('division', array_keys($divisiones))
  ->name('division.show');
