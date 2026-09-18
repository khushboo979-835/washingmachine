<!-- ========================================================================= -->
<!-- ULTRA-MODERN & CLASSY CUSTOMER GUIDELINES, DISCLAIMER & REWARD POLICY -->
<!-- ========================================================================= -->
<style>
    .guidelines-wrapper {
        background: linear-gradient(180deg, #f8fafc 0%, #edf2f7 100%);
        position: relative;
        padding: 50px 0;
        overflow: hidden;
    }

    /* Decorative top subtle line */
    .guidelines-wrapper::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #0387cf, #ffb703, #2a9d8f, #0387cf);
    }

    .guidelines-pill-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: rgba(3, 135, 207, 0.1);
        color: #0387cf;
        border: 1px solid rgba(3, 135, 207, 0.25);
        padding: 6px 16px;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        margin-bottom: 12px;
    }

    .guidelines-main-title {
        font-size: 2rem;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 8px;
        line-height: 1.3;
    }

    .guidelines-subtitle {
        color: #64748b;
        font-size: 1rem;
        max-width: 680px;
        margin: 0 auto 20px;
    }

    /* Segmented Language Switcher */
    .guidelines-lang-segmented {
        display: inline-flex;
        background: #ffffff;
        padding: 4px;
        border-radius: 50px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
        border: 1px solid #e2e8f0;
        gap: 4px;
    }

    .guidelines-lang-segmented .lang-switch-btn {
        border: none;
        background: transparent;
        color: #475569;
        font-size: 13.5px;
        font-weight: 600;
        padding: 8px 18px;
        border-radius: 40px;
        cursor: pointer;
        transition: all 0.25s ease;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .guidelines-lang-segmented .lang-switch-btn:hover {
        color: #0387cf;
        background: #f1f5f9;
    }

    .guidelines-lang-segmented .lang-switch-btn.active {
        background: #0387cf;
        color: #ffffff !important;
        box-shadow: 0 4px 12px rgba(3, 135, 207, 0.35);
    }

    /* CRITICAL FIX: Hide inactive panes completely to eliminate ALL blank space */
    .guidelines-lang-pane {
        display: none !important;
    }

    .guidelines-lang-pane.active {
        display: block !important;
        animation: paneFadeIn 0.35s ease-in-out;
    }

    @keyframes paneFadeIn {
        from {
            opacity: 0;
            transform: translateY(8px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Premium Cards */
    .pro-glass-card {
        background: #ffffff;
        border-radius: 18px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 10px 30px -5px rgba(15, 23, 42, 0.06);
        overflow: hidden;
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .pro-glass-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 20px 35px -8px rgba(3, 135, 207, 0.12);
        border-color: rgba(3, 135, 207, 0.3);
    }

    .pro-card-header {
        background: linear-gradient(135deg, #0a2540 0%, #173b61 100%);
        color: #ffffff;
        padding: 16px 22px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .pro-card-header.reward-style {
        background: linear-gradient(135deg, #0f5132 0%, #157347 100%);
    }

    .pro-card-header h3 {
        font-size: 1.05rem;
        font-weight: 700;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 10px;
        letter-spacing: 0.3px;
    }

    .pro-card-body {
        padding: 22px;
        flex: 1;
    }

    /* Warning Notice Banner */
    .pro-advisory-box {
        background: #fffbeb;
        border: 1px solid #fef3c7;
        border-left: 4px solid #f59e0b;
        border-radius: 10px;
        padding: 12px 16px;
        margin-bottom: 18px;
        font-size: 14.5px;
        color: #78350f;
        line-height: 1.5;
    }

    /* 8-Points List Item Design */
    .pro-rules-grid {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .pro-rule-item {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        background: #f8fafc;
        border: 1px solid #edf2f7;
        border-radius: 12px;
        padding: 12px 16px;
        transition: all 0.2s ease;
    }

    .pro-rule-item:hover {
        background: #ffffff;
        border-color: #cbd5e1;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
        transform: translateX(3px);
    }

    .pro-rule-num {
        flex-shrink: 0;
        width: 28px;
        height: 28px;
        background: #0387cf;
        color: #ffffff;
        font-weight: 700;
        font-size: 13px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 6px rgba(3, 135, 207, 0.35);
        margin-top: 1px;
    }

    .pro-rule-text {
        font-size: 14px;
        line-height: 1.55;
        color: #334155;
        margin: 0;
    }

    .pro-rule-text strong {
        color: #0f172a;
    }

    /* Right Column: Official Contact Card */
    .pro-contact-card {
        background: linear-gradient(135deg, #ffffff 0%, #fefcf3 100%);
        border: 2px solid #fde047;
        border-radius: 18px;
        padding: 22px;
        text-align: center;
        box-shadow: 0 10px 25px rgba(234, 179, 8, 0.12);
        position: relative;
        overflow: hidden;
    }

    .pro-contact-card::after {
        content: '';
        position: absolute;
        top: -40px;
        right: -40px;
        width: 90px;
        height: 90px;
        background: rgba(254, 224, 71, 0.25);
        border-radius: 50%;
        pointer-events: none;
    }

    .pro-call-btn {
        background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
        color: #ffffff !important;
        font-weight: 800;
        font-size: 1.25rem;
        padding: 12px 28px;
        border-radius: 50px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        text-decoration: none;
        box-shadow: 0 6px 20px rgba(220, 38, 38, 0.35);
        transition: all 0.3s ease;
        letter-spacing: 0.5px;
    }

    .pro-call-btn:hover {
        background: linear-gradient(135deg, #b91c1c 0%, #991b1b 100%);
        transform: translateY(-2px) scale(1.02);
        box-shadow: 0 10px 25px rgba(220, 38, 38, 0.45);
    }

    /* Reward Policy Section */
    .pro-reward-box {
        background: #f0fdf4;
        border: 1.5px dashed #22c55e;
        border-radius: 14px;
        padding: 16px;
        margin-bottom: 16px;
    }

    .pro-reward-step {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        padding: 8px 0;
        font-size: 13.5px;
        color: #334155;
        border-bottom: 1px solid #f1f5f9;
    }

    .pro-reward-step:last-child {
        border-bottom: none;
    }

    .pro-reward-icon {
        flex-shrink: 0;
        font-size: 1.1rem;
        margin-top: 2px;
    }

    @media (max-width: 768px) {
        .guidelines-main-title {
            font-size: 1.45rem;
        }
        .guidelines-wrapper {
            padding: 35px 0;
        }
        .pro-call-btn {
            font-size: 1.1rem;
            padding: 10px 20px;
            width: 100%;
        }
        .pro-rule-item {
            padding: 10px 12px;
        }
        .guidelines-lang-segmented .lang-switch-btn {
            font-size: 12px;
            padding: 6px 12px;
        }
    }
</style>

<section class="guidelines-wrapper" id="guidelines">
    <div class="container">

        <!-- Header Area -->
        <div class="text-center mb-4">
            <div class="guidelines-pill-badge">
                <i class="bi bi-shield-check"></i> <span data-lang-key="guidelines_badge">Safety & Verification Policy</span>
            </div>
            <h2 class="guidelines-main-title" data-lang-key="guidelines_title">
                Important Customer Guidelines, Disclaimer & Reward Policy
            </h2>
            <p class="guidelines-subtitle" data-lang-key="guidelines_subtitle">
                Please verify all service charges and transactions with company management before payment
            </p>

            <!-- Language Switcher Bar -->
            <div class="guidelines-lang-segmented" role="group" aria-label="Guidelines Language Select">
                <button type="button" class="lang-switch-btn active" data-lang="en">
                    🇬🇧 English
                </button>
                <button type="button" class="lang-switch-btn" data-lang="hi">
                    🇮🇳 हिन्दी (Hindi)
                </button>
                <button type="button" class="lang-switch-btn" data-lang="or">
                    🇮🇳 ଓଡ଼ିଆ (Odia)
                </button>
            </div>
        </div>

        <!-- ==================================================== -->
        <!-- 1. ENGLISH CONTENT PANE -->
        <!-- ==================================================== -->
        <div class="guidelines-lang-pane active" id="guidelines-en">
            <div class="row g-4">
                <!-- Left Column: Guidelines & Disclaimer (8 Points) -->
                <div class="col-lg-7">
                    <div class="pro-glass-card">
                        <div class="pro-card-header">
                            <h3><i class="bi bi-shield-shaded"></i> IMPORTANT CUSTOMER GUIDELINES & DISCLAIMER</h3>
                            <span class="badge bg-warning text-dark px-2 py-1">Official Policy</span>
                        </div>
                        <div class="pro-card-body">
                            <div class="pro-advisory-box">
                                <strong>Dear Customer,</strong><br>
                                Our service center provides <strong>washing machine, refrigerator, AC and other appliance-related repair and service only</strong>. Customers are requested to strictly follow the guidelines below:
                            </div>

                            <div class="pro-rules-grid">
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">1</div>
                                    <p class="pro-rule-text">Our technicians/mechanics are authorized to perform <strong>only service-related work assigned by the company</strong>.</p>
                                </div>
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">2</div>
                                    <p class="pro-rule-text">If any technician asks you for money for <strong>personal work, personal transaction, loan, advance, purchase, or any work unrelated to your service</strong>, please do not make any payment without first confirming with the company.</p>
                                </div>
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">3</div>
                                    <p class="pro-rule-text">If any technician makes a personal promise, offers a personal service, asks for personal financial help, or attempts to create any personal transaction, <strong>contact the company immediately</strong>.</p>
                                </div>
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">4</div>
                                    <p class="pro-rule-text"><strong>Do not make any payment</strong> to a technician for work or services that have not been officially confirmed by the company.</p>
                                </div>
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">5</div>
                                    <p class="pro-rule-text">If you have any doubt regarding <strong>service charges, spare parts, additional work, or payment</strong>, contact the company directly before making payment.</p>
                                </div>
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">6</div>
                                    <p class="pro-rule-text">Any personal transaction between a customer and technician without prior company confirmation is <strong>a private matter between concerned individuals and not an official company transaction</strong>.</p>
                                </div>
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">7</div>
                                    <p class="pro-rule-text"><strong>The company/owner will not be responsible</strong> for any loss arising from an unauthorized personal transaction or payment made directly to a technician.</p>
                                </div>
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">8</div>
                                    <p class="pro-rule-text">For your safety and protection, <strong>always confirm with the company before making payment or agreeing to additional work</strong>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Official Helpline & Reporting Reward Policy -->
                <div class="col-lg-5">
                    <div class="d-flex flex-column gap-4">

                        <!-- Official Helpline Card -->
                        <div class="pro-contact-card">
                            <div class="d-inline-flex align-items-center gap-2 text-danger fw-bold mb-2">
                                <i class="bi bi-telephone-inbound-fill fs-5"></i>
                                <span class="text-uppercase small tracking-wide">Official Contact Number</span>
                            </div>
                            <h4 class="fw-bold text-dark mb-1">Payment & Service Verification</h4>
                            <p class="text-muted small mb-3">
                                Speak directly to the company representative before making any payment:
                            </p>
                            <div class="mb-3">
                                <a href="tel:+917752083960" class="pro-call-btn">
                                    <i class="bi bi-telephone-fill"></i> 7752083960
                                </a>
                            </div>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="https://wa.me/917752083960?text=Hello%20Hansraj%20Enterprises,%20I%20want%20to%20verify%20my%20service/payment" class="btn btn-sm btn-success rounded-pill px-3 fw-semibold" target="_blank">
                                    <i class="bi bi-whatsapp me-1"></i> WhatsApp Verification
                                </a>
                            </div>
                            <p class="small text-muted mb-0 mt-3 pt-2 border-top">
                                🛡️ <em>Your safety and satisfaction are our priority. Thank you for choosing our Service Center.</em>
                            </p>
                        </div>

                        <!-- Reporting & Reward Policy Card -->
                        <div class="pro-glass-card">
                            <div class="pro-card-header reward-style">
                                <h3><i class="bi bi-gift-fill"></i> CUSTOMER REPORTING & REWARD POLICY</h3>
                                <span class="badge bg-light text-success px-2 py-1">Reward System</span>
                            </div>
                            <div class="pro-card-body">
                                <div class="pro-reward-box">
                                    <h5 class="fw-bold text-success mb-1 fs-6">
                                        <i class="bi bi-award-fill me-1"></i> Earn Discount as Token of Appreciation
                                    </h5>
                                    <p class="small text-muted mb-0">
                                        Help maintain transparency and protect fellow customers by reporting unauthorized demands.
                                    </p>
                                </div>

                                <div class="pro-reward-step">
                                    <i class="bi bi-record-circle-fill text-danger pro-reward-icon"></i>
                                    <div><strong>Record Evidence:</strong> Record conversation or relevant evidence (where legally permitted) and send directly to <strong>7752083960</strong>.</div>
                                </div>
                                <div class="pro-reward-step">
                                    <i class="bi bi-tag-fill text-success pro-reward-icon"></i>
                                    <div><strong>Discount Reward:</strong> After verification, the company may provide a <strong>special discount on your service charge</strong> as a token of appreciation.</div>
                                </div>
                                <div class="pro-reward-step">
                                    <i class="bi bi-shield-fill-exclamation text-warning pro-reward-icon"></i>
                                    <div><strong>Strict Action:</strong> The owner/company holds sole authority to take strict disciplinary action against offending technicians.</div>
                                </div>
                                <div class="pro-reward-step">
                                    <i class="bi bi-info-circle-fill text-primary pro-reward-icon"></i>
                                    <div><strong>Do Not Confront:</strong> Please do not argue with the technician. Simply report the matter directly to <strong>7752083960</strong> with evidence.</div>
                                </div>

                                <div class="mt-3">
                                    <a href="https://wa.me/917752083960?text=Hello%20Hansraj%20Enterprises,%20I%20want%20to%20report%20a%20technician%20matter%20with%20evidence" class="btn btn-outline-success w-100 rounded-pill fw-bold btn-sm py-2" target="_blank">
                                        <i class="bi bi-whatsapp me-1"></i> Report with Evidence via WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- ==================================================== -->
        <!-- 2. HINDI CONTENT PANE -->
        <!-- ==================================================== -->
        <div class="guidelines-lang-pane" id="guidelines-hi">
            <div class="row g-4">
                <!-- Left Column: Hindi Guidelines -->
                <div class="col-lg-7">
                    <div class="pro-glass-card">
                        <div class="pro-card-header">
                            <h3><i class="bi bi-shield-shaded"></i> महत्वपूर्ण ग्राहक दिशानिर्देश एवं सूचना</h3>
                            <span class="badge bg-warning text-dark px-2 py-1">आधिकारिक सूचना</span>
                        </div>
                        <div class="pro-card-body">
                            <div class="pro-advisory-box">
                                <strong>प्रिय ग्राहक,</strong><br>
                                हमारा सर्विस सेंटर केवल <strong>Washing Machine, Refrigerator, AC एवं अन्य घरेलू उपकरणों की सर्विस और रिपेयरिंग</strong> से संबंधित कार्य करता है। ग्राहकों से अनुरोध है कि नीचे दिए गए दिशानिर्देशों का पालन करें:
                            </div>

                            <div class="pro-rules-grid">
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">1</div>
                                    <p class="pro-rule-text">हमारे Technician/Mechanic को कंपनी द्वारा दिए गए <strong>केवल Service से संबंधित कार्य करने के लिए अधिकृत</strong> किया गया है।</p>
                                </div>
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">2</div>
                                    <p class="pro-rule-text">यदि कोई Technician/Mechanic आपसे <strong>Personal काम, Personal लेन-देन, उधार, Advance, खरीदारी या Service के अलावा किसी अन्य काम के लिए पैसे मांगता है</strong>, तो बिना कंपनी से पुष्टि किए कोई भी भुगतान न करें।</p>
                                </div>
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">3</div>
                                    <p class="pro-rule-text">यदि कोई Technician व्यक्तिगत रूप से कोई काम करने, सुविधा देने, पैसे लेने या Personal Transaction करने की बात करता है, तो <strong>कृपया तुरंत कंपनी से संपर्क करके इसकी पुष्टि करें</strong>।</p>
                                </div>
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">4</div>
                                    <p class="pro-rule-text">कंपनी की जानकारी या अनुमति के बिना <strong>किसी Technician को किसी अतिरिक्त काम या Personal काम के लिए भुगतान न करें</strong>।</p>
                                </div>
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">5</div>
                                    <p class="pro-rule-text">Service Charge, Spare Parts, Extra Work, Payment या किसी भी Service-related जानकारी के लिए <strong>सीधे कंपनी के Official Number पर संपर्क करें</strong>।</p>
                                </div>
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">6</div>
                                    <p class="pro-rule-text">ग्राहक और Technician के बीच कंपनी की पूर्व अनुमति/पुष्टि के बिना किया गया कोई भी Personal Transaction, <strong>कंपनी का आधिकारिक लेन-देन नहीं माना जाएगा</strong>।</p>
                                </div>
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">7</div>
                                    <p class="pro-rule-text">कंपनी की जानकारी या अनुमति के बिना किए गए किसी भी Personal Payment या Transaction से होने वाले <strong>नुकसान की जिम्मेदारी कंपनी/Owner की नहीं होगी</strong>।</p>
                                </div>
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">8</div>
                                    <p class="pro-rule-text">अपनी सुरक्षा के लिए किसी भी प्रकार का Payment करने या Extra Work करवाने से पहले <strong>कंपनी से पुष्टि अवश्य करें</strong>।</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Hindi Official Helpline & Reward Policy -->
                <div class="col-lg-5">
                    <div class="d-flex flex-column gap-4">

                        <!-- Helpline Card -->
                        <div class="pro-contact-card">
                            <div class="d-inline-flex align-items-center gap-2 text-danger fw-bold mb-2">
                                <i class="bi bi-telephone-inbound-fill fs-5"></i>
                                <span class="text-uppercase small tracking-wide">आधिकारिक संपर्क नंबर</span>
                            </div>
                            <h4 class="fw-bold text-dark mb-1">पेमेंट एवं सर्विस की सीधी पुष्टि</h4>
                            <p class="text-muted small mb-3">
                                किसी भी प्रकार का भुगतान करने से पहले कंपनी प्रतिनिधि से सीधे बात करें:
                            </p>
                            <div class="mb-3">
                                <a href="tel:+917752083960" class="pro-call-btn">
                                    <i class="bi bi-telephone-fill"></i> 7752083960
                                </a>
                            </div>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="https://wa.me/917752083960?text=नमस्ते%20हंसराज%20एंटरप्राइजेज,%20मुझे%20सर्विस/पेमेंट%20की%20पुष्टि%20करनी%20है" class="btn btn-sm btn-success rounded-pill px-3 fw-semibold" target="_blank">
                                    <i class="bi bi-whatsapp me-1"></i> व्हाट्सएप द्वारा पुष्टि
                                </a>
                            </div>
                            <p class="small text-muted mb-0 mt-3 pt-2 border-top">
                                🛡️ <em>आपकी सुरक्षा और संतुष्टि हमारे लिए महत्वपूर्ण है। हमारी Service का चयन करने के लिए धन्यवाद।</em>
                            </p>
                        </div>

                        <!-- Hindi Reward Policy -->
                        <div class="pro-glass-card">
                            <div class="pro-card-header reward-style">
                                <h3><i class="bi bi-gift-fill"></i> ग्राहक रिपोर्टिंग एवं इनाम नीति</h3>
                                <span class="badge bg-light text-success px-2 py-1">इनाम नीति</span>
                            </div>
                            <div class="pro-card-body">
                                <div class="pro-reward-box">
                                    <h5 class="fw-bold text-success mb-1 fs-6">
                                        <i class="bi bi-award-fill me-1"></i> रिपोर्ट करने पर सर्विस चार्ज में डिस्काउंट
                                    </h5>
                                    <p class="small text-muted mb-0">
                                        अनधिकृत लेन-देन की सूचना देकर अन्य ग्राहकों की सुरक्षा और पारदर्शिता बनाए रखने में सहयोग करें।
                                    </p>
                                </div>

                                <div class="pro-reward-step">
                                    <i class="bi bi-record-circle-fill text-danger pro-reward-icon"></i>
                                    <div><strong>सबूत रिकॉर्ड करें:</strong> जहाँ कानूनी अनुमति हो, बातचीत या सबूत की Recording करके सीधे <strong>7752083960</strong> पर भेजें।</div>
                                </div>
                                <div class="pro-reward-step">
                                    <i class="bi bi-tag-fill text-success pro-reward-icon"></i>
                                    <div><strong>इनाम / डिस्काउंट:</strong> जांच और पुष्टि के बाद कंपनी ग्राहक को <strong>Applicable Service Charge में Discount</strong> दे सकती है।</div>
                                </div>
                                <div class="pro-reward-step">
                                    <i class="bi bi-shield-fill-exclamation text-warning pro-reward-icon"></i>
                                    <div><strong>सख्त कार्रवाई:</strong> नियमों का उल्लंघन करने वाले Technician पर Disciplinary Action/Punishment लेने का पूरा अधिकार Owner/Company का रहेगा।</div>
                                </div>
                                <div class="pro-reward-step">
                                    <i class="bi bi-info-circle-fill text-primary pro-reward-icon"></i>
                                    <div><strong>विवाद न करें:</strong> Technician से बहस या विवाद न करें। केवल सबूत के साथ सीधे कंपनी को <strong>7752083960</strong> पर सूचना दें।</div>
                                </div>

                                <div class="mt-3">
                                    <a href="https://wa.me/917752083960?text=नमस्ते%20हंसराज%20एंटरप्राइजेज,%20मुझे%20टेक्नीशियन%20के%20बारे%20में%20सबूत%20के%20साथ%20रिपोर्ट%20करना%20है" class="btn btn-outline-success w-100 rounded-pill fw-bold btn-sm py-2" target="_blank">
                                        <i class="bi bi-whatsapp me-1"></i> व्हाट्सएप पर सबूत भेजें / रिपोर्ट करें
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- ==================================================== -->
        <!-- 3. ODIA CONTENT PANE -->
        <!-- ==================================================== -->
        <div class="guidelines-lang-pane" id="guidelines-or">
            <div class="row g-4">
                <!-- Left Column: Odia Guidelines -->
                <div class="col-lg-7">
                    <div class="pro-glass-card">
                        <div class="pro-card-header">
                            <h3><i class="bi bi-shield-shaded"></i> ଗ୍ରାହକଙ୍କ ପାଇଁ ଜରୁରୀ ନିର୍ଦ୍ଦେଶ ଓ ସୂଚନା</h3>
                            <span class="badge bg-warning text-dark px-2 py-1">ଅଫିସିଆଲ୍ ନିର୍ଦ୍ଦେଶ</span>
                        </div>
                        <div class="pro-card-body">
                            <div class="pro-advisory-box">
                                <strong>ପ୍ରିୟ ଗ୍ରାହକ,</strong><br>
                                ଆମ Service Center ରେ କେବଳ <strong>Washing Machine, Refrigerator, AC ଏବଂ ଅନ୍ୟାନ୍ୟ ଘରୋଇ ଉପକରଣର Service ଓ Repairing</strong> ସମ୍ବନ୍ଧୀୟ କାମ କରାଯାଏ। ଗ୍ରାହକମାନଙ୍କୁ ଅନୁରୋଧ, ଦୟାକରି ନିମ୍ନଲିଖିତ ନିୟମଗୁଡ଼ିକ ପାଳନ କରନ୍ତୁ:
                            </div>

                            <div class="pro-rules-grid">
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">1</div>
                                    <p class="pro-rule-text">ଆମ Technician/Mechanic ମାନେ କେବଳ Company ଦ୍ୱାରା ଦିଆଯାଇଥିବା <strong>Service ସମ୍ବନ୍ଧୀୟ କାମ କରିବା ପାଇଁ ଅଧିକୃତ</strong>।</p>
                                </div>
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">2</div>
                                    <p class="pro-rule-text">ଯଦି କୌଣସି Technician/Mechanic ଆପଣଙ୍କୁ <strong>Personal କାମ, ବ୍ୟକ୍ତିଗତ ଟଙ୍କା ନେବା-ଦେବା, ଧାର, Advance, କିଣାକିଣି ବା Service ବାହାରେ ଅନ୍ୟ କାମ ପାଇଁ ଟଙ୍କା ମାଗନ୍ତି</strong>, ତେବେ Company ସହିତ ନିଶ୍ଚିତ ନହୋଇ ଟଙ୍କା ଦିଅନ୍ତୁ ନାହିଁ।</p>
                                </div>
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">3</div>
                                    <p class="pro-rule-text">କୌଣସି Technician ଯଦି Personal ଭାବେ କାମ କରିଦେବା, ଟଙ୍କା ନେବା କିମ୍ବା Personal Transaction କରିବାକୁ କହନ୍ତି, ତେବେ <strong>ପ୍ରଥମେ Company ସହିତ ଯୋଗାଯୋଗ କରି ନିଶ୍ଚିତ କରନ୍ତୁ</strong>।</p>
                                </div>
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">4</div>
                                    <p class="pro-rule-text">Company ର ଅନୁମତି କିମ୍ବା ନିଶ୍ଚିତକରଣ ବିନା <strong>କୌଣସି Technician ଙ୍କୁ Service ବାହାରେ ଅନ୍ୟ କାମ ପାଇଁ ଟଙ୍କା ଦିଅନ୍ତୁ ନାହିଁ</strong>।</p>
                                </div>
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">5</div>
                                    <p class="pro-rule-text">Service Charge, Spare Parts, Extra Work, Payment ବା ଅନ୍ୟ Service-related ସୂଚନା ପାଇଁ <strong>ସିଧାସଳଖ Company ର Official Number ରେ ଯୋଗାଯୋଗ କରନ୍ତୁ</strong>।</p>
                                </div>
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">6</div>
                                    <p class="pro-rule-text">Customer ଏବଂ Technician ମଧ୍ୟରେ Company ର ପୂର୍ବ ଅନୁମତି ବିନା ହେଉଥିବା Personal Transaction, <strong>Company ର Official Transaction ଭାବେ ଗଣାଯିବ ନାହିଁ</strong>।</p>
                                </div>
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">7</div>
                                    <p class="pro-rule-text">Company ର ଅନୁମତି ବିନା କରାଯାଇଥିବା Personal Payment କିମ୍ବା Transaction ଯୋଗୁଁ ହେଉଥିବା <strong>କ୍ଷତି ପାଇଁ Company/Owner ଦାୟୀ ରହିବେ ନାହିଁ</strong>।</p>
                                </div>
                                <div class="pro-rule-item">
                                    <div class="pro-rule-num">8</div>
                                    <p class="pro-rule-text">ଆପଣଙ୍କ ସୁରକ୍ଷା ପାଇଁ କୌଣସି Payment କରିବା ବା Extra Work କରାଇବା ପୂର୍ବରୁ <strong>Company ସହିତ ନିଶ୍ଚିତ ଭାବେ କଥା ହୁଅନ୍ତୁ</strong>।</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Odia Official Helpline & Reward Policy -->
                <div class="col-lg-5">
                    <div class="d-flex flex-column gap-4">

                        <!-- Helpline Card -->
                        <div class="pro-contact-card">
                            <div class="d-inline-flex align-items-center gap-2 text-danger fw-bold mb-2">
                                <i class="bi bi-telephone-inbound-fill fs-5"></i>
                                <span class="text-uppercase small tracking-wide">ଅଫିସିଆଲ୍ ଯୋଗାଯୋଗ ନମ୍ବର</span>
                            </div>
                            <h4 class="fw-bold text-dark mb-1">ସର୍ଭିସ୍ ଓ ପେମେଣ୍ଟ ଯାଞ୍ଚ କରନ୍ତୁ</h4>
                            <p class="text-muted small mb-3">
                                କୌଣସି Payment କରିବା ପୂର୍ବରୁ ସିଧାସଳଖ Company ପ୍ରତିନିଧିଙ୍କ ସହ କଥା ହୁଅନ୍ତୁ:
                            </p>
                            <div class="mb-3">
                                <a href="tel:+917752083960" class="pro-call-btn">
                                    <i class="bi bi-telephone-fill"></i> 7752083960
                                </a>
                            </div>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="https://wa.me/917752083960?text=ନମସ୍କାର%20ହଂସରାଜ%20ଏଣ୍ଟରପ୍ରାଇଜେସ୍,%20ମୁଁ%20ସର୍ଭିସ୍/ପେମେଣ୍ଟ%20ନିଶ୍ଚିତ%20କରିବାକୁ%20ଚାହୁଁଛି" class="btn btn-sm btn-success rounded-pill px-3 fw-semibold" target="_blank">
                                    <i class="bi bi-whatsapp me-1"></i> ହ୍ୱାଟ୍ସଆପ୍ ଯାଞ୍ଚ
                                </a>
                            </div>
                            <p class="small text-muted mb-0 mt-3 pt-2 border-top">
                                🛡️ <em>ଆପଣଙ୍କ ସୁରକ୍ଷା ଏବଂ ସନ୍ତୁଷ୍ଟି ଆମର ପ୍ରାଥମିକତା। ଆମ Service Center କୁ ବାଛିଥିବାରୁ ଧନ୍ୟବାଦ।</em>
                            </p>
                        </div>

                        <!-- Odia Reward Policy -->
                        <div class="pro-glass-card">
                            <div class="pro-card-header reward-style">
                                <h3><i class="bi bi-gift-fill"></i> ଗ୍ରାହକ ରିପୋର୍ଟିଂ ଏବଂ ପୁରସ୍କାର ନୀତି</h3>
                                <span class="badge bg-light text-success px-2 py-1">ପୁରସ୍କାର ନୀତି</span>
                            </div>
                            <div class="pro-card-body">
                                <div class="pro-reward-box">
                                    <h5 class="fw-bold text-success mb-1 fs-6">
                                        <i class="bi bi-award-fill me-1"></i> ରିପୋର୍ଟ କରିବା ଦ୍ୱାରା ସର୍ଭିସ୍ ଚାର୍ଜ ରେ ରିହାତି
                                    </h5>
                                    <p class="small text-muted mb-0">
                                        ଅନ୍ୟ ଗ୍ରାହକଙ୍କ ସୁରକ୍ଷା ଏବଂ ସ୍ୱଚ୍ଛତା ବଜାୟ ରଖିବା ପାଇଁ ଅନଧିକୃତ କାର୍ଯ୍ୟର ସୂଚନା ଦିଅନ୍ତୁ।
                                    </p>
                                </div>

                                <div class="pro-reward-step">
                                    <i class="bi bi-record-circle-fill text-danger pro-reward-icon"></i>
                                    <div><strong>ପ୍ରମାଣ ରେକର୍ଡିଂ କରନ୍ତୁ:</strong> ଆଇନ ଅନୁମତି ଦେଉଥିବା ସ୍ଥାନରେ କଥାବାର୍ତ୍ତା ବା ପ୍ରମାଣ Recording କରି <strong>7752083960</strong> କୁ ପଠାନ୍ତୁ।</div>
                                </div>
                                <div class="pro-reward-step">
                                    <i class="bi bi-tag-fill text-success pro-reward-icon"></i>
                                    <div><strong>ପୁରସ୍କାର / ରିହାତି:</strong> ଯାଞ୍ଚ ପରେ Company ଗ୍ରାହକଙ୍କୁ <strong>Applicable Service Charge ରେ Discount</strong> ପ୍ରଦାନ କରିପାରେ।</div>
                                </div>
                                <div class="pro-reward-step">
                                    <i class="bi bi-shield-fill-exclamation text-warning pro-reward-icon"></i>
                                    <div><strong>କଠୋର କାର୍ଯ୍ୟାନୁଷ୍ଠାନ:</strong> ନିୟମ ଉଲ୍ଲଂଘନ କରୁଥିବା Technician ଉପରେ Disciplinary Action ନେବାର ସମ୍ପୂର୍ଣ୍ଣ ଅଧିକାର Owner/Company ଙ୍କର ରହିବ।</div>
                                </div>
                                <div class="pro-reward-step">
                                    <i class="bi bi-info-circle-fill text-primary pro-reward-icon"></i>
                                    <div><strong>ବିବାଦ କରନ୍ତୁ ନାହିଁ:</strong> Technician ଙ୍କ ସହିତ ଯୁକ୍ତିତର୍କ କରନ୍ତୁ ନାହିଁ। ଉପଲବ୍ଧ ପ୍ରମାଣ ସହିତ <strong>7752083960</strong> ରେ ଜଣାନ୍ତୁ।</div>
                                </div>

                                <div class="mt-3">
                                    <a href="https://wa.me/917752083960?text=ନମସ୍କାର%20ହଂସରାଜ%20ଏଣ୍ଟରପ୍ରାଇଜେସ୍,%20ମୁଁ%20ଟେକ୍ନିସିଆନ୍%20ଙ୍କ%20ସମ୍ବନ୍ଧରେ%20ପ୍ରମାଣ%20ସହ%20ରିପୋର୍ଟ%20କରିବାକୁ%20ଚାହୁଁଛି" class="btn btn-outline-success w-100 rounded-pill fw-bold btn-sm py-2" target="_blank">
                                        <i class="bi bi-whatsapp me-1"></i> ପ୍ରମାଣ ସହ ହ୍ୱାଟ୍ସଆପ୍ ରେ ରିପୋର୍ଟ କରନ୍ତୁ
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
