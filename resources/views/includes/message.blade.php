@if(Session::has('success'))
<div class="ui green message">
            <i class="close icon"></i>
            <div class="header">
              Your post was successfully created.
            </div>
            <p>{{ Session::get('success') }}</p>
</div>
@endif

@if(Session::has('updated'))
<div class="ui green message">
            <i class="close icon"></i>
            <div class="header">
              Your post was successfully Updated.
            </div>
            <p>{{ Session::get('updated') }}</p>
</div>
@endif


@if(Session::has('deleted'))
<div class="ui green message">
            <i class="close icon"></i>
            <div class="header">
              Your post was successfully Deleted.
            </div>
            <p>{{ Session::get('deleted') }}</p>
</div>
@endif


@if( count($errors) > 0 )
      <div class="ui red message">
            <i class="close icon"></i>
            <div class="header">
                  You have an error that occur
            </div>
            <ul class="list">
            
                  @foreach( $errors as $error)
                        <li>{{ $error }}</li>
                  @endforeach
            </ul>

      </div>
@endif