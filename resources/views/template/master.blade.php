<!DOCTYPE html>
<html translate="no"> 
    @include('template.header') 
    <body>
    <div class="container  p-0"> 
        @include('template.sidebar') 
        <audio  autoplay>
          <source src="{{asset ('files/alam.mpeg')}}" type="audio/mpeg">
        </audio>
        <div id="nav-tabContent" class="overflow-hidden">
        <div id="nav-cover" class="sheet" role="tabpanel" aria-labelledby="nav-cover-tab">
          <section class="card rounded-0 border-0 shadow p-3 text-center d-flex flex-column justify-content-center">
            <div class="ornament-top"></div>
            <div class="bg-img"></div>
            <div class="content-invitation pt-5 mt-3">
              <h2 class="display-5 ff-glory fw-bold">Wedding</h2>
              {{-- <div class="ff-kgroyal mt-3" style="font-size: 41px;line-height: 1;">Happy
								<br/>Birthday
							</div> --}}
              <div class='banner position-relative animate-start muncul mt-2  m-auto w-100'>
                <img class="img-cover position-relative" style="z-index:1;opacity:.9" src="/files/23412341234frqwer.png" width="100%" />
                <div class="foto-cover do-animate not-scrollanimate" style="background-image:url('/foto/d.jpg');"></div>
              </div>
              <h1 class="d-block fs-2 ff-arefruqaa fw-bold membesar position-relative do-animate not-scrollanimate mb-2"></h1>
              <p class="m-1 acara">Akan melangsungkan Akad dan Walimatul'Urs(Resepsi)</p>
              <div>Insyaallah</div>
              <span class="fs-3 ff-breadley fw-bold d-block do-animate not-scrollanimate">Sabtu, 10 Desember 2022</span>
              <div class="mt-1">Acara akan dimulai dalam</div>
              <div class="d-flex justify-content-center mt-2">
                <div class="counter position-relative fw-bold animationcountertime do-animate kekanan not-scrollanimate">
                  <div id="days">00</div>
                  <span class="d-block fw-normal">Hari</span>
                </div>
                <div class="counter position-relative fw-bold animationcountertime do-animate kekanan not-scrollanimate">
                  <div id="hours">00</div>
                  <span class="d-block fw-normal">Jam</span>
                </div>
                <div class="counter position-relative fw-bold animationcountertime do-animate kekiri not-scrollanimate">
                  <div id="minutes">00</div>
                  <span class="d-block fw-normal">Menit</span>
                </div>
                <div class="counter position-relative fw-bold animationcountertime do-animate kekanan not-scrollanimate">
                  <div id="seconds">00</div>
                  <span class="d-block fw-normal">Detik</span>
                </div>
              </div>
              <span class="fw-normal m-2 p-1 text-primary">Lagi</span>
            </div>
            <div class="ornament-bottom"></div>
          </section>
        </div>
       @yield('content')
      </div>
    </div>
    <div class='backsound play'>
      <svg xmlns="http://www.w3.org/2000/svg" class='iconplay' viewBox="0 0 128 128">
        <path d="M33.900391 24C32.300391 24 31 25.4 31 27L31 58.199219C31 58.999219 30.2 59.4 29.5 59C26.8 57.4 23.499609 56.699609 20.099609 57.099609C13.199609 57.999609 7.7996094 63.600391 7.0996094 70.400391C6.0996094 79.800391 13.799609 87.6 23.099609 87C30.999609 86.4 37 79.499609 37 71.599609L37 30.5C40.5 31.7 43 35.000391 43 38.900391C43 40.100391 43.700391 41.299219 44.900391 41.699219C47.000391 42.599219 49 41 49 39C49 30.7 42.200391 23.9 33.900391 24 z M 108.68359 36.244141C107.85547 36.262891 107.02422 36.35 106.19922 36.5L76.5 42.400391C70.4 43.700391 66 48.999219 66 55.199219L66 88.199219C66 88.999219 65.2 89.4 64.5 89C61.8 87.4 58.499609 86.699609 55.099609 87.099609C48.299609 87.999609 42.799609 93.500391 42.099609 100.40039C41.099609 109.80039 48.799609 117.6 58.099609 117C65.999609 116.4 72 109.59922 72 101.69922L72 69.5L116 60.699219L116 78.199219C116 78.999219 115.2 79.4 114.5 79C111.8 77.4 108.49961 76.699609 105.09961 77.099609C98.299609 77.999609 92.799609 83.500391 92.099609 90.400391C91.099609 99.800391 98.799609 107.6 108.09961 107C115.99961 106.4 122 99.599219 122 91.699219L122 49.199219C122 44.699219 119.70078 40.499609 115.80078 38.099609C113.62578 36.749609 111.16797 36.187891 108.68359 36.244141 z M 109.16797 42.167969C110.71953 42.205469 112.20039 42.750781 113.40039 43.800781C115.00039 45.100781 116 47.099219 116 49.199219L116 54.5L72 63.300781L72 55.199219C72 51.899219 74.399609 49.000781 77.599609 48.300781L107.59961 42.300781C108.12461 42.200781 108.65078 42.155469 109.16797 42.167969 z M 22 63C27 63 31 67 31 72C31 77 27 81 22 81C17 81 13 77 13 72C13 67 17 63 22 63 z M 107 83C112 83 116 87 116 92C116 97 112 101 107 101C102 101 98 97 98 92C98 87 102 83 107 83 z M 57 93C62 93 66 97 66 102C66 107 62 111 57 111C52 111 48 107 48 102C48 97 52 93 57 93 z" fill="#A15F9F" />
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" class='iconpause' viewBox="0 0 24 24">
        <path d="M11.294922 3.9882812C11.122922 3.9882812 10.947687 4.0533125 10.804688 4.1953125L6 9L4 9C2.895 9 2 9.895 2 11L2 13C2 14.105 2.895 15 4 15L6 15L10.804688 19.804688C10.947688 19.947688 11.122922 20.011719 11.294922 20.011719C11.654922 20.011719 12 19.732547 12 19.310547L12 4.6894531C12 4.2674531 11.654922 3.9882812 11.294922 3.9882812 z M 14.990234 7.9902344 A 1.0001 1.0001 0 0 0 14.292969 9.7070312L16.585938 12L14.292969 14.292969 A 1.0001 1.0001 0 1 0 15.707031 15.707031L18 13.414062L20.292969 15.707031 A 1.0001 1.0001 0 1 0 21.707031 14.292969L19.414062 12L21.707031 9.7070312 A 1.0001 1.0001 0 0 0 20.980469 7.9902344 A 1.0001 1.0001 0 0 0 20.292969 8.2929688L18 10.585938L15.707031 8.2929688 A 1.0001 1.0001 0 0 0 14.990234 7.9902344 z" fill="#A15F9F" />
      </svg>
    </div>
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__center"></div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="modal fade" id="stickersModal" tabindex="-1" aria-labelledby="stickersModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-fullscreen rounded">
          <div class="modal-content rounded bg-white">
            <div class="modal-header bg-white">
              <h5 class="modal-title" id="exampleModalLabel">😍 Stickers</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-white">
              <div class="row">
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker001.gif" src="https://www. .com/images/gif/sticker001.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker0013.gif" src="https://www. .com/images/gif/sticker0013.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker002.gif" src="https://www. .com/images/gif/sticker002.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker003.gif" src="https://www. .com/images/gif/sticker003.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker004.gif" src="https://www. .com/images/gif/sticker004.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker005.png" src="https://www. .com/images/gif/sticker005.png" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker006.png" src="https://www. .com/images/gif/sticker006.png" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker007.gif" src="https://www. .com/images/gif/sticker007.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker008.gif" src="https://www. .com/images/gif/sticker008.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker009.gif" src="https://www. .com/images/gif/sticker009.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker010.png" src="https://www. .com/images/gif/sticker010.png" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker011.jpg" src="https://www. .com/images/gif/sticker011.jpg" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker012.gif" src="https://www. .com/images/gif/sticker012.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker014.gif" src="https://www. .com/images/gif/sticker014.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker015.gif" src="https://www. .com/images/gif/sticker015.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker016.gif" src="https://www. .com/images/gif/sticker016.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker017.gif" src="https://www. .com/images/gif/sticker017.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker018.gif" src="https://www. .com/images/gif/sticker018.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker019.gif" src="https://www. .com/images/gif/sticker019.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker020.gif" src="https://www. .com/images/gif/sticker020.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker021.gif" src="https://www. .com/images/gif/sticker021.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker022.png" src="https://www. .com/images/gif/sticker022.png" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker023.gif" src="https://www. .com/images/gif/sticker023.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker024.gif" src="https://www. .com/images/gif/sticker024.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker025.gif" src="https://www. .com/images/gif/sticker025.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker026.gif" src="https://www. .com/images/gif/sticker026.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker027.gif" src="https://www. .com/images/gif/sticker027.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker028.gif" src="https://www. .com/images/gif/sticker028.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker029.gif" src="https://www. .com/images/gif/sticker029.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker030.gif" src="https://www. .com/images/gif/sticker030.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker031.gif" src="https://www. .com/images/gif/sticker031.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker032.gif" src="https://www. .com/images/gif/sticker032.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker033.gif" src="https://www. .com/images/gif/sticker033.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 col-6 my-1">
                  <div class="card mx-1 shadow border-0 card-sticker" style="height:100%;border-radius:17px">
                    <div class="card-body text-center">
                      <img data-bs-dismiss="modal" onclick="$('#input-sticker').val($(this).data('img'))" data-img="sticker034.gif" src="https://www. .com/images/gif/sticker034.gif" class="ornamen lazyload" loading="lazy" style="max-width:99%;border-radius:17px" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
    </div>
    <!-- <script src="/js/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/cek.js')}}"></script>
    <script src="{{ asset('/js/google.analytic.js')}}"></script>
    <script src="{{ asset('/js/animation-scroll.js')}}"></script>
    <script src="{{ asset('js/toastr.min.js')}}"></script>
    <script src="{{ asset('/js/clipboard.min.js')}}"></script>
    <script src="{{ asset('/js/bootstrap5.bundle.min.js')}}"></script>
    <script src="{{ asset('/js/script.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.3.3/photoswipe.esm.min.js"></script>
    <script src="js/photoswipe-ui-default.min.js"></script>
    {{-- <script>
      var audio = new Audio('{{asset('files/alam.mpeg')}}');
        audio.play();
    </script> --}}
    <script>
      // var countDownDate =  new Date('November 15 , 2022 00:00:00').getTime();
      // Set the date we're counting down to
      
      var countDownDate = new Date("December 10, 2022 17:00:00").getTime();
      // Update the count down every 1 second
      var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor(
          (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        var textDays = document.getElementById("days");
        var textHours = document.getElementById("hours");
        var textMinutes = document.getElementById("minutes");
        var textSeconds = document.getElementById("seconds");
        textDays.innerHTML = days < 10 ? "0" + days : days;
        textHours.innerHTML = hours < 10 ? "0" + hours : hours;
        textMinutes.innerHTML = minutes < 10 ? "0" + minutes : minutes;
        textSeconds.innerHTML = seconds < 10 ? "0" + seconds : seconds;
        if (distance < 0) {
          clearInterval(x);
        }
      }, 1000);
    </script>
    <div style="position:fixed;right:9px;top:35%;z-index:99;border-radius:9px" class="shadow">
      <button id="button-to-top" style="border:none;background:#ffffff87;width:35px;font-size:10pt;padding:2px 7px;border-radius:9px;color:var(--bs-secondary);">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path style="fill:gray" d="M20.26,12.948l-7.15-4.766c-0.672-0.448-1.547-0.448-2.219,0l-7.15,4.766C3.278,13.257,3,13.777,3,14.333l0,0 c0,1.329,1.481,2.121,2.587,1.384L12,11.442l6.413,4.276C19.519,16.455,21,15.662,21,14.333l0,0 C21,13.776,20.722,13.257,20.26,12.948z" fill="#6BAFC4" />
        </svg>
        <br />
        <span style="font-size:7pt;color:gray">Top</span>
      </button>
    </div>
    <div style="position:fixed;right:9px;top:57%;z-index:99;border-radius:9px" class="shadow">
      <button id="button-mode-read" style="border:none;background:#ffffff87;font-size:10pt;padding:2px 7px;border-radius:9px;color:var(--bs-secondary);">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" style="width:17px;height:17px">
          <path d="M15 3C8.9134751 3 3.87999 7.5533546 3.1132812 13.439453 A 1.0001 1.0001 0 1 0 5.0957031 13.697266C5.7349943 8.7893639 9.9085249 5 15 5C17.766872 5 20.250574 6.1285473 22.058594 7.9414062L20 10L26 11L25 5L23.470703 6.5292969C21.300701 4.3575454 18.309289 3 15 3 z M 25.912109 15.417969 A 1.0001 1.0001 0 0 0 24.904297 16.302734C24.265006 21.210636 20.091475 25 15 25C11.977904 25 9.2987537 23.65024 7.4648438 21.535156L9 20L3 19L4 25L6.0488281 22.951172C8.2452659 25.422716 11.436061 27 15 27C21.086525 27 26.12001 22.446646 26.886719 16.560547 A 1.0001 1.0001 0 0 0 25.912109 15.417969 z" fill="#6BAFC4" />
        </svg>
        <br />
        <span style="font-size:7pt;color:gray">Read</span>
        <br>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path d="M21,11.109L21,11.109c0-1.329-1.481-2.122-2.587-1.385L12,14L5.587,9.725C4.481,8.988,3,9.78,3,11.109v0 c0,0.556,0.278,1.076,0.741,1.385l7.15,4.766c0.672,0.448,1.547,0.448,2.219,0l7.15-4.766C20.722,12.185,21,11.666,21,11.109z" fill="#6BAFC4" />
        </svg>
      </button>
    </div>
  </body>
</html>