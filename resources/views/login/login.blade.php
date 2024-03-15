<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-green.min.css" />
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
	<div class="mdl-layout mdl-js-layout">
        <div id="login-conatiner" class="mdl-card mdl-shadow--16dp">
            <div class="mdl-card__supporting-text">
            	<div id="login-fab" class="mdl-color--accent mdl-color-text--white">
					<i id="lock-icon" class="material-icons">lock</i>
				</div>
				<div id="card-heading">
					Login
				</div>
                <form action="{{ url('login/loading') }}" method="post">
                    @csrf
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input type="text" class="mdl-textfield__input 
                        @error('username')
                            is-invalid
                        @enderror" id="username" name="username" autofocus/>
                        <label class="mdl-textfield__label" for="username">Username</label>
                        @error('username')
                        <script>
                            alert({{ $message }});
                        </script>
                        @enderror
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input type="password" class="mdl-textfield__input 
                        @error('password')
                            is-invalid
                        @enderror" id="password" name="password"/>
                        <label class="mdl-textfield__label" for="password">Password</label>
                        @error('password')
                        <script>
                            alert({{ $message }});
                        </script>
                        @enderror
                    </div>
                    <button id="login-button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">
                            Login
                        </button>
                </form>
            </div>
            <div class="mdl-card__actions">
            	<button class="mdl-button mdl-js-button mdl-button--primary">Register</button>
            </div>
        </div>
	</div>
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>