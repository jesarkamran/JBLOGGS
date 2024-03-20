<!DOCTYPE html>
<html lang="en">
<x-head title="Post Blogg"/>
<body>
    <x-header-logged-in home="/dashboard" read="#read" profile=""  logout="/logout" userName="{{$name}}"/>
    <div class="p-5 ">
        <form class="" action="/post_blog" method="post" enctype="multipart/form-data">
            @csrf
            <div class="partition ">
                <label class="text-black" for="title">Title:</label>
                <input class="title w-max" type="text" name="title" placeholder="Write Title of Blogg">
            </div>

            <div class="partition content-div">
                <textarea id="blog-content" name="content" rows="10" cols = "75" placeholder="Write your blog here"></textarea>
            </div>
            
            <div class="partition">
                <label class="text-black" for="file">Add Image:</label>
                <input class="" type="file" name="image_url">
            </div>
            
            <button type="submit" class="btn publish bg-c2 text-white partition">Publish</button>
        </form>
    </div>
</body>
</html>