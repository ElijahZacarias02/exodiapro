<link href="https://unpkg.com/tailwindcss@1.0.0-beta.3/dist/tailwind.css" rel="stylesheet" />

<main>
  <article>
    <div class="section-wrapper">
      <section class="section latest-game" aria-label="latest game">
        <div class="container">
          <h2 class="h2 section-title">
            <span class="span">EVENTS</span>
          </h2>
          <div class="search-box border-white">
            <input class="text-white" type="text" onkeyup="search()" id="search" placeholder="Search for events...">
          </div>
          <div class="grid-container">

            <div class="col-12 bg-black container">
              <ul class="event-list">
                <li>
                  <?php foreach ($event as $row) { ?>
                    <div class="listul m-3 w-32">
                      <div class="block rounded-t overflow-hidden  text-center ">
                        <div class="bg-blue-500 text-white py-1">
                          <?php
                          $newDate = new DateTime($row['start_event']);
                          echo $newDate->format('M');
                          ?>
                        </div>
                        <div class="pt-1 border-l border-r border-white bg-white">
                          <span class="text-5xl">
                            <?php
                            $newDate = new DateTime($row['start_event']);
                            echo $newDate->format('d');
                            ?>
                          </span>
                          <span class="artist text-xs" style="color:#cc9900;">
                            <?php echo $row['name']; ?>
                          </span>
                        </div>
                        <div
                          class="border-l border-r border-b rounded-b-lg text-center border-white bg-white -pt-2 -mb-1">
                          <span class="text-sm">
                            <?php
                            $newDate = new DateTime($row['start_event']);
                            echo $newDate->format('l');
                            ?>
                          </span>
                        </div>
                        <div class="pb-2 border-l border-r border-b rounded-b-lg text-center border-white bg-white">
                          <span class="text-xs leading-normal">
                            <?php
                            $newDate = new DateTime($row['start_event']);
                            echo $newDate->format('h:i A');
                            ?>
                            to
                            <?php
                            $newDate = new DateTime($row['end_event']);
                            echo $newDate->format('h:i A');
                            ?>
                          </span>
                        </div>
                      </div>
                    </div>

                  <?php } ?>
                </li>
              </ul>
            </div>




            <div class="bg-white grid-item">
              <div class="card-body m-5">
                <h5 class="card-title " style="color:#d2b874;">
                  Add events!</h5>
                <br>

                <p><span id="success_notif" class="" style="color:green"></span></p>

                <form id="add_form">

                  <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label"><span class="">Name of artist</span></label>

                    <div class="form-floating">
                      <input type="text" class="form-control " id="name" name="name" placeholder="Input Name"
                        style=" border-color: green;">
                    </div>
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
                    <label for="dateTimeInput">From:</label>
                    <input type="datetime-local" id="start_event" name="start_event">
                    <label for="dateTimeInput">To:</label>
                    <input type="datetime-local" id="end_event" name="end_event">
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

          </div>
        </div>
    </div>
    </section>
  </article>
</main>

<script>
  $(document).on('click', '#add', function (e) {
    $.ajax({
      type: 'post',
      url: '<?= site_url('admin_calendar/insert') ?>',
      data: $('#add_form').serialize(),
      dataType: 'json',
      success: function (data) {
        console.log(data);


      }


    })
  });

  function search() {


    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    li = document.getElementsByClassName("listul");
    for (i = 0; i < li.length; i++) {
      a = li[i].getElementsByClassName("artist")[0];
      txtValue = a.textContent || a.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
      } else {
        li[i].style.display = "none";
      }
    }
  }
</script>