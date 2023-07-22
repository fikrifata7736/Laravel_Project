@extends('layouts.frontend.master')
@section('content')


<section class="container-fluid one pt-5" id="banner9">
    <div class="mt-5 py-5">
      <div class="container pt-5 mt-5 content-contact">
        <div class="row">
            <div class="parent mb-5">
                <h1 class="judul1"> Creative</h1>
                <h1 class="judul2"> Desain</h1>
            </div>
        </div>
      </div>
      <div class="mt-5 py-5">
      </div>
    </div>
  </section>


<section class="portofolio">
    <h1 class="reveal fade-bottom"> Portofolio </h1>
    <div class="container reveal fade-right">
    <article class="card">
        <img
          class="card__background"
          src="https://cdn.monsterchildren.com/wp-content/uploads/2018/07/06074152/monster-children-alipjon-5-of-9.jpg"
          alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
          width="1920"
          height="2193"
        />
        <div class="card__content | flow">
          <div class="card__content--container | flow">
            <h2 class="card__title">Colombia</h2>
            <p class="card__description">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
              labore laudantium deserunt fugiat numquam.
            </p>
          </div>
          <button class="card__button">Read more</button>
        </div>
      </article>

      <article class="card">
        <img
          class="card__background"
          src="https://i.pinimg.com/originals/9e/8d/88/9e8d88f04674790abd23a59e2e7a4674.jpg"
          alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
          width="1920"
          height="2193"
        />
        <div class="card__content | flow">
          <div class="card__content--container | flow">
            <h2 class="card__title">Colombia</h2>
            <p class="card__description">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
              labore laudantium deserunt fugiat numquam.
            </p>
          </div>
          <button class="card__button">Read more</button>
        </div>
      </article>

      <article class="card">
        <img
          class="card__background"
          src="https://clara-indonesia.com/ckfinder/userfiles/images/Alipjon-2.png"
          alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
          width="1920"
          height="2193"
        />
        <div class="card__content | flow">
          <div class="card__content--container | flow">
            <h2 class="card__title">Colombia</h2>
            <p class="card__description">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
              labore laudantium deserunt fugiat numquam.
            </p>
          </div>
          <button class="card__button">Read more</button>
        </div>
      </article>

      <article class="card">
        <img
          class="card__background"
          src="https://clara-indonesia.com/ckfinder/userfiles/images/WhatsApp-Image-2018-09-24-at-14_39_09.jpeg"
          alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
          width="1920"
          height="2193"
        />
        <div class="card__content | flow">
          <div class="card__content--container | flow">
            <h2 class="card__title">Colombia</h2>
            <p class="card__description">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
              labore laudantium deserunt fugiat numquam.
            </p>
          </div>
          <button class="card__button">Read more</button>
        </div>
      </article>
    </div>
</section>


<section class="about">
    <div class="container">
        <h1 class="reveal fade-bottom"> About </h1>
        <div class="row">
            <div class="col-sm-6">
              <h3 class="pt-10 fs-1 fw-bolder reveal fade-right">Alipjon</h3>
              <p class="pp-10 text-justify reveal fade-right">
                Alipjon, seniman kelahiran tahun 1992, yang memulai karyanya sejak tahun 2016 dengan lukisan kanvasnya ini, menganggap dirinya sendiri sebagai “meteor” yang dia percayai bahwa untuk membuat seseorang, harus menghancurkannya terlebih dahulu.
              </p>
            </div>
            <div class="col-sm-6 reveal fade-left">
              <img
                src="assets\img\logo-alipjon.jpg"
                alt="Service image game art"
                title="Service image game art"
                width="100%"
                style="padding: 10%;"
              />
            </div>
          </div>
    </div>
</section>


<script>
    function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

  if (elementTop < windowHeight - elementVisible) {
    reveals[i].classList.add("active");
  } else {
    reveals[i].classList.remove("active");
      }
    }
  }
    window.addEventListener("scroll", reveal);
</script>


@include('layouts.frontend.footer')
