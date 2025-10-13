<section id="sponsorship" class="sponsorship-section">
<style>
    .sponsorship-section {
    font-family: "Poppins", Arial, sans-serif;
    background-color: #ffffff;
    padding: 80px 20px;
    color: #1a1a1a;
    display: flex;
    justify-content: center;
    }

    .sponsorship-container {
    width: 100%;
    max-width: 1100px;
    }

    .sponsorship-title {
    text-align: center;
    font-size: 28px;
    font-weight: 700;
    color: #244c85;
    margin-bottom: 8px;
    }

    .sponsorship-subtitle {
    text-align: center;
    font-size: 14px;
    color: #555;
    line-height: 1.6;
    max-width: 700px;
    margin: 0 auto 40px;
    }

    /* Table base */
    table {
    width: 100%;
    border-collapse: collapse;
    border-radius: 12px;
    overflow: hidden;
    margin-bottom: 40px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
    }

    th,
    td {
    text-align: center;
    padding: 14px 10px;
    font-size: 14px;
    border-bottom: 1px solid #e5e9ef;
    }

    th {
    background-color: #e9f3ff;
    color: #1f3f72;
    font-weight: 600;
    }

    tr:last-child td {
    border-bottom: none;
    }

    td:first-child,
    th:first-child {
    text-align: left;
    padding-left: 20px;
    }

    /* Membership*/
    .tier-cell {
    display: flex;
    align-items: center;
    gap: 10px;
    }

    .tier-cell img {
    width: 22px;
    height: 22px;
    object-fit: contain;
    }

    /* Buttons */
    .sponsors-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background-color: #1f6de0;
    color: #fff;
    font-size: 13px;
    font-weight: 500;
    border: none;
    border-radius: 50px;
    padding: 10px 20px;
    cursor: pointer;
    transition: 0.3s;
    text-decoration: none;
    }

    .sponsor-btn:hover {
    background-color: #174fb1;
    }

    .sponsor-btn span {
    margin-left: 6px;
    font-weight: bold;
    }

    .table-title {
    font-size: 18px;
    font-weight: 600;
    text-align: center;
    color: #222;
    margin-bottom: 16px;
    }

    /* Corporate */
    .corporate-table {
    width: 100%;
    border-collapse: collapse;
    text-align: center;
    font-family: Arial, sans-serif;
    background-color: #f9fbff;
    border-radius: 12px;
    overflow: hidden;
    }

    .corporate-table th,
    .corporate-table td {
    padding: 14px 10px;
    border-bottom: 1px solid #e0e6ef;
    height: 55px;
    vertical-align: middle;
    text-align: center;
    }

    .corporate-table th {
    background-color: #e8f1ff;
    color: #1f6de0;
    font-weight: 600;
    }

    /* Baris tombol dengan latar biru tua */
    .action-row td {
    background-color: #1f6de0;
    border-bottom: none;
    text-align: center;
    vertical-align: middle;
    height: 60px;
    }

    /* Tombol */
    .sponsor-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background-color: transparent;
    color: #ffffff;
    font-size: 13px;
    font-weight: 500;
    border-radius: 50px;
    padding: 8px 20px;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 1px solid #ffffff;
    }

    .sponsor-btn:hover {
    background-color: #ffffff;
    color: #1f6de0;
    }

    .sponsor-btn span {
    margin-left: 6px;
    font-weight: bold;
    }

    .sponsor-btn.main {
    background-color: #174fb1;
    border-color: #174fb1;
    }

    .sponsor-btn.main:hover {
    background-color: #ffffff;
    color: #174fb1;
    }
</style>
<div class="sponsorship-container">
    <h2 class="sponsorship-title">Sponsorship Packages</h2>
    <p class="sponsorship-subtitle">
    Our sponsorship package offers branding, promotional opportunities, and visibility at our event,
    ideal for enhancing company presence and community engagement.
    </p>

    <h3 class="table-title">Personal Sponsorship Package</h3>
    <table>
    <thead>
        <tr>
        <th>Membership Tier</th>
        <th>Min. Seeds</th>
        <th>Min. Buy</th>
        <th>Benefits</th>
        <th>Donors</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>
            <div class="tier-cell">
            <img src="{{ asset('image/l6.png') }}" alt="Seedling Scout" />
            Seedling Scout
            </div>
        </td>
        <td>5 Seeds</td>
        <td>IDR 75K</td>
        <td>Badge</td>
        <td>4,900 Donors</td>
        <td><a href="#" class="sponsors-btn">Support Our Mission <span>›</span></a></td>
        </tr>
        <tr>
        <td>
            <div class="tier-cell">
            <img src="{{ asset('image/l5.png') }}" alt="Sapling Savior" />
            Sapling Savior
            </div>
        </td>
        <td>10 Seeds</td>
        <td>IDR 150K</td>
        <td>Badge + Pin</td>
        <td>4,300 Donors</td>
        <td><a href="#" class="sponsors-btn">Support Our Mission <span>›</span></a></td>
        </tr>
        <tr>
        <td>
            <div class="tier-cell">
            <img src="{{ asset('image/l3.png') }}" alt="Tree Titan" />
            Tree Titan
            </div>
        </td>
        <td>20 Seeds</td>
        <td>IDR 300K</td>
        <td>Badge + Pin</td>
        <td>15,000 Donors</td>
        <td><a href="#" class="sponsors-btn">Support Our Mission <span>›</span></a></td>
        </tr>
        <tr>
        <td>
            <div class="tier-cell">
            <img src="{{ asset('image/l4.png') }}" alt="Mangrove Master" />
            Mangrove Master
            </div>
        </td>
        <td>50 Seeds</td>
        <td>IDR 750K</td>
        <td>Badge + Pin + Bag</td>
        <td>5,000 Donors</td>
        <td><a href="#" class="sponsors-btn">Support Our Mission <span>›</span></a></td>
        </tr>
        <tr>
        <td>
            <div class="tier-cell">
            <img src="{{ asset('image/l2.png') }}" alt="Guardian Of The Grove" />
            Guardian Of The Grove
            </div>
        </td>
        <td>100 Seeds</td>
        <td>IDR 1,500K</td>
        <td>Badge + Pin + Bag</td>
        <td>300 Donors</td>
        <td><a href="#" class="sponsors-btn">Support Our Mission <span>›</span></a></td>
        </tr>
        <tr>
        <td>
            <div class="tier-cell">
            <img src="{{ asset('image/l1.png') }}" alt="Mangrove Maven" />
            Mangrove Maven
            </div>
        </td>
        <td>200 Seeds</td>
        <td>IDR 3,000K</td>
        <td>Badge + Pin + Bag</td>
        <td>10 Donors</td>
        <td><a href="#" class="sponsors-btn">Support Our Mission <span>›</span></a></td>
        </tr>
    </tbody>
</table>

<h3 class="table-title">Corporate Sponsorship Package</h3>
    <table class="corporate-table">
        <thead>
            <tr>
            <th>Benefits</th>
            <th>Eco Trailblazers</th>
            <th>Green Innovators</th>
            <th>Eco Vanguard</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>Price</td>
            <td>15 Million IDR</td>
            <td>30 Million IDR</td>
            <td>45 Million IDR</td>
            </tr>
            <tr>
            <td>CO₂ Sequestration</td>
            <td>22.5 ton/year</td>
            <td>45 ton/year</td>
            <td>67.5 ton/year</td>
            </tr>
            <tr>
            <td>Number of Trees</td>
            <td>1000 Trees</td>
            <td>2000 Trees</td>
            <td>3000 Trees</td>
            </tr>
            <tr>
            <td>Logo on JCI Banner</td>
            <td>✔</td>
            <td>✔</td>
            <td>✔</td>
            </tr>
            <tr>
            <td>Logo on Communal Stainless Plate</td>
            <td>✔</td>
            <td>✔</td>
            <td>✔</td>
            </tr>
            <tr>
            <td>Considered as Main Sponsor</td>
            <td>—</td>
            <td>✔</td>
            <td>✔</td>
            </tr>
            <tr>
            <td>Dedicated Stainless Plate</td>
            <td>—</td>
            <td>✔</td>
            <td>✔</td>
            </tr>
            <tr>
            <td>Report Update on Planted Trees</td>
            <td>—</td>
            <td>✔</td>
            <td>✔</td>
            </tr>
            <tr>
            <td>Logo on Event Clothings</td>
            <td>—</td>
            <td>—</td>
            <td>✔</td>
            </tr>
            <tr class="action-row">
            <td>
                <a href="#" class="sponsor-btn main">Make a Donation <span>›</span></a>
            </td>
            <td>
                <a href="#" class="sponsor-btn">Support Our Mission <span>›</span></a>
            </td>
            <td>
                <a href="#" class="sponsor-btn">Support Our Mission <span>›</span></a>
            </td>
            <td>
                <a href="#" class="sponsor-btn">Support Our Mission <span>›</span></a>
            </td>
            </tr>
        </tbody>
    </table>
</section>
