<!DOCTYPE html>
<html lang="en">
<x-head  title="JBLOGGS"/>
<body>
    <x-header home="/" read="/" contact="#contact" about="#about"/>
    {{-- Main Section Of the Web Page --}}
    <main>
        <div id="home" class="bg-black center">
            <div class="container">
                <div class="introLogo">
                    <img class="imgIntro" src="/images/logo_bg.png" alt="">
                </div>
                <div class="intro center">
                    <h2>JBloggs</h2>
                    <p>Welcome to JBlogg, your hub for inspiring and informative blogs. 
                        Discover a world of captivating narratives, thought-provoking opinions, 
                        and helpful insights. Join our vibrant community of writers and readers, 
                        where you can share your own unique voice and engage in meaningful 
                        conversations. 
                    </p>
                </div>
            </div>
            <div class="notify center">
                <input class="center" type="email" placeholder="Email for Notifications">
                <button class="btn bg-black text-c2 dim">Submit</button>
            </div>
        </div>
        <hr>

        <div class="center" id="about">
            <h2>About Us</h2>
            <p>
                Welcome to JBLOGGS, a cutting-edge blogging website founded by Kamran Jesar. 
                Our mission is to keep you informed and engaged with the latest in technology-related 
                content.
            </p>   
            
            <p>   
                At JBLOGGS, we are passionate about exploring new technologies and providing valuable 
                insights to our readers. Our team of dedicated writers and researchers work tirelessly 
                to bring you well-researched articles, covering a wide range of topics in the ever-evolving 
                world of technology.
            </p>  

            <p>   
                
                We understand the importance of staying up-to-date with the latest advancements, trends, and 
                breakthroughs in the tech industry. That's why we strive to deliver timely and informative 
                content that not only keeps you informed but also inspires and educates.
            </p>
                
            <p>   
                Our blog is a platform where you can find in-depth analysis, product reviews, industry news, 
                and thought-provoking opinion pieces. We believe in fostering a community where individuals 
                can share their knowledge, ideas, and experiences, creating a space for meaningful discussions.
            </p>
                
            <p>   
                In addition to keeping you informed about the latest tech-related content, we also emphasize 
                the importance of research-based ideas. We actively publish research articles, showcasing 
                innovative concepts and discoveries that push the boundaries of technology.
            </p>
                
            <p>   
                Whether you're a tech enthusiast, a professional in the industry, or simply curious about the 
                world of technology, JBLOGGS is your go-to destination. We aim to cater to a diverse audience, 
                providing valuable content that resonates with readers from all walks of life.
            </p>
                
            <p>   
                We are committed to excellence, ensuring that our articles are well-written, engaging, and 
                backed by solid research. Our goal is to make JBLOGGS a trusted source for technology-related 
                information and a hub for thought-provoking discussions.
            </p>
                
            <p>   
                Thank you for joining us on this exciting journey. We invite you to explore our blog, interact 
                with our community, and stay connected with us as we continue to deliver captivating content 
                that enriches your knowledge and understanding of the ever-evolving tech world.
            </p>
                
            <p>   
                Stay tuned, and let JBLOGGS be your guide to the fascinating realm of technology.
            </p>
        </div>
        <hr>
    </main>
    <x-footer/>
</body>
</html>