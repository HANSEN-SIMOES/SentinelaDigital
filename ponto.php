<?php include "template/header.php"; ?>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Atirador: <span class="atirador-nome">Tulio</span>
        </div>
        <div class="card-body">
            <h5 class="card-title">Número: <span class="atirador-numero">095</span></h5>
            <p class="card-text">Você já perdeu <span class="atirador-pontos-perdidos">36</span> pontos de 120.</p>
        </div>
    </div>
</div>

<?php include "template/footer.php"; ?>


<style>
    .navbar {
        max-height: 60px; 
    }

    .navbar-brand img {
        height: 60px; 
        margin-top: 4px;
    }

    .strong {  
        font-weight: bold;
    }

    .bg-menu {
        background-color: #063206; /* Define o fundo da barra de navegação como verde escuro */
    }

    .lgn-btn{
        background-color: #640b0b !important;
    }
</style>
