<section id="event" class="event-summary-section" style="--section-max-width: 1100px; --section-padding: 80px 20px;">
<style>
    .event-summary-section {
    font-family: "Poppins", Arial, sans-serif;
    background-color: #f6f9f6;
    color: #222;
    padding: var(--section-padding, 60px 20px);
    width: 100%;
    display: flex;
    justify-content: center;
    }

    .event-summary-container {
    width: 100%;
    max-width: var(--section-max-width, 1000px);
    margin: 0 auto;
    }

    .event-summary-title {
    text-align: center;
    color: #3e6b28;
    font-size: 26px;
    font-weight: 700;
    margin-bottom: 10px;
    }

    .event-summary-subtitle {
    text-align: center;
    color: #555;
    font-size: 14px;
    line-height: 1.5;
    max-width: 650px;
    margin: 0 auto 40px auto;
    }

    .event-card {
    background: #fff;
    border-radius: 20px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: stretch;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    padding: 40px;
    margin-bottom: 10px;
    }

    .event-info {
    width: 100%;
    max-width: 480px;
    padding-right: 30px;
    flex: 1;
    }

    .event-info h2 {
    color: #5a9e4c;
    font-weight: 600;
    font-size: 27px;
    margin-bottom: 10px;
    }

    .event-info h1 {
    font-size: 30px;
    font-weight: 700;
    margin-bottom: 10px;
    }

    .event-info p {
    font-size: 16px;
    color: #555;
    line-height: 1.5;
    margin-bottom: 30px;
    }

    .event-button {
    display: inline-flex;
    align-items: center;
    background-color: #4a8f35;
    color: #fff;
    border: none;
    border-radius: 50px;
    padding: 15px 40px;
    font-size: 15px;
    text-decoration: none;
    transition: background 0.3s;
    cursor: pointer;
    }

    .event-button:hover {
    background-color: #3e6b28;
    }

    .event-image {
    flex: 1;
    position: relative;
    border-radius: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f0f0f0;
    min-width: 280px;
    }

    .event-image img {
    width: 100%;
    height: auto;
    max-height: 320px;
    object-fit: cover;
    border-radius: 15px;
    display: block;
    transition: transform 0.3s ease;
    }

    .event-image img:hover {
    transform: scale(1.02);
    }

    .arrow-button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(255, 255, 255, 0.95);
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
    font-size: 20px;
    color: #4a8f35;
    cursor: pointer;
    transition: all 0.2s ease-in-out;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
    z-index: 5;
    }

    .arrow-button:hover {
    background-color: #4a8f35;
    color: #fff;
    transform: translateY(-50%) scale(1.1);
    }

    .arrow-left {
    left: 15px;
    }

    .arrow-right {
    right: 15px;
    }

    .steps {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    flex-wrap: wrap;
    padding-top: 10px;
    }

    .step {
    flex: 1;
    min-width: 150px;
    text-align: left;
    padding-top: 10px;
    border-top: 3px solid #e0e0e0;
    }

    .step:first-child {
    border-top-color: #3e6b28;
    }

    .step h4 {
    color: #000;
    font-size: 18px;
    font-weight: 700;
    margin-top: 10px;
    margin-bottom: 10px;
    }

    .step p {
    font-size: 13px;
    color: #444;
    line-height: 1.5;
    max-width: 90%;
    }

</style>

<div class="event-summary-container">
    <h1 class="event-summary-title">Event Summary</h1>
    <p class="event-summary-subtitle">
    We give you a brief overview of the event to give you a glimpse of what we're doing
    in the Green Haven Project, download the detailed PDF to see how you can get involved
    </p>

    <div class="event-card">
    <div class="event-info">
        <h2>26/04/2024</h2>
        <h1>08:00 – 11:00 WIB</h1>
        <p>
        Join the impactful journey of planting mangroves, where you'll learn, collaborate
        with locals, earn recognition, and share your story through media coverage.
        </p>
        <a href="#" class="event-button">View Event Details</a>
    </div>

    <div class="event-image">
        <button class="arrow-button arrow-left" aria-label="Previous">&lt;</button>
        <img src='{{ asset("image/e1.png") }}' alt="Mangrove Planting" />
        <button class="arrow-button arrow-right" aria-label="Next">&gt;</button>
    </div>
    </div>

    <div class="steps">
    <div class="step">
        <h4>01</h4>
        <p>Introducing the beauty of mangroves on a journey to the planting site.</p>
    </div>
    <div class="step">
        <h4>02</h4>
        <p>Working together with local farmers while planting each mangrove.</p>
    </div>
    <div class="step">
        <h4>03</h4>
        <p>Exploring the wonders of mangrove ecotourism, an educational adventure.</p>
    </div>
    <div class="step">
        <h4>04</h4>
        <p>Receive a plaque & badge, a mark of honor for every tree you plant.</p>
    </div>
    <div class="step">
        <h4>05</h4>
        <p>Coverage & documentation by news media, share your story of change!</p>
    </div>
    </div>
</div>
</section>
