<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script
            async
            src="https://www.googletagmanager.com/gtag/js?id=G-QQ5LTKG68L"
        ></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());

            gtag("config", "G-QQ5LTKG68L");
        </script>
        <!-- SEO -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <!-- Style -->
        <link rel="icon" href="favicon.png" type="image/png" sizes="32x32" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/app.css" />
        <link rel="stylesheet" href="css/fontawesome_free_5.13.0_we_all.min.css" />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Goldman&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />
        <!-- PWA -->
        <link rel="manifest" href="manifest.json" />
        <meta name="theme-color" content="#11b126" />

        <title>Calculadora de Subneteo | INVERING</title>
    </head>

    <body>
        <header>
            </br>
            <h1 align="center" style="color: #8FC934">INVERING</h1>
            <h2 align="center"  style="color: #8FC934">Cálculadora de subneteo</h2>
        </header>

        <main>
            <div class="max-width-container">
                <div id="options">
                    <div id="clf-option" style="background-color: #0a6617; color:white;">&nbsp; Dirección con clase &nbsp;</div>
                    <div id="cls-option" style="background-color: #0a6617; color:white;">&nbsp; Dirección sin clase &nbsp; </div>
                    <div id="vlsm-option" class="current-option" style="background-color: #0a6617; color:white;">&nbsp; VLSM &nbsp; </div>
                </div>

                <div id="clf-addr" class="hidden" style="background-color: #c1ffbd;">
                    <form id="js-clf-addressing" class="soft-container">
                        <p>Información de red de la dirección introducida</p>
                        <label for="clf-addr">
                            <span class="colored-text">Dirección IPV4</span> con clase:
                        </label><br />
                        <input
                            type="text"
                            id="js-clf-address"
                            name="clf-addr"
                            placeholder="i.e. 192.168.1.2"
                            required
                        />
                        <br />
                        <button type="submit" class="btn" style="background-color: #29704F; color: white;">Obtener información</button>
                    </form>
                    
                    <div class="soft-container">
                        Información de la 
                        <span class="colored-text">subred</span><br />
                        <div id="js-clf-info"></div>
                    </div>
                </div>

                <div id="cls-addr" class="hidden" style="background-color: #c1ffbd;">
                    <form id="js-cls-addressing" class="soft-container">
                        <p>Información de red de la dirección introducida</p>
                        <label for="cls-addr">
                            <span class="colored-text">Dirección IPV4</span> sin clase:
                        </label><br />
                        <input
                            type="text"
                            id="js-cls-address"
                            name="cls-addr"
                            placeholder="i.e. 192.168.1.34"
                            required
                        />
                        <br />
                        <label for="cls-mask-or-prefix">
                            <span class="colored-text">Máscara</span> o
                            <span class="colored-text">Prefijo</span>:</label
                        ><br />
                        <input
                            type="text"
                            id="js-cls-mask-or-prefix"
                            name="cls-mask-or-prefix"
                            placeholder="i.e. 255.255.255.240 || /28"
                            required
                        />
                        <br />
                        <button type="submit" class="btn" style="background-color: #29704F; color: white;">Obtener información</button>
                    </form>
                    
                    <div class="soft-container">
                        Información de la 
                        <span class="colored-text">subred</span>
                        <div id="js-cls-info"></div>
                    </div>
                   
                    <div class="soft-container">
                        <div id="js-cls-neighbors-info">
                            (Extra)
                            <span class="colored-text">Posibles detalles de subredes adyacentes</span>
                            en la subred contenedora /8, /16 o /24
                        </div>
                    </div>
                    
                    <div class="soft-container">
                        <div id="js-cls-upper-prefixes-neighbors">
                            (Extra)
                            <span class="colored-text">Posibles subredes adyacentes</span>
                            en subredes contenedoras con una variación de prefijos
                        </div>
                    </div>
                </div>

                <div id="vlsm"  style="background-color: #c1ffbd;">
                    <form id="js-vlsm" class="soft-container">
                        <label for="js-vlsm-network">
                            Dirección de la 
                            <span class="colored-text">subred principal</span>
                            en notación CIDR:
                        </label><br />
                        <input
                            type="text"
                            id="js-vlsm-network"
                            placeholder="i.e. 10.0.0.0/25"
                            required
                        /><br />
                        <label>
                            <span class="colored-text">Fragmentos de subred</span>
                            (nombre de fragmento opcional & hosts por subred):
                        </label><br />
                        
                        <div id="js-vlsm-inputs">
                            <div>
                                <input
                                    type="text"
                                    class="js-vlsm-names"
                                    aria-label="Nombre de la subred"
                                    value="(fragmento X)"
                                />
                                <input
                                    type="text"
                                    class="js-vlsm-subnets short-input"
                                    aria-label="Tamanio de la subred"
                                    placeholder="5"
                                    required
                                />
                            </div>
                            <div>
                                <input
                                    type="text"
                                    class="js-vlsm-names"
                                    aria-label="Nombre de la subred"
                                    value="(fragmento X)"
                                />
                                <input
                                    type="text"
                                    class="js-vlsm-subnets short-input"
                                    aria-label="Tamanio de la subred"
                                    placeholder="13"
                                    required
                                />
                                <i class="js-add-subnet fas fa-plus-circle"></i>
                            </div>
                            <div id="vlsm-ref-input">
                                <input
                                    type="text"
                                    class="js-vlsm-names"
                                    aria-label="Nombre de la subred"
                                    value="(fragmento X)"
                                />
                                <input
                                    type="text"
                                    class="js-vlsm-subnets short-input"
                                    aria-label="Tamanio de la subred"
                                    placeholder="19"
                                    required
                                />
                                <i class="js-add-subnet fas fa-plus-circle"></i>
                                <i
                                    class="js-remove-subnet fas fa-minus-circle"
                                ></i>
                            </div>
                        </div>
                        <button type="submit" class="btn" style="background-color: #29704F; color: white;">Obtener resultados</button>
                    </form>
                    <div class="soft-container">
                        <div id="js-vlsm-chunks"></div>
                    </div>
                </div>

                <!-- <h1>Supernetting</h1> -->
            </div>
        </main>

        <footer>
        </footer>

        <!-- SCRIPTS -->

        <!-- <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script> -->

        <script src="js/app.js"></script>
        <script src="js/app_style.js"></script>
    </body>
</html>
