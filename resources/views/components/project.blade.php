<section class="project section-padding" id="project">
    <div class="container-fluid">
        <div class="row">

            <div class="col-12">

                <h2 class="text-center" data-aos="fade-up">
                    Perubahan satu hari untuk masa depan
                </h2>

                <h2 class="mb-5 text-center">
                    <strong>Kota Surakarta</strong>
                </h2>

                <div class="owl-carousel owl-theme" id="project-slide">
                    @foreach ($projects as $i => $project)
                    <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{asset('images/project/'. $project['image'])}}" class="img-fluid"
                            alt="project image">

                        <div class="project-info">
                            <a href="javascript:void(0)" show-program data-index="{{$i}}">
                                <span>{{$project['program']}}</span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

{{-- <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                        <div class="project-info">
                            <div class="icon">
                                {!! $project['icon'] !!}
                            </div>

                            <a href="javascript:void(0)" show-program data-index="{{$i}}">
<span>{{$project['program']}}</span>
</a>
</div>
</div> --}}
