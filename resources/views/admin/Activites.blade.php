<x-admin-layout>



    <!------------------------------------------------ Dashboard ------------------------------------------------>

    <section class="dashboard">

        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            <img src="img/profile.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Activites</span>
                </div>
                <div class="boxes">

                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <span class="text">Total activites</span>
                        <span class="number">{{$ACTIVE}}</span>
                    </div>
                </div>
            </div>
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>

                    <span class="text">All activites  </span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Title</span>
                        @foreach($activites as $activity)

                        <span class="data-list">{{$activity->name}}</span>
                        @endforeach

                    </div>
                   

                    <div class="data email">
                        <span class="data-title">location</span>
                        @foreach($activites as $activity)
                        <span class="data-list">{{$activity->location}}</span>
                        @endforeach

                    </div>

                    <div class="data email">
                        <span class="data-title">MaxPartcipants</span>
                        @foreach($activites as $activity)
                        <span class="data-list">{{$activity->MaxPartcipants}}</span>
                        @endforeach

                    </div>

                    <div class="data email">
                        <span class="data-title">deadline</span>
                        @foreach($activites as $activity)
                        <span class="data-list">{{$activity->deadline}}</span>
                        @endforeach

                    </div>
                    <div class="data email">
                        <span class="data-title">updated At</span>
                        @foreach($activites as $activity)
                        <span class="data-list">{{$activity->updated_at}}</span>
                        @endforeach

                    </div>

                    <div class="data email">
                        <span class="data-title">Status</span>
                        @foreach($activites as $activity)
                        <a href="{{url('Edit',$activity->id)}}"    class="success-btn" ><i class="material-icons"  title="Edit">Edit</i></a>
                        @endforeach

                    </div>

                </div>
            </div>
            </div>

        </div>
    </section>
</x-admin-layout>
