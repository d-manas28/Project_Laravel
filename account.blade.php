@extends('Homepage')

@section('content')

<form action="validation" method="POST"> 
                <div class="row login bodyforform">
                    <div class="col s12 l4 offset-l4">
                        
    <div style="padding: 20px;">

        </div>
                        <div class="card">
                            
                            <div class="card-action red darken-1 white-text">
                                <h3>
                                    LOG IN
                                </h3>
                            </div>
                            <div class="card-content">
                                <div class="form-field">
                                    <label for="User Email">Enter Email Address</label>
                                    <input type="email" id="emailaddress">
                                </div><br>
                             <div class="form-field">
                                        <label for="Password">Enter Your Password</label>
                                        <input type="password" id="password">            
                            </div>
                            
                            <br>
                            
                            <div class="form-field">
                                <label for="priority">Not Registered Yet?</label>
                            </br>
                            
                            <button class="btn-small red darken-1 z-depth-2">
                                    <a href="account2" style="text-decoration: none; color: white">    
                                Sign Up
                                    </a>
                            </button>    
    
                            </div>
                            <br>
                            
                            <div class="form-field center-align">
                                    <button class="btn-large red darken-1 z-depth-5">Sign In</button>
                                </div><br>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


@endsection