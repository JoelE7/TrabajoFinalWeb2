<?php
require_once("barraIndex.php");
?>

<div class="container-fluid btn-violet" style="">
    <h1 class="text-orange text-center mb-5">Bienvenido a la plataforma de trabajo de Cruz del norte</h1>
    <div class="row">
        <div class="col-12 mb-5">
            <div id="collapseOne" class="collapse show iniciar" aria-labelledby="headingOne"
                 data-parent="#accordionBarra">
                <form action="#">
                    <label for="userIngresa">Nombre de usuario :</label>
                    <input type="text" name="userIngresa" class="form-control"
                           placeholder="Ingrese un nombre de usuario">
                    <label for="passwordIngresa">Contraseña:</label>
                    <input type="text" name="passwordIngresa" id="passwordIngresa" class="form-control"
                           placeholder="Contraseña">
                    <input type="submit" class="btn btn-orange btn-block mb-5 mt-3" value="Iniciar Sesión">
                </form>
                <h2 class="text-danger">¿No estás registrado? hace click en
                    <button class="btn btn-success collapsed collapseDosA" type="button"
                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                        Registrarse
                    </button>
                </h2>
            </div>
        </div>
        <div class="col-12">
            <div id="collapseTwo" class="collapse registro" aria-labelledby="headingTwo" data-parent="#accordionBarra">
                <form action="#">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
                    <label for="apellido">Apellido:</label>
                    <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido">
                    <label for="dni">DNI:</label>
                    <input type="number" name="dni" id="dni" class="form-control" placeholder="DNI">
                    <label for="user">Nombre de usuario:</label>
                    <input type="text" name="user" id="user" class="form-control" placeholder="Nombre de usuario">
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                    <input type="submit" class="btn btn-success btn-block mb-5 mt-3" value="Registrarse">
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div id="collapseThree" class="collapse contacto" aria-labelledby="headingOne"
                 date-parent="#accordionBarra">
                <form action="#">
                    <h2 class="text-orange">Por favor redacte el mensaje</h2>
                    <label for="nombre">Usuario:</label>
                    <input type="text" class="form-control" placeholder="Usuario">
                    <label for="asunto">Mensaje:</label>
                    <textarea name="asunto" id="asunto" cols="30" rows="10" placeholder="Asunto"
                              class="w-100"></textarea>
                    <input type="submit" class="btn btn-danger btn-block mb-5 mt-3" value="Enviar mensaje">
                </form>
            </div>
        </div>
        <div class="col-12">
            <div id="collapseFour" class="collapse quienesSomos" aria-labelledby="headingOne"
                 date-parent="#accordionBarra">
                <p class="text-orange display-4">Cruz del norte es una empresa Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Sint asperiores alias tempore maxime commodi quisquam id quo, eveniet natus sed
                    nisi necessitatibus doloribus rem suscipit nam cum molestias iure dolore.</p>
            </div>
        </div>
    </div>
</div>


<script src="JS/barras.js"></script>

<?php
require_once ("footer.php");
?>
