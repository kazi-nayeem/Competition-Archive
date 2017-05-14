<div class="row text-center">
    <div  class="col-md-12 competition-list" >
        <div class="panel" style="background-color: #b3b3ff; border-radius: 10px">
            <h2>{{ $competitionlisttitle }}</h2>
        </div>
        <div class="row" style="padding-top: 15px">
            <div class="col-md-4">
                <div class="panel panel-default" style="border-radius: 15px;">
                    <div class="panel-heading" style="border-top-left-radius: 15px; border-top-right-radius: 15px; padding: 2px; background-color: rgba(46,191,17,0.62)">
                        <h3>Running</h3>
                    </div>
                    <div class="panel-body">
                        @forelse($competitionscurrent as $competition)
                            <li><a href="{{ url('competition/'.$competition->id) }}">{{ $competition->title }}</a></li>
                        @empty
                            <p>No Running Competition Found</p>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default" style="border-radius: 15px">
                    <div class="panel-heading" style="border-top-left-radius: 15px; border-top-right-radius: 15px; padding: 2px; background-color: rgba(53,185,255,0.62)">
                        <h3>Upcoming</h3>
                    </div>
                    <div class="panel-body">
                        @forelse($competitionsupcoming as $competition)
                            <li><a href="{{ url('competition/'.$competition->id) }}">{{ $competition->title }}</a></li>
                        @empty
                            <p>No Running Competition Found</p>
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default" style="border-radius: 15px">
                    <div class="panel-heading" style="border-top-left-radius: 15px; border-top-right-radius: 15px; padding: 2px; background-color: rgba(255,55,26,0.62)">
                        <h3>Previous</h3>
                    </div>
                    <div class="panel-body">
                        @forelse($competitionsended  as $competition)
                            <li><a href="{{ url('competition/'.$competition->id) }}">{{ $competition->title }}</a></li>
                        @empty
                            <p>No Running Competition Found</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>