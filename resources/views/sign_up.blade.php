<!DOCTYPE html>
<html lang="en">
<head>
    <x-head title="Registeration"/>
</head>
<body>
    <x-header home="/" read="/" contact="#contact" about="/#about"/>
    <div class="signUpPage bg-black center">
        <form id="signUp" action="/register" method="POST">
            @csrf
            <fieldset class="bg-c1">
                <legend class="text-c2">JBLOGGS</legend>
                <h2 class="headingSign">Create your Account</h2>
                <x-input label="Name" name="name" type="text" placeholder='Enter Your Name'/>
                                
                <x-input label="Email" name="email" type="email" placeholder='Enter Your Email'/>
                
                <x-input label="Password" name="password" type="password" placeholder='Choose Your Password'/>

                <x-input label="Confirm Password" name="password_confirmation" type="password" placeholder='Confirm Your Password'/>
                
                <button type="submit" class="btn bg-c2 text-white dim">Register</button>
                <p class="regHere">Already have an Account?, Login <a class="text-c2 dim" href="/signin">here</a></p>
            </fieldset>
        </form>
    </div>
    <x-footer/>
</body>
</html>