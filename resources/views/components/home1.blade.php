<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Horizons Project</title>
    <style>
        body {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        background-color: #fff;
        color: #000;
        }

        .container {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        gap: auto;
        padding: 50px 222px 0;
        position: relative;

        box-sizing: border-box;
        }

        .left {
        flex: 1;
        padding-right: 0;
        box-sizing: border-box;
        }

        .tag {
        background-color: #f2f2f2;
        display: inline-block;
        padding: 10px 20px;
        border-radius: 20px;
        font-size: 14px;
        color: #333;
        }

        .title {
        font-size: 40px;
        font-weight: 700;
        line-height: 1.4;
        margin-top: 15px;
        margin-bottom: 20px;
        }

        .progress-card {
        background-color: #fff;
        padding: 15px 50px;
        border-radius: 12px;
        box-shadow: 0 1px 4px rgba(0,0,0,0.1);
        margin-bottom: 20px;
        width: fit-content;
        }

        .progress-top {
        display: flex;
        align-items: center;
        gap: 8px;
        }

        .count {
        color: #196a31;
        font-weight: 700;
        }

        .total {
        color: #555;
        font-size: 14px;
        }

        .mission-btn {
        margin-left: 30px;
        background-color: #196a31;
        color: white;
        border: none;
        border-radius: 20px;
        padding: 8px 18px;
        cursor: pointer;
        font-size: 14px;
        transition: 0.3s;
        }

        .mission-btn:hover {
        background-color: #145227;
        }

        .progress-bar {
        margin-top: 15px;
        height: 10px;
        background: #d8e5d8;
        border-radius: 10px;
        overflow: hidden;
        }

        .progress-fill {
        background: #196a31;
        height: 100%;
        border-radius: 10px;
        }

        .leaf-icon {
        width: 45px;
        height: 45px;
        object-fit: contain;
        }

        .mangrove-img {
        width: 729px;
        height: 249px;
        object-fit: cover;
        margin-top: 15px;
        display: block;
        }

        .divider {
        width: 1px;
        background-color: #ccc;
        height: 100%;
        position: absolute;
        left: 50%;
        top: 0;
        transform: translateX(-50%);
        opacity: 0.6;
        }

        .right {
        flex: 1;
        padding-left: 0;
        box-sizing: border-box;
        }

        .leaderboard-card {
        background-color: transparent;
        box-shadow: 0 1px 6px rgba(0,0,0,0.1);
        padding: 25px;
        width: 100%;
        margin-bottom: 0;
        }

        .leaderboard-title {
        font-size: 40px;
        font-weight: 700;
        margin-bottom: 15px;
        }

        .leaderboard-tabs {
        display: flex;
        gap: 8px;
        margin-bottom: 20px;
        }

        .tab {
        border: 1px solid #196a31;
        border-radius: 20px;
        padding: 6px 12px;
        background-color: white;
        cursor: pointer;
        font-size: 14px;
        transition: 0.3s;
        }

        .tab.active {
        background-color: #196a31;
        color: white;
        }

        .leaderboard-list {
        list-style: none;
        padding: 0;
        margin: 0;
        }

        .leaderboard-list li {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 12px 0;
        border-bottom: 1px solid #eee;
        }

        .rank1-3 {
        background-color: #336913;
        color: #fff;
        font-weight: 700;
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 14px;
        flex-shrink: 0;
        }

        .rank4 {
        background-color: #58bb50;
        color: #fff;
        font-weight: 700;
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 14px;
        flex-shrink: 0;
        }

        .rank5-6 {
        background-color: #a7cc05;
        color: #fff;
        font-weight: 700;
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 14px;
        flex-shrink: 0;
        }

        .user-info {
        display: flex;
        align-items: center;
        gap: 10px;
        flex: 1;
        margin-left: 10px;
        }

        .user-info img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        }

        .user-text {
        display: flex;
        flex-direction: column;
        }

        .user-name {
        font-weight: 600;
        font-size: 15px;
        }

        .user-role {
        font-size: 12px;
        color: #666;
        }

        .score {
        color: #196a31;
        font-weight: 600;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 4px;
        }

        .score img {
        width: 18px;
        height: 18px;
        object-fit: contain;
        }
    </style>
</head>
<body>
    <main class="container">
        <section class="left">
        <p class="tag">Green Haven Project – Mangrove</p>
        <h1 class="title">
            Green Horizons Await, Join Us in <br>Planting 10,000 Mangroves!
        </h1>

        <div class="progress-card">
            <div class="progress-top">
            <img src="{{ asset('image/leaf.png') }}" alt="Leaf Icon" class="leaf-icon">
            <span class="count">5,690</span>
            <span class="total">/ 10,000 Pohon</span>
            <button class="mission-btn">Support Our Mission →</button>
            </div>
            <div class="progress-bar">
            <div class="progress-fill" style="width: 56.9%;"></div>
            </div>
        </div>
        <img src="{{ asset('image/home1.png') }}" alt="Mangrove Project" class="mangrove-img">
        </section>

        <div class="divider"></div>

        <section class="right">
        <div class="leaderboard-card">
            <h2 class="leaderboard-title">Leaderboard</h2>
            <div class="leaderboard-tabs">
            <button class="tab active">Most Donation</button>
            <button class="tab">Most Recent</button>
            </div>
            <ul class="leaderboard-list">
            <li>
                <span class="rank1-3">01</span>
                <div class="user-info">
                <img src="{{ asset('image/l1.png') }}" alt="User 1">
                <div class="user-text">
                    <span class="user-role">Mangrove Maven</span>
                    <span class="user-name">Budi Hartanto</span>
                </div>
                </div>
                <span class="score"><img src="{{ asset('image/leaf.png') }}" alt="Leaf">350 Pohon</span>
            </li>

            <li>
                <span class="rank1-3">02</span>
                <div class="user-info">
                <img src="{{ asset('image/l1.png') }}" alt="User 2">
                <div class="user-text">
                    <span class="user-role">Mangrove Maven</span>
                    <span class="user-name">Dewi Sartika</span>
                </div>
                </div>
                <span class="score"><img src="{{ asset('image/leaf.png') }}" alt="Leaf">330 Pohon</span>
            </li>

            <li>
                <span class="rank1-3">03</span>
                <div class="user-info">
                <img src="{{ asset('image/l1.png') }}" alt="User 3">
                <div class="user-text">
                    <span class="user-role">Mangrove Maven</span>
                    <span class="user-name">Eko Wahyudi</span>
                </div>
                </div>
                <span class="score"><img src="{{ asset('image/leaf.png') }}" alt="Leaf">200 Pohon</span>
            </li>

            <li>
                <span class="rank4">04</span>
                <div class="user-info">
                <img src="{{ asset('image/l2.png') }}" alt="User 4">
                <div class="user-text">
                    <span class="user-role">Guardian of the Grove</span>
                    <span class="user-name">Rina Kartika</span>
                </div>
                </div>
                <span class="score"><img src="{{ asset('image/leaf.png') }}" alt="Leaf">190 Pohon</span>
            </li>

            <li>
                <span class="rank5-6">05</span>
                <div class="user-info">
                <img src="{{ asset('image/l2.png') }}" alt="User 5">
                <div class="user-text">
                    <span class="user-role">Guardian of the Grove</span>
                    <span class="user-name">Agus Prasetyo</span>
                </div>
                </div>
                <span class="score"><img src="{{ asset('image/leaf.png') }}" alt="Leaf">140 Pohon</span>
            </li>

            <li>
                <span class="rank5-6">06</span>
                <div class="user-info">
                <img src="{{ asset('image/l3.png') }}" alt="User 6">
                <div class="user-text">
                    <span class="user-role">Mangrove Master</span>
                    <span class="user-name">Irfan Setiawan</span>
                </div>
                </div>
                <span class="score"><img src="{{ asset('image/leaf.png') }}" alt="Leaf">80 Pohon</span>
            </li>
            </ul>
        </div>
        </section>
    </main>
</body>
</html>
