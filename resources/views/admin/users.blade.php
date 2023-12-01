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
                    <span class="text">Dashboard</span>
                </div>
                <div class="boxes">

                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <span class="text">Total user</span>
                        <span class="number">{{$USER}}</span>
                    </div>
                </div>
            </div>
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>

                    <span class="text">All users  </span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        @foreach($users as $user)

                        <span class="data-list">{{$user->name}}</span>
                        @endforeach

                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        @foreach($users as $user)
                        <span class="data-list">{{$user->email}}</span>
                        @endforeach

                    </div>

                    <div class="data joined">
                        <span class="data-title">Joined At</span>
                        @foreach($users as $user)
                        <span class="data-list">{{$user->updated_at}}</span>
                       @endforeach
                    </div>

                    <div class="data joined">
                        <span class="data-title">Created at</span>
                        @foreach($users as $user)
                        <span class="data-list">{{$user->created_at}}</span>
                       @endforeach
                    </div>
                    <div class="data status">
                        <span class="data-title">Role</span>

                        @foreach($users as $user)

                        <span class="data-list">{{$user->Role}}</span>


                       @endforeach
                    </div>

                </div>
            </div>
            </div>

        </div>
    </section>
</x-admin-layout>
