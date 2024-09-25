<div class="form">
    <h2 style="text-align: center;">Formulário</h2>
    <form action="obrigado.html" method="post">

        <label for="nome" class="label">Nome:</label>
        <input type="text" name="nome" class="input_entrada" required>

        <label for="email" class="label">E-mail:</label>
        <input type="email" name="email" class="input_entrada" required>

        <label for="assunto" class="label">Assunto:</label>
        <input type="text" name="assunto" class="input_entrada" required>

        <label for="mensagem" class="label">Mensagem:</label>
        <textarea name="mensagem" class="input_mensagem" required></textarea>

        <label for="telefone" class="label">Telefone (opcional):</label>
        <input type="tel" name="telefone" class="input_entrada">

        <label class="label">Eu aceito a política de privacidade</a></label>
        <input type="checkbox" name="politica" class="checkbox" required>

        <button type="submit" value="enviar" class="button">Enviar</button>
    </form>
</div>