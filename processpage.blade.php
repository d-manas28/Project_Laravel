
@extends(('Homepage')


@section('content')
<htmL>
<body>
    <form action="insertProcess.php" method="POST"> 
        <div class="row login bodyforform">
            <div class="col s12 l4 offset-l4">
                <div class="card">
                    <div class="card-action red darken-1 white-text">
                        <h4>
                            Welcome To The Process Control Box <br>
                            <!-- Printing the Username, using sessions -->
                            <!-- 
                            //echo S_SESSION['username'];
                            ?> -->
                        </h4>
                    </div>
                    <div class="card-content">
                        <div class="form-field">
                            <label for="pname">Name Your Process</label>
                            <input type="text" id="pname" name="processname">
                        </div><br>
                     <div class="form-field">
                                <label for="priority">Set Process Priority</label>
                                <div style="padding-top: 20px;"> </div>
                            <p>
                                <label>
                                <input name="priority" type="radio" value = 5 checked/>
                                <span class="myspan">Lowest</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                <input name="priority" type="radio" value = 4/>
                                <span class="myspan">Low</span>
                                </label>
                            </p>
                            
                            <p>
                                <label>
                                <input name="priority" type="radio" value = 3/>
                                <span class="myspan">Medium</span>
                                </label>
                            </p>
    
                            <p>
                                <label>
                                <input name="priority" type="radio" value = 2/>
                                <span class="myspan">High</span>
                                </label>
                            </p>
    
                            <p>
                                <label>
                                <input name="priority" type="radio" value = 1/>
                                <span class="myspan">Highest</span>
                                </label>
                            </p>
                    </div><br>
                    
                    <div class="form-field">
                        <label for="priority">Choose Your Time Quantam</label>
                        <div style="padding-top: 20px;"> 
                        <sub class="myspan">The Range Is In Terms of Minutes</sub>
                        </div>
                        <label>
                        <p class="range-field">
                           <input type = "range" name="quantam" class="range" id="quantamTime" min="5" max="360"/>
                        </p>
                        </label>    
                    </div>
                    <br>
                    
                    <div class="form-field center-align">
                            <button class="btn-large red darken-1 z-depth-5">
                                <a href="insertProcess.php" style="text-decoration:none;color:white;">
                                ADD PROCESS
                                </a>
                            </button>
                        </div><br>
                    <div class="form-field center-align">
                            <button class="btn-large red darken-1 z-depth-5">
                                <a href="dashboard.php" style="text-decoration:none;color:white;">
                                VIEW AND START
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
                </div>
            </div>
        </div>
    </form>
    @endsection
     <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

</body>
</html>