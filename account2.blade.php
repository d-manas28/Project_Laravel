@extends('Homepage')

@section('content')

<form action="registration" method="POST"> 
                <div class="row login bodyforform">
                    <div class="col s12 l4 offset-l4">
                        
    <div style="padding: 10px;">

        </div>
                        <div class="card">
                            
                            <div class="card-action red darken-1 white-text">
                                <h3>
                                    SIGN UP
                                </h3>
                            </div>
                            <div class="card-content">
                                <div class="form-field">
                                    <label for="User EmAail">Enter Name: </label>
                                    <input type="text" id="name" name="name">
                                </div><br>
                                <div class="form-field">
                                    <label for="User EmAail">Enter Email Address</label>
                                    <input type="email" id="emailaddress" name="email">
                                </div><br>
                             <div class="form-field">
                                        <label for="Password">Enter Your Password</label>
                                        <input type="password" id="password" name="password">            
                            </div>
                            <div class="form-field">
                                    <label for="Password">Confirm Password</label>
                                    <input type="password" id="password" name="conpssword">            
                            </div>                            
                            <br>
                            
                            <div class="form-field">
                                <label for="priority">Already Have An Account?</label>
                            </br>
                           
                                <button class="btn-small red darken-1 z-depth-2">
                                        <a href="account" style="text-decoration: none; color:white;">
                                    Log In
                                        </a>   
                                </button>    
                            </div>
                            <br>
                            
                            <div class="form-field center-align">
                                    <button class="btn-large red darken-1 z-depth-5">Register</button>
                                </div><br>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


@endsection