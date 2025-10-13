<section id="about" style="
    width:100%;
    background-color:#fff;
    font-family:'Poppins', sans-serif;
    text-align:center;
    padding:80px 0;
">

    <div style="
        display:flex;
        justify-content:center;
        align-items:center;
        gap:0;
        margin:0;
    ">
    <div style="
        position:relative;
        width:180px;
        height:200px;
        display:flex;
        justify-content:center;
        align-items:center;
        margin-right:-25px; /* LOGO DISEMPITKAN JARAKNYA */
    ">
        <img src='{{ asset("image/jc.png") }}' alt="JCI East Java"
            style="height:120px; position:relative;">
        </div>

    <div style="
        position:relative;
        width:180px;
        height:200px;
        display:flex;
        justify-content:center;
        align-items:center;
        margin-left:-25px; /* LOGO DITARIK SEDIKIT KE KIRI */
    ">
        <img src='{{ asset("image/gh.png") }}' alt="Green Haven Project"
            style="height:120px; position:relative;">
        </div>
    </div>

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

<div style="
    display:flex;
    justify-content:center;
    align-items:center;
    gap:120px;
    flex-wrap:wrap;
    position:relative;
">

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
        border-radius:20px;
        box-shadow:0 0 10px rgba(0,0,0,0.15);
        padding:15px 35px;
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
