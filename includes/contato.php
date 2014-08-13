<div class="page-header">
    <h1>Contato</h1>
</div>

<div class="row">

    <div class="col-md-6">
        <?php
        if (!$_POST) {
            ?>
            <h4>Formulário</h4>

            <form role="form" class="form-horizontal" method="post" action="?go=contato">
                <fieldset>
                    <div class="form-group">
                        <label for="nome" class="col-lg-2 control-label">Nome</label>

                        <div class="col-lg-10">
                            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-lg-2 control-label">E-mail</label>

                        <div class="col-lg-10">
                            <input type="email" name="email" class="form-control" id="email" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="assunto" class="col-lg-2 control-label">Assunto</label>

                        <div class="col-lg-10">
                            <input type="text" name="assunto" class="form-control" id="assunto" placeholder="assunto">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mensagem" class="col-lg-2 control-label">Mensagem</label>

                        <div class="col-lg-10">
                            <textarea class="form-control" name="mensagem" placeholder="Sua mensagem" rows="5"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default">Enviar</button>
                </fieldset>
            </form>

        <?php
        } else {
            ?>
            <h4>Obrigado!</h4>
            <p>
                Dados enviados com sucesso, abaixo seguem os dados que você enviou:
            <hr>
            <ul>
                <li><strong>Nome:</strong> <?php echo $_POST['nome']; ?></li>
                <li><strong>E-mail:</strong> <?php echo $_POST['email']; ?></li>
                <li><strong>Assunto:</strong> <?php echo $_POST['assunto']; ?></li>
                <li><strong>Mensagem:</strong> <br><?php echo $_POST['mensagem']; ?></li>
            </ul>
            </p>
        <?php
        }
        ?>
    </div>

    <div class="col-md-6">
        <h5>Hello!</h5>

        <div class="well">
            <small>
                Donec vitae tristique tellus. Nulla blandit ultricies tortor non feugiat. Donec sodales ac mauris et
                vestibulum. Nullam eget commodo velit. Morbi mollis urna sit amet luctus consectetur. Aenean blandit
                volutpat dolor eget ornare. Aenean vitae neque ut tellus fringilla varius quis non ligula.
            </small>
        </div>
    </div>

</div>