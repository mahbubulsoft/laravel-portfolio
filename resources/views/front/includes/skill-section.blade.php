<section id="skill" class="root-sec white skill-wrap">
    <div class="sec-overlay">
        <div class="container">
            <div class="row">
                <div class="clearfix skill-inner">
                    <div class="col-sm-12 col-md-3">
                        <div class="skill-left">
                            <h2 class="title">Skills</h2>
                            <p class="regular-text">{{$administrator->skill_content}}</p>
                        </div>
                    </div>

                    <!-- skills container -->
                    <div class="col-sm-12 col-md-6 col-md-offset-1">
                        <div class="skill-right">
                            <div id="skillSlider" class="clearfix skill-graph">
                            @foreach($skills as $skill)
                                <!-- single skill -->
                                <div class="single-skill">
                                    <div class="after-li">
                                        <div class="singel-hr">
                                            <div class="singel-hr-inner" data-height="{{$skill->skill_percentage}}%">
                                                <div class="skill-visiable">
                                                    <span class="skill-title">{{$skill->skill_name}}</span>
                                                    <div class="hr-wrap">
                                                        <div class="hrc"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="skill-count">{{$skill->skill_percentage}}%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /single skill-->

                                @endforeach

                                <!-- single skill -->
                            </div>
                        </div>
                    </div>
                    <!-- /skills container -->
                </div>
            </div>
            <div class="btn-wrapp skl-ctrl">
                <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-left"><i class="mdi-navigation-chevron-left "></i></a>
                <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-right"><i class="mdi-navigation-chevron-right "></i></a>
            </div>
        </div>
    </div>
    <!-- .container end -->
</section>