@extends('Homepage')

@section('content')

<div class="container">

<div class="center">
    <table class="highlight">
        <thead>
            <tr>
                <th>Process Name</th>
                <th>Priority</th>
                <th>Time Alloted</th>
            </tr>
        </thead>	
        <tbody>
        @if(count($errors) > 0)
  <div class="red-text">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="green-text">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif
        </tbody>
    </table>
</div>
<form action="{{url('dashboarddata')}}" method="POST">
{{csrf_field}}
<div class="form-field center-align">
                    <button class="btn-large red darken-1 z-depth-5">
                        <a href="insertProcess.php" style="text-decoration:none;color:white;">
                        ADD PROCESS
                        </a>
                    </button>
                </div><br>
            <div class="form-field center-align">
                    <button class="btn-large red darken-1 z-depth-5">
                        <a href="finalwindow.php" style="text-decoration:none;color:white;">
                        START
                        </a>
                    </button>
                </div><br>
            </br>
             <div class="form-field center-align">
            <button class="btn-small red darken-1 z-depth-2">
                            <a href="signout.php" style="text-decoration: none; color: white">    
                        Sign Out
                            </a>
                    </button>    
            </div></br>

</div>
</form>
</div>

@endsection