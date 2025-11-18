<?php include './header.php'; ?>

<meta http-equiv="refresh" content="5;url=http://www.topalphasafety.com" />

<style>
.thank_u {
    min-height: 50vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 100px;
}

h1 {
    font-family: sans-serif;
    font-size: 3rem;
    margin: 0px;
    font-weight: 800;
}

p {
    font-family: sans-serif;
}

.text-success {
    color: #c8713e !important;
}

.nav-item a {

    color: #c8713e !important;

}

@media only screen and (max-width: 600px) {
    .thank_u {
        min-height: 30vh;
    }

    h1 {
        font-size: 2rem;
    }

    p {
        padding: 0px 40px;
    }
}
</style>

<body>
    <div class="thank_u">
        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75" fill="currentColor"
            viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
            <path
                d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z">
            </path>
        </svg>
        <h1>THANK YOU</h1>
        <p>One of our agents will contact you shortly to give you more information.</p>
    </div>
    <?php include './footer.php'; ?>
</body>