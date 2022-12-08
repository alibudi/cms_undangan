@extends('template.master')
@section('content')
<div id="nav-perihal" class="sheet" role="tabpanel" aria-labelledby="nav-perihal-tab">
    <section class="card rounded-0 border-0 shadow p-0 p-0 text-center">
      <div class="frame d-flex flex-column justify-content-center">
        <div class="ornament-top"></div>
        <div class="bg-img"></div>
        <div class="content-text content-invitation">
          <div class='h2 mb-4 ff-madelican do-animate muncul'>Assalamualaikum Wr.Wb.</div>
          {{-- <p class="do-animate muncul"> Segala puji hanya milik Allah Azza wa Jalla. <br /> Dengan mengharap ridhonya, kami., </p> --}}
          <div class="content-text">
            {{-- <div class='position-relative m-auto w-50 kekanan do-animate'>
              <img class='position-relative' style="z-index:1;max-width:199px" src="/files/3D73D002-627A-4986-9467-1E29B0B12F31.png" width="100%" />
              <div class="position-absolute" style="border-radius:9px;box-shadow: 2px 2px 5px grey;left: 50%;top: 50%;transform: translate(-50%, -50%) rotate(2deg);width: 75%;height: 75%;background-image:url('/foto/akhtar.jpeg');background-size:cover;background-position: center;max-width: 178px;max-height:178px"></div>
            </div> --}}
            <p class="do-animate muncul">Maha suci Allah yang telah menciptakan mahluk-Nya berpasang-pasangan. Ya Allah, perkenankanlah kami merangkaikan kasih sayang yang Kau ciptakan diantara kami untuk mengikuti Sunnah Rasul-Mu dalam rangka membentuk keluarga yang sakinah, mawaddah, warahmah.</p>
            <div class="position-relative kekiri do-animate">
              <h3 class="fw-bold ff-chocolate my-1" style="line-height:1.7"> Irfan Fauzi</h3>
              <p class="">Putra bapak ali subro dan ibu sudriyah</p>
              <h3>&</h3>
            </div>
            {{-- <div class='position-relative m-auto w-50 kekanan do-animate'>
              <img class='position-relative' style="z-index:1;max-width:199px" src="/files/3D73D002-627A-4986-9467-1E29B0B12F31.png" width="100%" />
              <div class="position-absolute" style="border-radius:9px;box-shadow: 2px 2px 5px grey;left: 50%;top: 50%;transform: translate(-50%, -50%) rotate(2deg);width: 75%;height: 75%;background-image:url('/foto/akhtar.jpeg');background-size:cover;background-position: center;max-width: 178px;max-height:178px"></div>
            </div> --}}
            <div class="position-relative kekiri do-animate">
              <h3 class="fw-bold ff-chocolate my-1" style="line-height:1.7"> Zaita Syara Syifa</h3>
              <p class="">Putri dari bapak Hasan ali (Alm) & ibu Waqiah</p>
            </div>
          </div>
          {{-- <p class="do-animate muncul">
                                                                      Saya sangat berharap teman teman
              dapat menghadiri acara tersebut
                                                              </p> --}}
        </div>
        <div class="ornament-bottom"></div>
      </div>
    </section>
  </div>
  <div id="nav-acara" class="sheet" role="tabpanel" aria-labelledby="nav-acara-tab">
    <section class="card rounded-0 border-0 shadow p-0 text-center">
      <div class="frame d-flex flex-column justify-content-center">
        <div class="ornament-top"></div>
        <div class="bg-img"></div>
        <div class="content-text content-invitation">
          <h2 class='h1 fs-1 mb-4 ff-anydore do-animate muncul'>Waktu Dan Tempat</h2>
          <div class='my-3 do-animate muncul'>
            <span>Ingatkan saya melalui google calendar</span>
            <br />
            <a class='btn btn-sm btn-primary text-white' href='https://calendar.google.com/calendar/u/0/r/eventedit?text=AKHTAR SULTAN AL FAIQ&details=AKHTAR SULTAN AL FAIQ&dates=20211207T000000/20211207T240000'>
              <i class='fa fa-bell'></i> Atur Pengingat </a>
          </div>
          <div class='mt-1 mb-3 bg-white rounded kekanan py-3 px-1 shadow do-animate'>
            {{-- <div class='akad bg-white shadow rounded content-text do-animate'> --}}
            <span class='fs-6'>Akad Nikah</span>
            <h5 class='waktuakad date fw-bold my-0' style="line-height: 1.5;">📅 10 Desember 2022 <br /> 🕐 Pukul 14:00 WIB </h5>
            <span class='fw-normal' style="font-family:'roboto'">Mempelai Wanita</span>
            {{-- </div> --}}
          </div>
          <div class='bg-white rounded kekiri py-3 px-1 shadow do-animate'>
            <span class='d-block my-1 ff-marry'>Resepsi</span>
            <h5 class='rounded py-3  ff-happyending fw-bold' style="line-height: 1.5;">10 Desember 2022 Jam 17:00 WIB</h5>
          </div>
          <div class='mt-3 bg-white rounded membesar py-3 px-1 shadow do-animate'>
            <span class='d-block my-1 ff-marry'>Tempat</span>
            <div class='row justify-content-center '>
              <div class='col-md-12'>
                <h5 class='p-3 ff-happyending fw-bold'>Jln. Flamboyan rt 06 rw 01. kejambon. Kota Tegal</h5>
              </div>
              <div class='col-md-12'>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0747464260617!2d109.13574801409833!3d-6.88164916924758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9cc603e4e93%3A0x8698e5ceb0478bbe!2sJl.%20Flamboyan%20No.6%2C%20Kejambon%2C%20Kec.%20Tegal%20Tim.%2C%20Kota%20Tegal%2C%20Jawa%20Tengah%2052124!5e0!3m2!1sen!2sid!4v1670339154567!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
        <div class="ornament-bottom"></div>
      </div>
    </section>
  </div>
  <div id="nav-cerita" class="sheet" role="tabpanel" aria-labelledby="nav-cerita-tab">
    <section class="card rounded-0 border-0 shadow p-0 p-0 text-center">
      <div class="frame d-flex flex-column justify-content-center">
        <div class="ornament-top"></div>
        <div class="bg-img"></div>
        <div class="content-text content-invitation rounded membesar py-3 px-1 do-animate">
          <h3 class="h4">"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir. "
        </h3>
          <p>
            Ar Ruum;21</p>
        </div>
        <div class="ornament-bottom"></div>
      </div>
    </section>
  </div>
  <div id="nav-galeri" class="sheet" role="tabpanel" aria-labelledby="nav-galeri-tab">
    <section class="card rounded-0 border-0 shadow p-0 p-0 text-center">
      <div class="frame d-flex flex-column justify-content-center">
        <div class="ornament-top"></div>
        <div class="bg-img"></div>
        <div class="content-invitation">
          <h2 class="h1 fs-1 mb-4 ff-ardila">Galeri</h2>
          <p>Album foto</p>
          <div class='row px-3'>
            <div class='col-6 col-md-3 py-2'>
              <div class="rounded border-0 overflow-hidden" style="border-radius: 17px;">
                <img class="do-animate membesar position-relative gallery" style="max-width:100%;height:auto;z-index:5" onerror="this.onerror=null;this.src='https://www. .com/images/noimage.png';" class='foto-galeri do-animate' alt='Galeri mempelai' loading='lazy' src='/foto/a.jpg' />
              </div>
            </div>
            <div class='col-6 col-md-3 py-2'>
              <div class="rounded border-0 overflow-hidden" style="border-radius: 17px;">
                <img class="do-animate membesar position-relative gallery" style="max-width:100%;height:auto;z-index:5" onerror="this.onerror=null;this.src='https://www. .com/images/noimage.png';" class='foto-galeri do-animate' alt='Galeri mempelai' loading='lazy' src='/foto/b.jpg' />
              </div>
            </div>
            <div class='col-6 col-md-3 py-2'>
              <div class="rounded border-0 overflow-hidden" style="border-radius: 17px;">
                <img class="do-animate membesar position-relative gallery" style="max-width:100%;height:auto;z-index:5" onerror="this.onerror=null;this.src='https://www. .com/images/noimage.png';" class='foto-galeri do-animate' alt='Galeri mempelai' loading='lazy' src='/foto/c.jpg' />
              </div>
            </div>
            <div class='col-6 col-md-3 py-2'>
              <div class="rounded border-0 overflow-hidden" style="border-radius: 17px;">
                <img class="do-animate membesar position-relative gallery" style="max-width:100%;height:auto;z-index:5" onerror="this.onerror=null;this.src='https://www. .com/images/noimage.png';" class='foto-galeri do-animate' alt='Galeri mempelai' loading='lazy' src='/foto/d.jpg' />
              </div>
            </div>
          </div>
        </div>
        <div class="ornament-bottom"></div>
      </div>
    </section>
  </div>
  <div id="nav-tamu" class="sheet" role="tabpanel" aria-labelledby="nav-tamu-tab">
    <section class="card rounded-0 border-0 shadow p-0 p-0">
      <div class="frame d-flex flex-column justify-content-center">
        <div class="ornament-top"></div>
        <div class="bg-img"></div>
        <div class="content-text content-invitation">
          <h2 class="h1 fs-1 mb-2 text-center ff-ardila">Kirim Pesan</h2> Berikan ucapan terbaikmu <form id='form-comment' class="position-relative kekiri do-animate" method='POST' action='{{route('home.store')}}'> @csrf <div class='form-group'>
              <label class="label-name">Nama</label>
              <input type='text' name='name' required class='form-control input-name'>
            </div>
            <div class='form-group'>
              <label class="label-attendance">Konfirmasi Kehadiran</label>
              <select id="attendance-option" class='form-control  select-attendance' name='kehadiran'>
                <option value="Hadir">Hadir</option>
                <option value="Tidak Hadir">Tidak Hadir</option>
              </select>
            </div>
            <div class='form-group'>
              <label class="label-message">Pesan</label>
              <textarea class='form-control textarea-message' rows='4' name='tentang'></textarea>
            </div>
            <div>
              
              <a href="#" style="border-radius:50px;text-decoration:none" onclick="event.preventDefault();this.nextElementSibling.value=''">Batal</a>
              
            </div>
            <div class='form-group clearfix'>
              <button class='btn btn-sm btn-primary float-end btn-sendcomment' type="submit" style="min-width:99px;border-radius:50px">Kirim <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path d="M10 5.9296875L8.5 7.4296875L13.070312 12L8.5 16.570312L10 18.070312L16.070312 12L10 5.9296875 z" fill="white" style='fill:white' />
                </svg>
                <img class="loading-ajax" style='display:none' width="29px" src="images/loading.gif" alt="Loading" loading="lazy">
              </button>
            </div>
          </form>
          <hr />
          <div class='wishes'></div>
          <div id='pagination-wished'>
            @foreach ($data as $item)
                <p>{{$item->name}}    <span class="btn btn-sm btn-primary">{{$item->kehadiran}}</span></p>
                <p style="color: black">{{$item->tentang}}</p>
            @endforeach
            <a id="loadmorefeed" href="ulth-premium009" class="btn btn-sm btn-primary">
              <i class="fas fa-sync-alt"></i> Tampilkan lainnya <img style="display:none" width="23px" class="loading" src="loading.gif" alt="Loading" loading="lazy" />
            </a>
          </div>
        </div>
        <div class="ornament-bottom"></div>
      </div>
    </section>
  </div>
  <div id="nav-lainnya" class="sheet" role="tabpanel" aria-labelledby="nav-lainnya-tab">
    <section class="card rounded-0 border-0 shadow p-0 p-0">
      <div class="frame d-flex flex-column justify-content-center">
        <div class="ornament-top"></div>
        <div class="bg-img"></div>
        <div class="content-text content-invitation">
          <h2 class='h1 fs-1 my-3 ff-ardila text-center '>Kirim Hadiah</h2>
            
        
          <div class='row justify-content-center'>
            <div class='col-md-5 mb-3  '>
              <div class='kado content-text  shadow  bg-white kekiri  do-animate'>
                <h6 class='text-center ff-glacial'>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" style="width: 55px;height: 55px;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                      <path style="fill:#78a0cf" d="M13 27A2 2 0 1 0 13 31A2 2 0 1 0 13 27Z"></path>
                      <path style="fill:#f1bc19" d="M77 12A1 1 0 1 0 77 14A1 1 0 1 0 77 12Z"></path>
                      <path style="fill:#cee1f4" d="M50 13A37 37 0 1 0 50 87A37 37 0 1 0 50 13Z"></path>
                      <path style="fill:#f1bc19" d="M83 11A4 4 0 1 0 83 19A4 4 0 1 0 83 11Z"></path>
                      <path style="fill:#78a0cf" d="M87 22A2 2 0 1 0 87 26A2 2 0 1 0 87 22Z"></path>
                      <path style="fill:#fbcd59" d="M81 74A2 2 0 1 0 81 78 2 2 0 1 0 81 74zM15 59A4 4 0 1 0 15 67 4 4 0 1 0 15 59z"></path>
                      <path style="fill:#78a0cf" d="M25 85A2 2 0 1 0 25 89A2 2 0 1 0 25 85Z"></path>
                      <path style="fill:#fff" d="M18.5 51A2.5 2.5 0 1 0 18.5 56A2.5 2.5 0 1 0 18.5 51Z"></path>
                      <path style="fill:#f1bc19" d="M21 66A1 1 0 1 0 21 68A1 1 0 1 0 21 66Z"></path>
                      <path style="fill:#fff" d="M80 33A1 1 0 1 0 80 35A1 1 0 1 0 80 33Z"></path>
                      <path style="fill:#fde751" d="M47.5,31.982c-1-5.482-10.677-8.999-12.437-2.875C33.5,37.5,47.5,35.481,47.5,35.481V31.982z"></path>
                      <path style="fill:#472b29" d="M44.098,36.397c-2.778,0-6.508-0.432-8.485-2.492c-1.197-1.248-1.613-2.905-1.237-4.927 c0.734-2.568,2.727-3.911,5.459-3.79c3.479,0.173,7.666,2.893,8.354,6.667l0.012,0.126v4.106L47.6,36.174 C47.457,36.195,46,36.397,44.098,36.397z M39.486,26.58c-1.223,0-3.085,0.405-3.75,2.72c-0.278,1.51,0.007,2.72,0.886,3.636 C39,35.413,44.899,35.048,46.8,34.858v-2.812c-0.597-3.045-4.171-5.318-7.035-5.46C39.677,26.582,39.583,26.58,39.486,26.58z"></path>
                      <path style="fill:#fde751" d="M52.5,31.982c1-5.482,10.677-8.999,12.437-2.875C66.5,37.5,52.5,35.481,52.5,35.481V31.982z"></path>
                      <path style="fill:#472b29" d="M55.902,36.397c-1.902,0-3.359-0.202-3.502-0.224L51.8,36.088l0.012-4.232 c0.688-3.774,4.875-6.494,8.354-6.667c2.739-0.12,4.725,1.222,5.443,3.725c0.392,2.087-0.024,3.744-1.222,4.992 C62.41,35.966,58.681,36.397,55.902,36.397z M53.2,34.857c1.901,0.188,7.804,0.552,10.179-1.923c0.878-0.916,1.163-2.126,0.869-3.7 c-0.702-2.433-2.811-2.706-4.013-2.647c-2.864,0.142-6.438,2.415-7.035,5.46V34.857z"></path>
                      <path style="fill:#ea5167" d="M34.798,73.3c-3.914,0-7.098-3.184-7.098-7.098V43.798c0-3.914,3.184-7.098,7.098-7.098h30.404 c3.914,0,7.098,3.184,7.098,7.098v22.404c0,3.914-3.184,7.098-7.098,7.098H34.798z"></path>
                      <path style="fill:#472b29" d="M65.203,37.4c3.528,0,6.397,2.87,6.397,6.397v22.405c0,3.528-2.87,6.397-6.397,6.397H34.797 c-3.528,0-6.397-2.87-6.397-6.397V43.797c0-3.528,2.87-6.397,6.397-6.397H65.203 M65.203,36H34.797C30.509,36,27,39.509,27,43.797 v22.405C27,70.491,30.509,74,34.797,74h30.405C69.491,74,73,70.491,73,66.203V43.797C73,39.509,69.491,36,65.203,36L65.203,36z"></path>
                      <g>
                        <path style="fill:#fde751" d="M49.567,40.3c-1.581,0-2.867-1.286-2.867-2.867v-2.865c0-1.581,1.286-2.867,2.867-2.867h0.865 c1.581,0,2.867,1.286,2.867,2.867v2.865c0,1.581-1.286,2.867-2.867,2.867H49.567z"></path>
                        <path style="fill:#472b29" d="M50.432,32.4c1.195,0,2.167,0.972,2.167,2.168v2.865c0,1.195-0.972,2.168-2.167,2.168h-0.865 c-1.195,0-2.167-0.972-2.167-2.168v-2.865c0-1.195,0.972-2.168,2.167-2.168H50.432 M50.432,31h-0.865 C47.605,31,46,32.605,46,34.568v2.865C46,39.395,47.605,41,49.568,41h0.865C52.395,41,54,39.395,54,37.432v-2.865 C54,32.605,52.395,31,50.432,31L50.432,31z"></path>
                      </g>
                      <g>
                        <path style="fill:#ea5167" d="M27.933,48.3c-0.68,0-1.232-0.553-1.232-1.232v-4.339c0-3.876,3.152-7.028,7.028-7.028h32.543 c3.876,0,7.028,3.152,7.028,7.028v4.339c0,0.68-0.553,1.232-1.232,1.232H27.933z"></path>
                        <path style="fill:#472b29" d="M66.271,36.4c3.49,0,6.329,2.839,6.329,6.329v4.339c0,0.293-0.239,0.532-0.532,0.532H27.932 c-0.293,0-0.532-0.239-0.532-0.532v-4.339c0-3.49,2.839-6.329,6.329-6.329H66.271 M66.271,35H33.729C29.46,35,26,38.46,26,42.729 v4.339C26,48.135,26.865,49,27.932,49h44.136C73.135,49,74,48.135,74,47.068v-4.339C74,38.46,70.54,35,66.271,35L66.271,35z"></path>
                      </g>
                      <g>
                        <path style="fill:#fde751" d="M59.569,28.942c0.836-0.194,1.722-0.159,2.598,0.279"></path>
                        <path style="fill:#472b29" d="M62.167,29.471c-0.038,0-0.076-0.009-0.112-0.026c-0.744-0.373-1.563-0.459-2.43-0.26 c-0.139,0.036-0.269-0.053-0.3-0.187c-0.031-0.135,0.053-0.27,0.187-0.3c0.986-0.229,1.916-0.127,2.768,0.299 c0.123,0.062,0.173,0.212,0.111,0.336C62.347,29.42,62.259,29.471,62.167,29.471z"></path>
                      </g>
                      <g>
                        <path style="fill:#fde751" d="M55,32.167c0,0,1.159-1.487,2.797-2.475"></path>
                        <path style="fill:#472b29" d="M55,32.417c-0.054,0-0.108-0.018-0.153-0.053c-0.109-0.085-0.129-0.242-0.044-0.351 c0.049-0.063,1.207-1.535,2.865-2.536c0.117-0.07,0.271-0.034,0.343,0.085c0.071,0.118,0.033,0.271-0.085,0.343 c-1.576,0.951-2.718,2.401-2.729,2.415C55.147,32.384,55.074,32.417,55,32.417z"></path>
                      </g>
                      <g>
                        <path style="fill:#fde751" d="M37.875,28.875c0,0,4.062-0.938,6.812,3.313"></path>
                        <path style="fill:#472b29" d="M44.688,32.438c-0.082,0-0.162-0.04-0.21-0.114c-2.617-4.044-6.39-3.242-6.547-3.204 c-0.132,0.032-0.268-0.054-0.299-0.188s0.053-0.269,0.187-0.299c0.044-0.009,4.268-0.925,7.079,3.42 c0.075,0.116,0.042,0.271-0.074,0.346C44.781,32.425,44.734,32.438,44.688,32.438z"></path>
                      </g>
                      <g>
                        <path style="fill:#472b29" d="M63.622,70H49.5c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h14.122 C66.036,69,68,67.036,68,64.622V62.5c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v2.122C69,67.588,66.588,70,63.622,70z"></path>
                      </g>
                      <g>
                        <path style="fill:#472b29" d="M68.5,58.917c-0.276,0-0.5-0.224-0.5-0.5V51.75c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v6.667 C69,58.693,68.776,58.917,68.5,58.917z"></path>
                      </g>
                      <g>
                        <path style="fill:#472b29" d="M43.5,70h-7.122C33.412,70,31,67.588,31,64.622V62.5c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5 v2.122C32,67.036,33.964,69,36.378,69H43.5c0.276,0,0.5,0.224,0.5,0.5S43.776,70,43.5,70z"></path>
                      </g>
                      <g>
                        <path style="fill:#472b29" d="M31.5,60c-0.276,0-0.5-0.224-0.5-0.5v-4c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v4 C32,59.776,31.776,60,31.5,60z"></path>
                      </g>
                      <g>
                        <path style="fill:#472b29" d="M31.5,53.5c-0.276,0-0.5-0.224-0.5-0.5v-2c0-0.276,0.224-0.5,0.5-0.5S32,50.724,32,51v2 C32,53.276,31.776,53.5,31.5,53.5z"></path>
                      </g>
                      <g>
                        <path style="fill:#fde751" d="M45.7 35.7H54.300000000000004V73.30000000000001H45.7z"></path>
                        <path style="fill:#472b29" d="M53.6,36.4v36.2h-7.2V36.4H53.6 M55,35H45v39h10V35L55,35z"></path>
                      </g>
                      <g>
                        <path style="fill:#472b29" d="M51.5,43.75c-0.138,0-0.25-0.112-0.25-0.25v-5c0-0.138,0.112-0.25,0.25-0.25s0.25,0.112,0.25,0.25v5 C51.75,43.638,51.638,43.75,51.5,43.75z"></path>
                      </g>
                      <g>
                        <path style="fill:#472b29" d="M51.5,69.75c-0.138,0-0.25-0.112-0.25-0.25v-23c0-0.138,0.112-0.25,0.25-0.25s0.25,0.112,0.25,0.25 v23C51.75,69.638,51.638,69.75,51.5,69.75z"></path>
                      </g>
                    </svg>
                  </svg>
                  <br />
                  <span>Hadiah</span>
                </h6>
                <hr />
                <div class="content-gift">302501018981536 (BRI)<br />
                    Atas Nama A.n Waqiah  <br />
                    [087867190647] (Shoppepay)<br />
                    Atas Nama Irfan Fauzi </div>
              </div>
            </div>
          </div>
          <div class='text-center'>
            <p>"Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/I berkenan hadir untuk memberikan do'a restu kepada kedua mempelai "</p>
            <div class="h4 ff-andina m-5" style="line-height:2.5"> Wassalamu'alaikum Warahmatullahi Wabarakatuh.</div>
            <div>
              <div class="ff-arefruqaa h3 fw-bold text-center"> Irfan Fauzi </div>
            </div>
            <br />
            <div>
              <div class="credit">
                <!-- <div class='custom-credit' style="font-size:14pt">........<br/>Created With <div class="fs-1">❤</div><strong>Full Of Love</strong></div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="ornament-bottom"></div>
      </div>
    </section>
  </div>
@endsection