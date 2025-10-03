<?php $page_title = "Ensino Técnico - Pincel Atômico"; ?>
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <!-- Hero Section -->
        <section class="hero-recursos" style="background: linear-gradient(135deg, rgba(98, 4, 191, 0.7) 0%, rgba(139, 92, 246, 0.7) 100%), url('images/segmentos/tecnica.jpeg') center/cover; color: white; padding: 80px 0 40px; position: relative; overflow: hidden;">
            <div class="container">
                <div style="display: flex; align-items: center; gap: 60px; margin-top: 20px;">
                    <div style="flex: 1;">
                        <h1 style="font-size: 3rem; margin-bottom: 20px; line-height: 1.2;">Ensino Técnico e Cursos Livres</h1>
                        <h2 style="font-size: 1.5rem; margin-bottom: 30px; font-weight: 400; opacity: 0.9;">Gestão completa e moderna para sua instituição</h2>
                        <p style="font-size: 1.2rem; margin-bottom: 40px; line-height: 1.6; opacity: 0.9;">Acompanhe a performance da sua escola com <strong>painéis intuitivos</strong> e processos totalmente integrados. Reduza custos oferecendo disciplinas online pela sala virtual.</p>
                        <a href="demonstracao" onclick="if(typeof fbq !== 'undefined') fbq('track', 'Lead', {content_name: 'Demonstracao'});" class="cta-button" style="background: white; color: #6204bf; padding: 15px 40px; font-size: 1.1rem; border-radius: 30px; text-decoration: none; font-weight: 600; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 10px 25px rgba(0,0,0,0.2)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">Solicite uma Demonstração Gratuita</a>
                    </div>
                    <div style="flex-shrink: 0;">
                        <img src="images/segmentos/ensino tecnico/aplicativo.png" alt="Aplicativo Móvel" style="width: 400px; height: 400px; object-fit: contain; filter: drop-shadow(0 20px 40px rgba(0,0,0,0.3)); transform: scale(1.15);">
                    </div>
                </div>
            </div>
        </section>

        <!-- Diferenciais Principais -->
        <section id="diferenciais" class="section bg-light" style="padding: 80px 0;">
            <div class="container">
                <div class="segmentos-cards-vertical" style="display: flex; flex-direction: column; gap: 40px;">
                    <div class="segmento-card" style="background: white; border-radius: 16px; padding: 40px; box-shadow: 0 10px 30px rgba(30, 58, 138, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(30, 58, 138, 0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(30, 58, 138, 0.1)'">
                        <div class="card-content" style="display: flex; align-items: center; gap: 40px;">
                            <div class="card-text" style="flex: 1; width: 50%;">
                                <h3 style="color: #1e3a8a; font-size: 1.8rem; margin-bottom: 15px;">Plataforma EAD para Redução de Custos</h3>
                                <h4 style="color: #6204bf; font-size: 1.2rem; margin-bottom: 20px; font-weight: 600;">AVA próprio com mais de 400 disciplinas prontas</h4>
                                <p style="color: #4b5563; line-height: 1.6; margin-bottom: 25px;">AVA completo com videoaulas, avaliações online, apostilas digitais, fóruns e certificados digitais. <strong>Parceria com CEDTEC</strong> oferece acesso a mais de 400 disciplinas prontas com apostilas, videoaulas e questionários. <strong>Reduza custos</strong> e monte cursos completos rapidamente.</p>
                            </div>
                            <div class="card-image" style="flex: 1; width: 50%;">
                                <img src="images/segmentos/ensino tecnico/plataforma ead.png" alt="Plataforma EAD" style="width: 100%; height: 320px; object-fit: cover; border-radius: 12px; box-shadow: 0 8px 25px rgba(30, 58, 138, 0.15);">
                            </div>
                        </div>
                    </div>

                    <div class="segmento-card" style="background: white; border-radius: 16px; padding: 40px; box-shadow: 0 10px 30px rgba(30, 58, 138, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(30, 58, 138, 0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(30, 58, 138, 0.1)'">
                        <div class="card-content" style="display: flex; align-items: center; gap: 40px;">
                            <div class="card-image" style="flex: 1; width: 50%;">
                                <img src="images/segmentos/ensino tecnico/portal do aluno 2.png" alt="Portal Personalizado" style="width: 100%; height: 320px; object-fit: cover; border-radius: 12px; box-shadow: 0 8px 25px rgba(30, 58, 138, 0.15);">
                            </div>
                            <div class="card-text" style="flex: 1; width: 50%;">
                                <h3 style="color: #1e3a8a; font-size: 1.8rem; margin-bottom: 15px;">Portal Personalizado com sua Marca</h3>
                                <h4 style="color: #6204bf; font-size: 1.2rem; margin-bottom: 20px; font-weight: 600;">Experiência 100% digital para alunos e professores</h4>
                                <p style="color: #4b5563; line-height: 1.6; margin-bottom: 25px;">Portal totalmente personalizável com sua identidade visual. <strong>Aplicativo móvel</strong> permite que alunos assistam aulas, façam avaliações e acompanhem mensalidades. Professores organizam aulas ao vivo e acompanham desempenho pelo celular. <strong>Mobilidade total</strong> para sua instituição.</p>
                            </div>
                        </div>
                    </div>

                    <div class="segmento-card" style="background: white; border-radius: 16px; padding: 40px; box-shadow: 0 10px 30px rgba(30, 58, 138, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(30, 58, 138, 0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(30, 58, 138, 0.1)'">
                        <div class="card-content" style="display: flex; align-items: center; gap: 40px;">
                            <div class="card-text" style="flex: 1; width: 50%;">
                                <h3 style="color: #1e3a8a; font-size: 1.8rem; margin-bottom: 15px;">Acompanhamento Completo da Instituição</h3>
                                <h4 style="color: #6204bf; font-size: 1.2rem; margin-bottom: 20px; font-weight: 600;">Tudo integrado em uma única plataforma</h4>
                                <p style="color: #4b5563; line-height: 1.6; margin-bottom: 25px;">Integra todas as necessidades: controle financeiro, acadêmico, matrículas, vestibulares, comunicação e AVA próprio. <strong>Elimine múltiplos sistemas</strong> e reduza custos operacionais. Painéis intuitivos e relatórios completos facilitam decisões estratégicas e otimizam o tempo da equipe.</p>
                            </div>
                            <div class="card-image" style="flex: 1; width: 50%;">
                                <img src="images/segmentos/ensino tecnico/acompanhamento.png" alt="Acompanhamento Completo" style="width: 100%; height: 320px; object-fit: cover; border-radius: 12px; box-shadow: 0 8px 25px rgba(30, 58, 138, 0.15);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Recursos Principais -->
        <section class="todos-recursos">
            <div class="container">
                <h2>Recursos Completos para Ensino Técnico</h2>
                <div class="recursos-grid">
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/gestao-vestibular2.png" alt="Gestão de Vestibular">
                        </div>
                        <h3>Gestão de Vestibular</h3>
                        <p>Sistema completo de gestão de vestibular. Faça processos seletivos com redação online, provas e até entrevistas online.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/gerenciamento-financeiro.png" alt="Gerenciamento Financeiro">
                        </div>
                        <h3>Gerenciamento Financeiro</h3>
                        <p>Tenha a gestão completa das contas a pagar e a receber de sua instituição.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/gerenciamento-financeiro (1).png" alt="Cobrança Inteligente">
                        </div>
                        <h3>Cobrança Inteligente</h3>
                        <p>Módulo completo de Cobrança auxilia no controle de inadimplência e maior autonomia para sua instituição.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/centro-de-custos.png" alt="Centro de Custos">
                        </div>
                        <h3>Centro de Custos (DRE)</h3>
                        <p>Tenha o mais completo e detalhado controle financeiro através de Centros de Custos personalizáveis.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/portal-de-matriculas.png" alt="Portal de Matrículas">
                        </div>
                        <h3>Portal de Matrículas Online</h3>
                        <p>Não perca mais matrículas, tenha um portal de matrículas completo incorporado ao seu site.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/secretaria-escolar.png" alt="Secretaria Escolar">
                        </div>
                        <h3>Secretaria Escolar Online</h3>
                        <p>Menos burocracia, filas e perda de tempo na geração de documentos acadêmicos com a Secretaria Escolar Online.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/controle-biblioteca.png" alt="Controle de Biblioteca">
                        </div>
                        <h3>Controle de Biblioteca</h3>
                        <p>Com a gestão da biblioteca integrada ao sistema, tenha mais controle e otimização do seu acervo.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/controle-inscricoes.png" alt="Controle de Inscrições">
                        </div>
                        <h3>Controle de Inscrições</h3>
                        <p>Acompanhamento e contato com interessados irá aumentar a sua taxa de conversão de matrículas, através do sistema de Controle de Inscrições.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/gerenciador-campanhas.png" alt="Gerenciador de Campanhas">
                        </div>
                        <h3>Gerenciador de Campanhas</h3>
                        <p>Gerenciador de Campanhas de Marketing, para mais agilidade e foco na criação e publicação de campanhas.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/graficos-tempo-real.png" alt="Gráficos em tempo real">
                        </div>
                        <h3>Gráficos em Tempo Real</h3>
                        <p>Dados, informações e relatórios em vários formatos. Modernidade é marca do Pincel Atômico.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/geo-localizacao.png" alt="Geolocalização">
                        </div>
                        <h3>Geolocalização dos Alunos</h3>
                        <p>Identifique melhor o seu público alvo e realize campanhas mais efetivas, a partir da Geolocalização dos seus alunos.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/sistema-web.png" alt="Sistema Web Integrado">
                        </div>
                        <h3>Sistema Web Integrado</h3>
                        <p>Tenha o controle Acadêmico, financeiro e a gestão da sua escola em apenas um Ambiente.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/acesso-app.png" alt="Acesso por Aplicativo">
                        </div>
                        <h3>Acesso por Aplicativo</h3>
                        <p>Aplicativo Pincel Atômico para seu aluno ou professor acessar de qualquer lugar.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/avisos-e-alertas2.png" alt="Avisos e alertas">
                        </div>
                        <h3>Avisos e Alertas</h3>
                        <p>Melhore a comunicação com seus alunos utilizando o WhatsApp, SMS, E-mail e notificações via aplicativo, através do sistema.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/apostilas-online.png" alt="Apostilas Online">
                        </div>
                        <h3>Apostilas Online</h3>
                        <p>Apostilas Online acessadas a qualquer hora e de qualquer lugar.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/provas-online.png" alt="Provas Online">
                        </div>
                        <h3>Provas Online</h3>
                        <p>Tenha a gestão completa de banco de questões da sua instituição e reduza trabalho com avaliações impressas e digitação de notas, aplique Provas e Simulados Online.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/simulados-online.png" alt="Simulados Online">
                        </div>
                        <h3>Simulados Online</h3>
                        <p>Reduza trabalho e custos com avaliações impressas e digitação de notas, aplique Provas e Simulados Online.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/foruns-e-discussoes.png" alt="Fóruns e discussões">
                        </div>
                        <h3>Fóruns e Discussões</h3>
                        <p>Crie ambientes de debates e interações com seus alunos através de Fóruns online.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/envio-trabalhos.png" alt="Envio de trabalhos">
                        </div>
                        <h3>Envio de Trabalhos</h3>
                        <p>Mais comodidade no envio e correção de trabalhos, através da nossa ferramenta 100% online.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/ava-integrado.png" alt="AVA integrado">
                        </div>
                        <h3>AVA Integrado</h3>
                        <p>Ensino a distância sem precisar contratar outro Sistema, ambiente virtual completo e totalmente integrado.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/gestor-videoaulas.png" alt="Gestor de Vídeoaulas">
                        </div>
                        <h3>Gestor de Videoaulas</h3>
                        <p>Direcione os estudos dos seus alunos e avalie individualmente o seu rendimento através do Gestor de Videoaulas.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/aulas-online-ao-vivo.png" alt="Aulas online ao Vivo">
                        </div>
                        <h3>Aulas Online ao Vivo</h3>
                        <p>Crie ambientes de debates e interações com seus alunos através da aula ao vivo sem depender de ferramentas externas.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/controle-aulas.png" alt="Controle de aulas">
                        </div>
                        <h3>Controle de Aulas</h3>
                        <p>Reduza processos manuais no pagamento de professores através de controles automatizados de carga horária.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Estatísticas -->
        <section class="stats-section">
            <div class="container">
                <h2>Números que Comprovam Nossa Excelência</h2>
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">5.0</div>
                        <div class="stat-label">Nota MEC</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">24</div>
                        <div class="stat-label">Horas no ar</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">+ de 300</div>
                        <div class="stat-label">Instituições Atendidas</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">+ de 500 mil</div>
                        <div class="stat-label">Alunos Conectados</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-demonstracao">
            <div class="container">
                <h2>Modernize sua Escola Técnica</h2>
                <p>Descubra como o Pincel Atômico pode otimizar a gestão da sua instituição de ensino técnico e cursos livres.</p>
                <a href="demonstracao" onclick="if(typeof fbq !== 'undefined') fbq('track', 'Lead', {content_name: 'Demonstracao'});" class="cta-button">Solicite uma Demonstração Gratuita</a>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>

    <?php include 'includes/scripts.php'; ?>
</body>
</html>
