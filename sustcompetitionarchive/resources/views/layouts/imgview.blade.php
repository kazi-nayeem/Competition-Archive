
        <div class="row text-center">
            <div  class="col-md-12" >
                <div id="carousel-example" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        @php
                            $imagecnt = 0;
                        @endphp
                        @foreach($images as $image)
                        <div class="item {{ ($imagecnt == 0)? 'active': '' }}">
                            <img src="{{ Storage::url($image->path) }}" alt=""  style="width: 1920px; height: 400px"/>
                        </div>
                            @php
                                $imagecnt = $imagecnt+1;
                            @endphp
                        @endforeach
                    </div>
                    <ol class="carousel-indicators">
                        @for ($i = 0; $i < $imagecnt; $i++)
                            <li data-target="#carousel-example" data-slide-to="{{ $i }}" class="{{ ($i == 0)? 'active': '' }}"></li>
                        @endfor
                    </ol>
                </div>

            </div>
        </div>
