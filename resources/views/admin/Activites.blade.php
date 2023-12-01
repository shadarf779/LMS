<x-admin-layout>



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
                    <div class="box box1">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="text">Total Activity</span>
                        <span class="number">{{$ACTIVE}}</span>
                    </div>


                </div>
            </div>
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>

                    <span class="text">All activites </span>
                </div>
                <x-ActivityCard :activites="$activites" />
                {{ $activites->links('pagination::bootstrap-5') }}
            </div>

        </div>
    </section>
</x-admin-layout>

</x-admin-layout>
