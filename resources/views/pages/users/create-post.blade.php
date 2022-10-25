
<div>
    <form action="{{'/create-post'}}" method="POST">
        {{ csrf_field() }}
        <h2 class="d-flex justify-content-center m-2">Create Post</h2>

        <div class="form-floating">
            <textarea name="post" id="post-area" cols="30" rows="10" class="form-control"></textarea>
        </div>


        <button class="btn btn-primary d-flex ms-auto px-5 mb-4 mt-4" id=" regBtn" type="submit">REGISTER</button>
    </form>
</div>
<style>
    #post-area{
        height: 250px;
    }
</style>
