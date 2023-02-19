<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Directorio Alicantino</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Directorio de Empresas">
    <meta name="author" content="Jose Luis Lopez">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    
	<script defer src="assets/fontawesome/js/all.min.js"></script>
    
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.2/styles/atom-one-dark.min.css">
    <link rel="stylesheet" href="assets/plugins/simplelightbox/simple-lightbox.min.css">

    <link id="theme-style" rel="stylesheet" href="assets/css/theme.css">

</head>
<body>
    <header class="header fixed-top">	    
        <div class="branding docs-branding">
            <div class="container-fluid position-relative py-2">
                <div class="docs-logo-wrapper"> 
                    <div class="site-logo"><a class="navbar-brand" href="index.php"><img class="logo-icon me-2" src="assets/images/coderdocs-logo.svg" alt="logo"><span class="logo-text">Directorio Alicantino</span></a></div>    
                </div>
            </div>
        </div>
    </header>
    <article class="docs-article" id="section-2">
        <header class="docs-header">
                <h1 class="docs-heading">Añade tu empresa</h1>
                    <form method="post">
                        <fieldset>
                        <p>
                            <label>Escribe el nombre de la empresa:
                            <input type="text" name="nombre" />
                            </label>
                        </p>
                        <p>
                            <label>Escriba la dirección:
                            <input type="text" name="direccion" />
                            </label>
                        </p>
                        <p>
                            <label>Escribe el teléfono de contacto de tu empresa:
                            <input type="text" name="telefono"/>
                            </label>
                        </p>
                        <p>
                            <label>Escribe el sitio web de tu empresa (si lo tiene):
                            <input type="text" name="web"/>
                            </label>
                        </p>
                        <p>
                            <label>Elige el sector de tu empresa
                            <select id="menu" name="menu">
                                <optgroup label="Sectores">
                                    <option value="opcion0">---</option>
                                    <option value="opcion1">Agricultura</option>
                                    <option value="opcion2">Alimentación</option>
                                    <option value="opcion3">Automoción</option>
                                    <option value="opcion4">Comunicación</option>
                                    <option value="opcion5">Construcción</option>
                                    <option value="opcion6">Educación</option>
                                    <option value="opcion7">Electricidad</option>
                                    <option value="opcion8">Ganadería</option>
                                    <option value="opcion9">Hogar</option>
                                    <option value="opcion10">Hoteles</option>
                                    <option value="opcion11">Imprenta</option>
                                    <option value="opcion12">Industria</option>
                                    <option value="opcion13">Ocio y deporte</option>
                                    <option value="opcion14">Ropa, calzado y complementos</option>
                                    <option value="opcion15">Salud</option>
                                    <option value="opcion16">Tecnología y electrónica</option>
                                    <option value="opcion17">Transportes</option>
                                </optgroup>
                            </select>
                            </label>
                        </p>
                        <p>
                            <input type="submit" value="Enviar"/>
                        </p>
                        </fieldset>
                    </form> 
        </header>
    </article>
</body>    
    
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    <script src="assets/plugins/smoothscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="assets/js/highlight-custom.js"></script> 
    <script src="assets/plugins/simplelightbox/simple-lightbox.min.js"></script>      
    <script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script> 
    <script src="assets/js/docs.js"></script> 

</html>