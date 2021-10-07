<?php

include('config/constants.php');

include('partials/header.php');
include('partials/menu.php');

?>


<h2>mom</h2>

<div class="home" id="app">
<ul>

    <li v-for="aaa in home" v-on:click="mymom(aaa.mom)">
        {{aaa.mom}}
    </li>

</ul>
</div>


<?php include('partials/footer.php'); ?>