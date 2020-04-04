@extends('Homepage')

<script src="jquery-3.3.1.min.js"></script>
<script src="TimeCircles/TimeCircles.js"></script>
<link rel="stylesheet" type="text/css" href="TimeCircles/TimeCircles.css">

@section('content')
<!-- fetching data -->
@if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

<center>
<div data-date="<?php echo $row->quantam; ?>" id="count-down"></div>
</center>
<br><br>
<center>
<div class="container">
        <button class="btn-small red darken-1 z-depth-2">
<a href="update.php" style="text-decoration: none; color: white">
	Update Process
</a>
        </button>	

	</div>
<script>
    $(function () {
        $("#count-down").TimeCircles({
        	"animation": "smooth",
    "bg_width": 2.1,
    "fg_width": 0.07333333333333333,
    "circle_bg_color": "#60686F",
    "time": {
        "Days": {
            "text": "Days",
            "color": "#FFCC66",
            "show": false
        },
        "Hours": {
            "text": "Hours",
            "color": "#99CCFF",
            "show": false
        },
        "Minutes": {
            "text": "Minutes",
            "color": "#BBFFBB",
            "show": true
        },
        "Seconds": {
            "text": "Seconds",
            "color": "#FF9999",
            "show": true
        }
    }
        });
    });
</script>
@endsection