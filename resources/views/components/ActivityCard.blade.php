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
                                <h5 class="card-title">{{$post->name}}</h5>
                                <p class="card-text">{{$post->descrition}}
                                </p>
                                <span class="mt-2 block text-gray-400 text-xs">
                                    Published <time>{{ $post->created_at->diffForHumans() }}</time>
                                </span><br>
                                <a
                                href="/Activites/{{ $post->id }}"
                                class="btn btn-primary btn"
                            >
                                Enroll NOW
                            </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                    @endif
