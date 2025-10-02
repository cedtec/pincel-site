    <!-- Cookie Consent Banner -->
    <div id="cookieConsent" class="cookie-consent" style="display: none;">
        <div class="cookie-content">
            <div class="cookie-text">
                <p>🍪 Este site utiliza cookies para melhorar sua experiência de navegação e analisar o tráfego. Ao continuar navegando, você concorda com nossa <a href="politica-privacidade" style="color: #F23827; text-decoration: underline;">Política de Privacidade</a>.</p>
            </div>
            <div class="cookie-buttons">
                <button id="acceptCookies" class="cookie-btn accept">Aceitar</button>
                <button id="declineCookies" class="cookie-btn decline">Recusar</button>
            </div>
        </div>
    </div>

    <style>
    .cookie-consent {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.95);
        color: white;
        padding: 20px;
        z-index: 10000;
        box-shadow: 0 -2px 10px rgba(0,0,0,0.3);
        backdrop-filter: blur(10px);
    }

    .cookie-content {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
    }

    .cookie-text {
        flex: 1;
    }

    .cookie-text p {
        margin: 0;
        font-size: 14px;
        line-height: 1.4;
    }

    .cookie-buttons {
        display: flex;
        gap: 10px;
    }

    .cookie-btn {
        padding: 10px 20px;
        border: none;
        border-radius: 25px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    .cookie-btn.accept {
        background: #F23827;
        color: white;
    }

    .cookie-btn.accept:hover {
        background: #d32f2f;
        transform: translateY(-2px);
    }

    .cookie-btn.decline {
        background: transparent;
        color: white;
        border: 1px solid #666;
    }

    .cookie-btn.decline:hover {
        background: #666;
    }

    @media (max-width: 768px) {
        .cookie-content {
            flex-direction: column;
            text-align: center;
        }
        
        .cookie-buttons {
            justify-content: center;
        }
        
        .cookie-text p {
            font-size: 13px;
        }
    }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const cookieConsent = document.getElementById('cookieConsent');
        const acceptBtn = document.getElementById('acceptCookies');
        const declineBtn = document.getElementById('declineCookies');
        
        // Check if user already made a choice
        const cookieChoice = localStorage.getItem('cookieConsent');
        
        if (!cookieChoice) {
            // Show banner after 1 second
            setTimeout(() => {
                cookieConsent.style.display = 'block';
            }, 1000);
        }
        
        // Accept cookies
        acceptBtn.addEventListener('click', function() {
            localStorage.setItem('cookieConsent', 'accepted');
            cookieConsent.style.display = 'none';
            
            // Enable Google Analytics & Ads
            if (typeof gtag !== 'undefined') {
                gtag('consent', 'update', {
                    'analytics_storage': 'granted',
                    'ad_storage': 'granted'
                });
            }
            
            // Enable Facebook Pixel
            if (typeof fbq !== 'undefined') {
                fbq('consent', 'grant');
            }
        });
        
        // Decline cookies
        declineBtn.addEventListener('click', function() {
            localStorage.setItem('cookieConsent', 'declined');
            cookieConsent.style.display = 'none';
            
            // Keep Google Analytics & Ads disabled
            if (typeof gtag !== 'undefined') {
                gtag('consent', 'update', {
                    'analytics_storage': 'denied',
                    'ad_storage': 'denied'
                });
            }
            
            // Keep Facebook Pixel disabled
            if (typeof fbq !== 'undefined') {
                fbq('consent', 'revoke');
            }
        });
    });
    </script>
