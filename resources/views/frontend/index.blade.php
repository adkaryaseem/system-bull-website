@extends("frontend.layouts.main")
<!-- to push title to template in layouts -->
@push("title")
  <title>Home</title>
@endpush
<!-- to push css to template layouts -->
@push("css")
<link rel="stylesheet" href="{{ asset('frontend/css/index-style.css') }}" />
@endpush
<!-- to insert the main page to the template in layouts -->
@section("main-content")
    <main>
      <hr/>
        <div class="owl-carousel">
          {{-- <div class="scrolling s-photo">
            <img src="{{ asset('frontend/image/china_MG_5565.jpg') }}"/>
          </div>
          <div class="scrolling s-photo">
            <img
              src="{{ asset('frontend/image/434316613_832874108857144_6400793180887103236_n.jpg') }}"/>
          </div>
          <div class="scrolling s-photo">
            <img src="{{ asset('frontend/image/IMG_20180924_163255.jpg') }}"/>
          </div>
          <div class="scrolling s-photo">
            <img src=".{{ asset('frontend/image/intro.jpg') }}"/>
          </div>
          <div class="scrolling s-photo">
            <img src="{{ asset('frontend/image/sl-1.jpeg')}}"/>
          </div> --}}
          @foreach ($scrolling as $photo)   
          <div class="scrolling s-photo">
            <img src="{{ asset('storage/'.$photo->images) }}"/>
          </div>
          @endforeach
        </div>
        <hr/>
        <!-- Notice Start -->
         <div class="notice-marque">
                <div class="notice-box">
                    <i class="fa-regular fa-bell"></i>
                          Notice
                </div>
          <div class="marquee">
               <marquee behavior="scrolling" direction="rights" onmouseover="this.stop();" onmouseout="this.start();" >
                <ul>
                  <li>
                      <a href="{{ route('news-notice') }}">
                          Dashin Vaccation Start Date (2081-06-31)
                      </a>
                    </li>
                  <li>
                      <a href="{{ route('news-notice') }}">
                          Holiday for Janai Purnima
                      </a>
                    </li>
                  <li>
                    <a href="{{ route('news-notice') }}">
                          Holiday for Teej Festival
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('news-notice') }}">
                          Holiday for Maghe Sankranti
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('news-notice') }}">
                          Holiday for Shivaratri
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('news-notice') }}">
                          Holiday for Holi
                    </a>
                  </li>
                </ul>
              </marquee>
          </div>
         </div>
         <!-- Notice End -->
      <!-- Message From Chairman -->
      <div class="gr-bhatta">
        <div class="gr-bhatta-msg">
          <div class="title">
            <h3>
              <!-- <abbr title="Gyanendra Raj Bhatta"> -->
              Message From Chairman
              <!-- </abbr>  -->
            </h3>
          </div>
          @foreach ($chairman as $cman)
            
          <div class="cman-img">
            <div>
              <img src="{{asset("storage/".$cman->image)}}" class="intr-img" />
            </div>
          </div>
        </div>
        <div class="cman-msg">
          <span class="msg">
            {{ $cman->message }}
          </span>
          @endforeach
          <div class="msg-btn">
            <button class="rdmr-btn">Read More</button>
          </div>
        </div>
      </div>
      <!-- College Information -->
      <div class="info">
        <div class="card">
          <h2>Diploma In Information And Communication Technology</h2>
          <ul type="none">
            <li>1 Year Study 2 Years OJT</li>
            <li>
              1 Year Study (Professional Computer Hardware & Network Technician)
            </li>
            <li>2 Years OJT (Job)</li>
            <button class="lrn-mor">Learn More</button>
          </ul>
        </div>
        <div class="info-img">
          <img src="{{ asset('frontend/image/434316613_832874108857144_6400793180887103236_n.jpg')}}" alt="award"/>
        </div>
        <div class="info-img">
          <img src="{{ asset('frontend/image/page0001.jpg')}}"  alt="ctevt pass students" />
        </div>
      </div>
      <!-- College Introduction -->
      @foreach ($introductions as $introduction)  
      <div class="sys-intro">
        <div class="int">
          <div class="topic">
            <h1>Introduction</h1>
          </div>
          <span class="intro-text">
            {{ $introduction->message }}
            <div>
              <button class="over-view">College Overview</button>
            </div>
          </span>
        </div>
        <div class="clz-intro-img">
          <img src="{{ asset('storage/'.$introduction->image)}}" class="sys-intro-img" />
        </div>
      </div>
      @endforeach
      <!-- why system Bull? -->
      <div class="why-bull">
        <div>
          <iframe
            class="video"
            src="https://www.youtube.com/embed/lUbe1esJiEE"
            title="GOByjRk3VWC4HlAGAMbVvWIuTrBMbmdjAAAF"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
          ></iframe>
        </div>
        <div class="qsn-ans">
          <div class="topic">
            <h1>Why System Bull?</h1>
          </div>
          <div class="answer">
            @foreach ($why as $bull)
            {{ $bull->message }}
            @endforeach
            <div class="msg-btn">
              <button class="rdmr-btn">Read More</button>
            </div>
          </div>
        </div>
      </div>
      <!-- College background with logo and name -->
      <div class="college-background">
        <div>
          <img
            src="{{asset("frontend/image/logo-white-bg-circle.png")}}"
            class="college-background-logo"
          />
        </div>
        <div class="college-bg-text">
          <h2>System Bull ICT College</h2>
          <div class="college-bg-text text-2">
            <h2>Affiliated To CTEVT</h2>
          </div>
        </div>
      </div>
      <!-- Students Life -->
      <div class="student-life-sec">
        <div class="student-life">
          <div class="student-life-text">
            <span> Student Life </span>
            <div style="max-width: 100px">
              Our students create a vibrant and inclusive community
            </div>
          </div>
          <div class="student-life-img">
            <div>
              <img src="{{asset("frontend/image/sl-1.jpeg")}}" alt="sl-1" class="sl-1" />
            </div>
            <div>
              <img src="{{asset("frontend/image/sl-2.jpeg")}}" alt="sl-2" class="sl-2" />
            </div>
            <div>
              <img src="{{asset("frontend/image/sl-3.jpeg")}}" alt="sl-3" class="sl-3" />
            </div>
          </div>
        </div>
      </div>
      <!-- Message From Principal, History, Vision & Mission-->
      <div class="bull-all">
        <div class="ocm">
          <div class="overview">
            <a>Overview</a>
          </div>
          <div class="campus-info">
            <a>Campus Info</a>
          </div>
          <div class="msg-princi">
            <a>Message from Principal</a>
          </div>
        </div>
        <div class="history">
          <span class="topic">History</span> <br />
          System Bull ICT College has Over 4,000 alumni. They are pursuing their
          career and studies around the...
          <div class="msg-btn">
            <button class="rdmr-btn">Read More</button>
          </div>
        </div>
        <div class="vision-mission">
          <span class="topic">Vision & Mission</span> <br />
          To develop middle and top-level Technical professionals with high
          caliber ready to accept ever-gr...
          <div class="msg-btn">
            <button class="rdmr-btn">Read More</button>
          </div>
        </div>
      </div>
      <div class="resource-facility">
        <div class="resource-facility-text1">
          <div class="topic size-inc">
            System Bull ICT College Resources & Facilities
          </div>
          <div class="resource-facility-text2">
            In recent years, Technical Education has witnessed an exponential
            rise in popularity and significance. Keeping in mind this steady
            craze for Technical studies, a well managed educational institution
            run with top tier infrastructure and an experienced team of faculty
            members is seen to be monumental.
            <div class="msg-btn">
              <button class="rdmr-btn">Discover More</button>
            </div>
          </div>
        </div>
        <div class="resource-facility-img">
          <img src="{{asset("frontend/image/college-building.jfif")}}" />
        </div>
      </div>
      <!-- knowledge partner -->
      <div class="knowledge-partner">
        <div class="topic knowledge-topic">Our Knowledge Partner</div>
        <div class="knowledge-logo">
          <div class="nectra">
            <img src="{{asset("frontend/image/nectra-site-logo.png")}}" />
          </div>
          <div class="ctevt">
            <img src="{{asset("frontend/image/ctvt_logo.png")}}" />
          </div>
          <div class="shyang">
            <img src="{{asset("frontend/image/shyang-logo.jpg")}}" />
          </div>
        </div>
      </div><hr/><br/>
       <!-- knowledge partner end -->
        <!-- student testimonial -->
      <!-- Set up your HTML -->
      <div class="testimonials">
        Student Testimonials
      </div><br/>
      <div class="owl-carousel">
        @foreach ($testimonials as $testimonial)  
        <div class="card-1 d-flex">
          <img
            src="{{ asset('storage/'.$testimonial->image) }}"
            alt="No Internert Connection yet"
          />
          <p
            style="
              width: 200px;
              padding: 10px;
              margin: 10px;
              background: #cccc;
              border-radius: 10px;
            "
          >
            {{ $testimonial->message }}
          </p>
        </div>
        @endforeach
        {{-- <div class="card-1 d-flex">
          <img
            src="https://picsum.photos/200/200"
            alt="No Internert Connection yet"
          />
          <p
            style="
              width: 200px;
              padding: 10px;
              margin: 10px;
              background: #cccc;
              border-radius: 10px;
            "
          >
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi error
            unde, earum quibusdam totam odit nostrum perspiciatis? Incidunt, ex
            voluptatum! Molestiae vero deleniti deserunt architecto modi
            temporibus quo necessitatibus dolorum?
          </p>
        </div>
        <div class="card-1 d-flex">
          <img
            src="https://picsum.photos/200/200"
            alt="No Internert Connection yet"
          />
          <p
            style="
              width: 200px;
              padding: 10px;
              margin: 10px;
              background: #cccc;
              border-radius: 10px;
            "
          >
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi error
            unde, earum quibusdam totam odit nostrum perspiciatis? Incidunt, ex
            voluptatum! Molestiae vero deleniti deserunt architecto modi
            temporibus quo necessitatibus dolorum?
          </p>
        </div>
        <div class="card-1 d-flex">
          <img
            src="https://picsum.photos/200/200"
            alt="No Internert Connection yet"
          />
          <p
            style="
              width: 200px;
              padding: 10px;
              margin: 10px;
              background: #cccc;
              border-radius: 10px;
            "
          >
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi error
            unde, earum quibusdam totam odit nostrum perspiciatis? Incidunt, ex
            voluptatum! Molestiae vero deleniti deserunt architecto modi
            temporibus quo necessitatibus dolorum?
          </p>
        </div>
        <div class="card-1 d-flex">
          <img
            src="https://picsum.photos/200/200"
            alt="No Internert Connection yet"
          />
          <p
            style="
              width: 200px;
              padding: 10px;
              margin: 10px;
              background: #cccc;
              border-radius: 10px;
            "
          >
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi error
            unde, earum quibusdam totam odit nostrum perspiciatis? Incidunt, ex
            voluptatum! Molestiae vero deleniti deserunt architecto modi
            temporibus quo necessitatibus dolorum?
          </p>
        </div>
        <div class="card-1 d-flex">
          <img
            src="https://picsum.photos/200/200"
            alt="No Internert Connection yet"
          />
          <p
            style="
              width: 200px;
              padding: 10px;
              margin: 10px;
              background: #cccc;
              border-radius: 10px;
            "
          >
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi error
            unde, earum quibusdam totam odit nostrum perspiciatis? Incidunt, ex
            voluptatum! Molestiae vero deleniti deserunt architecto modi
            temporibus quo necessitatibus dolorum?
          </p>
        </div>
        <div class="card-1 d-flex">
          <img
            src="https://picsum.photos/200/200"
            alt="No Internert Connection yet"
          />
          <p
            style="
              width: 200px;
              padding: 10px;
              margin: 10px;
              background: #cccc;
              border-radius: 10px;
            "
          >
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi error
            unde, earum quibusdam totam odit nostrum perspiciatis? Incidunt, ex
            voluptatum! Molestiae vero deleniti deserunt architecto modi
            temporibus quo necessitatibus dolorum?
          </p>
        </div> --}}
      </div>
    </main>
@endsection