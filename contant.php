<?php
include 'navbar.php'
?>


<div class="container">
<h2 class="text-center mt-3">todo list</h2>
<div class="row mt-3">

        <div class="col-md-6">

            <form id="form" method="post" action="form_action.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">title</label>
                    <input type="title" class="form-control" name="title" id="title" required>
                </div>
                <div class="form-group">
                    <label for="description">description</label>
                    <input type="text" class="form-control" name="description" id="description">
                </div>
                <input type="submit" class="btn btn-primary mt-2 " value="Submit" />
            </form>
        </div>
    </div>

    </div>



<?php
include 'footer.php'
?>