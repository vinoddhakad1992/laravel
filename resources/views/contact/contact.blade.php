<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" role="form" method="POST" action="{{url('contact')}}" id="my-form" enctype="multipart/form-data">
                 @csrf
                <div class="form-group">
                    <label class="col-md-4 control-label">name</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">email</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="email">
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-md-4 control-label">Image</label>
                    <div class="col-md-6">
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>
                 <div class="form-group">
                    
                    <div class="col-md-6">
                        <input type="submit" class="form-control" name="submit">
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/proengsoft/laravel-jsvalidation/public/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\ContactRequest', '#my-form'); !!}