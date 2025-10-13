<style>
.sponsors-section {
    background-color: #f4f4f4;
    padding: 0px;
    font-family: 'Poppins', sans-serif;
    text-align: center;
    color: #1f3c1d;
}
.sponsors-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 60px;
    position: relative;
    max-width: 1200px;
    margin: auto;
}
.sponsor-item img {
    width: 180px;
    height: auto;
    object-fit: contain;
    transition: transform 0.3s ease;
}
.sponsor-item img:hover {
    transform: scale(1.05);
}
</style>

<section class="sponsors-section">
    <div class="sponsors-container">
        <div class="sponsor-item">
        <img src="{{ asset('image/jala.png') }}" alt="Jala">
        </div>
        <div class="sponsor-item">
        <img src="{{ asset('image/efish.png') }}" alt="eFishery">
        </div>
        <div class="sponsor-item">
        <img src="{{ asset('image/aza.png') }}" alt="Azarine">
        </div>
        <div class="sponsor-item">
        <img src="{{ asset('image/kompas.png') }}" alt="Kompas">
        </div>
        <div class="sponsor-item">
        <img src="{{ asset('image/tribun.png') }}" alt="Tribunnews">
        </div>
        <div class="sponsor-item">
        <img src="{{ asset('image/jawa.png') }}" alt="Jawa Pos">
        </div>
    </div>
</section>
