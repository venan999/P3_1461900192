@extends('layout/main')
@section('jumbotron')
    <!-- Jumbotron -->
    <section class="jumbotron text-center">
        <img src="img/octa.jpg" alt="" width="200" class="rounded-circle img-thumbnail shadow-sm" />
        <h1 class="display-4">Welcome to My Web</h1>
        <p class="lead">Moch. Octa Venanda | 1461900192.</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,64L48,80C96,96,192,128,288,149.3C384,171,480,181,576,165.3C672,149,768,107,864,106.7C960,107,1056,149,1152,149.3C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- Akhir Jumbotron -->
@endsection
@section('about')
    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-4">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos quasi eveniet molestiae aliquam,
                        nesciunt voluptas ut nostrum quod sequi dolor.</p>
                </div>
                <div class="col-md-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, odit amet, asperiores ab fugiat
                        quidem molestias sit magnam distinctio obcaecati voluptatum. Quibusdam, suscipit similique?
                        Optio.</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#1caba3" fill-opacity="1"
                d="M0,96L40,90.7C80,85,160,75,240,74.7C320,75,400,85,480,106.7C560,128,640,160,720,176C800,192,880,192,960,186.7C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- Akhir About -->
@endsection
