<?php $page_title = "Obrigado - Pincel Atômico"; ?>
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <section class="hero">
            <div class="hero-content">
                <div class="hero-text" style="text-align: center; max-width: 600px; margin: 0 auto;">
                    <h1>Obrigado!</h1>
                    <p>Sua solicitação de demonstração foi enviada com sucesso. Nossa equipe entrará em contato em breve para agendar uma apresentação personalizada do Pincel Atômico.</p>
                    <div style="margin-top: 30px;">
                        <a href="/" class="cta-button">Voltar ao Início</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>

    <?php include 'includes/scripts.php'; ?>
    
    <!-- Conversion Tracking -->
    <script>
        // Facebook Pixel - Form Submitted Event
        if (typeof fbq !== 'undefined') {
            fbq('track', 'CompleteRegistration', {
                content_name: 'FormularioEnviado',
                content_category: 'Demonstracao'
            });
        }
        
        // Google Ads - Conversion Event
        if (typeof gtag !== 'undefined') {
            gtag('event', 'conversion', {
                'send_to': 'AW-16595948995/YEv7CLSX9soaEMOryOk9'
            });
        }
    </script>
</body>
</html>
