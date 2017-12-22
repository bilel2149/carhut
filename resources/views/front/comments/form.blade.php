<div class="comment-form wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">

    <div class="group-title">
        <h2>Ajouter un commentaire</h2>
    </div>

    <!--Comment Form-->
    <form method="POST" action="{{ route('comments.store') }}">
      {{ csrf_field() }}
      <input type="hidden" name="post_id" value="{{ $post_id }}" />
        <div class="row clearfix">
            <div class="col-md-4 col-sm-6 col-xs-12 form-group{{ $errors->has('comment_author') ? ' has-error' : '' }}">
                <input type="text" name="comment_author" placeholder="Votre nom" value="{{ old('comment_author') }}">
                @if ($errors->has('comment_author'))
                    <span class="help-block">
                        <strong>{{ $errors->first('comment_author') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 form-group{{ $errors->has('comment_author_email') ? ' has-error' : '' }}">
                <input type="email" name="comment_author_email" placeholder="Votre Email" value="{{ old('comment_author_email') }}">
                @if ($errors->has('comment_author_email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('comment_author_email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                <input type="text" name="comment_author_url" placeholder="Site web" value="{{ old('comment_author_url') }}">
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                <textarea name="comment_content" placeholder="Votre message">{{ old('comment_content') }}</textarea>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                <button class="theme-btn btn-style-one" type="submit" name="submit-form">Envoyer <span class="icon fa fa-long-arrow-right"></span>
                </button>
            </div>

        </div>
    </form>

</div>
