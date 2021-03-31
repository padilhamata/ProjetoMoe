<?php echo $this->include('Login/login_header', array('titulo' => $titulo)); ?>
    <div class="container">
        <div class="row">
    <h1>Inscrição Estágiario</h1>
    </div>
    <form action="#" class="col">
    

    <div class="row">
    <div class="input-field col s9">
    <label for="nome" id="nome" name="nome" class="validate">Nome: </label>
    <input type="text" name="nome" id="nome">
    </div>
</div>
    <div class="row">
    <div class="input-field col s9"> 
    <input type="text" name="curso" id="curso" class="validate">
    <label for="sobrenome" id="curso" name="curso">curso: </label>
    </div>
    </div>
    <div class="row">
    <div class="input-field col s9"> 
    <label for="ingresso" id="ingresso" name="ingresso">Ingresso: </label>
    <input type="text" name="ingresso" id="ingresso">
    </div>
    </div>
    <div class="row">
    <div class="input-field col s9"> 
    <label for="minicurrículo" id="minicurrículo" name="minicurrículo">minicurrículo: </label>
    <input type="text" name="minicurrículo" id="minicurrículo">
    </div>
    </div>
    <div class="row">
    <div class="input-field col s9"> 
    <label for="email" id="email" name="email">E-mail:</label>
    <input type="email" name="email" id="email">
    </div>
    </div>
    <div class="row">
    <div class="input-field col s9"> 
    <label for="senha" id="senha" name="senha">senha:</label>
    <input type="password" name="senha" id="senha">
    </div>
    </div>
    <div class="row">
    <div class="input-field col s9"> 
    <label for="confirmarsenha" id="confirmarsenha" name="confirmarsenha">Confirmar senha: </label>
    <input type="password" name="confimarsenha" id="confirmarsenha">
    </div>
    </div>
    <div class="row">
    <button type="submit" class="btn waves-effect waves-light">Cadastrar</button>
    </div>
    <br>
</form>
<br>
<br>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>