<div class="container col-md-12 ">
    @include('livewire.modals.modal')

    <div class="profile position-fixed float-end">
        <h2 class="mt-3" style="font-weight: 400; font-size: 30px;color:white">Recent Posts</h2>
        @if (session('message'))
            <div id="messagee" class="alert text-black text-center text-black">{{ session('message') }}</div>
        @endif
        <select class="form-select mb-1" wire:model.lazy="title" style="background-color: #097969;">
            <option value="All">All</option>
            <option value="Business">Business</option>
            <option value="Education">Education</option>
            <option value="Comedy">Comedy</option>
            <option value="Drama">Drama</option>
            <option value="Horror">Horror</option>
            <option value="Politics">Politics</option>
            <option value="Religion">Religion</option>
            <option value="Romance">Romance</option>
        </select>
        <div class="col p-3 shadow-sm rounded mb-5" id="write">
            <input type="text" class="write-2 form-control" placeholder="Search" wire:model.lazy="search">
        </div>
    </div>
    <div class="col-md-12">

        <div class="offset-4">
            @if (session('message'))
                <div id="messagee" class="alert text-black text-center text-black">{{ session('message') }}</div>
            @endif
            @foreach ($recents as $recent)
                <div class="card mt-3 {{ $recent->user->gender === 'Female' ? 'f1' : 'm1' }}" style="width: 500px">
                    <div class="card-header">
                        <span class="float-end" id="titlee">
                            <span class="float-end" id="titleee">{{ $recent->title }}</span>
                        </span>

                        <div>
                            <span class="time"
                                style="position:relative; top: 10px; left: -50px;">{{ $recent->created_at->format('g:i A') }}</span>
                        </div>
                    </div>

                    <div class="card-footer">

                        <div class="float-start d-flex flex-column justify-content-start">
                            <img class="card" style="border-radius: 50%; width: 80px;" id="pf1"
                                src="{{ $recent->user->gender === 'Male' ? asset('images/man.png') : asset('images/woman.png') }}"
                                alt="photo">

                            <p class="text-center">{{ $recent->user->name }}</p>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-star" viewBox="0 0 16 16" color="blue">
                                <path
                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                color="red" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z" />
                            </svg>
                        </div>

                    </div>
                    <div class="card-body bg-secondary d-flex align-items-center justify-content-between">
                        <div class="contentt"><span class="text-light">{{ $recent->content }}</span></div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            color="white" class="bi bi-share" viewBox="0 0 16 16">
                            <path
                                d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                        </svg>
                    </div>
                </div>
            @endforeach
        </div>
        @if ($recents->isEmpty())
            <div class="text-gray-500">
                <h1 class="text-center" style="font-size: 20px;">No posts.</h1>
            </div>
        @endif
        <button onclick="topFunction()" id="myBtn" title="Back to top"><i class="fa-solid fa-arrow-up"></i></button>
    </div>

    <style>
        .f1 {
            background-color: white;
        }

        .m1 {
            background-color: white;
        }

        .name {
            color: whitesmoke;
            font-size: 20px;
            text-decoration: none;
            cursor: pointer;
        }

        .name:hover {
            color: rgb(204, 202, 202);
        }

        .form-select {
            background-color: #2c70b1;
            color: whitesmoke;
        }

        #cardd {

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

        #write {}

        .write-2 {
            border-radius: 20px;
        }

        #lc {
            padding: 5px 50px 5px 50px;
            border-radius: 5px;
            cursor: pointer;
        }

        #lc:hover {
            background-color: rgba(89, 88, 88, 0.593);
        }

        .male {
            background-color: rgb(5, 5, 147);
            padding: 3px;
            border-radius: 3px;
        }

        .female {
            background-color: rgb(243, 27, 239);
            padding: 3px;
            border-radius: 3px;
        }

        .bisexual {
            background-image: linear-gradient(to left, violet, indigo, blue, green, rgba(255, 255, 0, 0.275), rgba(255, 166, 0, 0.407), red);
            padding: 3px;
            color: rgb(229, 220, 229);
            border-radius: 3px;
        }

        .transgender {
            background-image: linear-gradient(to left, rgb(42, 162, 242), rgb(206, 115, 189), rgb(245, 229, 246), rgb(206, 115, 189), rgb(42, 162, 242));
            padding: 3px;
            color: rgb(23, 17, 84);
            border-radius: 3px;
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
            color: red;
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

        .profile2 {
            width: 40px;
            border: 1px solid rgb(66, 65, 65);
            padding: 4px;
            height: 40px;
            border-radius: 50%;
        }
    </style>


    <script>
        // Get the button
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        // window.onscroll = function() {scrollFunction()};

        // function scrollFunction() {
        //   if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
        //     mybutton.style.display = "block";
        //   } else {
        //     mybutton.style.display = "none";
        //   }
        // }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        setTimeout(function() {
            var msg = document.getElementById("messagee");
            msg.parentNode.removeChild(msg);
        }, 1500);
    </script>
