<?php include './header.php'; ?>

<!-- Core Style Css -->
<link rel="stylesheet" href="./assets/css/product.css">

<style>
:root {
    --p: #01386e;
    --s: #0092f9;
}

.products-section {
    background: #f8f9fa;
}

.text-gradient {
    background: linear-gradient(90deg, var(--p), var(--s));
    -webkit-background-clip: text;
    color: transparent;
}

.product-card {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    transition: all 0.4s ease;
}

.product-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 8px 22px rgba(0, 0, 0, 0.15);
}

.product-card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
}

.card-content {
    padding: 20px;
}

.card-content h4 {
    color: var(--p);
    font-weight: 600;
    margin-bottom: 10px;
    font-size: 20px;
}

.card-content p {
    color: #000;
    font-size: 14px;
    line-height: 1.6;
    min-height: 70px;
}

.btn-group {
    display: flex;
    justify-content: space-between;
    margin-top: 15px;
}

.btn-whatsapp,
.btn-contact {
    flex: 1;
    text-align: center;
    border-radius: 50px;
    padding: 8px 0;
    margin: 0 5px;
    color: #fff;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}

.btn-whatsapp {
    background: #25d366;
}

.btn-whatsapp:hover {
    background: #1ebe5c;
}

.btn-contact {
    background: linear-gradient(90deg, var(--p), var(--s));
}

.btn-contact:hover {
    background: linear-gradient(90deg, var(--s), var(--p));
}
</style>


<!-- ==================== Start Header ==================== -->

<header class="pages-header bg-img valign parallaxie" data-background="assets/img/products/ot-2.jpg"
    data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>Others</h1>
                    <div class="path">
                        <a href="<?php echo $site_url; ?>">Home</a><span>/</span><a href="#0" class="active">Others</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ==================== End Header ==================== -->



<section class="products-section py-5">
    <div class="container">
        <div class="text-center">
            <h6 class="sub-title">Others</h6>
            <h2 class="mb-3 playfont">Our Premium Steel Interior Collection</h2>
            <p>Explore Livsatva Interiors’ modern and durable designs — crafted entirely in stainless
                steel for timeless style and strength.</p>
        </div>

        <div class="row g-4 mt-5">
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <img src="./assets/img/products/ot-1.jpg" alt="Vanity Units" class="img-fluid">
                    <div class="card-content">
                        <h4>Vanity Units</h4>
                        <p>Modern steel vanity units combining elegance and durability, designed with premium finishes
                            for your bathroom space.</p>
                        <div class="btn-group">
                            <a href="https://wa.me/919876543210" class="btn-whatsapp"><i
                                    class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                            <a href="#" class="btn-contact" data-bs-toggle="modal" data-bs-target="#contactModal"><i
                                    class="fa-solid fa-phone"></i> Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <img src="./assets/img/products/ot-2.jpg" alt="Living Room Partitions" class="img-fluid">
                    <div class="card-content">
                        <h4>Living Room Partitions</h4>
                        <p>Stylish stainless steel partitions that create elegant divisions and bring a premium look to
                            your living space.</p>
                        <div class="btn-group">
                            <a href="https://wa.me/919876543210" class="btn-whatsapp"><i
                                    class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                            <a href="#" class="btn-contact" data-bs-toggle="modal" data-bs-target="#contactModal"><i
                                    class="fa-solid fa-phone"></i> Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <img src="./assets/img/products/ot-3.jpg" alt="TV Units" class="img-fluid">
                    <div class="card-content">
                        <h4>TV Units</h4>
                        <p>Premium steel TV units designed with a modern aesthetic, perfect for stylish and functional
                            living rooms.</p>
                        <div class="btn-group">
                            <a href="https://wa.me/919876543210" class="btn-whatsapp"><i
                                    class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                            <a href="#" class="btn-contact" data-bs-toggle="modal" data-bs-target="#contactModal"><i
                                    class="fa-solid fa-phone"></i> Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <img src="./assets/img/products/ot-4.jpg" alt="Beds & T-Tables" class="img-fluid">
                    <div class="card-content">
                        <h4>Beds & T-Tables</h4>
                        <p>Luxury stainless steel beds and tables built for comfort and lasting strength, offering a
                            timeless modern appeal.</p>
                        <div class="btn-group">
                            <a href="https://wa.me/919876543210" class="btn-whatsapp"><i
                                    class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                            <a href="#" class="btn-contact" data-bs-toggle="modal" data-bs-target="#contactModal"><i
                                    class="fa-solid fa-phone"></i> Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <img src="./assets/img/products/ot-5.jpg" alt="Sofas" class="img-fluid">
                    <div class="card-content">
                        <h4>Sofas</h4>
                        <p>Contemporary steel-framed sofas offering superior comfort and sleek design — perfect for
                            modern homes and offices.</p>
                        <div class="btn-group">
                            <a href="https://wa.me/919876543210" class="btn-whatsapp"><i
                                    class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                            <a href="#" class="btn-contact" data-bs-toggle="modal" data-bs-target="#contactModal"><i
                                    class="fa-solid fa-phone"></i> Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <img src="./assets/img/products/ot-6.jpg" alt="Office Furniture" class="img-fluid">
                    <div class="card-content">
                        <h4>Office Furniture</h4>
                        <p>Elegant and ergonomic steel office furniture designed for durability, comfort, and a
                            professional aesthetic.</p>
                        <div class="btn-group">
                            <a href="https://wa.me/919876543210" class="btn-whatsapp"><i
                                    class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                            <a href="#" class="btn-contact" data-bs-toggle="modal" data-bs-target="#contactModal"><i
                                    class="fa-solid fa-phone"></i> Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include './footer.php'; ?>