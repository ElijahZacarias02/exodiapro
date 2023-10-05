<div style="margin-top:150px;">
    <!-- start of search -->
    <div class="my-form container-events">
        <h2 class="h2 section-title">
            <span class="span">Events</span>
        </h2>

        <div class="grid search-div">
            <i class="fa fa-search search-icon"></i>
            <input class="search-input" type="search" placeholder="Search" id="search" onkeyup="search()" />
        </div>

        <li>
            <div class="grid-tab">
                <ul class="grid-ul">
                    <li class="grid-li nav-item active">
                        <a class="nav-link active" data-bs-toggle="pill" href="#tab1">
                            <button class="btn-grid" type="submit">
                                <span class="front">Upcoming</span>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#tab1">
                            <button class="btn-grid" type="submit">
                                <span class="front">Finished</span>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#tab1">
                            <button class="btn-grid" type="submit">
                                <span class="front">Cancelled</span>
                            </button>
                        </a>
                    </li>
                </ul>

            </div>
        </li>

    </div>

    <ul class="event-list">
        <section class="articles">

            <article class="grid-item addevent">
                <div class="article-wrapper">
                    <div class="article-body">
                        <a style="text-decoration: none;" href="#popup"><i class="fa fa-plus-circle"
                                aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </article>

            <?php foreach ($event as $row) { ?>
                <article class="grid-item">
                    <div class="listul article-wrapper">
                        <figure>
                            <img src="https://picsum.photos/id/1011/800/450" alt="" />
                        </figure>
                        <div class="article-body">
                            <h2>
                                <span class="artist">
                                    <?php echo $row['name']; ?>
                                </span>
                            </h2>
                            <h5 style="margin-bottom:20px;">
                                <?php echo date('F j, Y', strtotime($row['start_event'])); ?>
                            </h5>
                            <p>
                                <?php echo $row['description']; ?>
                            </p>
                            <div class="grid-container" style="grid-template-columns: auto auto ;">
                                <div class="grid-content">
                                    <a href="#" class="read-more">
                                        Read more
                                    </a>
                                </div>
                                <div class="grid-content">

                                    <button class="button-edit" type="button" onclick="edit()">edit</button>

                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            <?php } ?>


        </section>
    </ul>
</div>


<div class="my-form popup" id="popup">
    <div class="popup__content">
        <h2 class="heading-secondary">Adding Events</h2>
        <div role="alert" class="alert" id="errorMessage" style="display: none; color:red;"></div>
        <div class="bg-white grid-item">
            <div class="card-body m-5">
                <p><span id="success_notif" class="" style="color:green"></span></p>

                <form id="add_form">

                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label"><span class="">Name of Talent</span></label>
                        <select name="name" id="anme">
                            <option value="">Select</option>
                            <?php foreach ($talents as $row) { ?>

                                <option value="<?php echo $row['Name'] ?>">
                                    <?php echo $row['Name'] ?>
                                </option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class=" mb-2">
                        <label for="exampleInputEmail1" class="form-label"><span class="">Description</span></label>
                        <div class="form-floating">
                            <input type="text" class="form-control  " id="description" name="description"
                                placeholder="Description">
                        </div>
                    </div>
                    <br>
                    <div class=" mb-2">
                        <label for="dateTimeInput">Select a date and time:</label>
                        <label for="dateTimeInput">date:</label>
                        <input type="date" id="date" name="date">
                        <label for="dateTimeInput">Time:</label>
                        <label for="dateTimeInput">From:</label>
                        <input type="time" id="start_event" name="start_event">
                        <label for="dateTimeInput">To:</label>
                        <input type="time" id="end_event" name="end_event">
                        <br>
                    </div>

                    <div class="d-grid gap-2">
                        <center>
                            <button type="button" class=" btn-block text-bold " id="add">Add</button>
                        </center>
                    </div>

                </form>
            </div>

        </div>
        <a href="#" class="button">Close Popup</a>
    </div>
</div>

<div class="modal my-form" id="edit_modal" hidden>
    <div class="popup__content">
        <h2 class="heading-secondary">Adding Events</h2>
        <div role="alert" class="alert" id="errorMessage" style="display: none; color:red;">
        </div>
        <div class="bg-white grid-item">
            <div class="card-body m-5">
                <p><span id="success_notif" class="" style="color:green"></span></p>

                <form id="add_form">

                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label"><span class="">Name of Talent</span></label>
                        <select name="name" id="anme">
                            <option value="">Select</option>
                            <?php foreach ($talents as $row) { ?>

                                <option value="<?php echo $row['Name'] ?>">
                                    <?php echo $row['Name'] ?>
                                </option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class=" mb-2">
                        <label for="exampleInputEmail1" class="form-label"><span class="">Description</span></label>
                        <div class="form-floating">
                            <input type="text" class="form-control  " id="description" name="description"
                                placeholder="Description">
                        </div>
                    </div>
                    <br>
                    <div class=" mb-2">
                        <label for="dateTimeInput">Select a date and time:</label>
                        <label for="dateTimeInput">date:</label>
                        <input type="date" id="date" name="date">
                        <label for="dateTimeInput">Time:</label>
                        <label for="dateTimeInput">From:</label>
                        <input type="time" id="start_event" name="start_event">
                        <label for="dateTimeInput">To:</label>
                        <input type="time" id="end_event" name="end_event">
                        <br>
                    </div>

                    <div class="d-grid gap-2">
                        <center>
                            <button type="button" class=" btn-block text-bold " id="add">Add</button>
                        </center>
                    </div>

                </form>
            </div>

        </div>
        <a href="#" class="button">Close Popup</a>
    </div>
</div>

<script>
    //edit
    function edit() {
        $("#edit_modal").removeAttr("hidden");
    }
    //close edit

    //add
    $(document).on('click', '#add', function (e) {

        $.ajax({
            type: 'post',
            url: '<?= site_url('admin_calendar/insert') ?>',
            data: $('#add_form').serialize(),
            dataType: 'json',
            success: function (data) {

                if (data.response == 'false') {
                    $("#errorMessage").css('display', 'block');
                    $("#errorMessage").html(data.errors);
                } else {
                    $('#popup').hide();
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: data.errors,
                        confirmButtonText: 'OK',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                    }).then((result) => {
                        setTimeout("window.location.href='<?= site_url('admin_calendar/new_calendar') ?>'", 300);
                    })
                }

            }
        })
    });
    //close add
    //search
    function search() {

        var input,
            filter,
            ul,
            li,
            a,
            i,
            txtValue;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        li = document.getElementsByClassName("listul");

        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByClassName("artist")[0];
            txtValue = a.textContent || a.innerText;

            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            }

            else {
                li[i].style.display = "none";
            }
        }
    }

    //end search

</script>

<style>
    article {
        --img-scale: 1.001;
        --title-color: black;
        --link-icon-translate: -20px;
        --link-icon-opacity: 0;
        position: relative;
        border-radius: 16px;
        box-shadow: none;
        background: #fff;
        transform-origin: center;
        transition: all 0.4s ease-in-out;
        overflow: hidden;

    }

    article a::after {
        position: absolute;
        inset-block: 0;
        inset-inline: 0;
        cursor: pointer;
        content: "";
    }

    /* basic article elements styling */
    article h2 {
        margin: 0 0 18px 0;
        font-family: "Bebas Neue", cursive;
        font-size: 1.9rem;
        letter-spacing: 0.06em;
        color: var(--title-color);
        transition: color 0.3s ease-out;
    }

    figure {
        margin: 0;
        padding: 0;
        aspect-ratio: 16 / 9;
        overflow: hidden;
    }

    article img {
        max-width: 100%;
        transform-origin: center;
        transform: scale(var(--img-scale));
        transition: transform 0.4s ease-in-out;
    }

    .article-body {
        padding: 24px;
    }

    article a {
        display: inline-flex;
        align-items: center;
        text-decoration: none;
        /* color: #28666e; */
    }

    article a:focus {
        outline: 1px dotted #28666e;
    }

    article a .icon {
        min-width: 24px;
        width: 24px;
        height: 24px;
        margin-left: 5px;
        transform: translateX(var(--link-icon-translate));
        opacity: var(--link-icon-opacity);
        transition: all 0.3s;

    }

    /* using the has() relational pseudo selector to update our custom properties */
    article:has(:hover, :focus) {
        --img-scale: 1.1;
        --title-color: #28666e;
        --link-icon-translate: 0;
        --link-icon-opacity: 1;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
    }


    /************************ 
Generic layout (demo looks)
**************************/

    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }


    .articles {
        display: grid;
        max-width: 1200px;
        margin-inline: auto;
        padding-inline: 24px;
        grid-template-columns: repeat(auto-fill, minmax(250px, 4fr));
        gap: 24px;


    }

    @media screen and (max-width: 960px) {
        article {
            container: card/inline-size;
        }

        .article-body p {
            display: none;
        }
    }

    @container card (min-width: 380px) {
        .article-wrapper {
            display: grid;
            grid-template-columns: 100px 1fr;
            gap: 16px;
        }

        .article-body {
            padding-left: 0;
        }

        figure {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        figure img {
            height: 100%;
            aspect-ratio: 1;
            object-fit: cover;
        }
    }

    .sr-only:not(:focus):not(:active) {
        clip: rect(0 0 0 0);
        clip-path: inset(50%);
        height: 1px;
        overflow: hidden;
        position: absolute;
        white-space: nowrap;
        width: 1px;
    }




    /* add */
    .button {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        text-align: center;
        text-decoration: none;
        border-radius: 50px;
    }

    .popup {
        height: 100vh;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        background-color: rgba(0, 0, 0, 0.8);
        backdrop-filter: blur(10px);
        z-index: 9999;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s;
    }

    .popup:target {
        opacity: 1;
        visibility: visible;
    }

    .popup__content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 75%;
        padding: 20px;
        background-color: white;
        box-shadow: 0 2rem 4rem rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        overflow: hidden;
    }

    .popup__text {
        font-size: 1.4rem;
        margin-bottom: 4rem;
    }

    /* close add */
    .grid-ul {
        display: flex;
        justify-content: center;
    }

    .grid-ul li {
        list-style: none;
    }

    .active {
        background-color: var(--marigold) !important;
        color: var(--xiketic) !important;
        border-color: var(--marigold) !important;
    }

    /* search */
    .search-div {
        justify-content: center;
        margin-bottom: 10px;
        width: 100%;
    }

    .search-icon {
        padding: 20px;
        color: white;
    }


    .fa-plus-circle {
        font-size: 150px;
        position: absolute;
        top: 30%;
        right: 1px;
        width: 100%;
        text-align: center;
    }

    .addevent:hover {
        background-color: var(--marigold);
        color: var(--xiketic);
        border-color: var(--marigold);
    }

    .active {
        background-color: var(--marigold) !important;
    }
</style>