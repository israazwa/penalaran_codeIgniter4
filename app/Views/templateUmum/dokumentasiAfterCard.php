<style>
    .backBlue {
        background-color: rgb(11, 64, 93);
    }

    .gradient {
        background: linear-gradient(to bottom, rgba(11, 64, 93, 0.87), rgb(11, 64, 93)) !important;
    }
</style>

<section>
    <div class="gradient"><br>
        <h2 class="text-center" style="color: white;"><b>Dokumentasi</b></h2>
        <br>
    </div>
    <div class="backBlue">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xl-6">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="home/3.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="home/5.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="home/4.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xl-6">
                    <div id="carouselText" style="color:aliceblue">
                        <h3>First Slide Title</h3>
                        <p>This is the text for the first slide. It updates based on the carousel's active image.</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>
</section>

<script>
    const carousel = document.querySelector('#carouselExampleCaptions');
    const carouselText = document.querySelector('#carouselText');

    const textContent = [
        {
            title: "First Slide Title",
            description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius impedit, architecto modi et unde porro debitis ipsa nemo enim, commodi assumenda omnis accusamus iste ullam similique repudiandae. Eligendi, nulla amet!"
        },
        {
            title: "Second Slide Title",
            description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius impedit, architecto modi et unde porro debitis ipsa nemo enim, commodi assumenda omnis accusamus iste ullam similique repudiandae. Eligendi, nulla amet!"
        },
        {
            title: "Third Slide Title",
            description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius impedit, architecto modi et unde porro debitis ipsa nemo enim, commodi assumenda omnis accusamus iste ullam similique repudiandae. Eligendi, nulla amet!"
        }
    ];

    carousel.addEventListener('slide.bs.carousel', function (event) {
        const activeIndex = event.to; // Mengambil indeks slide aktif
        const { title, description } = textContent[activeIndex];

        // Perbarui teks
        carouselText.innerHTML = `
            <h3>${title}</h3>
            <p>${description}</p>
        `;
    });
</script>