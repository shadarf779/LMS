@props(['activites'])

@if ($activites->count() >= 1)

<div class="row">
        @foreach ($activites as $post)

                <!-- Row 1 -->
                    <div class="col-md-4">
                        <div class="card mb-4 rounded-0 border-0 p-3">
                            <div class="card-body text-center">
                                <i
                                    class="fas fa-atom fa-3x text-primary bg-light rounded-circle p-3 my-4"
                                ></i>
                                <h5 class="card-title">Scientific Insights</h5>
                                <p class="card-text">
                                    Explore the latest scientific research and
                                    gain valuable insights into various
                                    subjects, from physics to biology.
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                    @endif
