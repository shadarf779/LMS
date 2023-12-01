

<x-layout-myactivity>



<!--    ---------------------------- Course Table  -------------------------- -->

@auth

<div class="activity">
    <div class="title">
        <i class="uil uil-clock-three"></i>
        <span class="text">Your Activity </span>
    </div>

    <div class="activity-data">
        <div class="data names">
            <span class="data-title">Name</span>

            @foreach ($relation as $appoints)
            <?php $activity = App\Models\Activites::find($appoints->activites_id); ?>

            @if ($activity)
                <span class="text">{{ $activity->name }}</span>
            @endif
        @endforeach



        </div>

        <div class="data joined">
            <span class="data-title">date</span>

        @foreach ($relation as $appoints)
        <?php $activity = App\Models\Activites::find($appoints->activites_id); ?>

        @if ($activity)
            <span class="text">{{ $activity->date }}</span>
        @endif
    @endforeach


        </div>
        <div class="data type">
            <span class="data-title">Location</span>


        @foreach ($relation as $appoints)
        <?php $activity = App\Models\Activites::find($appoints->activites_id); ?>

        @if ($activity)
            <span class="text">{{ $activity->location }}</span>
        @endif
    @endforeach


        </div>
        <div class="data status">
            <span class="data-title">Status</span>


            @foreach ($relation as $appoints)
            <?php $activity = App\Models\Activites::find($appoints->activites_id); ?>

            @if ($activity)
                <span class="text">{{ $appoints->status }}</span>
            @endif
        @endforeach
        </div>
    </div>
</div>

@else

   <div class="activity">
       <div class="title">
           <i class="uil uil-clock-three"></i>
           <span class="text">Your Activity </span>
       </div>

       <div class="activity-data">
           <div class="data names">



                   <span class="text">
                    <b>first you must <a href="/register">sign up</a> or <a href="/login">Login</a></b>
                    to see Your Activity
                   </span>





           </div>


</div>
</div>


   @endauth











</x-layout-myactivity>
