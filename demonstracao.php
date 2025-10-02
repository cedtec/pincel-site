<?php $page_title = "Solicite uma Demonstração - Pincel Atômico"; ?>
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <section class="hero">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Solicite uma demonstração</h1>
                    <p>Descubra como nossa solução pode transformar a gestão da sua instituição de ensino. Surpreenda-se com a praticidade e o impacto que ela traz para gestores, colaboradores, professores e alunos, garantindo mais eficiência, integração e satisfação para todos.</p>
                    
                    <div class="contact-info">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                </svg>
                            </div>
                            <span>0800 127 1000</span>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.516"/>
                                </svg>
                            </div>
                            <span>(27) 99833-3068</span>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                </svg>
                            </div>
                            <span>contato@pincelatomico.com.br</span>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                </svg>
                            </div>
                            <div>
                                <span>Avenida Eldes Scherrer Souza SN Sala 02</span>
                                <span>Parque Residencial Laranjeiras – Serra/ES – 29165-680</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-devices">
                    <div class="demo-form-container">
                        <form class="demo-form" id="demoForm" action="enviar-email" method="POST">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" id="nome" name="nome" required>
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="telefone">Telefone (DDD)</label>
                                <input type="tel" id="telefone" name="telefone">
                            </div>

                            <div class="form-group">
                                <label for="instituicao">Nome da sua instituição / empresa</label>
                                <input type="text" id="instituicao" name="instituicao">
                            </div>

                            <div class="form-group">
                                <label for="qtd-alunos">Quantidade de Alunos</label>
                                <select id="qtd-alunos" name="qtd-alunos" required>
                                    <option value="">Selecione</option>
                                    <option value="1-500">1 a 500</option>
                                    <option value="501-2000">501 a 2000</option>
                                    <option value="2001-5000">2001 a 5000</option>
                                    <option value="5001-10000">5001 a 10000</option>
                                    <option value="10000+">10000 ou mais alunos</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="mensagem">Mensagem</label>
                                <textarea id="mensagem" name="mensagem" rows="4" required></textarea>
                            </div>


                            
                            <button type="submit" class="cta-button">Enviar Solicitação</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="section benefits-demo">
            <div class="container">
                <h2>Por que solicitar uma demonstração?</h2>
                <div class="benefits-grid">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <h3>Veja na prática</h3>
                        <p>Conheça todas as funcionalidades do sistema em uma apresentação personalizada para sua instituição.</p>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                        </div>
                        <h3>Consultoria especializada</h3>
                        <p>Nossos especialistas irão entender suas necessidades e mostrar como o Pincel Atômico pode ajudar.</p>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M9 11H7v6h2v-6zm4 0h-2v6h2v-6zm4 0h-2v6h2v-6zm2.5-9H19V1h-2v1H7V1H5v1H4.5C3.11 2 2 3.11 2 4.5v15C2 20.89 3.11 22 4.5 22h15c1.39 0 2.5-1.11 2.5-2.5v-15C22 3.11 20.89 2 19.5 2zM20 19.5c0 .28-.22.5-.5.5h-15c-.28 0-.5-.22-.5-.5v-12h16v12z"/>
                            </svg>
                        </div>
                        <h3>Sem compromisso</h3>
                        <p>A demonstração é gratuita e sem compromisso. Você decide se é a solução ideal para sua escola.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section cta-section">
            <div class="container">
                <h2>Pronto para Transformar sua Instituição de Ensino?</h2>
                <p>Junte-se a várias escolas que já confiam no Pincel Atômico para revolucionar sua gestão educacional</p>
                <a href="#demoForm" class="cta-button">Solicitar Demonstração Agora</a>
            </div>
        </section>
        <section class="section escolas-conveniadas">
            <div class="container">
                <h2>Alguns de nossos clientes que já <strong>TRANSFORMARAM </strong><br> a gestão da sua instituição</h2>
                <div class="carousel-container">
                    <div class="carousel-track">
                        <div class="escola-logo">
                            <img src="images/escolas/cedtec.webp" alt="Cedtec">
                        </div>
                        <div class="escola-logo">
                            <img src="images/escolas/colminas.png" alt="Colégio Minas">
                        </div>
                        <div class="escola-logo">
                            <img src="images/escolas/escola cidades.png" alt="Escola Cidades">
                        </div>
                        <div class="escola-logo">
                            <img src="images/escolas/etcampos.png" alt="ET Campos">
                        </div>
                        <div class="escola-logo">
                            <img src="images/escolas/fagenius.png" alt="Fagenius">
                        </div>
                        <div class="escola-logo">
                            <img src="images/escolas/graciosa.png" alt="Graciosa">
                        </div>
                        <div class="escola-logo">
                            <img src="images/escolas/unica.svg" alt="Única">
                        </div>
                        <div class="escola-logo">
                            <img src="images/escolas/cedtec.webp" alt="Cedtec">
                        </div>
                        <div class="escola-logo">
                            <img src="images/escolas/colminas.png" alt="Colégio Minas">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>

    <?php include 'includes/scripts.php'; ?>
</body>
</html>
