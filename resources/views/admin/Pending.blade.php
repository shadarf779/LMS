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
                    <span class="text">Pending</span>
                </div>
                <div class="boxes">

                    <div class="box box3">
                        <i class="uil uil-share"></i>
                        <span class="text">Pending Users</span>
                        <span class="number">{{$REQUEST}}</span>
                    </div>
                </div>
            </div>
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>

                    <span class="text">Recent PENDING JOINED USER </span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        @foreach($registerrequest as $registerrequests)
                        <?php $user = App\Models\User::find($registerrequests->user_id); ?>
                        <span class="data-list">{{$user->name}}</span>
                        @endforeach

                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        @foreach($registerrequest as $registerrequests)
                        <?php $user = App\Models\User::find($registerrequests->user_id); ?>
                        <span class="data-list">{{$user->email}}</span>
                        @endforeach

                    </div>
                   
                    <div class="data type">
                        <span class="data-title">Acitivity Name</span>
                        @foreach($registerrequest as $registerrequests)
                        <?php $activity = App\Models\Activites::find($registerrequests->activites_id); ?>
                        <span class="data-list">{{$activity->name}}</span>
                        @endforeach
                    </div>
                    <div class="data status">
                        <span class="data-title">Status</span>

                        @foreach($registerrequest as $registerrequests)

                        <span class="data-list">{{$registerrequests->status}}</span>


                       @endforeach
                    </div>
                    <div class="data status">
                        <span class="data-title">Aprove</span>

                        @foreach($registerrequest as $registerrequests)
                        <a href="{{url('Aprove',$registerrequests->id)}}"    class="success-btn" ><i class="material-icons"  title="Aprove">Aprove</i></a>



                       @endforeach
                    </div>
                    <div class="data status">
                        <span class="data-title">Reject</span>

                        @foreach($registerrequest as $registerrequests)
                        <a href="{{url('reject',$registerrequests->id)}}"    class="custom-btn" ><i class="material-icons"  title="Delete">Reject</i></a>

                       @endforeach
                    </div>
                </div>
            </div>
            </div>

        </div>
    </section>
</x-admin-layout>
