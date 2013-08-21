<!DOCTYPE html>
<html>
    <head>
        <title>Proyecto HTML</title>
        <link rel="stylesheet" type="text/css" href="estilo_style.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=php&skin=desert"></script>
    </head>
    <body>
        
        
        
        
        <div class="container">
            <div class="left_col">
                <h1>Leccion 00</h1>
                <h2>Terminos generales</h2>
                <h2>Puntos Claves</h2>
                <h3>Elementos y Atributos</h3>
                <h2>Tarea</h2>
                
                <div class="">
                    <p><a href="Miguel_Angel">Pagina de Miguel Angel:</a></p
                    <p><a href="Alejandro">Pagina de Alejandro:</a></p>
                </div>
                
            </div>
            
            <div class="main">
                    <div class="">
                        <h1>List example</h1>
                        <pre class="prettyprint html language-html codeblock">
                            <code class="">
                                <?=htmlentities("<ul>
                                    <li>One</li>
                                    <li>Two</li>
                                    <li>Three</li>
                                </ul>", ENT_HTML5);
                                //print htmlentities($str, ENT_HTML5);
                                ?>
                            </code>
                        </pre>
                    </div>
                    <div class="">
                        <h1>Una lista <em>sembrada</em> entre otra:</h1>
                        <pre class="prettyprint html language-html codeblock">
                            <code class="">
                                <?=htmlentities("<ul>
                                    <li>One</li>
                                        <ul>
                                            <li>One A</li>
                                            <li>One B</li>
                                            <li>One C</li>
                                        </ul>   
                                    <li>Two</li>
                                    <li>Three</li>
                                        <ul>
                                            <li>Three A</li>
                                        </ul>
                                </ul>", ENT_HTML5);
                                ?>
                            </code>
                        </pre>
                    </div>
                    
            </div>
        </div>
        


    </body>
    <script>

    </script>
</html>

<!--
        <div class="">
            <p>The <code>code</code> element represents a fragment of computer
            code.</p>

            <p>When you call the <code>activate()</code> method on the
            <code>robotSnowman</code> object, the eyes glow. Can this 
            alod do <code><html></html></code></p>
            <p>
                <code class="language-html">
                    .navigacion {
                        padding: 5px;
                    }
                </code>
            </p>

            <p>The example below uses the <code>begin</code> keyword to indicate
            the start of a statement block. It is paired with an <code>end</code>
            keyword, which is followed by the <code>.</code> punctuation character
            (full stop) to indicate the end of the program.</p>
        </div>

-->