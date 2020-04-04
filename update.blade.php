@extends('Homepage')
<?php

//update window
	session_start();
?>

@section('content')
<body>
        <form action="{{url('finaldeletion')}}" method="POST"> 
                <div class="row login bodyforform">
                    <div class="col s12 l4 offset-l4">
                        
    <div style="padding: 20px;">

        </div>
                        <div class="card">
                            
                            <div class="card-action red darken-1 white-text">
                                <h4>
                                    DELETE YOUR COMPLETED PROCESS
                                </h4>
                            </div>
                            <div class="card-content">
                                <div class="form-field">
                                    <label for="User Email">ENTER PROCESS NAME</label>
                                    <input type="text" id="processname" name="processname">
                                </div><br> 
                            <button class="btn-small red darken-1 z-depth-2">
                                    <a href="finaldeletion.php" style="text-decoration: none; color: white">    
                                DELETE
                                    </a>
                            </button>    
    
                            </div>
                            <br>
                            
                            </div>
                        </div>
                    </div>
            </form>


            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
          
</body>
</html>
@endsection