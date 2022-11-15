<html>
  <head>
    <meta charset="utf-8" />
    <title>Manual PHP Iniciación</title>
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  </head>
  <body>
    <header>
      <div class="margenes">
        <div class="logo"><img src="favicon.png" width="25%" height="10%"> Manual PHP Iniciación</div>
          <nav>
            <a href="../index.php">Inicio</a>
            <a href="../contacto.php">Contacto</a>
            <a href="#">GitHub</a>
          </nav>
        </div>
      </div>
    </header>
    <body>
    <center>
        </br>
            <!-- Indice ---------------------------------------------------------------------------------------------------------------------------------->
        <div class="idc-box">
            <p class="idc-indice">Indice<p>
            <ul class="idc-lista">
                <li class="A"><a href="#1"><h2>1. Usos de la etiqueta PHP</h3></a></li>
                <li class="B"><a href="#1.1"><h3>1.1. Fragmentos de PHP</h3></a></li>
                <li class="B"><a href="#1.2"><h3>1.2. Delimitadores</h3></a></li>
                <li class="B"><a href="#1.3"><h3>1.3. Diferencias entre echo y print</h3></a></li>
                <li class="B"><a href="#1.4"><h3>1.4. print_r vs var_dump</h3></a></li>
                
                <li class="A"><a href="#2"><h2>2. Diferencia entre echo y print</h3></a></li>
                <li class="B"><a href="#2.1"><h3>2.1. Cadenas</h3></a></li>
                <li class="C"><a href="#2.1.1"><h4>2.1.1. Comillas dentro de cadenas</h4></a></li>
                <li class="C"><a href="#2.1.2"><h4>2.1.2. Diferencias entre comillas simples y dobles</h4></a></li>
                <li class="C"><a href="#2.1.3"><h4>2.1.3. Comillas en código html / css</h4></a></li>
                
                <li class="A"><a href="#3"><h2>3. Caracteres especiales</h2></a></li>
                <li class="B"><a href="#3.1"><h3>3.1. Concatenar Caracteres</h3></a></li>

                <li class="A"><a href="#4"><h2>4. Variables</h2></a></li>
                <li class="B"><a href="#4.1"><h3>4.1. Usos de las variables</h3></a></li>
                <li class="B"><a href="#4.2"><h3>4.2. Concatenar variables y cadenas</h3></a></li>
                <li class="B"><a href="#4.3"><h3>4.3. Variables en cadenas</h3></a></li>
                <li class="C"><a href="#4.3.1"><h4>4.3.1 Variables en cadenas numeros, cadenas, matrices de una dimension</h4></a></li>
                <li class="C"><a href="#4.3.2"><h4>4.3.2 Variables en cadenas matrices de dos o más dimensiones</h4></a></li>
                <li class="C"><a href="#4.3.3"><h4>4.3.3 Nombre de Variables</h4></a></li>
                <li class="C"><a href="#4.3.4"><h4>4.3.4 Unir variables y texto</h4></a></li>
                <li class="B"><a href="#4.4"><h3>4.4 Tipos de variables</h3></a></li>
                <li class="C"><a href="#4.4.1"><h4>4.4.1. Variables lógicas (boolean)</h4></a></li>
                <li class="C"><a href="#4.4.2"><h4>4.4.2. Variables enteras (integer)</h4></a></li>
                <li class="C"><a href="#4.4.3"><h4>4.4.3. Variables decimales (float)</h4></a></li>
                <li class="C"><a href="#4.4.4"><h4>4.4.4. Variables de cademas (string)</h4></a></li>
                <li class="B"><a href="#4.5"><h3>4.5. Variables predefinidas</h3></a></li>

                <li class="A"><a href="#5"><h2>5. Constantes</h2></a></li>
                <li class="B"><a href="#5.1"><h3>5.1. Constantes Predefinidas</h3></a></li>

                <li class="A"><a href="#6"><h2>6. Operaciones aritméticas</h2></a></li>

                <li class="A"><a href="#7"><h2>7. Matrices (arrays)</h2></a></li>
                <li class="B"><a href="#7.1"><h3>7.1. Creación de Matrices</h3></a></li>
                <li class="B"><a href="#7.2"><h3>7.2. Matrices asociativas</h3></a></li>
                <li class="B"><a href="#7.3"><h3>7.3. Matrices multidimensionales</h3></a></li>
                <li class="B"><a href="#7.4"><h3>7.4. Imprimir todos los valores de una matriz (print_r)</h3></a></li>
                <li class="B"><a href="#7.5"><h3>7.5. Añadir elementos a una matriz</h3></a></li>
                <li class="B"><a href="#7.6"><h3>7.6. Unión de Matrices</h3></a></li>

                <li class="A"><a href="#8"><h2>8. Operadores</h3></a></li>
                <li class="B"><a href="#8.1"><h3>8.1. Operadores de incremento y decremento</h3></a></li>
                <li class="B"><a href="#8.2"><h3>8.2. Resto de una división</h3></a></li>
                <li class="B"><a href="#8.3"><h3>8.3. Paréntesis</h3></a></li>
                <li class="B"><a href="#8.4"><h3>8.4. Operadores combinados</h3></a></li>
                <li class="B"><a href="#8.5"><h3>8.5. Redondear un número</h3></a></li>
                <li class="B"><a href="#8.6"><h3>8.6. Potencias</h3></a></li>
                <li class="B"><a href="#8.7"><h3>8.7. Máximo y mínimo</h3></a></li>
                <li class="B"><a href="#8.8"><h3>8.8. Formatear un número</h3></a></li>
                <li class="B"><a href="#8.9"><h3>8.9. Números aleatorios</h3></a></li>
                <li class="B"><a href="#8.10"><h3>8.10. Operaciones lógicas</h3></a></li>
                <li class="C"><a href="#8.10.1"><h4>8.10.1. Comparaciones</h4></a></li>
                <li class="C"><a href="#8.10.2"><h4>8.10.2. Operadores lógicos</h4></a></li>

                <li class="A"><a href="#9"><h2>9. Estructuras de Control</h3></a></li>
                <li class="B"><a href="#9.1"><h3>9.1. Bloques de instrucciones </h3></a></li>
                <li class="B"><a href="#9.2"><h3>9.2. Sentencia condicional if... elseif... else... </h3></a></li>
                <li class="B"><a href="#9.3"><h3>9.3. Sentencia condicional switch</h3></a></li>
                <li class="B"><a href="#9.4"><h3>9.4. Bucle for</h3></a></li>
                <li class="B"><a href="#9.5"><h3>9.5. Contadores</h3></a></li>
                <li class="B"><a href="#9.6"><h3>9.6. Acumuladores</h3></a></li>
                <li class="B"><a href="#9.7"><h3>9.7. Bucles anidados</h3></a></li>
                <li class="B"><a href="#9.8"><h3>9.8. Bucle while</h3></a></li>
                <li class="B"><a href="#9.9"><h3>9.9. Bucle foreach</h3></a></li>
            </ul>
        </div>
            </br>
            </br>
        <span class="top icon-arrow-up2"></span>

            <!-------------------------------------------------------------------------------------------------------------------------------------------->
            <!-- #1 -->
            <h2>1. Usos de la etiqueta PHP<a name="1"></h2>
            <h3>1.1 Fragmentos de PHP<a name="1.1"></h3>
            <?php
              echo "La etiqueta PHP se abre así "; 
              echo htmlspecialchars("<?php");
              echo " y se cierra de esta forma ";
              echo htmlspecialchars("?>");
              echo "<br>Los fragmentos de PHP no pueden anidarse, es decir, no puede haber un fragmento dentro de otro";
            ?>
            </br>
                <img src="1.png">
            </br>
            <table><td>
                    <?php
                    print "<p>Hola</p>";
                    ?>
            </td></table>
            </br>
            </br>
                <?php
                    print "Una variable se puede definir dentro o fuera del php";
                    print "</br>En este caso esta dentro del php"
                ?>
            </br>
                <img src="2.png">
            </br>
            <table><td>
                <?php
                    $saludo = "Hola"; // Se define una variable
                    print "<p>$saludo</p>"; // Se escribe el valor de la variable
                ?>
            </td></table>
            </br>
            </br>
                <?php
                    print "Los programas PHP tienen que tener una etiqueta de inicio y otra de cierre";
                    print "</br>Lo siguiente NO es correcto" 
                ?>
            </br>
                <img src="3.png">
            </br>
            <table><td>
                <a>Parse error: syntax error, unexpected token "<"</a>
            </td></table>
            </br>
            </br>
                <?php
                    print "Cuando estas en una web se va leyendo el PHP y el HTML, si hay PHP se ejecuta, pero";
                    print "</br>el navegador lo que recibe unicamente es un HTML";
                    print "</br>Aquí abajo un ejemplo de un fragmento de HTML y otro de PHP con HTML"
                ?>
            </br>
                <img src="4.png">
            </br>
            <table><td>
                <?php
                    print "<p>Hola</p>";
                    print "<p>¿Cómo estás?</p>";
                    print "<p>Adios</p>";
                ?>
            </td></table>
            </br>
            </br>
            </br>
            <h3>1.2. Delimitadores<a name="1.2"></h3>

                <?php
                    print "Para los delimitadores no se desaconseja utilizar los delemitadores abiertos ";
                    print htmlspecialchars("<? ... ?>");
                    print "</br>Se deben utilizar los delemitadores ";
                    print htmlspecialchars("<?php ... ?>");
                    print "Ademas de que la directiva short_open_tag por defecto tiene el valor Off </br> y produciria un error al utilizar los delimitadores abiertos"
                ?>
            </br>
                <img src="5.png">
            </br>
            <table><td>
                <?
                   print "<p>Hola</p>";
                ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
                <?php
                    print "El delimitador ";
                    print htmlspecialchars("<?= ... ?>");
                    print " es una abreviatura del ";
                    print htmlspecialchars("<?php echo ... ?>")
                ?>
            </br>
                <img src="6.png">
            </br>
            <table><td>
                <?php
                    $saludo = "Hola";
                    $despedida = "Adios";
                ?>
                <p><?= $saludo ?></p>
                <p><?= $despedida ?></p>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h3>1.3. Diferencias entre echo y print<a name="1.3"></h3>
                <?php
                    print "Ambas funciones nos permiten mostrar cadenas de textos y ambas funciones no llevan </br> paréntesis al momento de llamarlas. Esta es la forma y tipo de cada uno:";
                    print "</br>print imprime una cadena, echo puede imprimir más de una separadas por coma";
                ?>
            </br>
                <img src="7.png">
            </br>
            <table><td>
                <?php
                    print "<p>Hola</p>";
                    echo "<p>Hola</p>", "<p>Hola de nuevo</p>";
                ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h3>1.4. print_r vs var_dump<a name="1.4"></h3>
                <?php
                    print "Estas dos funciones imprimen los detalles de una variable, incluyendo su valor, en un formato legible por el humano.";
                    print "</br>Si el valor de la variable es una cadena de texto, var_dump imprime la cadena entre dobles comillas, print_r no.";
                    print "</br>Sin embargo print_r puede devolver el resultado en lugar de imprimirlo si se proporciona el segundo parámetro como true"
                ?>
            </br>
                <img src="8.1.png">
            </br>
            <table><td>
                <?php
                $valores = [5, 0.0, "Hola", false, ""];
                var_dump($valores);
                ?>
            </td></table>
            </br>
                <img src="8.2.png">
            </br>
            <table><td>
                <?php
                    $valores = [5, 0.0, "Hola", false, ""];
                    print_r($valores);
                ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h3>1.5. Comentarios en páginas PHP<a name="1.5"></h3>
                <?php
                    print "En un fragmento PHP se pueden comentar líneas de código utilizando:</br>";
                    print "// para comentar el resto de la línea (como en C++)</br>
                           # para comentar el resto de la línea (como en la shell de Unix o en Perl)</br>
                           /* */ para delimitar varias líneas (como en C)";
                    print "</br>Aqui abajo un ejemplo"
                ?>
            </br>
                <img src="9.png">
            </br>
            <table><td>
                <p><strong>
                <?php
                    // La instrucción print escribe texto en la página web
                    print "Hola"; // El comentario se puede escribir al final de la línea
                ?>
                </strong></p>
            </td></table>
            </br>
                <?php
                    print "Si se quieren escribir comentarios en los fragmentos HTML, </br> hay que utilizar la etiqueta de
                    comentarios de HTML ";
                    print htmlspecialchars("<!-- .... --> ");
                ?>
            </br>
                <img src="10.png">
            </br>
            <table><td>
                <p>
                <?php
                print "Hola";
                ?>
                </p>
                <!-- El texto anterior ha sido generado por PHP -->
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h2>2. Tipos de datos<a name="2"></h2>
            <h3>2.1. Cadenas<a name="2.1"></h3>
                <?php
                    print "En PHP, las cadenas de texto se delimitan por comillas (dobles o simples)";
                    print "</br>IMPORTANTE!! No se pueden intercalar una simple y otra doble, eso dará error"
                ?>
            </br>
                <img src="11.png">
            </br>
            <table><td>
                <?php
                print "<p>Esto es una cadena.</p>";
                ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h4>2.1.1. Comillas dentro de cadenas<a name="2.1.1"></h4>
                <?php
                    print "Si una cadena está delimitada por comillas dobles, en su interior puede haber cualquier </br> número de comillas simples, y viceversa."
                ?>
            </br>
                <img src="12.png">
            </br>
            <table><td>
                    <?php
                    print "<p>Hola</p>";
                    ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h4>2.1.2. Diferencias entre comillas simples y dobles<a name="2.1.2"></h4>
                <?php
                    print "Dentro de cadenas delimitadas con comillas simples, mientras que sí que lo hace </br> (pero no siempre) si se utilizan comillas dobles, como se ve en el siguiente ejemplo"
                ?>
            </br>
                <img src="13.png">
            </br>
            </br>
            </br>
            </br>
            </br>
            <h4>2.1.3. Comillas en código html / css<a name="2.1.3"></h4>
                <?php
                    print "En el código HTML generado con PHP también se pueden escribir comillas simples o </br> dobles. Los dos ejemplos siguientes producen código html válido:"
                ?>
            </br>
                <img src="14.png">
            </br>
            </br>
            </br>
            </br>
            </br>
            <h2>3. Caracteres especiales<a name="3"></h2>
                <?php
                    print "Algunos caracteres necesitan escribirse dentro de las cadenas de una forma especial. ";
                    print "</br>los nombres de variables empiezan por el carácter dólar ($). Cuando en una
                    cadena aparece </br> una palabra que empieza por el carácter $, PHP entiende que esa
                    palabra hace referencia a una variable. </br>Pero si a esa variable no se le ha dado valor
                    anteriormente, se producirá un aviso."
                ?>
            </br>
                <img src="15.png">
            </br>
            <table><td>
            <?php
            print "<p>Los nombres de variables empiezan por $. Por ejemplo
            $edad.</p>";
            ?>
            </td></table>
            </br>
            </br>
                <?php
                    print "Para poder escribir el carácter $ se tiene que anteponer </br>el carácter contrabarra (\). El
                    ejemplo anterior quedaría por tanto";
                ?>
            </br>
                <img src="16.png">
            </br>
            <table><td>
            <?php
            print "<p>Los nombres de variables empiezan por $. Por ejemplo
            \$edad.</p>";
            ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h3>3.1. Concatenar Caracteres<a name="3.1"></h3>
                <?php
                    print "Se utiliza el operador . (punto) permite concatenar dos o más cadenas";
                    print "</br>Aquí abajo el ejemplo"
                ?>
            </br>
                <img src="17.png">
            </br>
            <table><td>
            <?php
            print "<p>Pasa" . "tiempos</p>";
            ?>
            </td></table>
            </br>
            </br>
                <?php
                    print "El operador de asignación con concatenación (.=) permite concatenar</br> una cadena a otra y
                    asignarla a esta:"
                ?>
            </br>
                <img src="18.png">
            </br>
            <table><td>
            <?php
            $cadena = "Pasa";
            print "<p>$cadena</p>";;
            $cadena .= "tiempos";
            print "<p>$cadena</p>";;
            ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h2>4. Variables<a name="4"></h2>
                <?php
                    print "En los lenguajes de programación, una variable es un elemento que permite almacenar</br>
                    información. Las variables se identifican por su nombre.</br> Para facilitar la comprensión del
                    programa";
                ?>
            </br>
                <img src="19.png">
            </br>
            </br>
            </br>
            </br>
            </br>
            <h3>4.1. Usos de las variables<a name="4.1"></h3>
                <?php
                    print "Para guardar un valor en una variable se utiliza el operador de asignación (=) escribiendo a la</br>
                    izquierda únicamente el nombre de la variable y a la derecha el valor que queremos guardar.</br>
                    Si queremos guardar un número, no hace falta poner comillas, pero si queremos guardar una</br>
                    cadena de texto hay que poner comillas (dobles o simples)."
                ?>
            </br>
                <img src="20.png">
            </br>
            </br>
                <?php
                    print "A lo largo de un programa una variable puede guardar diferentes valores."
                ?>
            </br>
                <img src="21.png">
            </br>
            <table><td>
                <?php
                $edad = 15;
                print "<p>$edad</p>";
                $edad = 20;
                print "<p>$edad</p>";
                ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h3>4.2. Concatenar variables y cadenas<a name="4.2"></h3>
                <?php
                    print "El operador . (punto) permite concatenar dos o más cadenas o variables."
                ?>
            </br>
                <img src="22.png">
            </br>
            <table><td>
            <?php
            $cadena1 = "Corre";
            $cadena2 = "ve";
            $cadena3 = "idile";
            $cadena4 = $cadena1 . $cadena2 . $cadena3;
            print "<p>$cadena4</p>";
            ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h3>4.3. Variables en cadenas<a name="4.3"></h3>
                <?php
                    print "La forma de insertar variables dentro de cadenas depende del tipo de variable utilizado."
                ?>
            </br>
            </br>
            <h4>4.3.1 Variables en cadenas numeros, cadenas, matrices de una dimension<a name="4.3.1"></h3>
                <?php
                    print "En este caso las variables se puede insertar directamente"
                ?>
            </br>
                <img src="23.png">
            </br>
            <table><td>
            <?php
            $numero = 5000;
            $texto = "cinco mil";
            $seEscribe = ["separado", "junto"];
            print "<p>El número $numero se escribe $seEscribe[0]: $texto</p>";
            ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h4>4.3.2 Variables en cadenas matrices de dos o más dimensiones<a name="4.3.2"></h4>
                <?php
                    print "En el caso de matrices de dos o más dimensiones, las variables no se puede insertar directamente";
                    print "</br>Como";
                    echo htmlspecialchars("  $ saludos[0]"); 
                    print "es una matriz de una dimensión, no puede escribir ningún valor y devuelve simplemente";
                    echo htmlspecialchars(" Array");
                    print ". A continuación, PHP añade el [1] que quedaba y se obtiene la cadena";
                    echo htmlspecialchars(" Array[1]");
                    print "</br>Una solución a este problema es sacar la matriz de la cadena"
                ?>
            </br>
                <img src="24.png">
            </br>
            <table><td>
            <?php
            $nombre = "Don Pepito";
            $saludos = [["Hello", "Hola"], ["Goodbye", "Adios"]];
            print "<p>¡" . $saludos[0][1] . ", $nombre! ¿Cómo está usted?</p>";
            ?> 
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h4>4.3.3 Nombre de Variables<a name="4.3.3"></h4>
            <?php
                    print "Si se quiere escribir el nombre de una variable, es decir, para que PHP no sustituya la</br>
                    variable por su valor, hay que escribir una contrabarra (\) antes de la variable"
                ?>
            </br>
                <img src="26.png">
            </br>
            <table><td>
            <?php
            $x = 3;
            print "<p>La variable \$x vale $x</p>";
            ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h4>4.3.4 Unir variables y texto<a name="4.3.4"></h4>
            <?php
                    print "En html/css a veces es necesario juntar números y caracteres,</br> como en el ejemplo siguiente
                    en el que se establece el tamaño del párrafo en 30px:"
                ?>
            </br>
                <img src="27.png">
            </br>
            <table><td>
            <?php
            print "<p style=\"font-size: 30px\">Texto grande</p>";
            ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h3>4.4. Tipos de Variables<a name="4.4"></h4>
            </br>
            <h4>4.4.1. Variables lógicas (boolean)<a name="4.4.1"></h4>
            <?php
                    print "Las variables de tipo lógico sólo pueden tener el valor </br>true (verdadero) o false (falso). Se
                    suelen utilizar en las estructuras de control."
                ?>
            </br>
                <img src="28.png">
            </br>
            <table><td>
            <?php
            $autorizado = true;
            if ($autorizado == true) {
            print "<p>Usted está autorizado.</p>";
            }
            if ($autorizado == false) {
            print "<p>Usted no está autorizado.</p>";
            }
            ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h4>4.4.2. Variables enteras (integer)<a name="4.4.2"></h4>
            <?php
                    print "Las variables de tipo entero pueden guardar números enteros (positivos o negativos)"
                ?>
            </br>
                <img src="29.png">
            </br>
            <table><td>
            <?php
            $lado = 14;
            $area = $lado * $lado;
            print "<p>Un cuadrado de lado $lado cm tiene un área de $area
            cm<sup>2</sup>.</p>";
            ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h4>4.4.3. Variables decimales (float)<a name="4.4.3"></h4>
            <?php
                    print "Las variables de tipo decimal (float) pueden guardar números decimales</br> (positivos o
                    negativos). Como en las calculadoras, el separador de la parte entera y </br>la parte decimal es el
                    punto (.), no la coma (,)."
                ?>
            </br>
                <img src="30.png">
            </br>
            <table><td>
            <?php
            $lado = 14.5;
            $area = $lado * $lado;
            print "<p>Un cuadrado de lado $lado cm tiene un área de $area
            cm<sup>2</sup>.</p>";
            ?> 
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h4>4.4.4. Variables de cademas (string)<a name="4.4.4"></h4>
            <?php
                    print "Las variables de tipo cadena pueden guardar caracteres.</br>
                    PHP no impone ningún límite al tamaño de las cadenas. Las cadenas pueden ser todo lo</br>
                    largas que permita la memoria del servidor"
                ?>
            </br>
                <img src="31.png">
            </br>
            <table><td>
            <?php
            $sakudi = "Hola, Don Pepito";;
            print "<p>$saludo</p>";
            $saludo[0] = "M";
            print "<p>$saludo</p>";
            $saludo[14] = "n";
            print "<p>$saludo</p>";
            ?>   
            </td></table>
            </br>
            </br>
            </br>
            </br>
            </br>
            <h3>4.5. Variables predefinidas<a name="4.5"></h3>
                <?php
                    print "PHP genera automáticamente una serie de variables con diversa información sobre el
                    cliente y el servidor.</br></br>";
                    print "<b>$ _REQUEST</b> es una matriz asociativa que contiene </br>los datos enviados por los formularios y
                    las cookies guardadas en el ordenador del cliente.</br></br>";
                    print "<b>$ _SERVER</b> es una matriz asociativa que contiene información </br>sobre cabeceras, rutas y
                    ubicaciones de scripts suministrada por el</br> servidor (pero hay que tener en cuenta que no
                    todos los servidores suministran todos los datos).</br></br>";
                    print "<b>$ _SERVER[PHP_SELF]</b> contiene la dirección de la página </br>(relativo a la raíz, es decir, sin el
                    nombre del servidor)."
                ?>
            </br>
            </br>
            </br>
            </br>
            <h2>5. Constantes<a name="5"></h2>
                <?php
                    print "Las constantes son elementos de PHP que guardan un valor fijo que no se</br> puede modificar
                    a lo largo del programa. Las constantes pueden ser </br>definidas por el programa o estar
                    predefinidas por el propio PHP o por algún módulo."
                ?>
            </br>
                <img src="39.png">
            </br>
            <table><td>
            <?php
            define("PI", 3.14);
            print "<p>El valor de pi es " . PI . "</p>";
            ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h3>5.1. Constantes Predefinidas<a name="5.1"></h3>
                <?php
                    print "Tanto PHP como los módulos cargados definen automáticamente una serie de constantes
                    predefinidas.";
                    print "</br></br><b>INF</b></br>
                    La constante INF representa el infinito, es decir, cualquier </br>número demasiado grande
                    (positivo o negativo) para poderse guardar en una variable decimal.";
                    print "</br></br><b>PHP_INT_MAX</b></br>
                    PHP_INT_MAX es el valor del mayor entero que se puede guardar en una variable de tipo
                    entero.
                    ";
                    print "</br></br><b>PHP_INT_SIZE</b></br>
                    PHP_INT_SIZE es el tamaño en bytes de las variables de </br>tipo entero, que depende del
                    ordenador, del sistema operativo y de la versión de PHP.</br> En sistemas de 32 bits suele ser 4
                    bytes y en </br>sistema de 64 bits suele ser 8 bytes.
                    ";
                ?>
            </br>
            </br>
            </br>
            </br>
            <h2>6. Operaciones aritméticas<a name="6"></h2>

                <?php
                    print "Si se quiere mostrar el resultado de operaciones matemáticas, es necesario efectuar las</br>
                    operaciones fuera de las cadenas. En algunos casos no es necesario escribir las</br>
                    operaciones entre paréntesis, pero se recomienda escribirlas";
                ?>
            </br>
                <img src="25.png">
            </br>
            <table><td>
            <?php
            $x = 3;
            $y = 4;
            print "<p>Suma: $x + $y = " . ($x + $y) . "</p>";
            print "<p>Multiplicación: $x x $y = " . ($x * $y) . "</p>";
            ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h2>7. Matrices (arrays)<a name="7"></h2>
                <?php
                    print "Una matriz es un tipo de variable que permite almacenar </br>simultáneamente varios datos
                           diferentes, a los que se accede mediante un índice, numérico o de texto"
                ?>
            </br>
            </br>
                <?php
                    print"En PHP, una matriz es un tipo de variable muy flexible, ya que podemos añadir,</br> modificar,
                    eliminar o reordenar los elementos de forma individual. </br>Además los elementos pueden ser
                    de tipos de datos diferentes."
                ?>
            </br>
            </br>
            <h3>7.1. Creación de Matrices<a name="7.1"></h3>
                <?php
                    print "En la notación compacta, las matrices se crean empleando corchetes ([]).</br> Separandose por comas"
                ?>
            </br>
                <img src="32.png">
            </br>
            </br>
                <?php
                    print "Para hacer referencia a los valores individuales de la matriz, se deben utilizar índices,</br> que se
                    escriben entre corchetes ([ ]). Si al crear la matriz no se han indicado otros valores de</br>
                    índices, el primer término tiene el índice [0], el segundo tiene el índice [1], etc.:"
                ?>
            </br>
                <img src="33.png">
            </br>
            <table><td>
            <?php
            $nombres = ["Ana", "Antonio", "Carmen"];
            print "<p>$nombres[1].</p>";
            print "<p>$nombres[0].</p>";
            ?>
            </td></table>
            </br>
            </br>
            <h3>7.2. Matrices asociativas<a name="7.2"></h3>
                <?php
                    print "Las matrices de PHP son matrices asociativas, es decir, que los índices no tienen por qué</br>
                    ser correlativos, ni siquiera tienen por qué ser números.
                    Al crear matrices asociativas, debemos indicar</br> el valor de los índices, utilizando la notación"
                ?>
            </br>
                <img src="34.png">
            </br>
            <table><td>
            <?php
            $cuadrados = [3 => 9, 5 => 25, 10 => 100];
            print "<p>El cuadrado de 3 es $cuadrados[3]";
            ?>
            </td></table>
            </br>
            </br>
            </br>
            <h3>7.3. Matrices multidimensionales<a name="7.3"></h3>
                <?php
                    print "Las matrices pueden ser multidimensionales, es decir,</br> matrices cuyos elementos son a su
                    vez matrices. Para referirse a los elementos</br> concretos, se necesitan utilizar varios índices
                    </br>(tantos como dimensiones -niveles de anidamiento- tenga la matriz).
                    "
                ?>
            </br>
                <img src="35.png">
            </br>
            </br>
            </br>
            </br>
            </br>
            <h3>7.4. Imprimir todos los valores de una matriz (print_r)<a name="7.4"></h3>
                <?php
                    print "La instrucción print permite imprimir valores individuales de una matriz, pero no matrices
                    completas.";
                    print "</br>La función print_r(";
                    echo htmlspecialchars("     $ variable [, ");
                    echo htmlspecialchars("     $ devolver]) ");
                    print " permite imprimir todos los valores de una matriz de forma estructurada.</br> En general, print_r() imprime cualquier variable compuesta de forma legible"
                ?>
            </br>
                <img src="36.png">
            </br>
            <table><td>
            <?php
            $datos["nombre"] = "Santiago";
            $datos["apellidos"] = "Ramón y Cajal";
            print_r($datos);
            ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h3>7.5. Añadir elementos a una matriz<a name="7.5"></h3>
                <?php
                    print "En la notación compacta, se pueden añadir elementos a una matriz indicando</br> o no el índice
                    del nuevo elemento</br>Si no se indica el índice, el nuevo elemento toma como índice </br>el siguiente al mayor
                    de los existentes (o el índice 0 si no había ningún valor numérico)"
                ?>
            </br>
                <img src="37.png">
            </br>
            <table><td>
            <?php
            $nombres = ["Alba", "Bernardo"];
            $nombres[] = "Carlos";
            print "<p>$nombres[1]</p>";
            print "<p>$nombres[2]</p>";
            ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h3>7.6. Unión de Matrices<a name="7.6"></h3>
                <?php
                    print "Los operadores + (suma) += (suma combinada) realizan la unión </br>de dos matrices. La unión
                    de dos matrices contiene todos los elementos </br>de la primera matriz y únicamente los
                    elementos de la segunda </br>matriz cuyo índice no se encuentra en la primera matriz."
                ?>
            </br>
                <img src="38.png">
            </br>
            <table><td>
            <?php
            $nombres_1 = [0 => "Alba", 2 => "Bernardo"];
            $nombres_2 = [1 => "Antonio", 3 => "Ana", 5 => "Carlos"];
            print "<pre>" . print_r($nombres_1 + $nombres_2); 
            print "</pre>";
            print "<pre>" . 
            print_r($nombres_2 + $nombres_1);  
            print "</pre>";
            ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h2>8. Operadores<a name="8"></h2>
                <?php
                    print "Los números decimales se escriben con punto (.), no con coma (,)";
                    print "</br>Los operadores aritméticos básicos son los siguientes:"
                ?>
            </br>
                <img src="40.png">
            </br>
            </br>
            </br>
            <h3>8.1. Operadores de incremento y decremento<a name="8.1"></h2>
                <?php
                    print "Los operadores de incremento y decremento son los siguientes"
                ?>
            </br>
                <img src="41.png">
            </br>
            </br>
            </br>
            <h3>8.2. Resto de una división<a name="8.2"></h2>
                <?php
                    print "El operador % calcula el resto de una división entera";
                ?>
            </br>
                <img src="42.png">
            </br>
            <table><td>
            <?php
            $valor = "z";
            print "<p>El resto de 17 dividido entre 3 es " . 17 % 3 . "</p>";
            ?>
            </table></td>
            </td>
            </br>
            </br>
            </br>
            </br>
            <h3>8.3. Paréntesis<a name="8.3"></h2>
                <?php
                    print "Los operadores aritméticos tienen el mismo orden de precedencia </br>que en Matemáticas.
                    Concretamente, el orden de precedencia de los </br>operadores comentados anteriormente es,
                    de mayor a menor"
                ?>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            <h3>8.4. Operadores combinados<a name="8.4"></h2>
                <?php
                    print "Los operadores combinados permiten simplificar algunas expresiones de asignación:"
                ?>
            </br>
                <img src="43.png">
            </br>
            </br>
            </br>
            </br>
            </br>
            <h3>8.5. Redondear un número<a name="8.5"></h2>
                <?php
                    print "La función round(x) redondea el número x al entero más próximo.";
                    print "</br></br>La función round() se puede utilizar para verificar si</br> un número es un número entero
                    (positivo o negativo), </br>comprobando si un número coincide con su valor redondeado."
                ?>
            </br>
                <img src="44.png">
            </br>
            <table><td>
            <?php
            $numero = 4.3;
            if ($numero == round($numero)) {
            print "<p>$numero es un número entero</p>";
            } else {
            print "<p>$numero no es un número entero</p>";
            }
            $numero = -6;
            if ($numero == round($numero)) {
            print "<p>$numero es un número entero</p>";
            } else {
            print "<p>$numero no es un número entero</p>";
            }
            ?>
            </td></table>
            <?php
                print "</br>La función round(x,n) redondea x con n decimales (si n es negativo redondea a decenas,
                centenas, etc.).";
                print "</br>La función floor(x) redondea el número x al entero inferior (es decir, devuelve la parte
                entera).";
                print "</br>La función ceil(x) redondea el número x al entero superior"
            ?>
            </br>
            </br>
            </br>
            </br>
            <h3>8.6. Potencias<a name="8.6"></h2>
                <?php
                    print "La función pow(x, y) calcula x elevado a y.</br>
                    En PHP 5.6 se introdujo el operador **, equivalente a la función pow().
                    "
                ?>
            </br>
                <img src="45.png">
            </br>
            <table><td>
            <?php
            print "<p>2<sup>3</sup> = " . pow(2, 3) . "</p>";
            ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h3>8.7. Máximo y mínimo<a name="8.7"></h2>
                <?php
                    print "Las funciones max() y min() devuelven el máximo y el mínimo,</br> respectivamente, de una lista
                    o matriz de valores.
                    "
                ?>
            </br>
                <img src="46.png">
            </br>
            <table><td>
            <?php
            print "<p>El mínimo es " . min(20, 40, 25.1, 14.7) . "</p>";
            ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h3>8.8. Formatear un número<a name="8.8"></h2>
                <?php
                    print "Para escribir un número con los símbolos de separación de decimales y de miles españoles,</br>
                    es decir, una coma (,) para separar la parte entera de la decimal y un punto (.) para separar</br>
                    las cifras de la parte entera en grupos de tres, se puede utilizar la función number_format()."
                ?>
            </br>
                <img src="47.png">
            </br>
            <table><td>
            <?php
            print "<p>" . number_format(1300, 5) . "</p>";
            ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h3>8.9. Números aleatorios<a name="8.9"></h2>
                <?php
                    print "Para obtener un número entero aleatorio entre dos </br>valores determinados, se pueden utilizar
                    la función rand() o la función mt_rand(). </br>Ambas funciones requieren dos argumentos:</br>
                    </br>● El primer argumento es el valor mínimo que se quiere obtener
                    </br>● El segundo argumento es el valor máximo que se quiere obtener.
                    "
                ?>
            </br>
                <img src="48.png">
            </br>
            <table><td>
            <?php
            print "<p>" . mt_rand(1, 6) . "</p>";
            print "<p>" . mt_rand(1, 6) . "</p>";
            print "<p>" . mt_rand(1, 6) . "</p>";
            ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h3>8.10. Operaciones lógicas<a name="8.10"></h2>
                <?php
                    print "Las operaciones lógicas son expresiones matemáticas cuyo resultado es un valor booleano</br>
                    (verdadero o falso, en PHP, true o false). Estas expresiones se utilizan principalmente en las</br>
                    estructuras de control."
                ?>
            </br>
            </br>
            </br>
            </br>
            </br>
            <h4>8.10.1. Comparaciones<a name="8.10.1"></h4>
                <?php
                    print "Las comparaciones permiten comparar variables o expresiones entre </br>sí o con valores
                    concretos. El resultado de la comparación es un valor booleano (true o false).
                    "
                ?>
            </br>
                <img src="49.png"></br>
                <img src="50.png">
            </br>
            </br>
            <p>Aqui un ejemplo de todos los que hay</p>
            </br>
                <img src="51.png">
            </br>
            <table><td>
            <?php
            $nombre = "Pepe";
            if ($nombre == "Juan") {
            print "<p>Tu nombre es Juan.</p>";
            }
            if ($nombre != "Juan") {
            print "<p>Tu nombre no es Juan.</p>";
            }
            ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h4>8.10.2. Operadores lógicos<a name="8.10.2"></h4>
                <?php
                    print "Los operadores lógicos permiten combinar expresiones simples en expresiones más
                    complejas"
                ?>
            </br>
                <img src="52.png">
            </br>
            </br>
            </br>
            </br>
            </br>
            <h2>9. Estructuras de Control<a name="9"></h2>
                <?php
                    print "Un programa PHP se ejecuta en principio de forma secuencial,</br> desde la primera instrucción
                    hasta la última y de una en una. </br>Las estructuras de control permiten modificar este flujo,"
                ?>
            </br>
            </br>
            <h3>9.1. Bloques de instrucciones <a name="9.1"></h3>
            </br>
            </br>
                <?php
                    print "Para indicar a PHP que varias instrucciones forman un bloque de </br>instrucciones que se
                    ejecutarán secuencialmente, </br>utilizando las llaves { y }"
                ?>
            </br>
                <img src="53.png">
            </br>
            <table><td>
            <?php
            {
            print "<p>Hola</p>";
            print "<p>Adiós</p>";
            }
            ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h3>9.2. Sentencia condicional if... elseif... else... <a name="9.2"></h3>
                <?php
                    print "Estas sentencias permiten condicionar la ejecución</br> de un bloque de
                    sentencias </br>al cumplimiento de una condición";
                    print "</br></br></br><b>if...</b></br>La condición se evalúa siempre.</br>
                    </br>○ Si el resultado es true se ejecuta el bloque de sentencias
                    </br>○ Si el resultado es false no se ejecuta el bloque de sentencias."
                ?>
            </br>
                <img src="54.png">
            </br>
                <img src="55.png">
            </br>
            </br>
            </br>
                <?php
                    print "</br></br></br><b>if... else...</b></br>La condición se evalúa siempre.</br>
                    </br>● La condición se evalúa siempre.
                    </br>    ○ Si el resultado es true se ejecuta solamente el bloque de sentencias 1
                    </br>    ○ Si el resultado es false se ejecuta solamente el bloque de sentencias 2."
                ?>
            </br>
                <img src="56.png">
            </br>
                <img src="57.png">
            </br>
            </br>
            </br>
                <?php
                    print "</br></br></br><b>if... elseif... else...</b></br>La condición se evalúa siempre.</br>
                    </br>● La condición 1 se evalúa siempre.
                    </br>○ Si el resultado es true se ejecuta solamente el bloque_de_sentencias_1
                    </br>○ Si el resultado es false se evalúa la condición 2.
                    </br>■ Si el resultado es true se ejecuta solamente el bloque_de_sentencias_2
                    </br>■ Si el resultado es false se ejecuta solamente el bloque_de_sentencias_3"
                ?>
            </br>
                <img src="58.png">
            </br>
                <img src="59.png">
            </br>
            </br>
            </br>
            </br>
            <h3>9.3. Sentencia condicional switch<a name="9.3"></h3>
            <?php
                    print "La sentencia switch es equivalente a una construcción if ... elseif ... </br>en las que las
                    expresiones son comparaciones de igualdad de la </br>misma condición con valores distintos."
                ?>
            </br>
                <img src="60.png">
            </br>
            </br>
            </br>
            </br>
            </br>
            <h3>9.4. Bucle for<a name="9.4"></h3>
            <?php
                    print "La ejecución de esta estructura de control es la siguiente:</br>
                    </br>● Se establece el valor inicial de la variable de control definida en la asignación inicial.
                    </br>● Evalúa la condición de continuación:
                    </br>○ Si el resultado es true se ejecuta el bloque de sentencias,</br> se efectúa el
                    cambio de la variable de control y se evalúa</br> nuevamente la condición de
                    continuación;
                    </br>○ Si el resultado es false el bucle se termina.
                    ";
                    print "La sintaxis del bucle for es la siguiente:";
                ?>
            </br>
                <img src="61.png">
            </br>
            </br>
            </br>
            </br>
            </br>
            <h3>9.5. Contadores<a name="9.5"></h3>
            <?php
                    print "Se entiende por contador una variable que lleva la cuenta del número </br>de veces que se ha
                    cumplido una condición."
                ?>
            </br>
                <img src="62.png">
            </br>
            <table><td>
                <?php
                print "<p>Comienzo</p>";
                $cuenta = 0;
                for ($i = 1; $i < 6; $i++ ) {
                if ($i % 2 == 0) {
                $cuenta += 1;
                }
                }
                print "<p>Desde 1 hasta 5 hay $cuenta múltiplos de 2.</p>";
                print "<p>Final</p>";
                ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h3>9.6. Acumuladores<a name="9.6"></h3>
            <?php
                    print "Se entiende por acumulador una variable que acumula </br>el resultado de una operación."
                ?>
            </br>
                <img src="63.png">
            </br>
            <table><td>
                <?php
                print "<p>Comienzo</p>";
                $suma = 0;
                for ($i = 1; $i < 6; $i++ ) {
                $suma += $i;
                }
                print "<p>La suma de los números de 1 a 5 es $suma.</p>";
                print "<p>Final</p>";
                ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            <h3>9.7. Bucles anidados<a name="9.7"></h3>
            <?php
                    print "Un bucle anidado es un bucle que se encuentra incluido en el bloque </br>de sentencias de otro
                    bloque. Los bucles pueden tener</br> cualquier nivel de anidamiento"
                ?>
            </br>
            </br>
            </br>
            </br>
            </br>
            <h3>9.8. Bucle while<a name="9.8"></h3>
            <?php
                    print "La condición se evalúa al principio de cada iteración:</br> si el resultado es true se ejecuta el
                    bloque de sentencias;</br> si el resultado es false el bucle se termina."
                ?>
            </br>
                <img src="64.png">
            </br>
                <img src="65.png">
            </br>
                <img src="66.png">
            </br>
            <table><td>
                <?php
                $i = 0;
                while ($i < 5) {
                print "<p>$i</p>.";
                $i++;
                }
                ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            <h3>9.9. Bucle foreach<a name="9.10"></h3>
            <?php
                    print "El bucle foreach es un tipo especial de bucle que permite</br> recorrer estructuras que contienen
                    varios elementos (como matrices, recursos u objetos)</br>";
                    print "La ejecución de esta estructura de control es la siguiente:</br>
                    ● Si la matriz no contiene elementos, el bucle no se ejecuta.</br>
                    ● Si la matriz contiene elementos:</br>
                    ○ Se asigna el primer valor de la matriz a la variable auxiliar (y en su caso, el
                    primer índice a la otra variable auxiliar)</br>
                    ○ Se ejecuta el bloque de sentencias</br>
                    ○ Si la matriz no contiene más elementos, el bucle deja de ejecutarse.</br>
                    ○ Si la matriz todavía contiene más elementos:</br>
                    ■ Se asigna el siguiente valor de la matriz a la variable auxiliar (y en su
                    caso, el siguiente índice a la otra variable auxiliar)</br>
                    ■ Se ejecuta de nuevo el bloque de sentencias.</br>
                    "
                ?>
            </br>
                <img src="67.png">
            </br>
                <img src="68.png">
            </br>
            <table><td>
            <?php
            $matriz = ["uno" => "a", 2 => "bb", "tres" => "ccc"];
            print "<pre>";
            print_r($matriz);
            print "</pre>";
            foreach ($matriz as $indice => $valor) {
            print "<p>$indice - $valor</p>";;
            }
            print "<p>Final</p>";
            ?>
            </td></table>
            </br>
            </br>
            </br>
            </br>            
            </br>
            </center>
<button class="btn-scrolltop" id="btn_scrolltop">
    <i class="fas fa-arrow-up"></i>
</button>
<script>
    const btn_scrolltop = document.getElementById("btn_scrolltop")
        btn_scrolltop.addEventListener('click', () => {
            window.scrollTo(0, 0)
    })

    window.onscroll = () => {
        add_btn_scrolltop()
    }

    const add_btn_scrolltop = () => {
        if (window.scrollY < 300) {
           btn_scrolltop.classList.remove("btn-scrolltop-on")
        } else {
           btn_scrolltop.classList.add("btn-scrolltop-on")
        }
    }
</script>
    </body>
<!-- Pagina iconos https://fontawesome.com/v5/search -->
</html>