@foreach ($service->posts->reverse() as $post)
<div class="card">
    <div class="card-body">
        <div class="tab-content">
            <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                    <div class="user-block">
                      <img class="img-circle img-bordered-sm" src="{{ Gravatar::get($post->profile->user->email) }}" alt="user image">
                        <span class="username">
                            <a href="{{ route('profile.show', $post->profile) }}"> {{ $post->profile->firstname . " " . $post->profile->lastname }}</a>
                        </span>
                        <span class="description">Publicado - {{ $post->created_at->setTimezone('America/Lima') }}</span>
                    </div>
                    <!-- user-block -->
                    <p>
                        {{ $post->body }}
                    </p>
                    <p>
                        <a class="link-black text-sm mr-2" href="#">
                            <i class="fas fa-share mr-1"></i>
                            Compartir
                        </a>
                        <a class="link-black text-sm" href="#">
                            <i class="far fa-thumbs-up mr-1"></i>
                            Me gusta
                        </a>
                        <span class="float-right">
                            <a class="link-black text-sm" href="#">
                                <i class="far fa-comments mr-1">
                                    Comentarios ({{$post->comments->count()}})
                                </i>
                            </a>
                        </span>
                    </p>
                </div>
                <!-- / .post -->
            </div>
        </div>
    </div>
    <div class="card-footer card-comments">
        @foreach ($post->comments as $comment)
        <div class="card-comment">
          <img class="img-circle img-sm" src="{{ Gravatar::get($comment->profile->user->email) }}" alt="User image">
            <div class="comment-text">
                <span class="username">
                    <a style="color:#495057" href="{{ route('profile.show', $comment->profile) }}">{{ $comment->profile->firstname . ' ' . $comment->profile->lastname }}</a>
                    <span class="text-muted float-right">{{ $comment->created_at->setTimezone('America/Lima') }}</span>
                </span>
                <!-- /.username -->
                {{ $comment->body }}
            </div>
            <!-- ./comment-text -->
        </div>
        <!-- /.card-comment -->
        @endforeach

        <div class="card-footer">
            <form class="form-horizontal" action="{{ route('comment.store') }}" method="post">
                {{csrf_field()}}
                <div class="input-group input-group-sm mb-0">
                    <input class="form-control form-control-sm" type="text" name="body" id="" placeholder="Respuesta">
                    <input type="hidden" name="post_id" id="" value="{{ $post->id }}">
                    <input type="hidden" name="profile_id" id="" value="{{ \Auth::user()->profile->id }}">
                    <div class="input-group-append">
                        <button class="btn btn-danger" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endforeach
