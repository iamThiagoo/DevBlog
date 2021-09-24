<?php
    include_once("assets/templates/header.php");
?>
    <main id="contact-container">
        <div class="contact-content">
            <h1>Contato</h1>
            <form action="assets/data/email.php" method="POST">
                <div class="input-area">
                    <label class="sr-only" for="name">Digite o seu nome</label>
                    <input type="text" name="name" id="name" placeholder="Seu nome">
                </div>
                <div class="input-area">
                    <label class="sr-only" for="email">Digite o seu email</label>
                    <input type="email" name="email" id="email" placeholder="Seu email">
                </div>
                <textarea name="textarea" placeholder="Escreva a sua mensagem..."></textarea>
                <div class="input-area">
                    <label class="sr-only" for="submit">Enviar mensagem</label>
                    <input type="submit" id="submit" value="Enviar mensagem">
                </div>
            </form>
        </div>
    </main>
<?php
    include_once("assets/templates/footer.php");
?>