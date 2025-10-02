<?php $page_title = "Ensino Superior - Pincel Atômico"; ?>
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <!-- Hero Section -->
        <section class="hero-recursos" style="background: linear-gradient(135deg, rgba(16, 185, 129, 0.7) 0%, rgba(5, 150, 105, 0.7) 100%), url('images/segmentos/graduacao.jpg') center/cover; color: white; padding: 120px 0 80px; position: relative; overflow: hidden;">
            <div class="container">
                <div style="display: flex; align-items: center; gap: 60px; margin-top: 20px;">
                    <div style="flex: 1;">
                        <h1 style="font-size: 3rem; margin-bottom: 20px; line-height: 1.2;">Ensino Superior e Pós-Graduação</h1>
                        <h2 style="font-size: 1.5rem; margin-bottom: 30px; font-weight: 400; opacity: 0.9;">Sua instituição na frente com tecnologia de ponta</h2>
                        <p style="font-size: 1.2rem; margin-bottom: 40px; line-height: 1.6; opacity: 0.9;">Sistema com <strong>nota máxima (5) pelo MEC</strong> que integra gestão acadêmica, financeira e AVA em uma única plataforma moderna e intuitiva.</p>
                        <a href="demonstracao" onclick="if(typeof fbq !== 'undefined') fbq('track', 'Lead', {content_name: 'Demonstracao'});" class="cta-button" style="background: white; color: #10b981; padding: 15px 40px; font-size: 1.1rem; border-radius: 30px; text-decoration: none; font-weight: 600; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 10px 25px rgba(0,0,0,0.2)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">Solicite uma Demonstração Gratuita</a>
                    </div>
                    <div style="flex-shrink: 0;">
                        <img src="images/nota-5-mec.png" alt="Nota 5 MEC" style="width: 400px; height: 400px; object-fit: contain; filter: drop-shadow(0 20px 40px rgba(0,0,0,0.3));">
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
                                <h3 style="color: #1e3a8a; font-size: 1.8rem; margin-bottom: 15px;">EAD com Nota Máxima no MEC</h3>
                                <h4 style="color: #10b981; font-size: 1.2rem; margin-bottom: 20px; font-weight: 600;">Plataforma reconhecida com qualidade e segurança</h4>
                                <p style="color: #4b5563; line-height: 1.6; margin-bottom: 25px;">Plataforma reconhecida com <strong>nota 5 pelo MEC</strong>, garantindo qualidade e conformidade regulatória. AVA completo com videoaulas ao vivo e gravadas, avaliações online, apostilas digitais, fóruns de discussão, simulados e emissão de certificados digitais. Tudo integrado em um único ambiente, dispensando a contratação de serviços externos.</p>
                            </div>
                            <div class="card-image" style="flex: 1; width: 50%;">
                                <img src="images/segmentos/ensino superior/plataforma ead.png" alt="Plataforma EAD" style="width: 100%; height: 320px; object-fit: cover; border-radius: 12px; box-shadow: 0 8px 25px rgba(30, 58, 138, 0.15);">
                            </div>
                        </div>
                    </div>

                    <div class="segmento-card" style="background: white; border-radius: 16px; padding: 40px; box-shadow: 0 10px 30px rgba(30, 58, 138, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(30, 58, 138, 0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(30, 58, 138, 0.1)'">
                        <div class="card-content" style="display: flex; align-items: center; gap: 40px;">
                            <div class="card-image" style="flex: 1; width: 50%;">
                                <img src="images/segmentos/ensino superior/portal do aluno.png" alt="Portal do Aluno" style="width: 100%; height: 320px; object-fit: cover; border-radius: 12px; box-shadow: 0 8px 25px rgba(30, 58, 138, 0.15);">
                            </div>
                            <div class="card-text" style="flex: 1; width: 50%;">
                                <h3 style="color: #1e3a8a; font-size: 1.8rem; margin-bottom: 15px;">Portal 100% Personalizado</h3>
                                <h4 style="color: #10b981; font-size: 1.2rem; margin-bottom: 20px; font-weight: 600;">Sua marca em destaque com identidade visual única</h4>
                                <p style="color: #4b5563; line-height: 1.6; margin-bottom: 25px;">Portal totalmente customizável com suas cores, logotipo e identidade visual, reforçando a presença e valores da sua instituição. Defina permissões individuais para cada perfil de usuário, controlando o que cada aluno pode acessar ou visualizar. Ofereça uma <strong>experiência profissional e única</strong> que valoriza sua marca.</p>
                            </div>
                        </div>
                    </div>

                    <div class="segmento-card" style="background: white; border-radius: 16px; padding: 40px; box-shadow: 0 10px 30px rgba(30, 58, 138, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(30, 58, 138, 0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(30, 58, 138, 0.1)'">
                        <div class="card-content" style="display: flex; align-items: center; gap: 40px;">
                            <div class="card-text" style="flex: 1; width: 50%;">
                                <h3 style="color: #1e3a8a; font-size: 1.8rem; margin-bottom: 15px;">Gestão Completa Integrada</h3>
                                <h4 style="color: #10b981; font-size: 1.2rem; margin-bottom: 20px; font-weight: 600;">Tudo em uma plataforma para máxima eficiência</h4>
                                <p style="color: #4b5563; line-height: 1.6; margin-bottom: 25px;">Integre todas as necessidades da sua faculdade: controle financeiro, gestão acadêmica, matrículas, vestibulares, comunicação integrada, marketing e AVA próprio. <strong>Reduza custos operacionais</strong> eliminando a dependência de vários sistemas. Painéis intuitivos facilitam a tomada de decisões para <strong>promover a excelência no ensino superior</strong>.</p>
                            </div>
                            <div class="card-image" style="flex: 1; width: 50%;">
                                <img src="images/segmentos/ensino superior/acompanhamento.png" alt="Acompanhamento Completo" style="width: 100%; height: 280px; object-fit: cover; border-radius: 12px; box-shadow: 0 8px 25px rgba(30, 58, 138, 0.15);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Recursos Principais -->
        <section class="todos-recursos">
            <div class="container">
                <h2>Recursos que Transformam sua Instituição</h2>
                <div class="recursos-grid">
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/ava-integrado.png" alt="AVA Integrado">
                        </div>
                        <h3>AVA Completo e Integrado</h3>
                        <p>Videoaulas ao vivo e gravadas, avaliações online, apostilas digitais, fóruns, simulados e emissão de certificados digitais.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/acesso-app.png" alt="Portal Personalizado">
                        </div>
                        <h3>Portal Personalizado</h3>
                        <p>Totalmente customizável com sua marca, cores e identidade visual. Reforce a presença e valores da sua instituição.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/sistema-web.png" alt="Gestão Integrada">
                        </div>
                        <h3>Gestão Integrada</h3>
                        <p>Todos os setores em uma plataforma: acadêmico, financeiro, vestibular, matrículas, marketing e EAD com dashboards intuitivos.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/gestao-vestibular2.png" alt="Gestão de Vestibular">
                        </div>
                        <h3>Gestão de Vestibular</h3>
                        <p>Redação online, provas e entrevistas digitais para uma seleção completa e moderna.</p>
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
                            <img src="images/icones/graficos-tempo-real.png" alt="Gráficos em tempo real">
                        </div>
                        <h3>Gráficos em Tempo Real</h3>
                        <p>Dados, informações e relatórios em vários formatos. Modernidade é marca do Pincel Atômico.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/controle-inscricoes.png" alt="Controle de Inscrições">
                        </div>
                        <h3>Controle de Inscrições</h3>
                        <p>Acompanhamento e contato com interessados irá aumentar a sua taxa de conversão de matrículas.</p>
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
                            <img src="images/icones/geo-localizacao.png" alt="Geolocalização">
                        </div>
                        <h3>Geolocalização dos Alunos</h3>
                        <p>Identifique melhor o seu público alvo e realize campanhas mais efetivas, a partir da Geolocalização dos seus alunos.</p>
                    </div>
                    
                    <div class="recurso-card">
                        <div class="card-icon">
                            <img src="images/icones/avisos-e-alertas2.png" alt="Avisos e alertas">
                        </div>
                        <h3>Avisos e Alertas</h3>
                        <p>Melhore a comunicação com seus alunos utilizando o WhatsApp, SMS, E-mail e notificações via aplicativo.</p>
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
                        <p>Tenha a gestão completa de banco de questões da sua instituição e reduza trabalho com avaliações impressas.</p>
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


        <section class="cta-demonstracao">
            <div class="container">
                <h2>Leve sua Instituição para o Próximo Nível</h2>
                <p>Descubra como o Pincel Atômico pode transformar sua gestão educacional com tecnologia de ponta e reconhecimento MEC.</p>
                <a href="demonstracao" onclick="if(typeof fbq !== 'undefined') fbq('track', 'Lead', {content_name: 'Demonstracao'});" class="cta-button">Solicite uma Demonstração Gratuita</a>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>

    <?php include 'includes/scripts.php'; ?>
</body>
</html>
