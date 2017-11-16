@if( count($errors) > 0 )
    @foreach($errors->all() as $error)
        <!-- Modal -->
        {{--  <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="errorModalTitle">Error</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Whoops... something errors :)
                        {{$error}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>  --}}
       <div class="alert alert-danger" role="alert">
            <strong>FeelsBadMan</strong> <a href="/posts/create" class="alert-link">Change a few things up</a> and try submitting again.
        </div>
    @endforeach
@endif

<!-- Session Success -->
@if(session('Success'))
    {{--  <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                {{session('Success')}}
            </div>
        </div>
    </div>  --}}
    <div class="alert alert-success" role="alert">
        <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
        {{session('Success') }}
    </div>
@endif  


<!--Session Errors -->
@if(session('Error'))
    {{--  <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                {{session('Error')}}
            </div>
        </div>
    </div>  --}}
    <div class="alert alert-warning" role="alert">
        <strong>Warning!</strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good</a>.
        {{session('Error') }}
    </div>

@endif  