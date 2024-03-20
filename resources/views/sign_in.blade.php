<!DOCTYPE html>
<html lang="en">
<head>
    <x-head title="Sign In"/>
</head>
<body>
    <x-header home="/" read="/" contact="#contact" about="/#about"/>
    <div class="signInPage bg-black center">
        <form id="signIn" action="/signin" method="POST">
            @csrf
            <fieldset class="bg-c1">
                <legend class="text-c2">JBLOGGS</legend>
                <h2 class="headingSign">Sign In to Your Account</h2>

                <span class="text-red">
                    @unless ($error="")
                    {{$error}}                        
                    @endunless
                </span>
                <x-input label="Username" name="email" type="email" placeholder='Enter Your Name'/>
                
                <x-input label="Password" name="password" type="password" placeholder='Enter Your Password'/>
                
                <button class="btn bg-c2 text-white dim">Forgot Password</button>
                <button type="submit" class="btn bg-c2 text-white dim">Sign In</button>
                <p class="regHere">Don't have an Account?, Get registered <a class="text-c2 dim" href="/register">here</a></p>
            </fieldset>
        </form>
    </div>
    <x-footer/>
</body>
</html>