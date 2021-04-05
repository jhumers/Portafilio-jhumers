<!-- contact section start -->
<section class="contact" id="contact">
    <div class="max-width">
        <h2 class="title">Contáctame</h2>
        <div class="contact-content">
            <div class="column left">
                <div class="text">Ponerse en contacto</div>
                <p>Actualmente estoy buscando nuevas oportunidades laborales, mi bandeja de entrada siempre está abierta. Ya sea que tenga una pregunta o simplemente quiera saludar, ¡haré todo lo posible para responderle!</p>
                <div class="icons">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <div class="info">
                            <div class="head">Nombre</div>
                            <div class="sub-title">Jhumers Paul</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info">
                            <div class="head">Address</div>
                            <div class="sub-title">Lima, Perú</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <div class="head">Email</div>
                            <div class="sub-title">jhumerspaul@gmail.com</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column right">
                <div class="text">Envía un mensaje</div>
                <form action="enviar.php" method="POST">
                    <div class="fields">
                        <div class="field name">
                            <input type="text" placeholder="Nombre" name="nombre" required>
                        </div>
                        <div class="field email">
                            <input type="email" placeholder="Email" name="email" required>
                        </div>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Asunto" name="asunto" required>
                    </div>
                    <div class="field textarea">
                        <textarea cols="30" rows="10" placeholder="Mensaje..." name="mensaje" required></textarea>
                    </div>
                    <div class="button">
                        <button type="submit">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>