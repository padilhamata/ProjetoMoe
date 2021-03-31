<?php echo $this->include('Login/login_header', array('titulo' => $titulo)); ?>
    <div class="container">
        <div class="row">
    <h1>Inscrição Empresa</h1>
    </div>
    <form action="#" class="col">
    

    <div class="row">
    <div class="input-field col s9">
    <label for="nome" id="nome" name="nome" class="validate">Nome da empresa: </label>
    <input type="text" name="nome" id="nome">
    </div>
</div>
    <div class="row">
    <div class="input-field col s9"> 
    <input type="text" name="endereço" id="endereço" class="validate">
    <label for="sobrenome" id="endereço" name="endereço">Endereço: </label>
    </div>
    </div>
    <div class="row">
    <div class="input-field col s9"> 
    <label for="contato" id="contato" name="contato">Contato: </label>
    <input type="text" name="contato" id="contato">
    </div>
    </div>
    <div class="row">
    <div class="input-field col s9"> 
    <label for="descricao" id="descricao" name="descricao">Descricao: </label>
    <textarea id="textarea1" class="materialize-textarea"></textarea>
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