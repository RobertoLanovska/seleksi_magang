<section style="
    width:100%;
    background-color:#fff;
    font-family:'Poppins', sans-serif;
    text-align:center;
    padding:80px 0;
    ">

<div style="display:flex; justify-content:center; align-items:center; gap:100px; margin:60px 0;">

  <!-- JCI Logo -->
  <div style="position:relative; width:230px; height:230px; display:flex; justify-content:center; align-items:center;">
    <!-- Hexagon -->
    <div style="
      position:absolute;
      top:0;
      left:0;
      width:230px;
      height:230px;
      background:transparent;
      border:6px solid #53B7E8;
      clip-path: polygon(25% 5%, 75% 5%, 100% 50%, 75% 95%, 25% 95%, 0% 50%);
      box-shadow:0 0 15px rgba(83,183,232,0.4);
      z-index:3;
    "></div>

    <!-- Logo (tidak diperbesar) -->
    <img src='{{ asset("image/jci.png") }}' alt="JCI East Java"
         style="height:90px; position:relative; z-index:4;">
  </div>

  <!-- Green Haven Project Logo -->
  <div style="position:relative; width:230px; height:230px; display:flex; justify-content:center; align-items:center;">
    <!-- Hexagon -->
    <div style="
      position:absolute;
      top:0;
      left:0;
      width:230px;
      height:230px;
      background:transparent;
      border:6px solid #A2D45E;
      clip-path: polygon(25% 5%, 75% 5%, 100% 50%, 75% 95%, 25% 95%, 0% 50%);
      box-shadow:0 0 15px rgba(162,212,94,0.4);
      z-index:3;
    "></div>

    <!-- Logo (tetap ukuran semula) -->
    <img src='{{ asset("image/ghp1.png") }}' alt="Green Haven Project"
         style="height:90px; position:relative; z-index:4;">
  </div>

</div>


<br>
    <!-- Judul dan Deskripsi -->
    <h2 style="
        font-size:30px;
        font-weight:800;
        color:#000;
        margin-bottom:15px;
    ">
        About Green Haven Project
    </h2>

    <p style="
        max-width:800px;
        margin:0 auto 50px auto;
        font-size:15px;
        color:#000;
        line-height:1.8;
    ">
        The Green Haven Project - Mangrove aims to restore coastal ecosystems and raise awareness
        by planting mangroves and educating participants about the importance of these areas.
        This six-hour event will involve JCI members, local farmers, and students,
        focusing on combating beach erosion and promoting ESG values.
    </p>

    <!-- Gambar Before & After -->
    <div style="
        display:flex;
        justify-content:center;
        align-items:center;
        gap:120px; /* Tambahkan jarak lebih lebar antara before & after */
        flex-wrap:wrap;
        position:relative;
    ">

    <!-- Before -->
    <div style="text-align:center;">
    <img src='{{ asset("image/before.jpg") }}'
        alt="Before mangroves were planted"
        style="width:500px; height:300px; object-fit:cover; border-radius:15px;">
    <p style="margin-top:10px; font-weight:600; color:#000;">
        Before mangroves were planted
    </p>
    </div>


    <div style="
        position:absolute;
        left:50%;
        transform:translateX(-50%);
        background-color:#fff;
        border-radius:20px; /* sudut agak membulat tapi tetap persegi panjang */
        box-shadow:0 0 10px rgba(0,0,0,0.15);
        padding:15px 35px; /* lebih kecil dari sebelumnya */
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
        z-index:5;
        ">
    <img src='{{ asset("image/arrow.png") }}' alt="Transformation"
        style="width:70px; margin-bottom:6px; filter:drop-shadow(0 0 3px rgba(0,0,0,0.2));">
    <p style="
        color:#45A84A;
        font-weight:700;
        margin:0;
        font-size:16px;
        letter-spacing:0.5px;
    ">
    TRANSFORMATION
  </p>
</div>


    <!-- After -->
        <div style="text-align:center;">
        <img src='{{ asset("image/after.png") }}'
            alt="After mangroves were planted"
            style="width:500px; height:300px; object-fit:cover; border-radius:15px;">
        <p style="margin-top:10px; font-weight:600; color:#000;">
            After mangroves were planted
        </p>
        </div>
    </div>
</section>
