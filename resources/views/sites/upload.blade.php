@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
    
                

                   <!-- Main content -->
      <section class="content"  id="dashboard">

        <body>
            
            <form action="ImportSites" method="post" enctype="multipart/form-data">
                <label> Upload File</label> <br>
                <input type="file" name="file"/> <br>
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                <input type="submit" value="Upload">
              

            </form>
        </body>

        
      </section> 
       </div>
       
     </div>
</div>
@endsection