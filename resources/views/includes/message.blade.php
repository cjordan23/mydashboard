@if(Session::has('success'))
<div class="alert alert-success" role="alert">
            <i class="close icon"></i>
           
              Your post was successfully created.
            
            <p>{{ Session::get('success') }}</p>
</div>
@endif

@if(Session::has('updated'))
<div class="alert alert-primary">
            <i class="close icon"></i>
            
              Your post was successfully Updated.
           
            <p>{{ Session::get('updated') }}</p>
</div>
@endif


@if(Session::has('deleted'))
<div class="alert alert-danger">
            <i class="close icon"></i>
            
              Your post was successfully Deleted.
            
            <p>{{ Session::get('deleted') }}</p>
</div>
@endif


@if( count($errors) > 0 )
      <div class="alert alert-warning">
            <i class="close icon"></i>
            
                  You have an error that occur
            
            <ul class="list">
            
                  @foreach( $errors as $error)
                        <li>{{ $error }}</li>
                  @endforeach
            </ul>

      </div>
@endif