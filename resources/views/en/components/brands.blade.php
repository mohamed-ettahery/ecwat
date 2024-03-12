<section class="section brands {{ $with_heading ? 'brands--with-heading' : '' }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading primary-heading">
                    <h3 class="title">Our Brands</h3>
                    <h5 class="subtitle"><span>Ecwat</span> <span>Brands</span></h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- brands slider start-->
                <div class="brands-holder">
                    <div class="brands-slider">
                        {{-- @foreach (App\Http\controllers\admin\MarkController::getAllMarks() as $mark) --}}
                        @foreach (App\Models\Mark::all() as $mark)
                            <!-- item start-->
                            <div class="slider-item">
                                <img src="{{ asset('uploads/marks/' . $mark->image) }}" alt="{{ $mark->en_name }}" />
                            </div>
                            <!-- item end-->
                        @endforeach
                    </div>
                    <div class="brands-dots"></div>
                </div>
                <!-- brands slider end-->
            </div>
        </div>
    </div>
</section>
