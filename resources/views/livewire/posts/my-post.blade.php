<div class="div">
    @include('livewire.modals.modal')
    <div class="container">
        <div class="shadow-md position-fixed float-end mt-4" id="write">
            <button class="write-2 form-control" style="color:white;background-color: #0a852f; width:130px;"
                data-toggle="modal" data-target="#click">Create post</button>
        </div>
        <div class="post-body">


            <div class="container d-flex align-items-center justify-content-center">
                <div class="row gy-3">
                    <div class="col-md-5">

                        @foreach ($posts as $post)
                            <div class="card shadow-md mt-3 {{ $post->user->gender === 'Female' ? 'f1' : 'm1' }}"
                                style="width: 500px">
                                <div class="card-header">
                                    @if ($post->isEditable())
                                        <span id="dot-icon" class="float-end dropdown dropstart bg-success">
                                            <span class="fa-solid fa-edit text-light" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false"></span>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" data-toggle="modal"
                                                        data-target="#click-delete"
                                                        wire:click="delete({{ $post->id }})">Delete</a></li>
                                                <li><a class="dropdown-item" data-toggle="modal"
                                                        data-target="#click-edit"
                                                        wire:click="editPosts({{ $post->id }})">Edit</a></li>
                                            </ul>
                                        </span>
                                    @endif
                                    <span class="float-end" id="titlee">
                                        <span class="float-end" id="titleee">{{ $post->title }}</span>
                                    </span>
                                    <div class="container">

                                        <div class="float-center d-flex align-items-center justify-content-start">
                                            <img class="card" style="border-radius: 50%; width: 80px;" id="pf1"
                                                src="{{ $post->user->gender === 'Male' ? asset('images/man.png') : asset('images/woman.png') }}"
                                                alt="photo">

                                        </div>
                                        <p style="margin-left:4px;">{{ $post->user->name }}</p>
                                    </div>
                                    <span class="time text-primary"
                                        style="position:relative; top: 10px; left: -30px;">time posted:
                                        {{ $post->created_at->format('g:i A') }}</span>
                                </div>


                                <div class="card-body bg-secondary">
                                    <div class="contentt"><span class="text-light">
                                            {{ $post->content }}</span></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
        @if ($posts->isEmpty())
            <div class="text-gray-500">
                <h1 class="text-center" style="font-size: 20px;">No posts.</h1>
            </div>
        @endif
        <button onclick="topFunction()" id="myBtn" title="Back to top"><i class="fa-solid fa-arrow-up"></i></button>
    </div>
</div>

<style>
    .f1 {
        background-color: lightpink;
    }

    .m1 {
        background-color: rgb(227, 233, 235);
    }

    #text-area {
        border: none;
        background-color: transparent;
        resize: none;
        outline: none;
        color: black;
    }

    .name {
        color: whitesmoke;
        font-size: 20px;
        text-decoration: none;
    }

    .name:hover {
        color: rgb(204, 202, 202);
    }

    #write {
        color: white;
    }

    .write-2 {
        border-radius: 20px;
        color: white;
    }

    .write-2:hover {
        background-color: rgba(255, 255, 255, 0.789);
    }

    #modall {

        margin-top: 20%;
    }

    .title1 {
        margin-left: 38%;
    }

    .title2 {
        margin-left: 35%;
    }

    .title3 {
        margin-left: 8%;
    }

    .close {
        border-radius: 50%;
        background-color: rgb(65, 64, 64);
        border: 1px solid rgb(65, 64, 64);
        width: 30px;
    }

    .close span {
        color: whitesmoke;
    }

    .close:hover {
        background-color: rgb(125, 121, 121);
    }

    #cardd {
        background-color: rgba(116, 115, 115, 0.661);
        color: whitesmoke;
    }

    .time {
        font-size: 13px;
        margin-left: 45px;
        opacity: 0.8;
    }

    .contentt span {
        font-size: 19px;
    }

    #titlee {
        color: rgb(21, 21, 103);
        font-weight: bold;
        font-style: italic;
        font-size: 14px;
        opacity: 0.8;
    }

    #titleee {
        margin-right: 15px;
        margin-top: 5px;
    }

    #genderr {
        color: rgb(21, 21, 103);
        font-weight: bold;
        font-style: italic;
        font-size: 13px;
        opacity: 0.8;
    }

    .alert {
        background-color: rgba(0, 0, 0, 0.12);
    }

    .form-select {
        background-color: #2c70b1;
        color: whitesmoke;
    }

    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 40px;
        z-index: 99;
        font-size: 25px;
        border: none;
        outline: none;
        background-color: rgb(3, 126, 138);
        color: rgb(255, 255, 255);
        cursor: pointer;
        border-radius: 4px;
        padding: 5px 10px 5px 10px;
    }

    #myBtn:hover {
        background-color: rgb(12, 142, 154);
    }

    #lc {
        padding: 5px 50px 5px 50px;
        border-radius: 5px;
        cursor: pointer;
    }

    #lc:hover {
        background-color: rgba(89, 88, 88, 0.593);
    }

    .font-icon {
        font-size: 30px;
        border-radius: 50%;
        padding: 2px;
        opacity: 0.8;
        color: rgb(241, 241, 33);
    }

    .font-icon-heart {
        font-size: 30px;
        border-radius: 50%;
        padding: 2px;
        color: green;
        opacity: 0.8;
    }

    #dot-icon {
        padding: 5px 12px 5px 12px;
        background-color: rgb(206, 204, 204);
        border-radius: 50%;
        cursor: pointer;
    }

    #dot-icon:hover {
        background-color: rgb(230, 224, 224);
        ;
    }

    #submit-button:disabled {
        cursor: not-allowed;
        pointer-events: all !important;
    }

    .profile2 {
        width: 40px;
        border: 1px solid rgb(66, 65, 65);
        padding: 4px;
        border-radius: 50%;
    }
</style>

<script>
    // Get the button
    let mybutton = document.getElementById("myBtn");


    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    document.getElementById('submit-button').disabled = true;

    document.getElementById('text-area').addEventListener('keyup', e => {
        //Check for the input's value
        if (e.target.value == "") {
            document.getElementById('submit-button').disabled = true;
        } else {
            document.getElementById('submit-button').disabled = false;
        }
    });
</script>
